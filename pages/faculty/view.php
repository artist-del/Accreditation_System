<?php
    include('model/docs.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../../assets/images/logo.jpg" />
</head>
<style>
    body{
        height: 100vh;
    }
    iframe{
        width: 100%;
        height: 100%;
    }
</style>
<body>

<iframe src="model/uploads/<?php echo $file?>" frameborder="0">Documents</iframe>


</body>
</html>