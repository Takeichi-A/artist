<?php
    //値が取れてるかの確認
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
    // exit;
    
    
    //悪意のあるコードの無害化
    function h($str) {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');    
    }
    //日本語化
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");
    //送信先
    $to = 'info@taros-studio.com';
    //メールの件名
    $subject = h($_POST["subject"]);
    //入力内容を全て結合したメールの内容
    $message = "お名前:" . h($POST_["name"])
            . "\nふりがな :" . h($_POST["furigana"])
            . "\n貴社名 :" . h($_POST["company"])
            . "\nE-mail :" . h($_POST["email"])
            . "\n件名 :" . h($_POST["subject"])
            . "\nお問い合わせ内容 :" . h($_POST["body"]);
    //送信元
    $header = "From: " . h($_POST["email"]);
?>
    
<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <title>Taros-Art</title>
        <meta name="direction" content="漫画家・イラストレーターとして活動するTaro（たろ）のポートフォリオサイトです。" >
        <meta name="keywords" content="漫画,マンガ,イラスト,ペン画,モノクロ,デジタル" >
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <link href="//fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css" >
        <link rel="stylesheet" href="css/fakeLoader.css" >
        <link rel="stylesheet" type="text/css" href="lightbox/jquery.fancybox.css">
        <link rel="stylesheet" href="css/animate.min.css"/>
        <link rel="icon" type="image/png" href="images/favicon.png" >
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/fakeLoader.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="lightbox/jquery.fancybox.min.js"></script>
        <script src="js/taros-art.js"></script>
    </head>
    
    <body>
        <div id="bg" class="animated fadeIn">
            <img class="bg_pc" src="images/about/about_pc.png" alt="" />
            <img class="bg_sp" src="images/about/about_sp.png" alt="" />
        </div>
        
        <header>
            <div id="ab_header_in" class="animated fadeIn">
                <div>
                    <h1><a href="index.html" class="about"><img src="images/about/logo_wt.png" alt="logo" srcset="images/about/logo_wt@2x.png 2x" /></a></h1>
                </div>
                <div class="insta">
                    <a href="https://www.instagram.com/taros_studio/"><i class="fa fa-instagram"></i></a>
                </div>
                <div class="about">
                    <a href="gallery.html" class="animation-link">Gallery</a>
                </div>
            </div>
        </header>
        
        <div id="box" class="animated fadeIn">
            <div class="plofile">
                <div class="text">
                    <h2>Taro(たろ)</h2>
                    <p>愛知県在住<br>
                        漫画家、イラストレーター<br>
                        2007年よりアーティスト活動を開始。竹書房コミックコンテストでの受賞をきっかけに自身の作風を模索。
                        割り切れない気持ちや理不尽な思い、その中で見つけるかすかな希望を人と機械と植物を絡め表現すべく日々迷想中。
                        イベントでは、「ライブペイント漫画」と称して大きなキャンバスに即興で漫画を描く。
                    </p>
                    <p class="title">&raquo;zine</p>
                    <p>
                        2014年&nbsp;ヨワムシノモノガタリ<br>
                        2016年&nbsp;日々の徒然
                    </p>
                    <p class="title">&raquo;event</p>
                    <p>
                        第30回&nbsp;クリエイターズマーケット（ライブペイント）<br>
                        第31回&nbsp;クリエイターズマーケット（ライブペイント）<br>
                        第34回&nbsp;クリエイターズマーケット（キャラリー、ライブペイント）<br>
                        第36回&nbsp;クリエイターズマーケット（キャラリー、ライブペイント）<br>
                    </p>
                </div>
            </div>
            
            <div class="contact">
                <div class="echo">
                    <?php
                    //メールの送信
                     if(mb_send_mail($to, $subject, $message, $header)){
                        echo "メールが送信されました。<br />";
                        echo "お問い合わせありがとうございます。１週間以内にご返信させていただきます。<br />";
                        echo "１週間経っても返信がない場合はお手数ですが再度ご連絡をお願いいたします。";
                    } else {
                        echo "メールの送信に失敗しました。<br />";
                        echo " 誠に申し訳ございませんが、再度お問い合わせをお願いいたします。";
                    };
                    ?>
            
                </div>
            </div>
        </div>
        
        <p class="copy">copyright (c) Taro all rights reserved.</p>
        
        <div>
            <p class="pagetop"><a herf="#header_in">&and;</a></p>
        </div>
        


    
    
    <div id="pagetop">
        <a href="#head_in"><img src="images/top_sp/pagetop.png" alt="" srcset="images/top_sp/pagetop@2x.png 2x" /></a>
    </div>

    </body>
</html>