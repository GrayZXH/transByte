<?php

	function transByte($size){
		$size=$size;
		$arr=array('B','KB','MB','GB','TB','PB','EB','ZB');
		for ($i=0; $size>=1024&&$i<7 ; $i++) { 
			$size=$size/1024;
		}
		$res=$size.$arr[$i];
		return $res;
		}

//forexample
		echo transByte(1024);

?>