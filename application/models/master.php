<?php

class master extends CI_Model {
	public function getMac() {
		// $_IP_SERVER  = $_SERVER['SERVER_ADDR'];
		// $_IP_ADDRESS = $_SERVER['REMOTE_ADDR'];
		// if ($_IP_ADDRESS == $_IP_SERVER) {
		// 	ob_start();
		// 	system('ipconfig /all');

		// 	$mycom = ob_get_contents();
		// 	ob_clean();

		// 	$findme = "Physical";
		// 	$pmac   = strpos($mycom, $findme);


		// 	$mac = substr($mycom, ($pmac+36), 17);

		// 	if (trim($mac) == "DHCP Enabled") {
		// 		$mycom = substr($mycom, ($pmac+36));
		// 		$pmac  = strpos($mycom, $findme);
		// 		$mac   = trim(substr($mycom, ($pmac+36), 17));
		// 	}
		// } else {
		// 	$_PERINTAH = "arp -a $_IP_ADDRESS";
		// 	ob_start();
		// 	system($_PERINTAH);
		// 	$_HASIL = ob_get_contents();
		// 	ob_clean();
		// 	$_PECAH        = strstr($_HASIL, $_IP_ADDRESS);
		// 	$_PECAH_STRING = explode($_IP_ADDRESS, str_replace(" ", "", $_PECAH));
		// 	$_HASIL        = substr($_PECAH_STRING[1], 0, 17);

		// }
		$_HASIL = 1;
		return $_HASIL;
	}
	 
	public function title() {
		$title = "SUPER STORE";
		return $title;
	}
	public function getNamaLevel($id) {
		$this->db->select('*');
		$this->db->from('master_jabatan');
		$this->db->where('id', $id);
		return $this->db->get()->row()->nama_jabatan;
	}
	 
	 

	public function autoKode($x = "", $table) {
		$q    = $this->db->query("select MAX(id) as code_max from ".$table."");
		$code = "";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $cd) {
				$tmp  = ((int) $cd->code_max)+1;
				$code = $tmp;
			}
		} else {
			$code = "01";
		}
		return "".$x."/".date('Ymd')."/".$code;
	}

	public function getMenu($id) {
		$q = $this->db->query("SELECT * FROM t_user_menu TU LEFT JOIN master_menu TM ON TU.idMenu = TM.id WHERE idUser = '".$id."'");
		return $q->result();
	}
	public function getJabatan() {
		$this->db->select('*');
		return $this->db->from('master_jabatan')->get()->result();

	}
	 
	public function insertHistory($data) {
		return $this->db->insert('t_history', $data);
	}

	public function getCurrentUser() {
		$iduser = $this->session->userdata('session')['id_user'];
		$this->db->select('ul.* ,d.nama_lengkap');
		$this->db->from('user_login ul');
		$this->db->join('user d', 'ul.id_user = d.id_user', 'left');
		$this->db->where('ul.id_user', $iduser);
		return $this->db->get()->row();
	}

	public function getUser() {
		$session_data = $this->session->userdata('session');
		$iduser = $this->session->userdata('session')['id'];
		$this->db->where('id', $iduser);
		return $this->db->get('user_login')->row();
	}
 

	public function menu($parent = 0) {
		$x            = "";
		$session_data = $this->session->userdata('session');
		// $count_query  = $this->db->select('COUNT(*) AS COUNT, parent');
		// $count_query  = $this->db->from('master_menu');
		// $count_query  = $this->db->group_by('parent');
		// $count_query  = $this->db->get()->result();

		// $query = $this->db->select('T.id, T.link, T.nama_menu, T.icon, T.parent, xx.Count');
		// $query = $this->db->from('t_user_menu TU');
		// $query = $this->db->join('master_menu T', 'TU.idMenu = T.id', 'left');
		// $query = $this->db->join($this->counmaster_menu(), 'left outer');
		// $query = $this->db->where('idUser', $session_data['ID']);
		// $query = $this->db->where('T.parent', $parent);
		// $query = $this->db->order_by('T.sort', 'asc');
		// $query = $this->db->get()->result();

		$query = $this->db->query("SELECT
									  T.`id`,
									  T.`link`,
									  T.`nama_menu`,
									  T.`icon`,
									  T.`parent`,
									  T.`sort`,
									  T.`class`,
									  T.`warna`,
									  xx.`Count`
									FROM
									  t_user_menu TU
									  LEFT JOIN master_menu T
										ON TU.`idMenu` = T.`id`
									  LEFT OUTER JOIN
										(SELECT
										  COUNT(*) AS COUNT,
										  parent
										FROM
										  master_menu
										GROUP BY parent) xx
										ON T.`id` = xx.`parent`
									WHERE idUser = '".$session_data['ID']."'
									  AND T.`parent` = '".$parent."' ORDER BY T.sort asc");

		foreach ($query->result_array() as $data) {
			 
				if ($data['parent'] != 0) {
					$x .= "  
				<div class='".$data['class']." ".$data['warna']."' data-role='tile' onclick='window.location=\"".base_url($data['link'])."\"'>
                    <div class='tile-content iconic'>
                        <span class='icon ".$data['icon']."'></span>
                    </div>
                    <div class='tile-label'>".$data['nama_menu']."</div>
                </div> 
            ";
				} else { 
					$x  .="<div class='tile-group four'>
							 <span class='tile-group-title'>".$data['nama_menu']."</span>
							<div class='tile-container'>
							".$this->menu($data['id'])."
							</div></div>
					";
				} 
		}
		
		return $x;
	}

	public function menukonten($parent = 0) {
		$x            = "";
		$session_data = $this->session->userdata('session');
		// $count_query  = $this->db->select('COUNT(*) AS COUNT, parent');
		// $count_query  = $this->db->from('master_menu');
		// $count_query  = $this->db->group_by('parent');
		// $count_query  = $this->db->get()->result();

		// $query = $this->db->select('T.id, T.link, T.nama_menu, T.icon, T.parent, xx.Count');
		// $query = $this->db->from('t_user_menu TU');
		// $query = $this->db->join('master_menu T', 'TU.idMenu = T.id', 'left');
		// $query = $this->db->join($this->counmaster_menu(), 'left outer');
		// $query = $this->db->where('idUser', $session_data['ID']);
		// $query = $this->db->where('T.parent', $parent);
		// $query = $this->db->order_by('T.sort', 'asc');
		// $query = $this->db->get()->result();

		$query = $this->db->query("SELECT
									  T.`id`,
									  T.`link`,
									  T.`nama_menu`,
									  T.`icon`,
									  T.`parent`,
									  T.`sort`,
									  T.`class`,
									  T.`warna`,
									  xx.`Count`
									FROM
									  t_user_menu TU
									  LEFT JOIN master_menu T
										ON TU.`idMenu` = T.`id`
									  LEFT OUTER JOIN
										(SELECT
										  COUNT(*) AS COUNT,
										  parent
										FROM
										  master_menu
										GROUP BY parent) xx
										ON T.`id` = xx.`parent`
									WHERE idUser = '".$session_data['ID']."'
									  AND T.`parent` = '".$parent."' ORDER BY T.sort asc");

		foreach ($query->result_array() as $data) {
			 
				if ($data['parent'] != 0) {
					$x .= "   
                			<li><a href='".base_url($data['link'])."'>".$data['nama_menu']."</a></li>
		                    <li class='divider'></li> 

            ";
				} else { 
					$x  .="
					<ul class='app-bar-menu'>
					 <li>
		                <a href='' class='dropdown-toggle'>".$data['nama_menu']."</a>
		                <ul class='d-menu' data-role='dropdown'>
		                    ".$this->menukonten($data['id'])."
		                </ul>
		             </li>
					</ul>
					";
				} 
		}
		
		return $x;
	}

	public function menuToEdit($parent = 0, $idU) {
		$x            = "";
		$session_data = $this->session->userdata('session');
		$query        = $this->db->query("SELECT
									  T.`id`,
									  T.`link`,
									  T.`nama_menu`,
									  T.icon,
									  xx.Count
									FROM
									  master_menu T
									  LEFT OUTER JOIN
										(SELECT
										  COUNT(*) AS COUNT,
										  parent
										FROM
										  master_menu
										GROUP BY parent) xx
										ON T.`id` = xx.parent
									WHERE T.`parent` = '".$parent."' ORDER BY T.sort ASC");
		//echo "<ul style='list-style-type: none;'>";

		$arr_menu = array();
		foreach ($query->result_array() as $data) {

			$query   = $this->db->query("SELECT * FROM t_user_menu TUM LEFT JOIN master_menu TM ON TUM.idMenu = TM.id WHERE TUM.idMenu = '".$data['id']."' AND TUM.idUser = '".$idU."'");
			$theData = $query->row();

			$dataId = $query->num_rows > 0?$theData->id:"";

			$arr_menu[] = $data['id'];
			if (in_array($dataId, $arr_menu)) {
				$isChecked = "checked='checked'";
			} else {
				$isChecked = "";
			}

			if ($data['Count'] == 0 || $data['Count'] == NULL) {
				$x .= "<li>
						<input type='checkbox' name='menu[]' value='".$data['id']."' $isChecked>
						<i class='" .$data['nama_menu']."'></i>
						<input type='hidden' name='hideMenu[]' value='".$data['id']."'/>
						".$data['nama_menu']."
					  </li>";
			} else {
				$x .= "<li>
						<input type='checkbox' name='menu[]' value='".$data['id']."' $isChecked>
						<i class='" .$data['nama_menu']."'></i>
						".$data['nama_menu']."
						<ul>
							<input type='hidden' name='hideMenu[]' value='".$data['id']."'/>
							".$this->menuToEdit($data['id'], $idU)."
				  		</ul>
					  </li>";

			}
		}
		//echo "</ul>";
		return $x;
	}
 
}

?>