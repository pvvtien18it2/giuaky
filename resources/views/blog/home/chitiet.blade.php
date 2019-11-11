@extends('blog.master.master')
@section('title','Chi tiết')
@section('css')
    <link rel="stylesheet" href="{!! asset('resources/css/home') !!}">
@endsection
@section('content')
    <div class="container">
            <div class="row">
                <table class="table table-responsive-md table-hover">
                    <tr>
                        <thead style="width: 50px">
                            {!! $id->title !!}
                        </thead>
                    </tr>
                    <tr>
                        <td style="width: 200px">
                            {!! $id->body !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{!! route('home_home')!!} " class="btn btn-danger" >Quay lại</a>
                        </td>
                    </tr>
                </table>
            </div>
    </div>
@endsection
