<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/eba44414f3.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./css/master.min.css">
	<link rel="stylesheet" href="./css/profile.min.css">
	<link rel="stylesheet" href="./css/menu.min.css">
	<!-- RobotoとNotoSerifJPのフォント読み込み -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link
		href="https://fonts.googleapis.com/css2?family=Bungee+Outline&family=Noto+Serif+JP:wght@500&family=Roboto:wght@900&display=swap"
		rel="stylesheet">
	<!-- /RobotoとNotoSerifJPのフォント読み込み -->
	<title>Document</title>
</head>
<body>
	<!-- menuはそのうちPHPファイル化してインクルードする型になると思う -->
	<?php include('./php/menu.php') ?>
	<!-- ここからメインコンテンツ -->

	<table class="maincontents" border="1">
		<tr>
			<td>
				<div class="profilegazou"><img src="" alt="" class="profimage"></div>
			</td>
			<td class="profile_td">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
			<i class="fab fa-flipboard"></i>
			<i class="fab fa-twitter-square"></i>
			<i class="fas fa-phone"></i>
					aaaaa
			</td>
		</tr>
	</table>


	<!-- 左に画像を乗せて、右に名前とかを入れたい。 
	 <img src="./img/head.png"class="mainimage"> -->
<!-- /ここまでメインコンテンツ -->
</body>
</html>