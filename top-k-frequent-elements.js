class Solution {
    /**
     * @param {number[]} nums
     * @param {number} k
     * @return {number[]}
     */
    topKFrequent(nums, k) {
        let count = {};
        for (let n of nums){
            count[n] = (count[n]??0)+1;
        }
        let keyValCountPairs = [];
        Object.keys(count).forEach(k=>{
            keyValCountPairs.push({number:k,frequency:count[k]})
        });
        keyValCountPairs.sort((a,b)=> a.frequency-b.frequency)
        let result =  [];
        for(let i = 0; i<k;i++){
            let curTop = keyValCountPairs.pop();
            result.push(curTop.number);

        }
        return result;
    }
}

