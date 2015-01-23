
<h3><?php echo __('Actions'); ?></h3>
<ul class="nav nav-sidebar">
    <li><?php echo $this->Html->link(__('List NEWS'), array('controller' => 'news', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New News'), array('action' => 'add')); ?></li>
    <li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Categories'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
</ul>