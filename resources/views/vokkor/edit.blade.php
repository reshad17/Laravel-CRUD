<!DOCTYPE html>
<html>
<head>
	<title>Information Update</title>
</head>
<body>
	<form action="{{route('vokkor.update',$id)}}" method="post">
		@csrf
		@method('PUT')
		<input type="text" name="name" value="{{$vok[0]->name}}">
		<input type="text" name="address" value="{{$vok[0]->address}}">
		<input type="text" name="gender" value="{{$vok[0]->gender}}">
		<button type="submit">Submit</button>
	</form>
</body>
</html>