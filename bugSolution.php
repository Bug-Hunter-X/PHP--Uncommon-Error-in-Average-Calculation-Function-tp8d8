```php
function calculateAverage(array $numbers): float {
  if (empty($numbers)) {
    return 0; // Handle empty array case
  }

  //Improved version, checks for non-numeric values
  $numericNumbers = array_filter($numbers, 'is_numeric');
  if (empty($numericNumbers)){
    return 0; // Handle array with no numeric values
  }

  $sum = array_sum($numericNumbers);
  $count = count($numericNumbers);
  return $sum / $count;
}

$numbers = [];
$average = calculateAverage($numbers);
echo "Average: " . $average; // Outputs 0 as expected

$numbers2 = [10, 20, 30, 0];
$average2 = calculateAverage($numbers2); //This will still output the correct value
echo "Average: " . $average2;

$numbers3 = [10, 20, 30, 'a'];
$average3 = calculateAverage($numbers3); //This will output 0, instead of a warning and 0
echo "Average: " . $average3;
```