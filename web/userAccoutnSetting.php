<?php
session_start();
$id = $_SESSION['user']['id'];
if(!isset($_SESSION['user']['name'])){
?>
     <script>
        location.replace("pages/signlog.php");
     </script>
      <?php
 }
        include_once "common/header.php";
?>  

<link rel="stylesheet" href="assets/css/fullPageImg.css">
<link rel="stylesheet" href="http://localhost/web/assets/css/profile.css">
<link rel="stylesheet" href="http://localhost/WEB/assets/css/style.css" type="text/css" media="all" />
<div class="bg">
    <div class="header-top">
        <div class="container">
            <div class="header-top-info">
                <nav class="navbar navbar-default">
                
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <div class="agileits-title"> 
                        <h3>Users Profile</h3> 
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li><a href="userLogin.php">Back</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /.navbar-collapse -->
            </div>
        </div>
    </div>
    <div class="user-info">
        <?php include_once "controller/userAccountSetting.php"; ?>
    <form method="POST" action="">
        <h1> Account Setting</h1>
        <input type="hidden" id="userid"  name= "id">
        <input type="text" class="box" name="name" placeholder="Enter Your Name...">
        <input type="text" class="box" name="email" placeholder="Enter Your Email..."><br>
    </div>
    <button type ="submit" name="submit" class="setting">Update</button>
</form>
</div>
<script>
     document.getElementById("userid").value =<?php echo $id ?>;
</script>