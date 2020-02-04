<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<section>
                  
<form action="<?= base_url('Myadmin/m_edit');?>" name="myForm" method="post" onsubmit="return(validate());">
<?php 
	if(!empty($user)){
?>
<?php foreach($user as $u){ ?>
	<input name="id" maxlength="12" value="<?= $u->id; ?>" hidden>
	<div class="container-fluid">
		<div class="row">
			<div class="well center-block">
				<div class="well-header">
                <h1 align="center"><small>Edit </small>Data <small>siswa</small></h1>
					<hr>
				</div>
				
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-lock"></i>
								</div>
								<input type="number" minlength="7" maxlength="30" placeholder="Npm" name="npm" class="form-control" value="<?= $u->npm; ?>">
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
								<input type="text" placeholder="Nama Mahasisawa" name="nama" class="form-control" value="<?= $u->nama; ?>">
								
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
								<input type="text" placeholder="program Studi" name="studi" class="form-control" value="<?= $u->program_studi; ?>">
								
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
								<input type="number" minlength="10" maxlength="12" class="form-control" name="nomor" placeholder="Nomor telpon/Nomor HP" value="<?= $u->nomor; ?>">
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
								<input type="email" class="form-control" name="email" placeholder="E-Mail" value="<?= $u->email; ?>">
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
								<textarea class="form-control" name="alamat" placeholder="Alamat Tinggal" value=""><?= $u->alamat; ?></textarea>
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
								<input type="date" name="tgl" placeholder="Tanggal Lahir" class="form-control" id="datepicker" value="<?= $u->tgl_lahir; ?>">
							</div>
						</div>
					</div>
				</div>

				<div class="row widget">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<button class="btn btn-success btn-block"> Edit </button>
					</div>
				</div>


				<div class="row widget">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<button class="btn btn-danger btn-block"> Batal</button>
					</div>
				</div>
				<?php } ?>
				<?php } else{
					// redirect ('Myadmin/error');
					echo "Data Kosong! <center>";
				}
				?>
			</div>
		</div>
	</div>
    </section>