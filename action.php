
<?php
	foo($_POST['N']);

	function foo($arg1)
	{
		$postnumber =0;
		for ($var = 1; $arg1 != $postnumber; $var++)
		{ 
			 $length = (int) log10($var)+1;
			if ((($var % $length) == 0))
			{
				echo $var;
				echo ',';
				$postnumber++;
			}
		}
	}

?>