### PHP situations

* [How to remove duplicate values from a multi-dimensional array in PHP](http://stackoverflow.com/questions/307674/how-to-remove-duplicate-values-from-a-multi-dimensional-array-in-php)

$input = array_map("unserialize", array_unique(array_map("serialize", $input)));
