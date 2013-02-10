<?php

include_once('__header.php');

class Shell_Latte extends Yachay_Console
{
    protected $specific_options = array(
        'index|i'       => 'channels indexation for posts.',
    );

    public function index() {
        echo 'asdf';
        return true;
    }
}

$command = new Shell_Latte();
$command->__setup()->__run();
