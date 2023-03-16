<?php
$burger_price = 4.95;
$shake_price = 1.95;
$cola_price = 0.85;

$burger_amount = 2;
$shake_amount = 1;
$cola_amount = 1;

$burger_total = $burger_price * $burger_amount;
$shake_total = $shake_price * $shake_amount;
$cola_total = $cola_price * $cola_amount;

$subtotal = $burger_total + $shake_total + $cola_total;
$tax = $subtotal * 0.075;
$tip = $subtotal * 0.16;

$subtotal_tax = $subtotal + $tax;
$total = $subtotal + $tax + $tip;

print <<<FORMAT
hamburger:
  \$$burger_price, $burger_amount amount, \$$burger_total
shake:
  \$$shake_price, $shake_amount amount, \$$shake_total
cola:
  \$$cola_price, $cola_amount amount, \$$cola_total

subtotal:
  \$$subtotal

subtotal (+tax):
  \$$subtotal_tax

total:
  \$$total
FORMAT;
