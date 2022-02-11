<?php
    session_start();
     
     require_once "config.php";


     if(isset($_POST['singIn'])){

        $email       = $_POST['email'];
	     $password    = $_POST['password'];

        //query for search
        $querySearch = "SELECT * FROM `users` WHERE email = '$email' ";

        //query for reflect above data into database
        $query = mysqli_query($con, $querySearch);

       

        //cheack how many rows it will retrun
	     $emailcount = mysqli_num_rows($query);

        if($emailcount){

         //query for fetch data into database
           $email_pass = mysqli_fetch_assoc($query);
         
           $db_pass = $email_pass['password'];

            //Fetch data from session
            // $_SESSION['name'] = $email_pass['name'];

            //Fetch data from session
            // $_SESSION['id'] = $email_pass['id'];


            // $_SESSION['user_type'] = $email_pass['user_type'];
           $_SESSION['user'] = array(
                  'name' => $email_pass['name'],
                  'id' => $email_pass['id'],
                  'user_type' => $email_pass['user_type']
           );
           
           //fun used for decode 
           $pass_decode = password_verify($password,$db_pass);

           if($pass_decode){
              if($_SESSION['user']['user_type'] =="admin"){
            ?>
            <script>
               // alert(" LOGIN SUCCESSFULLY :)");
               location.replace("../admin.php");
            </script>
            <?php
              }elseif($_SESSION['user']['user_type'] =="user"){
               ?>
               <script>
                  // alert(" LOGIN SUCCESSFULLY :)");
                  location.replace("../userLogin.php");
               </script>
               <?php
              }else{
               ?>
               <script>
                  alert("INVALID USER");
               </script>
               <?php

              }
           }else{
            ?>
            <script>
               alert("PASSWORD ERROR");
            </script>
            <?php
         }

     }else{
      ?>
      <script>
         alert("INVALID EMAIL");
      </script>
      <?php
     }
   }


?>