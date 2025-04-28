class Solution:
    def isPalindrome(self, x: int) -> bool:
        if(x<0):
            return False
        
        original_num = x
        reverseNumber = 0
        while x!=0:
            lb = x%10
            x = x//10
            print(f"LB{lb},newx {x}")
            reverseNumber = reverseNumber*10 + lb
        if reverseNumber == original_num:
            return True
        else :
            return False

