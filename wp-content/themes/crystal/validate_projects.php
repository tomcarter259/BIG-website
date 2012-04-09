<?php 
	// check date is valid
	$year = $columns['year']['value'];
	if (!empty($year))
	{
		if (!is_numeric($year) || (strlen($year) != 4))
		{
			die('<e>Error: Incorrect Year of Completion. Please change to format YYYY or leave blank.');
		}
	}
?>
