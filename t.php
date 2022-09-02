
<?php 
include "includede/header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .center{
            display: flex;
            justify-content:center ;
        }
        form{
            border: double 5px blueviolet;
            width: 400px;
            padding: 20px;
          
        }
        
        input{
            display: block;
            width: 400px;

        }
    </style>
</head>
<body>
    <div class="center">
    <form action="">
        <label for="name">User-name:</label>
        <input type="text" id="name">
        <label for="p">pass-word:</label>
        <input type="password">
        <label for="cp">Confirm-pass-word:</label>
        <input type="password" id="cp">
        <input type="button" value="submit">
    </form>
</div>
</body>
</html>