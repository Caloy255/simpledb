<?php require "database.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center h-screen flex-col relative"> 
<?php
    global $message_register;

    if(isset($_POST['register'])){
        $full_Name = $_POST['fullname'];
        $user_Name = $_POST['username'];
        $passkey = $_POST['passkey'];

        $query = "INSERT INTO users (fullname, username, passkey) VALUES ('$full_Name', '$user_Name', '$passkey')";
        mysqli_query($conn, $query);

        $message_register = "Added Complete!";
}


?>
    <div class="absolute top-10 left-20">
     <img src="assets/logo2.svg" alt="">
    </div>

    <P class="text-3xl text-sky-500 font-medium mb-5"><?= $message_register?></P>
    <form action="" method="post" class="w-[600px] p-20 flex flex-col gap-5 shadow-2xl shadow-[#030499] rounded-2xl">
        <label class="block">
            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
            Enter Your Full Name
            </span>
            <input type="text" name="fullname" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#030499] focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Fullname" required/>
        </label>

        <label class="block">
            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
            Enter Your Username
            </span>
            <input type="text" name="username" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#030499] focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Username" required/>
        </label>

        <label class="block">
            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
            Enter Your Password
            </span>
            <input type="password" name="passkey" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-[#030499] focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Password" required/>
        </label>

        <input type="submit" value="Register" name="register" class="py-2 px-5 font-semibold text-white bg-[#030499] rounded-lg">

        <a href="login.php" class="text-center text-[#030499] font-semibold">Login</a>



    </form>

   
</body>
</html>