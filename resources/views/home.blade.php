@extends('master')
@section('content')
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
								@foreach ($films[0]->actors as $key => $actor)
									{{$actor->fullname}},
									{{$actor->fullname}}
								@endforeach
							</p>
						</a>
					</article>
					<article class="movie-poster tile is-child notification is-warning">
						<a href="/{{$films[1]->titleSlug}}">
							<p class="title">{{$films[1]->title}} ({{$films[1]->release_year}})</p>
							<p class="subtitle">
								<span class="icon is-small"><i class="fa fa-star"></i></span>
								@foreach ($films[1]->actors as $key => $actor)
									{{$actor->fullname}},
									{{$actor->fullname}}
								@endforeach
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
								@foreach ($films[2]->actors as $key => $actor)
									{{$actor->fullname}},
									{{$actor->fullname}}
								@endforeach
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
							@foreach ($films[3]->actors as $key => $actor)
								{{$actor->fullname}},
								{{$actor->fullname}}
							@endforeach
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
							@foreach ($films[4]->actors as $key => $actor)
								{{$actor->fullname}},
								{{$actor->fullname}}
							@endforeach
						</p>
						<div class="content">{{$films[4]->description}}</div>
					</div>
				</a>
			</article>
		</div>
	</div>
</div>
@endsection
