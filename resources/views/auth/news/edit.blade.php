@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="container">
    <form method="post" action="/admin/news/update/{{$single_news->id}}" enctype="multipart/form-data">
        {{-- bootstrap-form --}}
        <div class="form-group">
            {{-- lavarel表單要送一定要有 --}}
            @csrf

            <label for="title">title</label>
            <input type="text" class="form-control" id="title"  name="title" value="{{$single_news->title}}" required>
            {{-- id跟label對應 name跟table column 對應 --}}
            <div class="form-group">
                <label for="image">image</label>
                <input type="file" class="form-control" id="image" name="image" value="{{$single_news->image}}">
                <img src="{{asset('/storage/'.$single_news->image)}}" alt="">
            </div>

            <div class="form-group">
                <label for="content">content</label>
                <input type="text" class="form-control" id="content" value="{{$single_news->title}}" name="content">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection

@section('js')

@endsection