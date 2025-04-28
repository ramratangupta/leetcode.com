function isAnagram(s: string, t: string): boolean {
    if (s.length!=t.length){
        return false;
    }
    let sCount = {};
    let tCount = {};
    for (let i = 0;i<s.length; i++){
        if(sCount.hasOwnProperty(s[i])){
            sCount[s[i]] = sCount[s[i]]+1;
        }else{
             sCount[s[i]] = 1;
        }
        if(tCount.hasOwnProperty(t[i])){
            tCount[t[i]] = tCount[t[i]]+1;
        }else{
             tCount[t[i]] = 1;
        }
    }
    
    for (let k in sCount) {
        if(sCount[k] !==tCount[k]){
            return false;
        }
           
    }
    return true;
    
}
