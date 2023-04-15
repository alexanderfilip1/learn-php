<?php
    $domainname = $_POST['domain'];
?>


<form action="admin.php" method="POST">
    Domain Name: <input type="text" name="domain">
    <input type="submit" value="Save changes" name="save_changes">
</form>

<a href="/">Go Back!</a>