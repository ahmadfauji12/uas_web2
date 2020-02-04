<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<section>
    
<div class="emp-profile">
            <form method="post" >
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="<?= base_url('assets/img/').$user['image'];?>" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    <?= $user['nama'];?>
                                    </h5>
                                    <h6>
                                        Web Developer and Designer
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tentang saya</a>
                                </li>
                                <li class="nav-item">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Npm</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>  <?= $user['npm'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>  <?= $user['nama'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Program Studi</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Teknik Informatika</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jurusan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Creatife Infomatic Development</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>ahmadfauji1130@gmail.com</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gabung sejak</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>  <?= date('d F Y', $user['date_created']);?></p>
                                            </div>
                                        </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
</section>
