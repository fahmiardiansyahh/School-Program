
<?php
include "koneksi.php";
                if(isset($_POST['nama'])){

                                $nama=addslashes($_POST['nama']);
                                $id=addslashes($_POST['id']);
                                $password=addslashes($_POST['password']);
                                $jenkel=addslashes($_POST['jenkel']);
                                $kdagama=addslashes($_POST['kdagama']);
                                $tpt_lahir=addslashes($_POST['tpt_lahir']);
                                $tgl_lahir=addslashes($_POST['tgl_lahir']);
                                $alamat=addslashes($_POST['alamat']);
                                $statusanak=addslashes($_POST['statusanak']);
                                $nmayah=addslashes($_POST['nmayah']);
                                $kdpendidikana=addslashes($_POST['kdpendidikana']);
                                $kdpekerjaana=addslashes($_POST['kdpekerjaana']);
                                $penghasilanayah=addslashes($_POST['penghasilanayah']);
                                $nmibu=addslashes($_POST['nmibu']);
                                $kdpendidikani=addslashes($_POST['kdpendidikani']);
                                $kdpekerjaani=addslashes($_POST['kdpekerjaani']);
                                $nohp=addslashes($_POST['nohp']);
                                $kdtk=addslashes($_POST['kdtk']);
                                $statusdaftar=addslashes($_POST['statusdaftar']);
                                if (is_numeric($nama)) {
									echo"
									<script>
									alert('Isikan Nama Anda Dengan Huruf !!!');
									document.location.href='pendaftaran.php';
									</script>
									";
									}	
								elseif (is_numeric($nmayah)) {
									echo"
									<script>
									alert('Isikan Nama Ayah  Dengan Huruf !!!');
									document.location.href='pendaftaran.php';
									</script>
									";
									}
								elseif (is_numeric($nmibu)) {
									echo"
									<script>
									alert('Isikan Nama Ibu  Dengan Huruf !!!');
									document.location.href='pendaftaran.php';
									</script>
									";}
								elseif (!is_numeric($nohp)) {
									echo"
									<script>
									alert('Isikan Nomor HP  Dengan Nomor !!!');
									document.location.href='pendaftaran.php';
									</script>
									";}	
									else{
                                mysql_query("insert into pendaftar values('','$nama','$id','$password','$jenkel','$kdagama','$tpt_lahir','$tgl_lahir','$alamat',
                                    '$statusanak','$nmayah','$kdpendidikana','$kdpekerjaana','$penghasilanayah','$nmibu','$kdpendidikani','$kdpekerjaani','$nohp','$kdtk','$statusdaftar')");
                                header("location:./berhasil.php");
                                }
                  }
                  ?>
   <?php               
   $query = "SELECT max(id) as maxKode FROM pendaftar";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$kodeBarang = $data['maxKode'];

// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($kodeBarang, 3, 3);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;

// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "CLN";
$newID = $char . sprintf("%03s", $noUrut);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>WEBSITE SEKOLAH DASAR NEGERI 1 BOGOR</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="./" style="color:red">
				<marquee>	 SELAMAT DATANG DI WEBSITE SEKOLAH DASAR NEGERI 1 BOGOR </marquee></a> 
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="c1"><a href="./"><span class="fa fa-home"></span> Home</a></li>
					<li class="c2"><a href="pengumuman.php"><span class="fa fa-users"></span> Pengumuman</a></li>
					<li class="c3 active"><a href="pendaftaran.php"><span class="fa fa-pencil"></span> Pendaftaran</a></li>
					
				
					<li class="c7"><a href="masuk.php"><span class="fa fa-lock"></span> Login</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
             <div class="heading-text">							
							<h1 class="animated flipInY delay1">Pendaftaran Online</h1> <br/>
							<p>SD NEGERI 1 BOGOR</p>
						</div>
            
					<div class="fluid_container">                       
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        <div data-thumb="assets/images/slides/thumbs/img1.jpg" data-src="assets/images/slides/img1.jpg">
                            <h2>We develop.</h2>
                        </div> 
                        <div data-thumb="assets/images/slides/thumbs/img2.jpg" data-src="assets/images/slides/img2.jpg">
                        </div>
                        <div data-thumb="assets/images/slides/thumbs/img3.jpg" data-src="assets/images/slides/img3.jpg">
                        </div> 
                    </div><!-- #camera_wrap_3 -->
                </div><!-- .fluid_container -->
		</div>
	</header>
	<!-- /Header -->

  <div class="container">
    <div class="row">
			
					<div class="col-md-12">
						<div class="grey-box-icon b4">  
							 <h4 class="modal-title" id="myModalLabel">Tambah Data pendaftar</h4>
        <div class="area-loading"></div>
      </div>
      <div class="modal-body">
        <form method="post" action="">
        <table class="table " width="100%">
          <tr>
                <th width="25%">Nama pendaftar</th>
                <td width="1%"> : </td>
                <td> <input id="nama" name="nama" placeholder="Nama" class="form-control" type="text" required style="color:black"></td>
            </tr>
            <tr>
            	<th width="25%">ID*</th>
                <td width="1%"> : </td>
                <td> <input id="id" name="id" placeholder="ID Ini Sebagai Username login anda" class="form-control" type="text"  maxlength="8" readonly="id" value="<?= $newID ;?>" style="color:red"></td>
            </tr>
           <tr>
           	<th width="25%">PASSWORD*</th>
                <td width="1%"> : </td>
                <td> <input id="password" name="password" placeholder="PASSWORD Maximal 8 Characeter" class="form-control" type="password" maxlength="8" required style="color:red"></td>
           </tr>
            <tr>
                <th width="25%">Jenis Kelamin</th>
                <td width="1%"> : </td>
                <td> <select id="jenkel" name="jenkel"  class="form-control" required style="color:blue" >
                <option value="Laki-laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
                </td>
            </tr>
            <tr>
            <th width="25%">Agama</th>
            <td width="1%"> : </td>
            <td><select  name="kdagama"   class="form-control" required style="color:green">
            
              <?php
                $exec=mysql_query("select * from agama");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'> $hasil[1]</option>";
              ?>
            </select></td>
          </tr>
            <tr>
            <th width="25%">Asal Tk</th>
            <td width="1%"> : </td>
            <td><input id="kdtk" name="kdtk" placeholder="Masukan Tk Asal" class="form-control" type="text" required style="color:black"></td>
          </tr>
            <tr>
                <th width="25%">Tempat Lahir</th>
                <td width="1%"> : </td>
                <td> <input id="tpt_lahir" name="tpt_lahir" placeholder="Tempat Lahir" class="form-control" type="text" required style="color:black" ></td>
            </tr>
            <tr>
                <th width="25%">Tanggal Lahir</th>
                <td width="1%"> : </td>
                <td> <input id="tgl_lahir" name="tgl_lahir" placeholder="9999/99/99" class="form-control"  type="text" required style="color:black"></td>
            </tr>
            <tr>
                <th width="25%">Alamat</th>
                <td width="1%"> : </td>
                <td> <input id="alamat" name="alamat" placeholder="Alamat" class="form-control" type="textarea" required style="color:black"></td>
            </tr>
            <tr>
                <th width="25%">Status Anak</th>
                <td width="1%"> : </td>
                <td> <select id="statusanak" name="statusanak"  class="form-control"  required >
                <option value="kandung">Kandung</option>
                <option value="Tiri">Tiri</option>


                </select></td>
            </tr>

            <tr>

                <th width="25%">Nama Ayah</th>
                <td width="1%"> : </td>
                <td> <input id="nmayah" name="nmayah" placeholder="Nama Ayah" class="form-control" type="text" required ></td>
            </tr>
              <tr>
            <th width="25%">Pendidikan Ayah</th>
            <td width="1%"> : </td>
            <td><select  name="kdpendidikana"   class="form-control" required>
            
              <?php
                $exec=mysql_query("select * from pendidikan");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'> $hasil[1]</option>";
              ?>
            </select></td>
          </tr>
           <tr>
            <th width="25%">Pekerjaan Ayah</th>
            <td width="1%"> : </td>
            <td><select  name="kdpekerjaana"   class="form-control" required>
            
              <?php
                $exec=mysql_query("select * from pekerjaan");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'> $hasil[1]</option>";
              ?>
            </select></td>
          </tr>
 <tr>

                <th width="25%">Penghasilan Ayah</th>
                <td width="1%"> : </td>
                <td> <input id="penghasilanayah" name="penghasilanayah" placeholder="Pengasilan Contoh : Rp.2.000.000" class="form-control" type="text" required ></td>
            </tr>
 <tr>

                <th width="25%">Nama Ibu</th>
                <td width="1%"> : </td>
                <td> <input id="nmibu" name="nmibu" placeholder="Nama Ibu" class="form-control" type="text" required ></td>
            </tr>
            <tr>
            <th width="25%">Pendidikan Ibu</th>
            <td width="1%"> : </td>
            <td><select  name="kdpendidikani"   class="form-control" required>
            
              <?php
                $exec=mysql_query("select * from pendidikan");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'> $hasil[1]</option>";
              ?>
            </select></td>
          </tr>
           <tr>
            <th width="25%">Pekerjaan Ibu</th>
            <td width="1%"> : </td>
            <td><select  name="kdpekerjaani"   class="form-control" required>
            
              <?php
                $exec=mysql_query("select * from pekerjaan");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'> $hasil[1]</option>";
              ?>
            </select></td>
          </tr>
          <tr>

                <th width="25%">No  Telepon</th>
                <td width="1%"> : </td>
                <td> <input id="nohp" name="nohp" placeholder="No telepon  Ibu/Ayah" class="form-control" type="text" required ></td>
            </tr>
            <input type="hidden" name="statusdaftar" value="tahap seleksi">
        </table>
        *) Foto Di Tempel sesudah anda mengisi semua form Dengan Benar dan Anda di terima dalam tahap seleksi <br>
        *) Jika anda Anda bingung harap meminta bantuan Panitia PSB <br>
        *) Dengan Mengisi semua form anda akan menjadi Calon siswa dan akan menunggu beberapa hari untuk pengumuman hasil seleksi

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
        
            </form>
						</div><!--grey box -->
					</div><!--/span3-->
				</div>
    </div>
      <section class="news-box top-margin">
     
    </section>
   
  
	
     
      
    	 
    <footer id="footer">
 
		<div class="container">
   <div class="row">
  <div class="footerbottom">

    <div class="col-md-12 col-sm-7"> 
            	<div class="footerwidget"> 
                         <h4>Contact</h4> 
                        <p>Hubungi Kami Jika ada Masalah</p>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> SD NEGERI 1 BOGOR<br>
            <i class="fa fa-phone"></i>+(6251)9907339  <br>
             <i class="fa fa-envelope-o"></i> Sdn1bogor.sch.id
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>
</div>
			<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-pencil"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

				

					<div class="col-md-12 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2017. SD NEGERI 1 BOGOR
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
      
	</script>
    
</body>
</html>
