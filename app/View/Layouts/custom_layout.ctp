<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title; ?>
	</title>
	
<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<body style="background:#ECF8E0;width:800px;margin:0 auto;">
	<div id="container">
		<div id="header" style="background:#A9BCF5;height:80px;
								margin-bottom:5px;text-align:center;">
			<h3>Company Name</h3>
		</div>
		<div id="content" style="background:white;margin-bottom:5px;">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer" style="background:#CECEF6;height:40px;
								margin-bottom:5px;text-align:center">
			<p>&copy; Company Name</p>
		</div>
	</div>
</body>
</html>
