import sys
digits= input("Type a number: ")
def calculatePi(digits):
    
    try:
        digits = int(digits) 
    except ValueError:
        return "Input must be an integer!"

    result = 0
    for i in range(digits):
        result += (-1) ** i * (4 / (2 * i + 1))  
    print(result)

calculatePi(digits)
