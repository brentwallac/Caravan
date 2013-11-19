<?php echo validation_errors(); ?>

<?php echo form_open('main/createName'); ?>
<?php 
$moxy = rand(1, 10); 
$passion = rand(1, 10); 
$style = rand(1, 10);  
$gumption = rand(1, 10); ?>  



<container>
	<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"><h1><?php echo "Caravan"; ?></h1></div>
	</div>
	<div class="row">
		<div class="col-md-4"></div> 
		
				<table border = "1">

				<th>Attributes</th><th>Points</th>
				<tr>
				<td>Moxy</td>
				<td><?php echo $moxy ?></td>
				
				</tr>
				<tr><td>Passion</td>
				<td><?php echo $passion; ?></td>
				</tr>
				<tr><td>Style</td>
				<td><?php echo $style; ?></td>
				</tr>
				<tr><td>Gumption</td>
				<td><span><?php echo $gumption; ?></span></td>
				</tr>
				</table>
				<div class="col-md-3"></div>
				<div class="col-md-4">
				<form>
					<h5>Name</h5>
						<input type="text" name="name" value="" size="50" />
						<div>
						<div class="col-md-4"></div>

						<input type="submit" value="Submit" />
						<input type="hidden" name="moxy" value=<?php echo $moxy; ?> />
						<input type="hidden" name="passion" value=<?php echo $passion; ?> />
						<input type="hidden" name="style" value=<?php echo $style; ?> />
						<input type="hidden" name="gumption" value=<?php echo $gumption; ?> />

						</div>

				</form>
				</div>

	</div>

		<div class="row">
			
		</div>


</container>