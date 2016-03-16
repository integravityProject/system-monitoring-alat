												
															 	

															 	<form class="form-horizontal form-merk" action="<?=base_url()?>pengaduan/updatepengaduan/<?=$data[0]->id?>"   role="form" method="post"  novalidate>
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Pengaduan  </label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="id_jenis" name="id_jenis" required>
																			
																		

																			<?php if($jen_peng):
																				foreach ($jen_peng as $val):?>
																				<?php if($datau[0]->id_jenis==$val->id_jenis ){ $selected= "selected";}else{ $selected="";} ?>
																			<option value="<?=$val->id_jenis?>" <?=$selected?> ><?=$val->pengaduan?></option>
																			<?php endforeach;?>

												                            <?php endif;?>
												                       
																		</select>
																	</div>
																</div>
																<div class="space-4"></div>	
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Pengadu</label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" onclick="jabatan()" id="pengadu" name="pengadu" required>
																			
																		 <?php  if($datau[0]->id_petugas!="masy"){ $selected= "selected";$selecte="";$pil=1;}else { $selecte= "selected";$selected="";$pil=2;} ?>

																			<option value=1 <?=$selected?>>Petugas</option>
																			<option value=2 <?=$selecte?>>Masyarakat</option>
																			 
																		</select>
																	</div>
																</div>

																<?php 
																	if($pil==1){ ?>
																		<div  id="jabat" class="jabat">
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Jabatan</label>
																	<div class="col-sm-6" data-role="select">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="jab" name="jab" data-placeholder="Pilih Jabatan" required>
																			<option value=""> -- Pilih Jabatan -- </option>
																			<?php if($jabatan):
																				foreach ($jabatan as $val):?>
																				<?php if($val->id_jabatan==$datau[0]->id_jabatan){ $selected= "selected";}else{ $selected="";} ?>

																			<option value="<?=$val->id_jabatan?>" <?=$selected?>><?=$val->jabatan_name?></option>
																			<?php endforeach;?>
												                            <?php endif;?>
																		</select>
																	</div>
																</div>
																

																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nama</label>
																	<div class="col-sm-6" data-role="select">
																		<select id="id_petugas" name="id_petugas" class="form-control" required >
										                              <option value="">-- Pilih Nama--</option>
										                              <?php if($view):
																				foreach ($view as $val):?>
																				<?php if($val->id_user==$datau[0]->id_user){ $selected= "selected";}else{ $selected="";} ?>

																			<option value="<?=$val->id_user?>" <?=$selected?>><?=$val->nama_lengkap?></option>
																			<?php endforeach;?>
												                            <?php endif;?>
										                              </select>	
																	</div>
																</div>
																</div>
																	<?php }
																?>

																<div style="display:none" id="jabat" class="jabat">
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Jabatan</label>
																	<div class="col-sm-6" data-role="select">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="jab" name="jab" data-placeholder="Pilih Jabatan" required>
																			<option value=""> -- Pilih Jabatan -- </option>
																			<?php if($jabatan):
																				foreach ($jabatan as $val):?>
																				<?php if($val->id_jabatan==$datau[0]->id_jabatan){ $selected= "selected";}else{ $selected="";} ?>

																			<option value="<?=$val->id_jabatan?>" <?=$selected?>><?=$val->jabatan_name?></option>
																			<?php endforeach;?>
												                            <?php endif;?>
																		</select>
																	</div>
																</div>
																

																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nama</label>
																	<div class="col-sm-6" data-role="select">
																		<select id="id_petugas" name="id_petugas" class="form-control" required >
										                              <option value="">-- Pilih Nama--</option>
										                              <?php if($view):
																				foreach ($view as $val):?>
																				<?php if($val->id_user==$datau[0]->id_user){ $selected= "selected";}else{ $selected="";} ?>

																			<option value="<?=$val->id_user?>" <?=$selected?>><?=$val->nama_lengkap?></option>
																			<?php endforeach;?>
												                            <?php endif;?>
										                              </select>	
																	</div>
																</div>
																</div>

																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Kode Unit Parkir</label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="kode_unit_parkir" name="kode_unit_parkir" data-placeholder="Pilih Jabatan" required>
																			<option value=""> -- Pilih Kode Unit Parkir -- </option>
																			<?php if($alat):
																				foreach ($alat as $val):?>
																				<?php if($val->id_alat==$datau[0]->kode_unit_parkir){ $selected= "selected";}else{ $selected="";} ?>
																			<option value="<?=$val->id_alat?>" <?=$selected?>><?=$val->id_alat?></option>
																			<?php endforeach;?>
												                            <?php endif;?>
																		</select>
																	</div>
																</div>


																

															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1">Tanggal</label>
																	<div class="col-sm-6 col-xs-6 ">
																		<div class="input-group">
																			<input class="form-control date-picker" id="tgl_aduan" name="tgl_aduan" type="text" value="<?php echo date('Y-m-d')?>" data-date-format="yyyy-mm-dd"  required/>
																			<span class="input-group-addon">
																				<i class="fa fa-calendar bigger-110"></i>
																			</span>
																		</div>
																	</div>
																</div>

																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Keterangan </label>
																	<div class="col-sm-6">
																		<textarea class="form-control" id="keterangan" name="keterangan" rows="5" placeholder="Default Text" required><?=$datau[0]->keterangan?></textarea>
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
																	<div class="col-sm-6">
																		<button class="btn btn-info" type="submit" id="save" >
																			<i class="ace-icon fa fa-check bigger-110"></i>
																			Edit
																		</button>
																		<a href="<?php base_url();?>pengaduan" class="btn btn-danger"  id="cancel" >
																			<i class="ace-icon fa fa-check bigger-110"></i>
																			Cancel
																		</a>
																	</div>
																</div>
															 	
															 	</form>
											



							


								<script type="text/javascript">
									var $path_assets = "dist";//this will be used in gritter alerts containing images
								</script>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<script language="javascript">




	function jabatan(){
		if($('#pengadu').val()==1){
			$('.jabat').show();

		    $("select[name=jab]").change(function(){
		    var x = $("select[name=id_petugas]");
		    if($(this).val() == "") {
		      x.html("<option>-- Pilih Nama --</option>");
		    }
		    else {
		                z = "<option>-- Pilih Nama --</option>";
		                $.ajax({
		                  url      : "<?php echo base_url();?>index.php/pengaduan/getnama",
		                  dataType : "json",
		                  type     : "POST",
		                  data     : { "datanama" : $(this).val() },
		                  success  : function(data){
		                    console.log(data[0].nama_lengkap);
		                    var z = "<option value=''>-- Pilih Nama --</option>";
		                    for(var i = 0; i<data.length; i++){
		                      z += '<option value='+data[i].id_user+'>'+data[i].nama_lengkap+'</option>';
		                    }
		                    x.html(z);
		                  }
		                });
		          }
		    });
		

		}else{
			$('.jabat').hide();
		
		
		}
	}


	

$(document).ready(function() {




	$("select[name=jabat]").change(function(){
		    var x = $("select[name=teknisi]");
		    if($(this).val() == "") {
		      x.html("<option>-- Pilih Nama --</option>");
		    }
		    else {
		                z = "<option>-- Pilih Nama --</option>";
		                $.ajax({
		                  url      : "<?php echo base_url();?>index.php/pengaduan/getnama",
		                  dataType : "json",
		                  type     : "POST",
		                  data     : { "datanama" : $(this).val() },
		                  success  : function(data){
		                    console.log(data[0].nama_lengkap);
		                    var z = "<option value=''>-- Pilih Nama --</option>";
		                    for(var i = 0; i<data.length; i++){
		                      z += '<option value='+data[i].id_user+'>'+data[i].nama_lengkap+'</option>';
		                    }
		                    x.html(z);
		                  }
		                });

		          }
		    });
    
});


//datepicker plugin
				//link
			

// $('.form-merk').submit(function(event){    
//     event.preventDefault();
//     $(this).find("button[type='submit']").prop('disabled',true);
//     // POST DATA
//     $.ajax({
//       type: "POST",
//       url: "<?php echo base_url('index.php/pengaduan/insertpengaduan')?>",
//       dataType:'json',
//       data: {
//         pengadu : $("#pengadu").val(),
//         id_jenis : $("#id_jenis").val(),
//         id_petugas : $("#id_petugas").val(),
//         kode_unit_parkir : $("#kode_unit_parkir").val(),
//         tgl_aduan : $("#tgl_aduan").val(),
//         keterangan : $("#keterangan").val()
//       }
//     })

//     .success(function(data)
//     {
//      // $.growl.notice({ title: 'Sukses', message: data.msg});
//      window.location.replace("<?= site_url('pengaduan')?>");       
//     });  
//     location.reload(false);
//   });



</script>