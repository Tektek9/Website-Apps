<!-- Stylesheet -->



<link href="https://baznas.go.id/application/views/assets/fonts/Roboto-condensed/roboto-condensed.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

<link href="https://baznas.go.id/application/views/assets/css/bootstrap-3.3.7.min.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
<noscript>
   <link rel="stylesheet" href="https://baznas.go.id/application/views/assets/css/bootstrap-3.3.7.min.css"></noscript>


<link href="https://baznas.go.id/application/views/assets/css/jquery-ui-1.21.1.min.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
<noscript>
   <link rel="stylesheet" href="https://baznas.go.id/application/views/assets/css/jquery-ui-1.21.1.min.css"></noscript>


<link href="https://baznas.go.id/application/views/assets/css/css-plugin-collections.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="https://baznas.go.id/application/views/assets/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

<!-- CSS | Main style file -->
<link href="https://baznas.go.id/application/views/assets/css/style-main.css" rel="stylesheet" type="text/css">

<!-- CSS | Preloader Styles -->
<link href="https://baznas.go.id/application/views/assets/css/preloader.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

<!-- CSS | Custom Margin Padding Collection -->
<link href="https://baznas.go.id/application/views/assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

<!-- CSS | Responsive media queries -->
<link href="https://baznas.go.id/application/views/assets/css/responsive.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

<link rel="stylesheet" href="https://baznas.go.id/application/views/assets/css/bootstrap-select-1.13.10.min.css" media="none" onload="if(media!='all')media='all'" />

<!-- CSS | Theme Color -->
<link href="https://baznas.go.id/application/views/assets/css/colors/theme-skin-green.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'" />

<!-- external javascripts -->
<script src="https://www.google.com/recaptcha/api.js"></script>


<!--Memuat CSS dan JS melalui pemanggilan ajax dan menyuntikkan mereka ketika semuanya dimuat, 
    menggunakan permintaan jquery -->


<!--Pemanggilan secara dinamis memuat file CSS atau JavaScript. -->


<script type='text/javascript' src="https://baznas.go.id/application/views/assets/js/jquery-2.2.4.min.js"></script>
<script class="load-plugin">
   $(document).ready(function() {
      var loadPlugin = {
         css: $.ajax({
            url: $(".jquery-plugin-css").data("src")
         }),
         js: $.ajax({
            url: $(".jquery-plugin-js").data("src")
         }),
      };

      var scriptJs = $.ajax({
         url: $(".script-js").data("src")
      });
      $.when(loadPlugin.css, loadPlugin.js, scriptJs).then(function() {
         loadPlugin.css.done(function(data) {
            $(".jquery-plugin-css").html(data);
         });
         loadPlugin.js.done(function(data) {
            $(".jquery-plugin-js").html(data);
         });
         scriptJs.done(function(data) {
            $(".script-js").html(data);

            var fileref = document.createElement("link")
            fileref.setAttribute("rel", "stylesheet")
            fileref.setAttribute("type", "text/css")
            fileref.setAttribute("th:href", "@{/filepath}")
            fileref.setAttribute("href", "/filepath")
            fileref.setAttribute("href", "https://baznas.go.id/")

         });
      });
   });
</script>


<script src="https://baznas.go.id/application/views/assets/js/jquery-ui-1.21.1.min.js"></script>
<script src="https://baznas.go.id/application/views/assets/js/bootstrap-3.3.7.min.js"></script>
<script src="https://baznas.go.id/application/views/assets/js/sweetalert-2.1.2.min.js"></script>
<script src="https://baznas.go.id/application/views/assets/js/bootstrap-select-1.13.10.min.js"></script>


<!-- JS | jquery plugin collection for this theme -->
<script src="https://baznas.go.id/application/views/assets/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x CSS settings -->
<link href="https://baznas.go.id/application/views/assets/js/revolution-slider/css/settings.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

<link href="https://baznas.go.id/application/views/assets/js/revolution-slider/css/layers.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

<link href="https://baznas.go.id/application/views/assets/js/revolution-slider/css/navigation.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="https://baznas.go.id/application/views/assets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="https://baznas.go.id/application/views/assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
   (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-6800595241800017",
      enable_page_level_ads: true
   });
</script>
<!-- Global site tag (gtag.js) - Google Ads: 777219646 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-777219646"></script>
<script>
   window.dataLayer = window.dataLayer || [];

   function gtag() {
      dataLayer.push(arguments);
   }
   gtag('js', new Date());
   gtag('config', 'AW-777219646');
</script>

<!-- Event snippet for Tombol bayar zakat conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
   function gtag_report_conversion(url) {
      var callback = function() {
         if (typeof(url) != 'undefined') {
            window.location = url;
         }
      };
      gtag('event', 'conversion', {
         'send_to': 'AW-777219646/v17JCOCerpgBEL7czfIC',
         'event_callback': callback
      });
      return false;
   }
</script>



<script src="https://baznas.go.id/application/views/assets/js/timepicker.js"></script>
<script src="https://baznas.go.id/application/views/js/jquery.masknumber.min.js"></script>


<script type="text/javascript">
   var url = 'https://baznas.go.id/';
</script>
<script src="https://baznas.go.id/application/views/js/meiomask-1.1.14.js"></script>
<script src="https://baznas.go.id/application/views/js/website.js?1571733353"></script>
<script src="https://baznas.go.id/application/views/js/website2.js?1571733353"></script>
<script type="text/javascript" src="https://baznas.go.id/application/views/js/jquery.formatCurrency-1.4.0.min.js"></script>
<section>
   <div class="container">
      <div class="row">
         <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
            <ul class="nav nav-tabs tabs-payment" style="background-color: #ffcb05">
               <li class="active col-md-4 col-sm-4 col-xs-4"><a href="#1-tab" data-toggle="tab" style="background-color: #ffcb05; border: 1px" class="hvr-underline-from-center">
                     <h5>Transfer</h5>
                  </a></li>
               <li class="col-md-4 col-sm-4 col-xs-4"><a href="#2-tab" data-toggle="tab" style="background-color: #ffcb05; border: 1px" class="hvr-underline-from-center">
                     <h5>Online Payment</h5>
                  </a></li>
               <li class="col-md-4 col-sm-4 col-xs-4"><a href="#3-tab" data-toggle="tab" style="background-color: #ffcb05;  border: 1px" class="hvr-underline-from-center">
                     <h5>QR Code</h5>
                  </a></li>
            </ul>
            <div class="tab-content">
               <div class="tab-pane fade in active" id="1-tab">
                  <form name="" class="clearfix" onsubmit="return submitForm()">
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="form_">Jenis Dana</label>
                           <div id="types">
                              <select id="type_of_fund" class="form-control" onchange="getSubType();" name="type_of_fund">
                                 <option value=""></option>
                                 <option value="zakat">Zakat</option>
                                 <option value="infak">Infaq</option>

                                 <!-- mematikan seementara pilihan jenis dana kurban 
                            akan dinyalakan kembali saat eventnya kurban 
                            permintaan digital-->

                                 <!--  <option value="kurban">Kurban</option> -->

                                 <!-- menambah onchange klik jenis dana sedekah
                          -->
                                 <option value="sedekah">Sedekah</option>
                              </select><br>
                              <input id="platform" name="platform" class="form-control" type="hidden" value="website">
                              <input id="npwz" name="npwz" class="form-control" type="hidden">
                              <input id="idk" name="idk" class="form-control" type="hidden">
                           </div>
                           <div id="subtypes">
                              <select class="form-control" name="subtype_of_fund" id="jenis" onchange="detectkurban();return false;">
                              </select><br>
                           </div>

                           <!-- <div class="input-group">
                        <span class="input-group-addon">Rp</span>
                        <input class="form-control" maxlength="16" name="nominal" id="nominal"
                          placeholder="Nominal dana" required="" minlength="3"
                          oninvalid="this.setCustomValidity('Minimal Rp100')" oninput="setCustomValidity('')">
                      </div><br> -->
                           <div class="form-group" id="inputjumlah">
                              <div style="width:400px;min-width: 400px;text-align: center; display: inline-block;">
                                 <font size="2"><span id="labelopt"></span></font>
                              </div>
                              <!-- <label for="pendapatan" style="width:10px; float: left;padding-left:30%;padding-right:10%;"> Rp.</label> -->
                              <div class="" id="inputqurban">
                                 <div style="width:190px; float: left; ">
                                    <font size="2"><span>Jumlah Hewan Kurban</span></font>:
                                 </div>
                                 <!-- <label for="pendapatan" class="text-center col-sm-2 control-label"> <span id="labelopt"></span></label> -->
                                 <div align="right" style="min-width: 300px">
                                    <!-- <input type="" class="form-control" id="nominal1" class="nums" placeholder="" data-mask="integer" readonly="true"> -->
                                    <select name="jumlahkambing" class="form-control" id="jumlahkambing" onchange="detectmanykurban(); return false;">
                                       <option value=""></option>
                                       <option value="1">1 Ekor</option>
                                       <option value="2">2 Ekor</option>
                                       <option value="3">3 Ekor</option>
                                       <option value="4">4 Ekor</option>
                                       <option value="5">5 Ekor</option>
                                       <option value="6">6 Ekor</option>
                                       <option value="7">7 Ekor</option>
                                    </select>
                                    <br />
                                    <input type="checkbox" value="bersedia ganti sapi" name="gantisapi" id="gantisapiid" style="float: left;" />&nbsp;<span style="float:left; padding-left: 10px;">Saya bersedia digabungkan kurbannya menjadi 1 sapi</span>
                                 </div>


                              </div>
                              <br />

                              <div class="" id="atasnama">

                              </div>

                              <div align="right" style="padding-right: 10px;"><label for="pendapatan" style="width: 10%; float: left;"> Rp.</label>
                                 <input type="" class="form-control" id="nominal" class="nums" placeholder="" data-mask="integer" style="width: 80%;">
                              </div>
                           </div>
                           <div class="" id="inputparam1">
                              <div style="width:190px; float: left; ">
                                 <font size="2"><span id="labelparam1"></span></font>:
                              </div>
                              <!-- <label for="pendapatan" class="text-center col-sm-2 control-label"> <span id="labelopt"></span></label> -->
                              <div align="right" style="min-width: 300px">
                                 <!-- <input type="" class="form-control" id="nominal1" class="nums" placeholder="" data-mask="integer" readonly="true"> -->
                                 <b><span id="nominal1"></span></b>
                              </div>
                           </div>
                           <div class="" id="inputparam2">
                              <div style="width:190px; float: left;">
                                 <font size="2"><span id="labelparam2"></span></font>:
                              </div>
                              <!-- <label for="pendapatan" class="text-center col-sm-2 control-label"> Rp.</label> -->
                              <div align="right" style="min-width: 300px">
                                 <b><span id="nominal2"></span></b>
                              </div>
                           </div>
                           <div class="" id="inputparam3">
                              <div style="width:190px; float: left;">
                                 <font size="2"><span id="labelparam3"></span></font>:
                              </div>
                              <!-- <label for="pendapatan" class="text-center col-sm-2 control-label"> Rp.</label> -->
                              <div align="right" style="min-width: 300px">
                                 <b><span id="nominal3"></span></b>
                              </div>
                           </div>
                           <div class="" id="inputparam4">
                              <div style="width:190px; float: left;">
                                 <font size="2"><span id="labelparam4"></span></font>:
                              </div>
                              <!-- <label for="pendapatan" class="text-center col-sm-2 control-label"> Rp.</label> -->
                              <div align="right" style="min-width: 300px">
                                 <b><span id="nominal4"></span></b>
                              </div>
                           </div>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="form_">Profil Penyumbang Dana</label>
                           <select class="form-control" id="user_title" name="user_title" required="">
                              <option value="" disabled>Sapaan</option>
                              <option value="Bapak">Bapak</option>
                              <option value="Ibu">Ibu</option>
                           </select><br>
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user"></i></span>
                              <input id="name" class="form-control" minlength="3" maxlength="50" type="text" name="user_name" placeholder="Nama Lengkap" onchange="" required="" oninvalid="this.setCustomValidity('Min. 3 Karakter')" oninput="setCustomValidity('')">
                           </div><br>
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                              <input class="form-control" minlength="10" maxlength="13" placeholder="No. Handphone" type="tel" id="handphone" name="user_phone" onchange="" required="" oninvalid="this.setCustomValidity('Min. 10 nomor')" oninput="setCustomValidity('')">
                           </div><br>
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                              <input class="form-control" maxlength="60" id="email" name="email" placeholder="Alamat Email" onchange="" required="" type="email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" oninvalid="this.setCustomValidity('Email Tidak Valid')" oninput="setCustomValidity('')">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <a href="#" id="pay-button" class="btn btn-colored btn-lg btn-block mt-15 mb-15 text-white js-scroll-trigger show-load-midtrans" href="#" style="background-color: red; font-family: 'Roboto Condensed', sans-serif;">BAYAR</a>
                     </div>
                     <div class="row justify-content-center"><span id="display"></span></div>
                  </form>
               </div>

               <div class="tab-pane fade in" id="2-tab">
                  <a href="https://baznas.go.id/donation"><img src="https://baznas.go.id/application/views/assets/images/paypall.webp"></a>
                  <!--                     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="WVQBNQRRFWQSQ">
                    <table class="margin-left: 100px;">
                    <tr><td><input type="hidden" name="on0" value="Type of Funds">Type of Funds</td></tr><tr><td><select name="os0">
                      <option value="General donation">General donation </option>
                      <option value="Zakat">Zakat </option>
                      <option value="Infaq">Infaq </option>
                    </select> </td></tr>
                    </table>
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form> -->

                  <!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="WVQBNQRRFWQSQ">
                    <table>
                    <tr><td><input type="hidden" name="on0" value="Type of Funds">Type of Funds</td></tr><tr><td><select name="os0">
                      <option value="Zakat Penghasilan (minimum $5)">Zakat Penghasilan (minimum $5) </option>
                      <option value="Zakat Maal (minimum $5)">Zakat Maal (minimum $5) </option>
                      <option value="Infaq / Donation (minimum $5)">Infaq / Donation (minimum $5) </option>
                    <option value="Kurban ($178/goat)">Kurban ($178/goat) </option>
                    </select> </td></tr>
                    </table>
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form> -->

                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                     <input type="hidden" name="cmd" value="_s-xclick">
                     <input type="hidden" name="hosted_button_id" value="WVQBNQRRFWQSQ">
                     <table>
                        <tr>
                           <td><input type="hidden" name="on0" value="Type of Funds">Type of Funds</td>
                        </tr>
                        <tr>
                           <td><select name="os0">
                                 <option value="Zakat Penghasilan (minimum $5)">Zakat Penghasilan (minimum $5) </option>
                                 <option value="Zakat Maal (minimum $5)">Zakat Maal (minimum $5) </option>
                                 <option value="Infaq / Donation (minimum $5)">Infaq / Donation (minimum $5) </option>
                              </select> </td>
                        </tr>
                     </table>
                     <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                     <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                  </form>



               </div>

               <div class="tab-pane fade in" id="3-tab">
                  <div class="">
                     <ul class="nav nav-tabs">
                        <li class="" onclick="openQR(event, 'Gopay')" id="defaultOpen"><a href="#4-tab" data-toggle="tab"><img src="https://baznas.go.id/application/views/assets/gojek/gopay_icon.webp"></a></li>
                        <li onclick="openQR(event, 'OVO')"><a href="#5-tab" data-toggle="tab"><img src="https://baznas.go.id/application/views/assets/ovo/ovo_icon.webp"></a></li>
                        <li onclick="openQR(event, 'linkaja')"><a href="#6-tab" data-toggle="tab"><img src="https://baznas.go.id/application/views/assets/link/linkaja-icon.webp"></a></li>



                        <li onclick="openQR(event, 'dana')"><a href="#7-tab" data-toggle="tab"><img src="https://baznas.go.id/application/views/assets/dana/dana-icon.webp"></a></li>



                        <!-- penambahan event click qr code cimb -->


                        <li onclick="openQR(event, 'cimb')"><a href="#8-tab" data-toggle="tab"><img src="https://baznas.go.id/application/views/assets/qrcode/cimb/cimb-icon.webp"></a></li>


                        <!-- penambahan event click qr code shopee -->


                        <li onclick="openQR(event, 'shopee')"><a href="#9-tab" data-toggle="tab"><img src="https://baznas.go.id/application/views/assets/qrcode/shopee/shopee-icon.webp"></a></li>


                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane fade in active" id="4-tab">
                           <div class="row">
                              <div class="col-md-4">
                                 <img src="https://baznas.go.id/application/views/assets/gojek/gojek-qr-zakat.webp">
                                 <h4 class="text-center">Zakat</h4>
                              </div>
                              <div class="col-md-4">
                                 <img src="https://baznas.go.id/application/views/assets/gojek/gojek-qr-zakat-fitrah.webp">
                                 <h4 class="text-center">Zakat Fitrah</h4>
                              </div>
                              <div class="col-md-4">
                                 <img src="https://baznas.go.id/application/views/assets/gojek/gojek-qr-infaq.webp">
                                 <h4 class="text-center">Infaq</h4>
                              </div>
                           </div>
                           <h4 class="text-center"><a href="https://api.whatsapp.com/send?phone=6287877373555&text=Assalamu%27alaikum%20BAZNAS%2C%20Saya%20ingin%20konfirmasi%20pembayaran." target="_blank"><i class="fa fa-whatsapp text-theme-colored"></i> Silahkan konfirmasi bukti pembayaran via QR code dengan cara klik <b>disini</b></h4>
                        </div>
                        <div class="tab-pane fade in" id="5-tab">
                           <div class="row">
                              <div class="col-md-4 col-md-offset-1">
                                 <img src="https://baznas.go.id//application/views/assets/ovo/ovo_qr_zakat.webp">
                                 <h4 class="text-center">Zakat</h4>
                              </div>
                              <div class="col-md-4 col-md-offset-2">
                                 <img src="https://baznas.go.id/application/views/assets/ovo/ovo_qr_infaq.webp">
                                 <h4 class="text-center">Infaq</h4>
                              </div>
                           </div>
                           <h4 class="text-center"><a href="https://api.whatsapp.com/send?phone=6287877373555&text=Assalamu%27alaikum%20BAZNAS%2C%20Saya%20ingin%20konfirmasi%20pembayaran." target="_blank"><i class="fa fa-whatsapp text-theme-colored"></i> Silahkan konfirmasi bukti pembayaran via QR code dengan cara klik <b>disini</b></h4>
                        </div>
                        <div class="tab-pane fade in" id="6-tab">
                           <div class="row">
                              <div class="col-md-4">
                                 <img src="https://baznas.go.id/application/views/assets/link/qr_linkaja_zakat.webp">
                                 <h4 class="text-center">Zakat</h4>
                              </div>
                              <div class="col-md-4">
                                 <img src="https://baznas.go.id/application/views/assets/link/qr_linkaja_infak.webp">
                                 <h4 class="text-center">Infaq</h4>
                              </div>
                              <div class="col-md-4">
                                 <img src="https://baznas.go.id/application/views/assets/link/qr_linkaja_sedekah.webp">
                                 <h4 class="text-center">Sedekah</h4>
                              </div>

                           </div>
                           <h4 class="text-center"><a href="https://api.whatsapp.com/send?phone=6287877373555&text=Assalamu%27alaikum%20BAZNAS%2C%20Saya%20ingin%20konfirmasi%20pembayaran." target="_blank"><i class="fa fa-whatsapp text-theme-colored"></i> Silahkan konfirmasi bukti pembayaran via QR code dengan cara klik <b>disini</b></h4>
                        </div>



                        <!--     Penambahan QR Dana QR_code_dana_ -->

                        <div class="tab-pane fade in" id="7-tab">
                           <div class="row">
                              <div class="col-md-4">
                                 <img src="https://baznas.go.id/application/views/assets/dana/dana-qr-zakat.webp">
                                 <h4 class="text-center">Zakat</h4>
                              </div>
                              <div class="col-md-4">
                                 <img src="https://baznas.go.id/application/views/assets/dana/dana-qr-zakat-fitrah.webp">
                                 <h4 class="text-center">Zakat Fitrah</h4>
                              </div>
                              <div class="col-md-4">
                                 <img src="https://baznas.go.id/application/views/assets/dana/dana-qr-infaq.webp">
                                 <h4 class="text-center">Infaq</h4>
                              </div>
                           </div>
                           <h4 class="text-center"><a href="https://api.whatsapp.com/send?phone=6287877373555&text=Assalamu%27alaikum%20BAZNAS%2C%20Saya%20ingin%20konfirmasi%20pembayaran." target="_blank"><i class="fa fa-whatsapp text-theme-colored"></i> Silahkan konfirmasi bukti pembayaran via QR code dengan cara klik <b>disini</b></h4>
                        </div>


                        <!--    Penambahan QR cimb   -->

                        <div class="tab-pane fade in" id="8-tab">
                           <div class="row">
                              <div class="col-md-4 col-md-offset-1">
                                 <img src="https://baznas.go.id/application/views/assets/qrcode/cimb/cimb-qr-zakat.webp">
                                 <h4 class="text-center">Zakat</h4>
                              </div>
                              <div class="col-md-4 col-md-offset-2">
                                 <img src="https://baznas.go.id/application/views/assets/qrcode/cimb/cimb-qr-sedekah.webp">
                                 <h4 class="text-center">Infaq</h4>
                              </div>
                           </div>
                           <h4 class="text-center"><a href="https://api.whatsapp.com/send?phone=6287877373555&text=Assalamu%27alaikum%20BAZNAS%2C%20Saya%20ingin%20konfirmasi%20pembayaran." target="_blank"><i class="fa fa-whatsapp text-theme-colored"></i> Silahkan konfirmasi bukti pembayaran via QR code dengan cara klik <b>disini</b></h4>
                        </div>


                        <!--    Penambahan QR Shopee -->

                        <div class="tab-pane fade in" id="9-tab">
                           <div class="row">
                              <div class="col-md-4 col-md-offset-4">
                                 <img src="https://baznas.go.id/application/views/assets/qrcode/shopee/shopee-qr-infaq.webp">
                                 <h4 class="text-center">Infaq</h4>
                              </div>
                           </div>
                           <h4 class="text-center"><a href="https://api.whatsapp.com/send?phone=6287877373555&text=Assalamu%27alaikum%20BAZNAS%2C%20Saya%20ingin%20konfirmasi%20pembayaran." target="_blank"><i class="fa fa-whatsapp text-theme-colored"></i> Silahkan konfirmasi bukti pembayaran via QR code dengan cara klik <b>disini</b></h4>


                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>