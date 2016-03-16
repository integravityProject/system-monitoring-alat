 																	<form method="post" role="form" class="form-horizontal form-merkk"   id="form-merk"  action="<?php base_url()?>user/updateuseradmin/<?=$data[0]->id_user?>">
 																<input type="hidden" id="id_userlama" value="<?=$data[0]->id_user?>">
 																<input type="hidden" id="id" value="<?=$data[0]->id?>">
 																<?php print_r($this->muser->checkadmin($data[0]->id_user));?>
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID User  </label>
																	<div class="col-sm-6">
																		<input type="text" id="id_user2" name="id_user2" placeholder="Masukkan ID User" class="form-control" value="<?=$data[0]->id_user?>"  required onkeyup="checked_data2(this.value)" />
																		<span id="check_data"></span>
																	</div>
																</div>
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama </label>
																	<div class="col-sm-6">
																		<input type="text" id="nama" name="nama" placeholder="Masukkan Nama" class="form-control" value="<?=$data[0]->nama_lengkap?>" required/>
																	</div>
																</div>
																
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Jabatan </label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="jabatan" name="jabatan" data-placeholder="Pilih Jabatan" onchange="addRow2('<?php if($data[0]->jabatan==1){ echo $data[0]->username;}else{ echo "";}?>')" required>
																			<option value=""> -- Pilih Jabatan -- </option>
																			<?php if ($jabat):?>
												                            <?php foreach ($jabat as $val):?>
												                            <?php if($val->id_jabatan== $data[0]->jabatan){ $selected= "selected";}else{ $selected="";} ?>
												                            <option value="<?=$val->id_jabatan?>" <?=$selected?>><?=$val->jabatan_name?></option>
												                            <?php endforeach;?>
												                            <?php endif;?>
																		</select>
																	</div>
																</div>
																<div id="target"></div>
																<?php if($data[0]->jabatan==1){?>

																<div class="form-group" id="idusername">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>
																	<div class="col-sm-6">
																		<input type="text" id="username" name="username" placeholder="Masukkan Username" value="<?=$data[0]->username?>"  class="form-control" required/>
																	</div>
																</div>

																<div class="form-group" id="idpassword" >
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password</label>
																	<div class="col-sm-6">
																		<input type="text" id="password" name="password" placeholder="Masukkan Password Baru"	 class="form-control" />
																	</div>
																</div>
																<?php }?>
																<div class="space-4"></div>	
																<div id="target">
																	

																</div>
																			
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NIP </label>
																	<div class="col-sm-6">
																		<input type="text" id="nip" name="nip" placeholder="Masukkan NIP" value="<?=$data[0]->nip?>" class="form-control" required />
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NIK </label>
																	<div class="col-sm-6">
																		<input type="text" id="nik" name="nik" placeholder="Masukkan NIK" value="<?=$data[0]->nik?>" class="form-control" required />
																	</div>
																</div>
																

															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1">Tempat, Tanggal Lahir</label>
																	<div class="col-sm-3">
																		<input type="text" id="tempat" name="tempat" placeholder="" value="<?=$data[0]->tmpt_lahir?>"class="form-control" required />
																	</div>
																	<div class="col-sm-3 col-xs-3 ">
																		<div class="input-group">
																			<input class="form-control date-picker" id="tanggal" name="tanggal" value="<?=$data[0]->tgl_lahir?>" type="text" data-date-format="dd-mm-yyyy" required />
																			<span class="input-group-addon">
																				<i class="fa fa-calendar bigger-110"></i>
																			</span>
																		</div>
																	</div>
																</div>
															 	
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> No Telp </label>
																	<div class="col-sm-6">
																		<input type="text" id="telp" name="telp" value="<?=$data[0]->telp?>" placeholder="Masukkan NO Telpon" class="form-control" required />
																	</div>
																</div>

																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
																	<div class="col-sm-6">
																		<button class="btn btn-info" type="submit" id="save" >
																			<i class="ace-icon fa fa-check bigger-110"></i>
																			Edit
																		</button>
																		<a href="<?php base_url();?>user" class="btn btn-danger"  id="cancel" >
																			<i class="ace-icon fa fa-check bigger-110"></i>
																			Cancel
																		</a>
																	</div>
																</div>
																</form>
																<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>

															<script>


				//datepicker plugin
				//link
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});


function checked_data2(val) {
    if($('#id_user2').val() != ""){
      $.ajax({
        'url'       : '<?php echo base_url("index.php/user/checkDataEdit");?>',
        'dataType'  : 'json',
        'type'      : 'POST',
        'data'      : { "id_user" : val },
        'success'   : function(data) {
        if(data != "" && data != $('#id_userlama').val()){
            $('#check_data').text('ID User sudah ada!');
            $('#check_data').css('color','red');
            $('#save').attr('disabled','disabled');
          } else if(data == "") {
            $('#check_data').text('ID User tersedia!');
            $('#check_data').css('color','blue');
            $('#save').removeAttr('disabled');
          }
        }
      });
    } else {
      $('#check_data').text('');
    }
 }

	

function addRow2(usern) {
	
	if($('#jabatan').val() == 1) {

    	var div = document.createElement('div');

    	div.className = 'row';

    	div.innerHTML = '<div class="form-group" id="idusername">\
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>\
							<div class="col-sm-6">\
								<input type="text" id="username" name="username" placeholder="Masukkan Username" class="form-control" required/>\
							</div>\
					</div>\
					<div class="form-group" id="idpassword" >\
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password</label>\
						<div class="col-sm-6">\
							<input type="text" id="password" name="password" placeholder="Masukkan Password" class="form-control" required />\
						</div>\
					</div>';
			
     	document.getElementById("target").appendChild(div);
     	document.getElementById("username").value=usern;
     }else{
     		$('#idusername').remove();
     		$('#idpassword').remove();
 		}
	}

</script>