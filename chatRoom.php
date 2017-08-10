<?php

die();
$uid = $_POST["uid"];
$fp = fopen('chatRoomMembers.json', 'w');
file_put_contents($fp, "{uid : "+$uid+"}");
fclose($fp);


echo "Data saved successfully";