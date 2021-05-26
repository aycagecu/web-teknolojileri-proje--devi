<!doctype html>
<html lang="tr">

  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="pcss1.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Padauk:wght@700&family=Poppins:wght@300&display=swap" rel="stylesheet">
	<title>iletisim</title>
	
  </head>
  
  
  <body style="background-color:#F2F6F6 ">
  
    <div class="container">
	    
	    <div class="nav">
      
		   <ul >
		      <li><a href="login.html">Giriş Yap</a></li>
		      <li ><a href="anasayfa.html">Anasayfa</a></li>
		      <li><a href="hakkimda.html">Hakkımda</a></li>
		      <li><a href="ozgecmisim.html">Özgeçmişim</a></li>
		      <li><a href="ilgialanlarim.html">İlgi Alanlarım</a></li>
		      <li><a href="sehrim.html">Şehrim</a></li>
		      <li><a href="mirasimiz.html">Mirasımız</a></li>
		      <li><a href="iletisim.html">İletişim</a></li>
			  
		   </ul>

	    </div>
		 
		<div id="iletisimphp">
		 
		  <?php
		     
			 
			echo"BİLGİLERİNİZ : <br>"; 
			echo"Ad-Soyad :";
			echo $_POST["AdSoyad"] ?? "";
            echo"<br> Yaş :";
			echo $_POST["yas"] ?? "";
            echo"<br> Telefon : ";			
            echo "0".$_POST["telefon"] ?? "";
			echo"<br> E-mail : ";
            echo $_POST["email"] ?? "";
			echo"<br> Mesaj : ";
			echo $_POST["mesaj"] ?? "";
           
		  ?>
		
		 
		
		</div>




				
	</div>
  




    
  </body>
</html>