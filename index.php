<!DOCTYPE html>
<!-- Unit5-01-PHP-NumberDisplay -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Number display">
    <meta name="keywords" content="immaculata, ICS2O">
    <meta name="author" content="Noah Smith">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  	<!-- Favicon -->
  	<link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
  	<link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
  	<link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
  	<link rel="manifest" href="./fav_index/site.webmanifest">
  
  	<!--Link to CSS file-->
  	<link rel="stylesheet" href="./css/style.css">
  
  	<!-- Google's MDL -->
  	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-blue.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">

    <!--Title-->
  	<title>What movie can you watch in theaters?</title>
  
  </head>
  <body>
    
    <!--JavaScript-->
  	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  	<script src="./js/script.js"></script>

    <!--header-->
  	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  		<header class="mdl-layout__header">
  			<div class="mdl-layout__header-row">
  				<span class="mdl-layout-title">What movie can you watch in theaters?</span>
  			</div>
  		</header>
  	</div>
  	<main class="mdl-layout__content">
  		<br>
      <br>
      <br>
      <img src="./images/lots_of_numbers.jpg" alt="numbers" height="230" width="300">


      <!-- Enter a number -->
  		<form action="./results.php" method="post" target="results">
      <label for="user-number">Enter a number:</label>
      <input type="number" id="user-number" placeholder="Enter a number..."  name="user-number">
      <br>
      <input type="submit" value="calculate">
    </form>
      <p>
        <iframe id="results" name="results">
        </iframe>
  		</p>
    </main>
  </body>
</html>