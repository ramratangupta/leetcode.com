class Solution {
    /**
     * @param {string[]} strs
     * @returns {string}
     */
    encode(strs) {
        return strs.map(s=>s.length+"#"+s).join("")
    }

    /**
     * @param {string} str
     * @returns {string[]}
     */
    decode(str) {
        let lenght = str.length;
        let i = 0;
        let results = [];
        while (i<lenght){
            let j = i;
            while(str[j]!="#"){
                j++;
            }
            let wordLength = parseInt(str.substring(i,j));
            i = j+1;
            j = i+wordLength;
            results.push(str.substring(i,j));
            i=j;

        }
        return results;
    }
}

