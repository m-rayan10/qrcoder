<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>QR CODE</title>
</head>
<body>
    <h1>Generate QR Code</h1>
    <form method="post">
        <center>
            <input type="text" name="name" placeholder="Enter Name">
            <input type="text" name="text" placeholder="Enter Number">
            <input type="submit" name="submit">
        </center>
    </form>

    <?php
include("phpqrcode/qrlib.php");
// Qrcode::png("Hello World"); 
if(isset($_POST['submit'])){
    $path = 'qrcodes/';
    $file = $path.$_POST['name'].'.png';
    $text = $_POST['text'];
    echo '<center>'.$_POST['name']."Scan Me</center>";
    ?>
    <img src='qrcodes/<?php echo $_POST['name']?>.png'>
    <?php
    QRcode::png($text,$file);
}

 ?>

</body>
</html>