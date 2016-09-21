<?php
echo 'Hello GitHub!'.PHP_EOL;

date_default_timezone_set('Asia/Tokyo');
$dt = new DateTimeImmutable();
echo $dt->format('Y/m/d').PHP_EOL;
