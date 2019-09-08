<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>書籍登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <!-- ↓styleの当て方は下の一行を参考にする -->
  <!-- <link rel="stylesheet" href="css/a.css">  -->
  <!-- <style>div{padding: 10px;font-size:16px;}</style> -->
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">書籍一覧</a></div>
    </div>
    <div id="ex">図書館へようこそ!まずはこちらをクリックしてみください。</div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="test.js"></script>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここでinsert.phpにデータを送っている -->
<form method="post" action="insert.php">
<div class="jumbotron">
   <fieldset>
    <div class="box1">
    <legend>書籍を登録してください</legend>
    </div>
    <!-- name="xxx" の部分に注目するようにしておいてください🤗 -->
     <label>書籍タイトル：<input type="text" name="name"></label><br>
     <div id="ex1">↑本のタイトル等を入力してください</div>
     <label>著者：<input type="text" name="email"></label><br>
     <div id="ex2">↑著者名を入力してください</div>
     <label>レビュー：<textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <div id="ex3">↑感想等、自由にお書きください</div>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>