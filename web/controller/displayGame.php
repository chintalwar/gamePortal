<?php
        include_once "controller/config.php";

        //query for fetching all game data from database
        $sql = "SELECT * FROM `game_master`";

        //query for run abouve query
        $result = mysqli_query($con,$sql);

        if($result){
                
                //query for fetch all the row data
                while($row = mysqli_fetch_assoc($result)){

                    $id          = $row['id'];
                    $gameName    = $row['name'];
                    $gameCategory= $row['category'];
                    $gameLogo    = $row['logo'];
                    $gameFile    = $row['folder'];  
                    echo ' <tr>
                    <td>'.$id.'</td>
                    <td>'.$gameName.'</td>
                    <td>'.$gameCategory.'</td>
                    <td><img src = "'.$gameLogo.'" height = "50px" width = "50px"></td>
                    <td><a class="button1" href="#popup1" onclick="setId('.$id.',\''.$gameName.'\',\''. $gameCategory.'\')">EDIT</a>
                        <a class="button1" href="controller/deleteGame.php?deleteid='.$id.'">DELETE</a></td>
                    </tr>';                        
                }
        }
?>