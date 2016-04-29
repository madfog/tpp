<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><!--[if IE 8]><html lang="en" class="ie8 no-js"><![endif]--><!--[if IE 9]><html lang="en" class="ie9 no-js"><![endif]--><!--[if !IE]><!--><html lang="en" class="no-js"><!--<![endif]--><!-- BEGIN HEAD --><head><meta charset="utf-8" /><title><?php echo ($webtitle); ?>－管理后台</title><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta content="width=device-width, initial-scale=1.0" name="viewport" /><meta content="" name="description" /><meta content="" name="author" /><meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Bootstrap --><!-- BEGIN GLOBAL MANDATORY STYLES --><link href="__ROOT__/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/><link href="__ROOT__/Public/css/admin.css" rel="stylesheet" type="text/css"/><link href="__ROOT__/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/><!-- END GLOBAL MANDATORY STYLES --><!-- BEGIN THEME STYLES --><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --><!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]><script src="__ROOT__/Public/js/html5shiv.min.js"></script><script src="__ROOT__/Public/js/respond.min.js"></script><![endif]--><!-- END THEME STYLES --></head><!-- BEGIN BODY --><body><!-- BEGIN nav --><!-- BEGIN nav --><div role="navigation" class="navbar  navbar-default navbar-fixed-top"><div class=" container"><div class="navbar-header"><button data-target=".navbar-collapse" data-toggle="collapse"
			class="navbar-toggle" type="button"><span class="sr-only">Toggle
		navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="__ROOT__" class="navbar-brand"><i class="fa fa-cloud"></i>
		超级外卖</a></div><p class="navbar-text" style="color: #FFF;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><div class="navbar-collapse collapse"><ul class="nav navbar-nav"><li class="nli"><a href="<?php echo U('Config/index/');?>"><i
				class="fa fa-cog"></i> 基本设置</a></li><li class="nli"><a href="<?php echo U('Foodcat/index/');?>"><i
				class="fa fa-th"></i> 商品</a></li><li class="nli"><a href="<?php echo U('Order/index/');?>"><i
				class="fa fa-shopping-cart"></i> 订单</a></li><li class="nli"><a href="<?php echo U('Credit/index/');?>"><i
				class="fa fa-leaf"></i> 积分</a></li><li class="nli"><a href="<?php echo U('Member/index/');?>"><i
				class="fa fa-user"></i> 会员</a></li><li class="nli"><a href="<?php echo U('Message/index/');?>"><i
				class="fa fa-rss-square"></i>留言</a></li><li class="nli"><a href="<?php echo U('Article/index/');?>"><i
				class="fa fa-user"></i> 文章</a></li><li class="nli"><a href="#"><i class="fa fa-comments"></i> 微信</a></li></ul><ul class="nav navbar-nav navbar-right"><li><a href="<?php echo U('Config/unrunfile/');?>"> 清除缓存</a></li><li class="dropdown"><a href="#" class="dropdown-toggle"
				data-toggle="dropdown">更多 <b class="caret"></b></a><ul class="dropdown-menu"><li><a href="<?php echo U('Public/logout/');?>">退出</a></li><li><a href="<?php echo U('Dbak/index/');?>">数据库备份</a></li><li><a href="<?php echo U('Link/aindex/');?>">幻灯片</a></li><li><a href="<?php echo U('Link/index/');?>">友情链接</a></li></ul></li></ul></div><!--/.nav-collapse --></div></div><!-- end nav --><!-- begin container --><!-- end nav --><!-- begin container --><div class=" container " style="margin-top:60px;min-height:600px;"><div class="row"><div class="col-lg-12 col-md-12 col-xs-12" style="background-color: #FFF;"><!-- begin tab --><ul class="nav nav-tabs " ><li class="active"><a href="<?php echo U('Foodcat/index/');?>" ><b>商品分类</b></a></li><li><a href="<?php echo U('Foodcat/add/');?>" ><b>分类增加</b></a></li><li><a href="<?php echo U('Food/index/');?>" ><b>商品维护</b></a></li><li><a href="<?php echo U('Food/add/');?>" ><b>商品增加</b></a></li></ul><p></P><div class="row"><div class="col-lg-2 col-md-2 col-xs-2" ><a class="btn blue" href="<?php echo U('Foodcat/add/');?>"><i class="fa fa-plus"></i>增加分类</a></div><div class="col-lg-6 col-md-6 col-xs-6" ><span class="help-block">商品分类 如：小炒，酒水，中餐，川菜</span></div><div class="col-lg-4 col-md-4 col-xs-4" ></div></div><!-- end 添加 --><p></P><table class="table table-striped table-bordered table-hover"><thead><tr><th>ID</th><th>分类名</th><th>排序</th><th>操作</th></tr></thead><tbody><?php if(is_array($foodcatlist)): $i = 0; $__LIST__ = $foodcatlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($vo["fcid"]); ?></td><td><?php echo ($vo["fcname"]); ?></td><td><?php echo ($vo["fcsort"]); ?></td><td><a  href="<?php echo U('Foodcat/edit/','id='.$vo['fcid']);?>" ><i class="fa fa-edit"></i> 修改</a><a  href="<?php echo U('Foodcat/del/','id='.$vo['fcid']);?>"><i class="fa fa-trash-o"></i> 删除</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table></div><!-- tab1 --></div><!-- col end --></div><!-- end row --></div><!-- end container --><!-- /.modal --><br><br><div class="foot navbar-fixed-bottom" style="background-color:#333;color:#FFf;"><div class="container"><br><p align="center">© 2014 技术支持:<a href="http://www.bijiadao.net/" target="_blank">超级外卖</a>　     手机版　微信本即将上线</p></div></div><!-- END FOOTER --><!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) --><!-- BEGIN CORE PLUGINS --><script src="__ROOT__/Public/js/jquery.js"></script><script src="__ROOT__/Public/js/bootstrap.min.js"></script><script >	$('#myModal').on('hidden.bs.modal', function (e) {
	location.reload()

})
$('#ajax').on('hidden.bs.modal', function (e) {
	location.reload()

})


function delcfm() {
if (!confirm("确认要删除？")) {
window.event.returnValue = false;
}
}




</script><!-- END CORE PLUGINS --><!-- END JAVASCRIPTS --></body><!-- END BODY --></html>