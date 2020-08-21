<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./styles/index_style.css" />
  <style>
    .side-msg{
      text-decoration: none;
      font-size: 20px;
      position: absolute;
      bottom: 10px;
      right: 30px;
      color: #444;
      font-family: cursive;
    }
    .side-msg:hover{
        text-decoration: underline;
    }
  </style>
</head>
<body>
  <main>
    <ul>
      <li style="font-size:29px;">login</li>
      <form id="login_form" method='post' action='./api/login_api.php'>
        <li><b>username</b> <input type="text" placeholder="Enter Username" id="username" name="username" required></li>
        <li><b>password</b> <input type="password" placeholder="Enter Password" id="pass" name="pass" required></li>
        <li><button type="button" onclick="validation()">let me in</button></li>
      </form>
    </ul>
  </main>
  <img src="./assets/blog.jpg">
  <a class="side-msg" href='./register.php'>New to our website. Register here </p>
  <script src="./scripts/index_script.js"></script>
</body>
</html>