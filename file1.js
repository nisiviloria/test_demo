Comparison
In JavaScript, numbers can be compared using the following relational and equality operators.

----VEHICLE PURCHASE---
Task 1 - determine if you will need a drivers license

1. needsLicense
Purpose: Determine if a license is required for a specific type of vehicle.

Parameters:

kind: A string representing the type of vehicle.
Returns:

A boolean (true or false).
Logic:

If kind is 'car' or 'truck', the function returns true (indicating a license is required).
For any other kind, it returns false (indicating a license is not required).

2. chooseVehicle
Purpose: Help choose between two vehicle options by recommending the one that comes first in dictionary order.

Parameters:

option1: A string representing the first vehicle option.
option2: A string representing the second vehicle option.

Returns:
A string recommending which option is better based on dictionary order.
Logic:

Compare option1 and option2 lexicographically.
If option1 comes before option2 in dictionary order, return a sentence recommending option1.
Otherwise, return a sentence recommending option2 

3. calculateResellPrice
Purpose: Estimate the resale price of a used vehicle based on its original price and age.

Parameters:

originalPrice: The initial price of the vehicle.
age: The age of the vehicle in years.

Returns:
A number representing the estimated resale price.

Logic:
If the vehicle is less than 3 years old, its resale price is 80% of the original price.
If the vehicle is older than 10 years, its resale price is 50% of the original price.
For vehicles between 3 and 10 years old, the resale price is 70% of the original price.

age less than < 3
age greater then > 10 

- The comparison result is always a boolean value: true or false.