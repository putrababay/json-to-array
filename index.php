<?php
$data = '["V1","V2","V3","V4","V5","V6"]';
echo "(".str_replace('"',"'",str_replace(array("[","]"),"",$data)).")";



?>
