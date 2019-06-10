@extends('layouts.app')

@section('page-heading','News')

@section('content')
    <div class="container-fluid">
        <div class="col-sm-4">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{route('news.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                {{@method_field('put')}}
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control form-control-user">
                        <option value="">Select category</option>
                        @foreach($catlist as $c)
                            <option value="{{$c->id}}"@if($c->id == $data->category) selected @endif>{{$c->name}}</option>
                            @endforeach
                    </select>
                </div>
                @if ($errors->has('category'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('category') }}</strong>
                </span>
                @endif
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control form-control-user" id="title"  name="title" value="{{$data->title}}">
                </div>
                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                @endif
                <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <textarea class="form-control form-control-user" name="short_description" id="short_description">{{$data->short_description}}</textarea>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control form-control-user" name="description" id="description">{{$data->description}}</textarea>
                </div>

                <div class="form-group">
                    <label for="feature_image">Image</label>
                    <br>
                    <img src="{{asset('images/'.$data->feature_image)}}" width="150" height="150" alt="{{$data->name}}">
                    <input type="file" class=" form-control form-control-user" name="feature_image" id="feature_image" value="{{$data->feature_image}}">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    @if($data->status==1)
                    <input type="radio" id="status"  name="status" value="1" checked>Active
                    <input type="radio" id="status"  name="status" value="0">De-Active
                        @else
                        <input type="radio" id="status"  name="status" value="1" >Active
                        <input type="radio" id="status"  name="status" value="0" checked>De-Active
                        @endif
                </div>

                <div class="form-group">
                    <label for="slider_key">Slider key</label>
                    @if($data->slider_key==1)
                        <input type="radio" id="slider_key"  name="slider_key" value="1" checked>Active
                        <input type="radio" id="slider_key"  name="slider_key" value="0">De-Active
                    @else
                        <input type="radio" id="slider_key"  name="slider_key" value="1" >Active
                        <input type="radio" id="slider_key"  name="slider_key" value="0" checked>De-Active
                    @endif
                </div>
                <div class="form-group">
                    <label for="feature_key">Feature key</label>
                    @if($data->feature_key==1)
                        <input type="radio" id="feature_key"  name="feature_key" value="1" checked>Active
                        <input type="radio" id="feature_key"  name="feature_key" value="0">De-Active
                    @else
                        <input type="radio" id="feature_key"  name="feature_key" value="1" >Active
                        <input type="radio" id="feature_key"  name="feature_key" value="0" checked>De-Active
                    @endif
                </div>

                <input type="submit" name="btnUpdate" value="Update News" class="btn btn-info">
            </form>
        </div>
    </div>
@endsection