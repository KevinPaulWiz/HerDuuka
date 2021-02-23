<?php 
function RemoveSpecialChar($value){
$result  = preg_replace('/[^a-zA-Z0-9_ -]/s','',$value);
return $result;
}
// How To Call Method:
echo RemoveSpecialChar("Boy's Clothing");
 ?>