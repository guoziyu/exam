<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>lampbrother考试系统</title>

<block name = 'js'>
<link rel="stylesheet" href="/thinkphp_3.2.2_full/Public/css/style.default.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="/thinkphp_3.2.2_full/Public/css/style.page.css">
<script type="text/javascript" src="/thinkphp_3.2.2_full/Public/js/plugins/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/thinkphp_3.2.2_full/Public/js/plugins/jquery-1.7.min.js"></script>

<script type="text/javascript" src="/thinkphp_3.2.2_full/Public/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="/thinkphp_3.2.2_full/Public/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="/thinkphp_3.2.2_full/Public/js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="/thinkphp_3.2.2_full/Public/js/plugins/jquery.flot.min.js"></script>
<script type="text/javascript" src="/thinkphp_3.2.2_full/Public/js/plugins/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="/thinkphp_3.2.2_full/Public/js/plugins/jquery.slimscroll.js"></script>
<script type="text/javascript" src="/thinkphp_3.2.2_full/Public/js/custom/general.js"></script>
<script type="text/javascript" src="/thinkphp_3.2.2_full/Public/js/custom/dashboard.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/thinkphp_3.2.2_full/Public/js/plugins/excanvas.min.js"></script><![endif]-->
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="/thinkphp_3.2.2_full/Public/css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="/thinkphp_3.2.2_full/Public/css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="/thinkphp_3.2.2_full/Public/js/plugins/css3-mediaqueries.js"></script>
<![endif]-->
</head>
</block>

<body class="withvernav">
<div class="bodywrapper">


    <div class="topheader">
        <div class="left">
            <h1 class="logo"><i>xdl.<span>exam</span></i>&nbsp;</h1>
            <span class="slogan">&nbsp;后台管理系统</span>
            
    <!--         <div class="search">
            	<form action="" method="post">
                	<input type="text" name="keyword" id="keyword" value="请输入" />
                    <button class="submitbutton"></button>
                </form>
            </div> --><!--search-->
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
        	<!--<div class="notification">
                <a class="count" href="ajax/notifications.html"><span>9</span></a>
        	</div>-->
            <div class="userinfo">
            	<img src="/thinkphp_3.2.2_full/Public/images/thumbs/avatar.png" alt="" />
                <span>管理员</span>
            </div><!--userinfo-->
            
            <div class="userinfodrop">
            	<div class="avatar">
                	<a href=""><img src="/thinkphp_3.2.2_full/Public/images/thumbs/avatarbig.png" alt="" /></a>
                    <div class="changetheme">
                    	切换主题: <br />
                    	<a class="default"></a>
                        <a class="blueline"></a>
                        <a class="greenline"></a>
                        <a class="contrast"></a>
                        <a class="custombg"></a>
                    </div>
                </div><!--avatar-->
                <div class="userdata">
                	<h4>Juan</h4>
                    <span class="email">youremail@yourdomain.com</span>
                    <ul>
                    	<li><a href="editprofile.html">编辑资料</a></li>
                        <li><a href="accountsettings.html">账号设置</a></li>
                        <li><a href="help.html">帮助</a></li>
                        <li><a href="index.html">退出</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->




    <div class="header">
        <ul class="headermenu">
            <li class="current"><a href="<?php echo U('Admin/Student/index');?>"><span class="icon icon-flatscreen"></span>学生管理</a></li>

            <li><a href="<?php echo U('Admin/Paper/index');?>"><span class="icon icon-pencil"></span>建立试卷</a></li>
            <li><a href="<?php echo U('Admin/result/index');?>"><span class="icon icon-speech"></span>查看成绩</a></li>
            <li><a href="<?php echo U('Admin/test/index');?>"><span class="icon icon-message"></span>题库管理</a></li>
            <li><a href="<?php echo U('Admin/Other/Schoolindex');?>"><span class="icon icon-chart"></span>其他管理</a></li>
        </ul>
        
       <div class="headerwidget">
            <div class="earnings">
                <div class="one_half">
                    <h4>Today's Earnings</h4>
                    <h2>$640.01</h2>
                </div><!--one_half-->
                <div class="one_half last alignright">
                    <h4>Current Rate</h4>
                    <h2>53%</h2>
                </div><!--one_half last-->
            </div><!--earnings-->
        </div><!--headerwidget-->
        
    </div><!--header-->



    <div class="vernav2 iconmenu">
        <ul>
            <li><a href="<?php echo U('Admin/Test/index');?>" class="buttons">题库列表</a></li>
            <li><a href="<?php echo U('Admin/Test/add');?>" class="buttons">添加题目</a></li>
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu-->



	<div class="centercontent">
        <div id="contentwrapper" class="contentwrapper">
            <div id="validation" class="subcontent">
            	<div class="contenttitle2">
                    <h3>insert Test</h3>
                </div><!--contenttitle-->
                    <form id="form1" class="stdform" method="post" action="<?php echo U('Admin/Test/update');?>">
                        <p>
                            <label>题目类型</label>
                            <b><?php echo ($types['0']['names']); ?></b>
                        </p>

                        <p class='sort'>
                            <label>题目类型</label>
                            <b><?php echo ($types['0']['name']); ?></b>
                        </p>
                        <?php switch($types["0"]["typeid"]): case "1": ?><p>
                                    <label>问题</label>
                                    <span class="field">
                                        <textarea cols="80" rows="5" name="question" class="mediuminput" id="location" style="resize:none"><?php echo ($types['0']['question']); ?></textarea>
                                    </span>
                                </p>
                                <p>
                                    <label>答案A</label>
                                    <span class="field">
                                        <textarea cols="80" rows="5" name="A" class="mediuminput" id="location" style="resize:none"><?php echo ($types['0']['A']); ?></textarea>
                                    </span>
                                </p>
                                <p>
                                    <label>答案B</label>
                                    <span class="field">
                                        <textarea cols="80" rows="5" name="B" class="mediuminput" id="location" style="resize:none"><?php echo ($types['0']['B']); ?></textarea>
                                    </span>
                                </p>
                                <p>
                                    <label>答案C</label>
                                    <span class="field">
                                        <textarea cols="80" rows="5" name="C" class="mediuminput" id="location" style="resize:none"><?php echo ($types['0']['C']); ?></textarea>
                                    </span>
                                </p>
                                <p>
                                    <label>答案D</label>
                                    <span class="field">
                                        <textarea cols="80" rows="5" name="D" class="mediuminput" id="location" style="resize:none"><?php echo ($types['0']['D']); ?></textarea>
                                    </span>
                                </p>
                                <p>
                                    <label>正确答案</label>
                                    <span class="field">
                                        
                                        <input type="checkbox" name="answer[]" value="A"  <?php if($types['0']['answer'] == A): ?>checked<?php endif; ?>/> A&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" name="answer[]" value="B"  <?php if($types['0']['answer'] == B): ?>checked<?php endif; ?>/> B&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" name="answer[]" value="C"  <?php if($types['0']['answer'] == C): ?>checked<?php endif; ?>/> C &nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" name="answer[]" value="D"  <?php if($types['0']['answer'] == D): ?>checked<?php endif; ?>/> D
                                    </span>
                                </p><?php break;?>
                            <?php case "2": ?><p>
                                    <label>问题</label>
                                    <span class="field">
                                        <textarea cols="80" rows="5" name="question" class="mediuminput" id="location" style="resize:none"><?php echo ($types['0']['question']); ?></textarea>
                                    </span>
                                </p>
                                <p>
                                    <label>答案<br/>请用分号；分割</label>
                                    <span class="field">
                                        <textarea cols="80" rows="5" name="answer" class="mediuminput" id="location" style="resize:none"><?php echo ($types['0']['answer']); ?></textarea>
                                    </span>
                                </p><?php break;?>
                            <?php case "3": ?><p>
                                    <label>上传代码截图</label>
                                    <span class="field">
                                        <input type="file" name="pic" />
                                    </span>
                                </p>
                                <p>
                                    <label>答案<br/>请用分号；分割</label>
                                    <span class="field">
                                        <textarea cols="80" rows="5" name="answer" class="mediuminput" id="location" style="resize:none"></textarea>
                                    </span>
                                </p><?php break; endswitch;?>
                        <div class='remark'>
						  <p>
                            <label>备注</label>
                            <span class="field">
                                <textarea cols="80" rows="5" name="remark" class="mediuminput" id="location" style="resize:none"><?php echo ($types['0']['remark']); ?></textarea>
                            </span>
                            </p>
						</div>
                        <br />
                        <input type='hidden' value="<?php echo ($types['0']['id']); ?>" name='id' />
                        <p class="stdformbutton">
                        	<button class="submit radius2">确认修改</button>
                        </p>
                    </form>

            </div><!--subcontent-->
        
        </div><!--contentwrapper-->
	</div>

    
</div><!--bodywrapper-->

</body>
</html>