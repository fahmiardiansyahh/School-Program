<?php
require 'koneksi.php';
	$kdpendaftar=addslashes($_POST['kdpendaftar']);
	$nama=addslashes($_POST['nama']);
	$jenkel=addslashes($_POST['jenkel']);
	$agama=addslashes($_POST['kdagama']);
	$tpt_lhr=addslashes($_POST['tpt_lahir']);
	$tgl_lhr=addslashes($_POST['tgl_lahir']);
	$alamat=addslashes($_POST['alamat']);
	$statusanak=addslashes($_POST['statusanak']);
	$nmaayah=addslashes($_POST['nmayah']);
	$kdpendidikana=addslashes($_POST['kdpendidikana']);
	$kdpekerjaana=addslashes($_POST['kdpekerjaana']);
	$penghasilanayah=addslashes($_POST['penghasilanayah']);
	$nmaibu=addslashes($_POST['nmibu']);
	$kdpendidikani=addslashes($_POST['kdpendidikani']);
	$kdpekerjaani=addslashes($_POST['kdpekerjaani']);
	$nohp=addslashes($_POST['nohp']);
	$kdtk=addslashes($_POST['kdtk']);
	$query="select * from pendaftar where kdpendaftar='".$kdpendaftar."'";
	$exec=mysql_query($query);
	$r=mysql_fetch_array($exec);
	$kdjabfield=$r[0];
	$nmjabfield=$r[1];
	if(mysql_num_rows($exec)==0)
		$query="insert into pendaftar values ('$kdpendaftar','$nama','$jenkel','$agama','$tpt_lhr','$tgl_lhr','$alamat','$statusanak','$nmaayah','$kdpendidikana','$kdpekerjaana','$penghasilanayah','$nmaibu','$kdpendidikani','$kdpekerjaani','$nohp','$kdtk')"; 
	else
		$query="update pendaftar set nama='$nama',jenkel='$jenkel',kdagama='$agama',tpt_lahir='$tpt_lhr',tgl_lahir='$tgl_lhr',alamat='$alamat',statusanak='$statusanak',nmayah='$nmaayah',kdpendidikana='$kdpendidikana',kdpekerjaana='$kdpekerjaana',penghasilanayah='$penghasilanayah',nmibu='$nmaibu',kdpendidikani='$kdpendidikani',kdpekerjaani='$kdpekerjaani',nohp='$nohp',kdtk='$kdtk' where kdpendaftar='$kdpendaftar'";
	if(mysql_query($query))
		header("location:indexp.php?p=pendaftar&code=1");
	else
		header("location:indexp.php?p=pendaftar&code=2");
?>