class Solution {
    /**
     * @param {number[]} nums
     * @return {number[]}
     */
    productExceptSelf(nums) {
        console.log(nums)
        let n = nums.length;
        let prefixVals = new Array(n);
        prefixVals[0] = 1;
        for (let i = 1; i<n; i++){
            prefixVals[i] = prefixVals[i-1] * nums[i-1];
        }
        let postVals = new Array(n);
        postVals[n-1] = 1;
        for (let i=n-2;i>=0;i--){
            postVals[i] = postVals[i+1] * nums[i+1]
        }
        let result = [];
        console.log(prefixVals,postVals )
        for (let i = 0;i<n;i++){
            result.push((prefixVals[i]*postVals[i]));
        }
        return result;
    }
}
//https://neetcode.io/problems/products-of-array-discluding-self
