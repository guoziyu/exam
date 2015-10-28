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
            <h1 class="pagetitle">题型</h1>
            <span class="pagedesc">----------------------------</span>
            
            <ul class="hornav">
                <li class="current"><a href="#updates">类别列表</a></li>
                <li><a href="#activities">添加类别</a></li>
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
                        <th class="head0">类别</th>
                        <th class="head0">状态</th>
                        <th class="head1">操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(is_array($main)): foreach($main as $key=>$type): ?><tr>
                        <td align="center"><input type="checkbox" /></td>
                        <td><?php echo ($num++); ?></td>
                        <td><?php echo ($type['name']); ?></td>
                        <td value='<?php echo ($type['state']); ?>'><?php if($type['state'] == 1): ?>启用<?php else: ?>禁用<?php endif; ?></td>
                        <td style='display:none'>
                            <select name='state' class="edit_select">
                              <option <?php echo ($type['state'] ==1?"selected='selected'":''); ?> value='1'>启用</option>
                              <option <?php echo ($type['state'] ==2?"selected='selected'":''); ?> value='2'>禁用</option>
                            </select>
                        </td>
                        <td class='center'>
                            <input type="hidden" value="<?php echo ($type['id']); ?>" name="id" class="edit_id">
                           <!--<?php echo U('Admin/Student/edit',array('id'=>$data['id']));?> <a>原标签中传值-->
                          
                            <a href="javascript:void(0)" class="btn btn_book"><span class="edits">修改</span></a>
                            <a href="javascript:void(0)" class="btn btn_book"><span class="sure_edit" style="display:none;">确认修改</span></a>
                           <a href="<?php echo U('Admin/Other/deletetype',array('id'=>$type['id']));?>" class="btn btn_trash"><span>删除</span></a>
						   <a href="javascript:void(0)" class="btn btn_info"><span class="exits" style="display:none;">取消</span></a>
                        </td>
                    </tr><?php endforeach; endif; ?>
                </tbody>
            </table>
            </div><!-- #updates -->
            
            <div id="activities" class="subcontent" style="display: none;">
                <form id="form1" class="stdform" method="post" action="<?php echo U('Admin/Other/AddType');?>">
                	<p>
                    	<label>类别名称</label>
                        <span class="field"><input type="text" name="name" id="firstname" class="longinput" /></span>
                    </p>
                    <br />
                    <p class="stdformbutton">
                    	<button class="submit radius2">确认添加</button>
                    </p>
                </form>
            </div><!-- #activities -->
        	
        </div><!--contentwrapper-->

        <script style="text/javascript" charset="utf-8">

            //修改单击事件
            $(".edits").click(function(){

                //获取当前修改信息的id值
                var edit_id = $(this).parent().prev().val();

                //获取要修改的文本信息。
                var oldText1 = $(this).parent().parent().prev().prev().prev().text();
                var oldText2 = $(this).parent().parent().prev().prev().text();

                //清空原有数据。
                $(this).parent().parent().prev().prev().prev().text('');

                //编写html添加进去。
                var html = "<input type='text' name='typename'  placeholder='"+oldText1+"' class = 'edit_input'/> ";

                //添加input表单。
                $(this).parent().parent().prev().prev().prev().append(html);

                //修改html状态
                $(this).css('display','none');//隐藏当前修改按钮
                $(this).parent().next().children('span.sure_edit').css('display','block');//显示确认修改按钮
                //隐藏状态文本
                $(this).parent().parent().prev().prev().css("display","none")
                //启用下拉选框
                $(this).parent().parent().prev().css("display","table-cell");
				var dels = $(this).parent().next().next();//隐藏删除按钮
				
				dels.children().css('display','none');
				var exits = $(this).parent().next().next().next();//显示取消按钮
				//alert(exits);
				exits.children().css('display','block');
				
		        //绑定焦点事件
		        $('.edit_input').focus();
				
				//alert(out);
				//失去焦点事件
				var that = $(this);
				
				$(exits).click(function(){
					that.css('display','block');//显示之前修改按钮
					that.parent().next().children('span.sure_edit').css('display','none');//隐藏确认修改按钮
					that.parent().parent().prev().prev().prev().text('');//清空班期内容
					that.parent().parent().prev().prev().prev('td').append(oldText1);//添加班期文本
					that.parent().parent().prev('td').css('display','none');//隐藏校区td
					that.parent().parent().prev().prev("td").css('display','table-cell');//显示校区td
					exits.children().css('display','none');//隐藏取消按钮
					dels.children().css('display','block');//显示删除按钮
				});
              
            });
//=============================================================================================================
                
                
               // 点击确认修改按钮的事件
                $('.sure_edit').click(function(){
                    // 修改后的input文本值
                    var edit_id = $(this).parent().prev().prev().val();//当前信息的id值 
                    var newText1 = $(this).parent().parent().prev().prev().prev().children().val();//文本
                    var newText2 = $(this).parent().parent().prev().children().children("option:selected").attr('value');//获取当前信息状态
                    var newText3 = $(this).parent().parent().prev().children().children("option:selected").text();//获取当前信息文本

                    //获取当前节点对象
                    var that = $(this);

                    //判断input是否为空
                    if(newText1==''){
                        alert('请输入信息');
                    }else{
                        $.post('<?php echo U('Admin/Other/edittype');?>',{'edit_id':edit_id,'input_value':newText1,'select_state':newText2},function(data){
                            if(data == 1){

                                //按钮样式改变
                                that.css('display','none');
                                that.parent().prev().children().css('display','block');
                                that.parent().parent().prev().css('display','none');
                                that.parent().parent().prev().prev().css('display','table-cell');

                                //清空节点信息
                                that.parent().parent().prev().prev().prev().text('');
                                that.parent().parent().prev().prev().text('');

                                //填充信息
                                var text1 = newText1;
                                var text2 = newText3;
                                that.parent().parent().prev().prev().prev().append(text1);
                                that.parent().parent().prev().prev().append(text2);

                            }else{
                                alert('修改失败！');
                            }
                        });
                    }
                }); 
            
        </script>

    
</div><!--bodywrapper-->

</body>
</html>