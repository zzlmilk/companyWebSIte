<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/jquery-1.3.2.min.js"></script>
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/url.js"></script>
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/home.js"></script>
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/login.js"></script> 
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/register.js"></script> 
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/placetest.js"></script>
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/forum.js"></script>
        <script  type="text/javascript" src="<?php echo ($PUBLIC); ?>/js/search.js"></script> 
        <script src="<?php echo ($PUBLIC); ?>/js/forum-jsScroll.js" language="javascript" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/css_clear.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/home.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/register.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/footer.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/public.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/review.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/forum.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo ($PUBLIC); ?>/css/search.css" media="all" />
        <link href="<?php echo ($PUBLIC); ?>/css/WuBin-jsScroll.css" rel="stylesheet" type="text/css" />
        <style>
            #forum:hover{ text-decoration: underline;}
        </style>
        <script>
            $(document).ready(function(){
                 buttomClick("#sub","postanswerDown","postanswerUp");
//                 $("#t1").WBjsScroll();
//                 $("#visit_year_list").WBjsScroll();
                var checkA=document.getElementById('checkA');
                var isAnonymous=document.getElementById("isAnonymous");
                    checkA.onclick=function(){
                   if(isAnonymous.value==0){
                       isAnonymous.value="1";
                       checkA.src="<?php echo ($PUBLIC); ?>/image/forum/check-on_03.png";
                   }
                   else{
                       isAnonymous.value="0";
                       checkA.src="<?php echo ($PUBLIC); ?>/image/forum/check-off_03.png";
                   }
                }
            });
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
            <div id="mainTopicDiv" style=" border-bottom: 1px solid #BEBEBE; width: 740px; margin-left: 30px;">
                <input type="hidden" id="islog" value="<?php echo ($islog); ?>">
                <?php if($thisPage == 1): ?><div id="forum_title">
                    <div style="background-color: #FDFDFD;padding-top: 10px;height: 55px; width: 740px;">
                    <div style="overflow: hidden; margin-left: 5px; text-align: justify;  font-size:25px; height: 30px; width: 710px; line-height: 30px; color: #59595a; border-bottom: 1px solid  #848484;">
                          <h4 style="margin-left: 10px;"><?php echo ($topicList["0"]["forum_title"]); ?></h4>
                    </div>
                    </div>  
                    <div style="color: #848484;word-break:break-all;line-height: 32px; text-indent: 18px; margin-bottom: 30px; margin-top: 20px; text-align: justify; font-size: 15px" >
                        <?php echo ($topicList["0"]["topic_content"]); ?>
                    </div>
                    </div>
                    <table style=" width: 750px;">
                    <?php else: ?>
                    <table style=" width: 750px;">
                        <tr  class="topicTitle">
<!--                            <td class="span1"></td>-->
                            <!--                            <td class="span2"><?php echo ($k+1); ?></td>-->

                        <td class="spanName">
                        <?php if($vo["topic_anonymous"] == 0): ?>Author:<?php echo ($topicList["0"]["user_name"]); else: ?>
                            anonymous<?php endif; ?>
                        </td>
                        <td class="span4">Time:<?php echo (date("Y-m-d H:i:s",$vo["topic_time"])); ?></td>
<!--                        <td class="span1"></td>-->
                        </tr>
                        <tr>
                            <td colspan="5">
                                <div style="word-break:break-all; padding:20px 0  15px 45px;margin-left: -16px; color: #696969; word-break:break-all ">
                                    <?php echo (strdoctordefined($topicList["0"]["topic_content"],550)); ?>
                                    <?php  $len= strlen($vo["topic_content"]); if($len>=550){ ?>
                                      <div style=" text-align: right; cursor: pointer;">(More)</div>
                                      <?php
 } ?>
                                </div>
                                <input type="hidden" value="<?php echo ($vo["topic_content"]); ?>">
                            </td>
                        </tr><?php endif; ?>

                
                    <?php if(is_array($topicList)): foreach($topicList as $k=>$vo): if($k != 0): ?><tr  class="topicTitle">
<!--                            <td class="span1"></td>-->
                            <!--                            <td class="span2"><?php echo ($k+1); ?></td>-->

                            <td class="spanName">
                        <?php if($vo["topic_anonymous"] == 0): ?>Author:<?php echo ($vo["user_name"]); else: ?>
                            anonymous<?php endif; ?>
                        </td>
                        <td class="span4" style="margin-left: 50px;">Time:<?php echo (date("Y-m-d H:i:s",$vo["topic_time"])); ?></td>
<!--                        <td class="span1"></td>-->
                        </tr>
                        <tr>
                            <td colspan="5">
                                <div style=" padding:20px 0  15px 45px;margin-left: -22px;margin-right: 70px; color: #696969; word-break:break-all ">
                                    <?php echo (strdoctordefined($vo["topic_content"],550)); ?>
                                    <?php  $len= strlen($vo["topic_content"]); if($len>=550){ ?>
                                      <div style=" text-align: right; cursor: pointer;">(More)</div>
                                      <?php
 } ?>
                                </div>
                                <input type="hidden" value="<?php echo ($vo["topic_content"]); ?>">
                            </td>
                        </tr><?php endif; endforeach; endif; ?>
                </table>
            </div>
            <div id="minTopicDiv"></div>
            <div id="pagingSpan" style=" margin-top: 15px; padding-left: 75px;">
                    <?php if(($pageCount < 10)or($pageCount == 10)): else: ?>
                    <div><?php echo ($Paging); ?></div><?php endif; ?>
            </div>
            <form id="topic" action="<?php echo U('forum/forum/followTopic',array('id'=>$tid));?>" method="post">
                <div id="inputDiv">
                    <input type="hidden" name="forum_id" value="<?php echo ($topicList[0]["forum_id"]); ?>">
                    <div style="margin-left:270px;">
                        <div style="height: 55px;"></div>
                        <div  style=" border: solid 1px #525353; height:420px;width:698px;margin-left: -215px;">
                            <div style=" line-height: 35px; height: 35px;width:100%; border-bottom:  1px solid #B3AFB0">
                                <div style="padding-left: 20px; width: 200px;" id="helpMessage"></div><div id="numSpan" style=" text-align: right; margin-right: 15px; margin-left: 250px;">还可以输入<span id="num"></span>字</div>
                            </div>
                            <!--                        <div contentEditable="true" style=" width: 496px; margin-left:2px; margin-top: -1px;  height:161px;"></div>-->
                            <textarea  id="txt1"  name="topic_content" style="font-size: 12px;resize:none; overflow-y:auto; width: 692px; margin-top: 1px;  height:370px;font-size: 15px; text-indent: 15px;line-height: 20px;padding-top: 10px; color: #696969;border: none"></textarea>
                        </div>
                                                    
                        <div style="text-align: right; width: 505px;  
                             margin-top: 20px; ">
                            <div style=" margin-left: 279px;" >
                                <div class="floatBot" style="margin-top:2px;">
                                    <div id="sub" class="postanswer postanswerUp"> </div>
                                </div>
                                <div class="floatBot" style="margin-top:5px; margin-left: 10px;">
                                    <img id="checkA" src="<?php echo ($PUBLIC); ?>/image/forum/check_03.png">
                                    <input type="hidden" id="isAnonymous" name="isAnonymous" value="0">
                                </div>
                                <div class="floatBot" style="color:#b3b3b3;margin-top:5px; margin-left:5px">匿名评价

                                </div>
                                <div class="clearBot"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div style="clear: both; height: 20px;"></div>
<div class="footer">
    <p  style=" padding-top: 30px; padding-left: 30px;font-size: 12px; ">Copyright @ 2013, Transparent Medical Care. All Rights Reserved. Your use of this service is subject to our <a href="<?php echo U('Medical/review/agreeService');?>" style="color: white;"  id="termUser">Terms of Use</a></p>
</div>
        </div>

    </body>
</html>