<?php
echo $this->Form->create('Page');

echo $this->Form->inputs(array('title', 'body'));

echo $this->Form->end('Create Page');
