# PHP Unset() function unexpected behavior in numeric arrays
This repository demonstrates an uncommon bug in PHP related to the `unset()` function's behavior when used on numeric arrays.  When you remove elements from a numerically indexed array using `unset()`, the remaining elements' keys do not reindex automatically, causing the iteration to skip elements.

## Bug Description:
The `unset()` function in PHP, when used on a numeric array, does not reindex the remaining elements. This means if you remove an element, the next element will have a key larger than the previous element and iteration may skip an element.

## How to Reproduce:
Clone this repository and run `bug.php`. Observe the unexpected output.

## Solution:
The solution is to iterate through the array in reverse to avoid this issue. See `bugSolution.php` for the corrected code.
