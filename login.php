<!doctyle html>
<html>

   <head>
      <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="pcss1.css">
	  <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Padauk:wght@700&family=Poppins:wght@300&display=swap" rel="stylesheet">
	  <title></title>
   </head>
   
   <body>
   
     <div class="container">
	    
	    <div class="nav">
      
		   <ul >
		      <li><a href="login.html">Giriş Yap</a></li>
		      <li><a href="anasayfa.html">Anasayfa</a></li>
		      <li><a href="hakkimda.html">Hakkımda</a></li>
		      <li><a href="ozgecmisim.html">Özgeçmişim</a></li>
		      <li><a href="ilgialanlarim.html">İlgi Alanlarım</a></li>
		      <li><a href="sehrim.html">Şehrim</a></li>
		      <li><a href="mirasimiz.html">Mirasımız</a></li>
		      <li><a href="iletisim.html">İletişim</a></li>
		   </ul>

	    </div>
   
   
   
   
        <div class="loginphp">
		
		   
         <div>
   
            <CENTER>
	          <h3>Lütfen Giriş Yapınız</h3>
	  
	          <form action="login.php" method="POST">

               <table>

                  <tr>
                    <td>Kullanıcı Adı : </td>
                    <td><input type="text" name="kadi"></td>
                  </tr>

                  <tr>
                    <td>Şifre : </td>
                    <td><input type="password" name="sifre"></td>
                  </tr>

                  <tr>
                    <td colspan="2"><input type="submit" name="giris" value="Giriş Yap"></td>
                  </tr>

                </table>
			  
	          </form>
	  
	        </CENTER>
	 
	       </div>
		    
		
		
		
		
		     <?php

               $kadi=$_POST["kadi"] ?? "";
               $sifre=$_POST['sifre'] ?? "";
               $index=strpos($kadi,"@");
               $mailKontrol=substr($kadi,$index);

                if(strlen($kadi)==0)
				{ 
					echo"Kullanıcı adı kısmını boş geçemezsiniz. <br>";
					echo"Tekrar denemek için lütfen bekleyiniz<br>";
			       header("Refresh:3 ; url=login.html");
				}
			      
                else if(strlen($sifre)==0)
				{
					echo"Şifre kısmını boş geçemezsiniz.<br>";
					echo"Tekrar denemek için lütfen bekleyiniz<br>";
                     header("Refresh:3; url=login.html");
				}
                else if($mailKontrol!="@sakarya.edu.tr")
				{
					echo"Kullanıcı adı '@sakarya.edu.tr' uzantılı olmalıdır<br>";
					echo"Tekrar denemek için lütfen bekleyiniz<br>";
				    header("Refresh:3; url=login.html");
				}
                else if($kadi!="b201210094@sakarya.edu.tr")
				{
					echo"Gecersiz bir kullanıcı adı girdiniz<br>";
					echo"Tekrar denemek için lütfen bekleyiniz<br>";
					header("Refresh:3; url=login.html");
				}
	              
                else if($sifre!="b201210094")
				{
               	   echo"Yanlış bir şifre girdiniz<br>";
				   echo"Tekrar denemek için lütfen bekleyiniz<br>";
				   header("Refresh:3; url=login.html");
				}
                else
				{
				 
	              echo"HOŞGELDİNİZ b201210094 <br>";
				  echo"Anasayfaya Yönlendiriliyorsunuz.Lütfen bekleyin.. <br>";
				   header("Refresh:4; url=anasayfa.html");
				}
			  

             ?>
		
		
		
		
		
		
		
		
		</div>
   
   
   
	  
	  
	 </div>
   
     
   </body>
   
</html>


