<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "Your Stripe Api Key",
  "publishable_key" => "Your Stripe Api Key"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>