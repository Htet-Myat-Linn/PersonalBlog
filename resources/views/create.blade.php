@extends('layouts.createLayout')
@section('content')
        
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create your article</div>

                <div class="card-body">
                    <form method="POST" action="/article" enctype="multipart/form-data">
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
                                <input id="article_name" type="text" class="form-control" name="article_name" value="{{old('article_name')}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description" rows="5"  required>{{old('description')}}</textarea>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">Content</label>

                            <div class="col-md-6">
                                <textarea id="content" class="form-control " name="content" rows="14" required>{{old('content')}}</textarea>

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>

                            <div class="col-md-6">
                                    <select type="text" name="category_id" id="articleCategory"  required>
                                        @foreach($categoryData as $values)
                                            <option value="{{ $values->id}}" >{{ $values->category}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">First Image</label>

                            <div class="col-md-6">
                                <input type="file" name="rimage" id="image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image1" class="col-md-4 col-form-label text-md-right">Content Image</label>

                            <div class="col-md-6">
                                <input type="file" name="contentImage" id="image1">
                            </div>
                        </div>
                        <br><br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-0">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection