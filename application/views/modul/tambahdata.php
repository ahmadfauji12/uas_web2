<table border="1">
<ul>
<td>
<form action="<?php echo base_url('Myadmin/aksi_tambah_data')?>" method="POST" accept-charset="utf-8">

NPM :  <input type="number" name="npm" maxlength="12" placeholder="Masukkan NPM . . ." required><br></input>
Nama : <input type="text" name="nama" placeholder="Masukkan Nama Mahasiswa . . ." required><br></input>
<select name="semester" multiple>
	<option value="">* Pilih Semester</option>
		<?php for ($i=0; $i < 11 ; $i++) { ?>
		<option value="<?php echo $i;?>">Semester<?php echo $i;?>1</option>
		<?php } ?>
</select>
<button type="submit" value="Submit">Simpan Data</button>
</form>
</table>

<?php
foreach ($data_blog as $blog):
  echo "<h3>".$nama['str_nama']." </h3>";
  echo $npm['int_npm'];
  echo "<p>".$semester['int_semester']."</p>";
endforeach
?>