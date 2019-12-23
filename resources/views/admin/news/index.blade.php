@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="container">
    <h2>news-index</h2>
    <hr>
    <a class="btn btn-success btn-sm" href="/admin/news/create">create</a>
    <hr>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
               <th>新聞標題</th>
                <th>建立時間</th>
                <th>新聞照片</th>
                <th>內容</th>
                <th>功能</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $single_news)
            <tr>
                <td>{{$single_news->title}}</td>
                <td>{{$single_news->created_at}}</td>
                <td><img src="{{asset('/storage/'.$single_news->image)}}" alt="" height="300px" width="400px"></td>
                <td>{{$single_news->content}}</td>
                <td>
                    <a class="btn btn-success btn-sm" href="/admin/news/edit/{{$single_news->id}}">編輯</a>
                    <a class="btn btn-danger btn-sm" href="#" id="{{$single_news->id}}">刪除</a>

                    <form class="destroy-form" id="{{$single_news->id}}"
                        action="/admin/news/destroy/{{$single_news->id}}" method="POST" style="display: none;">
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