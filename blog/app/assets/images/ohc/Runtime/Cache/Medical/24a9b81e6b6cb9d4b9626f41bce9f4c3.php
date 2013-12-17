<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/jquery-1.3.2.min.js"></script>
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/url.js"></script>
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/login.js"></script>
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/placetest.js"></script>
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/search.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/public.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/login.css" media="all" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/signUpNav.css" media="all" /> 
        <script>
            $(document).ready(function() {
                buttomClick("#loginBut", "signon", "signoff");
            });
            function loginDisplay() {
                $('#main_mask').remove();
                $("#signup").trigger("click");
            }
        </script>
        <!--[if lt IE 9]> 
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
        <![endif]--> 
    </head>
    <body>
        <div class="main_mask" id="main_mask">
            <div id ="seachNav"  class="loginBoxShdow " style="*position: absolute;*top:30px; *left:450px;">
                <div class="user_login_close" onclick="$('#main_mask').remove();"></div>
                <div style="padding-top: 15px; padding-left: 55px;"> <?php echo ($message); ?></div>
                <?php if($state == 0 ): ?><div id="loginBut" class="loginBut signoff" onclick="loginDisplay()"  style=""></div><?php endif; ?>
            </div>
        </div>
    </body>
</html>