<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $this->fetch('title'); ?>
    </title>
    <?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->css('bootstrap');
                echo $this->Html->css('bootstrap.min');
                echo $this->Html->css('dashboard');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		

		echo $this->Html->script('jquery-2.1.1');
		echo $this->Html->script('bootstrap');
		
	?>
</head>