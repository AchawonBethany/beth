<!DOCTYPE html>
<html>
<body>

<title>PHP Array Exercises</title>
<p>Array Exercise 1</p>

<?php
$weather=array("rain","sunshine","clouds", "hail", "sleet", "snow", "wind");
echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a few " . $weather[2] . " and some " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4] . ".";
?>

<p>Array Exercise 2</p>
<?php
$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

for ($i = 0; $i < COUNT($cities); $i++) {
echo $cities{$i} . ", ";
}
?>

<ul>
<?php
for ($i = 0; $i < COUNT($cities); $i++) {
echo "<li>{$cities{$i}}</li>";
}
?>
</ul>


<?php 
array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing"); 
sort($cities);
?>

<ul>
<?php
for ($i = 0; $i < COUNT($cities); $i++) {
echo "<li>{$cities{$i}}</li>";
}
?>
</ul>

</body>
</html>
