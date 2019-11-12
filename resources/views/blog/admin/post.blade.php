@extends('blog.master.master_admin')
@section('title','Đăng bài')
@section('content')
    <div class="container">
        <form enctype="multipart/form-data" action="{!! route('admin.store') !!}" method="post">
            @csrf
            <div class="row">
                <h2>Đăng bài</h2>
            </div>
            <div class="row">
                <label for="Tiêu đề" class="lable-control">Tiêu đề</label>
                <input type="text" class="form-control" name="title" placeholder="Vui lòng nhập tiêu đề">
                <input type="hidden" name="idUser" value="{!! $id !!}">

                <input type="hidden" name="idPost" value="{!!  App\Post::max('id')+1 !!}">
                {{--  lay du lieu trong newstypes --}}
                @php
                    $types = DB::table('newstypes')->get();
                @endphp
                {{-- end  --}}

                <label for="Thể loại" class="lable-control">Thể loại</label>
                <select name="type" id="type" class="form-control">
                    @foreach ($types as $type)
                    <option value={!!$type->id!!}>{!!$type->name!!}</option>
                    @endforeach
                    {{--  <option value="1">Thể thao</option>
                    <option value="2">Âm nhạc</option>
                    <option value="3">Tin tức</option>
                    <option value="4">Sức khỏe</option>  --}}
                </select>
            </div>
            <div class="row">
                <label for="Nội dung" class="lable-control">Nội dung</label>
                <textarea class="form-control" rows="5" id="Nội dung" name="body"></textarea>
            </div>
            <div class="row">
                    <labelclass="lable-control">Hình ảnh</labelclass="lable-control">
                    <input type="file" class="form-control" name="fImage">
            </div>
            <div class="row">
                <button type="submit" class="btn btn-info">Đăng bài</button>
            </div>
        </form>
    </div>
@endsection

