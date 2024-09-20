<?php require "database.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<body class="flex justify-center items-center h-screen relative">
    <div class="absolute top-10 left-20">
     <img src="assets/logo2.svg" alt="">
    </div>
    <form action="" method="post" class="w-[600px] p-20 flex flex-col gap-5 shadow-2xl shadow-[#030499] rounded-2xl">

        <label class="block">
            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
            Username
            </span>
            <input type="text" name="username" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#030499] focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Username" required/>
        </label>

        <label class="block">
            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
            Password
            </span>
            <input type="password" name="passkey" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#030499] focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Password"  required/>
        </label>

        <input type="submit" value="Login" name="login" class="py-2 px-5 font-semibold text-white bg-[#030499] rounded-lg">

        <a href="register.php" class="text-center text-[#030499] font-semibold">Register</a>



    </form>

    <?php

    if(isset($_POST['login'])){ 

        $user_Name = $_POST['username']; 
    
        $passkey = $_POST['passkey']; 
    
     
    
        $query = "SELECT * FROM users WHERE username = '$user_Name' and passkey = '$passkey'"; 
    
        $stmt = mysqli_query($conn, $query); 
    
        $result = mysqli_num_rows($stmt); 
    
     
    
        if($result==1){ 
    
             echo "<script>window.alert('Login Successfully'); window.location.href=('index.php');</script>"; 
    
        }else{ 
    
            echo "<script>window.alert('Incorrect Username or Password');</script>"; 
    
        } 
    
    } 
 
    
    ?> 
    
</body>
</html>