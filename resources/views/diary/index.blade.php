<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Diary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/readpage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <style>
        .title{
            font-size:25px;
            color:#545463;
            margin:10px 0 0 10px;
        }
        .diary-info{
            margin-right:20px;
            padding:12px 0 10px 15px;
        }
        .diary-title-area{
            font-size:20px;
            font-weight:bold;
        }
        .diary-content-area{
            padding:3px 0  3px 10px;
        }
        .diary-link{
            text-align: right;
        }
        .author{
            color:#545051;
            font-size:12px;
            opacity: 70%;
        }
    </style>
</head>
<body>
    @include('commons.navbar')
    <div class="title">
        {{ $date }}に書かれた日記一覧
    </div>
    <div class="diary-area">
        @if(count($diaries) > 0)
        @foreach($diaries as $diary)
        <div class="diary-info">
            <div class="diary-title-area">
                {{ $diary -> title }} <span class="author">{{$diary->author}}さんが書いた日記</span>
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