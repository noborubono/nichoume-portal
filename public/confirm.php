<?php
//セッションを利用するのでここは削除しないで下さい
session_start();
if (SID) Err('Cookieを有効にして下さい');
if (!$_SESSION) header('Location: completion.html');

function Err($err) {
	echo <<< EOM
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>エラー：$err</title></head>
<body style="font-size: 12px; line-height: 1.8em;">
<strong>エラー : </strong>$err<br>
<input type="button" value="戻る" onclick="history.back();">
</body></html>
EOM;
	exit;
}
//ここまで
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name=”robots” content=”noindex,nofollow,noarchive” />
<meta name="keywords" content="ギークガレージ, シェアオフィス, 御徒町" />
<meta name="description" content="GEEK GARAGE（ギークガレージ）はアメリカのガレージをイメージした、ガレージデザインのコワーキングスペースです。 「世界はいつの時代もガレージの悪巧みから変わる。」をコンセプトに、自由な空間を活かし遊び心や開放感のあるスペースとなっています。" />
<link rel="shortcut icon" href="http://33.media.tumblr.com/avatar_daefbe11905b_128.png">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>GEEK GARAGE | 御徒町のコワーキングスペース「ギークガレージ」のWEBサイトです。</title>
  
	<!-- CSS _____________________________________________-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/magnificpopup.css" media="screen" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css" media="screen" />  
	<link rel="stylesheet" href="css/scheme-blue.css" media="screen" />
	
	<!-- Javascripts ______________________________________-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
	<!-- include Easing -->
	<script src="js/jquery.easing.js"></script> 
	<!-- include Cycle -->
	<script src="js/jquery.cycle.all.js"></script> 
	<!-- include jCarousel -->
	<script src="js/jquery.jcarousel.min.js"></script> 
	<!-- include Masonry -->
	<script src="js/jquery.isotope.min.js"></script> 
	<!-- include filtering mixitup -->
	<script src="js/jquery.mixitup.min.js"></script> 
	<!-- include image popups -->
	<script src="js/jquery.magnific-popup.min.js"></script> 
	<!-- include mobile menu -->
	<script src="js/jquery.mobilemenu.js"></script> 
	<!-- include custom script -->
	<script src="js/scripts.js"></script>

	<!-- Fixing Internet Explorer ______________________________________-->
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" />
	<![endif]-->

	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" />
		<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
	<![endif]-->
</head>

<body>

<!-- HEADER _____________________________________________-->
<header role="banner" id="header">

	<div id="sticks-to-top">
		<div class="wrapper">
		
			<!-- Main menu _____________________________________________-->
			<nav id="mainmenu" role="navigation">
        <ul>
          <li><a href="index.html" class="active">Home</a> </li>
          <li><a href="#about-us">About</a>
            <ul class="sub-menu">
              <li><a href="#about-us">ギークガレージについて</a></li>
            </ul>
          </li>
          <li><a href="#pricing">Pricing</a>
            <ul class="sub-menu">
              <li><a href="#pricing">料金体系について</a></li>
            </ul>
          </li>
          <li><a href="#schedule">Schedule</a>
            <ul class="sub-menu">
              <li><a href="#schedule">スケジュール</a></li>
              <li><a href="#schedule#event">イベントについて</a></li>
            </ul>
          </li>
          <li><a href="#access">Access</a>
            <ul class="sub-menu">
              <li><a href="#access">地図を見る</a></li>
              <li><a href="#contact">お問い合わせ</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      
      <!-- Logo _____________________________________________-->
      <h1 id="logo"> <a href="/" rel="home" title=""><img src="images/logo.png" alt="" /></a> </h1>
      
      <!-- Address ______________________________________-->
      <div id="address-block">
        <ul>
          <li><i class="icon-phone"></i>CALL: &nbsp; (123)-456-9999</li>
          <li><a href="#contact">Contact Us</a></li>
					<li><a href="#" target="_blank" title="Twitter"><i class="icon-twitter"></i></a></li>
					<li class="smaller-gap"><a href="#" target="_blank" title="Facebook"><i class="icon-facebook"></i></a></li>
					<li class="smaller-gap"><a href="#" target="_blank" title="Google+"><i class="icon-google-plus"></i></a></li>
					<!-- <li class="smaller-gap"><a href="#" target="_blank" title="Linkedin"><i class="icon-linkedin"></i></a></li>
					<li class="smaller-gap"><a href="#" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a></li>
					<li class="smaller-gap"><a href="#" target="_blank" title="Youtube"><i class="icon-youtube"></i></a></li>
					<li class="smaller-gap"><a href="#" target="_blank" title="Dribbble"><i class="icon-dribbble"></i></a></li>
					<li class="smaller-gap"><a href="#" target="_blank" title="Flickr"><i class="icon-flickr"></i></a></li>
					<li class="smaller-gap"><a href="#" target="_blank" title="Tumblr"><i class="icon-tumblr"></i></a></li>
					<li class="smaller-gap"><a href="#" target="_blank" title="Skype"><i class="icon-skype"></i></a></li> -->
				</ul>
			</div>	

		</div> <!-- END .wrapper FOR #sticks-to-top -->
	</div>  
	<!-- END #sticks-to-top -->
	
</header>
<!-- END #header -->

<header id="content-header">
	<div class="wrapper">
			<!-- Heading _____________________________________________-->
			<h1>Send message</h1>
			
			<!-- Breadcrumbs _____________________________________________-->
			<p itemscope itemtype="http://data-vocabulary.org/Breadcrumb" id="breadcrumbs"><a href="/" rel="home" itemprop="url"><span itemprop="title">Home</span></a> <span class="divider">></span> Contact</p>
	</div>
</header>

<div class="wrapper">

  <!-- MAIN CONTENT SECTION  _____________________________________________-->
<section id="content" role="main">
  
<div id="MAINLAYOUT">
<h1>フォームメール</h1>
<h2>- 確認画面 -</h2>
<div id="FORM">
<form id="form" name="form" method="post" action="sformmail.php">
<table align="center" cellspacing="1">
<tr>
<th nowrap="nowrap">名前</th>
<td><?=$_SESSION['name']?></td>
</tr>
<tr>
<th nowrap="nowrap">メールアドレス</th>
<td><?=$_SESSION['email']?></td>
</tr>
<tr>
<th nowrap="nowrap">件名</th>
<td><?=$_SESSION['subject']?></td>
</tr>
<tr>
<th nowrap="nowrap">メッセージ</th>
<td><?=$_SESSION['message']?></td>
</tr>

<tr>
<th colspan="2" class="Submit"><?php
//入力項目エラー判定
if($_SESSION['inputErr']){
	echo'<input type="button" value="戻 る" onclick="history.back()" style="width:80px" />';
}else{
	echo'<p>入力が正しければ、送信ボタンを押して下さい。</p>
<input name="mode" type="hidden" id="mode" value="SEND" />
<input type="submit" style="width:80px" value="送 信" />
<input type="button" value="戻 る" onclick="history.back()" style="width:80px" />';
}
?></th>
</tr>
</table>
</form>
</section>
<!-- END #content --> 
</div>
<!-- END #content --> 

<a id="back-to-top" href="#" title="Back to top"><i class="icon-angle-up"></i></a> 

<!-- FOOTER _____________________________________________-->
<footer id="footer" role="contentinfo">
  <div class="wrapper">
    <div class="widgets">
      <div class="footerbox">
        <h3>About Us</h3>
        <p>GEEK GARAGE（ギークガレージ）はアメリカのガレージをイメージした、ガレージデザインのコワーキングスペースです。 「世界はいつの時代もガレージの悪巧みから変わる。」をコンセプトに、自由な空間を活かし遊び心や開放感のあるスペースとなっています。</p>
        <p><a href="#" class="button">詳しく見る</a></p>
      </div>
      <div class="footerbox">
        <h3>Contents</h3>
        <ul>
          <li><i class="icon-laptop"></i> <a href="#">ギークガレージとは</a></li>
          <li><i class="icon-yen"></i> <a href="#">料金体系について</a></li>
          <li><i class="icon-flag"></i> <a href="#">スケジュール</a></li>
          <li><i class="icon-move"></i> <a href="#">アクセス</a></li>
          <li><i class="icon-phone"></i> <a href="#">お問い合わせ</a></li>
        </ul>
      </div>
      <div class="footerbox">
        <h3>Links</h3>
        <ul>
          <li><a href="http://geekhouse.tumblr.com">ギークハウス プロジェクト</a></li>
          <li><a href="http://www.sapphirus.biz/">メールフォーム(c) Sapphirus.Biz</a></li>
          <li><a href="#">Designagent webdesign</a></li>
          <li><a href="#">Buy this theme</a></li>
          <li><a href="#">Follow on Twitter</a></li>
        </ul>
      </div>
      <div class="footerbox last">
        <h3>お問い合わせ</h3>
        <p>所在地：〒111-0041 東京都 台東区元浅草1-15-9　SAKURAビル2F</p>
        <ul class="contact-info">
          <li><i class="icon-phone" title="Phone"></i> 070- 5591 - 3421</li>
          <li><i class="icon-envelope" title="Email"></i> tokunoriben@gmail.com</li>
          <li><i class="icon-desktop" title="Web"></i> yourcompany.com</li>
        </ul>
      </div>
      <br class="clear" />
    </div>
    <!-- END .widgets -->
    
    <div class="bottom">
      <p class="left">This HTML template was designed by <a href="#">Designagent</a></p>
      <p class="right">&copy; 2014 Geek Garage. All rights reserved</p>
    </div>
  </div>
  <!-- END .wrapper FOR footer --> 
</footer>
<!-- END footer --> 

<!-- Custom Page Scripts _____________________________________________--> 

<!-- Your Google Analytics ______________________________________--> 
<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-XXXXXXX-X']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })(); 

</script>
</body>
</html>
