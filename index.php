<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<title>SAMIR</title>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">SAM Garden Center</a>
        
        
        <div class="navbar" >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="charte.html">Notre Charte
                
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="nos services.html">Nos Services
                
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home
                
              </a>
            </li>
        
          </ul>

          <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

        </div>
      </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
      <div class="row">
    	<div class="col-lg-4" style=" background-color: green ;">
    	<img class="img-fluid rounded" src="image/jardinier.jpg" alt="" width="100">
    		<h1 id="h1" class="text-primary"> Sam Garden Center </h1><br> <h2>Paysagiste sur Tunis et Région</h2>
    		<hr>
            <h2>Nos prestations:</h2><br>
            
            <a class="nav-link" href="nos services.html" style="font-size:20px;">Conception et création de jardins 
              </a>
            <a class="nav-link" href="nos services.html" style="font-size:20px;">Elagages, clôtures et portails 
              </a>
            <a class="nav-link" href="nos services.html" style="font-size:20px;">Entretien et rafraichissement 
              </a>
            <br>
            <dt class="text-info">E-mail:</dt><dl>SamGardenCenter@gmail.com</dl>
            

    	</div>
    	<div class="col-lg-4" style=" background-image: url('image/paysagisme.jpg') ;">
              
    	<p>
       <h1 class="text-white">Faire appel à notre entreprise de paysagiste, c'est faire le choix de la qualité, quelque soit votre projet. </h1>

      </p>
    	</div>

      <div class="col-lg-4" style=" background-color: red ;">
                
      <h3>Contact</h3>
           <form method="post" action="insert.php">
           <label>votre mail</label>
           <input type="email" name="" class="form-control">
           <label>sujet</label>
           <input type="" name="" class="form-control">
           <label>message</label>
           <textarea class="form-control" rows="3"></textarea>
        <button class="btn btn-success">Envoyer</button>
        </form><br><br>


          <div style="margin: 10px;">
          <a href="#"><i class="fa fa-dribbble" style="font-size:48px;"></i></a> 
          <a href="#"><i class="fa fa-twitter" style="font-size:48px;"></i></a>  
          <a href="#"><i class="fa fa-linkedin"style="font-size:48px;" style="font-size:48px;"></i></a>  
          <a href="#"><i class="fa fa-facebook" style="font-size:48px;"></i></a> 
          <a href="#"><i class="fa fa-youtube-square" style="font-size:48px;"></i></a>
        

      </div>


      </div> 
    </div>
	<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; <br> décembre 2017 </p>
      </div>
      <!-- /.container -->
    </footer>
<script type="text/javascript" src5="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
 ></script>
</body>

<script type="text/javascript">
    var name = prompt("please enter your name");
    
    var age = prompt("please enter your age");
    if(age<12){window.open("google.com"); }
    alert("Welcome " + name);


</script>

<script type="text/javascript">
  $("#h1").text("Welcome "+ name);

</script>




</html>