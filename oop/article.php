<?php 
$ch = curl_init();	
		 curl_setopt($ch, CURLOPT_URL,"http://localhost/oop/index.html");
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		 $ketqua=curl_exec($ch);
		 $patt="/abc/";
		 preg_match_all($patt, $ketqua, $data);

		 print_r($data) ;
		 curl_close($ch);
 ?>