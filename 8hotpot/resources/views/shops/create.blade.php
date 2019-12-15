@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="container">
    <form method="post" action="/admin/shops/store" enctype="multipart/form-data">
        {{-- bootstrap-form --}}
        <div class="form-group">
            {{-- lavarel表單要送一定要有 --}}
            @csrf

            <label for="name">name</label>
            <input type="text" class="form-control" id="name" name="name" required>
            {{-- id跟label對應 name跟table column 對應 --}}
            <div class="form-group">
                <label for="image">image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <div class="form-group">
                <label for="address">address</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="media">media</label>
                <input type="text" class="form-control" id="media" name="media">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection

@section('js')

@endsection