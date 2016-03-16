

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
													<center><h2><?=$title?></h2></center>
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
			
