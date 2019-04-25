<!DOCTYPE html>
<html lang="en">

    <?php include 'head.php';?>
    
<body class="full-layout">
    <div class="content-wrapper">
        <?php include 'header-link.php';?>
        <section id="flows">
            <div class="container">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="flow-img">
                            <img src="assets/images/stepwan.png" class="img-responsive tengah">
                        </div>
                        <div class="flow-desc text-center">
                            <h4>Login/Daftar Akun DetikEvent</h4>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="flow-img">
                            <img src="assets/images/steptu.png" class="img-responsive tengah">
                        </div>
                        <div class="flow-desc text-center">
                            <h4>Pilih Event Yang Ingin Kamu Ikuti</h4>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="flow-img">
                            <img src="assets/images/steptri.png" class="img-responsive tengah">
                        </div>
                        <div class="flow-desc text-center">
                            <h4>Isi Data Diri Kamu dengan Lengkap</h4>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="flow-img">
                            <img src="assets/images/stepfor.png" class="img-responsive tengah">
                        </div>
                        <div class="flow-desc text-center">
                            <h4>Kirim dan Tungu Konfirmasi Dari Kami</h4>

                        </div>
                    </div>
                </div>
            </div>
        </section>  
        <section id="daftar">
            <div class="container">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    <div class="ketentuan">
                        <h2 class="text-center">Syarat dan Ketentuan</h2>
                        <p>hai <span class="member-name">Nama Peserta</span>, Diharapkan Kamu membaca syarat dan ketentuan dengan teliti ya..</p>
                        <ul>
                            <li>Peserta mengisi form dengan lengkap</li>
                            <li>Periode pendaftaran sampai dengan 15 Mei 2015</li>
                            <li>Detikcom Women’s Day – Talkshow Mompreneur akan dilaksanakan pada Minggu, 17 Mei 2015 pukul 15.00 – 15.50 WIB di Piazza, GF, Gandaria City</li>
                            <li>Peserta harus men-follow akun twitter @wolipop, men-follow akun Instagram @wolipop dan ‘like’ fanpage wolipop</li>
                            <li>Acara ini tidak dipungut biaya apapun atau gratis</li>
                            <li>Peserta wajib datang 30 menit sebelum acara untuk registrasi ulang</li>
                            <li>Dengan menekan tombol kirim, peserta telah menyetujui syarat & ketentuan program</li>
                            
                        </ul>
                    </div>
                    <div class="form-daftar">
                        <div class="col-md-6">
                            <label for="name">Nama Lengkap:*</label>
                            <input id="form_fullname" name="form[fullname]" required="required" class="w-input" maxlength="70" placeholder="Nama lengkap anda" value="" type="text">

                            <!-- Tambahan field untuk Cooking Competition-->
                            <!-- <label for="tim">Nama Rekan Se-Tim:</label>
                                <select class="select3">
                                <option>Pilih</option>
                                <option>Keluarga</option>
                                <option>Teman</option>
                                </select>-->
                            <!-- Tambahan field untuk Cooking Competition-->

                            <label for="email">Email:*</label>
                            <input id="form_email" name="form[email]" required="required" class="w-input" maxlength="100" placeholder="Email" readonly="readonly" value="" type="text">

                            <label for="lahir">Tanggal Lahir:*</label><br>
                            <select id="form_b_day" name="form[b_day]" required="required" class="select4">     <option value="">Tgl</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select> 
                            <select id="form_b_month" name="form[b_month]" required="required" class="select4">
                                <option value="">Bulan</option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select> 
                            <select id="form_b_year" name="form[b_year]" required="required" class="select4">
                                <option value="">Thn</option>
                                <option value="1945">1945</option>
                                <option value="1946">1946</option>
                                <option value="1947">1947</option>
                                <option value="1948">1948</option>
                                <option value="1949">1949</option>
                                <option value="1950">1950</option>
                                <option value="1951">1951</option>
                                <option value="1952">1952</option>
                                <option value="1953">1953</option>
                                <option value="1954">1954</option>
                                <option value="1955">1955</option>
                                <option value="1956">1956</option>
                                <option value="1957">1957</option>
                                <option value="1958">1958</option>
                                <option value="1959">1959</option>
                                <option value="1960">1960</option>
                                <option value="1961">1961</option>
                                <option value="1962">1962</option>
                                <option value="1963">1963</option>
                                <option value="1964">1964</option>
                                <option value="1965">1965</option>
                                <option value="1966">1966</option>
                                <option value="1967">1967</option>
                                <option value="1968">1968</option>
                                <option value="1969">1969</option>
                                <option value="1970">1970</option>
                                <option value="1971">1971</option>
                                <option value="1972">1972</option>
                                <option value="1973">1973</option>
                                <option value="1974">1974</option>
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option>
                            </select>
                            <br>    
                        
                            <label for="kelamin">Jenis Kelamin:*</label>
                            <select id="form_gender" name="form[gender]" required="required" class="select3">
                                <option value="">Pilih</option>
                                <option value="male">Laki-Laki</option>
                                <option value="female">Perempuan</option></select>

                            <label for="hp">No. Handphone:*</label>
                            <input id="form_phone" name="form[phone]" required="required" class="w-input" maxlength="50" type="text">

                            <label for="provinsi">Provinsi:*</label>
                            <select id="form_province" name="form[province]" required="required" class="select3">
                                <option value="">Pilih Provinsi</option>
                                <option value="29">Aceh</option>
                                <option value="34">Bali</option>
                                <option value="74">Bangka Belitung</option>
                                <option value="33">Banten</option>
                                <option value="61">Bengkulu</option>
                                <option value="65">Gorontalo</option>
                                <option value="25">Jakarta</option>
                                <option value="21">Jambi</option>
                                <option value="26">Jawa Barat</option>
                                <option value="27">Jawa Tengah</option>
                                <option value="28">Jawa Timur</option>
                                <option value="38">Kalimantan Barat</option>
                                <option value="57">Kalimantan Selatan</option>
                                <option value="66">Kalimantan Tengah</option>
                                <option value="37">Kalimantan Timur</option>
                                <option value="75">Kalimantan Utara</option>
                                <option value="457">Kepulauan Riau</option>
                                <option value="40">Lampung</option>
                                <option value="48">Maluku</option>
                                <option value="67">Maluku Utara</option>
                                <option value="68">Nusa Tenggara Barat</option>
                                <option value="69">Nusa Tenggara Timur</option>
                                <option value="36">Papua</option>
                                <option value="70">Papua Barat</option>
                                <option value="32">Riau</option>
                                <option value="59">Singapura</option>
                                <option value="71">Sulawesi Barat</option>
                                <option value="35">Sulawesi Selatan</option>
                                <option value="63">Sulawesi Tengah</option>
                                <option value="72">Sulawesi Tenggara</option>
                                <option value="55">Sulawesi Utara</option>
                                <option value="31">Sumatera Barat</option>
                                <option value="39">Sumatera Selatan</option>
                                <option value="47">Sumatera Utara</option>
                                <option value="462">Tanjung pinang</option>
                                <option value="73">Yogyakarta</option></select>

                            <label for="kota">Kota:*</label>
                            <select id="form_city" name="form[city]" required="required" class="select3">       <option value="">Pilih Kota</option>
                                <option value="6">Bandung</option>
                                <option value="99">Banjar</option>
                                <option value="5">Bekasi</option>
                                <option value="2">Bogor</option>
                                <option value="305">Ciamis</option>
                                <option value="307">Cianjur</option>
                                <option value="95">Cimahi</option>
                                <option value="96">Cirebon</option>
                                <option value="3">Depok</option>
                            </select>

                            
                        </div>
                        
                        <div class="col-md-6">
                            <label for="sosialmedia">Twitter / Facebook:*</label>
                            <input id="form_sosmed" name="form[sosmed]" required="required" class="w-input" maxlength="200" placeholder="Facebook / Twitter" type="text">

                            <label for="pekerjaan">Pekerjaan:*</label>
                            <select id="form_job" name="form[job]" required="required" class="select3">         <option value="" selected="selected">Pilih</option>
                                <option value="0">Arsitek</option>
                                <option value="1">Belum Bekerja</option>
                                <option value="2">Designer Grafis</option>
                                <option value="3">Designer Interior</option>
                                <option value="4">Dokter</option>
                                <option value="5">Entertainer</option>
                                <option value="6">Fotografer</option>
                                <option value="7">Ibu Rumah Tangga</option>
                                <option value="8">Jurnalis</option>
                                <option value="9">Konsultan</option>
                                <option value="10">LSM</option>
                                <option value="11">Mahasiswa</option>
                                <option value="12">Notaris</option>
                                <option value="13">Pegawai BUMN</option>
                                <option value="14">Pegawai Negeri Sipil</option>
                                <option value="15">Pegawai Paruh Waktu</option>
                                <option value="16">Pegawai Swasta</option>
                                <option value="17">Pengacara</option>
                                <option value="18">Pengajar</option>
                                <option value="19">Pensiun</option>
                                <option value="20">Penulis</option>
                                <option value="21">Seniman</option>
                                <option value="22">Siswa</option>
                                <option value="23">TNI/Polri</option>
                                <option value="24">Wirausaha</option>
                                <option value="25">Lainnya</option>
                            </select>
                            <label for="penghasilan">Penghasilan perbulan:*</label>
                            <select id="form_penghasilan" name="form[penghasilan]" required="required" class="select3">
                                <option value="" selected="selected">Pilih</option>
                                <option value="Di bawah Rp 2.000.000">Di bawah Rp 2.000.000</option>
                                <option value="Rp 2.000.000 - Rp 5.000.000">Rp 2.000.000 - Rp 5.000.000</option>
                                <option value="Rp 5.000.000 - Rp 10.000.000">Rp 5.000.000 - Rp 10.000.000</option>
                                <option value="Rp 10.000.000 - Rp 20.000.000">Rp 10.000.000 - Rp 20.000.000</option>
                                <option value="Lebih dari Rp 20.000.000">Lebih dari Rp 20.000.000</option></select>

                            <label for="info">Darimana anda mengetahui event ini ?*</label>
                            <select id="form_sumber" name="form[sumber]" required="required" class="select3">
                                <option value="" selected="selected">Pilih</option>
                                <option value="Social Media">Social Media</option>
                                <option value="Teman">Teman</option>
                                <option value="Majalah">Majalah</option>
                                <option value="Lainnya">Lainnya</option></select>

                            <!-- Tambahan field untuk Cooking Competition-->
                            <!--	<label for="fotomasak">Foto Masakan Anda:</label><p style="font-size:11px; color:#666;"">.jpg, maks.2Mb</p>
                                <input type="file" class="select4">  -->
                            <!-- Tambahan field untuk Cooking Competition-->

                            <!-- Tambahan field untuk Cooking Competition-->
                            <!--    <label for="resep">Resep Masakan:</label>
                                <input class="w-input" placeholder="Darimana anda mengetahui event ini ?" type="text" name="cf_info" required> -->
                            <!-- Tambahan field untuk Cooking Competition-->

                            <!-- Tambahan field untuk Cooking Competition-->
                            <!--      <label for="deskripsimakanan">Deskripsi Masakan:</label>
                                <textarea class="w-input message" placeholder="" name="cf_deskripsi" required></textarea> -->
                            <!-- Tambahan field untuk Cooking Competition-->

                            <label for="message">Apa yang ingin anda ketahui dari event ini?*</label>
                            <textarea id="form_desc" name="form[desc]" required="required" class="w-input message"></textarea>

                            <br> 
                            
                            <input name="btnSubmit" class="form-btn" value="Send" type="submit">
                        </div>

                            
                        <div class="col-md-12">
                            <div class="alert alert-danger"> 
                                <strong>Pendaftaran Gagal</strong> Isi form dengan benar
                            </div>
                            <div class="alert alert-success"> 
                                <strong>Pendaftar Berhasil!</strong> Terimakasih data Anda sudah kami simpan
                            </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>

        
    </div>
    
    

    
    <?php include 'footer.php';?> 

</body>
</html>