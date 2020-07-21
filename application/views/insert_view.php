<html>
<head>
<title>Insert Data</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>

<link href="<?php echo base_url('assets/css/form.css');?>" rel="stylesheet">

</head>
<body>

<div id="container">
<?php echo form_open('insert_ctrl'); ?>
<h1>Insert Announcements</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<?php echo form_label('Report Type :'); ?> <?php echo form_error('dtype'); ?><br />
<?php echo form_input(array('id' => 'dtype', 'name' => 'dtype')); ?><br />
<?php echo form_label('Title :'); ?> <?php echo form_error('dtitle'); ?><br />

<?php echo form_input(array('id' => 'dtitle', 'name' => 'dtitle')); ?><br />

<?php echo form_label('Content :'); ?> <?php echo form_error('dcontent'); ?><br />
<?php echo form_textarea(array('id' => 'dcontent', 'name' => 'dcontent')); ?><br />

<?php echo form_label('Slug :'); ?> <?php echo form_error('dslug'); ?><br />
<?php echo form_input(array('id' => 'dslug', 'name' => 'dslug', 'placeholder' => 'Slug')); ?><br />


<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
</div>
</body>
</html>