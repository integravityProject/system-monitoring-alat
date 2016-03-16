
<?php

	if($type=='edit')
	{
		$data = $pengurus->getpengurus($_GET['id']);
		$head="Edit pengurus";
	}
	else
	{
		$data = array('id_pengurus'=>'', 'nama'=>'','nim'=>'','foto'=>'', 'jabatan'=>'', 'angkatan'=>'');
		
		$head="pengurus";	
	}
?>
  
	<form class="form-horizontal" role="form" action="#" method="post" enctype="multipart/form-data">	
		
	
			

				<div class="form-group">
					<label for="nama" class="col-sm-3 control-label no-padding-right" for="form-field-1">Nama :</label>	
						<div class="col-sm-9">
						<input type="text" value="<?=$data['nama']?>" id="Nama" name="fnama" placeholder="Masukkan Nama anda" class="login col-xs-10 col-sm-5" required/>
						</div>
				</div> <!-- /field -->


				<div class="form-group">
					<label for="nama" class="col-sm-3 control-label no-padding-right" for="form-field-1">Nim :</label>	
						<div class="col-sm-9">
						<input type="text" value="<?=$data['nim']?>" id="Nama" name="fnim" placeholder="Masukkan Nama anda" class="login col-xs-10 col-sm-5" required/>
						</div>
				</div> <!-- /field -->

					<div class="form-group">
					<label class="col-sm-3"></label>
				<?php
				if($type=='edit')
				{
					?>
					<img class="col-sm-3" width="150px" src="../<?=$data['foto']?>">
				<?php
				}
				?>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-3 control-label no-padding-right" for="form-field-1">Foto :</label>	
						<div class="col-sm-4">
					<input type="file"  id="id-input-file-1" name="ffoto" value="" class="login col-xs- col-sm-5"/>
					</div>
				</div> <!-- /field -->
				
				<div class="form-group">
					<label for="nama" class="col-sm-3 control-label no-padding-right" for="form-field-1">Jabatan :</label>	
						<div class="col-sm-9">
							<select name="fjab"  class="chosen-select form-control" data-placeholder="Choose a Category . ..">
																<?php 
																$jabatt=array('Ketua Umum','Sekretaris Umum','Bendahara Umum','Ketua Bidang IPTEK','Ketua Bidang LITBANG','Ketua Bidang INFOKOM','Sekretaris Bidang IPTEK','Sekretaris Bidang LITBANG','Sekretaris Bidang INFOKOM','Ketua Departemen Software','Ketua Departemen Hardware','Ketua Departemen Kajian Strategi','Ketua Departemen Pengkaderan','Ketua Departemen Media Informasi','Ketua Departemen Hubungan Masyarakat','Anggota Departemen Software','Anggota Departemen Hardware','Anggota Departemen Kajian Strategi','Anggota Departemen Pengkaderan','Anggota Departemen Media Informasi','Anggota Departemen Hubungan Masyarakat');
																foreach ($jabatt as $value) {
																?><option <?php if($type=="edit"&&$data['jabatan']==$value){echo "selected='selected'";}?> value="<?php echo $value;?>" ><?php echo $value;?></option>
																<?php }?>
							</select>
					</div>
				</div> <!-- /field -->
				
				<div class="form-group">
					<label for="nama" class="col-sm-3 control-label no-padding-right" for="form-field-1">Angkatan :</label>	
						<div class="col-sm-9">
							<select name="fang"  class="chosen-select form-control" data-placeholder="Choose a Category . ..">
																<?php 
																$jabatt=array('2012 / 2013','2013 / 2014','2014 / 2015','2015 / 2016','2016 / 2017','2017 / 2018','2018 / 2019','2020 / 2021');
																foreach ($jabatt as $value) {
																?><option <?php if($type=="edit"&&$data['angkatan']==$value){echo "selected='selected'";}?> value="<?php echo $value;?>" ><?php echo $value;?></option>
																<?php }?>
							</select>
					</div>
				</div> <!-- /field -->
				<div class="field">
					<input type="hidden" value="<?=$data['id_pengurus']?>" id="Nama" name="fid"  class="login" />
				</div> <!-- /field -->

					<div class="field">
					<input type="hidden" value="<?=$data['foto']?>" id="Nama" name="gbr"  class="login" />
				</div> <!-- /field -->
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				<label for="nama" class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>	
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" required />
					<label class="choice" for="Field">Apakah sudah benar apa yang anda inputkan ??</label>
				</span>
									
			<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" name="fpengurus" type="submit">
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
		


