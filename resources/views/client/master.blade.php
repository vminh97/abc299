<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOCONLINE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="source/client/assets/dest/css/1.css">
  <link rel="stylesheet" href="vendor/font-awesome.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="1.js">	 
  </script>

</head>
<body>
  	@include('client.header')
	<div class="rev-slider">
	@yield('content')
	</div> <!-- .container -->
		@include('client.footer')
</body>
</html>