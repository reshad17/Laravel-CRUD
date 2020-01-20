<!DOCTYPE html>
<html>
<head>
	<title>User Informations</title>
</head>
<body>
	<table>
		<tr>
			<th>No.</th>
			<th>User Name</th>
			<th>User Address</th>
			<th>Action</th>

		</tr>
		
		@foreach($td as $all_td)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$all_td->user_name}}</td>
			<td>{{$all_td->user_address}}</td>
			<td><a href="{{route('user_edit',$all_td->id)}}">Edit</a> || <a href="{{route('user_delete',$all_td->id)}}">Delete</a></td>
		</tr>
		@endforeach
	</table>
</body>
</html>