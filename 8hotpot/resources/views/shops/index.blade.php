@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="container">
    <h2>shops-index</h2>
    <hr>
    <a class="btn btn-success btn-sm" href="/admin/shops/create">create</a>
    <hr>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>name</th>
                <th>image</th>
                <th>address</th>
                <th>media</th>
                <th>function</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shops as $shop)
            <tr>
                <td>{{$shop->name}}</td>
                <td><img src="{{asset('/storage/'.$shop->image)}}" alt="" height="300px" width="400px"></td>
                <td>{{$shop->address}}</td>
                <td>{{$shop->media}}</td>
                <td>
                    <a class="btn btn-success btn-sm" href="/admin/shops/edit/{{$shop->id}}">edit</a>
                    <a class="btn btn-danger btn-sm" href="#" id="{{$shop->id}}">delete</a>

                    <form class="destroy-form" id="{{$shop->id}}"
                        action="/admin/shops/destroy/{{$shop->id}}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </td>
            </tr>
            @endforeach

    </table>

</div>

@endsection

@section('js')

<script>
    $(document).ready(function() {
$('#example').DataTable({
    "order": [1,"desc"]
});
} );

$('#example').on('click','.btn-danger',function(){
event.preventDefault();
var r = confirm("你確定要刪除此項目嗎?");
if (r == true) {

var id = $(this).attr("id");

$(`.destroy-form[id="${id}"]`).submit();
}
});

</script>

@endsection