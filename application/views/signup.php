<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIGNUP</title>
  <link rel="stylesheet" href="<?=base_url("assets/style2.css")?>">
</head>
<body>
  <form action="<?=base_url('Welcome/insertdata')?>" method="post">
    <div class="container">
      <h1>SIGNUP</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      
      <label for="Name"><b>Name</b></label>
      <input type="text" placeholder="Name" name="name" id="name">

       <label for="Name"><b>Email</b></label>
      <input type="text" placeholder="Email" name="email" id="name">

      <label for="age"><b>Age</b></label>
      <input type="text" placeholder="Age" name="age" id="age" >

      <label for="height"><b>Height(cm)</b></label>
      <input type="text" placeholder="Height" name="hgt" id="hgt" >

      <label for="weight"><b>Weight(kg)</b></label>
      <input type="text" placeholder="Weight" name="wgt" id="wgt" >

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" >


      <button type="submit">SUBMIT</button>

      <hr>
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a></p>
    </div>
  </form>
</body>
</html>