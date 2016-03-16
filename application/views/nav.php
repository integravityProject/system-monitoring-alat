<body class="no-skin">
		<div id="navbar" class="navbar " style="position: fixed;top: 0;z-index: 1000; display: block;width:100%;">
			<div class="navbar-container" id="navbar-container" style="position: fixed;top: 0;z-index: 1000; display: block;width:100%;">
				<div class="navbar-header pull-left">
					<a href="<?php echo base_url();?>history" class="navbar-icon">
							<i class="fa fa-history"></i>
					</a>
				</div>
				<div  class="navbar-header pull-left" >
					<a href="#" class="navbar-brand" >
							<i class="fa fa-wrench" style="margin-right:10px;"></i>
							Sistem Monitoring Alat
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav" >
					<li class="light-blue" style="margin-right:130px;">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url();?>assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?=$user->nama_lengkap?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close" style="">
								<li>
									<a href="<?php echo base_url();?>profile">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>
								<li>
									<a href="<?php echo base_url();?>history">
										<i class="ace-icon fa fa-history"></i>
										History
									</a>
								</li>

								<li>
									<a href="<?php base_url();?>login/logout">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>