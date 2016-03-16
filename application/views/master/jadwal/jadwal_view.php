

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
													
													<div class="col-md-12" style="padding:4em;" >
													
															<div class="div-merk">
															 
															 	<form method="post" role="form" class="form-horizontal form-merk"   id="form-merk" action="<?php base_url()?>penjadwalan/insertjadwal">
															 	
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Periode </label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="periode" name="periode" data-placeholder="Pilih Periode" required>
												                            <option value="1">Harian</option>
												                            <option value="2">Mingguan</option>
												                            <option value="3">Bulanan</option>
												                            <option value="4">Triwulan</option>
												                            <option value="5">Semester</option>
																		</select>
																	</div>
																</div>
																
																
															 	
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Keterangan </label>
																	<div class="col-sm-6">
																		<textarea class="form-control" id="keterangan" name="keterangan" rows="5" placeholder="Masukkan Keterangan"></textarea>
																	</div>
																</div>

																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
																	<div class="col-sm-6">
																		<button class="btn btn-info" type="submit" id="save" >
																			<i class="ace-icon fa fa-check bigger-110"></i>
																			Submit
																		</button>
																	</div>
																</div>

															 
															  </form>	
															 </div>
															 <center><h2>Jadwal Harian</h2></center>
															 <table id="jadwal1"  class="display"  cellspacing="0">
															  		<thead>
															  		<tr>
											                        
											                            <td width="20px;">No</td>
											                            <td >Harian</td>
											                             <td  width="80px;" align="center">Aksi</td> 
											                            
											                        </tr>
											                        </thead>
											                        <tbody>
											                           		 	<?php $no=1; foreach ($harian as $val): ?>
											                           				<tr>
											                           				<td><?=$no++;?></td>
											                           				<td ><?= $val->kegiatan ?></td>
											                           				<td  align="center" ><a href="#" onclick="getJadwal('<?=$val->id_kegiatan?>')" title="Klik Untuk Edit"><span class="ace-icon fa fa-pencil"></span></a> | <a href="#" onclick="if(confirm('lanjutkan proses hapus data?')){ 
											                           	hapusData(<?=$val->id_kegiatan?>) }">  <span class="ace-icon fa fa-close"></span></a>
											                           				</td>

											                           				</tr>
											                           			<?php endforeach;?>
											                         </tbody>  			
											                    </table>
											                    <hr>
											                    <br>
											                    <br>
											                    <center><h2>Jadwal Mingguan</h2></center>
															 <table id="jadwal2"  class="display">
															  		<thead>
															  		<tr class="">
											                        
											                            <td width="20px;">No</td>
											                            <td >Mingguan</td>
											                             <td  width="80px;" align="center">Aksi</td> 
											                            
											                        </tr>
											                        </thead>
											                        <tbody>
											                           		 	<?php $no=1; foreach ($mingguan as $val): ?>
											                           				<tr>
											                           				<td><?=$no++;?></td>
											                           				<td ><?= $val->kegiatan ?></td>
											                           				<td  align="center" ><a href="#" onclick="getJadwal('<?=$val->id_kegiatan?>')" title="Klik Untuk Edit"><span class="ace-icon fa fa-pencil"></span></a> | <a href="#" onclick="if(confirm('lanjutkan proses hapus data?')){ 
											                           	hapusData(<?=$val->id_kegiatan?>) }">  <span class="ace-icon fa fa-close"></span></a>
											                           				</td>

											                           				</tr>
											                           			<?php endforeach;?>
											                         </tbody>  			
											                    </table>
											                    <hr>
											                    <br>
											                    <br>
											                    <center><h2>Jadwal Bulanan</h2></center>
											                    <table id="jadwal3"  class="display">
															  		<thead>
															  		<tr class="">
											                        
											                            <td width="20px;">No</td>
											                            <td >Bulanan</td>
											                            <td  width="80px;" align="center">Aksi</td>  
											                            
											                        </tr>
											                        </thead>
											                        <tbody>
											                           		 	<?php $no=1; foreach ($bulanan as $val): ?>
											                           				<tr>
											                           				<td><?=$no++;?></td>
											                           				<td ><?= $val->kegiatan ?></td>
											                           				<td  align="center" ><a href="#" onclick="getJadwal('<?=$val->id_kegiatan?>')" title="Klik Untuk Edit"><span class="ace-icon fa fa-pencil"></span></a> | <a href="#" onclick="if(confirm('lanjutkan proses hapus data?')){ 
											                           	hapusData(<?=$val->id_kegiatan?>) }">  <span class="ace-icon fa fa-close"></span></a>
											                           				</td>

											                           				</tr>
											                           			<?php endforeach;?>
											                         </tbody>  			
											                    </table>
											                    <hr>
											                    <br><br>
											                    <center><h2>Jadwal Triwulan</h2></center>
											                    <table id="jadwal4"  class="display">
															  		<thead>
															  		<tr class="">
											                        
											                            <td width="20px;">No</td>
											                            <td >Triwulan</td>
											                             <td  width="80px;" align="center">Aksi</td> 
											                            
											                        </tr>
											                        </thead>
											                        <tbody>
											                           		 	<?php $no=1; foreach ($triwulan as $val): ?>
											                           				<tr>
											                           				<td><?=$no++;?></td>
											                           				<td ><?= $val->kegiatan ?></td>
											                           				<td  align="center" ><a href="#" onclick="getJadwal('<?=$val->id_kegiatan?>')" title="Klik Untuk Edit"><span class="ace-icon fa fa-pencil"></span></a> | <a href="#" onclick="if(confirm('lanjutkan proses hapus data?')){ 
											                           	hapusData(<?=$val->id_kegiatan?>) }">  <span class="ace-icon fa fa-close"></span></a>
											                           				</td>

											                           				</tr>
											                           			<?php endforeach;?>
											                         </tbody>  			
											                    </table>
											                    <hr>
											                    <br><br>
											                    <center><h2>Jadwal Semesterx</h2></center>
											                     <table id="jadwal5"  class="display">
															  		<thead>
															  		<tr class="">
											                        
											                            <td width="20px;">No</td>
											                            <td >Semester</td>
											                             <td>Aksi</td> 
											                            
											                        </tr>
											                        </thead>
											                        <tbody>
											                           		 	<?php $no=1; foreach ($semester as $val): ?>
											                           				<tr>
											                           				<td><?=$no++;?></td>
											                           				<td ><?= $val->kegiatan ?></td>
											                           				<td  align="center" ><a href="#" onclick="getJadwal('<?=$val->id_kegiatan?>')" title="Klik Untuk Edit"><span class="ace-icon fa fa-pencil"></span></a> | <a href="#" onclick="if(confirm('lanjutkan proses hapus data?')){ 
											                           	hapusData(<?=$val->id_kegiatan?>) }">  <span class="ace-icon fa fa-close"></span></a>
											                           				</td>

											                           				</tr>
											                           			<?php endforeach;?>
											                         </tbody>  			
											                    </table>
											                    

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
			

<script language="javascript">


$(document).ready(function() {

	$("#jadwal1").dataTable( {
          	"sScrollY": "200px"
 } );
	$("#jadwal2").dataTable( {
           	"sScrollY": "200px"
 } );

	$("#jadwal3").dataTable( {
           	"sScrollY": "200px"
 } );

$("#jadwal4").dataTable( {
           	"sScrollY": "200px"
 } );

$("#jadwal5").dataTable( {
           	"sScrollY": "200px"
 } );

   $('#cekall').change(function(){
    var cells = table.cells( ).nodes();
    $( cells ).find(':checkbox').prop('checked', $(this).is(':checked'));
});
    
});

$('#salve').click(function() { 
	$('#form-merk').imValidateForm({
                // the id of the div that will display the validation error(s)
		responseDiv:  'response',
                // always called. will create other functionality in the future
		validate_func: 'validateFields',
                // the validation map to use. located in the validate_json.js file
		validate_map: valMapReg,
                // the form action url
		url:"<?= base_url() . "index.php/user"; ?>",
                // the button is disabled after single click - prevents double-click
		submit_button: 'save'
	});	
	return false;
});




 function hapusData(id)
  {
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('penjadwalan/hapusData/"+id+"')?>",
      dataType: 'json'
    })
    .success(function(data){
      //$.growl.notice({ title: 'Sukses', message: data.msg});      
      window.location.replace("<?php echo base_url('penjadwalan')?>");
    })
  }
  function getJadwal(id)
  {    
    var url = "<?=site_url('penjadwalan/changejadwal/"+id+"')?>";
    $.get(url, function(data){
      $(".div-merk").load(url);
    });
  }
   $(document).ready( function () {
    var tabel = $('#provinsi').DataTable({
      scrollY:        "500px",
      scrollX:        "100%",
      "fnInitComplete": function() {
        this.fnAdjustColumnSizing(true);
      }      
    });    
  });
   function getAdmin(id)
  {    
    var url = "<?=site_url('user/changeuserAdmin/"+id+"')?>";
    $.get(url, function(data){
      $(".div-merk").load(url);
    });
  }
   $(document).ready( function () {
    var tabel = $('#provinsi').DataTable({
      scrollY:        "500px",
      scrollX:        "100%",
      "fnInitComplete": function() {
        this.fnAdjustColumnSizing(true);
      }      
    });    
  });

</script>
<script type="text/javascript">
	



</script>