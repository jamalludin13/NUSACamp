<form action="" method="post">
	<div class="row">
		<label>Nama</label>
		<input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
	</div>
	<div class="row">
		<label>Handphone</label>
		<input type="text" name="handphone" value="<?=isset($_POST['handphone']) ? $_POST['handphone'] : ''?>"/>
	</div>
	<div class="row">
		<label>Addres</label>
		<input type="text" name="addres" value="<?=isset($_POST['addres']) ? $_POST['addres'] : ''?>"/>
	</div>
	</div>
	<div class="row">
		<label>Gender</label>
		<div class="options">
			<?php
			$gender = array('L' => 'Laki Laki', 'P' => 'Perempuan');
			foreach ($gender as $kode => $detail) {
				$checked = @$_POST['gender'] == $kode ? ' checked="checked"' : '';
				echo '<label class="radio">
						<input name="gender" type="radio" value="' . $kode . '"' . $checked . '>' . $detail . '</option>
					</label>';

			}
			?>

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
	echo '<h1>Hasil Input</h1>';
	echo '<ul>';
	echo '<li>Nama: ' . $_POST['nama'] . '</li>';
	echo '<li>Handphone: ' . $_POST['handphone'] . '</li>';
	echo '<li>Addres: ' . $_POST['addres'] . '</li>';
	echo '<li>Gender: ' . (isset($_POST['gender']) ? $gender[$_POST['gender']] : '-') . '</li>';
	
}
?>
