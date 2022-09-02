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
}

<?php
if(isset($title)){
  if ($title=="register"){
    echo" .center form{
      background-image: linear-gradient(45deg, rgba(143, 64, 240,0.2) 0%, rgba(143, 64, 240,0.2) 16.667%,rgba(124, 44, 236,0.2) 16.667%, rgba(124, 44, 236,0.2) 33.334%,rgba(161, 85, 244,0.2) 33.334%, rgba(161, 85, 244,0.2) 50.001%,rgba(198, 125, 252,0.2) 50.001%, rgba(198, 125, 252,0.2) 66.668%,rgba(180, 105, 248,0.2) 66.668%, rgba(180, 105, 248,0.2) 83.335%,rgba(106, 24, 232,0.2) 83.335%, rgba(106, 24, 232,0.2) 100.002%),linear-gradient(22.5deg, rgba(143, 64, 240,0.2) 0%, rgba(143, 64, 240,0.2) 16.667%,rgba(124, 44, 236,0.2) 16.667%, rgba(124, 44, 236,0.2) 33.334%,rgba(161, 85, 244,0.2) 33.334%, rgba(161, 85, 244,0.2) 50.001%,rgba(198, 125, 252,0.2) 50.001%, rgba(198, 125, 252,0.2) 66.668%,rgba(180, 105, 248,0.2) 66.668%, rgba(180, 105, 248,0.2) 83.335%,rgba(106, 24, 232,0.2) 83.335%, rgba(106, 24, 232,0.2) 100.002%),linear-gradient(0deg, rgba(143, 64, 240,0.2) 0%, rgba(143, 64, 240,0.2) 16.667%,rgba(124, 44, 236,0.2) 16.667%, rgba(124, 44, 236,0.2) 33.334%,rgba(161, 85, 244,0.2) 33.334%, rgba(161, 85, 244,0.2) 50.001%,rgba(198, 125, 252,0.2) 50.001%, rgba(198, 125, 252,0.2) 66.668%,rgba(180, 105, 248,0.2) 66.668%, rgba(180, 105, 248,0.2) 83.335%,rgba(106, 24, 232,0.2) 83.335%, rgba(106, 24, 232,0.2) 100.002%),linear-gradient(90deg, rgb(179, 179, 179),rgb(96, 96, 96));
      
    }
    body{
      background-color: rgb(205, 184, 243);
    }
    
    ";
  }
}
?>












</style>
  </head>
<body class='body'>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        <button id="b" class="btn button btn-outline-success border-4" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    
