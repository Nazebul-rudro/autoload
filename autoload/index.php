<?php

include_once("./vendor/autoload.php");
use pondit\Department\department;
use pondit\Institute\institute;
use pondit\Person\person;

// include_once("libery.php");
// spl_autoload_register(function($masssing){
//     include($masssing. ".php");
// });



$newperson = new person;
$newperson -> who();
echo $newperson -> name = "Name : Nazebul Hasan Rudhro";



$newdepartment = new department;
$newdepartment -> whichcourse();
echo $newdepartment -> departmentname = " CSE, ";

$newinstitute = new institute;
$newinstitute -> whichinstitute();
echo $newinstitute -> institutename = "Northern university Bangladesh."

?>


