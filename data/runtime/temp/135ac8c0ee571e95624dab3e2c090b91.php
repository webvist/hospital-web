<?php /*a:2:{s:121:"/www/wwwroot/kyhospital.sdwanyue.com/kyhospital.sdwanyue.com/public/themes/admin_simpleboot3/admin/registration/read.html";i:1693789694;s:111:"/www/wwwroot/kyhospital.sdwanyue.com/kyhospital.sdwanyue.com/public/themes/admin_simpleboot3/public/header.html";i:1695265665;}*/ ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- HTML5 shim for IE8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->


  <link href="/themes/admin_simpleboot3/public/assets/themes/<?php echo cmf_get_admin_style(); ?>/bootstrap.min.css" rel="stylesheet">
  <link href="/themes/admin_simpleboot3/public/assets/simpleboot3/css/simplebootadmin.css" rel="stylesheet">
  <link href="/static/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>
    form .input-order {
      margin-bottom: 0px;
      padding: 0 2px;
      width: 42px;
      font-size: 12px;
    }

    form .input-order:focus {
      outline: none;
    }

    .table-actions {
      margin-top: 5px;
      margin-bottom: 5px;
      padding: 0px;
    }

    .table-list {
      margin-bottom: 0px;
    }

    .form-required {
      color: red;
    }

    .bottom ul {
      display: flex;
      justify-content: center;
    }

    .bottom li {
      margin-right: 10px;
      color: aliceblue;
      list-style: none;
    }

    .bottom li a {
      color: #979292;
    }

    .bottom p {
      text-align: center;
      color: #979292;
    }
  </style>
  <?php 
    $cmf_version=cmf_version();
    if (strpos(cmf_version(), '6.') === 0) {
    $_app=app()->http->getName();
    }else{
    $_app=request()->module();
    }
   ?>
  <script type="text/javascript">
    //全局变量
    var GV = {
      ROOT: "/",
      WEB_ROOT: "/",
      JS_ROOT: "static/js/",
      APP: '<?php echo $_app; ?>'/*当前应用名*/
    };
  </script>
  <script src="/themes/admin_simpleboot3/public/assets/js/jquery-1.10.2.min.js"></script>
  <script src="/static/js/wind.js"></script>
  <script src="/themes/admin_simpleboot3/public/assets/js/bootstrap.min.js"></script>
  <script>
    Wind.css('artDialog');
    Wind.css('layer');
    $(function () {
      $("[data-toggle='tooltip']").tooltip({
        container: 'body',
        html: true,
      });
      $("li.dropdown").hover(function () {
        $(this).addClass("open");
      }, function () {
        $(this).removeClass("open");
      });
    });
  </script>
  <?php if(APP_DEBUG): ?>
    <style>
      #think_page_trace_open {
        z-index: 9999;
      }
    </style>
  <?php endif; ?>
</head>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <?php if($type == 1): ?>
            <li><a href="<?php echo url('Registration/index'); ?>">返回</a></li>
            <?php else: ?>
            <li><a href="<?php echo url('Inquiry/index'); ?>">返回</a></li>
        <?php endif; ?>
		<li class="active"><a href="<?php echo url('health/Add'); ?>">详情</a></li>
    </ul>
    <form class="form-horizontal js-ajax-form margin-top-20" >

        <div class="form-group">
            <label for="input-name" class="col-sm-2 control-label"><span class="form-required">*</span>三方订单号</label>
            <div class="col-md-6 col-sm-10">
                <input type="text" class="form-control" id="input-name" name="" disabled value="<?php echo (isset($info['trade_no']) && ($info['trade_no'] !== '')?$info['trade_no']:'---'); ?>">
            </div>
        </div>
     
        <?php echo $div; ?>
    </form>
</div>
<script src="/static/js/admin.js"></script>

</body>
</html>