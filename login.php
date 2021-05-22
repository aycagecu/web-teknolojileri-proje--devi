<?php

  $kadi=$_POST["kadi"];
  $sifre=$_POST["sifre"];

  if(strlen($kadi)==0)
	  echo"Lütfen geçerli bir kullanıcı adı giriniz <br>";
  else if(strlen($sifre)==0)
	  echo"Lütfen geçerli bir şifre giriniz";
  
  else if(!filter_var($kadi, FILTER_VALIDATE_EMAIL))
  {
     echo "girilen kullanıcı adı ($kadi) geçersizdir";
    
  }
  
  else
	  echo"Hoşgeldiniz $kadi";
 
?>