

<div class="main-content" style="margin-top:3em;">
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

												<div id="home" class="tab-pane fade in active">
													<h2><?=$title?></h2>
													<div class="col-md-12" style="padding:4em;" >
													
														
															 
															 	<form method="post" role="form" class="form-horizontal form-merk"   id="form-merk" action="<?php base_url()?>user/insertuser">
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Laporan </label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="jenis_laporan" name="jenis_laporan" data-placeholder="Pilih Jabatan" onchange="getData()">
																			<option value=""> -- Pilih Laporan -- </option>
																			<option value="1">Laporan Pengecekan Alat</option>
																			<option value="2">Laporan Kondisi Alat</option>
																			<option value="3">Laporan Pengaduan</option>
																			<option value="4">Laporan Maintenance</option>
																			<option value="5">Laporan Kehadiran Petugas</option>
																		</select>
																	</div>
																</div>
																<div class="div-mark">
					 	<form class="form-horizontal"  method="post">
					 	<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lokasi </label>
								<div class="col-sm-6">
									<select class="chosen-select form-control col-xs-10 col-sm-5" id="form-field-select-3" data-placeholder="Lokasi">
										<option value="1">Semua Lokasi</option>
										<?php if($lokasi):
											foreach ($lokasi as $val):?>
										<option value="<?=$val->id_lokasi?>"><?=$val->lokasi?></option>
										<?php endforeach;?>
			                            <?php endif;?>
									</select>
								</div>
							</div>	

						<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Petugas</label>
						<div class="col-sm-6" data-role="select">
							<select onclick="get()" class="chosen-select form-control col-xs-10 col-sm-5" id="jab" name="jab" data-placeholder="Pilih Jabatan">							
								<option value="1">Semua Petugas</option>
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
								<select id="nam" name="nam" class="form-control" required >
	                          <option value="1">Semua Nama</option>
	                          </select>	
							</div>
						</div>

						<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kode Unit terkait </label>
						<div class="col-sm-6">
							<select class="chosen-select form-control col-xs-10 col-sm-5" id="form-field-select-3" data-placeholder="Range waktu">
								<option value="1">Semua Unit Terkait</option>
								<?php if($pengaduan):
									foreach ($pengaduan as $val):?>
								<option value="<?=$val->id?>"><?=$val->kode_unit_parkir?></option>
								<?php endforeach;?>
	                            <?php endif;?>
							</select>
						</div>
					</div>

						<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Periode </label>
						<div class="col-sm-6">
							<select onclick="pass()" class="chosen-select form-control col-xs-10 col-sm-5" id="period" data-placeholder="Range waktu">
							
								<option value="1">Harian</option>
								<option value="2">Range waktu</option>
								<option value="3">Bulanan</option>
								<option value="4">Tahunan</option>
							</select>
						</div>
					</div>

					<div id="tgl" style="display:none">
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1">Tanggal</label>
						<div class="col-sm-3 col-xs-3 ">
							<div class="input-group">
								<input  class="form-control date-picker" id="tgl1" type="text" data-date-format="yyyy-mm-dd" />
								<span class="input-group-addon">
									<i class="fa fa-calendar bigger-110"></i>
								</span>

								<label class="col-sm-1 control-label no-padding-right" for="id-date-picker-1">s/d</label>
							</div>

						</div>

						
						<div class="col-sm-3 col-xs-3 ">
							<div class="input-group">
								<input  class="form-control date-picker" id="tgl2" type="text" data-date-format="yyyy-mm-dd" />
								<span class="input-group-addon">
									<i class="fa fa-calendar bigger-110"></i>
								</span>
							</div>
						</div>
					</div>
					</div>
						

						
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
							<div class="col-sm-6">
								<button class="btn btn-default" type="submit">
									<i class="ace-icon fa fa-check bigger-110"></i>
									Tampilan
								</button>

								
							</div>
						</div>
					 	
					 	</form>
					 	</br>
					 </div>

					 <center><h2>Laporan Maintenance </br>Parkir Meter </br> Kota Padang</h2></center>

					 <div  class="row ">
					 	<div style="text-align:right" class="col-sm-0">
								<button class="btn btn-success" type="submit">
									<i class="ace-icon glyphicon glyphicon-print bigger-110"></i>
									Cetak
								</button>

								
							</div>
					 	<table id="tabel" class="table table-bordered" >
			                <thead>
			                    <tr>
			                        <th >No</th>
			                        <th >Petugas</th>
			                        <th >Kode Alat</th>
			                        <th >Lokasi</th>
			                        <th >Maintenance</th>
			                        
			                        <th >Tanggal</th>
			                    </tr>
			                </thead>
			                </table>
					 </div>

															</form>
														
																

													</div>
												</div>

												<div id="profisl" class="tab-pane fade in">
													profill
												</div>

												<div style="clear:both"></div>
											</div>
										</div>

									</div><!-- /.col -->

								</div><!-- /.row -->



							
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			

<script type="text/javascript">

$("#tabel").dataTable( {
          	"sScrollY": "200px",
           "sScrollX": "100%",
           
           "bScrollCollapse": true
 } );

function pass(){
	if($('#period').val()=="2"){
        $('#tgl').show();
        }else{
        	$('#tgl').hide();
        }
}
	function get(){
	 
	$("select[name=jab]").change(function(){
		    var x = $("select[name=nam]");
		   
		    if($(this).val() == "") {
		      x.html("<option value='1'>Semua Nama</option>");
		    }
		    else {
		                z = "<option value='1'>Semua Nama</option>";
		                $.ajax({
		                  url      : "<?php echo base_url();?>index.php/absensi/getnama",
		                  dataType : "json",
		                  type     : "POST",
		                  data     : { "datanama" : $(this).val() },
		                  success  : function(data){
		                    console.log(data[0].nama_lengkap);
		                    var z = "<option value='1'>Semua Nama</option>";
		                    for(var i = 0; i<data.length; i++){
		                      z += '<option value='+data[i].id_user+'>'+data[i].nama_lengkap+'</option>';
		                    }
		                    x.html(z);
		                  }
		                });

		          }
		    });

}

$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});

</script>