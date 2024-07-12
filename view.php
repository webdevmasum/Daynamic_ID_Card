<?php

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
    }



?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ID Card | Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .area ul li{
            list-style: none;
            margin-left:20% ;
        }
    </style>
  </head>
  <body>
    <div class="container mt-5 ">
        <div class="row col-8 bg-info offset-2 p-5">
            <div class="col-8 offset-2 bg-dark ">
                <h1 class="text-white text-center"> Information</h1>
                <div class="area text-white">
                    <ul>
                        <li> Name:- <?php if(isset($name)){echo $name;} ?> </li>
                        <li> Email:- <?php if(isset($email)){echo $email;} ?> </li>
                        <li> Phone:- <?php if(isset($phone)){echo $phone;} ?> </li>
                        <li> Password:- <?php if(isset($password)){echo $password;} ?> </li>           
                    </ul>
                </div>               
            </div>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>