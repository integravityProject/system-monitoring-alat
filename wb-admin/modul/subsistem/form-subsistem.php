
<?php

	if($type=='edit')
	{
		$data = $subsistem->getsubsistem($_GET['id']);
	
	}
	else
	{
		$data = array('id_subsistem'=>'', 'nama'=>'','gambar'=>'', 'link'=>'', 'status'=>'');
		
	
	}
?>

  
	<form class="form-horizontal" role="form" action="#" method="post" enctype="multipart/form-data">	
		
	
			

				<div class="form-group">
					<label for="nama" class="col-sm-3 control-label no-padding-right" for="form-field-1">Judul :</label>	
						<div class="col-sm-9">
						<input type="text" value="<?=$data['nama']?>" id="Nama" name="fjudul" placeholder="Masukkan Nama anda" class="login col-xs-10 col-sm-5" required/>
						</div>
				</div> <!-- /field -->

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
					<input type="file"  id="id-input-file-1" name="ffoto" value="" class="login col-xs- col-sm-5"/>
					</div>
				</div> <!-- /field -->
				
				<div class="form-group">
					<label for="nama" class="col-sm-3 control-label no-padding-right" for="form-field-1">Link :</label>	
						<div class="col-sm-9">
					<input type="text" value="<?=$data['link']?>" id="Username" name="fket" value="" placeholder="Masukkan Link" class="login col-xs-10 col-sm-5" required/>
					</div>
				</div> <!-- /field -->
				
				<div class="field">
					<input type="hidden" value="<?=$data['id_subsistem']?>" id="Nama" name="fid"  class="login" />
				</div> <!-- /field -->

					<div class="field">
					<input type="hidden" value="<?=$data['gambar']?>" id="Nama" name="gbr"  class="login" />
				</div> <!-- /field -->
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				<label for="nama" class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>	
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" required />
					<label class="choice" for="Field">Apakah sudah benar apa yang anda inputkan ??</label>
				</span>
									
			<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" name="fsubsistem" type="submit">
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
		


