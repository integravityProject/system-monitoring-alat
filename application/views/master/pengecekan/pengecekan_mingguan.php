
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
															 	<form class="form-horizontal"  method="post">
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pilih Alat</label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="alat" name="alat"data-placeholder="Pilih Periode">												
																		<?php if($getAlat):?>
													                	<?php foreach ($getAlat as $val) :?>
																			<option value="<?=$val->id_alat?>"  <?php if($id_alat==$val->id_alat){echo "selected";}?>><?=$val->id_alat?></option>
																		<?php endforeach;?>
																		<?php endif;?>
																		</select>
																	</div>
																</div>
																	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pilih Petugas</label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="petugas" name="petugas" data-placeholder="Pilih Petugas">												
																			<?php $t=0;
																			if($dataUser):?>
													                	<?php foreach ($dataUser as $val) :?>
																			<option value="<?=$val->id_user?>" <?php if($id_petugas==$val->id_user){echo "selected";}?>><?=$val->nama_lengkap?></option>
																		<?php endforeach;?>
																		<?php endif;?>
																		</select>
																	</div>
																</div>
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Periode </label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="periodep" name="periode"data-placeholder="Pilih Periode" onchange="getData2()">
																			<option value="1">Harian</option>
																			<option value="2" selected="selected">Mingguan</option>
																			<option value="3">Bulanan</option>
																			<option value="4">Triwulan</option>
																			<option value="5">Semester</option>
																		</select>
																	</div>
																</div>
																	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pilih Tahun</label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="tahun" name="periode"data-placeholder="Pilih Periode">												
																			<?php $t=0;
																			if($getTahun):?>
													                	<?php foreach ($getTahun as $val) :?>
																			<option value="<?=$val->tahun?>" <?php if($tahunKe==$val->tahun){echo "selected";}?>><?=$val->tahun?></option>
																		<?php endforeach;?>
																		<?php endif;?>
																		</select>
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1" id="bulanlabel" > Pilih Bulan</label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="bulan" name="periode"data-placeholder="Pilih Periode" >
																			<?php 
																			$bulan =array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Agustus","November","Desember");
																			for ($bln=0,$i=1; $bln < 12; $bln++,$i++) : ?>
																			<option value="<?=$i?>" <?php if($bulanKe==$i){echo "selected";}?>><?=$bulan[$bln]?></option>
																		<?php endfor;?>
																		</select>
																	</div>
																</div>
															
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
																	<div class="col-sm-6">
																		<span class="btn btn-info"  onclick="getLink()" >
																			<i class="ace-icon fa fa-check bigger-110"></i>
																			Checklist
																		</span>

																	</div>
																</div>
															 	
															 	</form>
															 	</br>
															 </div>
															 <div style="margin-left:5%;margin-right:5%" class="row div-stable">
															 	<table id="pengecekan"  class="table table-striped table-bordered" >
													                <thead>

													                    <tr>
													                        <th style="width:20px;">No</th>
													                        <th >Pekerjaan</th>
													                        <th style="text-align:center;">Minggu 1</th>
													                        <th style="text-align:center;">Minggu 2</th>
													                        <th style="text-align:center;">Minggu 3</th>
													                        <th style="text-align:center;">Minggu 4</th>
													                      
													                    </tr>
													                </thead>
													                <tbody>
													                <?php if($dataMingguan):?>
													                	<?php 
													                	$mingguKe=$this->mpengecekan->getMingguKe(date('d'));
													                	?>
													                	<?php foreach ($dataMingguan as $val) :?>
													                		<tr>

													                			<td><?= $no++?></td>
													                			<td><?= $val->kegiatan?></td>
													                			<?php for($i=1;$i<5;$i++):?>
													                			<td align="center">
														                			<?php 
														                				if($i==1){
														                					$a=1;
														                				}else if($i==2){
														                					$a=9;
														                				}else if($i==3){
														                					$a=17;
														                				}else if($i==4){
														                					$a=25;
														                				}
														                				if(date('m')>=$bulanKe && $tahunKe<=date('Y')){
														                					if(date('m')>$bulanKe){
																                				if($this->mpengecekan->cekMingguSekarang($val->id_kegiatan,$tahunKe,$bulanKe,$a,$id_alat,$id_petugas) == 1 ){?>
																                					<a href="#"
																                					onclick="if(confirm('Apakah anda ingin membatalkan Verifikasi?')){cancelMinggu(<?=$val->id_kegiatan?>,<?php echo $a;?>,<?=$bulanKe?>)}"
																                					title='Klik Untuk Pembatalan Verifikasi'><span style="color:black;" class='glyphicon glyphicon-ok'></span></a><?php
																                				}else{?>
																                					<a href="<?php echo base_url();?>pengecekan/mingguan/<?=$tahunKe?>/2/<?=$id_alat?>/<?=$id_petugas?>"
																                					onclick="if(confirm('Apakah Anda ingin Memverifikasi?')){verifMinggu(<?=$val->id_kegiatan?>,<?php echo $i;?>,<?=$bulanKe?>)}" 
																                					 title='Klik Untuk Verifikasi'><span style="color:red;" class='glyphicon glyphicon-ok'></span></a><?php
																                				}
																                			}else{
																	                			if($mingguKe > $i && $this->mpengecekan->cekMingguSekarang($val->id_kegiatan,$tahunKe,$bulanKe,$a,$id_alat,$id_petugas) == 1 ){?>
																                					<a href="#"
																                					onclick="if(confirm('Apakah anda ingin membatalkan Verifikasi?')){cancelMinggu(<?=$val->id_kegiatan?>,<?php echo $a;?>,<?=$bulanKe?>)}"
																                					title='Klik Untuk Pembatalan Verifikasi'><span style="color:black;" class='glyphicon glyphicon-ok'></span></a><?php
																                				}else if ($mingguKe == $i && $this->mpengecekan->cekMingguSekarang($val->id_kegiatan,$tahunKe,$bulanKe,$a,$id_alat,$id_petugas) == 1) {?>
																                					<a href="#"
																                					onclick="if(confirm('Apakah anda ingin membatalkan Verifikasi?')){cancelMinggu(<?=$val->id_kegiatan?>,<?php echo $a;?>,<?=$bulanKe?>)}" title='Klik Untuk Verifikasi'><span class='glyphicon glyphicon-ok green'></span></a><?php
																                				}else if ($i <= $mingguKe && $this->mpengecekan->cekMingguSekarang($val->id_kegiatan,$tahunKe,$bulanKe,$a,$id_alat,$id_petugas) == 0){?>
																                					<a href="#"
																                					onclick="if(confirm('Apakah Anda ingin Memverifikasi?')){verifMinggu(<?=$val->id_kegiatan?>,<?php echo $i;?>,<?=$bulanKe?>,<?=$bulanKe?>)}"  title='Klik Untuk Verifikasi'><span style="color:red;" class='glyphicon glyphicon-ok'></span></a><?php
																                				}
																                			}
														                				}else if($tahunKe<date('Y')){
														                					if($this->mpengecekan->cekMingguSekarang($val->id_kegiatan,$tahunKe,$bulanKe,$a,$id_alat,$id_petugas) == 1 ){?>
																                					<a href="#"
																                					onclick="if(confirm('Apakah anda ingin membatalkan Verifikasi?')){cancelMinggu(<?=$val->id_kegiatan?>,<?php echo $i;?>,<?=$bulanKe?>)}"
																                					title='Klik Untuk Pembatalan Verifikasi'><span style="color:black;" class='glyphicon glyphicon-ok'></span></a><?php
																                				}else{?>
																                					<a href="#"
																                					onclick="if(confirm('Apakah Anda ingin Memverifikasi?')){verifMinggu(<?=$val->id_kegiatan?>,<?php echo $i;?>,<?=$bulanKe?>)}"
																                					 title='Klik Untuk Verifikasi'><span style="color:red;" class='glyphicon glyphicon-ok'></span></a><?php
																                				}
														                				}
														                				?>

													                			</td>
													                		<?php endfor;?>
													                		
													                		</tr>
													                	<?php endforeach; ?>
													                <?php endif; ?>
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




	function jabatan(){
		if($('#pengadu').val()==1){
			$('.jabat').show();

		    $("select[name=jab]").change(function(){
		    var x = $("select[name=nam]");
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

	$("#provinsi").dataTable( {
          	"sScrollY": "200px",
           "sScrollX": "100%",
           "sScrollXInner": "130%",
           "bScrollCollapse": true
 } );;

	$('.form-merk').submit(function(event){    
    event.preventDefault();
    $(this).find("button[type='submit']").prop('disabled',true);
    // POST DATA
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('index.php/pengaduan/insertpengaduan')?>",
      dataType:'json',
      data: {
        pengadu : $("#pengadu").val(),
        id_jenis : $("#jenis_pengaduan").val(),
        id_petugas : $("#nam").val(),
        kode_unit_parkir : $("#parkir").val(),
        tgl_aduan : $("#tgl").val(),
        keterangan : $("#ket").val()
      }
    })

    .success(function(data)
    {
     // $.growl.notice({ title: 'Sukses', message: data.msg});
     window.location.replace("<?= site_url('pengaduan')?>");       
    });  
    location.reload(false);
  });


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


</script>