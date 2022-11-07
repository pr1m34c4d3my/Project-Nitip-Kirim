
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<div class="container" >
	<form class="row" action="<?php echo base_url('/domestik/domestikAct'); ?>" method="POST" id="formDokestik" accept="application/json">
		<div class="col-lg-3 col-sm-3">
			<div class="form-group">
				<label>From</label>
				<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" id="hiddenCsrf"/>
				<select class="form-control fromDomestik" name="fromDomestik">
					<?php foreach ($data as $key => $value): ?>
						<option value="<?php echo $value['l1_tier_code'].'-'.$value['l2_tier_code'].'-'.$value['provinsi'].', '.$value['kabupaten'].', '.$value['kecamatan'] ?>"><?php echo $value['provinsi'].', '.$value['kabupaten'].', '.$value['kecamatan'] ?></option>
					<?php endforeach ?>
				</select>
			</div>
		</div>
		<div class="col-lg-3 col-sm-3">
			<div class="form-group">
				<label>To</label>
				<select class="form-control toDomestik" name="toDomestik">
					<?php foreach ($data as $key => $value): ?>
						<option value="<?php echo $value['l1_tier_code'].'-'.$value['l2_tier_code'].'-'.$value['provinsi'].', '.$value['kabupaten'].', '.$value['kecamatan'] ?>"><?php echo $value['provinsi'].', '.$value['kabupaten'].', '.$value['kecamatan'] ?></option>
					<?php endforeach ?>
				</select>
			</div>
		</div>
		<div class="col-lg-3 col-sm-3">
			<div class="form-group">
				<label>Weight</label>
				<input type="number" class="form-control" name="weight">
			</div>
		</div>
		<div class="col-lg-3 col-sm-3">
			<div class="form-group">
				<label>Service</label>
				<select type="number" class="form-control" name="service">
					<option value="Standard">Standard</option>
					<option value="Express">Express</option>
					<option value="Sameday">Sameday</option>
					<option value="Nextday">Nextday</option>
				</select>
			</div>
		</div>
		<div style="margin-left:2%;">
			<button class="btn btn-primary" style="margin-bottom:40px;" type="submit">Submit</button>
		</div>
	</form>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>From</th>
					<th>To</th>
					<th>Weight</th>
					<th>Service</th>
					<th>Fee</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td id="from"></td>
					<td id="to"></td>
					<td id="weight"></td>
					<td id="service"></td>
					<td id="fee"></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
	    $('.fromDomestik').select2();
	    $('.toDomestik').select2();

	    $("#formDokestik").submit(function(e) {

		    e.preventDefault(); // avoid to execute the actual submit of the form.

		    var form = $(this);
		    var actionUrl = form.attr('action');
		    
		    $.ajax({
		        type: "POST",
		        url: actionUrl,
		        data: form.serialize(), // serializes the form's elements.
		        success: function(data)
		        {
		        	var objectData = JSON.parse(data);
		        	$('#from').text(objectData.fromLabel);
		        	$('#to').text(objectData.toLabel);
		        	$('#weight').text(objectData.weight+' kg');
		        	$('#service').text(objectData.service);
		        	$('#fee').text(objectData.total_fee);
		        	$('#hiddenCsrf').attr('name',objectData.namecrsf).val(objectData.hashcrsf);
		        }
		    });
		    
		});

	});	
</script>