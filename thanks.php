<?php
include 'modules/common/master_include.php';
check_login();
check_user();
?>

<!DOCTYPE html>
<html>

<head>
<title> <?= title ?> - Thank you </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon" href="<?= icon ?>">
<link rel="apple-touch-icon" href="<?= touch_icon ?>">

<?php
echo "<link rel=\"stylesheet\" href=\"".versionify('stylesheets/common.css')."\">";
echo "<link rel=\"stylesheet\" href=\"".versionify('stylesheets/mobile.css')."\">";
echo "<link rel=\"stylesheet\" href=\"".versionify('stylesheets/subjects.css')."\">";

echo "<link rel=\"stylesheet\" media=\"print\" href=\"".versionify('stylesheets/print.css')."\">";
?>
  
<style>

h1 {
  display: block;
  margin-top: 50px;
  background-color: #ff9100;
  color: #ffffff;
  padding: 10px;
  border-radius: 5px;
}

h1 img {
  padding-left: 10px;
  padding-right: 10px;
}

div.content-block {
  color: #4a4a4a;
  padding-left: 10px;
}

ul {
  color: #ff5400;
}

li {
  padding: 10px;
}

div.name {
  color: #ffffff;
  background-color: #ff5400;
  padding: 5px;
  margin-right: 5px;
  border-radius: 5px;
  font-weight: bold;
  display: inline-block;
}

div.description {
  color: #4a4a4a;
}

span.subject {
  font-size: 12px;
  padding: 3px;
}

/* Dark theme */

@media (prefers-color-scheme: dark) {
  
  div.content-block {
    color: #ffffff;
  }
  
  div.description {
    color: #ffffff;
  }
  
}

</style>
  
</head>

<body>
  
  <?php
  generate_topbar();
  ?>
  
  <br>

<div class="content">
  
<h1> <img src="images/fa/heart.svg" height="26px"> Thank you </h1> 
  
<div class="content-block">
  <b>This website would not be possible, if it wasn't for some amazing people. You guys rock!</b>
  
  <ul>
    <li>
      <div class="name"> Florian </div>
      <div class="description"> who provided the student dataset, curated <span class="subject L">L</span> and <span class="subject REE">REE</span>, beta-tested my first version and made feature requests to make this website what it is now </div>
    </li>
    <li>
      <div class="name"> Felix </div>
      <div class="description"> Trusty beta-tester and feature requester, reporter of missing assignments, curator of <span class="subject WPF-SPA">WPF-SPA</span> </div>
    </li>
    <li>
      <div class="name"> Teresa </div>
      <div class="description"> yoga guru and curator of <span class="subject L">L</span> and <span class="subject BSPM">BSPM</span> </div>
    </li>
    <li>
      <div class="name"> Max </div>
      <div class="description"> who beta-tested new features in amazing detail </div>
    </li>
    <li>
      <div class="name"> Mathias </div>
      <div class="description"> Initial beta-tester, reporter of missing assingments </div>
    </li>
    <li>
      <div class="name"> Alex </div><div class="name"> Lauren </div><div class="name"> Maxi </div>
      <div class="description"> who notified me of a few missing assignments </div>
    </li>
  </ul>
  
  <b>And also thanks for everyone who has supported and used the website. You have encouraged me a lot!</b>
</div>
 
</div> 

<?php 
include 'modules/bottombar.php';
 ?>

</body>
</html>