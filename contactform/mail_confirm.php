<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>確認フォーム</title>
        
        <link href="style2.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>お問合せ確認内容</h1>
        <div class="box">
        <p>お問合せ内容はこちらで宜しいでしょうか？<br>
        よろしければ「送信する」ボタンを押してください。</p>
        <p>名前
        　　<br>
        　　<?php echo $_POST['name']; ?>
        </p>
        <p>メールアドレス
            <br>
            <?php echo $_POST['mail']; ?>
        </p>
        <p>年齢
            <br>
            <?php echo $_POST['age']."歳"; ?>
        </p>
        <p>コメント
            <br>
            <?php echo $_POST['comment']; ?>
        </p>
        
        <form action="index.html">
            <input type="submit" class="button1" value="戻って修正する">
        </form>
            
        <form action="insert.php" method="post">
            <input type="submit" class="button2" value="送信する">
            <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
            <input type="hidden" value="<?php echo $_POST['comment']; ?>" name="comment">
            
        </form>

        </div>
    </body>
</html>