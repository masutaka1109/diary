<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Diary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/writepage.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    @include('commons.navbar')
    <div class="title">{{$date}}の日記</div>
    <div class="form-area">
        {!! Form::model($diary,['route' => 'write.store']) !!} 
        {{ Form::hidden('date',$date) }} 
        <?php $name = Auth::user()->name;?>
        {{ Form::hidden('name',$name) }} 
        <!-- 日付を隠して送信する　-->
        <div class="form-group">
            {!! Form::label('title','タイトル',['class' => 'title-label']) !!}<br>
            {!! Form::text('title','タイトル',['class' => 'title-form']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content','本文',['class' => 'content-label']) !!}<br>
            {!! Form::textarea('content','本文',['class' => 'content-form']) !!}
        </div>
        <div class="btn-area">
            {!! Form::submit('投稿', ['class' => 'btn btn-primary toukou']) !!}
        </div>
    {!! Form::close() !!}
    </div>
</body>
</html>