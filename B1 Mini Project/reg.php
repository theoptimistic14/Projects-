<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="chinu.css">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="connect.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span>name:</span>
            <input type="text" placeholder="Enter your name"name="name" required>
          </div>
          <div class="input-box">
            <span>blood_group:</span>
            <input type="text" placeholder="Enter your blood_group"name="blood_group" required>
          </div>
          <div class="input-box">
            <span>email:</span>
            <input type="text" placeholder="Enter your email"name="email" required>
          </div>
          <div class="input-box">
            <span>Phone:</span>
            <input type="text" placeholder="Enter your number" name="phone"required>
          </div>
          <div class="input-box">
            <span>address:</span>
            <input type="text" placeholder="Enter your addresss"  name="address"required>
          </div>
          <div class="input-box">
            <span>age:</span>
            <input type="text" placeholder="enter your age" name="age"required>
          </div>
          <div class="input-box">
            <span class>gender:</span>
            <input type="text" placeholder="male/female/others" name="gender"required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" value="Register" name="abc">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
