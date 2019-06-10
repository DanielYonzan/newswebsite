@extends('layouts.app')
@section('page-heading','News')


@section('content')
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
        <div class="card shadow mb-6">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create News</h6>
            </div>
            <div class="card-body">
                <form action="{{route('news.store')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control form-control-user">
                            <option value="">Select Category</option>
                            @foreach($catlist as $ct);
                            <option value="{{$ct->id}}">{{$ct->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    @if ($errors->has('category'))
                        <strong style="color:red">{{ $errors->first('category') }}</strong>

                    @endif
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control form-control-user" id="title"  name="title">
                    </div>
                    @if ($errors->has('title'))
                        <strong style="color:red">{{ $errors->first('title') }}</strong>

                    @endif
                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <textarea class="form-control ckeditor" id="short_description"  name="short_description" rows="4"></textarea>
                    </div>
                    @if ($errors->has('short_description'))
                        <strong style="color:red">{{ $errors->first('short_description') }}</strong>
                    @endif

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control advancedEditor" id="description"  name="description" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="feature_image">Image</label>
                        <input type="file" class="form-control form-control-user" id="feature_image"  name="feature_image">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="radio" id="status"  name="status" value="1">Active
                        <input type="radio" id="status"  name="status" value="0" checked>De-Active
                    </div>
                    <div class="form-group">
                        <label for="slider_key">Slider key</label>
                        <input type="radio" id="slider_key"  name="slider_key" value="1">Active
                        <input type="radio" id="slider_key"  name="slider_key" value="0" checked>De-Active
                    </div>
                    <div class="form-group">
                        <label for="feature_key">Feature key</label>
                        <input type="radio" id="feature_key"  name="feature_key" value="1">Active
                        <input type="radio" id="feature_key"  name="feature_key" value="0" checked>De-Active
                    </div>

                    <input type="submit" name="btnSave" value="Save News" class="btn btn-info">
                </form>
            </div>
        </div>
    @endsection
@section('extra-scripts')
    <script src="{{asset('js/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '.advancedEditor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection