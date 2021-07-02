<div class="Container">
    <div class="">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Upload Pages</h1>
                </div>
                <div class="card-body">
					<form id="page_upload" name ="page_upload" method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/pages/store');?>">
						<?php if($error){echo $error;}?>
						<?php echo form_error('page_files[]'); ?>
						<div class="form-group row">
							<label for="file" class="col-md-4 col-form-label text-md-right text-right">File</label>
							<div class="col-md-6">
								<input multiple id="page_files" type="file" class="form-control" name="page_files[]" required />
							</div>
						</div>	
						<div class="form-group row offset-md-4 text-center">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>