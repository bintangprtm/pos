<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login To Site</title>

  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <body>
<div class="container">
	<section id="content">
		<form method="POST" action="../function/usersession.php?act=login">
			<h1>Login Form</h1>
			<div>
				<input type="text" name="username" placeholder="Username" required="" id="username" />
			</div>
			<div>
				<input type="password" name="password" placeholder="Password" required="" id="password" />
			</div>
			<div>
				<input type="submit" value="Log in" />
				
			</div>
		</form><!-- form --
	</section><!-- content -->
</div><!-- container -->
</body>
  
  

    <script  src="js/index.js"></script>




</body>

</html>
