@extends('layout')
-
@section('content')

<div>
<h1>Edit Resturant</h1>
    <div class="col-lg-6">

        <form method="post" action="/edit">
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{$data->name}}" >
                <input type="hidden" name="id" class="form-control" value="{{$data->id}}" >
            </div> 
            <div class="mb-3">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="{{$data->email}}">
            </div>
            <div class="mb-3">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="{{$data->address}}" >
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@stop