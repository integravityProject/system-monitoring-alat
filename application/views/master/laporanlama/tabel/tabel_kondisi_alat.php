<div class="div-mark">
						 	<form class="form-horizontal"  method="post">
						 	
							<div class="space-4"></div>	
							
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
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kode Unit Parkir </label>
								<div class="col-sm-6">
									<select class="chosen-select form-control col-xs-10 col-sm-5" id="form-field-select-3" data-placeholder="Pilih Jabatan">
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
									<button class="btn btn-info" type="submit">
										<i class="ace-icon fa fa-check bigger-110"></i>
										Tampilkan
									</button>
								</div>
							</div>
						 	<div class="form-group">
								<label class="col-sm-10 control-label no-padding-right" for="form-field-1"> </label>
								<div class="col-sm-2">
								<center>
									<button class="btn " type="submit">
										<i class="ace-icon fa fa-print bigger-110"></i>
										Cetak
									</button>
								</center>
								</div>
							</div>
						 	
						 	</form>
						 </div>
						 <div class="row">
						 <center>
						 	<h3>Laporan Kondisi Alat</br> Parkir Meter</br> Kota Padang</h3>
						 </center>
						 </div>
						 <div class="row">
						 	
						 	  <table id="tabel" class="table table-striped table-bordered"  >
		                        <thead>
		                        <tr>
		                            <td class="sortable-column sort-asc" style="width: 100px">No</td>
		                            <td class="sortable-column">Kode Unit	Parkir</td>
		                            <td class="sortable-column">Kode Unit Parkir</td>
		                            <td class="sortable-column">Lokasi</td> 
		                            <td class="sortable-column">Tanggal</td>
		                            <td class="sortable-column">Kondisi</td> 
		                            
		                        </tr>
		                        </thead>
		                        <tbody> 
		                      
		                        <tr>
		                            <td></td>
		                            <td></td>
		                           	<td></td>
		                            <td></td>
		                           <td></td>
		                           <td><i class="ace-icon fa fa-check"></i></td>
		                            
		                        </tr>
		                        </tbody>
		                    </table>


						 </div>

<script  language="javascript">




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


$(document).ready(function() {

$("#tabel").dataTable( {
          	"sScrollY": "200px",
           "sScrollX": "100%",
           
           "bScrollCollapse": true
 } );
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