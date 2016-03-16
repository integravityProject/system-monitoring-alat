
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
													
														
															 
							 	<form method="post" role="form" class="form-horizontal form-merk"   id="form-merk" action="<?php base_url()?>laporan_kp">
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Laporan </label>
									<div class="col-sm-6">
										<select class="chosen-select form-control col-xs-10 col-sm-5" id="jenis_laporan" name="jenis_laporan" data-placeholder="Pilih Jabatan" onchange="getData()">
											<option value="5">Laporan Kehadiran Petugas</option>
											<option value="1">Laporan Pengecekan Alat</option>
											<option value="2">Laporan Kondisi Alat</option>
											<option value="3">Laporan Pengaduan</option>
											<option value="4">Laporan Maintenance</option>
											
										</select>
									</div>
								</div>
								<div class="div-mark">
		
					<!-- <div class="form-group">
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
							</div>	 -->

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Petugas</label>
						<div class="col-sm-6" data-role="select">
							<select onclick="get()" class="chosen-select form-control col-xs-10 col-sm-5" id="jab" name="jab" data-placeholder="Pilih Jabatan">
								<option value=""> ===Pilih Petugas===</option>
								<option value="0"> Semua Petugas</option>
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

				
					<!-- <div class="form-group">
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
					</div> -->

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
								<input onchange ="tg1()" class="form-control date-picker" id="tgl2" name="tgl2" type="text" data-date-format="yyyy-mm-dd" />
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

				 <center><h2>Laporan Kehadiran Petugas </br>Parkir Meter </br> Kota Padang </br>
				 <?php
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
				  	?>
				  	</div></h2></center>

				 
						<div  class="row" style="padding-left:5%;padding-right:5%;" >
				 	<table id="tabel2" class="display"  cellspacing="0">
		                <thead>
		                    <tr>
		                        <th >No</th>
		                        <th >Petugas</th>
		                        <th >Jabatan</th>
		                       
		                        <th >Jumlah Ijin </th>
		                        <th >Jumlah Bolos</th>
		                        <th >Jumlah Masuk</th>
		                    </tr>
		                </thead>

		                <?php
		                $i=1; 
		                $temp="";
		                foreach ($filter as $val) :
		                $tg=$this->mmaster->hitung($val->tgl);
		            	$tg1=$this->mmaster->hitung($this->input->post('tgl1'));
		            	$tg2=$this->mmaster->hitung($this->input->post('tgl2'));
		           
		                
		              
		            	if($this->input->post('period')==2)
		            	{
			                if($tg>=$tg1 && $tg<=$tg2 )
			                {

				                 $j=1;
				             	if($temp==$val->nama_lengkap)
				             	{
				             		break;
				             	}else{
				             		$temp=$val->nama_lengkap;
				             	}
				                 ?>
				             	
				                <tr>
				                	<td><?=$i++?></td>
				                	<td><?=$val->nama_lengkap?></td>
				                	<td><?=$val->jabatan_name?></td>
				                	
				                	<td>
				                		<?php
				                		$ij=0;
				                		 foreach ($absen as $abs) :?>
				                		<?php	if($val->id_petugas == $abs->id_petugas): 
				                				
				                				if ($abs->absen==2) {
				                					$ij++;
				                				}
				                		?>
				                		<?php endif;?> 
				                		<?php endforeach;
				                			echo $ij;
				                		?>

				                	</td>

				                	<td><?php 
				                		$ij=0;
				                	foreach ($absen as $abs) :?>
				                		<?php	if($val->id_petugas == $abs->id_petugas): 
				                				if ($abs->absen==3) {
				                					$ij++;
				                				}
				                		?>
				                		<?php endif;?> 
				                		<?php endforeach;
				                			echo $ij;
				                		?></td>
				                	<td><?php 
				                		$ij=0;
				                	foreach ($absen as $abs) :?>
				                		<?php	if($val->id_petugas == $abs->id_petugas): 
				                				
				                				if ($abs->absen==1) {
				                					$ij++;
				                				}
				                		?>
				                		<?php endif;?> 
				                		<?php endforeach;
				                			echo $ij;
				                		?></td>

				                       
				                    </tr>

			                <?php }
		                }else if($this->input->post('period')==1){
		                	if($this->input->post('harian')==$val->tgl){

		                		if($temp==$val->nama_lengkap)
			             	{
			             		break;
			             	}else{
			             		$temp=$val->nama_lengkap;
			             	}
			                 ?>
			             	
			                <tr>
			                	<td><?=$i++?></td>
			                	<td><?=$val->nama_lengkap?></td>
			                	<td><?=$val->jabatan_name?></td>
			                	
			                	<td>
			                		<?php
			                		$ij=0;
			                		 foreach ($absen as $abs) :?>
			                		<?php	if($val->id_petugas == $abs->id_petugas): 
			                				
			                				if ($abs->absen==2) {
			                					$ij++;
			                				}
			                		?>
			                		<?php endif;?> 
			                		<?php endforeach;
			                			echo $ij;
			                		?>

			                	</td>

			                	<td><?php 
			                		$ij=0;
			                	foreach ($absen as $abs) :?>
			                		<?php	if($val->id_petugas == $abs->id_petugas): 
			                				if ($abs->absen==3) {
			                					$ij++;
			                				}
			                		?>
			                		<?php endif;?> 
			                		<?php endforeach;
			                			echo $ij;
			                		?></td>
			                	<td><?php 
			                		$ij=0;
			                	foreach ($absen as $abs) :?>
			                		<?php	if($val->id_petugas == $abs->id_petugas): 
			                				
			                				if ($abs->absen==1) {
			                					$ij++;
			                				}
			                		?>
			                		<?php endif;?> 
			                		<?php endforeach;
			                			echo $ij;
			                		?></td>

			                       
			                    </tr>
		                	<?php }
		                }else if($this->input->post('period')==3){
		                	if($this->input->post('bulanan')==substr(substr($val->tgl,5,6),0,2)){

		                		if($temp==$val->nama_lengkap)
			             	{
			             		break;
			             	}else{
			             		$temp=$val->nama_lengkap;
			             	}
			                 ?>
			             	
			                <tr>
			                	<td><?=$i++?></td>
			                	<td><?=$val->nama_lengkap?></td>
			                	<td><?=$val->jabatan_name?></td>
			                	
			                	<td>
			                		<?php
			                		$ij=0;
			                		 foreach ($absen as $abs) :?>
			                		<?php	if($val->id_petugas == $abs->id_petugas): 
			                				
			                				if ($abs->absen==2) {
			                					$ij++;
			                				}
			                		?>
			                		<?php endif;?> 
			                		<?php endforeach;
			                			echo $ij;
			                		?>

			                	</td>

			                	<td><?php 
			                		$ij=0;
			                	foreach ($absen as $abs) :?>
			                		<?php	if($val->id_petugas == $abs->id_petugas): 
			                				if ($abs->absen==3) {
			                					$ij++;
			                				}
			                		?>
			                		<?php endif;?> 
			                		<?php endforeach;
			                			echo $ij;
			                		?></td>
			                	<td><?php 
			                		$ij=0;
			                	foreach ($absen as $abs) :?>
			                		<?php	if($val->id_petugas == $abs->id_petugas): 
			                				
			                				if ($abs->absen==1) {
			                					$ij++;
			                				}
			                		?>
			                		<?php endif;?> 
			                		<?php endforeach;
			                			echo $ij;
			                		?></td>

			                       
			                    </tr>
		                	<?php }
		                }else if($this->input->post('period')==4){
		                	if($this->input->post('tahunan')==substr($val->tgl,0,4)){

		                		if($temp==$val->nama_lengkap)
			             	{
			             		break;
			             	}else{
			             		$temp=$val->nama_lengkap;
			             	}
			                 ?>
			             	
			                <tr>
			                	<td><?=$i++?></td>
			                	<td><?=$val->nama_lengkap?></td>
			                	<td><?=$val->jabatan_name?></td>
			                	
			                	<td>
			                		<?php
			                		$ij=0;
			                		 foreach ($absen as $abs) :?>
			                		<?php	if($val->id_petugas == $abs->id_petugas): 
			                				
			                				if ($abs->absen==2) {
			                					$ij++;
			                				}
			                		?>
			                		<?php endif;?> 
			                		<?php endforeach;
			                			echo $ij;
			                		?>

			                	</td>

			                	<td><?php 
			                		$ij=0;
			                	foreach ($absen as $abs) :?>
			                		<?php	if($val->id_petugas == $abs->id_petugas): 
			                				if ($abs->absen==3) {
			                					$ij++;
			                				}
			                		?>
			                		<?php endif;?> 
			                		<?php endforeach;
			                			echo $ij;
			                		?></td>
			                	<td><?php 
			                		$ij=0;
			                	foreach ($absen as $abs) :?>
			                		<?php	if($val->id_petugas == $abs->id_petugas): 
			                				
			                				if ($abs->absen==1) {
			                					$ij++;
			                				}
			                		?>
			                		<?php endif;?> 
			                		<?php endforeach;
			                			echo $ij;
			                		?></td>

			                       
			                    </tr>
		                	<?php }
		                }

		                endforeach;?>
		                </table>


				 </div>
															</form>
														
																

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

<script language="javascript">

$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});


$(document).ready(function() {
	$("#tabel2").dataTable( {
	"dom": 'T<"clear">lfrtip',
        "tableTools": {
            "aButtons": [
            	"copy",
                {
                     "sExtends" : "print",
                     "sMessage": "<h2><center>Laporan Kehadiran Petugas <br>Parkir Meter <br> Kota Padang</br><b><?php if($laporan==1){ echo $hari; }else if($laporan==2){ echo $tgl1.' - '.$tgl2; }else if($laporan==3){ echo 'Bulan '. $bulan; }else{ echo $tahun; }?></center></h2>",
			          "sInfo": "Gunakan Ctrl+P untuk melanjutkan proses Print, jika ingin keluar silahkan Klik Esc !"			          
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

function tg1(){
		var tgl1= $('#tgl1').val();
		var tgl2= $('#tgl2').val();
		var hr1 = tgl1.substring(8,10);
		var hr2 = tgl2.substring(8,10);
		var bl1	= tgl1.substring(5,7);
		var bl2	= tgl2.substring(5,7);
		var th1 = tgl1.substring(0,4);
		var th2 = tgl2.substring(0,4);
		bl1 = bul(bl1);
		bl2 = bul(bl2);

		$('#t1').text(""+hr1+" "+bl1+" "+th1+"  -  "+hr1+" "+bl1+" "+th1+"");

}

function bul(bln){
		if(bln==1){
			bln="Jan";
		}
		else if(bln==2){
			bln="Feb";
			}
		else if(bln==3){
			bln="Mar";
			}
		else if(bln==4){
			bln="Apr";
			}
		else if(bln==5){
			bln="Mei";
			}
		else if(bln==6){
			bln="Jun";
			}
		else if(bln==7){
			bln="Jul";
			}
		else if(bln==8){
			bln="Agus";
			}
		else if(bln==9){
			bln="sept";
			}
		else if(bln==10){
			bln="Okt";
			}
		else if(bln==11){
			bln="Nov";
			}
		else if(bln==12){
			bln="Des";
			}
		return bln;	
}

function pass(){

	if($('#period').val()=="2"){
        $('#tgl').show();
        $('#t1').show();
        $('#hari').hide();
   		$('#bulan').hide();
   		$('#tahun').hide();
   }else if($('#period').val()=="1"){
   		$('#hari').show();
   		$('#tgl').hide();
   		$('#bulan').hide();
   		$('#tahun').hide();
   		$('#t1').hide();
   	}else if($('#period').val()=="3"){
   		$('#bulan').show();
   		$('#tgl').hide();
   		$('#hari').hide();
   		$('#tahun').hide();
   		$('#t1').hide();
   	}else if($('#period').val()=="4"){
   		$('#tahun').show();
   		$('#tgl').hide();
   		$('#hari').hide();
   		$('#bulan').hide();
   		$('#t1').hide();
   	}

}




function get(){

	 
	$("select[name=jab]").change(function(){
		    var x = $("select[name=nam]");
		   
		    if($(this).val() == "0") {
		    	 z = "<option value='1'>Semua Nama</option>";
		                $.ajax({
		                  url      : "<?php echo base_url();?>index.php/absensi/getnama1",
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





	</script>