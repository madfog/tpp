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
				data-toggle="dropdown">更多 <b class="caret"></b></a><ul class="dropdown-menu"><li><a href="<?php echo U('Public/logout/');?>">退出</a></li><li><a href="<?php echo U('Dbak/index/');?>">数据库备份</a></li><li><a href="<?php echo U('Link/aindex/');?>">幻灯片</a></li><li><a href="<?php echo U('Link/index/');?>">友情链接</a></li></ul></li></ul></div><!--/.nav-collapse --></div></div><!-- end nav --><!-- begin container --><!-- end nav --><!-- begin container --><div class=" container " style="margin-top:60px"><div class="row"><div class="col-lg-12 col-md-12 col-xs-12" style="background-color: #FFF;"><!-- begin tab --><ul class="nav nav-tabs " ><li class="active"><a href="<?php echo U('Credit/index/');?>" ><b>兑换记录</b></a></li><li ><a href="<?php echo U('Credit/good/');?>" ><b>礼品管理</b></a></li></ul><div class="well"><p >请输入会员卡号查询</P><form class="form-inline" role="form" method="post" action="<?php echo U('Credit/indexs/');?>"><div class="form-group"><label class="sr-only" for="exampleInputPassword2">会员卡号</label><input type="text" class="form-control" name="id" placeholder=""></div><button type="submit" class="btns default">查找</button></form><div class="row"><div class="col-lg-2 col-md-2 col-xs-2" ></div><div class="col-lg-6 col-md-6 col-xs-6" ><span class="help-block"></span></div><div class="col-lg-4 col-md-4 col-xs-4" ></div></div><!-- end 添加 --><p></P><table class="table table-striped  table-hover "><thead><tr><th>会员号</th><th>来源/用途</th><th>积分值</th><th>时间</th><!-- <th>地点</th>--><!-- end<th>排序</th> 添加 --><th>备注</th><th>操作</th></tr></thead><tbody><?php if(is_array($creditlist)): $i = 0; $__LIST__ = $creditlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($vo["uid"]); ?></td><td><?php echo ($vo["typename"]); ?></td><!-- end <td><?php echo ($vo["dcsort"]); ?></td> 添加 --><td><?php echo ($vo["crecount"]); ?></td><td><?php echo (date("Y-m-d H:i",$vo["ctime"])); ?></td><!--<td><?php echo ($vo["sname"]); ?></td>--><td><?php echo ($vo["muname"]); echo ($vo["moneycontent"]); ?></td><td></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table></div><ul class="pagination"><?php echo ($page); ?></ul></div><!-- col end --></div><!-- end row --></div><!-- end container --><!-- /.modal --><!-- END FOOTER --><!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) --><!-- BEGIN CORE PLUGINS --><script src="__ROOT__/Public/js/jquery.js"></script><script src="__ROOT__/Public/js/bootstrap.min.js"></script><script >	$('#myModal').on('hidden.bs.modal', function (e) {
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