<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>FF14 Feeder</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="apple-touch-icon-precomposed" href="img/page_icon.png" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">FF14 Feeder</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.php?feed=today">今日</a></li>
            <li><a href="index.php?feed=yesterday">昨日</a></li>
            <li><a href="index.php?feed=old">それ以前</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container" style="padding-top:60px;">
      <table class="table table-striped">
        {foreach from=$list_data item=data}
        <tr>
          <td class="hidden-xs">{$data['date']}</td>
          <td><a href="{$data['blog_url']}">{$data['blog']}</a></td>
          <td><a href="{$data['link']}">{$data['title']}</a></td>
        </tr>
        {/foreach}
      </table>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/JavaScript">
      $(function(){
      //ページ内のaタグ群を取得。aTagsに配列として代入。
      var aTags = $('a');
      //全てのaタグについて処理
      aTags.each(function(){
      //aタグのhref属性からリンク先url取得
      var url = $(this).attr('href');
      //念のため、href属性は削除
      $(this).removeAttr('href');
      //クリックイベントをバインド
      $(this).click(function(){
      location.href = url;
      });
      });
      });
    </script>
  </body>
</html>
