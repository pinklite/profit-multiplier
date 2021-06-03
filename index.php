<?php
include_once("setup.php");
if ($v)
{
setcookie("v","$v",time()+315360000,"/",".$mydomain",0);
header("Location:$myaffiliateurl");
}
?>
