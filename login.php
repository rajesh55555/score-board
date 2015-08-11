<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <title>welcome to log in page </title>
    <style media="screen">
    body{
      background-color:#A9DA88;
    }
    .kill{
      background-color:#87090C;color:white;padding-top: 68px;padding-bottom: 68px;padding-left: 70px;
    }
    .kill a{
      text-decoration: none;padding-left: 10px;color: white;font-size: 20px;
      font-weight: bold;
    }
    .game1 a{
      color: white;border:2px solid white;font-size:30px;text-decoration: none;
      border-radius: 5px;display:inline block;padding: 2px;
    }
    .game1{
      background-color:#87090C;color:white;padding-top: 50px;padding-bottom: 72px;
    }
    .max p{
      font-size: 25px;text-align: center;
    }
    .form-group{
      text-align: center;font-size: 20px;
    }
    .form-group input{
      border: 2px solid maroon;border-radius: 5px;width: 350px;color: #4D394B;
    }
    .form-group label{
      color: #4D394B;
    }
    .checkbox{
      text-align: center;font-size: 15px;
    }.max1{
      text-align: center;
      }
    .max1 input{
      border: 2px solid #4D394B;border-radius: 5px;font-size: 20px;width: 200px;
      background:white;color: #4D394B;height: 40px;
    }
    .max1 input:hover{
      background-color:#4D394B;color: white;
    }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <img src="http://midboss.com/wp-content/uploads/2015/02/devolver-logo.jpg" width="300px"height="164px" alt="Responsive image">
        </div>
        <div class="col-md-6 kill">
          <a href="http://store.steampowered.com/">STORE</a>
          <a href="http://steamcommunity.com/">COMMUNITY</a>
          <a href="http://store.steampowered.com/about/">ABOUT</a>
          <a href="https://help.steampowered.com/">SUPPORT</a>
        </div>
        <div class="col-md-3 game1">
          <a href="#">SIGNUP</a>
        </div>
      </div>
    </div><br><br>
    <div class="max">
      <p>Welcome to Devolver Digital Gaming Zone.....<br>Login Soon For New Updates And Exciting Games</p>
    </div><br>
    <form class="" action="index.html" method="post">
      <div class="form-group">
        <label for="username">UserName:</label><br>
        <input type="text" name="username" value=""placeholder="enter your username.."><br>
      </div>
      <div class="form-group">
        <label for="password">Password:</label><br>
        <input type="password" name="password" value=""placeholder="enter your password..."><br>
      </div>
      <div class="checkbox">
        <label>
         <input type="checkbox"> Remember me out
          </label>
      </div><br>
      <div class="max1">
        <input type="submit" name="submit" value="SignUp"><br><br><br>
      </div>
    </form>
  </body>
</html>
