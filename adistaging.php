<?php
exec("screen -dmS adistagingdb");
exec ("screen -r 'adistagingdb' -X stuff 'ssh -L 0.0.0.0:13306:prod-adidas-indonesia.cerritcpbjz2.ap-southeast-1.rds.amazonaws.com:3306 -i /home/acommerce/adidas id_dev@172.16.1.5 -p 9001\n'");
//exec("setsid ssh -L 0.0.0.0:13306:prod-adidas-indonesia.cerritcpbjz2.ap-southeast-1.rds.amazonaws.com:3306 -i /home/acommerce/adidas id_dev@172.16.1.5 -p 9001"); 
//exit();
?>
