@extends('layouts.app')

@section('page-heading','Advertisement')

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
                <h6 class="m-0 font-weight-bold text-primary">Create Advertisement</h6>
            </div>
            <div class="card-body">
    <form action="{{route('advertisement.store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title"  name="title">
        </div>
            @if ($errors->has('title'))
            <strong style="color:red">{{ $errors->first('title') }}</strong>
            @endif
        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control " id="link"  name="link">
        </div>
        @if ($errors->has('link'))
            <strong style="color:red">{{ $errors->first('link') }}</strong>
                     @endif
        <div class="form-group">
                <label for="rank">Rank</label>
                <input type="text" class="form-control" id="rank"  name="rank">
            </div>
            @if ($errors->has('rank'))
            <strong style="color:red">{{ $errors->first('rank') }}</strong>

            @endif
        <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="image"  name="image">
        </div>
        <div class="form-group">
                <label for="status">Status</label>
                <input type="radio" id="status"  name="status" value="1">Active
                <input type="radio" id="status"  name="status" value="0" checked>De-Active
            </div>

        <input type="submit" name="btnSave" value="Save Advertisement" class="btn btn-info">
    </form>
    </div>
    </div>
    @endsection