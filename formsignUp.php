<?php

include 'db.php';

require 'db.php';
if(isset($_POST['signup'])){

    
    //عند التحقق يتم تخزين البيانات
    //escape string تحويل المدخلات الى 
    //inputs لزياده الامان وعدم تنفيذ اكواد داخل ال
    
    $user = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
   
    //هنا يتم انشاء استعلام لاضافه بيانات العضو الجديد الى الجدول 
    $qu ="INSERT INTO students (username,password,email) value ('$user','$password','$email')";
    
    if(mysqli_query($con,$qu)){	
        echo 'يمكنك تسجيل الدخول!! تم انشاء الحساب بنجاح ';
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		echo 'يرجى ادخال ايميل صحيح';

	}
}



?>