<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Diary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/readpage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <style>
        .diary-area{
            padding:10px;
        }
        .title-area{
            font-size:25px;
            font-weight:bold;
        }
        .content-area{
            padding:10px 20px 10px 20px;
            border:1px solid #dcdcdc;
        }
        .favorite{
            text-align: center;
            margin-top:10px;
        }
    </style>
</head>
<body>
    @include('commons.navbar')
    <div class="diary-area">
        <div class="title-area">
            {{ $diary->title }}
        </div>
        <div class="content-area">
            {{ $diary->content }}
        </div>
        <div class="favorite">
            <button class="btn btn-info">お気に入り</button>
        </div>
    </div>
</body>
</html>