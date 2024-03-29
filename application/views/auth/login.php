
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>Java8s</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?=base_url('assets')?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('assets')?>/css/style.css" rel="stylesheet">
	<link href="<?=base_url('assets')?>/css/vendors.css" rel="stylesheet">
	<link href="<?=base_url('assets')?>/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?=base_url('assets')?>/css/custom.css" rel="stylesheet">

</head>

<body id="login_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
        <div class="container">
            <aside>
                <figure>
                    <a href="<?=base_url()?>"><img src="<?=base_url('assets')?>/img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
                </figure>
                <?php 
                    if(!empty($this->session->userdata('success'))){
                        echo $this->session->userdata('success');
                    }
                ?>
                <?php echo form_open(base_url('auth/login')); ?>
                    <!-- <div class="access_social">
                        <a href="#0" class="social_bt facebook">Login with Facebook</a>
                        <a href="#0" class="social_bt google">Login with Google</a>
                        <a href="#0" class="social_bt linkedin">Login with Linkedin</a>
                    </div>
                    <div class="divider"><span>Or</span></div> -->
                    <div class="form-group">
                        <span class="input">
                        <input class="input_field" type="email" autocomplete="off" name="email">
                            <label class="input_label">
                            <span class="input__label-content">Your email</span>
                        </label>
                        </span>

                        <span class="input">
                        <input class="input_field" type="password" autocomplete="new-password" name="password">
                            <label class="input_label">
                            <span class="input__label-content">Your password</span>
                        </label>
                        </span>
                        <small><a href="<?=base_url('auth/forgot_password')?>">Forgot password?</a></small>
                    </div>
                    <button type="submit"  class="btn_1 rounded full-width add_top_60">Login to Java8s</button>
                    <div class="text-center add_top_10">New to Java8s? <strong><a href="<?=base_url('auth/register')?>">Sign up!</a></strong></div>
                </form>
                <div class="copy">© 2017 Java8s</div>
            </aside>
        </div>
	</div>
	<!-- /login -->
		
	<!-- COMMON SCRIPTS -->
    <script src="<?=base_url('assets')?>/js/jquery-2.2.4.min.js"></script>
    <script src="<?=base_url('assets')?>/js/common_scripts.js"></script>
    <script src="<?=base_url('assets')?>/js/main.js"></script>
	<script src="<?=base_url('assets')?>/assets/validate.js"></script>	
  
</body>
</html>