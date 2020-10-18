@extends('layouts.indexLayout')
@section('background_image')
'{{asset('/img/detail.jpg')}}'
@endsection
@section('content')
<div class="container">
	
	<div class="row" id="article">
	    
		    <div class="col-lg-8 col-md-10 mx-auto">
		        <div class="post-preview">
			          
			        <h2 class="post-title">
			             {{$article->article_name}}
			        </h2>
			        <h4 class="post-subtitle">
			              Category: {{ $article->category->category}}
			        </h4>
			        @if($article->images)
			        <img style="width: 80%;margin-left:50px;" src="{{ asset('/img/'.$article->images)}}" alt="This photo is not supported.">
			        @endif
			        <p>{!! $article->content !!}</p>
			        @if($article->contentImages)
			        <img style="width: 80%;margin-left:50px;" src="{{ asset('/img/'.$article->contentImages)}}" alt="This photo is not supported.">
			        @endif
			        <p class="post-meta">Posted by
			        <a href="#<!-- {{url('https://www.facebook.com')}} -->">APHRODIT3</a>
			            {{$article->created_at->diffForHumans()}}</p>
			    
				    @if(auth()->id()==1)
					    <a href="/article/{{$article->id}}/edit"><button class="btn btn-success" style="float: left;">Edit</button></a>

						<form method="POST" style="margin-left: 100px;">
								@csrf
								{{method_field('DELETE')}}
								<a href="/article/{{$article->id}}"><button class="btn btn-primary">Delete</button></a>
						</form>
				    @endif
					<br>
					
					<ul class="list-group mb-2">
						<li class="list-group-item active"><h3>Comment ({{ count($article->comments) }})</h3></li>
						
							@foreach($article->comments as $values)
								<li class="list-group-item">
									<b>{{$values->username}}</b>
									<blockquote><p>{{$values->content}}</p></blockquote>
									<p>{{$values->created_at->diffForHumans()}}</p>
								</li>
								<br>
							@endforeach
						</li>
					</ul>
					@guest
					<h5><a href="{{route('register')}}">Please register or login for comment features.</a></h5>
					@else
						<form action="/comment/create/{{$article->id}}/{{$user->name}}" method="GET">
							@csrf
							<textarea  name="content" placeholder="Comment something for your expression..." style="width: 100%;height: 80px;"></textarea>
							<br><br>
							<input type="submit" value="Send" class="btn btn-success">
						</form>
					@endguest
				    <hr>
					

			    </div>
			</div>
</div>
	
		
@endsection

