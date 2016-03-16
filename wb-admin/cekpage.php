switch ($_GET['page']) {
			case 'all-post':
				$page='post';
				$judul="POST";
				$diskripsi="View All POST";
				$nav_dashboard="";
				$nav_post="active open";
				$nav_comment="";
				$nav_slider="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'add-post':
				$page='add-post	';
				$judul="POST";
				$diskripsi="View All POST";
				$nav_dashboard="";
				$nav_post="active open";
				$nav_comment="";
				$nav_slider="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'category':
				$page='add-category';
				$judul="POST";
				$diskripsi="View all Category";
				$nav_dashboard="";
				$nav_post="active open";
				$nav_comment="";
				$nav_slider="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			case 'add-category':
				$page='add-category';
				$judul="POST";
				$diskripsi="View All POST";
				$nav_dashboard="";
				$nav_post="active open";
				$nav_comment="";
				$nav_slider="";
				$nav_pengurus="";
				$nav_admin="";
				break;
			default:
				$page='';
				$judul="Dashboard";
				$diskripsi="Home Page";
				$nav_dashboard="active open";
				$nav_post="";
				$nav_comment="";
				$nav_slider="";
				$nav_pengurus="";
				$nav_admin="";
				break;
		}	