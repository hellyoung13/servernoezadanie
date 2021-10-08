<?php require_once './vendor/db.php'; 
session_start();
if ($_SESSION['user']) {
  header('Location: profile.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Добро пожаловть  в блог Програмистов</title>
  </head>
  <body style="background-color: #eee;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Блог програмистов</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">О блоге</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Обратная связь</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
      </ul>
    </div>
      <a href="signUp.php" class="btn btn-success mx-3">Авторизация</a>
      <a href="regIn.php" class="btn btn-success mx-3">Регистрация</a>
  </div>
</nav>
      <section class="main container">
      <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="fw-bold lh-1 mb-3">Популярный IT-BLOG "Developers Blog" на территорий Казахстана</h1>
        <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-md-5 border rounded-3 bg-light" id="form" action="./vendor/logIn.php" method="post">
          <h3 class="mb-4">Войдите в блог</h3>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="fullname" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Введите ваше полное имя</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Введите пароль</label>
          </div>
          <button class="w-100 btn btn-lg btn-success" type="submit">Войти в аккаунт</button>
          <?php 
          
            if ($_SESSION['error'] === true){
              ?>
              
              <div class="alert alert-danger mt-3" role="alert"><?= $_SESSION['error_message'] ?></div>

              <?php
            }
              unset($_SESSION['error']);
              unset($_SESSION['error_message']);
          ?>
        </form>
      </div>
    </div>
      <div class="container">
        <footer class="mt-lg-5 d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-muted">© 2021 Company, Inc</p>
          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          </a>

          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
          </ul>
       </footer>
    </div>
  </div>
    <!-- /.row -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-------------------------Модальное окно Авторизаций--------------------------------------->
<div class="modal fade" id="SignUpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Вход в блог</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="bg-light" id="form" action="./vendor/logIn.php" method="post">
            <h3 class="mb-4">Войдите в блог</h3>
            
            <div class="mb-3">
              <label for="#" class="mb-2">Введите ваше полное имя</label>
              <input type="text" class="form-control" name="fullname"  placeholder="Введите ваше полное имя">          
            </div>

            <div class="mb-3">
              <label for="#" class="mb-2">Введите ваше пароль</label>
              <input type="password" name="password" class="form-control"  placeholder="Введите ваше пароль">          
            </div>
            <?php 
          
          if ($_SESSION['error'] === true){
            ?>
            
            <div class="alert alert-danger mt-3" role="alert"><?= $_SESSION['error_message'] ?></div>

            <?php
          }
            unset($_SESSION['error']);
            unset($_SESSION['error_message']);
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary">Авторизацоваться</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!---------------------------------Модальное Регистраций------------------------------->
<div class="modal fade" id="RegisterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">RegisterModal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="bg-light">
          <h3 class="mb-4">Зарегистрируйтесь в блог</h3>
          <div class="mb-3">
            <label for="#" class="mb-2">Введите ваше полное имя</label>
            <input type="text" name="fullname" class="form-control"  placeholder="Введите ваше полное имя">          
          </div>
            
          <div class="mb-3">
            <label for="#" class="mb-2">Введите ваш контакный номер телефона</label>
            <input type="tel" name="phone" class="form-control" placeholder="Введите ваш контакный номер телефона">          
          </div>
  
          <div class="mb-3">
              <label for="#" class="mb-2">Введите пароль</label>
              <input type="password" name="password" class="form-control" placeholder="Введите пароль">          
          </div>
            
          <div class="mb-3">
              <label for="#" class="mb-2">Подтвердите ваш пароль</label>
              <input type="password" name="password_confirm" class="form-control" placeholder="Подтвердите ваш пароль">          
          </div>

          <div class="mb-3">
              <label for="#" class="mb-2">Выберите ваш аватар</label>
              <input type="file" name="avatar" class="form-control">
          </div>

          <div class="alert alert-danger" role="alert">Какая-та ошибка!</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-success">Зарегистрироваться в блоге</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>