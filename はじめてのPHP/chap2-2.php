<?php
$burger_price = 4.95;
$shake_price = 1.95;
$cola_price = 0.85;

$subtotal = $burger_price * 2 + $shake_price * 1 + $cola_price * 1;
$tax = $subtotal * 0.075;
$tip = $subtotal * 0.16;

$total = $subtotal + $tax + $tip;
print $total;
