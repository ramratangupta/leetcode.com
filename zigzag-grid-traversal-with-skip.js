/**
 * https://leetcode.com/problems/zigzag-grid-traversal-with-skip/
 * @param {number[][]} grid
 * @return {number[]}
 */
var zigzagTraversal = function(grid) {
    let n = grid.length;
    let m = grid[0].length;
    var output = [];
    if(2<= n && n <=50 && 2<= m && m <=50){
        for(let i = 0;i<n;i++){
            
            var row = grid[i];
            let set = new Set(row);
            if(Math.min(...set)>=1 && Math.max(...set)<=2500){
                for(let j = 0; j<m;j++){  
                    //console.log("i",i,"j",j,"i+j",(i+j),"%2",((i+j)%2),"val",row[j])                  
                    if((i+j)%2==0){
                        output.push(row[j]);
                    }
                }
            }else{
                output=[];
                break;
            }
            
        }
    }else{
        return [];
    }
    return output;
};