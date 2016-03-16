<?php
include_once("../class/posting.php");
$statusedit=0;
if(isset($_GET['fid'])){
	extract($objposting->viewPostingbyId($_GET['fid']));
	$statusedit=1;
	$id_kategori2=$id_kategori;
}
?>		
<script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"></script>
				<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="index.php?page=all-post" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Judul </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Masukkan Judul" name="fjudul" class="col-xs-10 col-sm-5" required <?php if($statusedit==1){echo "value='".$judul."'";}?>/>
										</div>
									</div>
									<div class="form-group">
													<label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Upload Cover</label>
															<div class="col-xs-6">
																
																<input  type="file" id="id-input-file-3"  name="ffoto"/> 
														<label>									
															<input type="checkbox" name="file-format" id="id-file-format" class="ace" checked="checked" />
															<span class="lbl"> Allow only images (Must be 600px x 300px)</span>
														</label>
															</div>
															<div class="col-xs-3">
															<?php if($statusedit==1){echo "<img style='width:50%;' src='../".$file."'/>";
															echo "<input type='hidden' name='foto_lama' value='".$file."'/>";
															echo "<input type='hidden' name='fid' value='".$id_posting."'/>";
														}?>
															</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Konten</label>
										<div class="col-sm-9">
											<div class="clearfix">
													<textarea id="TypeHere" rows="8" id="form-field-11" name="fkonten" class="autosize-transition form-control"><?php if($statusedit==1){echo $isi;}?></textarea>
											</div>
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Date Modified</label>
										<div class="col-sm-4">
												<div class="clearfix">
													<input type="text" id="form-field-1" value="<?php echo date('Y-m-d');?>" class="col-xs-10 col-sm-5" />
													<input  type="hidden" name="ftanggal" value="<?php echo date('Y-m-d');?>" />
												</div>
										</div>
									</div>
									<div class="space-4"></div>

									<!--<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Tag input</label>
										<div class="col-sm-9">
											<div class="inline">
												<input type="text" name="tags" id="form-field-tags" value="Tag Input Control" placeholder="Enter tags ..." />
											</div>
										</div>
									</div>-->

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Category</label>
										<div class="col-sm-4">
														<select name="fkategori"  class="chosen-select form-control" data-placeholder="Choose a Category . ..">
																<?php 
																foreach ($objposting->viewKategori() as $value) {
																extract($value);
																?><option <?php if($statusedit==1&&$id_kategori==$id_kategori2){echo "selected='selected'";}?> value=<?php echo "'".$id_kategori."'>".$nama."</option>";
																}?>
															</select>
										</div></div>									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Status</label>
										<div class="col-sm-4">
													<label>
														<input type="checkbox" name="fstatus" class="ace ace-switch ace-switch-4 btn-empty" <?php if($statusedit==1){if($status==1){echo "checked='checked'";}}?> />
														<span class="lbl"></span>
														*aktif jika anda ingin langsung sematkan 
													</label>
												</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" name="<?php if($statusedit==1){echo "edit";}else{echo "save";}?>" type="submit">
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
						<script type="application/x-javascript">
tinymce.init({selector:'#TypeHere'});
</script>