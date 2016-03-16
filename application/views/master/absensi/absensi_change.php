						<form role="form" class="form-horizontal form-merk" method="post">
						<input type="hidden" id="id" name="id" value="<?=$data[0]->id?>">
			 	<div  id="jabat" class="jabat">
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Jabatan</label>
					<div class="col-sm-6" data-role="select">
						<select class="chosen-select form-control col-xs-10 col-sm-5" id="jab" name="jab" data-placeholder="Pilih Jabatan" required>
							<option value=""> -- Pilih Jabatan -- </option>
							<?php if($jabatan):
								foreach ($teknisi as $tek):
								foreach ($jabatan as $val):?>
								
								<?php if($data[0]->id_petugas==$tek->id_user){
									$jab=$tek->jabatan;?>
								
							<option value="<?=$val->id_jabatan?>"<?php if($val->id_jabatan==$jab){echo "selected='selected'";}?>)?><?=$val->jabatan_name?></option>
							<?php }?>	
							<?php endforeach;?>
							<?php endforeach;?>
                            <?php endif;?>
						</select>
					</div>
				</div>
				

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nama</label>
					<div class="col-sm-6" data-role="select">
						<select id="nam" name="nam" class="form-control" required >
                      <option value="">-- Pilih Nama--</option>
                      <?php if($teknisi):
								foreach ($teknisi as $val):?>
							<option value="<?=$val->id_user?>"<?php if($val->id_user==$data[0]->id_petugas){echo "selected='selected'";}?>)?><?=$val->nama_lengkap?></option>
							<?php endforeach;?>
                            <?php endif;?>
                      </select>	
					</div>
				</div>
				</div>

				

			 	<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1">Tanggal</label>
					<div class="col-sm-6 col-xs-6 ">
						<div class="input-group">
							<input class="form-control date-picker" id="tgl" type="text" data-date-format="yyyy-mm-dd" value="<?=$data[0]->tgl?>" required />
							<span class="input-group-addon">
								<i class="fa fa-calendar bigger-110"></i>
							</span>
						</div>
					</div>
				</div>
			 	<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Kehadiran </label>
					<div class="col-sm-6">
						<select class="chosen-select form-control col-xs-6 col-sm-5" id="absen" data-placeholder="Pilih Jabatan" required>
								<option value="<?=$data[0]->absen?>">
								<?php if($data[0]->absen==1){
									echo "Hadir";;
									}else if($data[0]->absen==2){
										echo "Izin";
									}else{
										echo "Bolos";
										} ?>
								</option>
								<option value="1">Hadir</option>
								<option value="2">Izin</option>
								<option value="3">Bolos</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Keterangan </label>
					<div class="col-sm-6">
						<textarea class="form-control" id="ket" name="ket" rows="5"  required><?=$data[0]->keterangan?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
					<div class="col-sm-6">
						<button class="btn btn-info" type="submit">
							<i class="ace-icon fa fa-check bigger-110"></i>
							Edit
						</button>
						<a href="<?php base_url();?>absensi" class="btn btn-danger"  id="save" >
					<i class="ace-icon fa fa-close bigger-110"></i>
					Cancel
				</a>

					</div>
				</div>
			 	
			 	</form>
				<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>

<script>

	$("select[name=jab]").change(function(){
		    var x = $("select[name=nam]");
		    if($(this).val() == "") {
		      x.html("<option>-- Pilih Nama --</option>");
		    }
		    else {
		                z = "<option>-- Pilih Nama --</option>";
		                $.ajax({
		                  url      : "<?php echo base_url();?>index.php/absensi/getnama",
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

	$('.form-merk').submit(function(event){
		event.preventDefault();
		$(this).find("button[type='submit']").prop('disabled',true);
		// POST DATA
		var id = $('#id').val();
		$.ajax({
		type: "POST",
		url: "<?=site_url('absensi/updateabsen/"+id+"')?>",
		dataType:'json',
		data: {
        id_petugas : $("#nam").val(),
        absen : $("#absen").val(),
        tgl : $("#tgl").val(),
        keterangan :$("#ket").val()
      }
		})
		.success(function(data)
		{
		//$.growl.notice({ title: 'Sukses', message: data.msg});
		window.location.replace("absensi");
		});
		return false
		});

					
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
		</script>