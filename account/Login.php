<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/login.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Assistant:wght@500&display=swap"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <title>Login</title>
  </head>

  <body>
    <nav class="topnav" id="topnav">
      <ul class="left-nav">
        <li>
          <a href="../home/index.php" class="logo1">
            <img
              class="logo"
              src="../imports/images/dragon.png"
              width="46"
              heigth="46"
            />
          </a>
        </li>
      </ul>
    </nav>
    
    <form id="form" action="../DB/authenticate.php" method="post">
      <div id="sign-up-container">
        <div id="email-container">
          <span>
            <p>Email</p>
            <input id="email" type="email" placeholder="Email" name="email" />
            <div id="emailError"></div>
          </span>
        </div>
        <br />
        <div id="passwrd-container">
          <span>
            <p>Password</p>
            <input id="passwrd" type="password" placeholder="Password" name="password" />
          </span>
          <?php
            if(isset($_SESSION["validity"])){?>
            <p>Incorrect email or password</p>
          <?php }?>
        </div>
        <br />
        <div>
          <span class="accQuestion"> Don't have an account? </span>
          <a href="./signup.php" class="no-accunt">Sign up</a>
        </div>
        <button type="submit" name="submit" id="submit-btn">Log in</button>
      </div>
    </form>
  </body>

  <script>
    const form = document.getElementById("form");
    const error = document.getElementById("emailError");
    form.addEventListener("submit", (e) => {
      const email = document.getElementById("email").value;
      const pass = document.getElementById("passwrd").value;
      if (!new RegExp(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g).test(email)) {
        error.innerText = "Please enter a vaild Email";
        e.preventDefault();
      }
      if(pass != storedPass){

      }
    });
  </script>
</html>
