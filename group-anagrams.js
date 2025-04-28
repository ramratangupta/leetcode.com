class Solution {
    /**
     * @param {string[]} strs
     * @return {string[][]}
     */
    groupAnagrams(strs) {
        const res = {};
        for (let s of strs){
            let count = {a:0,b:0,c:0,d:0,e:0
            ,f:0,g:0,h:0,i:0,j:0,k:0,l:0,m:0,n:0,o:0,p:0
            ,q:0,r:0,s:0,t:0,u:0,v:0,w:0,x:0,y:0
            ,z:0
            };
            for (let c of s){
                count[c] = (count[c]??0) + 1
            }
            const k = Object.values(count).join(",")
            if(!res.hasOwnProperty(k)){
                res[k] = [];
            }
            res[k].push(s)
        }
        return Object.values(res)
    }
}

