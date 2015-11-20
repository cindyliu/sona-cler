@extends('app')

@section('sidebar')
<div id="sidebar">
	@if ($user_type == 'admin')
		<a href="/home/admin">Home</a>
	@elseif ($user_type == 'researcher')
		<a href="/home/researcher">Home</a>
	@elseif ($user_type == 'viewonly')
		<a href="/home/viewonly">Home</a>
	@else
		Authorized users only. Please log in.
	@endif
</div>
@stop

@section('page-header')
<div id="page-header">
</div>
@stop

@section('messages')
<div id="messages">
</div>
@stop

@section('content')
	<p>
		Welcome to Receipts
	</p>
@stop

@section('page-footer')
<div id="page-footer">
</div>
@stop