<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| View Names & Composers
	|--------------------------------------------------------------------------
	|
	| Named views give you beautiful syntax when working with your views.
	|
	| Here's how to define a named view:
	|
	|		'home.index' => array('name' => 'home')
	|
	| Now, you can create an instance of that view using the very expressive
	| View::of dynamic method. Take a look at this example:
	|
	|		return View::of_home();
	|
	| View composers provide a convenient way to add common elements to a view
	| each time it is created. For example, you may wish to bind a header and
	| footer partial each time the view is created.
	|
	| The composer will receive an instance of the view being created, and is
	| free to modify the view however you wish. Here is how to define one:
	|
	|		'home.index' => function($view)
	|		{
	|			//
	|		}
	|
	| Of course, you may define a view name and a composer for a single view:
	|
	|		'home.index' => array('name' => 'home', function($view)
	|		{
	|			//
	|		})	
	|
	*/

	'home.index' => array('name' => 'home', function($view)
	{
    // This composer is called for the "home.index" view.
    // JS Assets
    Asset::add('jquery', 'js/jquery.min.js');
    Asset::add('bootstrap-alerts', 'js/bootstrap-alerts.js');
    Asset::add('bootstrap-buttons', 'js/bootstrap-buttons.js');
    Asset::add('bootstrap-dropdown', 'js/bootstrap-dropdown.js');
    Asset::add('bootstrap-modal', 'js/bootstrap-modal.js');
    Asset::add('bootstrap-popover', 'js/bootstrap-popover.js');
    Asset::add('bootstrap-scrollspy', 'js/bootstrap-scrollspy.js');
    Asset::add('bootstrap-tabs', 'js/bootstrap-tabs.js');
    Asset::add('bootstrap-twipsy', 'js/bootstrap-twipsy.js');
    Asset::add('app', 'js/app.js');

    // CSS Assets
    Asset::add('bootstrap', 'css/bootstrap.min.css');
    Asset::add('app', 'css/app.css');
    
    //Partials
    $view->nest('content', 'partials.content');

    return $view;
	}),

);
