<!DOCTYPE html>
<html>
<body>
<title>PHP Array Exercises 02</title>
<p><b>Write a PHP script to count a total number of duplicate elements in an array.</b></p>

<?php
$array = array(1,1,2,2,3,4);
$arr2 = array();
$counter = 0;
for($arr = 0; $arr < count($array); $arr++){
    if (in_array($array[$arr], $arr2)) {
        ++$counter;
        continue;
    }
    else{
        $arr2[] = $array[$arr];
    }
}
echo 'Total number of duplicate elements found in the array is: '.$counter;
?>

<p><b>Write a PHP script to count the frequency of each element of an array.</b></p>
<p>-With Input</p>

<?php
$arr = explode(' ', readline());
$arr2 = array_count_values($arr);
echo 'The frequency of all elements of an array : '.count($arr2);
print_r($arr2);
?>

<p><b>Write a PHP script to count the frequency of each element of an array.</b></p>

<?php
$arr = array(10, 11, 21, 31, 51, 20, 2, 3, 4);
$oddArray = array();
$evenArray = array();
$size = count($arr);
for ($i = 0; $i < $size; $i++) {
}
$j = 0;
$k = 0;
for ($i = 0; $i < $size; $i++) {
    if ($arr[$i] % 2 == 0) {
        $evenArray[$j] = $arr[$i];
        $j++;
    } else {
        $oddArray[$k] = $arr[$i];
        $k++;
    }
}
?>

<?php
echo "The Even elements are : \n";
for ($i = 0; $i <= $j; $i++) {
    echo "$evenArray[$i] ";
}
?>

<br>

<?php
echo "\nArray of odd numbers : \n";
for ($i = 0; $i <= $k; $i++) {
    echo "$oddArray[$i] ";
}
?>

</body>
</html>