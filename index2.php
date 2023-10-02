<?php
$conn = mysqli_connect('localhost' , 'root','root', 'win');




$first_name = $_post['first_name'];
$last_name = $_post['last_name'];
$email = $_post['email '];
if (isset ($_post['login'])){

echo $first_name . ' ' . $last_name . '' . $email;}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    
<link rel="stylesheet" href="stayle2.css">

</head>

<body>

    <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>-->


<h1>the first login</h1>
<h2>Log in to make purchases and sales through the site</h2>
<img src="2.jpg" alt="">

<p id="p1">Our site enables you to trade products and commercial skills in terms of
     profits</p><br><p id="p2">and there are services and discussions with </br>the investing parties, and you can use these services by logging in</p>






<form action="page.php" method="post">
    <input type="text" placeholder="first name" id="n1">
    <input type="text" placeholder="last name" id="n2">
    <input type="text" placeholder="email"id="e">
    <input type="password" placeholder="password" id="p">
    <input type="date" placeholder="date" id="d">
    <input type="month" placeholder="month" id="m">
    <input type="text" placeholder="phone" id="po">
    <button name="login">login</button>
    <input type="checkbox" name="" id="ch">
    <a href="">im not robot</a>
</form>
    









</body>
</html>