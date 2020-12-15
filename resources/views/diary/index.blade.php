<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Diary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/readpage.css">
    <link rel="stylesheet" href="{{asset('css/diary_index.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    @include('commons.navbar')
    <div class="title" sytle="margin-top:10px;margin-bottom:10px;">
        {{ $date }}に書かれた日記一覧
    </div>
    <div class="diary-area">
        @if(count($diaries) > 0)
            @foreach($diaries as $diary)
            <div class="diary-info">
                <div class="diary-title-area">
                    {{ $diary -> title }} {!! link_to_route('users.show',$diary->author . "さんが書いた日記",['user'=>$diary->user_id],['class' => 'author']) !!}
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
        {{ $diaries->links() }}
    </div>
</body>
</html>