@extends('layouts.app')

@section('css')
<style>
    table {
        border-collapse: collapse;
        /*自動斷行*/
        word-wrap: break-word;
        table-layout: fixed;
    }
</style>

@endsection

@section('content')
<div class="container">
    <h2>contact_us</h2>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>姓名</th>
                <th>電話</th>
                <th>信箱</th>
                <th>內文</th>
                <th>功能</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
            <tr>
                <td width="500px">{{$data->name}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->content}}</td>
                <td>

                    <a class="btn btn-danger btn-sm" href="#" id="{{$data->id}}">刪除</a>

                    <form class="destroy-form" id="{{$data->id}}" action="/admin/contact_us/destroy/{{$data->id}}"
                        method="POST" style="display: none;">
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