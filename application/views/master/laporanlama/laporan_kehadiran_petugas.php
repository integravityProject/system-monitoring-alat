
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
													<center><h2><?=$title?></h2></center>
													<div class="col-md-12" style="padding:4em;" >
													
														
															 
							 	<form method="post" role="form" class="form-horizontal form-merk"   id="form-merk" action="<?php base_url()?>laporan_kp">
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

				 <center><h2>Laporan Kehadiran Petugas </br>Parkir Meter </br> Kota Padang </br>
				 <div id="t1" ><span id="tanggal"></span> - <span id="tanggal2"></span></div></h2></center>

				 <div  class="row ">
				 	<div style="text-align:right;margin-bottom:20px" class="col-sm-0">
							<button class="btn btn-success" type="submit">
								<i class="ace-icon glyphicon glyphicon-print bigger-110"></i>
								Cetak 
							</button>

							
						</div>

				 	<table id="tabelcetak" class="display table table-bordered" >
				 	<div class="info"></div>
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
<link rel="stylesheet" type="text/css" href="<?php echoase_url();?>/assets/plugIn/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables2.min.css"/>
<script type="text/javascript" src="<?php echo base_url();?>/assets/plugIn/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>

<script language="javascript">

$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});


$("#tabels").dataTable( {
          	"sScrollY": "200px",
           "sScrollX": "100%",
           "bScrollCollapse": true,

 } );

$(document).ready(function() {
 //var table = $('#tabel').dataTable();
 $("#tabelcetak").dataTable( {
          	 dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' )
                        .prepend(
                            '<img src="" style="position:absolute; top:0; left:0;" />'
                        );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                }
            }
        ]
 } ); 
});

function tg1(){
		var t1 =$('#tgl1').val();
		var t2 =$('#tgl2').val();
		var th=

		$('#tanggal').text(""+t1+"");
		$('#tanggal2').text(""+t2+"");

}

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





	</script>