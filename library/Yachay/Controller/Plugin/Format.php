<?php

class Yachay_Controller_Plugin_Format extends Zend_Controller_Plugin_Abstract
{
    public function routeShutdown(Zend_Controller_Request_Abstract $request) {
        $front_controller = Zend_Controller_Front::getInstance();
        $route = $front_controller->getRouter()->getCurrentRouteName();

        // render the placeholders
        $view = Zend_Controller_Action_HelperBroker::getExistingHelper('ViewRenderer')->view;
        $view->route = $route;
        
        $view->addScriptPath(APPLICATION_PATH . '/layouts/placeholders');
        $view->render('channels.php');
    }
}
