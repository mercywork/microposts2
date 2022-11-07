@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Microposts2</h1>
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', '今すぐ会員登録!', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection