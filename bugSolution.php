To avoid this unexpected array growth and maintain consistency, it's best practice to explicitly define and check array keys:
```php
$myArray = [];
$myArray["a"] = 1;
$myArray["1"] = 2; //Explicitly using string key
$myArray["0"] = 3;
echo count($myArray); //Outputs 3 (Expected)

// Or use array_key_exists to avoid the unexpected key conversion
if (!array_key_exists(0, $myArray)) {
  $myArray[0] = 3;
}

echo count($myArray); //Outputs 3 (Expected)
```
This ensures that you have complete control over array key types, leading to more reliable and predictable code.