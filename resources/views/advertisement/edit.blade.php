@extends('layouts.app')

@section('page-heading','Category')

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
            <form action="{{route('advertisement.update',$data->id)}}" method="POST">
                {{csrf_field()}}
                {{@method_field('put')}}
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
                    <label for="link">Link</label>
                    <input type="text" class="form-control form-control-user" id="link"  name="link" value="{{$data->link}}">
                </div>
                @if ($errors->has('link'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('link') }}</strong>
                </span>
                @endif
                <div class="form-group">
                    <label for="rank">Rank</label>
                    <input type="text" class="form-control form-control-user" id="rank"  name="rank" value="{{$data->rank}}">
                </div>
                @if ($errors->has('rank'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('rank') }}</strong>
                </span>
                @endif
                <div class="form-group">
                    <label for="status">Status</label>
                    @if($data->status==1)
                    <input type="radio" id="status"  name="status" value="1" checked>Active
                    <input type="radio" id="status"  name="status" value="0">De-Active
                        @else
                        <input type="radio" id="status"  name="status" value="1">Active
                        <input type="radio" id="status"  name="status" value="0" checked>De-Active
                        @endif
                </div>

                <input type="submit" name="btnUpdate" value="Update Advertisement" class="btn btn-info">
            </form>
        </div>
    </div>
@endsection