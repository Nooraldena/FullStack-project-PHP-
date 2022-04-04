<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>

  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>


<div class="mobile-container">
<div id="example1">
<!-- Top Navigation Menu -->
<div class="topnav">
  
  <div id="myLinks">

    <a href="http://localhost/FULLSTACK/index1.php#">Home</a>
    <a href="http://localhost/FULLSTACK/index1.php#about">About</a>
    <a href="http://localhost/FULLSTACK/index1.php#sendforme">My-CV</a>
    
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>

<div class="container">
<sections class="sections">
<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us <i class="bi bi-activity"></i> 
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/>
</svg></h2>
<p class="text-center w-responsive mx-auto mb-5">send for me message i got your help you?!
      <br>  a matter of hours to help you.</p>

<div class="row"> 
<div class="col-md-9 mb-md-0 mb-5">

<form id="contact-form" action="#" method="POST" enctype="multipart/form-data" >

    <div class="col-md-9 mb-md-0 mb-5">
      <label for="name">Your Name</label>
      <input class="form-control" type="text" id="name" name="visitor_name" placeholder="" pattern=[A-Z\sa-z]{3,20} required>
    </div>
    <div class="elem-group">
      <label for="email">Your E-mail</label>
      <input class="form-control" type="email" id="email" name="visitor_email" placeholder="" required>
    </div>
  
    <div class="elem-group">
      <label for="message">Write your message</label>
      
      <textarea class="form-control md-textarea" id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
    </div>

    <div class="elem-group">
      <label for="message">send file</label>
      <input type="file" name="file">
    </div>

    <button type="submit" name="send" class="btn btn-primary">Primary</button>

  </form>

  </div>
  </div>
</div>
</sections>
  <script type="text/javascript" src="index.js"></script>
  <script type="text/javascript" src="app.js"></script>
  <script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
<style>
@media only screen and (max-width: 728px) {
 
  body{
    color:black;
    font-size:small;
  }
  #myLinks {
   color:red;
   text-align:center;
   font-size:20px;
  
  }
  #myLinks a{
    margin:10px;
  }
  #myLinks a:hover{
    color:red;
    
  }
  active{
    font-size:13px;
  }
  input{
    width:100%;
    color:red;
  }
  p{
    font-size:13px;
    color:red;
  }

  form{
    display:block;
    position:relative;
    width:30rem;
    height:50rem;
  }
  .icon{
    display:none
  }
  .btn{
    margin-top:5px;font-size:13px
    
  }


}
@media only screen and (min-width: 728px) {
.icon{
  display:none;
}
  *{
    margin:0;
    padding:0;
    font-size:large;
  }

h2{
  color:red
}
label{
  color:red;
}

.container form{
  position:relative;
  width:50rem;
  height:50rem;
}


}
</style>
</body>
</html>

<?PHP

require_once 'mail.php';

if (isset($_POST['send'])) {
    $mail->setFrom('nooralden.12.n@gmail.com', 'nooralden');
    $mail->addAddress('nooralden.12.n@gmail.com');

    $mail->Subject = $_POST['visitor_email'];
    $mail->Body    = $_POST['visitor_message'];
    $mail->AltBody = $_POST['visitor_message'];
  //  $mail->addAttachment('files/'.$_POST['file']);         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');

    move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']);

    $mail->addAttachment($_FILES['file']['name']);
    unlink($_FILES['file']['name']);

    $mail->send();

    //اذا ارسلت من صفحه ثانيه نعمل تحديث header("Location: contact.php",true);
}


?>

