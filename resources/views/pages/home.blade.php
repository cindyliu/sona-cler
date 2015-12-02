@extends('app')

@section('sidebar')
<div id="sidebar">
	@if ($user_type == 'admin')
	<ul>
		<li><a href="/users/admin">Manage Users</a></li>
		<li><a href="/studies/admin">Manage Studies</a></li>
		<li><a href="/receipts/admin">Print Receipts</a></li>
		<li><a href="/">Log Out</a></li>
	</ul>
	@elseif ($user_type == 'researcher')
	<ul>
		<li><a href="/studies/researcher">View/Update Studies</a></li>
		<li><a href="/receipts/researcher">Print Receipts</a></li>
		<li><a href="/">Log Out</a></li>
	</ul>
	@elseif ($user_type == 'viewonly')
	<ul>
		<li><a href="/studies/viewonly">View Studies</a></li>
		<li><a href="/receipts/viewonly">Print Receipts</a></li>
		<li><a href="/">Log Out</a></li>
	</ul>
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
		Welcome, CLER User!
	</p>
@stop

@section('page-footer')
<div id="page-footer">
</div>
@stop