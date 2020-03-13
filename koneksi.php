<?php
define ('HOST','localhost');
define ('USER','root');
define ('PSS','');
define ('DB','table_api');

$con =mysqli_connect(HOST,USER,PASS,DB)or die('Unable to Connect');