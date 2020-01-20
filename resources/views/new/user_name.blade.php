<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>

	<form action="{{route('new.store')}}" method="post">
		@csrf
		<input type="text" name="user_name" placeholder="User Name">
		<input type="text" name="user_address" placeholder="User Address">
		<button type="submit">Submit</button>
	</form>
</body>
</html>