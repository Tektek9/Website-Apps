<div class="bg1-primary">
   <div class="container">
      <div class="row">
         <p class="quote1 mx-auto text-center text-white">"Apabila anak Adam itu mati, maka terputuslah amalnya, keculai (amal) dari tiga ini:<br>
            sedekah yang berlaku terus menerus, pengetahuan yang dimanfaatkan, <br>
            dan anak sholeh yang mendoakan dia." (HR. Muslim)</p>
      </div>
      <!-- Outer Row -->
      <div class="row justify-content-center">
         <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
               <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                     <div class="col-lg-6 d-none d-lg-block bg-gradasi">
                        <img src="<?= base_url() ?>assets/img/logo.png" alt="Portal Amal" class="logo-login">
                        <h4 class="text-white font-weight-bold desc">Selamat Datang!</h4>
                        <p class="text-white desc">Portal Amal adalah sebuah platform yang menyediakan layanan untuk berdonasi online barang dan jasa serta menyediakan informasi penyaluran zakat, infaq, sedekah, dan waqaf berbasis Website.</p>
                     </div>
                     <div class="col-lg-6">
                        <div class="p-5">
                           <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Masuk Portal Amal</h1>
                           </div>
                           <?= $this->session->flashdata('message'); ?>
                           <form class="user" method="post" action="<?= base_url('login') ?>">
                              <div class="form-group">
                                 <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan Alamat Email..." value="<?= set_value('email'); ?>">
                                 <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                                 <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Kata Sandi">
                                 <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                                 <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label" for="customCheck">Ingat Saya</label>
                                 </div>
                              </div>
                              <button href="index.html" class="btn btn-primary btn-user btn-block">
                                 Masuk
                              </button>
                              <hr>
                              <button href="index.html" class="btn btn-google btn-user btn-block">
                                 <i class="fab fa-google fa-fw"></i> Masuk dengan Google
                              </button>
                              <button href="index.html" class="btn btn-facebook btn-user btn-block">
                                 <i class="fab fa-facebook-f fa-fw"></i> Masuk dengan Facebook
                              </button>
                           </form>
                           <hr>
                           <div class="text-center">
                              <a class="small" href="forgot-password.html">Lupa Kata Sandi?</a>
                           </div>
                           <div class="text-center">
                              <a class="small" href="<?= base_url('login/daftar') ?>">Buat Akun Baru!</a>
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