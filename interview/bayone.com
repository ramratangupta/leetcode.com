<?php
system("/usr/bin/sed -i /s/pttern to search/patern to replace/g");

....

Pgination
Cacheing
on each page number data will be feched from databases and shown to user
on database level offset and limits or primary Id 

....

import React from 'react';

class Hello extents from React.Component {
	constuctor(props){
		super(porps);
		this.state = {name:"Ram"};
	}
	render(){
		return <>
			Hi {this.name}
			<a >U</a>
		<>;
	}
	
}
....



setTimeout(() => {
  console.log("setTimeout 1");
}, 0);
 
setImmediate(() => {
  console.log("setImmediate 1");
});
 
Promise.resolve().then(() => {
  console.log("Promise 1");
  process.nextTick(() => {
    console.log("nextTick 1 inside Promise 1");
  });
});
 
process.nextTick(() => {
  console.log("nextTick 2");
});
 
setTimeout(() => {
  console.log("setTimeout 2");
}, 0);
 
Promise.resolve().then(() => {
  console.log("Promise 2");
});
 
setImmediate(() => {
  console.log("setImmediate 2");
});
 
console.log("End");


setImmediate 1
setTimeout 1
Promise 1
nextTick 2
Promise 2
setTimeout 2
setImmediate 2
End

End
nextTick 2
Promise 1
Promise 2
nextTick 1 inside Promise 1
setTimeout 1
setTimeout 2
setImmediate 1
setImmediate 2

......
function findPair(arr){
	for(let i=0; i<arr.length; i++){
		for(let j=1; j<arr.length-1; j++){
			if(arr[i]+arr[j]==10){
				return [arr[i],arr[j]];
			}
		}	
	}
}



