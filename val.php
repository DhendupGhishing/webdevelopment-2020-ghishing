<?php
session_start();


$con=mysqli_connect('localhost','root','stdproba2020?');
mysqli_select_db($con,'12190048_pop_ghishing');

$std_num= $_POST['std_num'];

$pass = $_POST['password'];


$s="select * from reg_record where std_num = '$std_num' && password='$pass'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);
if($num == 1){
    $_SESSION['Student_Number']=$std_num;
   header('location:Home.php');
  
}else{
    header('loaction:index.html');
    $msg="Please use correct student number or if you haven't register your stduent number, you have to get registered to login our page!";
}
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


<main class="site-main">
    <section class="display-area">
        <div class="container message" id="su">
            <div class="row">
                <div class="col-lg-12 text-center message-title">
                    <h3 class="text">Register Yourself To build Our Friendship Stonger Because Invisible Threads Are The Strongest Ties </h4>
                    <p class="para">
                    <?php 
  echo $msg

  ?>
                       </p>
                </div>
            </div>
            <a class="submit-btn" type="button" href="index.html">Return To Login Form</a>
        </div>
    </section>
</main>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Courgette&family=Dancing+Script&family=Roboto&display=swap');

.site-main .display-area .message{
    background: black;
    padding: 8rem 1rem;
    width: 90%;
    margin: 3rem auto;
}

.site-main .display-area .message .message-title h3{
    font: normal 700 30px/ 30px 'Roboto', sans-serif;
    color: whitesmoke;
   
}

.site-main .display-area .message .message-title p{
    color: whitesmoke;
    padding:1rem 5rem;
}






.submit-btn{
    width: 80%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: linear-gradient(to right, #ff105f, #ffad06);
    border: none;
    outline: none;
    border-radius: 30px;
}

.submit-btn:hover{
    background: linear-gradient(to left, #ff105f, #ffad06);
}
.site-main .display-area .message a{
    text-decoration:none;
    text-align: center;
    font-size: 14px;
    color: black;
}





</style>
