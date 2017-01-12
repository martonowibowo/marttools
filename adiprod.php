<?php
exec("screen -X -S adiproddb quit");
exec("screen -dmS adiproddb");
exec ("screen -r 'adiproddb' -X stuff 'ssh -L 0.0.0.0:12306:prod-adidas-indonesia.cerritcpbjz2.ap-southeast-1.rds.amazonaws.com:3306 -i /home/acommerce/adidas_id adidas_id@172.16.1.5 -p 9002\n'");
//exec("setsid ssh -L 0.0.0.0:13306:prod-adidas-indonesia.cerritcpbjz2.ap-southeast-1.rds.amazonaws.com:3306 -i /home/acommerce/adidas id_dev@172.16.1.5 -p 9001"); 
//exit();
?>
