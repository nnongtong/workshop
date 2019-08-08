<!-- this file location is /resources/views/profile/show.blade.php  -->
<h1>Profile : {{ $profile->id }}</h1>
<div>
	<strong>Name : </strong>
	<span>{{ $profile->name }}</span>
</div>
<div>
	<strong>Last Name : </strong>
	<span>{{ $profile->lastname }}</span>
</div>