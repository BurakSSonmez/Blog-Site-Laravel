@extends('front.layouts.master')
@section('title', $category->name.' Kategorisi | '.count($articles). ' yazı bulundu')
@section('content')
    <div class="col-lg-8 col-md-10 mx-auto">
        @include('front.widgets.articleList')
    </div>
    @include('front.widgets.categoryWidget')
@endsection
