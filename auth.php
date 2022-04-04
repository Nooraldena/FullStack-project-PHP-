<?PHP
//داله للتحقق من وجود قيمه في جلسه
session_start();
if(!isset($_SESSION['username'])){
    //اذا كانت القيمه فارغه يتم الانتقال الى صفحه تسجيل الدخول
    header("location: login.php");
    exit();
}



?>