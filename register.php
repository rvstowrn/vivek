<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./styles/register_style.css" />
    <title>Register Page</title>
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
    <h1>Register</h1>
    <div class="flexbox">
        <img src='./assets/register.png'>
        <form id='register_form' method='post' action='./api/register_api.php'>
            <label>Name</label>
            <input type='name' id="name" name="name" placeholder="Enter name" required >
            <label>Email</label>
            <input type='email' id="email" name="email" placeholder="Enter email" required>
            <label>Username <span id='username_validation_text'>status</span></label>
            <input type='username' id="username" name="username" onkeyup='check_username()' placeholder="Enter username" required>
            <label>Password</label>
            <input type='password' id="pass" name="pass" placeholder="Enter password" required>
            <label>Confirm Password</label>
            <input type='password' id="cpass" placeholder="Retype password" required>
            <label>Phone Number</label>
            <input type="number" id="phone" name="phone" placeholder="Enter Phone Number" required>
            <button type="button" onclick="validation()">REGISTER</button>
        </form>
    </div>
    <a class="side-msg" href='./'>Already have an account. Login here</p>
    <script src="./scripts/register_script.js"></script>
</body>
</html>