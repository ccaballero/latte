<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
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
