<?php

//run tricara
echo exec("cd /opt/public_html/ && sudo umount tricara",$output, $return_var);
echo exec("sudo sshfs adidas_id@172.16.1.5:/opt/public_html/adidas/shared/var/tricara/ /opt/public_html/tricara -o -p 9004 -o allow_other 2>&1", $output, $return_var);

?>
