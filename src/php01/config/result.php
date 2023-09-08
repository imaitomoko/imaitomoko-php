<?php
$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$product = htmlspecialchars($_POST['product'], ENT_QUOTES);
$num = htmlspecialchars($_POST['num'], ENT_QUOTES);

echo "私の名前は" . $my_name;
echo '<br />';
echo "ご希望の商品は、" . $product;
echo '<br />';
echo "ご注文数は" . $num;

