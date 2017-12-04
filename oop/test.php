<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		img{
			display: none;
		}
		button{
			border: navajowhite;
		    padding: 5px 20px;
		    border-radius: 6px;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body style="padding: 0px 200px;background: #ededed">
	<?php 
		include('lib/crawler.php');
		include('config.php');
	 ?>
	 			<div style="padding: 20px 100px;background: #fff;">
	 				<h2>Nhúng link bài viết </h2>
	 			<form action="" method="post" >
					<input style="width: 50%;" type="text" name="geturls" class="form-control">
					<br>
					<h2>Chọn trang</h2>
					<input type="radio" name="swap" value="1" checked> vnexpress<br>
  					<input type="radio" name="swap" value="2"> vietnamnet<br>
					<br>
					<button class="btn-success" type="submit" name="geturrls">get</button>
					
				</form>

				<?php if (isset($_POST['geturls'])){ ?>
				<br>
					<form action="" method="post" >
					<h4>title</h4>
					<input type="text" class="form-control" value="<?php echo $tit[1]; ?>" name="savetit">
					<br>
					<h4>content</h4>
					<textarea rows="10" class="form-control" name="savecont"><?php echo $content[1]; ?></textarea>
					<br>
					<button class="btn-primary"  type="submit" name="save">save</button>
				</form>
				<?php } ?>
				<table class="table-striped">
					<thead>
						<h2>Các post đã lưu</h2>
						<tr>
							<th>title</th>
							<th>content</th>
						</tr>
					</thead>
					<tbody>
						
							<?php 
			                foreach ($sql as $item){
			                ?>
				                   	<tr>
										<td><?php echo $item['tit'] ; ?></td>
										<td><?php echo $item['con'] ?></td>
					        		</tr>
					        <?php
					       		 }

							?>
							
						
					</tbody>
				</table>
	 			</div>
</body>
</html>