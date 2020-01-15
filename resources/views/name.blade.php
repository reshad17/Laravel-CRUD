<!DOCTYPE html>
<html>
<head>
	<title>Name</title>
</head>
<body>
<form action="" method="POST">
	@csrf
	<input type="text" name="user_name" placeholder="User Name">
	<input type="text" name="user_address" placeholder="User Address">
	<input type="text" name="user_phone" placeholder="User Phone Number">
	<button type="submit">Submit</button>
</form>
</body>
</html>