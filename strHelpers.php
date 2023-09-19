<?php
// string helpers functions:
$id = "inv_abcd";

$result = str_starts_with($id, 'inv_');

$id1 = "abcd_pay";
$result1 = str_ends_with($id1, '_pay');

$url = "https://laracasts.com/series/php8-crash-course/episodes/8";

$result2 = str_contains($url, '?');
var_dump($result2);

var_dump($result);
var_dump($result1);
?>