<h1>All Profile</h1>
<table border="1">
	<tr>
		<th>id  </th>
		<th>name : </th>
		<th>lastname : </th>
	</tr>
	@foreach($profiles as $profile)
	<tr>
		<td>{{ $profile->id }}</td>
		<td>{{ $profile->name }}</td>
		<td>{{ $profile->lastname }}</td>
	</tr>
	@endforeach
</table>
