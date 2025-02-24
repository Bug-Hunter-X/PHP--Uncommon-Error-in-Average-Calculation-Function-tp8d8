```php
function calculateAverage(array $numbers): float {
  if (empty($numbers)) {
    return 0; // Handle empty array case
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count; // Potential division by zero if count is zero
}

$numbers = [];
$average = calculateAverage($numbers);
echo "Average: " . $average; // Outputs 0 as expected

$numbers2 = [10, 20, 30, 0];
$average2 = calculateAverage($numbers2); //This will still output the correct value
echo "Average: " . $average2;

$numbers3 = [10, 20, 30, 'a'];
$average3 = calculateAverage($numbers3); // This will result in a warning and 0
echo "Average: " . $average3;
```