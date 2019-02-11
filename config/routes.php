<?php
use Cake\Core\Plugin;
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\Router;

Router::defaultRouteClass(DashedRoute::class);

// New route we're adding for our tagged action.
// The trailing `*` tells CakePHP that this action has
// passed parameters.
/*Router::scope(
    '/articles',
    ['controller' => 'Articles'],
    function ($routes) {
        $routes->connect('/tagged/*', ['action' => 'tags']);
    }
);*/

Router::scope('/', function ($routes) {
    // Connect the default home and /pages/* routes.
    $routes->connect('/', [
        'controller' => 'Pages',
        'action' => 'display', 'home'
    ]);
    $routes->connect('/pages/*', [
        'controller' => 'Pages',
        'action' => 'display'
    ]);

    // Connect the conventions based default routes.
    $routes->fallbacks();
});

Router::prefix('admin', function ($routes) {
    // Routes connected here are prefixed with '/admin' and
    // have the 'param' routing key set.
    //$routes->connect('/:controller');
	$routes->fallbacks(DashedRoute::class);
	// Connect the default home and /pages/* routes.
    $routes->connect('/', [
        'controller' => 'AdminPages',
        'action' => 'dashboard'
    ]);
    /*$routes->connect('/pages/*', [
        'controller' => 'Pages',
        'action' => 'display'
    ]);
	/*$routes->connect('/articles/*', [
        'controller' => 'Articles',
        'action' => 'index'
    ]);*/
	//$routes->fallbacks();
});

Plugin::routes();