

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
													
														
															 
						 	<form method="post" role="form" class="form-horizontal form-merk"   id="form-merk" action="<?php base_url()?>laporan_p">
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
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Pengaduan </label>
								<div class="col-sm-6">
									<select class="chosen-select form-control col-xs-10 col-sm-5" id="jenis" name="jenis" data-placeholder="Jenis Pengaduan">
										<option value="1">Semua Jenis Pengaduan</option>
										<option value="p1">Kerusakan</option>
										<option value="p2">Maintenance</option>
										<option value="p3">Pelayanan</option>
									</select>
								</div>
							</div>

							<!-- <div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lokasi </label>
								<div class="col-sm-6">
									<select class="chosen-select form-control col-xs-10 col-sm-5" id="lokasi" name="lokasi" data-placeholder="Lokasi">
										<option value="1">Semua Lokasi</option>
										<?php if($lokasi):
											foreach ($lokasi as $val):?>
										<option value="<?=$val->id_lokasi?>"><?=$val->lokasi?></option>
										<?php endforeach;?>
			                            <?php endif;?>
									</select>
								</div>
							</div> -->

							<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kode Unit terkait </label>
						<div class="col-sm-6">
							<select class="chosen-select form-control col-xs-10 col-sm-5" id="kode" name="kode" data-placeholder="Range waktu">
								<option value="1">Semua Unit Terkait</option>
								<?php if($pengaduan):
									foreach ($pengaduan as $val):?>
								<option value="<?=$val->kode_unit_parkir?>"><?=$val->kode_unit_parkir?></option>
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
									<button class="btn btn-default" type="submit">
										<i class="ace-icon fa fa-check bigger-110"></i>
										Tampilan
									</button>

									
								</div>
							</div>
						 	
						 	</form>
						 	</br>
						 </div>

						 <center><h2>Laporan Pengaduan </br>Parkir Meter </br> Kota Padang</h2></center>

						 <div  class="row ">
						 	<div style="text-align:right;margin-bottom:10px" class="col-sm-0">
									<button class="btn btn-success" type="submit">
										<i class="ace-icon glyphicon glyphicon-print bigger-110"></i>
										Cetak
									</button>

									
								</div>
						 	<table id="tabel" class="table table-bordered" >
				                <thead>
				                    <tr>
				                        <th >No</th>
				                        <th >Jenis Pengaduan</th>
				                        <th >Pengadu</th>
				                        <th >Aduan</th>
				                        <th >Kode unit Parkir</th>
				                      <!--   <th >Lokasi</th> -->
				                        <th >Tanggal Aduan </th>
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
						          		
						    if($this->input->post('period')==2)
		            		{
			                if($tg>=$tg1 && $tg<=$tg2 )
			                {?>
			                	<tr>
						                <td><?=$i++;?></td>
						                <td><?=$val->pengaduan?></td>
						                <td>
						                <?=$val->nama_lengkap?></td>
						                <td><?=$val->keterangan?></td>
						                <td><?=$val->kode_unit_parkir?></td>
						                <td><?=$val->tgl_aduan?></td>
						                </tr>

			                <?php }
		                }else if($this->input->post('period')==1){
		                	if($this->input->post('harian')==$val->tgl_aduan){?>
		                	<tr>
						                <td><?=$i++;?></td>
						                <td><?=$val->pengaduan?></td>
						                <td>
						                <?=$val->nama_lengkap?></td>
						                <td><?=$val->keterangan?></td>
						                <td><?=$val->kode_unit_parkir?></td>
						                <td><?=$val->tgl_aduan?></td>
						                </tr>
		                		
		                	<?php }
		                }else if($this->input->post('period')==3){
		                	if($this->input->post('bulanan')==substr(substr($val->tgl_aduan,5,6),0,2)){?>

		                	<tr>
						                <td><?=$i++;?></td>
						                <td><?=$val->pengaduan?></td>
						                <td>
						                <?=$val->nama_lengkap?></td>
						                <td><?=$val->keterangan?></td>
						                <td><?=$val->kode_unit_parkir?></td>
						                <td><?=$val->tgl_aduan?></td>
						                </tr>
		                		
		                	<?php }
		                }else if($this->input->post('period')==4){
		                	if($this->input->post('tahunan')==substr($val->tgl_aduan,0,4)){?>

		                	<tr>
						                <td><?=$i++;?></td>
						                <td><?=$val->pengaduan?></td>
						                <td>
						                <?=$val->nama_lengkap?></td>
						                <td><?=$val->keterangan?></td>
						                <td><?=$val->kode_unit_parkir?></td>
						                <td><?=$val->tgl_aduan?></td>
						                </tr>
		                		
		                	<?php }
		                }
							           	
						                

						                ?>
						                
						            

						            <?php endforeach;?>



				                </tbody>
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

$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});


</script>