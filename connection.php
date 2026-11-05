<?php

$servername="127.0.0.1";
$username="root";
$password="";
$DBname="databyemenexam";


//انشاء الاتصال
$conn=new mysqli($servername,$username,$password,$DBname);


//التحقق من نجاح الاتصال 
if($conn->connect_error){
   echo " Failed to Connect ";
   exie();
}else{
    //echo "Conected";
}


?>