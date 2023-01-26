<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.1-web\css\all.css">
   <link rel="stylesheet" type="text/css" href="../bootstrap-4.6.0-dist\css\bootstrap.min.css">
</head>
<style>
	body{
		background-color: #f3f3f3;
	}
	h1{
		margin-top: 100px;
		font-size: 50px
	}

	form{
		margin-top: 20px;
		background-color: #fff;
	}
	p i{
		font-size: 50px;
	}
</style>
<body>
       <div class="container">

		<h1 class="text-center" style="">ADMIN LOGIN</h1>

 		<p class="text-center" style="font-size:20px;"><i class="fas fa-user-secret" ></i></p>
		<form class="form border shadow p-5 col-md-6 m-auto">
       		<div class="form-group mt-3">
       			<h6 for="accno"><i class="fas fa-user"></i> Account Number</h6>
       			<input type="text" name="accno" id="accno" class="form-control" placeholder="Account Number">
       		</div>
       		<div class="form-group mt-3">
       			<h6 for="user"><i class="fas fa-lock"></i> Password</h6>
       			<input type="password" name="" id="password" class="form-control" placeholder="Password">
       		</div>
       		
       		<input type="submit" name="submit" class="btn btn-outline-none col-md-12 text-white mb-3" value="SUBMIT" style="background-color: #152D35;">

       		<a class="btn btn-danger mt-3" href="../index.html">BACK TO HOME</a>
       	</form>
       </div>

</body>
</html>