<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>reCaptcha</title>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
</head>
<body>
  <h1>Google reCaptcha</h1>
    <form action="recaptchaaction.php" method="post">
      <input type="email" placeholder="Type your email" size="40"><br><br>
      <textarea name="comment" rows="8" cols="39"></textarea><br><br>
      <input type="submit" name="submit" value="Post comment"><br><br>
      
      <div class="g-recaptcha" data-type="image"  data-sitekey="6Lc6-LcmAAAAABB6_HoHfmav9tOh24vf0KLJkrzE"></div>
      
    </form>
 

</body>
</html>

