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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>フォームメール(確認画面)</title>
<link href="sformmail.css" rel="stylesheet" type="text/css" />
</head>
<body>
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
</div>
<div id="Copyright"><a href="http://www.sapphirus.biz/">(c) Sapphirus.Biz</a></div>
</div>
</body>
</html>
