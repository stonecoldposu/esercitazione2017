<!DOCTYPE html>
<html>
  <head>
    <title>Il mio negozio</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='css/bootstrap.min.css' rel='stylesheet' media='screen'>
    <script src="js/jquery-1.10.1.js"></script>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
  
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
	  <div class="navbar-header">
	     <button class="navbar-toggle" data-toggle="collapse"
		 data-target="#menunegozio">
		   <span class="icon-bar"></span>
		   <span class="icon-bar"></span>
		   <span class="icon-bar"></span>
			 </button>
	  </div>
	  
	  <div id="menunegozio" class="collapse navbar-collapse">
	     <ul class="nav navbar-nav">
		   <li><a href="index.php">Home</a></li>
		   <li class="active"><a href="#">Registrati</a></li>
		   <li class="dropdown">
		      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			  Fai da te<span class="caret"></span></a>
			  <ul class="dropdown-menu">
			    <li><a href="ordini.php">I miei ordini</a></li>
				<li><a href="carrello.php">Carrello</a></li>
				<li class="divider"></li>
				<li><a href="logout.php">Disconnettiti</a></li>
			  </ul>
		   </li>
		 </ul>
	  </div>
	</div>
  </nav>
  
  <div class="container">
  <br><br><br><br><br><br>
  <h1>Registrati</h1>
  <div class="row">
    <form action="do_registra.php" method="post" class="form-horizontal">
	   <div class="form-group">
	     <label for="email" class="col-sm-4 control-label">E-mail</label>
		 <input type="email" id="email" required class="form-control" placeholder="Inserisci il tuo indirizzo e-mail">
	   </div>
	   <div class="form-group">
	     <label for="nome" class="col-sm-4 control-label">Nome</label>
		 <input type="text" id="nome" required class="form-control" placeholder="Es. Mario">
	   </div>
	   <div class="form-group">
	     <label for="cognome" class="col-sm-4 control-label">Cognome</label>
		 <input type="text" id="cognome" required class="form-control" placeholder="Es. Rossi">
	   </div>
	   <div class="form-group">
	     <label for="pwd" class="col-sm-4 control-label">Password</label>
		 <input type="password" id="pwd" required class="form-control" placeholder="Inserisci la password">
	   </div>
	   <div class="form-group">
	     <button type="submit" class="btn btn-warning col-sm-offset-4 col-sm-3">
		 Registrati</button>
	   </div>
	</form>
  </div>  
  </div>
  
  </body>
</html>





