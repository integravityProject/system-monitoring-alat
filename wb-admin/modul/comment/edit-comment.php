<?php
include_once("../class/komentar.php");
extract($objkomentar->viewKomentarbyId($_GET['id']));
?>
				<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="index.php?page=all-comment" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Masukkan Nama Kategori" name="fnama" class="col-xs-10 col-sm-5" <?php echo "value='".$nama."'";?> disabled />
											<input type="hidden" name="id_komentar" value="<?php echo $id_komentar;?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Your Comment</label>
										<div class="col-sm-9">
											<div class="clearfix">
													<textarea rows="8" id="form-field-11" class="autosize-transition form-control" name="fkomentar"><?php echo "$komentar";?></textarea>
											</div>
											
										</div>
									</div>

									<div class="space-4"></div>
								
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" name="save-edit" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>
								</form>
							</div><!-- /.col -->
						</div><!-- /.row -->

