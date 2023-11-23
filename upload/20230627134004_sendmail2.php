
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Send</title>
</head>
<body>
    <form method="post" >
    Email: <input name="email" type="text"><br><br>
    Subject: <input name="subject" type="text"><br><br>
    Message: <br><br>
    <textarea name="message" id="" cols="40" rows="15"></textarea>
    <input name="submit" type="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $to = $_POST['email'];
        $subject = $_POST['subjects'];
        $message = $_POST['message'];
        $from ="aditibm7235@gmail.com" ; 
        $headers = "From: $from";
        
        mail($to ,$subject,$message,$headers);
        echo "Mail Sent.";
    }
?>