<?php
	header("Content-type:text/event-stream"); 
	ob_start();
	ob_flush();
	flush();
	
	
	$count = 1;
	$oldtime = filemtime("names.txt");
	while(true)
	{
		clearstatcache();		
		$newtime = filemtime("names.txt");
		if($newtime > $oldtime)
		// if($newtime > $oldtime)
		{
			clearstatcache();
			// echo $oldtime;
			// echo $newtime;
			echo "event:myevent\n";
			echo "data:abc\n";
			echo "retry:10000\n\n";
			ob_flush();
			flush();
			$count++;
			$oldtime = $newtime;
		}
		sleep(3);
	}
?>