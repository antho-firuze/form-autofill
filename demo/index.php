<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form-Autofill Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../js/form-autofill.js"></script>
</head>
<body>

<div class="container">
  <h1>Form Autofill Example Page</h1>
	<form role="form">
		<div class="box-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Another Text</label>
				<input type="text" class="form-control" id="exampleInputText" placeholder="Enter Text">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Another Number</label>
				<input type="number" class="form-control" id="exampleInputNum" placeholder="Enter Number">
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" id="exampleCheck"> Check me out
				</label>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<button type="submit" class="btn btn-primary">Submit</button>
			<button type="reset" class="btn btn-primary">Reset</button>
		</div>
	</form>
</div>
</body>
<script>
	var data = {"exampleInputEmail1":"anonymous@local.host", "exampleInputPassword1":"12345", "exampleInputText":"Input type text", "exampleInputNum":99, "exampleCheck":true};
	
	$(document).ready(function(){
		$('form').xform('load', data);
		// console.log('load');
	});
	
	$('form').on('reset', function(){
		$(this).xform('reset');
	});
</script>
</html>