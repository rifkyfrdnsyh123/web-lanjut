<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Akademik::Tambah Data KulTawar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styleku.css">
	<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
	<?php
	require "head.html";
	require "fungsi.php";

	$rs_matkul = search('matkul');
	?>
	<div class="utama">
		<form action="saveJadwal.php" method="POST">
			<div class="form-group">
				<label for="matkul">PENAWARAN MATAKULIAH</label>
				<select name="matkul" id="matkul"
				class="form-control">
				<option disabled selected>- Pilih Matakuliah-</option>
				<?php
				while($data_matkul = mysqli_fetch_object($rs_matkul))
				{
				?>
					<option value="<?php echo $data_matkul->id?>"><?php echo $data_matkul->idmatkul, "-",$data_matkul->namamatkul?></option>
				<?php
				}
				?>
					</select>
						</div>
						<div
						class ="form-group">
						<select name="dosen" id="dosen"
						class="form-control">
						<option disable selected>- Pilih Dosen-</option>
					</select>
					</div>
			</form>
			<script>
				$(document).ready(function(){
					$("#matkul").change(function(){
						var mk = $(this).val()
						$.post('ajaxTawar.php',{mk:mk},function(data){
							if(data!="")
							{
								$("#dosen").html(data)
							}
						})
					})
				})
			</script>
	</body>
</html>
	