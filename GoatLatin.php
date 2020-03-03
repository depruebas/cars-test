<?php 

	$string = explode( " ", $argv[1]);


	$vocals = array ( 'a', 'e', 'i', 'o', 'u');
	$end = 'ma';

	$return = "";
	$i = 1;
	foreach ( $string as $value) 
	{
		//print_r ( substr( $value, 0, 1) . "\n");

		if ( in_array( substr( $value, 0, 1), $vocals))
		{
			$value .= $end;
		}
		else
		{
			$primera = substr( $value, 0, 1);
			$value = substr( $value, 1, strlen( $value)) . $primera . $end;
		}

		for ( $j = 0; $j < $i; $j++)
		{
			$value .= 'a';
		}
		
		$i++;

		$return .= $value . " ";

	}

	print_r ( print_r( $string) . "\n" . $return . "\n" . "END\n");

