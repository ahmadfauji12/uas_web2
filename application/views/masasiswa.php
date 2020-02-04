<section>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="<?= base_url(); ?>assets/css/style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/style.js"></script>

<div class="x_title">
                    <h1 align="center">Data  <small>siswa</small></h1>
                    <div class="clearfix"></div>
                  </div>
                  </div>
                  <a href="<?php echo site_url('Myadmin/inputmahs');?>"><button class="btn btn-danger"> Tambah Data</button></a>
                  <br>
                  <br>

<div class="container">
	<div class="row">
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Npm</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Nomor tlp/Hp</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php		
			$no = 1;
			foreach($user as $a){
			?>
        <tbody>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $a->npm ?></td>
                <td><?= $a->nama ?></td>
                <td><?= $a->program_studi ?></td>
                <td><?= $a->email?></td>
                <td><?= $a->nomor ?></td>
                <td><?= $a->alamat ?></td>
                <td><?= $a->tgl_lahir ?></td>
                <td style="vertical-align: middle;" align="center">
                <?= anchor('Myadmin/editmahasiswa/'.$a->id,' <span class="btn btn-primary"><i class="fa fa-edit"></i></span>');?>
                <?= anchor('Myadmin/hapusm/'.$a->id,'
                <span class="btn btn-danger"><i class="fa fa-trash"></i></span>', array('class'=>'delete', 'onclick'=>"return confirm('apa anda yakin.....?');"));?>
                        </td>
            </tr>
        </tbody>
        <?php	
				}			
			?>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Npm</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Nomor tlp/Hp</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
    </table>
	</div>
</div>
</section>