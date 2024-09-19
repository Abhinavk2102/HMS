<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <style>
        body{margin:0;background-color:lightgray;font-family:Arial,sans-serif}
        .container{width:350px;margin:50px auto; margin-top: 100px;background-color:#fff;border-radius:8px;box-shadow:0 4px 10px rgba(0,0,0,0.1);padding:30px}
        .input{width:calc(100% - 20px);padding:10px;margin:10px 0;border:1px solid #ccc;border-radius:5px;font-size:16px}
        .button{background-color:#007bff;color:#fff;border:none;border-radius:5px;padding:12px 20px;font-size:16px;cursor:pointer;transition:background-color 0.3s}
        .button:hover{background-color:#0056b3}
        .link-button{background:none;border:none;color:#007bff;text-decoration:underline;font-size:14px;cursor:pointer;transition:color 0.3s}
        .link-button:hover{color:#0056b3}
        .footer{margin-top:20px;font-size:14px;color:#666}
    </style>
</head>
<body>
    <div class="container">
        <form action="user_logged_in.php" method="post">
            <p style="font-size: 25px; color: #094198;"><b>User Login</b></p>
            <input class="input" type="text" name="phone" placeholder="Phone number" required><br>
            <input class="input" type="password" name="password" placeholder="Password" required><br>
            <input class="button" type="submit" value="Login">
        </form>
        <div class="footer">
            <p>New User? <button class="link-button" onclick="location.href='user_signup.php'">Sign Up</button></p>
            <p>Unable to Login? <button class="link-button" onclick="location.href='user_forgot_pwd.php'">Forgot Password</button></p>
        </div>
    </div>
</body>
</html>
