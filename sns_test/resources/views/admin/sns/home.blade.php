@extends('layouts.admin')


@section('title', 'Mutter')
<link href="{{ asset('css/sns/home.css') }}" rel="stylesheet">

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{{ action('Admin\SnsController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li class="error-message">{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="col-md-12 sns-add-box">
                        <div class="col-md-12 home-text">ホーム</div>
                        <div class="form-group row">
                            <div class="col-md-12 center-block">
                                <input type="text" class="form-control" name="body" placeholder="いまどうしてる？" value="{{ old('body') }}">
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <div class="text-right">
                            <input type="submit" class="mutter-btn btn" value="つぶやく">
                        </div>
                    </div>
                </form>
                <div class="col-md-12 sns-box">
                    @foreach($posts as $sns)
                        <div class="row">
                            <div class="col-md-6 sns-name">{{$sns->name}}</div>
                            <div class="col-md-6 sns-time text-right">{{$sns->created_at}}</div>
                            <div class="col-md-11 sns-body">{{$sns->body}}</div>
                            @if (Auth::id() == $sns->user_id)
                                <a class="col-md-1 text-right delete-link d-flex align-items-end" href="{{url('/admin/sns/home/delete?id='.$sns->id)}}">削除</a>
                            @endif
                        </div>
                    @endforeach
                <div>
            </div>
        </div>
    </div>
@endsection