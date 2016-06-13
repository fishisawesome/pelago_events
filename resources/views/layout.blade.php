<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{ isset($page_title) ? $page_title : 'Pelago Events' }}</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		
		<!-- Bootstrap -->
	    <!-- Latest compiled and minified CSS -->
	    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	    <!-- Font Awesome -->
	    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	    <!-- Custom CSS -->
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<div id="app" class="container">
		<h1 class="text-center">Pelago Events</h1>
		@yield('content')
		</div>
	    
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="//code.jquery.com/jquery.js"></script>
	    <!-- Latest compiled and minified JavaScript -->
	    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

	    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>
	    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.4/vue-resource.min.js"></script>
	    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
	</body>
</html>