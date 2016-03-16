				<div class="page-header">
							<h1>
								Judul
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Form Input Add new
								</small>
							</h1>
						</div><!-- /.page-header -->
				<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Text Field </label>
										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Full Length </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" placeholder="Text Field" class="form-control" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password Field </label>

										<div class="col-sm-9">
											<input type="password" id="form-field-2" placeholder="Password" class="col-xs-10 col-sm-5" />
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle">Inline help text</span>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Readonly field </label>

										<div class="col-sm-9">
											<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="This text field is readonly!" />
											<span class="help-inline col-xs-12 col-sm-7">
												<label class="middle">
													<input class="ace" type="checkbox" id="id-disable-check" />
													<span class="lbl"> Disable it!</span>
												</label>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Text Areas</label>
										<div class="col-sm-9">
											<div class="clearfix">
													<textarea rows="8" id="form-field-11" class="autosize-transition form-control"></textarea>
											</div>
											
										</div>
									</div>
									
									

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Tooltip and help button</label>

										<div class="col-sm-9">
											<input data-rel="tooltip" type="text" id="form-field-6" placeholder="Tooltip on hover" title="Hello Tooltip!" data-placement="bottom" />
											<span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="More details." title="Popover on hover">?</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Tag input</label>
										<div class="col-sm-9">
											<div class="inline">
												<input type="text" name="tags" id="form-field-tags" value="Tag Input Control" placeholder="Enter tags ..." />
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="date-timepicker1">Date/Time Picker</label>
										<div class="col-sm-4">
														<div class="input-group">
															<input id="date-timepicker1" type="text" class="form-control" />
															<span class="input-group-addon">
																<i class="fa fa-clock-o bigger-110"></i>
															</span>
														</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Chosen</label>
										<div class="col-sm-4">
															<select class="chosen-select form-control col-sm-4" id="form-field-select-3" data-placeholder="Choose a State...">
																<option value="">  </option>
																<option value="AL">Alabama</option>
																<option value="AK">Alaska</option>
																<option value="AZ">Arizona</option>
																<option value="AR">Arkansas</option>
															</select>
											</div>
									</div>									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Chosen</label>
										<div class="col-sm-4">
														<select multiple="" class="chosen-select form-control" id="form-field-select-4" data-placeholder="Choose a State...">
																<option value="AL">Alabama</option>
																<option value="AK">Alaska</option>
																<option value="AZ">Arizona</option>
																<option value="AR">Arkansas</option>
																<option value="CA">California</option>
																<option value="CO">Colorado</option>
																<option value="CT">Connecticut</option>
															</select>
										</div>
									</div>									
									<div class="form-group">
													<label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Upload Foto</label>
															<div class="col-xs-6">
																<input  type="file" id="id-input-file-3" />
														<label>
															<input type="checkbox" name="file-format" id="id-file-format" class="ace" checked="checked" />
															<span class="lbl"> Allow only images</span>
														</label>
															</div>


									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Status</label>
										<div class="col-sm-4">
													<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-empty" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button">
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