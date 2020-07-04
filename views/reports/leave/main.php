<?php 
	if(!hasAccess(0)){
		echo '<script> window.location = "404"; </script>';
		exit();
	}
	$page = 'page';
?>
<div class="card shadow mb-4">
	<div class="card-header py-3 border-bottom-danger">
		<div class="row">
			<h3 class="m-0 ml-3 font-weight-bold text-gray-600">Leave Report</h3>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<!--Employee Summary-->
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane reports-tab fade show active" id="reports" role="tabpanel" aria-labelledby="reports-tab">
						<?php include_once("$page/_reports.php"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<input type="hidden" id="ofconly" name="ofconly" value="<?php echo officeOnly(); ?>" readonly disabled />
<?php
	$output = '';
	if(isset($accessitems)){
		foreach ($accessitems as $item) {
			if(isset($item['foreignkey']))
				if(strpos($item['foreignkey'], 'SO') !== FALSE) 
					$output .= $item['foreignkey'] .',';
		}
		$output = rtrim($output, ',');
	}
?>
<input type="hidden" id="viewofc" name="viewofc" value="<?php echo $output; unset($output); ?>" disabled readonly/>
<?php unset($page); ?>

<?php //include_once('views/reportsgenerator/eesummaryModal.php');?>
<?php //include_once('views/reportsgenerator/eesummaryModal1.php');?>
<?php //include_once('views/reportsgenerator/eesummaryModal2.php');?>
<?php //include_once('views/reportsgenerator/eetimesheetmodal.php');?>
<?php //include_once('views/reportsgenerator/eetimesheetmodal1.php');?>
<?php //include_once('views/reportsgenerator/eetimesheetmodal2.php');?>