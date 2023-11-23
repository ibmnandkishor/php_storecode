

 <?php
 $uri = "mongodb+srv://aditibm7235:<password>@clusternand.4nvchgt.mongodb.net/?retryWrites=true&w=majority";

if(isset($_FILES['upload'])){
   $filename=$_FILES['upload']['name'];
   $tempname=$_FILES['upload']['tmp_name'];
   
    if(move_uploaded_file($tempname,"uploads/".$filename)){
       echo "successfully upload.";
    }
    else{echo "file not upload";}
   
   }
 require('allconnection.php');
  $name=$_POST['text'];
  $mobile=$_POST['mobile'];
  $mail=$_POST['mail'];
  $password=$_POST['password'];
  $repassword=$_POST['repassword'];  
  $gender=$_POST['gender'];
  $hoby=$_POST['hoby'];
  $hobbies=implode(",",$hoby);
  

$sql="insert into student1 values('$name','$mobile','$mail','$password','$repassword','$gender','$hobbies','$filename')";
 if(mysqli_query($con,$sql)){
    echo "submited your details";
 }
 else{echo "form not submited";
}


?>
