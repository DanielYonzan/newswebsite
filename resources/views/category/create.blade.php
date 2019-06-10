@extends('layouts.app')

@section('page-heading','Category')

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
            <h6 class="m-0 font-weight-bold text-primary">Create Category</h6>
        </div>
        <div class="card-body">
    <form action="{{route('category.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control form-control-user" id="name"  name="name">
        </div>
            @if ($errors->has('name'))
            <strong style="color:red">{{ $errors->first('name') }}</strong>
                </span>
            @endif
        <div class="form-group">
                <label for="rank">Rank</label>
                <input type="text" class="form-control form-control-user" id="rank"  name="rank">
            </div>
            @if ($errors->has('rank'))
            <strong style="color:red">{{ $errors->first('rank') }}</strong>

            @endif
        <div class="form-group">
                <label for="status">Status</label>
                <input type="radio" id="status"  name="status" value="1">Active
                <input type="radio" id="status"  name="status" value="0" checked>De-Active
            </div>

        <input type="submit" name="btnSave" value="Save Category" class="btn btn-info">
    </form>
    </div>
    </div>
    @endsection