<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>株式会社青山ケアサポート</title>
    <?php require_once('template/css-external.php'); ?>
    <link rel="stylesheet" href="template/css/index/index.css" />
</head>
<body>
    <div class="page">
        <?php require_once('template/header.php'); ?>
        
        <div class="banner">
            <div class="banner-bg" id="banner">
                <div class="slogan wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <div class="slogan-big">live true</div>
                    <div class="slogan-big">to yourself</div>
                    <div class="slogan-mini">あなたらしい 暮らしを。</div>
                    <div class="slogan-descript">
                        <div>こちらに記載している文章はダミー</div>
                        <div>文章でございます文字の大きさや量、</div>
                        <div>行間等を調整し、レイアウトを確認する</div>
                        <div>ために配置しています。</div>
                        <div>後ほど本来の文章を配置しますので、</div>
                        <div>今暫くお待ち頂けるようお願い申し上げます。</div>
                        <div>こちらに記載している文章はダミー文章でございます。</div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <section class="introduce">
            <div class="introduce-big-ttl wow fadeInUp">business</div>
            <div class="introduce-ttl wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">事業紹介</div>
            <div class="introduce-content">
                <div class="introduce-content-element element-first">
<!--                    <img src="template/images/b-care.jpg" alt="b-care.jpg" />-->
                    <div>介護事業</div>
                    <div>care and welfare</div>
                </div>
                <div class="introduce-content-element element-second">
<!--                    <img src="template/images/b-orversea.jpg" alt="b-orversea.jpg" />-->
                </div>
                <div class="introduce-content-element element-third">
                    <div class="img-top">
<!--                        <img src="template/images/b-travel.jpg"  alt="b-travel.jpg" />-->
                    </div>
                    <div class="img-bottom">
<!--                        <img src="template/images/b-build.jpg"  alt="b-build.jpg" />-->
                    </div>
                </div>
            </div>
        </section>
        
        <section class="row news">
            <div class="col-md-2">
                <div class="new-big-ttl">news</div>
                <div class="new-ttl">お知らせ</div>
            </div>
            <div class="col-md-10">
                <div class="new-element">
                    <div class="new-datetime">2020.03.01</div>
                    <div class="new-mark">プレスリリース</div>
                    <div>経営再建中の液晶パネル大手ジャパンディスプレイは２１日、元社員が約４年間にわたって不正経理を繰り 返し、総額で５億７８００万円を着服していたと発表したダミー</div>
                </div>
                <div class="new-element">
                    <div class="new-datetime">2020.03.01</div>
                    <div class="new-mark">プレスリリース</div>
                    <div>経営再建中の液晶パネル大手ジャパンディスプレイは２１日、元社員が約４年間にわたって不正経理を繰り 返し、総額で５億７８００万円を着服していたと発表したダミー</div>
                </div>
                <div class="new-element">
                    <div class="new-datetime">2020.03.01</div>
                    <div class="new-mark">プレスリリース</div>
                    <div>経営再建中の液晶パネル大手ジャパンディスプレイは２１日、元社員が約４年間にわたって不正経理を繰り 返し、総額で５億７８００万円を着服していたと発表したダミー</div>
                </div>
            </div>
        </section>
        
        <?php /* require_once('template/footer.php'); */ ?>
        
        <?php require_once('template/js-external.php'); ?>
    </div>
    
    <script>
        new WOW().init();
        $(function(){
            $("#banner").css("backgroundPosition", "-55px");
        });
    </script>
</body>
</html>
