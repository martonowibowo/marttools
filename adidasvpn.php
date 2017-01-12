<?php
//running docker-nya
exec("sudo docker start adi-vpn && sudo docker start vpn-int", $output, $return_var);

//konek vpn ke adidas-magento
echo exec("sudo docker exec adi-vpn bash /root/check_vpn.sh", $output, $return_var); 
echo exec("sudo docker exec adi-vpn /bin/sh -c 'iptables-restore < /root/iptables.rules' 2>&1", $output, $return_var);

//konek vpn ke adidas-integration
echo exec("sudo docker exec vpn-int bash /root/vpnstart.sh");
echo exec("sudo docker exec vpn-int /bin/sh -c 'iptables-restore < /root/iptables.rules' 2>&1");


?>
