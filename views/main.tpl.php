<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $pageData['title']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css" />

   <link
      href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,700&display=swap"
      rel="stylesheet"
    />

  
</head>


<? php
require('connect.php');

if (isset($_POST['username']) && isset($_POST['password'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO users (username, password, email) VALUES ('username', '$email', 'password')";
  $result= mysqli_query($connection, $query);

  if($result){
    $smsg = "Регистрация прошла успешно";
  } else {
    $fmsg = "Ошибка";
  }
  }

?>

<header class="header">
<div class="container">
        <div class="header__inner">
          <div class="header__logo">DeltaPlanTask</div>
  </div>
  </div>
  </header>

 <div class="container">
 <hr />
</div>

<body>
<div id="content">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Вход в личный кабинет</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">

                <form class="form-signin" method="POST">
                <?php if(isset($smsg)){ 
     echo "<div class=\'alert alert-success\' role=\'alert\'>". $smsg. "</div>";
}
?>

                <?php if(isset($fmsg)){ 
     echo "<div class=\'alert alert-danger\' role=\'alert\'>". $fmsg. "</div>";
}
?>

                <input type="text" class="form-control" name="login" id="login" placeholder="Login" required >
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                
                <a href="https://deltaplantest.000webhostapp.com/faq" class="pull-right need-help">Нужна помощь? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="https://deltaplantest.000webhostapp.com/taskView/tasks.php" class="text-center new-account"> Поставить задачу без регистрации </a>
                </form>
            </div>
            <a href="#" class="text-center new-account"></a>
        </div>

    </div>
</div>
</div>
</body>
<footer>
</footer>

<script type="/js/jquery.min.js"></script>
<script type="/js/bootstrap.min.js"></script>
<script type="/js/angular.min.js"></script>
<script type="/js/script.js"></script>
  

</html>
