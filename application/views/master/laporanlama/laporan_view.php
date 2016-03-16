

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
																<div class="div-merk">
																	
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
			

<script language="javascript">


$(document).ready(function() {


	

$("#tabel").dataTable( {
            "sScrollY": "200px",
           "sScrollX": "100%",
           
           "bScrollCollapse": true
 } );

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

});


 function hapusData(id)
  {
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('user/hapusData/"+id+"')?>",
      dataType: 'json'
    })
    .success(function(data){
      //$.growl.notice({ title: 'Sukses', message: data.msg});      
      window.location.replace("<?php echo base_url('user')?>");
    })
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


   $(document).ready( function () {
    var tabel = $('#provinsi').DataTable({
      scrollY:        "500px",
      scrollX:        "100%",
      "fnInitComplete": function() {
        this.fnAdjustColumnSizing(true);
      }      
    });    
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
<script type="text/javascript">
	


</script>