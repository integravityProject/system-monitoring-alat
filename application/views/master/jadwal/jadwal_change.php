<form method="post" role="form" class="form-horizontal form-merk"   id="form-merk" action="<?php base_url()?>penjadwalan/updatejadwal/<?=$data[0]->id_kegiatan?>">
															 	
																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Periode </label>
																	<div class="col-sm-6">
																		<select class="chosen-select form-control col-xs-10 col-sm-5" id="periode" name="periode" data-placeholder="Pilih Periode" required>
												                            <option <?php if($data[0]->id_periode_maintenance==1){echo "selected";}?> value="1">Harian</option>
												                            <option <?php if($data[0]->id_periode_maintenance==2){echo "selected";}?> value="2">Mingguan</option>
												                            <option <?php if($data[0]->id_periode_maintenance==3){echo "selected";}?> value="3">Bulanan</option>
												                            <option <?php if($data[0]->id_periode_maintenance==4){echo "selected";}?> value="4">Triwulan</option>
												                            <option <?php if($data[0]->id_periode_maintenance==5){echo "selected";}?> value="5">Semester</option>
																		</select>
																	</div>
																</div>
																
																
															 	
															 	<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Keterangan </label>
																	<div class="col-sm-6">
																		<textarea class="form-control" id="keterangan" name="keterangan" rows="5" placeholder="Masukkan Keterangan"><?=$data[0]->kegiatan;?></textarea>
																	</div>
																</div>

																<div class="form-group">
																	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
																	<div class="col-sm-6">
																		<button class="btn btn-info" type="submit" id="save" >
																			<i class="ace-icon fa fa-check bigger-110"></i>
																			Submit
																		</button>
																		<a href="<?php base_url();?>penjadwalan" class="btn btn-danger"  id="save" >
																			<i class="ace-icon fa fa-close bigger-110"></i>
																			Cancel
																		</a>
																	</div>
																</div>

															 	
															  </form>	