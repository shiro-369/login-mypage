<?php
mb_internal_encoding("utf8");
session_start();

if(empty($_POST['from_mypage'])){
    header("Location:login_error.php");
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
</head>

<body>
    <header>
        <img src="4eachblog_logo.jpg">
        <div class="logout"><a href="log_out.php">ログアウト</a></div>
    </header>

    <main>
        <form action="mypage_update.php" method="post">
            <div class="confirm">
                <h2>会員情報</h2>
                <div class="hello">
                    <?php echo "こんにちは！ ".$_SESSION['name']."さん"; ?>
                </div>
                <br>
                <div class="picture">
                    <img src="<?php echo $_SESSION['picture'];?>">
                </div>
                <div class="basic_info">
                    <p>氏名：<input type="text" size="40" name="name" value="<?php echo $_SESSION['name']; ?>"></p>
                    <p>メール：<input type="text" size="40" name="mail" value="<?php echo $_SESSION['mail']; ?>"></p>
                    <p>パスワード：<input type="text" size="40" name="password" value="<?php echo $_SESSION['password']; ?>"></p>
                </div>
                <div class="comment">
                    <textarea rows="4" cols="95" name="comments"><?php echo $_SESSION['comments'];?></textarea>
                </div>
                <div class="hensyubutton">
                    <input type="submit" class="button1" value="この内容に変更する"/>
                </div>
            </div>  
        </form>      
    </main>

    <footer>
        ©︎2018 InterNous.inc.All rights reserved
    </footer>
</body>
</html>