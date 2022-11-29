@extends('layout.app')

@section('content')
<div class="container">
        <h1 style="text-align: center">Edit Your Article Title</h1>
</div><br<br>
<div class="container">
        <form action="{{route('updateTitle')}}" method="post">
            @csrf
            <div class="input-group mb-3 container">
                <input type="text" name="title" value="{{$data->title}}" class="form-control" placeholder="Edit your title  here" aria-label="Example text with button addon" aria-
describedby="button-addon1">
                <input type="hidden" name="id" value="{{$data->id}}">
                <button class="btn btn-dark btn-lg" type="submit" id="button-addon1">Update</button>
            </div>
        </form>
</div>
@endsection