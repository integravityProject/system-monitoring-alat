<div class="footer">


				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Monitoring System</span>
							Application &copy; 2015-2016
						</span>

						&nbsp; &nbsp;
						
					</div>
				</div>

	

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		
		<script src="<?php echo base_url();?>assets/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets/assets/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.easypiechart.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/spin.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>
		<script src="<?php echo base_url();?>assets/js/dataTables.tableTools.js"></script>	
		
		
		
		

		
		
		<!-- ace scripts -->
		<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>
		
        
		<!-- ace scripts -->
		<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
		//fungsi untuk pengecekan harian
$(document).ready(function() {
	$("#pengecekan").dataTable( {
          	"sScrollY": "200px",
           "sScrollX": "100%",
           
           "bScrollCollapse": true
 } );
	$("#history").dataTable( {
          	"sScrollY": "600px",
           "sScrollX": "100%",
           
           "bScrollCollapse": true
 } );
});
		function getData()
		  {    
		  	//alert($('#jenis_laporan').val());
		  	if($('#jenis_laporan').val()==1){
		  		window.location.replace("<?php echo base_url('laporan/laporan_pa')?>");
		  	}else if($('#jenis_laporan').val()==2){
		  		window.location.replace("<?php echo base_url('laporan/laporan_ka')?>");
		  	}else if($('#jenis_laporan').val()==3){
		  		window.location.replace("<?php echo base_url('laporan/laporan_p')?>");
		  	}else if($('#jenis_laporan').val()==4){
		  		window.location.replace("<?php echo base_url('laporan/laporan_m')?>");
		  	}else {
		  		window.location.replace("<?php echo base_url('laporan/laporan_kp')?>");
		  		
		  	}
		    
		    $.get(url, function(data){
		      $(".div-merk").load(url);
		    });
		  }
		
		  function getLink()
  {  
  		var bulan = $('#bulan').val();
  		var tahun = $('#tahun').val();
  		var alat = $('#alat').val();
  		var id_user = $('#petugas').val();
  	if($('#periodep').val()==1){
  		window.location.replace("<?=site_url('pengecekan/harian/"+tahun+"/"+bulan+"/"+alat+"/"+id_user+"')?>");
  	}else if($('#periodep').val()==2){
  		window.location.replace("<?=site_url('pengecekan/mingguan/"+tahun+"/"+bulan+"/"+alat+"/"+id_user+"')?>");	
  	}else if($('#periodep').val()==3){
  		window.location.replace("<?=site_url('pengecekan/bulanan/"+tahun+"/"+alat+"/"+id_user+"')?>");	
  	}else if($('#periodep').val()==4){
  		window.location.replace("<?=site_url('pengecekan/triwulan/"+tahun+"/"+alat+"/"+id_user+"')?>");	
  	}else if($('#periodep').val()==5){
  		window.location.replace("<?=site_url('pengecekan/semester/"+tahun+"/"+alat+"/"+id_user+"')?>");	
  	}
  }	
  ( function($) {
        $(document).ready( function() { alert("jquery functioning");  } );
    } ) ( jQuery );


function getData2(){
	if($('#periodep').val()!=1&&$('#periodep').val()!=2){
		$('#bulanlabel').css("visibility", "hidden");
		$('#bulan').css("visibility", "hidden");
	}else{
		$('#bulanlabel').css("visibility", "visible");
		$('#bulan').css("visibility", "visible");
	}
}
  
		
	
			jQuery(function($) {

				$(function() {
                $("#provinsi").dataTable();;
            });
				

					$('#menu a').click(function() {
						var url = $(this).attr('href');
						$('#container').load(url);
						return false;
					});
				});

				$(document).ready(function() {
				   	$(".muncul").click(function()
					{
						$("#target").show();
						});
				 			});
		
				$(function() {
                $("#provinsi").dataTable();;
                
            });
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
			
			
			
					$('#chosen-multiple-style .btn').on('click', function(e){
						var target = $(this).find('input[type=radio]');
						var which = parseInt(target.val());
						if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
						 else $('#form-field-select-4').removeClass('tag-input-style');
					});
				
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
			
			
				
			
				//datepicker plugin
				//link
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) tableTools_obj.fnSelect(row);
						else tableTools_obj.fnDeselect(row);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(!this.checked) tableTools_obj.fnSelect(row);
					else tableTools_obj.fnDeselect($(this).closest('tr').get(0));
				});
				
			
				
				
					$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			

			
			
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$('#date-timepicker1').datetimepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
			
				
				
				
				
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('.modal-form').on('shown.bs.modal', function () {
					if(!ace.vars['touch']) {
						$(this).find('.chosen-container').each(function(){
							$(this).find('a:first-child').css('width' , '210px');
							$(this).find('.chosen-drop').css('width' , '210px');
							$(this).find('.chosen-search input').css('width' , '200px');
						});
					}
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					$('textarea[class*=autosize]').trigger('autosize.destroy');
					$('.limiterBox,.autosizejs').remove();
					$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
				});
			
			});

			 $(function(){
			    $("#example").dataTable();
			  })
		</script>

			</div>