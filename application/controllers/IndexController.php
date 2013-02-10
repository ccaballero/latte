<?php

class IndexController extends Zend_Controller_Action
{
    public function indexAction() {
        $rss_url = 'http://latte.local/rss2.php';
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
