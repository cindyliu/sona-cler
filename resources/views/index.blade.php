@extends('app')

@section('content')
	<span style="text-align:center;">
<!--		<p>
			<a href='home/admin'>
				<button type="button" class="btn btn-primary">
					Log in as admin
				</button>
			</a>
		</p>
-->		<p>
			<a href='home/researcher'>
				<button type="button" class="btn btn-primary">
					Log in as researcher
				</button>
			</a>
		</p>
<!--		<p>
			<a href='home/viewonly'>
				<button type="button" class="btn btn-primary">
					Log in as view-only
				</button>
			</a>
-->		</p>
		<p>
			<button type="button" class="btn btn-success">
				Sign up
			</button>
		</p>
	</span>
@stop