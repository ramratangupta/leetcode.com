function twoSum(nums: number[], target: number): number[] {
    let perMap = {};
    for(let i = 0; i< nums.length; i++){
        let diff = target - nums[i];
        if(perMap.hasOwnProperty(diff)){
            return [perMap[diff],i];
        }
        perMap[nums[i]] = i;
        
    }
    return [];
}
