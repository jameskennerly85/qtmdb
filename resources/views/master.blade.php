<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>QTMDb</title>
		<link rel="stylesheet" href="/css/font-awesome.min.css" media="screen">
		<link rel="stylesheet" href="/css/bulma.css" media="screen">
		<link rel="stylesheet" href="/css/style.css" media="screen">
	</head>
	<body>
		<section class="hero is-medium has-text-centered">
			@include('includes.header')

			<div class="hero-body" style="padding-top:2rem;">
				<div class="container">
					<h2 id="modern-framework" class="subtitle" style="margin-bottom:5rem;">
						Quicktech's movie database based on <strong>sakila</strong>.
					</h2>

					@yield('content')
				</div>
			</div>
		</section>
		<footer class="footer">
			<div class="container">
				<div class="content has-text-centered">
					<p><span class="icon is-small"><i class="fa fa-film"></i></span>
						<strong>QTMDb</strong> is grown, not made.</p>
				</div>
			</div>
		</footer>
	</body>
</html>
