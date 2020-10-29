<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style type="text/css">
		input{
			border: 1px solid #000;
			padding: 7px;
            margin-bottom: 5px;
		}
        .login{
            border-radius: 3px;
            padding:4px;
        }
	</style>
</head>
<body class="text-center">
@include('shared.header')

@include('shared.messages')
@yield('content')

@include('shared.footer')
    
</body>
</html>