

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
													<a href="<?php echo base_url();?>profil">
														<i class="green ace-icon fa fa-user bigger-120"></i>
														Profil
													</a>
												</li>

												
											</ul>
											<div class="tab-content" >

												<div id="home" class="tab-pane fade in active">
													
													<div class="col-md-12" style="padding:4em;" >
													
															<div class="div-merk">
															 
															 	<form method="post" role="form" class="form-horizontal form-merk"   id="form-merk" action="<?php base_url()?>user/insertuser">
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID User  </label>
																	<div class="col-sm-6">
																		<input type="text"onkeyup="checked_data(this.value)"  id="id_user" name="id_user" placeholder="Masukkan ID User" class="form-control" required />
																		<span id="check_data"></span>
																	</div>
																</div>
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama  </label>
																	<div class="col-sm-6">
																		<input type="text" id="nama" name="nama" placeholder="Masukkan Nama" class="form-control" required/>
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Jabatan </label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="jabatan" name="jabatan" data-placeholder="Pilih Jabatan" onchange="addRow()" required>
																			<option value=""> -- Pilih Jabatan -- </option>
																			<?php if ($jabat):?>
												                            <?php foreach ($jabat as $val):?>
												                            <option value="<?=$val->id_jabatan?>"><?=$val->jabatan_name?></option>
												                            <?php endforeach;?>
												                            <?php endif;?>
																		</select>
																	</div>
																</div>
																
																<div id="target"></div>
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NIP </label>
																	<div class="col-sm-6">
																		<input type="text" id="nip" name="nip" placeholder="Masukkan Nomer Induk Pegawai" class="form-control" required />
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NIP </label>
																	<div class="col-sm-6">
																		<input type="text" id="nik" name="nik" placeholder="Masukkan NIK" class="form-control" required />
																	</div>
																</div>
																

															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1">Tempat, Tanggal Lahir</label>
																	<div class="col-sm-3">
																		<input type="text" id="tempat" name="tempat" placeholder="Masukkan Tempat" class="form-control" required />
																	</div>
																	<div class="col-sm-3 col-xs-3 ">
																		<div class="input-group">
																			<input class="form-control date-picker" id="tanggal" name="tanggal" type="text" data-date-format="dd-mm-yyyy" required />
																			<span class="input-group-addon">
																				<i class="fa fa-calendar bigger-110"></i>
																			</span>
																		</div>
																	</div>
																</div>
															 	
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> No Telp </label>
																	<div class="col-sm-6">
																		<input type="text" id="telp" name="telp" placeholder="Masukkan NO Telpon" class="form-control" required />
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
															
															 	<form method="post" action="<?php base_url();?>user/remove_checked">
															 		
															 	 <table id="user" class="display" cellspacing="0"  width="100%">
											                        <thead>
											                        <tr class="">
											                            <td >
											                            </td>
											                            <td >No</td>
											                            <td >Nama</td>
											                            <td >Jabatan</td> 
											                            <td >NIP</td>
											                            <td >NIK</td> 
											                            <td >TTL</td> 
											                            <td >Created At</td> 
											                            <td >Aksi</td> 
											                            
											                        </tr>
											                        </thead>
											                        <tbody> 
											                      <?php if ($viewUser):?>
												                            <?php foreach ($viewUser as $val):?>
												                            	<?php if($val->jabatan==1){
											                            	$on="getAdmin";
											                            	}else{
											                            		$on="getUserr";
											                            		}?>
											                        <tr  class="">
											                            <td><label class="pos-rel">
																				<input type="checkbox" class="ace" name="msg[]" value="<?=$val->id?>"/>
																				<span class="lbl"></span>
																			</label>
																		</td>
											                            <td><?php echo $no++;?></td>
											                           	<td><?=$val->nama_lengkap?></td>
											                            <td><?=$val->jabatan_name?></td>
											                           <td><?=$val->nip?></td>
											                           <td><?=$val->nik?></td>
											                           <td><?=$val->tmpt_lahir?>(<?=$val->tgl_lahir?>)</td>
											                            <td><?=$val->created_at?></td>
											                            <td>
											                            

											                            <a href="#" onclick="<?=$on?>('<?=$val->id_user?>')" title="Klik Untuk Edit"><span class="ace-icon fa fa-pencil"></span></a> | <a href="#" onclick="if(confirm('lanjutkan proses hapus data?')){ hapusData(<?=$val->id?>) }">  <span class="ace-icon fa fa-trash"></span></a>	</td>
											                           
											                            
											                        </tr>
											                        <?php endforeach;?>
												                            <?php endif;?>
											                        </tbody>
											                    </table>
											                    <br>
											                    <button class="btn btn-danger" type="submit" id="save"  style="float:righ">
																			<i class="ace-icon fa fa-trash bigger-110"></i>
																			Delete checked
																		</button>
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

$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});

$(document).ready(function() {
	$("#user").dataTable( {
          	"sScrollY": "300px",
           "sScrollX": "100%",
           
           "bScrollCollapse": true
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

function checked_data(val) {
    if($('#id_user').val() != ""){
      $.ajax({
        'url'       : '<?php echo base_url("index.php/user/checkData");?>',
        'dataType'  : 'json',
        'type'      : 'POST',
        'data'      : { "id_user" : val },
        'success'   : function(data) {
          if(data != ""){
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
  function getUserr(id)
  {    
    var url = "<?=site_url('user/changeuser/"+id+"')?>";
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
	
function addRow() {
	
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
     }else{
     		$('#idusername').remove();
     		$('#idpassword').remove();
 		}
	}



</script>