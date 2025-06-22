<?php
$myname = htmlspecialchars($_POST['myname'], ENT_QUOTES);
$product = htmlspecialchars($_POST['product'], ENT_QUOTES);
$amount = htmlspecialchars($_POST['amount'], ENT_QUOTES);
print "お名前は" . $myname . "ですね";
print "<br />";
print "ご希望の商品は" . $product . "ですね";
print "<br />";
print "注文数は" . $amount . "ですね";
