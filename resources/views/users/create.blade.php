@extends('layouts.app')

@section('content')
	<div class="col-xl-12 mb-5 mb-xl-0">
		@include('partials._UserEditCreate') 
		<input type="hidden" name="is_active" id="is_active" value="Y">
		{!! Form::close() !!}  
	</div>
@endsection