<?php  

       require_once "config.php";
   
       if(isset($_POST['submit'])){
                $id         = $_POST['id'];
                $name       = $_POST['name'];
                $email      = $_POST['email'];

                $insert = "UPDATE `users` SET  name='$name',email='$email' WHERE id=$id";
                $query = mysqli_query($con,$insert);

                 //query for fetch data into database
                  $email_pass = mysqli_fetch_assoc($query);
            
                if($query){
                  $_SESSION['user'] = array(
                     'name' => $email_pass['name'],
                     'id' => $email_pass['id'],
                     'user_type' => $email_pass['user_type']
              );
            
              
                    ?>
                    <script>
                       alert(" UPLOAD SUCCESSFULLY :)");
                    //    location.replace("admin.php");
                    </script>
                    <?php
                   }else{
                    ?>
                    <script>
                             alert(" UPLOAD error");
                    //    alert(" UPLOAD ERROR:)");
                    </script>
                    <?php
                   }
                }
?>