<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/jquery-1.3.2.min.js"></script>
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/url.js"></script>
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/home.js"></script>
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/login.js"></script> 
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/review.js"></script> 
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/placetest.js"></script> 
        <script src="<?php echo ($PUBLIC); ?>/js/review-jsScroll.js" language="javascript" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/css_clear.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/home.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/register.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/footer.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/public.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/review.css" media="all" />
        <link href="<?php echo ($PUBLIC); ?>/css/WuBin-jsScroll.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 9]> 
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
        <![endif]--> 
        <script>
            $(function() {
                $('#searching').val(1);
                $('.rate_value').val(0);
                $('#agree').val(0);
                $("#review_submit").mousedown(function() {
                    $("#review_submit").removeClass("submit_off");
                    $("#review_submit").addClass("submit_on");
                });
                $("#review_submit").mouseup(function() {
                    // alert('b');
                    $("#review_submit").addClass("submit_off");
                    $("#review_submit").removeClass("submit_on");
                });
                $("#review_submit").hover(function() {
                }, function() {
                    $("#review_submit").addClass("submit_off");
                    $("#review_submit").removeClass("submit_on");
                });
                $("#checkAgree").click(function() {
                    $(".commect_back").toggle(200);
                });
            })
        </script>
    </head>
    <body> 
        <div class="bodydiv">
            <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/checkword.js"></script> 
<script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/effect.js"></script> 
<link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/public.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/login.css" media="all" />     
<script>
    $(function() {
        var WebsitePublic = '<?php echo ($PUBLIC); ?>';
        setpublic(WebsitePublic);
    })
     
    //搜索下拉框 变线
    $(function(){
        $("#search_type li").click(function(){
            $("#search_type").css({"border":"none"});
        })
        $("#search_background").click(function(){
            $("#search_type").css({"border-right":"solid 1px #848484"});
            $("#search_type").css({"border-left":"solid 1px #848484"});
            $("#search_type").css({"border-bottom":"solid 1px #848484"});
        })
    })
</script>
<script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/pub_head.js"></script> 
<div id="homemaindiv_register" class="homemaindiv_register">
    <div style=" width: 707px; margin: 0px auto 0px 91px; position: relative; padding-top: 14px;">
<!--        <span  style=" display: block; width: 44px; float: left; position: absolute;"><img src="<?php echo ($PUBLIC); ?>/image/Home/Index/logo_03.png" width="100%" id="logo" style=" margin-left: -55px; margin-top: -14px;"/>
            <a href="<?php echo ($PUBLICJSURL); ?>">
                <img src="<?php echo ($PUBLIC); ?>/image/Home/Index/home.png" width="80%" id="img_home" style=" margin-top:-1px; margin-left: -2px; position: absolute; top:-5px;" />
            </a>
        </span>
        <ul  id="homeULpublic" style="margin-left: -18px;">
            <li style="  line-height: 30px;"><span style='position: absolute; z-index: 1000;  margin-left: 20px; width: 90px;' class="homespan" onclick="listAction(1, 'Doctors')"><p class="font_daohang">Doctors</p></span></li>
            <li style=" margin-left: -15px;  line-height: 30px;"><span style='position: absolute; z-index: 1000; margin-left: 123px;'  class="homespan" onclick="listAction(2, 'Institutions')"><p class="font_daohang">Institutions</p></span>
            </li>
            <li style='padding-left: 45px; line-height: 30px;'>
                <span  class="homespan"  style='position: absolute; z-index: 1000; margin-left: 220px;' onclick="listAction(3, 'Procedures')"><p class="font_daohang">Procedures</p></span>
            </li>
            <li style="line-height: 30px; margin-left: 15px;"><span  class="homespan"  style='width:80px; margin-left: 315px;position: absolute; z-index: 1000' ><a class="font_daohang" href="<?php echo U('forum/forum/forumList');?>" style='width:80px; color: #fff'>Forum</a></span></li>
        </ul>-->

        <?php if($_SESSION['user_id']>0){ ?>
        <span  style=" display: block; width: 44px; float: left; position: absolute;"><img src="<?php echo ($PUBLIC); ?>/image/Home/Index/logo_03.png" width="100%" id="logo" style=" margin-left: -40px; margin-top: -12px;"/>
            <a href="<?php echo ($PUBLICJSURL); ?>">
                <img src="<?php echo ($PUBLIC); ?>/image/Home/Index/home.png" id="img_home" style=" margin-top:-1px; margin-left: 9px; position: absolute; top:-2px;" />
            </a>
        </span> 

        <ul id="homeULpublic" style=" margin-left: -20px;">
            <li><span style=' position: absolute; z-index: 900;top:35px; margin-left: 21px; width: 80px; height: 47px;' class="homespan" onclick="listAction(1,'Doctors')"><p class="font_daohang">Doctors</p></span></li>
            <li style="margin-left: -42px;"><span style=' position: absolute; z-index: 1000; margin-left: 142px;top:35px; height: 47px;' class="homespan" onclick="listAction(2,'Institutions')"><p class="font_daohang">Institutions</p></span>
            </li>
            <li style="margin-left:2px;">
                <span class="homespan" style=' position: absolute; z-index: 1000; margin-left: 209px;top:35px; height: 47px;' onclick="listAction(3,'Procedures')"><p class="font_daohang">Procedures</p></span> 
            </li>
            <li style=" margin-left: -6px;"><span  class="homespan"  style='width:70px; margin-left: 328px; position: absolute; height: 47px; top:35px; z-index: 1000;' ><a href="<?php echo U('forum/forum/forumList');?>" style='color: #fff;'><p class="font_daohang">Forum</p></a></span></li>
        </ul>
        <?php
 } else { ?>
                <span  style=" display: block; width: 44px; float: left; position: absolute;"><img src="<?php echo ($PUBLIC); ?>/image/Home/Index/logo_03.png" width="100%" id="logo" style=" margin-left: -40px; margin-top: -12px;"/>
            <a href="<?php echo ($PUBLICJSURL); ?>">
                <img src="<?php echo ($PUBLIC); ?>/image/Home/Index/home.png" id="img_home" style=" margin-top:-1px; margin-left: 15px; position: absolute; top:-2px;" />
            </a>
        </span> 
        
        <ul id="homeULpublic" style=" margin-left: -20px;">
            <li><span style=' position: absolute; z-index: 1001;top:35px; margin-left: 33px; width: 80px; height: 47px;' class="homespan" onclick="listAction(1,'Doctors')"><p class="font_daohang">Doctors</p></span></li>
            <li style="margin-left: -42px;"><span style=' position: absolute; z-index: 1000; margin-left: 176px;height: 47px; top:35px;' class="homespan" onclick="listAction(2,'Institutions')"><p class="font_daohang">Institutions</p></span>
            </li>
            <li style="margin-left:2px;">
                <span class="homespan" style=' position: absolute; z-index: 1001; margin-left: 260px;height: 47px; top:35px;' onclick="listAction(3,'Procedures')"><p class="font_daohang">Procedures</p></span> 
            </li>
            <li style=" margin-left: -6px;"><span  class="homespan"  style='width:75px; margin-left: 392px;height: 47px; top:35px;position: absolute; z-index: 1000' ><a href="<?php echo U('forum/forum/forumList');?>" style='color: #fff;'><p class="font_daohang">Forum</p></a></span></li>
        </ul>
       <?php
 } ?>
        


        <?php if($_SESSION['user_id']>0){ ?>
        <span  style=" display: inline-block; float: right; color: white; font-size: 17.3px; position: absolute; width: 404px; top: 14px; right: 30px;">
            <ul class="wordUL_public" style="margin-left: 164px;">
                <li>
                    <a href="<?php echo U('User/info/setting');?>" id="font_MyAccount">My Account</a>&nbsp;&nbsp;
                </li>
                <li>&nbsp;&nbsp;
                    <!--                                导航栏短线-->
                <div style="clear: both; position: absolute; top: 7px; left: 231px;border-left: 1px solid #535353; height: 15px; width: 1px; position: absolute;"></div>
                <a href="javascript:void(0)" onclick="userlogout()" id="signout">Sign Out</a>&nbsp;&nbsp;
                <li>
                    &nbsp;&nbsp;
                                        <!--                                导航栏短线-->
                <div style="clear: both; position: absolute; top: 7px; left: 294px;border-left: 1px solid #535353; height: 15px; width: 1px; position: absolute;"></div>
                    <a href="<?php echo U('Medical/review/reviewAgree');?>" id="font_WriteAReview" style="text-decoration: none; width: 86px;">Write a Review</a>
                </li>
            </ul>
        </span>
        <?php
 } else { ?>
        <span  style=" display: inline-block; float: right; color: white; font-size: 17.3px; position: absolute; width: 386px; top: 16px; right: 44px;">
            <ul class="wordUL_public" style="margin-left: 161px;">
                <li>
                    <a href="javascript:void(0)" onclick="isRepeatClick()" id="signup" style="margin-left: 112px;">Sign In</a>&nbsp;&nbsp;
                    <input type="hidden" onclick="LoginPage('Home/Index/userLogin','<?php echo ($PUBLICJSURL); ?>')" id="hiddenSign"/>

                </li>
                <li>
                    | <a href="<?php echo U('User/register/index');?>" id="signin" style="margin-left: 8px;">Sign Up</a>&nbsp;&nbsp;

                </li>
            </ul>
        </span>
        <?php
 } ?>
    </div>
    <div  style="clear: both;"></div>
</div>
<form action="<?php echo U('Medical/index/search');?>"  method="post" id="formcode" name="formcode">
    <input type="hidden">
    <div id="Theme_background_public">
        <div  id="body_search_public">
            <div style=" width: 680px;  margin-left:63px; padding-top: 15px; position: relative;">
                <input type="hidden" name="searching" id="searching"  value="<?php echo ($search_contion["searching"]); ?>">
                <div  style="float: left;display: block;width: 133px; margin-left: -25px;">
                    <span onclick="list()"style="display: block; text-align: left;line-height: 36px;height: 36px; text-indent: 6px; font-size: 14px;" class="search_background" id="search_background">
                        Doctors
                    </span>
                    <ul id="search_type" class="search_type" style="display: none; width: 123px; margin-left: 0px;position: absolute;z-index: 9999;">
                        <li id="type_1" onclick="listAction(1, 'Doctors')">Doctors</li>
                        <li id="type_2" onclick="listAction(2, 'Institutions')">Institutions</li>
                        <li id="type_3" onclick="listAction(3, 'Procedures')">Procedures</li>
                    </ul>
                </div>
                <input type="hidden" name="location_type" id="location_type" value="<?php echo ($search_contion["location_type"]); ?>" />
                <input type="hidden" name="location_code" id="location_code" value="<?php echo ($search_contion["search_text_location_hidden"]); ?>" />
                <span style="position: relative; overflow: hidden; width: 211px; margin-left: 15px; height: 36px; display: block; float: left; " id="search_text_span">

                    <input type="text" name="search_text"  autocomplete="off" id="search_text" class="search_text" value="<?php echo ($search_contion["search_text"]); ?>"  placeholder="Doctor name, e.g., John Smith" />
<!--                    more点击的时候存储搜索对应的ID    -->
                    <input type="hidden" name="search_text_id" id="search_text_id" value="<?php echo ($doctor_info["doctor_id"]); ?>"/>
                        
                </span>

                <span style="position: relative;overflow: hidden; width: 205px; height: 36px; display: block; float: left; " id="search_text_span">
                    <input type="text" name="search_text_location" autocomplete="off" id="search_text_location" class="search_text"  value="<?php echo ($search_contion["search_text_location"]); ?>"  placeholder="location, e.g., a zip code or city"  style=" width: 189px; width:190px \0\9; width:190px \0; margin-left: 3px;border-top-right-radius:0px;border-bottom-right-radius:0px; "/>
                    <input name="search_text_location_hidden" id="search_text_location_hidden" type="hidden" value="t"/>
                </span>

                <span style=" width: 55px; height: 35px; display: block; position: absolute;left: 536px; top: 15px;cursor: pointer;left: 538px \0\9;" onclick="ajaxSearch('Home/Ajax/locationcode', '<?php echo ($PUBLICJSURL); ?>')">
                    <img id="img_search" src="<?php echo ($PUBLIC); ?>/image/Home/Index/search_03.png"width="100%" height="100%"/>
                </span>
                <ul id="autocomplete_city" class="autocomplete_public" style="left: 347px; text-indent: 6px;  width: 197px;"></ul>
                <span id="font_advanced" style=" margin-left: 90px; font-size: 12px; color: rgb(82, 83, 83); cursor: pointer; text-decoration: none; position: absolute; top: 27px; " onclick="formReset('Theme_background_public', 'advanced_search_publicdiv')">
                    Advanced
                </span>
                <div style="clear: both; position: absolute; top: 15px; left: 111px;border-left: 2px solid #D3D3D3; height: 36px; width: 1px; position: absolute;">&nbsp;</div>
            </div>
        </div>
    </div>
    <div class="error_search" id="search_result" >
        <div class="user_login_close"></div>
        <div>
            <p id="search">
                Sorry! No Search  results !
            </p>
        </div>
    </div>
    <input type="hidden" name="advanece_page" id="advance_page" value="1" />
    <div id="advanced_search_publicdiv" style="position:relative;">
        <input type="hidden" name="search_advanced_type" id="search_advanced_type" value="<?php echo ($search_contion["search_advanced_type"]); ?>" />
        <div id="advanced_search_public" style=" display: block; margin-left: 10px; margin-top: 2px; ">
            <div style=" height: 20px;"></div>
            <div style="text-align: center; color:#969696; width: 612px; margin-left: 44px;  font-size: 18px; ">Please specify a combination of two or more searching criteria from below:</div>
            <div id="advanced_search_div" style="position: relative;">

                <div id="advanced_doctorAndhospital" style=" color: #696969">
                    <div   class="left">
                        <span class="left advanced_frist">Doctor</span>
                        <span  class="left" >

                            <span  class='searchTextStyle advanced_background'>
                                <input type="text" name="doctor_search_text" id="doctor_search_text" value="<?php echo ($search_contion["doctor_search_text"]); ?>" autocomplete="off"  placeholder="Name e.g.John Smith"  />
                            </span>
                        </span>
                    </div>
                    <div   class="left">
                        <span  class="left advanced_seconed" style="">At this institution</span>
                        <span  class="left">
                            <span class='searchTextStyle advanced_background'>
                                <input type="text" name="hospital_search_text" id="hospital_search_text" value="<?php echo ($search_contion["hospital_search_text"]); ?>" autocomplete="off" placeholder="Institutions eg John Smith" />
                            </span>
                        </span>
                    </div>
                </div>
                <div style="clear: both; height: 1px;"></div>
                <div  id="advanced_procedureAndlocation" style=" display: block; *margin-top: 3px;">
                    <div  class="left">
                        <span  class="left advanced_frist" >Procedure’s </span>
                        <span class="left">
                            <span  class='searchTextStyle advanced_background'>
                                <input type="text" name="procedure_search_text" id="procedure_search_text" value="<?php echo ($search_contion["procedure_search_text"]); ?>" autocomplete="off" placeholder="Procedures eg John Smith" /></span>
                        </span>
                    </div>
                    <div  class="left" style=" position: relative; ">
                        <span class="left advanced_seconed" >Location:</span>
                        <span class="left" >
                            <span  class='searchTextStyle advanced_background'>
                                <input type="text" name="location_search_text" id="location_search_text" value="<?php echo ($search_contion["location_search_text"]); ?>" autocomplete="off"  placeholder="location, e.g., zip code or city" /></span>
                        </span>
                        <ul id="autocompleteadvanced_city" class="autocomplete"></ul>
                    </div>
                </div>
                <div style="clear: both;"></div>

            </div>
            <div id="advanced_button_div" style=" margin-left: 176px;">

                <span id="advanced_button" style="margin-top: -3px;margin-left: -33px;" onclick="advancedAjaxSearch()">&nbsp;</span>
                <span id="font_reset" style=" margin-left: 92px; margin-top:22px; *margin-top:43px;font-weight: bold; color:#AAAAAA;;width: 100px;" onclick="formReset('advanced_search_publicdiv', '1')">Reset</span>
                <!--                        竖线下-->
                <span id="font_cancel" style=" text-align: center;width: 88px;color: #AAAAAA; margin-left:156px;line-height: 1;  margin-top:-16px;font-weight: bold;height: 20px;" onclick="formReset('advanced_search_publicdiv', 'Theme_background_public')">Cancel</span>
            </div>
            <!--                        竖线上-->
<!--            <div style=" border-left: 2px solid #ccc;height: 75px; left: 339px;position: absolute;top: 43px; width: 1px; "></div>-->
        </div>
    </div>
</form>
<div style="clear: both;"></div>
            <!--            review 内容开始-->
            <div id="review_body_div" style=" margin-left: 36px;  margin-top: 10px; ">
                <input type="hidden" value="<?php echo ($back); ?>" id="IsBack"/>
                <div style=" clear: both; position: relative; margin-left: 25px; margin-bottom: 10px;" id="reviewerror">
                    <div style="clear: both;  position: absolute; width: 270px; left: -28px; top: 3px;">
                        <span style="position: relative; display: none;" id="review_error_div">
                            <img src="<?php echo ($PUBLIC); ?>/image/Home/register/error.png" width="15" height="15" id="error_image">
                                <span id="review_error_list"  style="font-size: 12px; color: #BDBDBD; font-weight: bold;line-height: 21px; width: 433px; display: inline-block; position: absolute  ; left: 33px; top: -3px;"></span>
                        </span>   
                    </div>
                </div>
                <form action="<?php echo U('Medical/review/addReview');?>"  method="post" id="reviewfrom" name="reviewfrom">
                    <input type="hidden" name="back" id="back" value='<?php echo ($nameAry[3]); ?>'>
                        <input type="hidden" name="procedures_val" id="procedures_val" value=''>
                            <input type="hidden" name="register_review" id="register_review" value="<?php echo ($register_review); ?>">
                                <!--             医疗项目开始-->
                                <div>
                                    <span class="pointer"></span>
                                    <span class="title div_arrive" style="">Please enter the name of medical procedure below<span style="color: red;">*</span>:</span>
                                </div>
                                <!--                医疗项目下拉框开始-->
                                <div style=" margin-top: 10px; position:relative;  z-index: 998; ">
                                    <span class="procedure_back " style=" margin-left: 40px; position: relative;">
                                        <span class="input_text" style=" text-indent: 16px;height: 20px; margin-top: 4px; cursor: pointer;line-height:20px;"  id="procedure_name"onclick="listscroll('procedure_list');"></span>
                                        <span id="toptag" class="Triangle" onclick="listscroll('procedure_list');"><img src="<?php echo ($PUBLIC); ?>/image/Medical/review/triangle.png"></img></span>
                                    
                                        <span style="margin-left: 19px; margin-top: -3px; position: absolute;"><input type="text" id="othersText" name="procedure_name_other" class="small_text" style="width: 250px; display: none;"></span>
                                    
                                    </span>
                                    <div  id="rightLine"style=" width: 1px; height: 130px; border-right: 1px solid #000; z-index:1000; position: absolute; top: 25px; left: 335px; display: none;"></div>
                                    <div id="procedure_list_background" style="  ">
                                        <ul style="  padding-right: 9px;*padding-right:12px;" id="procedure_list" class="Scroll3">
                                            <?php if(is_array($procedure)): $i = 0; $__LIST__ = $procedure;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$all): $mod = ($i % 2 );++$i;?><li id="procedure_id" class="listliNomal" onclick="reviewprocedures('<?php echo ($all["procedure_name"]); ?>', 'procedure_name')"><span style=" cursor: pointer;margin-left: 22px; display: inline-block; " title="<?php echo ($all["procedure_name"]); ?>"><?php echo (strreviewmax($all["procedure_name"])); ?></span></li>
<!--                                                            Others--><?php endforeach; endif; else: echo "" ;endif; ?>    
                                            <li id="others" class="listliNomal" style="text-indent: 21px;" onclick="reviewprocedures('Others', 'procedure_name');$('#othersText').show();">Other</li>
                                        </ul>

                                    </div>
                                </div>
                                <!--                医疗项目下拉框结束  邮编号码开始-->
                                <div style=" margin-top: 20px; ">
                                    <span class="pointer"></span>
                                    <span class="title div_arrive" style=" text-align: justify; width: 503px;height: 30px; position: absolute; margin-top: 0px; ">Please enter the address that you had the medical procedure<span style="color: red;">&nbsp;*</span>&nbsp;:</span>
                                </div>
                                <!--             邮政号码 开始-->
                                <div style=" margin-top: 20px; ">
                                    <span  style=" margin-left: 40px; position: relative; display: inline-block; width: 450px; *width: 370px;width:400px\0; z-index:10px; ">
                                        <span style=" color: #aeb0b3; font-size: 13px; font-weight: bold; position: relative;  float: left;margin-top: 11px; ">Zip code:</span>
                                        <span class="small_background" style=" float: left; margin-left: 25px; " id="zip_code_div">
                                            <input type="text" name="zip_code" id="zip_code"  class="small_text" value="<?php echo ($nameAry[2]); ?>"/>
                                            <input type="hidden" name="zip_code_back" value="<?php echo ($nameAry[2]); ?>" id="zip_code_back"/>
                                        </span>
                                    </span>
                                </div>
                                <!--             邮政号码 结束  州 城市 开始-->
                                <div style=" margin-top: 20px; position: relative; ">
                                    <span class="pointer"></span>
                                    <span class="title div_arrive title_div" style=" text-align: justify;text-justify:inter-ideograph; width: 497px;height: 30px;  line-height: 22px;position: absolute;top: 2px; ">If you do not remember the zip code, please specify the name of state and city from below:</span>
                                </div>
                                <!--             州 与 城市  开始-->
                                <div style=" margin-top: 20px; ">
                                    <span  style=" margin-left: 28px; position: relative; display: inline-block;width: 650px;margin-top: 12px;">

                                        <span style=" margin-left:8px; color: #aeb0b3; font-size: 13px; font-weight: bold; position: relative;  float: left;margin-top: 11px; ">State:</span>
                                        <span class="small_background" style=" float: left; margin-left: 50px;">
                                            <input type="text" name="state" id="state"  class="small_text" style=" line-height: 22px;"  />
                                        </span>

                                        <span style=" margin-left: 33px;color: #aeb0b3; font-size: 13px; font-weight: bold; float: left;margin-top: 11px; ">City:</span>
                                        <span class="small_background" style=" float: left; margin-left: 36px; ">
                                            <input type="text" name="city" id="city"  class="small_text"  style=" line-height: 22px;" />
                                        </span>

                                    </span>
                                </div>
                                <!--             州 与 城市  结束 医生名称开始-->
                                <div style=" margin-top: 20px; position: relative; ">
                                    <span class="pointer"></span>
                                    <span class="title div_arrive" style=" ">Please enter the name of the doctor:</span>
                                </div>
                                <div style=" margin-top: 20px; ">
                                    <span  style=" margin-left: 40px; position: relative; display: inline-block; width: 650px;">
                                        <!--                                     Frist Name-->
                                        <span style=" color: #aeb0b3; font-size: 13px; font-weight: bold; position: relative;  float: left;margin-top: 10px; ">First name<span style="color: red;">*</span>:</span>
                                        <span class="small_background" style=" float: left;margin-left:7px; ">
                                            <input type="text" name="doctors_frist_name" id="doctors_frist_name" value="<?php echo ($nameAry[0]); ?>"  class="small_text" style=" line-height: 22px;"  />
                                            <input type="hidden" name="doctors_frist_name_back" value="<?php echo ($nameAry[0]); ?>" id=doctors_frist_name_back"/>
                                        </span>
                                        <!--                                                Middle Name-->
                                        <span style=" margin-left: 10px;color: #aeb0b3; font-size: 13px; font-weight: bold;  float: left;margin-left: 33px;margin-top: 11px; ">Middle name:</span>
                                         <input type="text" name="doctors_middle_name" id="doctors_middle_name"value="<?php echo ($nameAry[4]); ?>"  class="small_text" style=" line-height: 22px; margin-top: 6px; margin-left: -158px;"  />
                                        <input type="hidden" name="doctors_middle_name_back" value="<?php echo ($nameAry[4]); ?>" id="doctors_middle_name_back"/>
                                        <!--                                               Last Name-->
                                        <span style=" margin-left: 10px;color: #aeb0b3; font-size: 13px; font-weight: bold;  float: left;margin-left: -388px;margin-top: 49px; ">Last name<span style="color: red; ">*</span>:</span>
                                        <span class="small_background" style=" float: left;margin-left: -22px; *margin-left:0px; ">
                                            <input type="text" name="doctors_last_name" id="doctors_last_name"value="<?php echo ($nameAry[1]); ?>"  class="small_text" style=" line-height: 22px; margin-top: 45px; margin-left: -255px;margin-left: -252px \0\9;margin-left: -255px \0;"  />
                                            <input type="hidden" name="doctors_last_name_back" value="<?php echo ($nameAry[1]); ?>" id="doctors_last_name_back"/>
                                        </span>

                                    </span>
                                </div>
                                <!--   医生名称结束  医院开始 -->
                                <div style=" margin-top: 20px; position: relative; ">
                                    <span class="pointer"></span>
                                    <span class="title div_arrive title_div" style="text-align: justify; height: 30px; position: absolute;top: 2px; width: 503px; line-height: 22px; ">Please enter the name of the service providing organization,can it be a clinic,a hospital or some other:</span>
                                </div>
                                <!--             医院  开始-->
                                <div style=" margin-top: 20px; ">
                                    <span  style=" margin-left: 35px; position: relative; display: inline-block;margin-top: 15px; width: 510px;">
                                        <span style=" color: #aeb0b3; font-size: 13px; font-weight: bold; position: relative;  float: left;margin-top: 11px; ">organization:</span>
                                        <span class="procedure_back " style="margin-left: 4px; ">
                                            <input class="input_text"   id="hospitals_name" name='hospitals_name' style="margin: 5px 0 0 28px;line-height: 22px; width: 403px;"   />
                                        </span>
                                    </span>
                                </div>
                                <!--             医院  结束 访问时间开始-->
                                <div style=" margin-top: 20px; position: relative;  z-index: 998;">
                                    <span class="pointer"></span>
                                    <span class="title div_arrive title_div" style="position: absolute; width: 465px; top: 3px; ">Please enter the visiting date<span style="color: red;">*</span>:</span>
                                    <span class="small_visting_background" style=" margin-left: 294px; position: absolute; top: -10px;">
                                        <span class="SmallTriangle"  style=" top: 7px; left: 90px;" onclick="listscroll('visit_year_list');"><img src="<?php echo ($PUBLIC); ?>/image/Medical/review/triangle.png" ></span>
                                        <span  name="visit_year" id="visit_year"  class="small_visting_text" style=" text-align: center; cursor: pointer; line-height: 21px;" onclick="listscroll('visit_year_list');"> </span>
                                    </span>
                                    <span class="small_visting_background" style=" margin-left: 433px; position: absolute; top: -10px;">
                                        <span class="SmallTriangle"  style=" top: 7px; left: 85px;" onclick="listscroll('visit_month_list');"><img src="<?php echo ($PUBLIC); ?>/image/Medical/review/triangle.png" ></span>
                                        <span  name="visit_month" id="visit_month"  class="small_visting_text" style="text-align: center; cursor: pointer;margin-left: 24px; line-height: 21px;" onclick="listscroll('visit_month_list');"> </span>
                                    </span>
                                    <input  type="hidden" name="year_val" id="year_val" value="0"/>
                                    <input  type="hidden" name="month_val" id="month_val" value="0"/>
                                    <ul id="visit_year_list"   class="Scroll3" style=" margin-left: 0px;">
                                        <?php  $year = date("Y"); $oldyear = '1955'; $count = $year - $oldyear; for($i = $year;$i >= $oldyear; $i--){ ?>
                                        <li id="visit_year_id" class="listliNomal"  onclick="reviewyear(<?php  echo $i ?> , 'visit_year')">
                                            <span style="margin-left: 25px; display: inline-block; cursor: pointer;" onclick="reviewyear(<?php  echo $i ?> , 'visit_year')">
                                                <?php  echo $i ?>
                                            </span>
                                        </li>
                                        <?php  } ?>
                                    </ul>
                                    <ul id="visit_month_list" style=" margin-left: 0px; "  class="Scroll3">
                                        <?php  $month = date('m'); for($i = 1;$i <= 12; $i++){ ?>
                                        <li id="visit_month_id" class="listliNomal" onclick="reviewmonth( <?php  echo $i ?> , 'visit_month')">
                                            <span style="margin-left: 43px; display: inline-block; cursor: pointer;" onclick="reviewmonth(<?php  echo $i ?> , 'visit_month')">
                                                <?php  echo $i ?>
                                            </span>
                                        </li>
                                        <?php  } ?>
                                    </ul>
                                </div>
                                <!--              访问时间 结束  星级评分开始-->
                                <?php if(is_array($rate)): $i = 0; $__LIST__ = $rate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rate): $mod = ($i % 2 );++$i;?><div style="width: 720px; margin-top: 35px; position: relative;  line-height: 22px;">
                                        <input type="hidden" name="<?php echo ($key); ?>" id="<?php echo ($key); ?>" rate="<?php echo ($rate); ?>" class="rate_value" value="0"></input>                        
                                        <span class="pointer"></span>
                                        <span class="title div_arrive title_div" style="position: absolute;top: 2px;  width: 302px; text-align: justify; text-justify:inter-ideograph;"> <?php echo ($rate); ?><span style="color: red;">*</span>:</span>
                                        <span class="rate_div" id="rate_div_<?php echo ($key); ?>">
                                            <span rate="1" class="start_main start" id="rate_1_<?php echo ($key); ?>" field="<?php echo ($key); ?>"  onclick="checkedrate('<?php echo ($key); ?>', 1)">&nbsp;</span>
                                            <span rate="2" class=" start_main start" id="rate_2_<?php echo ($key); ?>" field="<?php echo ($key); ?>" onclick="checkedrate('<?php echo ($key); ?>', 2)">&nbsp;</span>
                                            <span rate="3" class="start_main start" id="rate_3_<?php echo ($key); ?>" field="<?php echo ($key); ?>" onclick="checkedrate('<?php echo ($key); ?>', 3)">&nbsp;</span>
                                            <span rate="4" class="start_main start" id="rate_4_<?php echo ($key); ?>" field="<?php echo ($key); ?>"  onclick="checkedrate('<?php echo ($key); ?>', 4)">&nbsp;</span>
                                            <span rate="5" class="start_main start" id="rate_5_<?php echo ($key); ?>" field="<?php echo ($key); ?>"  onclick="checkedrate('<?php echo ($key); ?>', 5)">&nbsp;</span>
                                        </span>
                                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                <!--   星级评分结束  付钱统计开始-->
                                <div class="both"></div>
                                <div style=" margin-top: 48px; position: relative; ">
                                    <span class="pointer"></span>
                                    <span class="title div_arrive title_div" style="position: absolute;top: 2px; width: 465px; ">Were you covered by any insurance<span style="color: red;">*</span>:</span>
                                </div>
                                <div style=" margin-top: 10px; ">
                                    <input type="hidden" name="costselect" id="costselect"  value="1"/>
                                    <span  style=" margin-left: 40px; position: relative; display: inline-block; width: 510px; height: 51px;" class="title1">
                                        <span class="checkedselectreview" onclick="costselectclass(1)" id="costcheckyes"></span> Yes
                                        <div  style=" position: absolute;left:60px; top:-2px; display: block; " id="costyes" class="costdiv">
                                            <?php if(is_array($cost)): $i = 0; $__LIST__ = $cost;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cost): $mod = ($i % 2 );++$i;?><span  style=" display: inline-block; width: 500px; ">
                                                    <span><?php echo ($cost); ?><span style="color: red;">*</span>:<input type="text"  cost="<?php echo ($cost); ?>" style="border:0;border-bottom:1px solid black;width: 100px; overflow: hidden; margin-left: 4px;" id="<?php echo ($key); ?>" name="<?php echo ($key); ?>" class="cost_data"  onkeyup="checkNum(this)" />  
                                                    </span>
                                                </span><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div>
                                    </span>
                                    <span  style="margin-left: 40px;margin-top: -14px;position: relative; display: inline-block; width: 510px; " class="title1 both">
                                        <span class="selectreview" onclick="costselectclass(0)" id="costcheckno"></span> No
                                        <div  style=" position: absolute;left:57px; top: -13px;display: none; " id="costno" class="costdiv">
                                            <span  style=" display: inline-block; width: 500px; margin-top: 10px; ">
                                                <span>pease enter the amount you end up paying in total<span style="color: red;">*</span>:<input style="border:0;border-bottom:1px solid black;overflow: hidden;width: 100px; margin-left: 4px;" id="fina_cost" name="fina_cost"  onkeyup="checkNum(this)" />  
                                                </span>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <div  style=" clear: both; "></div>
                                <div style="  height: 300px;"> 
                                    <!--                    付钱统计结束  评论开始-->
                                    <div style="  position: relative; margin-top: 20px;*margin-top: 20px; ">
                                        <span class="pointer"></span>
                                        <span class="title div_arrive title_div" style="position: absolute;top: 2px; width: 465px; ">Additional comments you want to make:</span>
                                        <span id="checkAgree" style="position: absolute; padding-left: 12px; top:3px; left: 593px; cursor:pointer;"><img src="<?php echo ($PUBLIC); ?>/image/Medical/review/triangle.png" ></img></span>
                                    </div>
                                    <div id="agreeDiv" style="">
                                        <div style=" margin-top: 20px; ">

                                            <span  style=" margin-left: 43px; *margin-left: 0px;position: relative; display: inline-block; width: 510px;">
                                                <div style="   border: 1px solid #fff;height: 148px; width: 472px;">
                                                    <span class="commect_back " style="margin-left: -7px; ">
                                                        <textarea class="commect_text"  style="font-size: 12px; border: 0px none; text-indent: 15px; padding-top: 10px; overflow: hidden; resize : none; " id="commect_review" name="commect_review"></textarea>
                                                    </span>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <!--                   评论  结束   阅读条款 开始-->
                                    <div style="  margin-top: 10px; margin-left: 38px;position: relative; ">
                                        <input type="hidden" id="agree" name="agree" value="0" />
                                        <span class="read" onclick="checkagree($('#agree').val(), this)"></span>
                                        <span   style="padding-left: 25px;color: #aeb0b3; font-size: 14px;font-weight: bold; margin-left: 10px; position:absolute;left:10px;top:20px ">
                                            <p>I agree to <a id="agreeService" target="_blank" href="<?php echo U('Medical/review/agreeService');?>">the terms of service</a></p>
                                        </span>
                                    </div>
                                    <!--   阅读条款 结束 提交按钮-->
                                    <div style=" margin-left: 584px; margin-top: 25px; ">
                                        <input type="button" name="review_submit" id="review_submit" class="review_submit submit_off"  onclick="reviewsubmit()"  style=" border: 0; "/>
                                    </div>
                                </div>


                                </div>
                                </form>
                                <div style="clear: both; height: 20px;"></div>
<div class="footer">
    <p  style=" padding-top: 20px; padding-left: 200px;font-size: 12px; "> Copyright</p>
</div>
                                </div>

                                </div>    
                                </body>
                                </html>
                                <script>
                                    $(function() {
                                        $('#procedure_list').WBjsScroll();
                                        $('#procedure_list').hide();
                                        $('#visit_year_list').WBjsScroll();
                                        $('#visit_year_list').hide();
                                        $('#visit_month_list').WBjsScroll();
                                        $('#visit_month_list').hide();

                                    });

                                </script>