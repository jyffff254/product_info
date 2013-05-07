<html>
	<head>
		<!-- <meta content="text/html; charset=UTF-8" http-equiv="content-type"> -->
		<meta charset="UTF-8">
		<title>商品信息管理</title>
	</head>
	<body>
		<center>
			<?php include("menu.php");//导入导航栏?>
			<h3>发布商品信息<h3>
			<table border="1" width="300">
				<tr>
					<td align="right" >名称</td>
					<td><input type="text" name="name"/></td>
				</tr>
				<tr>
					<td align="right" >类型</td>
					<td>
						<select name="typelist">
						<?php 
							include("dbconfig.php");
							foreach($typelist as $k=>$v){
								echo "<option value='{$k}'>{$v}</option>";
							}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td align="right" >单价</td>
					<td><input type="text" name="price"/></td>
				</tr>
				<tr>
					<td align="right" >库存</td>
					<td><input type="file" name="total"/></td>
				</tr>
				<tr>
					<td align="right" >图片</td>
					<td><input type="text" name="pic"/></td>
				</tr>
				<tr>
					<td align="right" >描述</td>
					<td><textarea rows="10" cols="30"  name="note"/></textarea>
				</tr>
		</center>
	</body>
</html>