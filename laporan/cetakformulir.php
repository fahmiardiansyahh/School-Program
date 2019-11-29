<body onload="window.print()">
<?php
$kdpendaftar=addslashes($_GET['kdpendaftar']);
include "./../koneksi.php";     
        $exec=mysql_query("select * from pendaftar where kdpendaftar='".$kdpendaftar."' ");
     $r=mysql_fetch_array($exec)
        
       ;

    ?>
<table width="100%" border="0">
  <tr>
    <th ><img src="logo.jpg" width="100" ></th>
    <th >FORMULIR PENDAFTARAN SISWA <br>
    SD NEGERI 1 BOGOR</th>
 
  </tr>
</table>
<hr>
<img src="a.jpg">
<table class="table table-striped" width="100%">
          <tr>
            <th width="25%"><div align="left">Nama</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-0-<?php echo $r[0]; ?>"><?php echo $r[1]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Jenis Kelamin</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-1-<?php echo $r[0]; ?>"><?php echo $r[4]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Agama</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-2-<?php echo $r[0]; ?>"><?php echo $r[5]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Tempat Lahir</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-3-<?php echo $r[0]; ?>"><?php echo $r[6]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Tanggal Lahir</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-4-<?php echo $r[0]; ?>"><?php echo $r[7]; ?></span></td>
          </tr>  <tr>
            <th width="25%"><div align="left">Asal Tk</div></th>
            <td width="10%"> : </td>
            <td>  <?php echo $r[18]; ?></td>
          </tr><tr>
            <th width="25%"><div align="left">Alamat</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-5-<?php echo $r[0]; ?>"><?php echo $r[8]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Status Anak</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-6-<?php echo $r[0]; ?>"><?php echo $r[9]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Nama Ayah</div></th>
            <td width="10%"> : </td>
            <td> <span class="data-7-<?php echo $r[0]; ?>"><?php echo $r[10]; ?></span></td>
          </tr><tr>
            <th width="25%"><div align="left">Pendidikan Ayah</div></th>
            <td width="10%"> : </td>
            <td> <?php echo $r[11]; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">Pekerjaan ayah Ayah</div></th>
            <td width="10%"> : </td>
            <td> <?php echo $r[12]; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">Penghasilan Ayah</div></th>
            <td width="10%"> : </td>
            <td>  <?php echo $r[11]; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">Nama Ibu</div></th>
            <td width="10%"> : </td>
            <td> <?php echo $r[13]; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">Pendidikan Ibu</div></th>
            <td width="10%"> : </td>
            <td>  <?php echo $r[15]; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">Pekerjaan Ibu</div></th>
            <td width="10%"> : </td>
            <td> <?php echo $r[16]; ?></td>
          </tr>
          <tr>
            <th width="25%"><div align="left">No Hp</div></th>
            <td width="10%"> : </td>
            <td> <?php echo $r[17]; ?></td>
          </tr>
        
      
      
</table>

<p align="right">Mengetahui  </p>


<p align="right">KEPALA SEKOLAH </p>
<p align="right">NIP : -</p>


*) Cetaklah Formulir ini Dan Tempelkan Foto Anda <br>
*) Formulir di cetak Rangkap 2  <br>
*) Pengumuman Seleksi Pendaftaran Akan di Umumkan Melalui Website Resmi  <br>
        </body>