@extends('front.template.main')

@section('content')
	<h3 class="title-front left">{{ trans('app.title_last_articles') }}</h3>
	<div class="row">
		<div class="col-md-8">
			<div class="row">

				@foreach($articles as $article)

					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-body">
								<a href="{{ route('front.view.article', $article->slug) }}" class="thumbnail">
									@foreach($article->images as $image)
										<img class="img-responsive img-article" src="{{ asset('images/articles/' . $image->name) }}" alt="...">
									@endforeach
								</a>
								<a href="{{ route('front.view.article', $article->slug) }}">
									<h3 class="text-center">{{ $article->title }}</h3>
								</a>
								<hr>
								<i class="glyphicon glyphicon-folder-open"></i>
								<a href="{{ route('front.search.category', $article->category->name) }}">{{ $article->category->name }}</a>
								<div class="pull-right">
									<i class="glyphicon glyphicon-time"></i> Hace 3 minutos
								</div>
							</div>
						</div>
					</div>

				@endforeach

			</div>
			<div class="text-center">
				{!! $articles->render() !!}
			</div>
		</div>
		<div class="col-md-4 aside">
			@include('front.partials.aside')
		</div>
	</div>

@endsection