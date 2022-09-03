<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php if(isset($title)){echo $title;}?>     </title>
    <!-- bootstrap 5 link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awsam link  -->
    <script src="https://kit.fontawesome.com/16dcf29601.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
<style> 
/* home flex.. */
.flexx{
  display: flex;
  border:solid 4px blueviolet;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  padding: 10px;

}
.flexx div{
  width:270px;
  height:270px;
  border:double 4px blueviolet;
  margin:15px;
}
/* end */

.navbar{
    background-color: rgb(110, 51, 168) !important;
    
}
/* design the search button in the nava bar  */
.btn:hover{
    background-color: rgb(99, 238, 87) !important ;
}
.btn{
  border: solid rgb(99, 238, 87) ;
  color:white;
}

a{
    color: white !important;
}
body{
  background-color: rgb(220, 215, 230) !important ;

    /* background-color: rgb(210, 189, 250) !important ; */
  /* background-color: rgb(184, 168, 214) !important ; */
    }


/* regier form style .. */
.center{
  display: flex;
  justify-content:center;
}
.center form input{
  display: block;
  width: 400px;
  border-radius:   10px;
}

@media only screen and (max-width: 500px) {
  .center form input{
    width: 270px;
  }
}
.center form label{
  color:white;
}
.center form input[type=button]{
width: 100px;
color:white;
background-color: rgb(238, 87, 87) ;
}


.center form {
  border:solid 4px blueviolet;
  padding:30px;
  border-radius:   20px;
  box-shadow: 0px 0px 50px rgb(222, 138, 255),  0px 0px 50px rgb(222, 138, 255), 0px 0px 50px rgb(222, 138, 255);
}

<?php
if(isset($title)){
  if ($title=="register" or $title=="login"){
    echo" .center form{
      background-image: linear-gradient(45deg, rgba(143, 64, 240,0.2) 0%, rgba(143, 64, 240,0.2) 16.667%,rgba(124, 44, 236,0.2) 16.667%, rgba(124, 44, 236,0.2) 33.334%,rgba(161, 85, 244,0.2) 33.334%, rgba(161, 85, 244,0.2) 50.001%,rgba(198, 125, 252,0.2) 50.001%, rgba(198, 125, 252,0.2) 66.668%,rgba(180, 105, 248,0.2) 66.668%, rgba(180, 105, 248,0.2) 83.335%,rgba(106, 24, 232,0.2) 83.335%, rgba(106, 24, 232,0.2) 100.002%),linear-gradient(22.5deg, rgba(143, 64, 240,0.2) 0%, rgba(143, 64, 240,0.2) 16.667%,rgba(124, 44, 236,0.2) 16.667%, rgba(124, 44, 236,0.2) 33.334%,rgba(161, 85, 244,0.2) 33.334%, rgba(161, 85, 244,0.2) 50.001%,rgba(198, 125, 252,0.2) 50.001%, rgba(198, 125, 252,0.2) 66.668%,rgba(180, 105, 248,0.2) 66.668%, rgba(180, 105, 248,0.2) 83.335%,rgba(106, 24, 232,0.2) 83.335%, rgba(106, 24, 232,0.2) 100.002%),linear-gradient(0deg, rgba(143, 64, 240,0.2) 0%, rgba(143, 64, 240,0.2) 16.667%,rgba(124, 44, 236,0.2) 16.667%, rgba(124, 44, 236,0.2) 33.334%,rgba(161, 85, 244,0.2) 33.334%, rgba(161, 85, 244,0.2) 50.001%,rgba(198, 125, 252,0.2) 50.001%, rgba(198, 125, 252,0.2) 66.668%,rgba(180, 105, 248,0.2) 66.668%, rgba(180, 105, 248,0.2) 83.335%,rgba(106, 24, 232,0.2) 83.335%, rgba(106, 24, 232,0.2) 100.002%),linear-gradient(90deg, rgb(179, 179, 179),rgb(96, 96, 96));
      
    }
    body{
      background-color: rgb(220, 215, 230) !important ;

    }
    
    ";
  }
}
?>


/* page changing effect .. */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --secondary-color: #151226;
  --contrast-color: #BF307F;
}
.overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  height: 100%;
  z-index: -10;
  /* background-color: var(--contrast-color); */
  background-color:red;
  /* background-color: rgb(220, 215, 230); */

}
.center{
  animation: expand .8s ease forwards;
  background-color: rgb(220, 215, 230);
  position: relative;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  transition: all .8s ease;
}
.flexx {
  display: flex;
  height: 100vh;
  justify-content: space-around;
  align-items: center;
  color: #fff;
  animation: expand .8s ease forwards;
  background-color: rgb(220, 215, 230);
  position: relative;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  transition: all .8s ease;
}

/* .container_content {
 width: 50%;
}

.container_content_inner {
  width: 80%;
  margin-left: 80px;
}

.container_outer_img {
  margin: 50px;
  width: 50%;
  overflow: hidden;
}   
    
.container_img {
  width: 100%;
  animation: slideIn 1.5s ease-in-out forwards;
}

.par {
  height: auto;
  overflow: hidden;
}

p{
  line-height: 28px;
  transform: translateY(300px);
  animation: slideUp .8s ease-in-out forwards .8s;
}

.btns {
  height: 100%;
  position: relative;
  width: 150px;
  overflow: hidden;
}

.btns_more {
  background: transparent;
  border: 1px solid var(--contrast-color);
  border-radius: 50px;
  padding: 8px 12px;
  color: #BF307F;
  font-size: 16px;
  text-transform: uppercase;
  position: relative;
  margin-top: 15px;
  outline: none;
  transform: translateY(50px);
  animation: slideUp .8s ease-in-out  forwards 1s;
}

.title {
  overflow: hidden;
  height: auto;
}

h1 {
    font-size: 40px;
    color: var(--contrast-color);
    margin-bottom: 20px;
    transform: translateY(100px);
    animation: slideUp .8s ease forwards .5s;
} */

@keyframes slideIn {
  0% {
    transform: translateX(500px) scale(.2);
  }
  100% {
    transform: translateX(0px) scale(1);
  }
}

@keyframes slideUp {
  0% {
    transform: translateY(300px);
  }
  100% {
    transform: translateY(0px);
  }
}

@keyframes expand {
  0% {
    transform: translateX(1400px);
  }
  100% {
    transform: translateX(0px);
  }
}










</style>
  </head>
<body class='body'>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">TrackMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="regester.php">Register</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="login.php">Settings</a>
        </li> -->
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
        <button id="b" class="btn button btn-outline-success border-4" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    
