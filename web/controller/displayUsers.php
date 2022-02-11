<?php
        include_once "controller/config.php";

        //query for fetching all game data from database
        $sql = "SELECT * FROM `users`";

        //query for run abouve query
        $result = mysqli_query($con,$sql);

        if($result){
                
                //query for fetch all the row data
                while($row = mysqli_fetch_assoc($result)){

                    $id           = $row['id']; 
                    $userType     = $row['user_type'];
                    $usersName    = $row['name'];
                    $usersEmail   = $row['email'];
                    echo ' <tr>
                    <td>'.$id.'</td>
                    <td>'.$userType.'</td>
                    <td>'.$usersName.'</td>
                    <td>'.$usersEmail.'</td>
                    <td>
                        <a class="button1" href="controller/deleteUser.php?deleteid='.$id.'">DELETE</a></td>
                    </tr>';
                   
                }
        }
?>