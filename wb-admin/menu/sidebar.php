<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="<?php echo $nav_dashboard;?>">
						<a href="index.php?page=">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="<?php echo $nav_post;?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bullhorn "></i>
							<span class="menu-text">
								Post
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="index.php?page=all-post">
									<i class="menu-icon fa fa-caret-right"></i>
									All Post
								</a>
								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="index.php?page=add-post">
									<i class="menu-icon fa fa-caret-right"></i>
									Add New Post
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="index.php?page=all-category">
									<i class="menu-icon fa fa-caret-right"></i>
									All Category
								</a>
								
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="index.php?page=add-category">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Category
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li>

					<li class="<?php echo $nav_comment;?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa 	fa-comments"></i>
							<span class="menu-text"> Comment </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="index.php?page=all-comment">
									<i class="menu-icon fa fa-caret-right"></i>
									All Comment
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="<?php echo $nav_slider;?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-camera-retro "></i>
							<span class="menu-text"> Slider </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="active">
								<a href="index.php?page=all-slider">
									<i class="menu-icon fa fa-caret-right"></i>
									All Slider
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="index.php?page=add-slider">
									<i class="menu-icon fa fa-caret-right"></i>
									Add New Slider
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li>
					<li class="<?php echo $nav_sub;?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-download "></i>
							<span class="menu-text"> E-bulletin  </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="active">
								<a href="index.php?page=all-download">
									<i class="menu-icon fa fa-caret-right"></i>
									All Bulletin
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="index.php?page=add-download">
									<i class="menu-icon fa fa-caret-right"></i>
									Add New Bulletin
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li>
					<li class="<?php echo $nav_sub;?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bookmark "></i>
							<span class="menu-text"> SubSystem  </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="active">
								<a href="index.php?page=all-subsistem">
									<i class="menu-icon fa fa-caret-right"></i>
									All SubSystem
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="index.php?page=add-subsistem">
									<i class="menu-icon fa fa-caret-right"></i>
									Add New SubSystem
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li>

					<li class="<?php echo $nav_pengurus;?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa 	fa-users"></i>
							<span class="menu-text"> Pengurus </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="active">
								<a href="index.php?page=all-pengurus">
									<i class="menu-icon fa fa-caret-right"></i>
									All Pengurus
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="index.php?page=add-pengurus">
									<i class="menu-icon fa fa-caret-right"></i>
									Add New Pengurus
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="<?php echo $nav_user;?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa 	fa-lock"></i>
							<span class="menu-text"> Admin </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="active">
								<a href="index.php?page=all-admin">
									<i class="menu-icon fa fa-caret-right"></i>
									All User
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="index.php?page=add-admin">
									<i class="menu-icon fa fa-caret-right"></i>
									Add New User
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>
