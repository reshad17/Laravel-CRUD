<form action="{{route('year.store')}}" method="POST">
	@csrf
	<input type="text" name="year" placeholder="Year Name">
	<input type="text" name="month_name" placeholder="Month Name">
	<input type="text" name="day" placeholder="Day">
	<input type="text" name="user_name" placeholder="User Name">
	<button type="submit">Submit</button>
</form>