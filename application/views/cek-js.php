  <script type="text/javascript">
  function verifThis(id,b,st)
		  {
		    $.ajax({
		      type: "POST",
		      url: "<?php echo base_url();?>pengecekan/insertdata/"+id+"/<?php echo $this->session->userdata('session')['id_user'];?>/<?=$tahunKe?>/"+b+"/"+st+"/<?=$id_alat?>/<?=$id_petugas?>",
		      dataType: 'json'
		    })
		    .success(function(data){
		      //$.growl.notice({ title: 'Sukses', message: data.msg});      
		    })
		    if(st==3){
		    	window.location.replace("<?php echo base_url();?>pengecekan/bulanan/<?=$tahunKe?>/<?=$id_alat?>/<?=$id_petugas?>");	
		    }else if(st==4){
		    	window.location.replace("<?php echo base_url();?>pengecekan/triwulan/<?=$tahunKe?>/<?=$id_alat?>/<?=$id_petugas?>");	
		    }else{
		    	window.location.replace("<?php echo base_url();?>pengecekan/semester/<?=$tahunKe?>/<?=$id_alat?>/<?=$id_petugas?>");	
		    }
		    
		  }	
		function cancelVerif(id,b,st)
		  {
		    $.ajax({
		      type: "POST",
		      url: "<?php  echo base_url();?>pengecekan/changedata/"+id+"/<?=$tahunKe?>/"+b+"/"+st+"/<?=$id_alat?>/<?=$id_petugas?>",
		      dataType: 'json'
		    })
		    .success(function(data){
		      //$.growl.notice({ title: 'Sukses', message: data.msg});      
		    })
		     if(st==3){
		    	window.location.replace("<?php echo base_url();?>pengecekan/bulanan/<?=$tahunKe?>/<?=$id_alat?>/<?=$id_petugas?>");	
		    }else if(st==4){
		    	window.location.replace("<?php echo base_url();?>pengecekan/triwulan/<?=$tahunKe?>/<?=$id_alat?>/<?=$id_petugas?>");	
		    }else{
		    	window.location.replace("<?php echo base_url();?>pengecekan/semester/<?=$tahunKe?>/<?=$id_alat?>/<?=$id_petugas?>");	
		    }
		  }	
		function verifMinggu(id,tgl,b)
		  {
		    $.ajax({
		      type: "POST",
		      url: "<?php echo base_url();?>pengecekan/insertmingguan/"+id+"/<?php echo $this->session->userdata('session')['id_user'];?>/"+tgl+"/<?=$tahunKe?>/"+b+"/<?=$id_alat?>/<?=$id_petugas?>",
		      dataType: 'json'
		    })
		    .success(function(data){
		      //$.growl.notice({ title: 'Sukses', message: data.msg});      
			// 
		    })
		    window.location.replace("<?php echo base_url();?>pengecekan/mingguan/<?php echo $tahunKe;?>/"+b+"/<?=$id_alat?>/<?=$id_petugas?>");
		  }	
		function cancelMinggu(id,tgl,b)
		  {
		    $.ajax({
		      type: "POST",
		      url: "<?php  echo base_url();?>pengecekan/changemingguan/"+id+"/"+tgl+"/<?=$tahunKe?>/"+b+"/<?=$id_alat?>/<?=$id_petugas?>",
		      dataType: 'json'
		    })
		    .success(function(data){
		      //$.growl.notice({ title: 'Sukses', message: data.msg});      
		      
		    })
		    window.location.replace("<?php echo base_url();?>pengecekan/mingguan/<?php echo $tahunKe;?>/"+b+"/<?=$id_alat?>/<?=$id_petugas?>");
		  }	
			function cancelHari(id,tgl,b)
		  {
		    $.ajax({
		      type: "POST",
		      url: "<?php  echo base_url();?>pengecekan/changedatahari/"+id+"/<?=$tahunKe?>/"+b+"/"+tgl+"/<?=$id_alat?>/<?=$id_petugas?>",
		      dataType: 'json'
		    })
		    .success(function(data){
		      //$.growl.notice({ title: 'Sukses', message: data.msg});      
		      window.location.replace("<?php echo base_url();?>pengecekan/<?=$tahunKe?>/"+b+"/<?=$id_alat?>/<?=$id_petugas?>");
		    })
		    window.location.replace("<?php echo base_url();?>pengecekan/harian/<?=$tahunKe?>/"+b+"/<?=$id_alat?>/<?=$id_petugas?>");
		  }	
		function verifHari(id,tgl,b)
		  {
		    $.ajax({
		      type: "POST",
		      url: "<?php echo base_url();?>pengecekan/insertdatahari/"+id+"/<?php echo $this->session->userdata('session')['id_user'];?>/<?=$tahunKe?>/"+b+"/"+tgl+"/<?=$id_alat?>/<?=$id_petugas?>",
		      dataType: 'json'
		    })
		    .success(function(data){
		      //$.growl.notice({ title: 'Sukses', message: data.msg});      
			window.location.replace("<?php echo base_url();?>pengecekan/<?php echo $tahunKe;?>/"+b+"/<?=$id_alat?>/<?=$id_petugas?>");
		    })
		    window.location.replace("<?php echo base_url();?>pengecekan/harian/<?=$tahunKe?>/"+b+"/<?=$id_alat?>/<?=$id_petugas?>");
		  }	
</script>