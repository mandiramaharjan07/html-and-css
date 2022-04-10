<?php

//phpmyadmin ma database create garda name user host yei rakhnu parxa, pw chai auto generate garna milxa, tei yeta copy garera lekhne ho.
    $db_host="localhost";
    $db_name="mandira";
    $db_user="root";
    $db_pass="";

    //mysql sanga connect gareko mathi ko data lai
    $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    // database sanga connect vayo ki nai check gareko.
    if(mysqli_connect_error()){
//connect  vayena vaney:
        echo mysqli_connect_error();
        exit;
    }
//connect vayo vaney  
    echo "connected successfully";
//database bata lignu parne data article vanne table bata ani published date anusar sort vako.
$sql = " SELECT *
FROM article
WHERE id = " . $_GET['id'];

$result = mysqli_query($conn,$sql);

// var_dump($result);

if ( $result === false) {
    echo mysqli_error($conn);
} else {
    $article = mysqli_fetch_assoc($result);
}
?>

<body>
    
    <?php
    if(empty($article)): ?>
    <p>article not found</p>
    <?php else: ?>
        
                <h2><?=$article['title']; ?></h2>
                <p><?=$article['content']; ?></p>

        <?php endif;?> 
</body>