<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h1>Reverse the Given Input</h1>
        <input type="text" name="text" id="number">  
        <input type="submit" name="submit" value="Submit" />  
    </form><br>
    <?php
    if($_POST){
        $reversedInput = strrev($_POST['text']);
        echo "Reversing of " . $_POST['text'] . " is  ";
        echo $reversedInput . "<br>";
    }
    ?>
</body>
</html>
