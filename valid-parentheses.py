#https://leetcode.com/problems/valid-parentheses/
class Solution:
    def isValid(self, s: str) -> bool:
        
        B = []
        mapping = {')':'(','}':'{',']':'['}
        for cur in s:
            if B and (cur == ')' or cur == '}' or cur == ']'):
                x = B.pop()
                if x!=mapping[cur]:
                    return False
            else:
                B.append(cur)
        if len(B) == 0:
            return True
        else:
            return False
        