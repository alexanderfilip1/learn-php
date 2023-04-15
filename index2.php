<?php
require "admin.php";
$domain_name =$domainname; //logo domain name

//;echo $my_var;
$f = array (
  'name' => 'Alexandru',
  'surname' => 'Filip',
  'age' => '19',
  'byear' => '2003'
)
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/styles.css">
  <title>Document</title>
</head>

<body>
  <header>
    <div class="all_header">
      <a href="/" class="logo"><?=$domainname?></a>
      <ul>
        <a href="/about.php">
          <li>About</li>
        </a>
        <a href="/faq.php">
          <li>FAQ</li>
        </a>
        <a href="/contact.php">
          <li>Contact</li>
        </a>
      </ul>
    </div>
  </header>
</body>

</html>