# Challenge –Backend Developer
Write a program that prints all the numbers from 1 to 100. However, for multiples of 3,
instead of the number, print "Linio". For multiples of 5 print "IT". For numbers which are
multiples of both 3 and 5, print "Linianos".
But here's the catch: you can use only one `if`. No multiple branches, ternary operators
or `else`.

## Requirements
* 1 if
* You can't use `else`, `else if` or ternary
* Unit tests
* Feel free to apply your SOLID knowledge
* You can write the challenge in any language you want.

## Excecution
You can use this
```PHP
use App\Counter;

$counter = new Counter();
$list = $counter->getArrayList();
print(json_encode($list, JSON_PRETTY_PRINT));
```
To run a demo run
```
php index.php
```
## Created by
* Miguel Acosta