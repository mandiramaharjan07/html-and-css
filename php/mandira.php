<?php
$db_host="localhost";
$db_name="cms";
$db_user="cms_www";
$db_pass="t8yMGx9uU-ZO8[6g";
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
}
echo "connected success";

$sql = "SELECT *
       FROM article
       ORDER BY published_at";

$results = mysqli_query($conn,$sql);
if($results===false){
echo mysqli_error($conn);
}
else{
    $articles=mysqli_fetch_all($results,MYSQLI_ASSOC);
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
    <h1> My blog </h1>
    <?php if(empty($articles)): ?>
        <p> article not found </p> 
        <?php else: ?>
        <ul> 
            <?php foreach($articles as $article): ?>
                <li>
                    <h2><a href="article.php?id=<?=$article['id'];?>"> <?=$article['title']; ?> </h2>
                    <p> <?=$article['content']; ?> <p>
            </li>
            <?php endforeach; ?>
        </ul>
      <?php endif; ?>        
</body>
</html>