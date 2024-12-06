import sys

def calculatePi(digits):
    try:
        digits = int(digits) 
    except ValueError:
        return "Input must be an integer!"

    result = 0
    for i in range(digits):
        result += (-1) ** i * (4 / (2 * i + 1))  
    return result

if digits == int:
        print(calculatePi(digits)) 
elif digits!= int:
        print("Input must be a number!")
else:
        print("Please provide a valid input.") 

