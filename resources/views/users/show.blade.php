<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Diary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/userpage.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    @include('commons.navbar')
    <div class="intro-wrapper">
        <div class="image-area">
            @if(!($user->image_url))
                <img src="{{asset('images/unknown.jpg')}}" class="icon">
            @else
            @endif
        </div>
        <div class="intro-area">
            <div class="user_name">
                {{$user->name}}さんのプロフィール
            </div>
            <div class="self_introduction">
                @if(!($user->self_introduction))
                    この人はまだ自己紹介を書いていません。
                @else
                    {{ $user->self_introduction }}
                @endif
            </div>
        </div>
    </div>
    <div class="button-area">
        @if(Auth::id() == $user->id)
            <button class="btn btn-primary">編集する</button>
        @endif
    </div>
</body>
</html>