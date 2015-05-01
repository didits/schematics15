<?php

        $email;$nrp;$captcha;$nama;
        if(isset($_POST['nrp'])){
          $email=$_POST['nrp'];
        }if(isset($_POST['nama'])){
          $email=$_POST['nama'];
        }if(isset($_POST['email'])){
          $captcha=$_POST['email'];
        }if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
			header("Location:localhost/schematics2015/oprec?status=gagal");
          exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdXBgYTAAAAAGhsMoHOma3KnKUWjOZAh71t-0M0&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==false)
        {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        }else
        {
          echo '<h2>Thanks for posting comment.</h2>';
        }
?>