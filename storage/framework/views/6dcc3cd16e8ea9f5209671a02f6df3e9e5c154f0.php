<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bukawarung</title>
	<link rel="stylesheet" href="css/pembeli.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<header>
		<h1>Pembeli</h1>
	</header>

	<!-- new product -->
	<div class="section">
		<div class="container">
			<h3>Produk</h3>
			<?php $__currentLoopData = $pembeli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="box">
				<tr>
					<div class="col-4">
						<p><?php echo e($data['username']); ?></p>
						<p><?php echo e($data['email']); ?></p>
					</div>
				</tr>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>

</body>

</html><?php /**PATH C:\kibort\resources\views/pembeli.blade.php ENDPATH**/ ?>