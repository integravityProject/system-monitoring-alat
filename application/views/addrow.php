function addRow() {
    var div = document.createElement('div');

    div.className = 'row';

    div.innerHTML = '<div class="form-group">\
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password Lama</label>\
					<div class="col-sm-9">\
						<input type="Password" id="passlama" name="passlama"  placeholder="Password Lama" class="col-xs-10 col-sm-5"  required/>\
				<div class="col-sm-4">\
				</div>\
				</div>\
				</div>\
				<div class="form-group">\
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password Baru </label>\
					<div class="col-sm-9">\
						<input type="Password" id="passbaru" name="passbaru" placeholder="Password Baru" class="col-xs-10 col-sm-5" required/>\
					</div>\
				</div>\
				<div class="form-group">\
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Konfirmasi Password Baru </label>\
					<div class="col-sm-9">\
						<input type="Password" id="konfirm" name="konfirm" placeholder="Konfirmasi Password" class="col-xs-10 col-sm-5"  required />\
					</div>\
				</div>\
				<span id="check_data"></span>';

     document.getElementById('target').appendChild(div);
     $( "a" ).remove( ".muncul" );
	}
