<html>
	<head>
	{{ HTML::style('/css/bootstrap.min.css') }}
	</head>
	<style>
		.form-control{
			width: 450px;
			margin: auto;
			text-align: center;
		}

		body{
		/*	text-align: center;*/
			text-align: center;
			margin-top: 50px;
		}
		label{
			color: white;
		}
		
		.border{
			padding: 35px;
			color: white;
			margin: auto;
			width: 500px;
			text-align: center;
			color: white ;
			background-color: rgba(0, 155, 223, 0.9);
		}
		img{
			margin-bottom: 50px;
		}
	</style>
	<body>
		<img src = "images/bio-logo.png" style="
    height: 140px;
">
		<div class = "border"> 
			{{ Form::open(array('url' =>'sessions/store')) }}
			{{ Form::label('username','Username: ') }}
			{{ Form::text('username',null,['class' => 'form-control']) }}<br/>
			{{ Form::label('password','Password: ') }}
			{{ Form::password('password',['class' => 'form-control', 'style' => '']) }}<br/>
			{{ Form::submit('Login',['class' => 'btn btn-danger']) }}<br><br>
			<span class = "margin">{{ $message }}</span>
			{{ Form::close() }}
		</div>
	</body>
</html>

<style>
	body {
		background: url('images/login-bg.jpg') no-repeat top center;
		background-color: #ebebeb;
	}
</style>