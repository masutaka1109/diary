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
    @include('users.navtabs')
    <h3>あなたが書いた日記一覧</h3>
    <div class="diary-area">
        @if(count($diaries) > 0)
            @foreach($diaries as $diary)
            <div class="diary-info">
                <div class="diary-title-area">
                    {{ $diary -> title }}
                </div>
                <div class="diary-content-area">
                    <?php
                     echo mb_strimwidth($diary->content,0,400,"..........",'UTF-8');
                    ?>
                </div>
                <div class="diary-link">
                    {!! link_to_route('diary.show','>>この日記の続きを読む',['id'=>$diary->id]) !!}
                </div>
            </div>
            @endforeach
        @endif
    </div>
</body>
</html>