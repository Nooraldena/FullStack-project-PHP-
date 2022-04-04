<?php

//استدعاء ملف ال قاعده البيانات
include 'db.php';

require 'db.php';

//فتح جلسه
session_start();
//داله لشرط من ضغطه زر 
if(isset($_POST['login'])){
    //تخزين الحقول بلمتغيرات 
    $user = $_POST['username'];
    $pass = $_POST['password'];
//انشاء استعلام
//في هذا الاستعلام استخدمنا الشرط وجود اسم المستخدم وكلمه المرور
    $qu = "SELECT * from students where username  = '$user' && password = '$pass'";
//ارسال الاستعلام ولتحقق من وجود العضو


    if(mysqli_num_rows(mysqli_query($con,$qu)) > 0){
        //اذا تم وجود النتيجيجه يتم اضافه العضو في الجلسه
        $_SESSION['username']=$user;
		$_SESSION['password']=$pass;
   
     
        //لم يتم الانتقال الى منظمه الاعضاء 
        header("location: index1.php");  
    
    }else{
      echo'هذا المستخدم ليس موجود' ;
    }

}
 













?>