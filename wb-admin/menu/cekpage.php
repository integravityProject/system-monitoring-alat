<?php
if(!isset($_GET['page'])){
	$page='';
				$judul="Dashboard";
				$diskripsi="Home Page";
				$nav_dashboard="active open";
				$nav_post="";
				$nav_sub="";
				$nav_comment="";
				$nav_slider="";
				$nav_pengurus="";
				$nav_admin="";	
}else{
switch($_GET['page']) {
			case 'all-post':
				$url='index.php?page=all-post';
				$page='all-post';
				$judul="POST";
				$diskripsi="View All POST";
				$nav_dashboard="";
				$nav_post="active open";
				$nav_comment="";
				$nav_slider="";
				$nav_sub="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'add-post':
				$url='index.php?page=all-post';
				$page='add-post';
				$judul="POST";
				$diskripsi="Add New Post";
				$nav_dashboard="";
				$nav_post="active open";
				$nav_comment="";
				$nav_slider="";
				$nav_sub="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'edit-post':
				$url='index.php?page=all-post';
				$page='edit-post';
				$judul="POST";
				$diskripsi="Editing Post";
				$nav_dashboard="";
				$nav_post="active open";
				$nav_comment="";
				$nav_slider="";
				$nav_sub="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'all-category':
				$url='index.php?page=all-post';
				$page='all-category';
				$judul="POST";
				$diskripsi="View all Category";
				$nav_dashboard="";
				$nav_post="active open";
				$nav_comment="";
				$nav_slider="";
				$nav_sub="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'add-category':
				$page='add-category';
				$judul="POST";
				$diskripsi="Add New Category";
				$nav_dashboard="";
				$nav_post="active open";
				$nav_comment="";
				$nav_slider="";
				$nav_sub="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'edit-category':
				$page='edit-category';
				$judul="POST";
				$diskripsi="Edit Category";
				$nav_dashboard="";
				$nav_post="active open";
				$nav_comment="";
				$nav_slider="";
				$nav_sub="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'all-comment':
				$url='index.php?page=all-comment';
				$page='all-comment';
				$judul="COMMENT";
				$diskripsi="View All Comment";
				$nav_dashboard="";
				$nav_post="";
				$nav_comment="active open";
				$nav_slider="";
				$nav_sub="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'add-comment':
				$url='index.php?page=all-comment';
				$page='add-comment';
				$judul="COMMENT";
				$diskripsi="Add New Comment";
				$nav_dashboard="";
				$nav_post="";
				$nav_comment="active open";
				$nav_slider="";
				$nav_sub="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'edit-comment':
				$url='index.php?page=all-comment';
				$page='edit-comment';
				$judul="COMMENT";
				$diskripsi="Editing Comment";
				$nav_dashboard="";
				$nav_post="";
				$nav_comment="active open";
				$nav_slider="";
				$nav_sub="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'all-slider':
				$url='index.php?page=all-slider';
				$page='all-slider';
				$judul="SLIDER";
				$diskripsi="View All Slider";
				$nav_dashboard="";
				$nav_post="";
				$nav_comment="";
				$nav_slider="active open";
				$nav_sub="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'add-slider':
				$url='index.php?page=all-slider';
				$page='add-slider';
				$judul="SLIDER";
				$diskripsi="Add New Slider";
				$nav_dashboard="";
				$nav_post="";
				$nav_comment="";
				$nav_slider="active open";
				$nav_sub="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'edit-slider':
				$url='index.php?page=all-slider';
				$page='edit-slider';
				$judul="SLIDER";
				$diskripsi="Editing Slider";
				$nav_dashboard="";
				$nav_post="";
				$nav_comment="";
				$nav_sub="";
				$nav_slider="active open";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'all-subsistem':
				$url='index.php?page=all-subsistem';
				$page='all-subsistem';
				$judul="SUB SYSTEM";
				$diskripsi="View All Sub Sistem";
				$nav_dashboard="";
				$nav_post="";
				$nav_comment="";
				$nav_slider="";
				$nav_sub="active open";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'add-subsistem':
				$url='index.php?page=all-subsistem';
				$page='add-subsistem';
				$judul="SLIDER";
				$diskripsi="Add New SubSystem";
				$nav_dashboard="";
				$nav_post="";
				$nav_comment="";
				$nav_slider="";
				$nav_sub="active open";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'edit-subsistem':
				$url='index.php?page=all-subsistem';
				$page='edit-subsistem';
				$judul="SUB SYSTEM";
				$diskripsi="Editing Sub System";
				$nav_dashboard="";
				$nav_post="";
				$nav_comment="";
				$nav_slider="";
				$nav_sub="active open";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'all-pengurus':
				$url='index.php?page=all-pengurus';
				$page='all-pengurus';
				$judul="PENGURUS";
				$diskripsi="View All Pengurus";
				$nav_dashboard="";
				$nav_post="";
				$nav_comment="";
				$nav_slider="";
				$nav_sub="";
				$nav_pengurus="active open";
				$nav_admin="";
				break;
			case 'add-pengurus':
				$url='index.php?page=all-pengurus';
				$page='add-pengurus';
				$judul="PENGURUS";
				$diskripsi="Add New Pengurus";
				$nav_dashboard="";
				$nav_post="";
				$nav_sub="";
				$nav_comment="";
				$nav_slider="";
				$nav_pengurus="active open";
				$nav_admin="";
				break;
			case 'edit-pengurus':
				$url='index.php?page=all-pengurus';
				$page='edit-pengurus';
				$judul="PENGURUS";
				$diskripsi="Editing Pengurus";
				$nav_dashboard="";
				$nav_post="";
				$nav_sub="";
				$nav_comment="";
				$nav_slider="";
				$nav_pengurus="active open";
				$nav_admin="";
				break;	
			case 'all-admin':
				$url='index.php?page=all-admin';
				$page='all-admin';
				$judul="ADMIN";
				$diskripsi="View All Admin";
				$nav_dashboard="";
				$nav_post="";
				$nav_sub="";
				$nav_comment="";
				$nav_slider="";
				$nav_pengurus="";
				$nav_admin="active open";
				break;
			case 'add-admin':
				$url='index.php?page=all-admin';
				$page='add-admin';
				$judul="ADMIN";
				$diskripsi="Add New Admin";
				$nav_dashboard="";
				$nav_sub="";
				$nav_post="";
				$nav_comment="";
				$nav_slider="";
				$nav_pengurus="";
				$nav_admin="active open";
				break;
			case 'edit-admin':
				$url='index.php?page=all-admin';
				$page='edit-admin';
				$judul="ADMIN";
				$diskripsi="Editing Admin";
				$nav_dashboard="";
				$nav_post="";
				$nav_sub="";
				$nav_comment="";
				$nav_slider="";
				$nav_pengurus="";
				$nav_admin="active open";
				break;	
			case 'all-download':
				$url='index.php?page=all-download';
				$page='all-download';
				$judul="DOWNLOAD";
				$nav_sub="";
				$diskripsi="View all Download";
				$nav_dashboard="";
				$nav_post="";
				$nav_comment="";
				$nav_slider="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'add-download':
				$url='index.php?page=all-download';
				$page='add-download';
				$judul="DOWNLOAD";
				$nav_sub="";
				$diskripsi="Add New Download";
				$nav_dashboard="";
				$nav_post="";
				$nav_comment="";
				$nav_slider="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			
			case 'edit-download':
				$url='index.php?page=all-download';
				$page='edit-download';
				$judul="DOWNLOAD";
				$diskripsi="edit Download";
				$nav_dashboard="";
				$nav_post="";
				$nav_sub="";
				$nav_comment="";
				$nav_slider="";
				$nav_pengurus="";
				$nav_admin="active open";
				break;

			default:
				$page='';
				$judul="Dashboard";
				$diskripsi="Home Page";
				$nav_dashboard="active open";
				$nav_post="";
				$nav_sub="";
				$nav_comment="";
				$nav_slider="";
				$nav_pengurus="";
				$nav_admin="";
				break;
		}
}	
		?>