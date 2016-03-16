<body class="login-box">
<script type="text/javascript">
  $(".login-box").backstretch([
      "<?php echo base_url();?>/assets/img/slide/deneb.jpg"
    , "<?php echo base_url();?>/assets/img/slide/altair.jpg"
    , "<?php echo base_url();?>/assets/img/slide/vega.jpg"
  ], {duration: 3000, fade: 750});
  function notice(msg)
  {
    $.growl.error({ title: 'Gagal', message: msg});
  }
  $(document).ready(function() {
<?php if ($this->session->flashdata('gagal')) {$pesan = $this->session->flashdata('gagal');?>
	                              notice('<?php echo $pesan;?>');
	<?php }?>
  });
</script>
  <div class="login-box">
    <div class="login-logo">
      <a style="color:white" href="#"><b>CellPro</b>Distributor</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo site_url('login_auth');?>" method="post">
        <div class="form-group has-feedback">
          <input type="text" name='username' id="username" placeholder="Username" class="form-control" required>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

        </div>
        <!-- /.login-box-body -->
      </div>
<script>
$(document).ready(function(){
  $("#username").focus();
});
</script>
      <!-- /.login-box -->