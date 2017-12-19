<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>登录页面</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="js/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="js/assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="js/assets/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="js/assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="js/assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="js/assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="js/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="js/assets/js/html5shiv.min.js"></script>
		<script src="js/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout blur-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container" style="width:475px;">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">Ace</span>
									<span class="white" id="id-text2">应用管理</span>
								</h1>
								<h4 class="light-blue" id="id-company-text">&copy; 公司名称</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												请输入您的信息
											</h4>

											<div class="space-6"></div>

											<form id="login-form">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="uname" placeholder="请输入手机号" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="password" placeholder="密码" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														

														<button type="button" class="width-35 pull-right btn btn-sm btn-primary" id="login">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">登录</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

									
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											

											<div>
												<a href="#" data-target="#signup-box" class="user-signup-link">
													注册
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>
												用户注册
											</h4>

											<div class="space-6"></div>
											

											<form id="register-form">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="name" class="form-control" placeholder="姓名" />
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
                                                            <select id="sex"  name="sex" class="form-control">
																<option value="2">请选择性别</option>
																<option value="1">男</option>
																<option value="0">女</option>
															</select>
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="phone" class="form-control" placeholder="手机号" />
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="money" class="form-control" placeholder="报单金额" />
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="idnumber" class="form-control" placeholder="身份证号" />
														</span>
													</label>

													<label class="block clearfix">
                                                        <div data-toggle="distpicker">
                                                            <select id="eprovinceName"  name="provinceName"></select>
                                                            <select id="ecityName"  name="cityName"></select>
                                                            <select id="edistrictName" name="districtName"></select>
                                                        </div>
													</label>


													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="address" class="form-control" placeholder="详细地址" />
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name='oname' class="form-control" placeholder="推荐人姓名" />
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name='ophone' class="form-control" placeholder="推荐人手机号" />
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="password" placeholder="密码" />
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="repassword" class="form-control" placeholder="确认密码" />
														</span>
													</label>

													

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">重置</span>
														</button>

														<button type="button" id="register" class="width-65 pull-right btn btn-sm btn-success">
															<span class="bigger-110" >注册</span>

															<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												返回登录
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->

						
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="js/assets/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="js/assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='js/assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>

<script type="text/javascript">
 window.jQuery || document.write("<script src='js/assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='js/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<script type="text/javascript" src="js/distpicker/distpicker.data.js"></script>
		<script type="text/javascript" src="js/distpicker/distpicker.js"></script>
		<script type="text/javascript" src="js/distpicker/main.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
                $("#distpicker").distpicker();

                $('#register').click(function(){
                    var params = $("#register-form").serializeArray();
                    var values = {};
                    for( x in params ){
                        values[params[x].name] = params[x].value;
                    }
                    var formdata = JSON.stringify(values);
                    $.ajax({
                        url: "{{route('login.register')}}",
                        type:"post",     //请求类型
                        data:{'_token':'{{csrf_token()}}',formdata:formdata},  //请求的数据
                        dataType:"json",  //数据类型
                        success: function(data){
							alert(data.msg);
                        },

                        error: function(msg) {
                            var json=JSON.parse(msg.responseText);
                                alert(json.message);
                        },

                    })
				})


                $('#login').click(function(){
                    var params = $("#login-form").serializeArray();
                    var values = {};
                    for( x in params ){
                        values[params[x].name] = params[x].value;
                    }
                    var formdata = JSON.stringify(values);
                    $.ajax({
                        url: "{{route('login.verifyLogin')}}",
                        type:"post",     //请求类型
                        data:{'_token':'{{csrf_token()}}',logindata:formdata},  //请求的数据
                        dataType:"json",  //数据类型
                        success: function(data){
                            if(data.status == 0){
                                alert(data.msg);
                            }else if(data.status == 1){
                                window.location.href="{{route('login.main')}}"
                            }
                        },

                        error: function(msg) {
                            var json=JSON.parse(msg.responseText);
                            alert(json.message);
                        },

                    })
                })
			});
			
			
		</script>
		<div style="text-align:center;">

</div>
	</body>
</html>
