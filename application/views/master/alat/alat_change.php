	<form method="post" role="form" class="form-horizontal form-merk"   id="form-merk" action="<?php base_url()?>alat/updatealat">
																<input type="hidden" name="id_alatlama" id="id_alatlama" value="<?=$data[0]->id_alat?>">
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID Alat</label>
																	<div class="col-sm-6">
																		<input type="text"onkeyup="checked_alat(this.value)"  id="id_alat" name="id_alat" placeholder="Masukkan ID User" class="form-control" value="<?=$data[0]->id_alat?>" required />
																		<span id="check_alat"></span>
																	</div>
																</div>
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Alat </label>
																	<div class="col-sm-6">
																		<input type="text" id="nama_alat" value="<?=$data[0]->nama_alat?>" name="nama_alat" placeholder="Masukkan Nama Alat" class="form-control" required/>
																	</div>
																</div>
															 	
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Keterangan </label>
																	<div class="col-sm-6">
																		<input type="text" id="keterangan" value="<?=$data[0]->lokasi?>" name="keterangan" placeholder="Masukkan Lokasi Alat" class="form-control" required/>
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
															  <script>
															  	function checked_alat(val) {
															  		var u =$('#id_alatlama').val();
																    if($('#id_alat').val() != ""){
																      $.ajax({
																        'url'       : '<?php echo base_url("index.php/alat/checkData");?>',
																        'dataType'  : 'json',
																        'type'      : 'POST',
																        'data'      : { "id_alat" : val },
																        'success'   : function(data) {
																          if(data != "" && data != $('#id_alatlama').val()){
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

															  </script>