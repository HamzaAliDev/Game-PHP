<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <?php
        if(isset($_POST['message'])){
            $message = $_POST['message'];
            
            echo'<h1>Your message is: </h1><br>'.$message;

        } else {
            
            echo "<h1>Enter your message</h1>";
        }
    ?>
</body>
</html>