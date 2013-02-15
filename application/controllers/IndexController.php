<?php

class IndexController extends Zend_Controller_Action
{
    public function indexAction() {
        
    }
    
    public function channelAction() {
        $label = $this->getRequest()->getParam('channel');
        
        $db_channels = new Channels();
        $channel = $db_channels->fetchRow(
            $db_channels->select()->where('label = ?', $label)
        );
        
        $rss_url = $channel->link;
        $rss = Zend_Feed::import($rss_url);

        $channel = array(
            'title'       => $rss->title(),
            'description' => $rss->description(),
            'link'        => $rss->link(),
            'items'       => array(),
        );

        foreach ($rss as $item) {
            $channel['items'][] = array(
                'title'       => $item->title(),
                'link'        => $item->link(),
                'description' => $item->description()
            );
        }

        $this->view->channel = $channel;
    }
}
