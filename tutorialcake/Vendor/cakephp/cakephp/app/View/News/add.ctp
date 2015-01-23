<div class="news form">
    <?php echo $this->Form->create('News'); ?>
    <fieldset>
        <legend><?php echo __('Add News'); ?></legend>
        <?php
        echo $this->Form->input('title');
        echo $this->Form->input('descrioption');
        echo $this->Form->input('category_id');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>