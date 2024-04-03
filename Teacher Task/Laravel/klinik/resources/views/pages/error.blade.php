@extends("layouts/master")


@section("content")


    <div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>404</h1>
				<h2>Page not found</h2>
			</div>
			<a href="{{ route('home.index')}}">Home</a>
		</div>
	</div>

@endsection