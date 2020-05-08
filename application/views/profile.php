<?php $id = $this->uri->segment(3);
	foreach ($profile as $data) { ?>
<section class="banner-area2">
	<div class="container">
		<br><br><br>
		<form action="<?php echo base_url('home/updateProfile/');?><?php echo $id;?>" method="post" enctype="multipart/form-data">
		<div class="row fullscreen align-items-center justify-content-between">
			<div class="col-lg-12 banner-content">
				<div class="form-group">
					<img src="<?php echo base_url('upload/');?><?php echo $data['foto'];?>" 
							style="display: block;
									margin-top: 1%;
									margin-left: 1.5%;
									margin-bottom: 1rem;
									width: 35%;">
					<!--<input type="file" class="form-control" name="file" 
						style="display: block;
								margin-top: 1%;
								margin-left: 1.5%;
								margin-bottom: 1rem;
								width: 35%;">-->
					<input name="pic" type="file"
						style="display: block;
							margin-top: 1%;
							margin-left: 1.5%;
							margin-bottom: 1rem;
							width: 35%;" >
				</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" class="form-control" name="name" placeholder="nama" value="<?php echo $data['namaCust'];?>" required data-error="Please enter your name">
						<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="email" class="form-control" name="email" placeholder="email" value="<?php echo $data['email'];?>" required data-error="Please enter your email">
						<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" class="form-control" name="alamat" placeholder="alamat" value="<?php echo $data['alamatCust'];?>" required data-error="Please enter your address">
						<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" class="form-control" name="bank" placeholder="bank customer" value="<?php echo $data['bankCust'];?>" required data-error="Please enter your bank">
						<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" class="form-control" name="rekening" placeholder="rekening" value="<?php echo $data['rekening'];?>" required data-error="Please enter your rekening">
						<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" class="form-control" name="phone" placeholder="no. handphone" value="<?php echo $data['noHP'];?>" required data-error="Please enter your phone">
						<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="col-md-6"></div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="password" class="form-control" name="password" placeholder="password" required data-error="Please enter your password">
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="password" class="form-control" name="repassword" placeholder="Re-Password" required data-error="Please enter your password">
						<div class="help-block with-errors"></div>
				</div>
			</div>
			<input type="submit" class="primary-btn text-uppercase" 
			style="margin-left: 1.5%;
				   border-radius: 4px; 
				   background-color:pink; 
				   border: none;
				   color: #FFFFFF; 
				   text-align: center; 
				   font-size: 15px;
				   padding: 15px; 
				   width: 150px; 
				   transition: all 0.5s;
				   cursor: pointer;
				   margin: 5px;" 
				   value="Save Data">
				</div>
			</div>
		</form>
	</div>
<?php } ?>
</section>