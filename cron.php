<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://versogotit.com:3000/preBooking");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_exec($ch);