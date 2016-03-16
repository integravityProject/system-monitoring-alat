

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
															 
															 	<form method="post" role="form" class="form-horizontal form-merk"   id="form-merk" action="<?php base_url()?>alat/insertalat">
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID Alat</label>
																	<div class="col-sm-6">
																		<input type="text"onkeyup="checked_alat(this.value)"  id="id_alat" name="id_alat" placeholder="Masukkan ID User" class="form-control" required />
																		<span id="check_alat"></span>
																	</div>
																</div>
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Alat </label>
																	<div class="col-sm-6">
																		<input type="text" id="nama_alat" name="nama_alat" placeholder="Masukkan Nama Alat" class="form-control" required/>
																	</div>
																</div>
															 	
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lokasi </label>
																	<div class="col-sm-6">
																		<input type="text" id="keterangan" name="keterangan" placeholder="Masukkan Lokasi Alat" class="form-control" required/>
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
															 	 <table id="alat"  class="display"  width="100%" >
											                        <thead>
											                        <tr class="">
											                        
											                            <td width="20px;">No</td>
											                            <td >Nama</td>
											                            <td >Lokasi</td>
											                            <td >Aksi</td> 
											                            
											                        </tr>
											                        </thead>
											                        <tbody> 
											                        <?php if($viewAlat):?>
											                        	<?php foreach ($viewAlat as $val) :?>
											                        <tr  class="">
											                          	<td width="20px;"><?=$no++;?></td>
											                            <td ><?=$val->nama_alat?></td>
											                            <td ><?=$val->lokasi?></td>
											                            <td >
											                            	<a href="#" onclick="getAlat('<?=$val->id_alat?>')" title="Klik Untuk Edit"><span class="ace-icon fa fa-pencil"></span></a> |
											                            	<a href="#" onclick="if(confirm('lanjutkan proses hapus data?')){ hapusData(<?=$val->id_alat?>) }">  <span class="ace-icon fa fa-close">
											                            </td> 
											                        </tr>
											                    		<?php endforeach;?>
											                    	<?php endif;?>
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

function checked_alat(val) {
    if($('#id_alat').val() != ""){
      $.ajax({
        'url'       : '<?php echo base_url("index.php/alat/checkData");?>',
        'dataType'  : 'json',
        'type'      : 'POST',
        'data'      : { "id_alat" : val },
        'success'   : function(data) {
          if(data != ""){
            $('#check_alat').text('ID User sudah ada!');
            $('#check_alat').css('color','red');
            $('#save').attr('disabled','disabled');
          } else if(data == "") {
            $('#check_alat').text('ID User tersedia!');
            $('#check_alat').css('color','blue');
            $('#save').removeAttr('disabled');
          }
        }
      });
    } else {
      $('#check_alat').text('');
    }
 }


 function hapusData(id)
  {
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('alat/hapusData/"+id+"')?>",
      dataType: 'json'
    })
    .success(function(data){
      //$.growl.notice({ title: 'Sukses', message: data.msg});      
      window.location.replace("<?php echo base_url('alat')?>");
    })
  }
  function getAlat(id)
  {    
    var url = "<?=site_url('alat/changealat/"+id+"')?>";
    $.get(url, function(data){
      $(".div-merk").load(url);
    });
  }
   $(document).ready( function () {
    var tabel = $('#alat').DataTable({
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