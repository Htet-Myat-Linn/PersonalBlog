@extends('layouts.indexLayout')
@section('background_image')
'{{asset('/img/background.jpg')}}'
@endsection
@section('content')
<div class="container">
	
	<div class="row" id="article">
		@if(auth()->id() ==1)
			<div class="col-lg-8 col-md-10 mx-auto">
			<a href="/article/create"><button class="btn btn-primary">Create New Article</button></a>
			<hr>
		</div>
		@endif

	    @foreach($articleData as $values)
		    <div class="col-lg-8 col-md-10 mx-auto">
		        <div class="post-preview">
			          
			            <h2 class="post-title">
			             {{$values->article_name}}
			            </h2>
			            <h4 class="post-subtitle">
			              Category: {{ $values->category->category}}
			            </h4>
			          
			          <p>{{ $values->description}}<br><a href="/article/{{ $values->id}}">Details &raquo</a></p>
			          <p class="post-meta">Posted by
			            <a href="#">APHRODIT3</a>
			            {{$values->created_at->diffForHumans()}}</p>
			        </div>
			        
			        <hr>

		    </div>
	    @endforeach
	    <div class="col-lg-8 col-md-10 mx-auto">
	    	{{$articleData->links()}}
	   	</div>
	</div>
	
 		
 	
@endsection

	
	
