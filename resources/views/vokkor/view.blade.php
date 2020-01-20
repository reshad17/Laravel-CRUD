<!DOCTYPE html>
<html>
<head>
	<title>All Data</title>
</head>
<body>
	<table>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Address</th>
			<th>Gender</th>
			<th>Action</th>
		</tr>

		@foreach($vok as $all_vok)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$all_vok->name}}</td>
			<td>{{$all_vok->address}}</td>
			<td>{{$all_vok->gender}}</td>
			<td><a href="{{route('vokkor.edit',$all_vok->id)}}">Edit</a> || <a href="{{route('vokkor.delete',$all_vok->id)}}">Delete</a></td>
		</tr>
		@endforeach
	</table>
</body>
</html>