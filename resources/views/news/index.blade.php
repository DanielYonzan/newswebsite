@extends('layouts.app')
@section('page-heading','News')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List News</h6>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered dataTable"  cellspacing="0">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Short Description</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Slider key</th>
                            <th>Feature key</th>
                            <th>Created_by</th>
                            <th>Modified_by</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @php
                            $i=1
                        @endphp
                        @foreach($data as $d)

                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$d->categorydata->name}}</td>
                                <td>{{$d->title}}</td>
                                <td>{{$d->short_description}}</td>
                                <td>{{$d->description}}</td>
                                <td><img src="{{asset('images/'.$d->feature_image)}}" width="150" height="150" alt="$d->name"></td>
                                <td>
                                    @if($d->status==1)
                                        Active
                                    @else
                                        De-Active
                                    @endif

                                </td>
                                <td>
                                    @if($d->slider_key==1)
                                        Active
                                    @else
                                        De-Active
                                    @endif

                                </td>
                                <td>
                                    @if($d->feature_key==1)
                                        Active
                                    @else
                                        De-Active
                                    @endif

                                </td>
                                <td>
                                    {{$d->created_by}}
                                </td>
                                <td>
                                    {{$d->modified_by}}
                                </td>

                                <td><a href="{{route('news.edit',$d->id)}}" class="btn btn-info">Edit</a>
                                    <form action="{{route('news.destroy',$d->id)}}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="delete">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('extra-scripts')
    @component('components.dataTable')@endcomponent
@endsection