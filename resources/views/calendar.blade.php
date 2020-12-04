<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Diary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    <!-- ナビバー -->
    @include('commons.navbar')
    <!-- カレンダー -->
    <?php
        $year = date('Y');
        $month = date('n');
        $today = date('Y-m-d');
        
        $last_day = date('j',mktime(0,0,0,$month+1,0,$year));
        $calndar = array();
        $j = 0;
        
        for($i = 1;$i < $last_day+1;$i++){
            $week = date('w',mktime(0,0,0,$month,$i,$year)); //0~6の曜日に対応する数字を返す
            if($i == 1){
                for($s = 1;$s <= $week;$s++){
                    //1日目の曜日まで空文字を入れる
                    $calendar[$j]['day'] = '';
                    $j++;
                }
            }
            
            $calendar[$j]['day'] = $i;
            $j++;
            
            if($i == $last_day){
                for($e = 1;$e <= 6 - $week;$e++){
                    $calendar[$j]['day'] = '';
                    $j++;
                }
            }
        }
    ?>
    <div class="calendar-title">
      <?php echo $year; ?>年<?php echo $month; ?>月のカレンダー
    </div>
  <br>
  <table class="calendar col-md-11">
      <tr>
          <th class="sunday">日</th>
          <th>月</th>
          <th>火</th>
          <th>水</th>
          <th>木</th>
          <th>金</th>
          <th class="saturday">土</th>
      </tr>
   
      <tr>
      <?php $cnt = 0; ?>
      <?php foreach ($calendar as $key => $value): ?>
          <td class="day <?php if($value['day'] == date('d')){echo "today";}else{echo "nottoday";}?>">
          
          <?php $cnt++; ?>
          <?php echo $value['day']; ?>
          <?php if($value['day']): ?>
            
            <ul class="dropdwn_menu">
              <?php $wday = date('Y-m') . '-' . $value['day'];?>
              <li>{!! link_to_route('write.get','日記を書く',['date' => $wday],[]); !!}</li>
              <li>{!! link_to_route('read.get','日記を読む',['date' => $wday],[]); !!}</li>
            </ul>
          <?php endif; ?>
          </td>
   
      <!-- cntが７になるたび改行 -->
      <?php if ($cnt == 7): ?>
      </tr>
      <tr>
      <?php $cnt = 0; ?>
      <?php endif; ?>
   
      <?php endforeach; ?>
      </tr>
  </table>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/calendar.js"></script>
</body>
</html>