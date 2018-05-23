<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta charset="utf-8"/>
    <meta charset="utf-8"/>
    <title>MathMate </title>
</head>
<body>

   
     <a><img src="../img/logo.png" id="logo" width="20%;"></a> 
 <img src="../img/alphabet-black-and-white-business-256369.jpg" id="banner">
    <div class="row">
    <div class="col"><p><strong>Math </strong>Mate</p></div>
    <div class="col"><p id="by"> by Casper a Yustin</p></div>
    </div>  
<nav class="navbar navbar-expand-lg navbar-light bg-light">

 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link " href="../../../home page/html/home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="../../../presentatie/html/index.php">presentatie</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          catogorieën
        </a>
        <div class="dropdown-menu active" aria-labelledby="navbarDropdown">
          <a class="dropdown-item disabled active" href="#">optellen/aftrekken</a>
          <a class="dropdown-item" href="#">rad van fortuin</a>
          <a class="dropdown-item" href="../../rekena pagina/PHP/index.php">rekenpagina</a>
          <a class="dropdown-item" href="#">pittige rekenpagina</a>
          <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="#">Priemgetallen</a>
          <a class="dropdown-item" href="#">Reeks van fibonacci</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../../../PHP/uitloggen.php">uitloggen</a>
      </li>
  
    </ul>
     
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      		
				
					<button type="button" class="btn btn-primary raised">search</button>
					
				
			
    </form>
 
  </div>
</nav>

  
<div id="page">
<div class="box">
     
        <div class="container" style="margin-top:100px;">
        <table class="table text-center">
            <tr>
                <td colspan="2"><input id="btnSpinIt" type="submit" value="Spin It" class="input-sm form-control btn-primary" onclick="spinIt()"></td>
            </tr>
            <tr>
                <!--rad 1-->
                <td>
                    <div class="pointer"></div><div id="rad" class="text-center"></div>
                </td>
                
                <!--rad 2-->
                <td>
                    <div class="pointer"></div><div id="rad2" class="text-center"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input id="btnClearIt" type="submit" value="Clear It" class="input-sm form-control btn-danger" onclick="ClearIt()"></td>
            </tr>
            <tr>
                <td><input id="ipNumberRad1" type="text" class="input-sm form-control"></td>
                <td><input id="ipNumberRad2" type="text" class="input-sm form-control"></td>
            </tr>
        </table>
    </div> 
    

</div>
    
    
<div class="footer">
<p>Copyright © 2009 - 2018 - All Rights Reserved - MathMate.</p>    

    
    </div>
 </div>      





 <script src="../js/main.js"></script> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>