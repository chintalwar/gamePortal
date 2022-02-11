<?php
      require_once "config.php";
         
          if(isset($_GET['deleteid'])){

            //accessing id from url
            $url_id = $_GET['deleteid'];
          
            $delete = "DELETE from `game_master` WHERE id=$url_id";

            //exicute the above query
            $result = mysqli_query($con,$delete);
            if($result){
                ?>
                <script>
                   alert("DELETE SUCCESSFULLY");
                   location.replace("../admin.php");
                </script>
                <?php
            }

          }
?>