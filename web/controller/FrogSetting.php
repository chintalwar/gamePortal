<?php
      
     //including configration file
     require "controller/config.php";


     if(isset($_POST['submit'])){

        $jumpTime       = $_POST['jumpTime'];
        $restTime       = $_POST['restTime'];
        $jumpDistance   = $_POST['JumpDistance'];

        $insert  = "INSERT INTO `frog_setting`(`jumpTime`, `restTime`, `jumpDistance`) 
                    VALUES ('$jumpTime','$restTime','$jumpDistance')";

                    $sql = mysqli_query($con,$insert);

            }
?>