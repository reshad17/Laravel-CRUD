<!DOCTYPE html>
<html>
<head>
	<title>Vokkor</title>
</head>
<body>
	<form action="{{route('vokkor.save')}}" method="post">
		@csrf
		<input type="text" name="name" placeholder="Name">
		<input type="text" name="address" placeholder="Address">
		<input type="text" name="gender" placeholder="Gender">
		<button type="submit">Submit</button>
	</form>
</body>
</html>