<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title>网站后台管理系统</title>
<link href="/Public/Admin/css//main.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css//style.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="/Public/Admin/js//jquery.min.js"></script>

<script type="text/javascript" src="/Public/Admin/js//plugins/spinner/ui.spinner.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/spinner/jquery.mousewheel.js"></script>


<script type="text/javascript" src="/Public/Admin/js//jquery-ui.min.js"></script>
<!-- 
<script type="text/javascript" src="/Public/Admin/js//plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/charts/jquery.flot.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/charts/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/charts/jquery.flot.pie.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/charts/jquery.flot.resize.js"></script>
 -->
<script type="text/javascript" src="/Public/Admin/js//plugins/charts/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/uniform.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/jquery.validationEngine-zh-CN.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/jquery.validationEngine.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/chosen.jquery.min.js"></script>

<script type="text/javascript" src="/Public/Admin/js//plugins/wizard/jquery.form.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/wizard/jquery.validate.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/wizard/jquery.form.wizard.js"></script>




<script type="text/javascript" charset="utf-8" src="/Public/Admin/js//plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/Admin/js//plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/Public/Admin/js//plugins/ueditor/lang/zh-cn/zh-cn.js"></script>



<!-- <script type="text/javascript" src="/Public/Admin/js//plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/uploader/jquery.plupload.queue.js"></script>
 -->

<script type="text/javascript" src="/Public/Admin/js//plugins/uploader/jquery.upload.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/Admin/js//plugins/uploader/html5uploader.css">


<script type="text/javascript" src="/Public/Admin/js//plugins/tables/jquery.datatable.min.js"></script>
<!-- 
<script type="text/javascript" src="/Public/Admin/js//plugins/tables/tablesort.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/tables/resizable.min.js"></script>
 -->
<script type="text/javascript" src="/Public/Admin/js//plugins/calendar.min.js"></script>

<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/ui/jquery.sourcerer.js"></script>

<script type="text/javascript" src="/Public/Admin/js//plugins/layer/layer.js"></script>

<script type="text/javascript" src="/Public/Admin/js//custom.js"></script>



<!-- 导入自定义标签 -->

<body>

<!-- Left side content -->
<div id="leftSide">
    <div class="logo"><a href="index.html"><img src="/Public/Admin/images//logo.png" alt="" /></a></div>

    <div class="sidebarSep"></div>
    
    <!-- Left navigation -->
    <ul id="menu" class="nav">
        <li><a href="<?php echo U('Index/index');?>" title=""><span>控制中心</span></a></li>
        <?php if(is_array($_menus)): $i = 0; $__LIST__ = $_menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menus): $mod = ($i % 2 );++$i; if($menus['istop'] == 1): ?><li class="">
                    <a class='exp' href="#" title="">
                        <span><?php echo ($menus["title"]); ?></span>
                    </a>
                    <ul class="sub">
                        <?php if(is_array($menus['children'])): $i = 0; $__LIST__ = $menus['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U($menu['name']);?>" title=""><?php echo ($menu["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li>
            <?php else: ?>
                <li class="">
                    <a href="<?php echo U($menus['name']);?>" title="">
                        <span><?php echo ($menus["title"]); ?></span>
                    </a>
                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <li><a href="<?php echo U('Public/logout');?>" title=""><span>退出</span></a></li>

    </ul>
</div>

<!-- Right side -->
<div id="rightSide">
    <!-- Top fixed navigation -->
    <div class="topNav">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="/Public/Admin/images//userPic.png" alt="" /></a><span>您好，管理员</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="<?php echo U('options/index');?>" title=""><img src="/Public/Admin/images//icons/topnav/settings.png" alt="" /><span>设置</span></a></li>
                    <li><a href="<?php echo U('Public/logout');?>" title="退出客户端"><img src="/Public/Admin/images//icons/topnav/logout.png" alt="" /><span>退出</span></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <!-- Responsive header -->
    <div class="resp">
        <div class="respHead">
            <a href="index.html" title=""><img src="/Public/Admin/images//loginLogo.png" alt="" /></a>
        </div>
        
        <div class="cLine"></div>
        <div class="smalldd">
            <span class="goTo"><img src="/Public/Admin/images//icons/light/home.png" alt="" />导航菜单</span>
            <ul class="smallDropdown">
                <?php if(is_array($_menu)): $i = 0; $__LIST__ = $_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menus): $mod = ($i % 2 );++$i; if($menus['children'] != false): ?><li class="<?php echo ($menus["class"]); ?>"><a class='exp' href="#" title=""><span><?php echo ($menus["title"]); ?></span></a>
                            <ul class="sub">
                                <?php if(is_array($menus['children'])): $i = 0; $__LIST__ = $menus['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U($menu['url']);?>" title=""><?php echo ($menu["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="<?php echo ($menus["class"]); ?>"><a href="<?php echo U($menus['url']);?>" title=""><span><?php echo ($menus["title"]); ?></span></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="cLine"></div>
    </div>
    
    


	<!-- Main content wrapper -->
    <div class="wrapper">
        <div class="bc">
            <ul id="breadcrumbs" class="breadcrumbs">
                 <li class=""> <a href="<?php echo U('Index/index');?>">控制中心</a> </li>
                 <li class=""> <a href="<?php echo U('index');?>">节点列表</a> </li>
                 <li class="current"><a href="#">节点管理</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <!-- Validation form -->
        <form class="form validate" method="post" action="<?php echo U('save');?>">
            <input type="hidden" name='id' value="<?php echo ($vo["id"]); ?>">
        	<fieldset>
                <div class="widget">
                    <div class="title"><img src="/Public/Admin/images//icons/dark/alert.png" alt="" class="titleIcon" /><h6>节点表单</h6></div>
                    <div class="formRow">
                        <label>节点名称:<span class="req">*</span></label>
                        <div class="formRight">
                            <input type="text" class="validate[required]" name="title" id="req" value="<?php echo ($vo["title"]); ?>"/>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="formRow">
                        <label>节点分组:<span class="req">*</span></label>
                        <div class="formRight">
                            <select id="" name="pid" class="" ><option value="" >顶级节点</option><?php  foreach($rules as $key=>$val) { if( $vo[pid] == $val[id]){ ?><option value="<?php echo $val[id]; ?>" selected="selected"><?php echo $val[title]; ?></option><?php }else{ ?><option value="
        <?php echo $val[id]; ?>"><?php echo $val[title]; ?></option><?php } } ?></select>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="formRow">
                        <label>节点规则:<span class="req">*</span></label>
                        <div class="formRight">
                            <input type="text" class="validate[required]" name="name" id="name" value="<?php echo ($vo["name"]); ?>"/>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="formRow">
                        <label>节点类型:<span class="req">*</span></label>
                        <div class="formRight">
                            <div class="floatL" style="margin: 2px 0 0 0;">
                            <input type="radio" id="radioReq" name="type" class="validate[required]" data-prompt-position="topRight:102" value='1' checked="checked" /><label for="radioReq">普通</label>
                            <input type="radio" id="radioReq2" name="type" class="validate[required]" data-prompt-position="topRight:102" value='2' <?php if(($vo["type"]) == "2"): ?>checked='checked'<?php endif; ?> /><label for="radioReq2">高级</label>

                            </div>
                        </div><div class="clear"></div>
                    </div>

                    <div class="formRow">
                        <label>是否显示在导航:<span class="req">*</span></label>
                        <div class="formRight">
                            <div class="floatL" style="margin: 2px 0 0 0;">

                            <input type="radio" id="ismenu2" name="ismenu" class="validate[required]" data-prompt-position="topRight:102" value='2' checked="checked"/><label for="ismenu2">否</label>

                            <input type="radio" id="ismenus" name="ismenu" class="validate[required]" data-prompt-position="topRight:102" value='1'  <?php if(($vo["ismenu"]) == "1"): ?>checked='checked'<?php endif; ?>  /><label for="ismenus">是</label>

                            </div>
                        </div><div class="clear"></div>
                    </div>

                    <div class="formRow">
                        <label>是否二级导航:<span class="req">*</span></label>
                        <div class="formRight">
                            <div class="floatL" style="margin: 2px 0 0 0;">

                            <input type="radio" id="istop2" name="istop" class="validate[required]" data-prompt-position="topRight:102" value='2' checked="checked"/><label for="istop2">否</label>

                            <input type="radio" id="istop1" name="istop" class="validate[required]" data-prompt-position="topRight:102" value='1'  <?php if(($vo["istop"]) == "1"): ?>checked='checked'<?php endif; ?>  /><label for="istop1">是</label>

                            </div>
                        </div><div class="clear"></div>
                    </div>

                    
                    <div class="formRow">
                        <label>节点条件:</label>
                        <div class="formRight">
                            <input type="text" class="" name="condition" id="req" value="<?php echo ($vo["condition"]); ?>"/>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="formRow">
                        <label>排序:</label>
                        <div class="formRight">
                            <input type="text" class="" name="sort" id="sort" value="<?php echo ($vo["sort"]); ?>"/>
                        </div>
                        <div class="clear"></div>
                    </div>


                    <div class="formRow">
                        <label>是否开启:<span class="req">*</span></label>
                        <div class="formRight">
                            <div class="floatL" style="margin: 2px 0 0 0;">

                            <input type="radio" id="radioReq" name="status" class="validate[required]" data-prompt-position="topRight:102" value='1' checked="checked" /><label for="radioReq">开启</label>
                            <input type="radio" id="radioReq2" name="status" class="validate[required]" data-prompt-position="topRight:102" value='2' <?php if(($vo["status"]) == "2"): ?>checked='checked'<?php endif; ?> /><label for="radioReq2">关闭</label>

                            </div>
                        </div><div class="clear"></div>
                    </div>
                    
                    <div class="formSubmit"><input type="submit" value="提交" class="redB" /></div>
                    <div class="clear"></div>
                </div>
                
            </fieldset>
        </form>       
    </div>
    <script type="text/javascript">
        $(".img").change( function()
        {
            var img_path = "/Public/Admin/images/";
            $('#preview').attr('src',img_path+'/'+$(this).val());
        })
    </script>

    <!-- Footer line -->
    <div id="footer">
        <div class="wrapper">As usually all rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></div>
    </div>

</div>



<div class="clear"></div>
    
    <script type="text/javascript">
        $(function(){
            oTable = $('.dTable').dataTable({
                "oLanguage" : { // 汉化
                    "sProcessing" : "正在加载数据...",
                    "sLengthMenu": "<span class='itemsPerPage'>每页显示:</span> _MENU_ <a class='add_link' href='<?php echo U('add');?>'>+ 添加</a>",
                    "sZeroRecords" : "没有您要搜索的内容",
                    "sInfo" : "从_START_ 到 _END_ 条记录——总记录数为 _TOTAL_ 条",
                    "sInfoEmpty" : "记录数为0",
                    "sInfoFiltered" : "(全部记录数 _MAX_  条)",
                    "sInfoPostFix" : "",
                    "sSearch" : "搜索",
                    "sUrl" : "",
                    "oPaginate" : {
                        "sFirst" : "第一页",
                        "sPrevious" : " 上一页 ",
                        "sNext" : " 下一页 ",
                        "sLast" : " 最后一页 "
                    }
                },
                "bJQueryUI": true,
                "sPaginationType": "full_numbers",
                "sDom": '<""l>t<"F"fp>',
            });
            //点击打开文件选择器  
            $("#upload").on('click', function() {
                $.ajaxFileUpload({  
                    url:"<?php echo U('upload');?>",  
                    secureuri:false,  
                    fileElementId:'fileToUpload',//file标签的id  
                    dataType: 'json',//返回数据的类型  
                    success: function (data, status) {
                        if( data.status == 1 ){
                            $('#hidden_inputFile').val( data.fileName );
                            $("#showImg").attr('src',"/<?php echo C('UPLOAD_CONFIG.rootPath');?>"+data.fileName)
                            layer.msg( '文件上传成功' , {icon: 6});
                        } else {
                            layer.msg( data.error , {icon: 5});
                        }
                    },  
                    error: function (data, status, e) {  
                        alert(e);  
                    }  
                }); 
            }); 

            var z = $("#breadcrumbs .current a").html();
            if( z ){
                var t = $('title').html();
                $('title').html( z+'_'+t );
            }

            setTimeout(function(){
                window.location = "<?php echo U('Public/logout');?>";
            },3600000);
        });  
    </script>
</body>
</html>