<?php

$this->placeholder('channels')->captureStart();

$db_channels = new Channels();
$channels = $db_channels->fetchAll();
        
echo '<ul>';
foreach ($channels as $channel) {
    echo '<li><a href="' . $this->url(array('channel' => $channel->label), 'channel_view') . '">' . $channel->label . '</a></li>';
}
echo '</ul>';

$this->placeholder('channels')->captureEnd();
