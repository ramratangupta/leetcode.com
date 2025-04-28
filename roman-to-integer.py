class Solution:
    def romanToInt(self, s: str) -> int:
        roman_map = {
            'I':1,
            'V':5,
            'X':10,
            'L':50,
            'C':100,
            'D':500,
            'M':1000
            }
        i = 0
        result = 0
        while i<len(s):
            curVal = roman_map[s[i]]
            if i+1<len(s):
                nextVal = roman_map[s[i+1]]
                if curVal<nextVal:
                    result +=(nextVal-curVal)
                    i+=2
                else:
                    result +=curVal
                    i+=1
            else:
                result +=curVal
                i+=1
        return result