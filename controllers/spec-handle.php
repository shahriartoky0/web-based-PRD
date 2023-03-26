<?php
if(isset($_REQUEST['submit']))
{
    session_start();
    require_once "../models/db.php";
    require_once "../models/data_model.php";
   $msg='';
   $feature= strtoupper(trim($_REQUEST['feature']));
   $phase= $_REQUEST['phase'];
   $specification= $_REQUEST['specification'];
   $screen_defination= $_REQUEST['screen_defination'];
   $user_story= $_REQUEST['user_story'];
   $acceptance_criteria= $_REQUEST['acceptance_criteria'];
   //$ui_screens= $_FILES['ui_screens'];
   $tags= $_REQUEST['tags'];
   $_SESSION['feature']= $feature;
  


  /*  $file=fopen('database.txt','a');
   $data="$feature,$phase,$specification,$screen_defination,$user_story,$acceptance_criteria,$ui_screens, $tags\n";
   fwrite($file,$data);
   fclose($file);
   header('location:specs.php?msg=success'); */
   
   // storing the data in mysql
   if ($feature=='' || $phase=='' || $specification=='' || $screen_defination=='' || $user_story=='' || $acceptance_criteria=='' ||  $tags=='')
   {
    $_SESSION['msg'] = 'Any Field can not be empty!!' ; 
    header("location:../views/specs.php");

   }
   else 
   {    //ADDING IMAGE 
    if(isset($_FILES["ui_screens"]) && $_FILES["ui_screens"]["error"] == 0)
    {      
            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png");
            $filename = $_FILES["ui_screens"]["name"];
            $filetype = $_FILES["ui_screens"]["type"];
            $filesize = $_FILES["ui_screens"]["size"];

        
            // Verify file size - 5MB maximum
            $maxsize = 5 * 1024 * 1024;
            if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

            // Verify MIME type of the file
            if(in_array($filetype, $allowed)){
                // Check if file already exists on the server, if not, move the uploaded file to the server
                if(file_exists("../uploads/" . $_FILES["ui_screens"]["name"])){
                    die("Image Already Exists");
                } else{
                    //the unique id added later part 
                    
                //move_uploaded_file($_FILES["ui_screens"]["tmp_name"], "uploads/" . $_FILES["ui_screens"]["name"]);
                $name= time();
                move_uploaded_file($_FILES["ui_screens"]["tmp_name"], "../uploads/" .$name);
              
                }
                } else{
                    die('Failed');
                    
                }
       }
    //END ADDING IMAGE
      $user = ['feature'=>$feature, 'phase'=>$phase , 'specification'=> $specification,'screen_defination'=>$screen_defination,'user_story'=>$user_story,'acceptance_criteria'=>$acceptance_criteria,'ui_screens'=>$name,'tags'=>$tags];
        $status = addData($user);
        if ($status)
        {
            
            header('location:../views/specs.php?msg=success');
            //header("location:../views/dashboard.php");
        }
        else {

            echo "error !";

            }



}
}
?>