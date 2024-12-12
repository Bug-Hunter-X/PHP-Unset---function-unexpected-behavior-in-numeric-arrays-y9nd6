function foo(array $arr): array {
  foreach ($arr as $key => $value) {
    if ($value === 0) {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = [1, 0, 2, 0, 3];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => 1 [2] => 2 [4] => 3 )

// The bug is that this function does not correctly handle array keys when using unset()
// when dealing with numeric arrays. Unsetting an element using its key shifts subsequent
// elements' keys down, causing elements to be skipped unintentionally.

$arr = [1, 0, 2, 0, 3];
foreach ($arr as $key => $value) {
if ($value === 0) {
unset($arr[$key]);
}
}
print_r($arr); // Output: Array ( [0] => 1 [2] => 2 [4] => 3 )

// The correct method is to iterate over the array in reverse to avoid this issue.
