<?php

include_once('__header.php');

class Shell_Latte extends Yachay_Console
{
    protected $specific_options = array(
        'index|i'       => 'channels indexation for posts.',
    );

    public function index() {
        try {
            
            return true;
        } catch (Exception $e) {
            $this->messages[] = $e->getMessage();
        }
        
        $this->__dump();
        return false;
    }
}

$command = new Shell_Latte();
$command->__setup()->__run();
