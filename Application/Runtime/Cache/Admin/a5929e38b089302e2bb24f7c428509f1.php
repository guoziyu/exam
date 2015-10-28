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
            <li><a href="<?php echo U('Admin/Other/schoolindex');?>" class="elements">校区管理</a></li>
            <li><a href="<?php echo U('Admin/Other/classindex');?>" class="elements">班期管理</a></li>
            <li><a href="<?php echo U('Admin/Other/subjectindex');?>" class="elements">考试科目管理</a></li>
            <li><a href="<?php echo U('Admin/Other/typeindex');?>" class="elements">考题类别管理</a></li>
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu-->



    <div class="centercontent">
    
        <div class="pageheader">
            <h1 class="pagetitle">校区</h1>
            <span class="pagedesc">----------------------------</span>
            
            <ul class="hornav">
                <li class="current"><a href="#updates">校区列表</a></li>
                <li><a href="#activities">添加校区</a></li>
            </ul>
        </div><!--pageheader-->
        <div id="contentwrapper" class="contentwrapper">
        
        	<div id="updates" class="subcontent">
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
                        <th class="head1">编号</th>
                        <th class="head0">校区</th>
                        <th class="head1">操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(is_array($school)): foreach($school as $key=>$data): ?><tr>
                        <td align="center"><input type="checkbox" /></td>
                        <td><?php echo ($num++); ?></td>
                        <td><?php echo ($data["names"]); ?></td>
                        <td calss='center'>
                            <input type='hidden' value='<?php echo ($data["id"]); ?>' name='id' class = 'edit_id'/>
                            
                            <a href="javascript:void(0)" class="btn btn_book"><span class='edits' >修改</span></a>

                            <a href="javascript:void(0)" class="btn btn_book"><span class='sure_edit' style='display:none' >确认修改</span></a>
                            
                            <a href="<?php echo U('Admin/Other/DeleteSchool',array('id'=>$data['id']));?>" class="btn btn_trash"><span>删除</span></a>
                        </td>
                    </tr><?php endforeach; endif; ?>
                </tbody>
            </table>
            </div><!-- #updates -->
            
            <div id="activities" class="subcontent" style="display: none;">
                <form id="form1" class="stdform" method="post" action="<?php echo U('Admin/Other/AddSchool');?>">
                	<p>
                    	<label>校区名称</label>
                        <span class="field"><input type="text" name="names" id="firstname" class="longinput" /></span>
                    </p>
                    <br />
                    <p class="stdformbutton">
                    	<button class="submit radius2">确认添加</button>
                    </p>
                </form>
            </div><!-- #activities -->
        	
        </div><!--contentwrapper-->
    </div>
<script style='text/javascript' charset="utf-8">


    $('.edits').click(function(){
        var edit_id = $(this).parent().prev().val()
        //先获取到我要修改的值。
        var oldText = $(this).parent().parent().prev().text();
        //编写html添加进去。
        var html = "<input type='text' name='username' placeholder='"+oldText+"' class = 'edit_input'/> ";
        //清空原有数据,并保存
        var schooname =  $(this).parent().parent().prev().text('');
        //添加input表单。
        $(this).parent().parent().prev().append(html);
        //清除原有按钮，并清空
        // var dis = $(this).css('display','none');

        // $('.sure_edit').css('display','block');

        //绑定焦点
        $('.edit_input').focus();

        $('.edit_input').blur(function(){
            var newText = $('.edit_input').val(); // 修改后的名称
            //alert(newText); 
            var input_blur = $('.edit_input');

            if(oldText != newText && newText.length != 0){
                
               $.post('<?php echo U('Admin/Other/EditSchool');?>',{'edit_name':newText,'edit_id':edit_id},function(data){
                    if(data == 0){
                        schooname.text(newText);
                        // $('this').css('display','none');
                    }else{
                        return false;
                    }

                });
            }else{
                setTimeout(function(){
                    location.href=location.href;
                }, 100)
            }
        });
    });
</script>

    
</div><!--bodywrapper-->

</body>
</html>