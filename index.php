<!DOCTYPE html>
<html>
<<<<<<< HEAD
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <?php
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");
      $to = $_POST['to'];
      $title = $_POST['title'];
      $content = $_POST['content'];
      if(mb_send_mail($to, $title, $content)){
        echo "メールを送信しました";
      } else {
        echo "メールの送信に失敗しました";
      };
    ?>
  </body>
</html>
=======
    <head>
        <title>ワイのホームページ</title>
        <meta charset="utf-8">
        <style>
        </style>
        <link rel="stylesheet" href="aa.css">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="https://umamusume.jp">HOME</a></li>
                <li><a href="https://umamusume.jp">サービス紹介</a></li>
                <li><a href="https://umamusume.jp">最新情報</a></li>
                <li><a href="https://umamusume.jp">ブログ</a></li>
                <li><a href="https://umamusume.jp">お問い合わせ</a></li>
              </ul>
        </nav>
        <h1><span style="background-color: aqua; color: #000;">ワイのホームページ</span></h1>
    <form action="index.php" method="get">
        <!-- フォームの部品 -->
        <div>
        <label for="name">名前</label>
        <input type="text" id="name" name="name"><br>
        <label for="email">email</label>
        <input type="mail" id="email" name="email"><br>
        <label for="message">内容</label>
        <input type="submit" value="送信する"><br>
        </div>
        
    </form>
    <p>afjla</p>
    </body>
</html> 
>>>>>>> 98aa105b781e41ee2b3254847eac332e4c1f7f07
