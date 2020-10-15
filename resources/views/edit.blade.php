@extends('layouts.createLayout')
@section('title')
Editing Article
@endsection
@section('content')
 <main class="py-4">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit your article</div>

                <div class="card-body">
                    <form method="POST" action="/article/{{ $article->id}}" enctype="multipart/form-data">
                    	@method('PUT')
                        @csrf
                        @if($errors->any())
                            <div class="alert alert-danger" >
                                <ul>
                                    @foreach($errors->all() as $errors)
                                        <li>{{ $errors }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group row">
                            <label for="article_name" class="col-md-4 col-form-label text-md-right">Article Name</label>

                            <div class="col-md-6">
                                <input id="article_name" type="text" class="form-control" name="article_name"  required value="{{$article->article_name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description"  required value="{{$article->description}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">Content</label>

                            <div class="col-md-6">
                                <textarea id="content" class="form-control " name="content" rows="14" required>{{$article->content}}</textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>

                            <div class="col-md-6">
                                    <select  name="category_id" id="category" >
                                        @foreach($category as $values)
                                            <option value="{{$values->id}}" {{ $article->category->id==$values->id ? "selected" : ""}} required>{{ $values->category}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-6">
                                <input type="file" name="rimage" id="image">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection