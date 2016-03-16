
<?php

	if($type=='edit')
	{
		$data = $user->getAdmin($_GET['id']);
	
	}
	else
	{
		$data = array('id_user'=>'', 'nama'=>'','gambar'=>'', 'username'=>'', 'pass'=>'', 'status'=>'');
		
	}
?>

  			<div class="row">
				<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
		<form class="form-horizontal" role="form" action="#" method="post" enctype="multipart/form-data">			
				<div class="form-group">
					<label for="nama" class="col-sm-3 control-label no-padding-right" for="form-field-1">Nama :</label>	
						<div class="col-sm-9">
							<input type="text" id="form-field-1" placeholder="Masukkan Nama " name="fnama" class="col-xs-10 col-sm-5" value="<?=$data['nama']?>" />
						</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3"></label>
				<?php
				if($type=='edit')
				{
					?>
					<img class="col-sm-3" width="150px" src="../<?=$data['gambar']?>">
				<?php
				}
				?>
				</div>

				<div class="form-group">
									
					<label for="nama" class="col-sm-3 control-label no-padding-right" for="form-field-1">Gambar :</label>	
						<div class="col-sm-4">
							<input type="file" id="id-input-file-1"  name="ffoto" class="col-xs-10 col-sm-5"  />
						</div>
					</div>

				<div class="form-group">
				
					<label for="nama" class="col-sm-3 control-label no-padding-right" for="form-field-1">Username :</label>	
						<div class="col-sm-9">
							<input type="text" id="form-field-1" placeholder="Masukkan username " name="fusername" class="col-xs-10 col-sm-5" value="<?=$data['nama']?>" />
						</div>
				</div>

				<div class="form-group">
					
					<label for="nama" class="col-sm-3 control-label no-padding-right" for="form-field-1">Password :</label>	
						<div class="col-sm-9">
							<input type="text" id="form-field-1" placeholder="Masukkan password" name="fpass" class="col-xs-10 col-sm-5" value="<?=$data['nama']?>" />
						</div>
				</div>	

				<div class="field">
					<input type="hidden" value="<?=$data['id_user']?>" id="Nama" name="fid"  class="login" />
				</div> <!-- /field -->

					<div class="field">
					<input type="hidden" value="<?=$data['gambar']?>" id="Nama" name="gbr"  class="login" />
				</div> <!-- /field -->
			</div> <!-- /login-fields -->
			
				
			<div class="login-actions">
				<div class="col-sm-6">
							
				<span class="login-checkbox ">
				<label class="col-sm-6"></label>
					<input  id="Field" name="Field" type="checkbox" class="field login-checkbox  " value="First Choice" tabindex="4" required />
					<label >Apakah isian anda sudah benar ?.</label>
				</span>
				</div>
				


			
			</div>

										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" name="fdaftar" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
			

		</form>
		</div>
		</div>