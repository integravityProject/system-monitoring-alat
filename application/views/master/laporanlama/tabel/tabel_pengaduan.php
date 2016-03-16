<div class="div-mark">
						 	<form class="form-horizontal"  method="post">
						 	

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Pengaduan </label>
								<div class="col-sm-6">
									<select class="chosen-select form-control col-xs-10 col-sm-5" id="form-field-select-3" data-placeholder="Jenis Pengaduan">
									
										<option value="1">Kerusakan</option>
										<option value="2">Maintenance</option>
										<option value="3">Pelayanan</option>
									</select>
								</div>
							</div>

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

						 <center><h2>Laporan Pengaduan </br>Parkir Meter </br> Kota Padang</h2></center>

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
				                        <th >Jenis Pengaduan</th>
				                        <th >Pengadu</th>
				                        <th >Aduan</th>
				                        <th >Kode unit Parkir</th>
				                        <th >Lokasi</th>
				                        <th >Tanggal Akun </th>
				                    </tr>
				                </thead>
				                </table>
						 </div>

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

$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});


</script>