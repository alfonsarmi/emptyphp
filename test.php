<style type="text/css" media="screen"> 
<!--
.message
{
	font: normal 13px Arial; 
	border: 1px solid #333; 
	border-bottom: 2px solid #666; 
	border-right: 2px solid #666; 
	background-color: #ffffcc; 
	color: #000; 
	padding: 10px;
}

.message h1
{
	font-size: 18px;
	font-weight: bold;
	padding-bottom: 10px;
}

.message h2
{
	font-size: 14px;
	font-weight: bold;
	padding-bottom: 10px;
}
-->
</style>

<div class="message">
	<h1>Warning</h1>
	<h2><?php echo $this->data->getMessage()?></h2>
	<p>In file <strong><?php echo $this->data->getFile()?></strong> on line <strong><?php echo $this->data->getLine()?></strong></p>
	<p>Stack trace: <?php echo $this->data->getFormattedTrace()?></p>
</div>