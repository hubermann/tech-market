@extends('layouts.backend')

@section('content')
<div class="container-fluid">
	<div class="row">
		
			@foreach ($notes as $note)
			<p>This is note: {{ $note->title }} {{ $note->description }}

			</p>
			@endforeach

	</div>
</div>

@endsection