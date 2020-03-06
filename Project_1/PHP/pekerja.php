
<form action="" method="post">
	<div class="row">
		<label>Company</label>
		<input type="text" name="company" value="<?=isset($_POST['company']) ? $_POST['company'] : ''?>"/>
	</div>
	<div class="row">
		<label>Company Phone</label>
		<input type="text" name="companyphone" value="<?=isset($_POST['companyphone']) ? $_POST['companyphone'] : ''?>"/>
	</div>
	<div class="row">
		<label>Addres Company</label>
		<input type="text" name="addcompany" value="<?=isset($_POST['addcompany']) ? $_POST['addcompany'] : ''?>"/>
	</div>
	<div class="row">
		<label>NPWP</label>
		<input type="text" name="npwp" value="<?=isset($_POST['npwp']) ? $_POST['npwp'] : ''?>"/>
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
	echo '<h1>Hasil Input Pekerjaan</h1>';
	echo '<ul>';
	echo '<li>Company: ' . $_POST['company'] . '</li>';
	echo '<li>Company Phone: ' . $_POST['companyphone'] . '</li>';
	echo '<li>Company Addres: ' . $_POST['addcompany'] . '</li>';
	echo '<li>Company Addres: ' . $_POST['addcompany'] . '</li>';
	// echo '<li>NPWP: ' . (isset($_POST['npwp']) ? $npwp[$_POST['npwp']] : '-') . '</li>';
	
}
?>