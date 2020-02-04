<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<section>
<script>
function validate()
		{
			if (document.myForm.npm.value == "") 
			{
				alert("Silahkan Masukan Npm Anda");
				document.myForm.npm.focus();
				return false;
			}
			if (document.myForm.nama.value == "") 
			{
				alert("Silahkan Masukan Nama Anda");
				document.myForm.nama.focus();
				return false;
			}
			
			if (document.myForm.studi_studi.value == "") 
			{
				alert("Silahkan Masukan Prohram Studi Anda");
				document.myForm.program_studi.focus();
				return false;
			}

			if (document.myForm.email.value == "")
			{
				alert("Masukan Email anda");
				document.myForm.email.focus();
				return false;
			}

			if (document.myForm.nomor.value == "") 
			{
				alert("silahkan Masukan Nomor telon atau Hp anda");
				document.myForm.nomor.focus();
				return false;
			}

			if (document.myForm.almat.value == "") 
			{
				alert("Silahahkan Msukna email anda");
				document.myForm.alamat.focus();
				return false;
			}

			if (document.myForm.tgl_lahir.value == "") 
			{
				alert("Masukan Tanggal Lahir dengan benar");
				document.myForm.tgl_lahir.focus();
				return false;
			}

			if (document.myForm.dob.value == "")
			{
				alert("Please Enter Date of Birth");
				document.myForm.dob.focus();
				return false;
			}
		}
		</script>
<form action="<?= base_url('Myadmin/m_tambahdata');?>" name="myForm" method="post" onsubmit="return(validate());">
			</div>
	<div class="container-fluid">
		<div class="row">
			<div class="well center-block">
				<div class="well-header">
				<?= $this->session->flashdata('pesanTambahdata'); ?>
                <h1 align="center"><small>Input </small>Data <small>siswa</small></h1>
					<hr>
				</div>
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-lock"></i>
								</div>
								<input type="number" minlength="7" maxlength="30" placeholder="Npm" name="npm" class="form-control">
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-user"></i>
								</div>
								<input type="text" placeholder="Nama Mahasisawa" name="nama" class="form-control">
								
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-calendar"></i>
								</div>
								<label for="semester">Program Studi :</label> 
				 	<select name="program_studi" class="form-control">
								<option value="Teknik Informatika">Teknik Informatika</option>
								<option value="Teknik Industri">Teknik Industri</option>				
								<option value="Desain Komunikasi visual">Desain Komunikasi visual </option>
							</select>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-phone"></i>
								</div>
								<input type="number" minlength="10" maxlength="12" class="form-control" name="nomor" placeholder="Nomor telpon/Nomor HP"> 
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-envelope"></i>
								</div>
								<input type="email" class="form-control" name="email" placeholder="E-Mail">
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-list-alt"></i>
								</div>
								<textarea class="form-control" name="alamat" placeholder="Alamat Tinggal"></textarea>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-calendar"></i>
								</div>
								<input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control" id="datepicker">
							</div>
						</div>
					</div>
				</div>

				<div class="row widget">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<button class="btn btn-info btn-block" onclick="return confirm('apa anda yakin.....?');"> Simpan</button>
					</div>
				</div>


				<div class="row widget">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<button class="btn btn-danger btn-block"> Batal</button>
					</div>
				</div>

			</div>
		</div>
	</div>
    </section>