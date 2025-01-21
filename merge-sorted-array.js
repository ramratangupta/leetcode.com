/**
 * @param {number[]} nums1
 * @param {number} m
 * @param {number[]} nums2
 * @param {number} n
 * @return {void} Do not return anything, modify nums1 in-place instead.
 */
var merge = function(nums1, m, nums2, n) {
    if(m==0){
        for(let i=0;i<nums1.length;i++ ){
            nums1[i]=nums2[i];
        }
    }else if(n==0){
        for(let i=0;i<nums1.length;i++ ){
            nums1[i]=nums1[i];
        }
    }else{
        let length = nums1.length-1
        for(let i=0;i<n;i++ ){
            nums1[(length-i)]=nums2[i];
        }        
    }
    nums1.sort((a,b)=>a-b);
};