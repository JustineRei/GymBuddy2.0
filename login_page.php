<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login - Gym Buddy!</title>
   <link rel="stylesheet" href="assets/css/styleLogin.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <script src="https://kit.fontawesome.com/38ddb14252.js"></script>
</head>
<body>
   <div class="body" style="background: url('./assets/images/logbg.png') no-repeat;">
      <div class="wrapper">
         <form action="login.php" method="POST">
            <img src="assets/images/logo-log.png">
            <h1>Login</h1>
            <div class="input-box">
               <input type="text" placeholder="Username" name="uname">
               <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
               <input type="password" placeholder="Password" name="password">
               <i class="fa-solid fa-lock"></i>
            </div>
            <button type="submit" class="btn" value="login">Login</button>
            <div class="back2home">
               <p>Go back to <a href="index.php">Home</a> page.</p>
            </div>
         </form>
      </div>
   </div>
   
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>AOS.init();</script>
</body>
</html>