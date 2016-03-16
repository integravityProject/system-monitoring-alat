

<div style="margin-left:16%;margin-top:4em" class="main-content">
				<div class="main-content-inner">
					<div class="page-content ">
						<div class="row" >
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
									<div class="row" style="margin-bottom:1%;margin-top:3%">
									<div class="col-sm-12">
										<div class="tabbable">
											<ul class="nav nav-tabs" id="myTab">
												<li >
													<a  href="<?php base_url();?>dashboard">
														<i class="green ace-icon fa fa-home bigger-120"></i>
														Beranda 
													</a>
												</li>

												<li class="active">
													<a  href="<?php base_url();?>profile">
														<i class="green ace-icon fa fa-user bigger-120"></i>
														Profil
													</a>
												</li>

												
											</ul>

											<div style="margin-bottom:1%" class="tab-content">
												<div id="home" class="tab-pane fade in ">
													
												</div>
												
												<div  id="profil" class="tab-pane fade in active">

													
													
													<h2>Ubah Profil</h2>
													
													<?php 
																if($this->session->flashdata('msg')==null){?>
																	
																	<div style="width:100%;background-color:red;color:white;"><center>
																<span><h3>
																	<?= $this->session->flashdata('eror');?>
																	</h3></span>
																</center>
																</div>
																<?php }else{ ?>
																	<div style="width:100%;background-color:green;color:white;"><center>
																<span><h3>
																	<?= $this->session->flashdata('msg');?>
																	</h3></span>
																</center>
																</div>
																<?php }?>
														</br>
													<form class="form-horizontal" action="<?php base_url();?>profile/ubah/<?=$user->id_user?>"  method="post">
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Lengkap </label>
																	<div class="col-sm-9">
																		<input type="text" id="nama" name="nama" placeholder="Nama Lengkap" value="<?=$user->nama_lengkap?>" class="col-xs-10 col-sm-5" />

																	</div>
																</div>

																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username	 </label>
																	<div class="col-sm-9">
																		<input type="text" id="user" name="user" placeholder="Username" value="<?=$user->username?>"  class="col-xs-10 col-sm-5" />
																		<div class="col-sm-4">
																		<a  class="muncul" onclick="pass()">Ubah Password </a>
																		</div>
																	</div>
																</div>
																<div style="display:none" id="target" class="form-group" >
																	<div class="form-group">
																			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password Lama</label>
																			<div class="col-sm-9">
																			<div class="lama">
																				<input type="Password" id="passlama" name="passlama"  placeholder="Password Lama" class="col-xs-10 col-sm-5"  />
																			</div>
																		
																		</div>
																		</div>
																		<div class="form-group">
																			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password Baru </label>
																			<div class="col-sm-9">
																			<div class="baru">
																				<input type="Password" id="passbaru" name="passbaru" placeholder="Password Baru" class="col-xs-10 col-sm-5" />
																			</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Konfirmasi Password Baru </label>
																			<div class="col-sm-9">
																			<div class="konfirm">
																				<input type="Password" id="konfirm" name="konfirm" placeholder="Konfirmasi Password" class="col-xs-10 col-sm-5"   />
																				</div>
																				<div class="col-sm-4">
																				<b><span  id="check_data"></span></b>
																				</div>
																			</div>
																		</div>
																		
																</div>

																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
																	<div class="col-sm-6">
																		<button id="save" class="btn btn-default" type="submit">
																			<i class="ace-icon fa fa-save bigger-110"></i>
																			Simpan
																		</button>

																	</div>	
																</div>
															 	</form>
															 	



										 		 
												
											</div>
										
									</div><!-- /.col -->
	
								</div><!-- /.row -->


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
		</div>



<script type="text/javascript">


	$(document).ready(function(){
	

	});

	function cek(){

		$("#konfirm").keyup(function(){
		$data = $("#passbaru").val();
		$data1 = $("#konfirm").val();
		if($data==$data1)
		{
			$("#check_data").text('Password Cocok');
			$("#check_data").css('color','green');	
		}else{
			$("#check_data").text('Password Tidak Cocok');
			$("#check_data").css('color','red');

		}
		});
	}

	function pass(){
		
        $('#target').show();
    	$('.lama').replaceWith('<input type="Password" id="passlama" name="passlama"  placeholder="Password Lama" class="col-xs-10 col-sm-5"  required/>');
		$('.baru').replaceWith('<input type="Password" id="passbaru" name="passbaru" placeholder="Password Baru" class="col-xs-10 col-sm-5" required/>');
		$('.konfirm').replaceWith('<input type="Password" id="konfirm" name="konfirm" onmouseup="cek()" placeholder="Konfirmasi Password" class="col-xs-10 col-sm-5" required/>');
	
	}



</script>								

