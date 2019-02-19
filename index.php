<?php
include './server/connect.php';
session_start();
if (!$_SESSION['user']){
  header('location:./login.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Hello, world!</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">CH-App</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarColor01">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
                    </li>
                  </ul>
                </div>
              </nav>
        <div id="loginDiv" style="background-color:White;">
            <div class="container text-center">
                <h1 class="h3 mb-3 font-weight-normal">Welcome <?php echo $_SESSION["user"]['user_name']; ?> :)</h1>
                <small>Write a message</small>
                <form onsubmit="foo()" method="POST" action="./server/process.php" class="">
                  <div class="form-group px-5 mx-5">
                    <textarea name="msg_content" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea><br>
                    <input name="msg_user" type="hidden" value="<?php echo $_SESSION["user"]['user_name']; ?>">
                    <button name="send" type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                  </div>
                </form>
                <hr>
                <ul>
            <div id="chat">
            
            </div>
            </div>




        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>