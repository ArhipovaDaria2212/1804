<?php
	use \Core\Route;
	
	return [
		new Route('/user/:id/:key/', 'user', 'info'), 
		new Route('/user/:id/', 'user', 'show'),
	];
?>
