<?php
if(isset($_POST['submit'])){
    echo "Yes it works";
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
    
    <div id="main">

        <!-- <p> For alphabet only </p>
        <form class="form">
            <label for="username"> Username</label><br>
            <input type="text" class="name" name="username"><br>

            <button class="button"> Submit</button>
            <p class="feedback">

            </p>                                                  
        </form>
  
<p> For Number only </p>
   
        <form class="forms">
            <label for="usernames"> Username</label><br>
            <input type="text" class="name" name="usernames"><br>

            <button class="button"> Submit</button>
            <p class="feedbacks">

            </p>                                                  
        </form> -->
    
    <p> For all special character </p>
   
        <form action="form.php"  method="post" >
            <label for="username"> Username<label>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   sernames1"> Username</label><br>
            <input type="text" class="name" name="usernames1"><br>
            <!-- <label for="password"> Password</label><br>
            <input type="password" class="name" name="password"><br> -->
                                                                                                                                             
            <input type="submit" name="submit">
                                                             
        </form>
    </div>
    
</body>
</html>