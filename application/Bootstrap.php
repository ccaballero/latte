<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAutoload() {
        $loader = Zend_Loader_Autoloader::getInstance();

        $loader->pushAutoloader(new Yachay_Loader());
        return $loader;
    }

    protected function _initRouter() {
        $this->bootstrap('frontController');
        
        $routes = array (
            // frontpage module
            'frontpage' => array('', array('controller' => 'index', 'action' => 'index',)),
            'channel_view' => array(':channel', array('controller' => 'index', 'action' => 'channel')),
        );

        $front = Zend_Controller_Front::getInstance();
        $router = $front->getRouter();
        foreach ($routes as $key => $route) {
            $router->addRoute($key, new Zend_Controller_Router_Route($route[0], $route[1]));
        }
    }

    protected function _initView() {
        $this->bootstrap('frontController');

        $view = new Zend_View();

        // Use the php suffix in views
        $renderer = new Zend_Controller_Action_Helper_ViewRenderer();
        $renderer->setView($view)
                 ->setViewSuffix('php');

        Zend_Controller_Action_HelperBroker::addHelper($renderer);

        return $view;
    }
}
