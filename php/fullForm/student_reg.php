<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <mesta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CheckBox</title>
  </head>
  <body>
      <form action="registration.php" method="post">
        <h1>Student Register</h1>
        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" name="fullName" placeholder="Enter Your First Name" >
        <br>

        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Your Address">
        <br>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" placeholder="Your number">
        <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" >
        <br>

      <label for="gender">Gender</label>
      <input type="radio"  name="gender" id="male"  value="male"  />
      <label for="gender"> Male</label>
      <input type="radio" id="female" name="gender" value="female" />
      <label for="gender" > Female</label><br />
       
      <label for="level" >Level</label>
      <input type="checkbox" id="see" name="level" value="see"  />
      <label for="level" > SEE</label>
      <input type="checkbox" id="+2" name="level" value="+2" />
      <label for="level"> +2</label><br />
      <input type="checkbox" id="bacheloar"  value="bacheloar" />



      Faculty
      <select value="faculty" name="faculty">
        <option value="BCA">BCA</option>
        <option value="BBM">BBM</option>
        <option value="BBS">BBS</option>
      </select>
      <br>
      <input type="submit" name="submit" id="" />
    </form>
  </body>
</html>