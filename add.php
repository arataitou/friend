<?php

    $dsn = 'mysql:dbname=CampTest;host=localhost';
    $usr = 'root';
    $password = 'camp2014';
    $dbh = new PDO($dsn,$usr,$password);
    $dbh ->query('SET NAMES utf8');

    $place_search ='select name from area_table where id = '.$_GET['id'].';';
    //都道府県名を取得
    $stmt = $dbh->prepare($place_search);
    $stmt ->execute();
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);


    if(isset($_POST['name'])){
    //保存ボタンが押された
      $ins='INSERT INTO `friends_list` (area_table_id,name,gender,age) values ("'.$_GET['id'].'","'.$_POST['name'].'","'.$_POST['gender'].'","'.$_POST['age'].'");';
      $st = $dbh->prepare($ins);
      $st->execute(); 

      $dsn = null;
      header('location:friends.php?id='.$_GET['id'].'&return=1');
      exit();
    }


    $dsn = null
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>arataito's HP</title>
    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Custom.css -->
    <link href="dist/css/custom.css" rel="stylesheet">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        <div class="col-xs-12">
          <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand" href="#">ArataIto</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="#fakelink">homework</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">bookmark<b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="#">あああ</a></li>
                    <li><a href="#">いいい</a></li>
                    <li><a href="#">ううう</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
                <li><a href="https://www.facebook.com/"  target=”_blank”>facebook</a></li>
               </ul>
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
        </div>

      <div class="col-xs-3">
        <div class="tile">
          <h5>todo</h5>
          <form method="post" action="check.php">
            <input name="nickname" type="text"  class="form-control">
            <span class="input-icon fui-check-inverted"></span>
            <br>
            <input type="submit" value="send" class="btn btn-block btn-lg btn-primary">
          </form>
        </div>
      </div>









      <div class="col-xs-9">
        <div class="tile">
          <h2>add.php</h2>
        </div>
        <div class="tile">
          <h4><?php echo $rec['name']; ?></h4>
        <form method="POST" action="add.php?id=<?php echo $_GET['id'] ?>">

          名前: <input type="text" name="name"><br/>
          年齢: <input type="text" name ="age"><br/>
          性別: <select name="gender">
                  <option value="男">男性</option>
                  <option value="女">女性</option>
                </select>
          <br/>
          <input type="hidden" name="area_table_id" value=<?php $_GET['id'] ?>>
          <input type="submit" value="保存">
          <?php


          ?>
        </form>






    
























           </div>
      </div>

      <div class="row demo-tiles">
        <div class="col-xs-3">
          <div class="tile">
            <img src="img/icons/svg/clipboard.svg" alt="nippo" class="tile-image big-illustration">
            <h3 class="tile-title">日報</h3>
            <p>毎日書こう！<br>継続は力なり！</p>
            <a class="btn btn-primary btn-large btn-block" href="https://drive.google.com/#folders/0B3uYbXmoBH5MTENRMmh1QXFnWUE" target="_blank">日報シートへ</a>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="tile">
            <img src="img/icons/svg/map.svg" alt="wifi" class="tile-image">
            <h3 class="tile-title">Wi-fi</h3>
            <p>期限守れよ！<br>守れよ！</p>
            <a class="btn btn-success btn-large btn-block" href="https://docs.google.com/spreadsheets/d/1DE8c9aaZFm7PQ-TGEFrnr8IQ_T6haLPf9pvhWcjDGDk/edit?usp=drive_web" target="_blank">Wi-fi管理表へ</a>
          </div>
        </div>

        <div class="col-xs-3">
          <div class="tile">
            <img src="img/icons/svg/retina.svg" alt="rails" class="tile-image">
            <h3 class="tile-title">rails tutorial</h3>
            <p>rails勉強したいね~<br>したいな~</p>
            <img src="img/icons/svg/ribbon.svg" alt="ribbon" class="tile-hot-ribbon">
            <a class="btn btn-danger btn-large btn-block" href="http://railstutorial.jp/" target="_blank">Rails tutorialへ</a>
          </div>
        </div>

        <div class="col-xs-3">
          <div class="tile tile-hot">
            <img src="img/icons/svg/toilet-paper.svg" alt="dotto" class="tile-image">
            <h3 class="tile-title">ドットインストール</h3>
            <p>うんこをする<br>ように勉強しろ！</p>
            <a class="btn btn-inverse btn-large btn-block" href="http://dotinstall.com/" target="_blank">ドットインストールへ</a>
          </div>

        </div>
      </div> <!-- /tiles -->
    </div><!-- /.container -->


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-xs-4">
            <h3 class="footer-title">セブでの生活は
            <?php
              date_default_timezone_set("Asia/Tokyo");
               
              $datetime = new DateTime('2015/02/21 00:00:00');
              $current  = new DateTime('now');
              $diff     = $current->diff($datetime);
               
              printf('残り <br>%dヶ月%d日（%d日）',
               $diff->m, $diff->d, $diff->days);
            ?>
            <br>です。</h3>
            <p>
              問題解決<br>
              デザイン思考<br>
              アントレプレナーシップ<br>
              スタートアップ<br>
              論理的思考   
            </p>
          </div> <!-- /col-xs-4 -->
          <div class="col-xs-8">
            <h4>profile</h4>
            <div class="demo-browser">
            <div class="demo-browser-side">
              <div class="demo-browser-author"></div>
              <div class="demo-browser-action">
                <a class="btn btn-danger btn-lg btn-block" href="https://twitter.com/ARaTa6996" target="_blank">
                  <span class="fui-plus"></span>Follow
                </a>
              </div>
              <h5>@arata6996</h5>
              <h6>
                Sake. Music. Engineer. Design. Sebu
              </h6>
            </div>
            <div class="demo-browser-content">
              <iframe width="400" height="225" src="//www.youtube.com/embed/iFz2PVuUess?list=PLDxux2Kvz7AQNhVxCFiyejX9IyWMgTyqe" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          </div>
        </div>
      </footer>
    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script>
      videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>
  </body>
</html>