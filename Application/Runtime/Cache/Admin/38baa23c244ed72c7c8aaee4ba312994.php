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



    <div class="centercontent tables">
        <div id="contentwrapper" class="contentwrapper"> 
            <div class="contenttitle2">
                <h3>test  list</h3>
            </div>
            <form class="stdform" method="get" action="<?php echo U('Admin/Test/index');?>">
                <div class="tableoptions">
                    <button class="deletebutton radius3" title="table1">删除选中</button> &nbsp;
                    <select class="radius3" style='min-width:50px;' name='subject_id'>
                        <option>请选择学科</option>
                        <?php if(is_array($subject)): foreach($subject as $key=>$row): ?><option value="<?php echo ($row['id']); ?>" <?php if($_GET['subject_id']== $row['id']): ?>selected<?php endif; ?>><?php echo ($row['name']); ?></option><?php endforeach; endif; ?>
                    </select> &nbsp;
                    <select class="radius3" style='min-width:100px;' name='type_id'>
                        <option>请选择类型</option>
                        <?php if(is_array($type)): foreach($type as $key=>$rows): ?><option value="<?php echo ($rows['id']); ?>" <?php if($_GET['type_id']== $rows['id']): ?>selected<?php endif; ?>><?php echo ($rows['name']); ?></option><?php endforeach; endif; ?>
                    </select> &nbsp;
                    <div style='float:right;margin-right:500px;margin-top:-4px;'>
                        <label>
                            <input type='text' name='search' placeholder='题目' value='<?php echo ($_GET['search']); ?>'/>
                        </label>
                        <button class="deletebutton radius3" title="table1" style='margin-top:5px;'>搜索</button> &nbsp;
                    </div>
                </div>
            </form>
            <table cellpadding="0" cellspacing="0" border="0" id="table1" class="stdtable stdtablecb">
                <colgroup>
                    <col class="con0" style="width: 4%" />
                    <col class="con1" />
                    <col class="con0" />
                    <col class="con1" />
                    <col class="con0" />
                    <col class="con1" />
                </colgroup>
                <thead>
                    <tr>
                        <th class="head0"><input type="checkbox" class="checkall" /></th>
                        <th class="head1">学科</th>
                        <th class="head0">类型</th>
                        <th class="head1">题目</th>
                        <th class="head0">时间</th>
                        <th class="head1">状态</th>
                        <th class="head1">操作</th>
                    </tr>
                </thead>
                <?php if(is_array($test)): foreach($test as $key=>$data): ?><tr>
                        <td align="center"><input type="checkbox" /></td>
                            <td><?php echo ($data["names"]); ?></td>
                            <td><?php echo ($data["name"]); ?></td>
                            <td><?php echo ($data["question"]); ?></td>
                            <td><?php echo ($data["addtime"]); ?></td>
                            <td>
								<?php if($data["status"] == 1): ?><a href=''>启用</a>
									<?php else: ?> 
									<a href=''>禁用</a><?php endif; ?>
                            </td>
                            <td calss='center'>
                               <a href="<?php echo U('Admin/Test/edit',array('id'=>$data['id']));?>" class="btn btn_book"><span>修改</span></a>
                               <a href="<?php echo U('Admin/Test/delete',array('id'=>$data['id']));?>" class="btn btn_trash"><span>删除</span></a>
                               <a href="<?php echo U('Admin/Test/info',array('id'=>$data['id']));?>" class="btn btn_bulb"><span>详情</span></a>
                            </td>
                    </tr><?php endforeach; endif; ?>
            </table>
            <div class="pagination" style='float:right;margin-top:10px'>
                <?php echo ($page); ?>
            </div>
        </div>
    </div>

    
</div><!--bodywrapper-->

</body>
</html>