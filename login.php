<?php
session_start();
?>



<!DOCTYPE html>
<html lang="lt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Boogaloo&display=swap" rel="stylesheet">
    <title>GrowFarm</title>
  </head>
  <body>
    <header>
      <div class="container-fluid header text-center ">
        <div class="row">

          <div class="col-12 bg-warning">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link active linkai" href="#">Apie Mus</a>
              </li>
              <li class="nav-item">
                <a class="nav-link linkai" href="#">Apie Žaidimą</a>
              </li>

            </ul>
          </div>
      <div class="col-12 py-5 GrowFarm" >
            <a href="index.html"><h3>GROW FARM</h3></a>
      </div>

        </div>
      </div>

    </header>



    <main class="login">
      <div class="container pt-3 ">
      <form action="includes/prisijungimas.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Slapyvardis</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Įveskite savo Slapyvardį" name="username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Slaptažodis</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Slaptažodis" name="pwd">
  </div>
  <button type="submit" class="btn btn-primary" name="submit" value="submit">Prisijungti</button>
</form>
    </div>
  </main>


    <footer class="bg-dark text-center">
      <h5>Prisijunkite prie mūsų <a href="#">Facebooke!</a></h5>
      <h6>© 2019 Edvinas Stuobrys All Rights Reserved</h6>

    </footer>
  </body>
</html>
