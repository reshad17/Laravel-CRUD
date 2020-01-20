<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
<form action="{{route('user.store')}}" method="post">
	@csrf
	<input type="text" name="user_name"  placeholder="User Name">
	<input type="text" name="user_address"  placeholder="User Address">
	<input type="text" name="user_phone"  placeholder="User Phone Number">
	<button type="submit">Submit</button>
</form>
</body>
</html>