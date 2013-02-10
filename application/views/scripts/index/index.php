<h1><?php echo $this->channel['title'] ?></h1>
<p class="description"><?php echo $this->channel['description'] ?></p>    

<div id="items">
<?php foreach ($this->channel['items'] as $item) { ?>
    <h2><a href="<?php echo $item['link'] ?>"><?php echo $item['title'] ?></a></h2>
    <p><?php echo $item['description'] ?></p>
<?php } ?>
</div>
