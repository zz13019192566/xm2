<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$title}}</title>
	<link rel="stylesheet" type="text/css" href="/bs337/css/bootstrap.min.css">
	<script type="text/javascript" src='bs/js/bootstrap.min.js'></script>
	<script type="text/javascript" src='bs/js/jquery.min.js'></script>
</head>
<body>
	
	
	<div class="container">
		<div class="row">
			<h1>{{$title}}</h1>
		</div>
		<div class="row">
			<div class="col-md-6">
				<form>
				    <div class="form-group">
				        <label for="exampleInputEmail1">
				            Email address
				        </label>
				        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				    </div>
				    <div class="form-group">
				        <label for="exampleInputPassword1">
				            Password
				        </label>
				        <input type="password" class="form-control" id="exampleInputPassword1"
				        placeholder="Password">
				    </div>
				    <div class="form-group">
				        <label for="exampleInputFile">
				            File input
				        </label>
				        <input type="file" id="exampleInputFile">
				        <p class="help-block">
				            Example block-level help text here.
				        </p>
				    </div>
				    <div class="checkbox">
				        <label>
				            <input type="checkbox">
				            Check me out
				        </label>
				    </div>
				    <button type="submit" class="btn btn-default">
				        Submit
				    </button>
				</form>
			</div>
		</div>

	</div>
</body>
</html>