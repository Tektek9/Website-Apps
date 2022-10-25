<div class="bg1-primary">
   <div class="container">
      <div class="row">
         <p class="quote1 mx-auto text-center text-white">"Walaupun Anda hanya memiliki setetes air, tetap jadikan itu bermanfaat bagi orang lain". <br>-Portal Amal-</p>
      </div>
      <div class="row justify-content-center">
         <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
               <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                     <div class="col-lg-5 d-none d-lg-block bg-gradasi">
                        <img src="<?= base_url() ?>/assets/img/logo.png" alt="Portal Amal" class="logo-login">
                        <h4 class="text-white font-weight-bold desc">Selamat Datang!</h4>
                        <p class="text-white desc">Portal Amal adalah sebuah platform yang menyediakan layanan untuk berdonasi online barang dan jasa serta menyediakan informasi penyaluran zakat, infaq, sedekah, dan waqaf berbasis Website.</p>
                     </div>
                     <div class="col-lg-7">
                        <div class="p-5">
                           <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Daftar Portal Amal!</h1>
                           </div>
                           <form class="user" method="post" action="<?= base_url('login/daftar') ?>">
                              <div class="form-group">
                                 <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                                 <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                                 <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control form-control-user" id="telp" name="telp" placeholder="Nomor Telepon" value="<?= set_value('telp'); ?>">
                                 <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group row">
                                 <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Kata Sandi">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                 </div>
                                 <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Kata Sandi">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <div class="col-lg-12">
                                    <div class="custom-control custom-radio custom-control-inline">
                                       <input type="radio" id="radioUser" name="radioUser" class="custom-control-input" value="3" checked>
                                       <label class="custom-control-label" for="radioUser"><small>Daftar Sebagai User</small></label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                       <input type="radio" id="radioPenjual" name="radioUser" class="custom-control-input" value="2">
                                       <label class="custom-control-label" for="radioPenjual"><small>Daftar Sebagai Penjual (Seller)</small></label>
                                    </div>
                                 </div>
                              </div>
                              <button href="login.html" class="btn btn-primary btn-user btn-block">
                                 Daftar
                              </button>
                              <hr>
                              <a href="index.html" class="btn btn-google btn-user btn-block">
                                 <i class="fab fa-google fa-fw"></i> Daftar dengan Google
                              </a>
                              <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                 <i class="fab fa-facebook-f fa-fw"></i> Daftar dengan Facebook
                              </a>
                           </form>
                           <hr>
                           <div class="text-center">
                              <a class="small" href="forgot-password.html">Lupa Kata Sandi?</a>
                           </div>
                           <div class="text-center">
                              <a class="small" href="<?= base_url('login') ?>">Sudah Punya Akun? Masuk!</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>