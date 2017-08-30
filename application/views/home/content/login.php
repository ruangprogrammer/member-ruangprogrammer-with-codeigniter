<form id="defaultForm"  class="form-signin" method="POST" action="">
    <div class="form-signin-heading text-center" style="color: red;"> Login dengan Facebook
    </div>
    <div class="login-wrap">
        <div class="form-group">

            <?php
            if(!empty($authUrl)) {
                echo '<a href="'.$authUrl.'"><img src="'.base_url().'assets/images/flogin.png" alt=""/></a>';
            }
            ?>
    <!--     <a href=""><img src="http://download.ruangprogrammer.com/CodeIgniter-3.1.5/assets/images/flogin.png" alt=""/>
-->
            <!--  <button type="submit" class="btn btn-lg btn-login btn-block"><i class="fa fa-facebook" aria-hidden="true"></i>
                LOGIN
            </button>-->
        </div>
        <div class="registration">
        </div>
        <label class="checkbox">
                            <span class="pull-right">
                      </span>
        </label>
        <div class="registration">
            Copyright © <?php echo date('Y'); ?> <h4><a href="http://www.ruangprogrammer.com">www.ruangprogrammer.com</a></h4>
        </div>
    </div>
</form>