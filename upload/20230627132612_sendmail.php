<?php

if(isset($_POST['submit'])){
$email=$_POST['email'];
 $subject=$_POST['subject'];
$message=$_POST['message'];
$send=mail($email,$subject,$message);
if($send){
    echo "message send";
}
else{
    echo "message not send";
}
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Send mail</h2>
  
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for=""></label>
      <input type="text" class="form-control"  placeholder=" email" name="email">
    </div>
    <div class="mb-3">
      <label for=""></label>
      <input type="text" class="form-control"  placeholder="Subject" name="subject">
    </div>
    <div class="mb-3">
      <label for=""></label>
      <input type="text" class="form-control"  placeholder="Message" name="message">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">send</button>
  </form>
</div>

</body>
</html>
