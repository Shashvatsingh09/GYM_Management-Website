<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIGNUP</title>
  <link rel="stylesheet" href="<?=base_url('assets/style2.css')?>">
</head>
<body>
  <form action="<?=base_url('Welcome/checklogin')?>" method="post">
    <div class="container">
      <h1>LOGIN</h1>
      <p>ENTER YOUR CREDENTIALS</p>
      <hr>
      
      <label for="First Name"><b>Name</b></label>
      <input type="text" placeholder="First Name" name="name" id="name">

      <label for="First Name"><b>Password</b></label>
      <input type="text" placeholder="PASSWORD" name="psw" id="psw">

      <button type="submit" href="<?=base_url('Welcome/checklogin')?>">SUBMIT</button>


    </form>
  </body>
  </html>