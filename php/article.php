<?php
$db_host="localhost";
$db_name="mandira";
$db_user="article"
$db_pass="";

$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
}
echo "connected success";

$sql ="SELECT *
      FROM article
     WHERE id=" .$_GET['id'];

$results = mysqli_query($conn_$sql);
if($results === false){
echo mysqli_error($conn);
}
else{
    $articles=mysqli_fetch_assoc($results);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(empty($articles)): ?>
        <p> article not found </p> 
       <?php else: ?>
                    <h2> <?=$articles['title']; ?> </h2>
                    <p> <?=$articles['content']; ?> <p>
        
      <?php endif; ?>        
</body>
</html>