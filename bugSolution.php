function foo(array $arr): array {
  // Iterate in reverse to avoid key issues when using unset()
  for ($i = count($arr) - 1; $i >= 0; $i--) {
    if ($arr[$i] === 0) {
      unset($arr[$i]);
    }
  }
  return $arr;
}

$arr = [1, 0, 2, 0, 3];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 )

// Alternative solution using array_filter:
$arr = [1, 0, 2, 0, 3];
$result = array_filter($arr, fn($value) => $value !== 0);
print_r(array_values($result)); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 )
