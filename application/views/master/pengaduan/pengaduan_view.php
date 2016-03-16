
<div class="main-content" style="margin-top:6em;">
				<div class="main-content-nner">
					<div class="page-content ">
						<div class="row" >
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-sm-12">
										<div class="tabbable">
											<ul class="nav nav-tabs" id="myTab">
												<li>
													<a href="<?php echo base_url();?>">
														<i class="green ace-icon fa fa-home bigger-120"></i>
														Beranda											
													</a>
												</li>

												<li>
													<a href="<?php echo base_url();?>profile">
														<i class="green ace-icon fa fa-user bigger-120"></i>
														Profil
													</a>
												</li>

												
											</ul>
											<div class="tab-content" >
											<center><h2><?=$title?></h2></center></br>
												<div id="home" class="tab-pane fade in active">
	
														<div class="div-mark">
															 	<form class="form-horizontal form-merk" action="<?=base_url()?>pengaduan/insertpengaduan"  role="form" method="post"  novalidate>
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Pengaduan </label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="id_jenis" name="id_jenis" required>
																			<option value=""> -- Pilih Pengaduan -- </option>
																			<?php if($jen_peng):
																				foreach ($jen_peng as $val):?>
																			<option value="<?=$val->id_jenis?>"><?=$val->pengaduan?></option>
																			<?php endforeach;?>
												                            <?php endif;?>
																		</select>
																	</div>
																</div>
																<div class="space-4"></div>	
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Pengadu</label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" onmouseup="jabatan()" id="pengadu" name="pengadu" required>
																			<option value=""> -- Pilih Pengadu -- </option>
																			<option value=1>Petugas</option>
																			<option value=2>Masyarakat</option>
																			
																		</select>
																	</div>
																</div>

																<div style="display:none" id="jabat" class="jabat">
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Jabatan</label>
																	<div class="col-sm-6" data-role="select">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="jab" name="jab" data-placeholder="Pilih Jabatan" required>
																			<option value=""> -- Pilih Jabatan -- </option>
																			<?php if($jabatan):
																				foreach ($jabatan as $val):?>
																			<option value="<?=$val->id_jabatan?>"><?=$val->jabatan_name?></option>
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
																			<option value="<?=$val->id_alat?>"><?=$val->id_alat?></option>
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
																		<textarea class="form-control" id="keterangan" name="keterangan" rows="5" placeholder="Default Text" required></textarea>
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
																	<div class="col-sm-6">
																		<button class="btn btn-info"  type="submit" >
																			<i class="ace-icon fa fa-check bigger-110"></i>
																			Submit
																		</button>
																	</div>
																</div>
															 	
															 	</form>
															 </div>
															 <div style="margin-left:5%;margin-right:5%" class="row">
															 	
															 	   <table id="aduan" class="display"  cellspacing="0" width="100%">
											                        <thead>
											                        <tr>
											                        	<td></td>
											                            <td class="sortable-column sort-asc" style="width: 5px">No</td>
											                            <td class="sortable-column">Jenis Pengaduan</td>
											                            <td class="sortable-column" style="width: 50px">Unit</td>
											                            <td class="sortable-column">Ket</td>
											                            <td class="sortable-column">Jabatan</td> 
											                            <td class="sortable-column">Pelapor</td>
											                            <td class="sortable-column">Tgl Pengaduan</td> 
											                            <td class="sortable-column">Tgl Verifikasi</td> 
											                            <td class="sortable-column">Ket</td> 
											                            <td class="sortable-column">Status Ver</td> 
											                            <td class="sortable-column">Teknis</td> 
											                            <td class="sortable-column">Aksi</td>
											                            
											                        </tr>
											                        </thead>
											                        <tbody> 
											                      	
											                      	<?php if ($viewpengaduan):?>
												                            <?php foreach ($viewpengaduan as $val):?>
											                        <tr  class="">
											                            <td><label class="pos-rel">
																				<input type="checkbox" class="ace" name="msg[]" value="<?=$val->id?>"/>
																				<span class="lbl"></span>
																			</label>
																		</td>
											                            <td><?php echo $no++;?></td>
											                            <td><?php 
											                            if($val->id_jenis=="p1")
											                            {
											                            	echo "kerusakan";
											                            }else if($val->id_jenis=="p2"){
											                            	echo "Maintenance";
											                            }else{
											                            	echo "Pelayanan";
											                            }
											                            ?></td>
											                           	<td><?=$val->kode_unit_parkir?></td>
											                            <td><?=$val->keterangan?></td>
											                           <td><?php 
											                           if($val->jabatan_name==""){
											                           	echo "Masyarakat";
											                           	}else{
											                           		echo $val->jabatan_name;
											                           	}
											                           	?></td>
											                           <td><?=$val->nama_lengkap?></td>
											                           <td><?=$val->tgl_aduan?></td>
											                            <td><?=$val->tgl_verifikasi?></td>
											                           <td><?=$val->keterangan_verifikator?></td>
											                           <td><?php
											                           if($val->status_verifikasi==1)
											                           	{?>
											                           <span  class="ace-icon red fa fa-minus "></span>
											                       		<?php }else{?>
											                           	<span  class="ace-icon green fa fa-check "></span>
											                       		<?php }
											                           ?></td>
											                           <td><?=$val->verifikator?></td>
											                            <td>
											              

											                            <a href="#modal-form1<?php echo $val->id?>"  title="Verifikasi Data"  data-toggle="modal">
											                            <span class="ace-icon fa fa-check "></span></a> |

											                            <a href="#" onclick="changepengaduan(<?=$val->id?>)"    data-toggle="modal">
											                            <span class="ace-icon fa fa-pencil"></span></a> |

											                            <a href="#" onclick="if(confirm('lanjutkan proses hapus data?')){ hapusData(<?=$val->id?>) }"  title="Verifikasi Data"  data-toggle="modal">
											                            <span class="ace-icon fa fa-trash "></span></a> |

											                            </td>
											                           
											                           <div id="modal-form1<?php echo $val->id?>" class="modal modal-form" tabindex="-1">
																			<div class="modal-dialog">
																				<div class="modal-content">
																					<div class="modal-header">
																						<button type="button" class="close" data-dismiss="modal">&times;</button>
																						<h4 class="blue bigger">Formulir Verifikasi</h4>
																					</div>

																					<form method="post" class="form-vertical form" action="pengaduan/updateverifikasi/<?=$val->id?>" role="form"> 

																					<div class="modal-body">
																					
																						<div class="row">
																							 <div class="form-group">
																								<label class="col-sm-4 control-label no-padding-right" for="id-date-picker-1" style="text-align:right;">Tanggal</label>
																								
																									
																								<div class="col-sm-6 col-xs-6 ">
																									<div class="input-group">
																										<input class="form-control date-picker" id="tgl_verif" name="tgl_verif" type="text" data-date-format="yyyy-mm-dd"  />
																										<span class="input-group-addon">
																											<i class="fa fa-calendar bigger-110"></i>
																										</span>
																									</div>
																								</div>
																							</div>

																								<div class="form-group" style="margin-top:10px;">
																								</br></br>
																									
																								<div class="form-group" style="margin-top:10px;">
																									<label class="col-sm-4 control-label no-padding-right" for="form-field-1"  style="text-align:right;">Keterangan </label>
																									<div class="col-sm-6">
																										<textarea class="form-control" id="ket-verif" name="ket-verif" rows="5" placeholder="Default Text"></textarea>
																										</br>
																									</div>
																								</div>
																								
																								<div class="form-group" style="margin-top:10px;">
																									<label class="col-sm-4 control-label no-padding-right" for="form-field-1"  style="text-align:right;">Teknisi </label>
																									
																									<div class="col-sm-6">
																									<?php if ($val->id_jenis=="p3") :?>
					
																									<div class="form-group">
																			
																										 <select id="teknisi" name="teknisi" class="form-control" required >
																			                              <option value="">-- Pilih Nama--</option>
																			                              	<?php 
																											foreach ($teknisi as $va):?>
																											<?php if($va->jabatan==4):?>
																											<option value="<?=$va->id_user?>"><?=$va->nama_lengkap?></option>
																											<?php endif;?>
																											<?php endforeach;?>
																			                              </select>	

																			                        <?php endif;?>
																			                        <?php if ($val->id_jenis=="p2"||$val->id_jenis=="p1") :?>
					
																									<div class="form-group">
																			
																										 <select id="teknisi" name="teknisi" class="form-control" required >
																			                              <option value="">-- Pilih Nama--</option>
																			                              	<?php 
																											foreach ($teknisi as $va):?>
																											<?php if($va->jabatan==3):?>
																											<option value="<?=$va->id_user?>"><?=$va->nama_lengkap?></option>
																											<?php endif;?>
																											<?php endforeach;?>
																			                              </select>	
																			                              
																			                        <?php endif;?>
																									</div>
																									
																									</div>
																									</div>

																								
																						
																										
																									</div>
																									
																								</div>
																								
																						
																						</div>
																					</div>

																					<div class="modal-footer">
																						<button class="btn btn-sm" data-dismiss="modal">
																							<i class="ace-icon fa fa-times"></i>
																							Cancel
																						</button>


																						<button type="submit" class="btn btn-sm btn-primary">
																							<i class="ace-icon fa fa-check"></i>
																							Verifikasi
																						</button>
																					</div>
																				</div>
																				</form>
																			</div>
																		</div><!-- PAGE CONTENT ENDS -->


											                            
											                        </tr>
											                        <?php endforeach;?>
												                    <?php endif;?>

			
											                        </tbody>
											                    </table>


															 </div>

													</div>

													</div>
												</div>

												
												<div style="clear:both"></div>
											</div>
										
									</div><!-- /.col -->

								</div><!-- /.row -->



							


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

	function changepengaduan(id)
  {    
    var url = "<?=site_url('pengaduan/changepengaduan/"+id+"')?>";
    $.get(url, function(data){
      $(".div-mark").load(url);
    });
  }

   function hapusData(id)
  {
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('pengaduan/hapusData/"+id+"')?>",
      dataType: 'json'
    })
    .complete(function(data){
      //$.growl.notice({ title: 'Sukses', message: data.msg});      
      window.location.replace("<?php echo base_url('Pengaduan')?>");
    })
  }

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



	$("#aduan").dataTable( {
          	scrollY:        "400px"
 } );

	
	


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
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});


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