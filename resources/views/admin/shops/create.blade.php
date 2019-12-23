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

            <label for="name">店名</label>
            <input type="text" class="form-control" id="name" name="name" required>
            {{-- id跟label對應 name跟table column 對應 --}}

            <div class="form-group">
                <label for="address">地址</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="media">粉專網址</label>
                <small>可留空</small>
                <input type="text" class="form-control" id="media" name="media">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection

@section('js')

@endsection