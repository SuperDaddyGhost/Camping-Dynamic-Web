<?php



      if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
      }

 

        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }


        $secretKey = "6Lc6-LcmAAAAAEMMRgTXV28Wks7b_Y8KZFvx70F1";
 

        $ip = $_SERVER['REMOTE_ADDR'];
 
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);

 

        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);

        if($responseKeys["success"]) {
                echo '<h2>Thanks for posting comment!</h2>';
        } else {
                echo '<h2>reCaptcha verification failed.</h2>';
        }


?>
