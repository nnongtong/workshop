<h1>Position : {{ $position->id }} </h1>
<div>
	<strong>id : </strong>
	<span>{{ $position->id }} </span>
</div>
<div>
	<strong>name : </strong>
	<span>{{ $position->name }} </span>
</div>
<div>
<a href="{{ url('/') }}/position">back to position</a>
</div>