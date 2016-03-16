

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

												<div id="home" class="tab-pane fade in active">
													<center><h2><?=$title?></h2></center>
													<div class="col-md-12" style="padding:4em;" >
													
														
															 
															 	<form method="post" role="form" class="form-horizontal form-merk"   id="form-merk" action="<?php base_url()?>laporan_ka">
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Laporan </label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="jenis_laporan" name="jenis_laporan" data-placeholder="Pilih Jabatan" onchange="getData()">
																			
																			<option value="2">Laporan Kondisi Alat</option>
																			<option value="1">Laporan Pengecekan Alat</option>
																			<option value="3">Laporan Pengaduan</option>
																			<option value="4">Laporan Maintenance</option>
																			<option value="5">Laporan Kehadiran Petugas</option>
																		</select>
																	</div>
																</div>
																<div class="div-mark">
						 	<form class="form-horizontal"  method="post">
						 	
							<div class="space-4"></div>	
							
						<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lokasi </label>
								<div class="col-sm-6">
									<select class="chosen-select form-control col-xs-10 col-sm-5" id="lokasi" name="lokasi" data-placeholder="Lokasi">
										<option value="1">Semua Lokasi</option>
										<?php if($alat):
											foreach ($alat as $val):?>
										<option value="<?=$val->lokasi?>"><?=$val->lokasi?></option>
										<?php endforeach;?>
			                            <?php endif;?>
									</select>
								</div>
							</div>


						

						<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kode Unit terkait </label>
						<div class="col-sm-6">
							<select class="chosen-select form-control col-xs-10 col-sm-5" id="kode" name="kode" data-placeholder="Range waktu">
								<option value="1">Semua Unit Terkait</option>
								<?php if($alat):
									foreach ($alat as $val):
										?>
								<option value="<?=$val->id_alat?>"><?=$val->id_alat?></option>
								<?php endforeach;?>
	                            <?php endif;?>
							</select>
						</div>
					</div>
							
							<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Periode </label>
						<div class="col-sm-6">
							<select onclick="pass()" class="chosen-select form-control col-xs-10 col-sm-5" id="period" name="period" data-placeholder="Range waktu">
							
								<option value="1">Harian</option>
								<option value="2">Range waktu</option>
								<option value="3">Bulanan</option>
								<option value="4">Tahunan</option>
							</select>
						</div>
					</div>

					<div id="hari" >
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1">Harian</label>
						<div class="col-sm-3 col-xs-3 ">
							<div class="input-group">
								<input  class="form-control date-picker" id="harian" name="harian" type="text" data-date-format="yyyy-mm-dd" />
								<span class="input-group-addon">
									<i class="fa fa-calendar bigger-110"></i>
								</span>
							</div>

						</div>
						</div>
						</div>

						<div id="bulan" style="display:none">
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Bulan </label>
						<div class="col-sm-6">
							<select  class="chosen-select form-control col-xs-10 col-sm-5" id="bulanan" name="bulanan" data-placeholder="Range waktu">
								<option value="1">Januari</option>
								<option value="2">Februari</option>
								<option value="3">Maret</option>
								<option value="4">April</option>
								<option value="5">Mei</option>
								<option value="6">Juni</option>
								<option value="7">Juli</option>
								<option value="8">Agustus</option>
								<option value="9">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>
							</select>
						</div>
					</div>

					
					</div>

					<div id="tahun" style="display:none">
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tahun </label>
						<div class="col-sm-6">
							<select  class="chosen-select form-control col-xs-10 col-sm-5" id="tahunan" name="tahunan" data-placeholder="Range waktu">
								
								<?php 
								$th=2015;
								for ($i=0; $i <10 ; $i++) { $th++; ?>
									<option value="<?=$th?>"><?=$th?></option>
								<?php }?>
								
							</select>
						</div>
					</div>
					</div>

					<div id="tgl" style="display:none">
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1">Tanggal</label>
						<div class="col-sm-3 col-xs-3 ">
							<div class="input-group">
								<input  class="form-control date-picker" id="tgl1" name="tgl1" type="text" data-date-format="yyyy-mm-dd" />
								<span class="input-group-addon">
									<i class="fa fa-calendar bigger-110"></i>
								</span>

								<label class="col-sm-1 control-label no-padding-right" for="id-date-picker-1">s/d</label>
							</div>

						</div>

						
						<div class="col-sm-3 col-xs-3 ">
							<div class="input-group">
								<input  class="form-control date-picker" id="tgl2" name="tgl2" type="text" data-date-format="yyyy-mm-dd" />
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
									<button class="btn btn-info" type="submit">
										<i class="ace-icon fa fa-check bigger-110"></i>
										Tampilkan
									</button>
								</div>
							</div>
						 	
						 	</form>
						 </div>
						 <div class="row">
						 <center>
						 	<h3>Laporan Kondisi Alat</br> Parkir Meter</br> Kota Padang </br> 
						 	<b><?php
				 	if($laporan==1){
				 		echo $hari;
				 	}else if($laporan==2){
				 		echo $tgl1;
				 		echo " - ";
				 		echo $tgl2;
				 	}else if($laporan==3){
				 		echo "Bulan ";
			 		if($bulan==1){$bulan="Januari";}
			 		else if($bulan==2){$bulan="Februari";}
			 		else if($bulan==3){$bulan="Maret";}
			 		else if($bulan==4){$bulan="April";}
			 		else if($bulan==5){$bulan="Mei";}
			 		else if($bulan==6){$bulan="Juni";}
			 		else if($bulan==7){$bulan="Juli";}
			 		else if($bulan==8){$bulan="Agustus";}
			 		else if($bulan==9){$bulan="September";}
			 		else if($bulan==10){$bulan="Oktober";}
			 		else if($bulan==11){$bulan="November";}
			 		else if($bulan==12){$bulan="Desember";}
echo $bulan;
				 	}else{
				 		echo $tahun;
				 	}
				  	?></b>
						 	</h3>
						 </center>
						 </div>
						 <div class="row">
						 	
						 	  <table id="tabel" class="display"  cellspacing="0">
		                        <thead>
		                        <tr>
		                            <td >No</td>
		                            <td >Kode Unit Parkir</td>
		                            <td >Lokasi</td> 
		                            <td >Tanggal</td>
		                            <td >Kondisi</td> 
		                            
		                        </tr>
		                        </thead>
		                        <tbody> 
		                      
		                      <?php
						                $i=1; 
						                $temp="";
						                foreach ($filter as $val) :
						                $tg=$this->mmaster->hitung($val->tgl_aduan);
						            	$tg1=$this->mmaster->hitung($this->input->post('tgl1'));
						            	$tg2=$this->mmaster->hitung($this->input->post('tgl2'));

						     if($val->status_verifikasi!=1){   		
						    if($this->input->post('period')==2)
		            		{
			                if($tg>=$tg1 && $tg<=$tg2 )
			                {?>
			                	<tr>
						                <td><?=$i++;?></td>
						                <td><?=$val->kode_unit_parkir?></td>
						                <td>
						                <?=$val->lokasi?></td>
						                <td><?=$val->tgl_verifikasi?></td>
						                <td><?php if($val->id_jenis!="p1"){?>
						                	  <i  class="ace-icon green fa fa-check"></i>
							                <?php }else{?>
							                <i  class="ace-icon red fa fa-ban"></i>
						                	<?php }?></td>
						                </tr>

			                <?php }
		                }else if($this->input->post('period')==1){
		                	if($this->input->post('harian')==$val->tgl_aduan){?>
		                	<tr>
						                <td><?=$i++;?></td>
						                <td><?=$val->kode_unit_parkir?></td>
						                <td>
						                <?=$val->lokasi?></td>
						                <td><?=$val->tgl_verifikasi?></td>
						                <td><?php if($val->id_jenis!="p1"){?>
						                	  <i  class="ace-icon green fa fa-check"></i>
							                <?php }else{?>
							                <i  class="ace-icon red fa fa-ban"></i>
						                	<?php }?></td>
						                </tr>
		                		
		                	<?php }
		                }else if($this->input->post('period')==3){
		                	if($this->input->post('bulanan')==substr(substr($val->tgl_aduan,5,6),0,2)){?>

		                	<tr>
						               <td><?=$i++;?></td>
						                <td><?=$val->kode_unit_parkir?></td>
						                <td>
						                <?=$val->lokasi?></td>
						                <td><?=$val->tgl_verifikasi?></td>
						                <td><?php if($val->id_jenis!="p1"){?>
						                	  <i  class="ace-icon green fa fa-check"></i>
							                <?php }else{?>
							                <i  class="ace-icon red fa fa-ban"></i>
						                	<?php }?></td>
						                </tr>
		                		
		                	<?php }
		                }else if($this->input->post('period')==4){
		                	if($this->input->post('tahunan')==substr($val->tgl_aduan,0,4)){?>

		                				<tr>
						                <td><?=$i++;?></td>
						                <td><?=$val->kode_unit_parkir?></td>
						                <td>
						                <?=$val->lokasi?></td>
						                <td><?=$val->tgl_verifikasi?></td>
						                <td><?php if($val->id_jenis!="p1"){?>
						                	  <i  class="ace-icon green fa fa-check"></i>
							                <?php }else{?>
							                <i  class="ace-icon red fa fa-ban"></i>
						                	<?php }?></td>
						                </tr>
		                		
		                	<?php }
		                	}
						                }?>
						            <?php endforeach;?>

		                       
		                        </tbody>
		                    </table>


						 </div>

															</form>
														
																

													</div>
												</div>

												<div id="profisl" class="tab-pane fade in">
												</div>

												<div style="clear:both"></div>
											</div>

									</div><!-- /.col -->

								</div><!-- /.row -->



							
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
<script  language="javascript">


$(document).ready(function() {
	$("#tabel").dataTable( {
	"dom": 'T<"clear">lfrtip',
        "tableTools": {
            "aButtons": [
            	"copy",
                {
                     "sExtends" : "print",
                     "sMessage": "<h2><center>Laporan Kondisi Alat <br>Parkir Meter <br> Kota Padang</br><b><?php if($laporan==1){ echo $hari; }else if($laporan==2){ echo $tgl1.' - '.$tgl2; }else if($laporan==3){ echo 'Bulan '. $bulan; }else{ echo $tahun; }?></center></h2>",
			          "sInfo": "Gunakan Ctrl+P untuk melanjutkan proses Print, jika ingin keluar silahkan Klik Esc !",
                },
                {

                    "sExtends":    "collection",
                    "sButtonText": "Save",
                    "aButtons":    [ "csv", "xls", "pdf" ]
                }
            ],
           
        } 	
});
});
	function pass(){
	if($('#period').val()=="2"){
        $('#tgl').show();
        $('#hari').hide();
   		$('#bulan').hide();
   		$('#tahun').hide();
   }else if($('#period').val()=="1"){
   		$('#hari').show();
   		$('#tgl').hide();
   		$('#bulan').hide();
   		$('#tahun').hide();
   	}else if($('#period').val()=="3"){
   		$('#bulan').show();
   		$('#tgl').hide();
   		$('#hari').hide();
   		$('#tahun').hide();
   	}else if($('#period').val()=="4"){
   		$('#tahun').show();
   		$('#tgl').hide();
   		$('#hari').hide();
   		$('#bulan').hide();
   	}
   
}


$(document).ready(function() {


});

$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});




</script>