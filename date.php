<?php 
//set timezones
date_default_timezone_set('Africa/Nairobi');
// $current_date=date('Y-m-d');
// echo "Connected";
      $custom_Days='3';# No.of days 
      $maturity_date=date('Y-m-d');
	     $subtracted_timestamp = strtotime('+'.$custom_Days.' days', time());
      // $Custom_date = date('Y-m-d', $subtracted_timestamp);
// echo "$Custom_date";
      // for ($x = 0; $x <= $custom_Days; $x++) {
   
      $date=$Custom_date;
      echo $date;
      echo date('l', strtotime($subtracted_timestamp));
      

// }
 ?>
 <?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
// $date1='';
// $date2=date('m/d/Y');
function week_between_two_dates($date1, $date2)
{
    $first = DateTime::createFromFormat('m/d/Y', $date1);
    $second = DateTime::createFromFormat('m/d/Y', $date2);
    if($date1 > $date2) return week_between_two_dates($date2, $date1);
    return floor($first->diff($second)->days/7);
}
$dt1 = '02/25/2019';
$dt2 = date('m/d/Y');

$no_of_weeks=week_between_two_dates($dt1, $dt2);
// echo "$no_of_weeks";

?>


</body>
</html> 