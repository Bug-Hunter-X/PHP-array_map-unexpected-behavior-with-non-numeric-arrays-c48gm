function foo(array $arr): array {
    return array_map(function ($item) {
        return $item * 2; 
    }, $arr);
}

$arr = [1, 2, 3, 4, 5];
$result = foo($arr); 
print_r($result); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 ) 

$arr = ['a', 'b', 'c'];
$result = foo($arr); //Notice: Trying to access array offset on value of type string
print_r($result); //Output: Array ( [0] =>  [1] =>  [2] =>  )