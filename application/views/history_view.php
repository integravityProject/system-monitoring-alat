
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
	
															 <div style="margin-left:5%;margin-right:5%" class="row">
															 	
															 	  <center><h3>History</h3></center>
																<hr>
															

															 	    <table id="aa" class="display" width="100%" cellspacing="0"  >
											                        <thead>
											                        <tr>
											                            <td class="sortable-column sort-asc" style="width: 20px">No</td>
											                            <td class="sortable-column" style="width: 100px">Waktu</td>
											                            <td class="sortable-column" style="width: 50px">User</td>
											                            <td class="sortable-column" style="width: 100px">Aksi</td>
											                            <td class="sortable-column" style="width: 400px">Keterangan</td> 
											                            
											                            
											                        </tr>
											                        </thead>
											                        <tbody> 
											                      <?php $i = $this->uri->segment(4)+1;?>
											                      <?php if($viewHistory): ?>
											                        <?php foreach($viewHistory as $val): ?>  
											                        <tr>
											                        	<td><?php echo $no++;?></td>
											                        	<td><?=$val->updated_at?></td>
											                            <td><?=$val->id_user?></td>
											                            <td>
											                            <?php if($val->aksi==1){
											                            echo "Insert";
											                        	}else if ($val->aksi==2) {
											                        	echo "Update";
											                        	}else if($val->aksi==3){
											                        	echo "Delete";
											                        	}else if($val->aksi==4){
											                        	echo "Login";
											                        	}
											                            ?>
											                            </td> 
											                            <td><?=$val->keterangan?></td>
											                            
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
										$("#aa").dataTable();
								</script>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<script language="javascript">

</script>