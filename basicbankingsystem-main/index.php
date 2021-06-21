<!DOCTYPE html>
<html lang="en">
<head>
   <title>Hinustan Bank</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/navbar.css">

</head>
<body style="background-color :white;">

<!-- Navigation bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HINDUSTAN BANK  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="createuser.php">createuser</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="transfermoney.php">transfermoney</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="transactionshistory.php">Transfer History</a>
        </li>
       
        
</div>


      </ul>
      
    </div>
  </div>
</nav>

<!-- Caraousel-->

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/3.jpg" alt="Create User" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Create User</h3>
    </div>
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg " alt="Easy Money Transfer" width="1100" height="500">
      <div class="carousel-caption  d-none d-md-block">
    <h3>Easy Money Transfer</h3>
    </div>
    </div>
    <div class="carousel-item">
      <img src="images/4.Jpg " alt="Transfer History" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Transfer History</h3>
    </div>
    </div>
  </div>
  
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
 <!-- Activity section -->
 <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="images/user.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #4682B4;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="images/user3.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #4682B4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="images/history.Jpg" class="img-fluid">
                    <br>
                    <a href="transactionshistory.php"><button style="background-color : #4682B4;">Transaction History</button></a>
                  </div>
            </div>
      </div>



<footer class="text-center mt-2 py-5">
        <p>&copy 2021  <b>RIYA PANCHAL</b> 
      </footer>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>
</html>