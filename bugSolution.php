function foo(array $arr): array {
    return array_map(function ($item) {
        if (is_numeric($item)) {
            return $item * 2;
        } else {
            return $item; // Or handle non-numeric values as needed
        }
    }, $arr);
}

$arr = [1, 2, 3, 4, 5];
$result = foo($arr); 
print_r($result); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 ) 

$arr = ['a', 'b', 'c'];
$result = foo($arr); 
print_r($result); //Output: Array ( [0] => a [1] => b [2] => c )