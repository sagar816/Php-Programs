<?php

/*
A prime is a natural number greater than 1 that has no positive divisors other than 1 and itself.

We can check till sqrt(n) because a larger factor of n must be a multiple of smaller factor that has been already checked.

We will traverse in the range [2, sqrt(number)] to check if the number is divisible by any number or not.
If it is divisible then it's not a prime number.

*/

