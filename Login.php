<!DOCTYPE html>
<html>

<head>
	<title>SAYFA BAŞLIĞI</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<!--FARKLI CİHAZLARA GÖRE EKRAN ÇÖZÜNÜRLÜĞÜ AYARLAYAN ELEMENT-->
</head>



<body>

	<div class="container right-panel-active">
		<div class="container_form container--signup">
			<form action="#" class="form" id="form1">
				<h2 class="form_title">FORMA ULAŞMAK İÇİN TIKLAYINIZ</h2>
				
				<button class="btn">GİRİŞ YAP</button>
			</form>
		</div>

		<div class="container_form container--signin">
<form id="AjaxBaglanLogin" method="POST" class="form" enctype="multipart/form-data">
				<h2 class="form_title">Oturum Aç</h2>
				<input type="text" id="email" name="email" placeholder="email" class="input">
				 <input type="text" id="password" name="password" placeholder="Şifre" class="input">
				<i class="circular eye link icon" onclick="togglePassword()"></i>
				<a href="#" class="link">Şifreni mi Unuttun?</a>
				<button type="submit" id ="submitLogin" class="btn">Oturum Aç</button>
			</form>
		</div>

		<div class="container_overlay">
			<div class="overlay">
				<div class="overlay_panel overlay--left">
					<button class="btn" id="signIn">ÖĞRETMEN</button>
				</div>

				<div class="overlay_panel overlay--right">
					<button class="btn" id="signUp">ÖĞRENCİ</button>
				</div>
			</div>
		</div>

	</div>

<script type="text/javascript" src="script.js"></script>
</body>

</html>

