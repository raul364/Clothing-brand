<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/signup.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Assistant:wght@500&display=swap"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <title>Sign up</title>
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
    <form id="form" action="../DB/register.php" method="post">
      <div id="sign-up-container">
        <div id="email-container">
          <span>
            <p>Email</p>
            <input id="email" type="email" placeholder="Email" name="email"/>
            <div id="emailError" class="glyphicon"></div>
          </span>
        </div>
        <br />
        <div id="passwrd-container">
          <span>
            <p>Password</p>
            <input id="passwrd" type="password" placeholder="Password" name="password"/>
          </span>
          <br />
          <br />
          <div id="Length" class="glyphicon glyphicon-remove">
            Must be at least 8 charcters
          </div>
          <div id="UpperCase" class="glyphicon glyphicon-remove">
            Must have atleast 1 upper case character
          </div>
          <div id="LowerCase" class="glyphicon glyphicon-remove">
            Must have atleast 1 lower case character
          </div>
          <div id="Numbers" class="glyphicon glyphicon-remove">
            Must have atleast 1 numeric character
          </div>
          <div id="Symbols" class="glyphicon glyphicon-remove">
            Must have atleast 1 special character
          </div>
        </div>
        <br />
        <div>
          <span class="accQuestion"> Already have an account? </span>
          <a href="./Login.php" class="has-accunt">Login</a>
        </div>
        <button type="submit" name="submit" id="submit-btn">Sign up</button>
      </div>
    </form>
  </body>

  <script>
    const form = document.getElementById("form");
    const error = document.getElementById("emailError");
    form.addEventListener("submit", (e) => {
      const email = document.getElementById("email").value;

      if (!new RegExp(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g).test(email)) {
        error.innerText = "Please enter a vaild Email";
        e.preventDefault();
      }

      validatePass = ["Uppercase", "LowerCase", "Numbers", "Symbols"];
      for (var i = 0; i < validatePass.length; i++) {
        if ($("#" + validatePass[i]).hasClass("glyphicon-remove")) {
          e.preventDefault();
        }
      }
    });
    function ValidatePassword() {
      /*Array of rules and the information target*/
      var rules = [
        {
          Pattern: "[A-Z]",
          Target: "UpperCase",
        },
        {
          Pattern: "[a-z]",
          Target: "LowerCase",
        },
        {
          Pattern: "[0-9]",
          Target: "Numbers",
        },
        {
          Pattern: "[!@@#$%^&*]",
          Target: "Symbols",
        },
      ];
      //Just grab the password once
      var password = $(this).val();

      /*Length Check, add and remove class could be chained*/
      /*I've left them seperate here so you can see what is going on */
      /*Note the Ternary operators ? : to select the classes*/
      $("#Length").removeClass(
        password.length > 7 ? "glyphicon-remove" : "glyphicon-ok"
      );
      $("#Length").addClass(
        password.length > 7 ? "glyphicon-ok" : "glyphicon-remove"
      );

      /*Iterate our remaining rules. The logic is the same as for Length*/
      for (var i = 0; i < rules.length; i++) {
        $("#" + rules[i].Target).removeClass(
          new RegExp(rules[i].Pattern).test(password)
            ? "glyphicon-remove"
            : "glyphicon-ok"
        );
        $("#" + rules[i].Target).addClass(
          new RegExp(rules[i].Pattern).test(password)
            ? "glyphicon-ok"
            : "glyphicon-remove"
        );
      }
    }

    /*Bind our event to key up for the field. It doesn't matter if it's delete or not*/
    $(document).ready(function () {
      $("#passwrd").on("keyup", ValidatePassword);
    });
  </script>
</html>
