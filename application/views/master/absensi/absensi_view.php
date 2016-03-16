
<div class="main-content" style="margin-top:6em;">
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
											<center><h2><?=$title?></h2></center></br>
												<div id="home" class="tab-pane fade in active">
	
														<div class="div-merk ">
															 	<form role="form" class="form-horizontal form-merk" method="post">
															 	<div  id="jabat" class="jabat">
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Jabatan</label>
																	<div class="col-sm-6" data-role="select">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="jab" name="jab" data-placeholder="Pilih Jabatan" required>
																			<option value=""> -- Pilih Jabatan -- </option>
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
										                              <option value="">-- Pilih Nama--</option>
										                              </select>	
																	</div>
																</div>
																</div>

																

															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1">Tanggal</label>
																	<div class="col-sm-6 col-xs-6 ">
																		<div class="input-group">
																			<input class="form-control date-picker" id="tgl" type="text" data-date-format="yyyy-mm-dd" value="<?php echo date('Y-m-d')?>" required/>
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
																				<option value="1">Hadir</option>
																				<option value="2">Izin</option>
																				<option value="3">Bolos</option>
																		</select>
																	</div>
																</div>

																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Keterangan </label>
																	<div class="col-sm-6">
																		<textarea class="form-control" id="ket" name="ket" rows="5" required></textarea>
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
																	<div class="col-sm-6">
																		<button class="btn btn-info" type="submit">
																			<i class="ace-icon fa fa-check bigger-110"></i>
																			Submit
																		</button>

																	</div>
																</div>
															 	
															 	</form>
															 </div>
															 <div style="margin-left:5%;margin-right:5%" class="row">
															 	
															 	 
															 	    <table id="absensi" class="display"  >
											                        <thead>
											                        <tr>
											                            <td class="sortable-column sort-asc" style="width: 20px">No</td>
											                            <td class="sortable-column">Jabatan</td>
											                            <td class="sortable-column">Nama</td>
											                            <td class="sortable-column">Tanggal</td> 
											                            <td class="sortable-column">Kehadiran</td>
											                            <td class="sortable-column">Keterangan</td> 
											                            <td class="sortable-column" style="width: 80px" >Aksi</td>
											                            
											                        </tr>
											                        </thead>
											                        <tbody> 
											                      <?php $i = $this->uri->segment(4)+1;?>
											                      <?php if($absensi): ?>
											                        <?php foreach($absensi as $val): ?>  
											                        <tr>
											                        	<td><?php echo $no++;?></td>
											                            <td><?=$val->jabatan_name?></td>
											                            <td><?=$val->nama_lengkap?></td>
											                            <td><?=$val->tgl?></td>
											                            <td>
											                            <?php if($val->absen==1){
											                            echo "Hadir";
											                        	}else if ($val->absen==2) {
											                        	echo "Izin";
											                        	}else{
											                        	echo "bolos";
											                        	}
											                            ?>
											                            </td> 
											                            <td><?=$val->keterangan?></td>
											                             
											                            <td class="align-center">
											                            <a href="#" onclick="getDataAbsen('<?=$val->id?>')" title="Klik Untuk Edit">
											                            <span class="ace-icon fa fa-pencil"></span></a> | <a onclick="if(confirm('lanjutkan proses hapus data?')){ hapusData(<?=$val->id?>) }">  <span class="ace-icon fa fa-trash"></span></a>
											                            </td> 
											                            
											                        </tr>
											                      <?php $i++; ?>
											                        <?php endforeach; ?>
											                      <?php endif; ?>
											                        </tbody>
											                    </table>


															 </div>

													</div>

													</div>
												</div>

												
												<div style="clear:both"></div>
											</div>
										
									</div><!-- /.col -->

								</div><!-- /.row -->



							


								<script type="text/javascript">
									var $path_assets = "dist";//this will be used in gritter alerts containing images
								</script>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<script language="javascript">

 function hapusData(id)
  {
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('absensi/hapusData/"+id+"')?>",
      dataType: "json"
    })
    .complete(function(data){
      //$.growl.notice({ title: 'Sukses', message: data.msg});      
      window.location.replace("<?php echo base_url('absensi')?>");
    })
  }

$(document).ready(function() {

	$("#absensi").dataTable( {
           scrollY:        "400px"
 } );
	

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
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('index.php/absensi/insertabsensi')?>",
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
     // $.growl.notice({ title: 'Sukses', message: data.msg});      
      window.location.replace("<?= site_url('absensi')?>");
    });    
    return false
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



function autohide() {
	//document.getElementById("target").innerHTML += "<input type='button' onclick='reset()' value='Reset fields' />";

    //$('#username').hide(); 
    //$('#password').hide(); 
            if($('#jabatan').val() == 1) {
           $('#idusername').show(); 
           $('#idpassword').show(); 
        } else {
            $('#idusername').hide(); 
            $('#idpassword').hide(); 
        } 
    
}




  function getDataAbsen(id)
  {    
    var url = "<?=site_url('absensi/changeabsensi/"+id+"')?>";
    $.get(url, function(data){
      $(".div-merk").load(url);
    });
  }
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