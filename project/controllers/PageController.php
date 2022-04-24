<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class PageController extends 
		Controller 
	{
        public function act()
		{
			// Зададим тайтл:
			$this->title = 'Действие act контроллера page';
			return $this->render('page/act', [
				'header' => 'список юзеров',
				'users'  => ['user1', 'user2', 'user3'],
			]);
		}
    }
?>