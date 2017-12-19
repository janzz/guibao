<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>用户列表</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="js/assets/css/bootstrap.min.css" />
		<script src="js/assets/js/jquery.2.1.1.min.js"></script>
		<script src="js/assets/js/bootstrap.min.js"></script>
	</head>

	<body>

	<div style="text-align: center;position: absolute; left: 50%; top: 50%;transform: translate(-50%,-50%);">
		<table class="table table-hover table-bordered">
			<thead>
			<tr>
				<th>姓名</th>
				<th>性别</th>
				<th>电话</th>
				<th>保单金额</th>
				<th>身份证号</th>
				<th>省</th>
				<th>市</th>
				<th>区</th>
				<th>详细地址</th>
				<th>推荐人姓名</th>
				<th>推荐人电话</th>
			</tr>
			</thead>

			<tbody>

                <?php foreach($userInfo as $val):?>
				<tr>
                    <td><?php echo $val->name;?></td>
                    <td><?php echo $val->sex?'男':'女';?></td>
                    <td><?php echo $val->phone;?></td>
                    <td><?php echo $val->money;?></td>
                    <td><?php echo $val->idnumber;?></td>
                    <td><?php echo $val->province;?></td>
                    <td><?php echo $val->city;?></td>
                    <td><?php echo $val->district;?></td>
                    <td><?php echo $val->address;?></td>
                    <td><?php echo $val->oname;?></td>
                    <td><?php echo $val->ophone;?></td>
				</tr>
                <?php endforeach;?>


			</tbody>

		</table>

        <?php if($page):?>
		<div class="container-fluid">
			{!! $userInfo->render() !!}
		</div>
        <?php endif;?>

	</div>





	</body>
</html>
