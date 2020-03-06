
<form action="" method="post">
	<div class="row">
		<label>Partai</label>
		<input type="text" name="partai" value="<?=isset($_POST['partai']) ? $_POST['partai'] : ''?>"/>
	</div>
	<div class="row">
		<label>NO Urut</label>
		<input type="text" name="nourut" value="<?=isset($_POST['nourut']) ? $_POST['nourut'] : ''?>"/>
	</div>
	<div class="row">
		<label>Dapil</label>
		<input type="text" name="dapil" value="<?=isset($_POST['dapil']) ? $_POST['dapil'] : ''?>"/>
	</div>
	<div class="row">
		<label>Istri</label>
		<input type="text" name="istri" value="<?=isset($_POST['istri']) ? $_POST['istri'] : ''?>"/>
	</div>
	</div>
	</div>
		</div>
	</div>
	<div class="row">
		<input type="submit" name="submit" value="Simpan"/>
	</div>
</form>

<?php
if (isset($_POST['submit'])) {
	echo '<h1>Hasil Caleg</h1>';
	echo '<ul>';
	echo '<li>Partai : ' . $_POST['partai'] . '</li>';
	echo '<li>NO Urut: ' . $_POST['nourut'] . '</li>';
	echo '<li>Dapil : ' . $_POST['dapil'] . '</li>';
	echo '<li>Istri: ' . $_POST['istri'] . '</li>';
	// echo '<li>NPWP: ' . (isset($_POST['npwp']) ? $npwp[$_POST['npwp']] : '-') . '</li>';
	
}
?>