@extends('master')
@section('content')

<form action="/search" method="get">
	<div class="control is-grouped">
		<p class="control is-expanded">
			<input class="input is-large" type="text" name="term" placeholder="Search">
		</p>
		<p class="control">
			<button class="button is-info is-large">
				<i class="fa fa-search"></i>
			</button>
		</p>
	</div>
</form>

<div class="tile is-parent">
	<div class="tile is-ancestor">
		<div class="tile is-vertical is-8">
			<div class="tile">
				<div class="tile is-parent is-vertical">
					<article class="movie-poster tile is-child notification is-primary">
						<a href="/{{$films[0]->titleSlug}}">
							<p class="title">{{$films[0]->title}} ({{$films[0]->release_year}})</p>
							<p class="subtitle">
								<span class="icon is-small"><i class="fa fa-star"></i></span>
								{{$films[0]->actors[0]->fullname}},
								{{$films[0]->actors[1]->fullname}}
							</p>
						</a>
					</article>
					<article class="movie-poster tile is-child notification is-warning">
						<a href="/{{$films[1]->titleSlug}}">
							<p class="title">{{$films[1]->title}} ({{$films[1]->release_year}})</p>
							<p class="subtitle">
								<span class="icon is-small"><i class="fa fa-star"></i></span>
								{{$films[1]->actors[0]->fullname}},
								{{$films[1]->actors[1]->fullname}}
							</p>
						</a>
					</article>
				</div>
				<div class="tile is-parent">
					<article class="movie-poster tile is-child notification is-info">
						<a href="/{{$films[2]->titleSlug}}">
							<p class="title">{{$films[2]->title}} ({{$films[2]->release_year}})</p>
							<p class="subtitle">
								<span class="icon is-small"><i class="fa fa-star"></i></span>
								{{$films[2]->actors[0]->fullname}},
								{{$films[2]->actors[1]->fullname}}
							</p>
							<div class="content">{{$films[2]->description}}</div>
						</a>
					</article>
				</div>
			</div>
			<div class="tile is-parent">
				<article class="movie-poster tile is-child notification is-danger">
					<a href="/{{$films[3]->titleSlug}}">
						<p class="title">{{$films[3]->title}} ({{$films[3]->release_year}})</p>
						<p class="subtitle">
							<span class="icon is-small"><i class="fa fa-star"></i></span>
							{{$films[3]->actors[0]->fullname}},
							{{$films[3]->actors[1]->fullname}},
							{{$films[3]->actors[2]->fullname}}
						</p>
						<div class="content">{{$films[3]->description}}</div>
					</a>
				</article>
			</div>
		</div>
		<div class="tile is-parent">
			<article class="movie-poster tile is-child notification is-success">
				<a href="/{{$films[4]->titleSlug}}">
					<div class="content">
						<p class="title">{{$films[4]->title}} ({{$films[4]->release_year}})</p>
						<p class="subtitle">
							<span class="icon is-small"><i class="fa fa-star"></i></span>
							{{$films[4]->actors[0]->fullname}},
							{{$films[4]->actors[1]->fullname}}
						</p>
						<div class="content">{{$films[4]->description}}</div>
					</div>
				</a>
			</article>
		</div>
	</div>
</div>
@endsection
