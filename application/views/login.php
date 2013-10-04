<?php include("_header.php"); ?> 
    <div class="container">

      <form class="form-signin" action="<?=site_url("user/logining")?>" method="post" >
        <?php if (isset($UserID)){?>
        <div class="alert alert-success">
        <?="Congrats!Sign up successfully!"?>
        </div>
        <?php }?>
        <h2 class="form-signin-heading">Please sign in</h2>

        <?php if(isset($UserID)){ ?>  
        <input type="text" name="UserID" class="input-block-level" value="<?=htmlspecialchars($UserID)?>" />  
        <?php }else{ ?>  
        <input type="text" name="UserID" class="input-block-level" placeholder="UserID">
        <?php } ?>    

        
        <input type="password" name="password" class="input-block-level" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url("/js/jquery.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-transition.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-alert.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-modal.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-dropdown.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-scrollspy.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-tab.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-tooltip.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-popover.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-button.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-collapse.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-carousel.js")?>"></script>
    <script src="<?=base_url("/js/bootstrap-typeahead.js")?>"></script>
<?php include("_footer.php"); ?> 
