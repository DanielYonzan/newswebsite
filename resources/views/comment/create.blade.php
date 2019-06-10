@extends('layouts.app')

@section('page-heading','Advertisement')

@section('content')
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html">
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
    <form action="{{route('comment.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="news_id">News Id</label>
            <input type="text" class="form-control form-control-user" id="news_id"  name="news_id">
        </div>
            @if ($errors->has('news_id'))
            <strong style="color:red">{{ $errors->first('news_id') }}</strong>
            @endif
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control form-control-user" id="name"  name="name">
        </div>
        @if ($errors->has('name'))
            <strong style="color:red">{{ $errors->first('name') }}</strong>
                     @endif
        <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control form-control-user" id="email"  name="email">
            </div>
            @if ($errors->has('email'))
            <strong style="color:red">{{ $errors->first('email') }}</strong>

            @endif
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea class="form-control form-control-user" name="comment" id="comment"></textarea>
        </div>

        <div class="form-group">
                <label for="status">Status</label>
                <input type="radio" id="status"  name="status" value="1">Active
                <input type="radio" id="status"  name="status" value="0" checked>De-Active
            </div>

        <input type="submit" name="btnSave" value="Save Comment" class="btn btn-info">
    </form>
    </div>
    </div>
    @endsection