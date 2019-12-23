@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="container">
    <form method="post" action="/admin/news/store" enctype="multipart/form-data">
        {{-- bootstrap-form --}}
        <div class="form-group">
            {{-- lavarel表單要送一定要有 --}}
            @csrf

            <label for="title">新聞標題</label>
            <input type="text" class="form-control" id="title" name="title" required>
            {{-- id跟label對應 name跟table column 對應 --}}
            <div class="form-group">
                <label for="image">新聞照片</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <div class="form-group">
                <label for="content">新聞內容</label>
                <input type="text" class="form-control" id="content" name="content">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection

@section('js')

@endsection