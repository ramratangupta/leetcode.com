//get[{name, id, address, age},{name, id, address, age}

// /users
// /users
// name
// adress
// age
// minage
// maxage

// sortByName
// sort
// /user
const users = [
    {name:"Ram", id:1, address:"Delhi", age:40},
    {name:"Ram1", id:2, address:"Gurugram", age:18},
    {name:"Shyam", id:3, address:"Noida", age:30},
    {name:"Alok", id:4, address:"Gurugram", age:35},
];
//Single User Search
//path based query string based 
app.reqest("/api/user",request,response){
    try{
        const userId = request.get("userid");
        if(userId!=undefined && typeof userId == Number){
            const filterUsers = users.filter((user)=>{
                return user.id===userId;
            });
            if(filterUsers.length==1){
                response.send(200,filterUsers[0]);
            }else{
                response.send(404,{"errror":"user Not found"});
            }
        }//What will status code for this case 
    }catch(e){
        response.send(500,{"errror":"Error while processing"});
    }
}


//Multi User Search
// name
// adress
// age
// minage
// maxage
app.reqest("/api/users",request,response){
    try{
        const adress = request.get("adress");
        const name = request.get("name");
        const age = request.get("age");
        const minage = request.get("minage");
        const maxage = request.get("maxage");
        const sortBy = request.get("sortBy");
        var filterUsers = [];
        if((adress!=undefined && typeof adress == String) ||
        (name!=undefined && typeof name == String) || 
        (age!=undefined && typeof age == Number) || 
         (minage!=undefined && typeof minage == Number) || 
         (maxage!=undefined && typeof maxage == Number) || 
        ){
            const filterUsers = users.filter((user)=>{
                return user.name==name && user.age == age
            });
            
        }else{
         filterUsers =    users;
        }
        if(filterUsers.length>0){
                response.send(200,filterUsers);
            }else{
                response.send(404,{"errror":"user Not found"});
            }
    }catch(e){
        response.send(500,{"errror":"Error while processing"});
    }
}
SOLID
ACID
2nd 3rd normal form
NAT / I
Micro tick and Macro Tick
Promise and Async await is extenstion or same
