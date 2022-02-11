<?php

        include_once "controller/config.php";

        if(isset($_POST['submit'])){
            
            $id              = $_POST['id'];
            $gameName        = $_POST['gameName'];
	        $gameCategory    = $_POST['gameCategory'];
            $gameLogo        = $_FILES['photo'];
            $gameFile        = $_FILES['file'];

            //fetch the file name
            $fileName = $gameFile['name'];
                         
            //fetch the defualt file path  
            $filePath = $gameFile['tmp_name'];

            $array = explode(".",  $fileName);  
            $name = $array[0];  
            $ext = $array[1]; 
            if($ext == 'zip')  
            {  
                 $path = 'UploadedGame/';  
                 $location = $path .  $fileName;  
                 if(move_uploaded_file( $filePath, $location))  
                 {  
                      $zip = new ZipArchive;  
                      if($zip->open($location))  
                      {  
                           $zip->extractTo($path);  
                           $zip->close();  
                      }  
                      $files = scandir($path . $name);  
 
                      //$name is extract folder from zip file  
                      foreach($files as $file)  
                      {  
                           $file_ext = array_values(array_slice($array, -1))[0];
                           $allowed_ext = array('html', 'php','css','js');  
                           if(in_array($file_ext, $allowed_ext))  
                           {  
                                $new_name = md5(rand()).'.' . $file_ext;  
                                // $output .= '<div class="col-md-6"><div style="padding:16px; border:1px solid #CCC;">UploadedGame/'.$new_name.'</div></div>';  
                                copy($path.$name.'/'.$file, $path . $new_name);  
                                unlink($path.$name.'/'.$file);  
                           }       
                      }  
                      unlink($location);  
                     //  rmdir($path . $name);  
                 }  
            }  
        
            
      
            //fetch the file error if 
            $fileError = $gameFile['error'];

             //fetch the file name
             $logoName = $gameLogo['name'];

             //fetch logo path
             $logoPath = $gameLogo['tmp_name'];  

            //fetch the file error if 
            $logoError = $gamelogo['error']; 
        

            if($fileError == 0 && $logoError == 0){

                // $fileDestination = 'upload/'.$fileName;
                $logoDestination = 'upload/'.$logoName;
                 //    echo "$fileDestination";

                //to upload at desire destination we have thew function
                //it takes 2 parameter temprory file path and destianation file path

                // move_uploaded_file($filePath,$fileDestination);
                move_uploaded_file( $logoPath, $logoDestination);

                //insert query
                if($id==""){
                $insert = "INSERT INTO `game_master`(name,category,logo,folder)
                           VALUES ('$gameName',' $gameCategory','$logoDestination','$fileName')";
                }else{
                    $insert = "UPDATE `game_master` SET  name='$gameName',category='$gameCategory',logo='$logoDestination',folder='$fileName' WHERE id=$id";
                }
                           $query = mysqli_query($con,$insert);
                           if($query){

                            ?>
                            <script>
                            //    alert(" UPLOAD SUCCESSFULLY :)");                                  
                               location.replace("admin.php");
                            </script>
                            <?php
                           }else{
                            ?>
                            <script>
                               alert(" UPLOAD ERROR:)");
                               location.replace("admin.php");
                            </script>
                            <?php
                           }
            }
            
        }
?>