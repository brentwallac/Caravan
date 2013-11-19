
<?php echo "createName"; ?>

<?php echo validation_errors(); ?>

<?php echo form_open('main/createName'); ?>
<form>
<h5>Name</h5>
<input type="text" name="name" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>