@extends('blog.master.master')
@section('title','Heathy')
@section('css')
    <link rel="stylesheet" href="{!! asset('resources/css//home/home.css') !!}">
@endsection
@section('content')
<div class="container">
    <div class="row" id="row_card" >
        @foreach ($heathy as $h)
            <div class="col-md-4" style="padding: 2%">
                <div class="card">
                    <div class="card-body" id="card_body">
                        <h5 class="card-title">{!! $h->title !!}</h5>
                        <p class="card-text" id="card_text">{{ Str::limit($h->body, 100) }}</p>
                        <a href="{!! route('chitiet',$h->id) !!}" class="btn btn-outline-info">Xem thêm</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row" id="row_paginate">
        {!! $heathy->links() !!}
    </div>
</div>
@endsection

