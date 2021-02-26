<?php

$sunucu_adi="localhost";
$kullanici_adi="root";
$sifre="";
$vt="vackerlite";

$baglanti=new mysqli($sunucu_adi,$kullanici_adi,$sifre,$vt);

mysqli_set_charset($baglanti,"utf8");
if($baglanti->connect_error)
	die("bağlantı sağlanamadı:".$baglanti->connect_error);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Pdf Oluştur</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<style type="text/css">

		.table{


		}
	</style>
<h1 style="color: #8B0000">CRUD iŞLEMLERİ</h1>
</head>
<body>
<div class="container mt-5">
		<?php
			//düzenleme kodları yazılacak güncelleme butonu eklenecek.
			if(isset($_POST["aa_duzenle"]))
			{
				$sorgu_duzenle="SELECT * FROM vackerlite_urun_ozellik WHERE id=".$_POST["aa_duzenle"];
				$sonuc=$baglanti->query($sorgu_duzenle);
				$kayit=$sonuc->fetch_assoc();
			
		?>
	
		<form action="" class="" style="width: 100%" method="post">		
			<div class="row mb-2">
			    <div class="">
			    <div class="card" style="width: 35rem; height: 13.25rem;">
			    	 <!-- style="width: 35rem; height: 13.25rem; -->
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">
				    	<input type="text" name="urun_baslik" class="form-control" 

				    	value="<?=$kayit["aa_urunBaslik"]?>" placeholder="Ürün Başlık" required>

				   		<input type="text" name="urun_altBaslik" class="form-control" value="<?=$kayit["aa_urunAltBaslik"]?>" placeholder="Ürün Alt Başlık">		
					</li>
				    <li class="list-group-item">
				    	<input type="text" name="urun_siparisKod" class="form-control" value="<?=$kayit["aa_urunSiparisKod"]?>" placeholder="Sipariş Kodu" >
						<input type="text" name="urun_Kod" class="form-control" value="<?=$kayit["aa_urunKod"]?>" placeholder="Ürün Kodu" >
					</li>				    
				  </ul>
				</div>
			</div>


	
			    <div class="col-md-6">
					<input type="file" style=" width:200; border: 5px solid #ccc; padding: 3px 6px; margin:5px " name="dosya" id="dosya" value="<?=$kayit["aa_urunGorseli"]?>" />				 
			    </div> 



  </div>


		<hr>
		<h1 class="mb-3 ">Standart Ürün Özellikleri</h1>
				<div class="row mb-2">
					<div class="col-md-6">
						<input type="text" name="govde" value="<?=$kayit["aa_urunGovde"]?>" placeholder="Gövde" class="form-control" >
					</div>
					<div class="col-md-6">
						<input type="text" name="optik" value="<?=$kayit["aa_urunOptik"]?>" placeholder="Optik" class="form-control" >
					</div>
				</div>

				<div class="mb-2">
					<input type="text" name="tavan_tipi" value="<?=$kayit["aa_urunTavanTipi"]?>" placeholder="Tavan Tipi" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="ip_koruması" value="<?=$kayit["aa_urunIpKorumasi"]?>" placeholder="Ip Koruması" class="form-control" >
				</div>

				<div class="mb-2">
					<input type="text" name="kullanim_sekli" value="<?=$kayit["aa_urunKullanimSekli"]?>" placeholder="Kullanım Şekli" class="form-control" >
				</div>

				<div class="mb-2">
					<input type="text" name="isik_kaynagi" value="<?=$kayit["aa_urunIsikKaynagi"]?>" placeholder="Işık Kaynağı" class="form-control" >
				</div>




		<hr>
		<h1 class="mb-3 ">Optik ve Elektriksel Özellikler</h1>
				<div class="row mb-2">
					<div class="col-md-6">
						<input type="text" name="tuketim_gucu" value="<?=$kayit["aa_urunTuketimGucu"]?>" placeholder="Tüketim Gücü" class="form-control" >
					</div>
					<div class="col-md-6">
						<input type="text" name="armatur_lumeni" value="<?=$kayit["aa_urunArmaturLumeni"]?>" placeholder="Armatür Lümeni" class="form-control" >
					</div>
				</div>

				<div class="mb-2">
					<input type="text" name="armatur_verimliliği" value="<?=$kayit["aa_urunArmaturVerimliligi"]?>" placeholder="Armatür Verimliliği" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="giris_gerilimi" value="<?=$kayit["aa_urunGirisGerilimi"]?>" placeholder="Giriş Gerilimi" class="form-control" >
				</div>

				<div class="mb-2">
					<input type="text" name="giris_frekansı" value="<?=$kayit["aa_urunGirisFrekansı"]?>" placeholder="Giriş Frekans" class="form-control" >
				</div>

				<div class="mb-2">
					<input type="text" name="guc_faktoru" value="<?=$kayit["aa_urunGucFaktoru"]?>" placeholder="Güç Faktörü" class="form-control" >
				</div>



				<div class="mb-2">
					<input type="text" name="surus_akimi" value="<?=$kayit["aa_urunSurusAkimi"]?>" placeholder="Sürüş Akımı" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="renk_sicakligi" value="<?=$kayit["aa_urunRenkSicakligi(CCT)"]?>" placeholder="Renk Sıcaklığı(CCT)" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="renksel_geriverim" value="<?=$kayit["aa_urunRenkGeriverim"]?>" placeholder="Renksel Geriverim İndexi(CRI)" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="calisma_sicakligi" value="<?=$kayit["aa_urunCalismaSicakligi"]?>" placeholder="Çalışma Sıcaklığı" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="led_omru" value="<?=$kayit["aa_urunLedOmru"]?>" placeholder="Led Ömrü" class="form-control" >
				</div>



		<hr>
		<h1 class="mb-3 ">Opsiyonel Özellikler</h1>
				<div class="row mb-2">
					<div class="col-md-6">
						<input type="text" name="renk_sicakligi" value="<?=$kayit["aa_urunRenkSicakligi"]?>" placeholder="Renk Sıcaklığı" class="form-control" >
					</div>
					<div class="col-md-6">
						<input type="text" name="ack_uyumlulugu" value="<?=$kayit["aa_urunACKUyumlulugu"]?>" placeholder="ACK Uyumluluğu" class="form-control" >
					</div>
				</div>

				<div class="mb-2">
					<input type="text" name="dali_uyumlulugu" value="<?=$kayit["aa_urunDALIUyumlulugu"]?>" placeholder="DALI Uyumluluğu" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="renk_secenegi" value="<?=$kayit["aa_urunRenkSecenegi"]?>" placeholder="Renk Seçeneği" class="form-control" >
				</div>

				<div class="mb-2">
					<input type="text" name="farkli_ebat_watt" value="<?=$kayit["aa_urunFarkliEbatWatt"]?>" placeholder="Farklı Ebat Ve Watt" class="form-control" >
				</div>	



			    <div class="col-md-6">
			

				<input type="file" style="width:200; border: 5px solid #ccc; padding: 3px 6px; margin:5px" name="dosya2" id="" value="<?=$_POST["aa_urunTeknikCizim"]?>" />	
				 
			    </div> <br>

			    <input type="hidden" name="id" class="form-control" id="firstName" placeholder="" value="<?=$kayit["id"]?>">

			 <button class="btn btn-outline-info btn-lg btn-block" name="aa_guncelle" type="submit" ><i>Bilgileri Güncelle</i></button>

			<!-- onClick="TestFileType(this.form.uploadfile.value, ['gif', 'jpg', 'png', 'jpeg']);" -->
		</form><br>

<?php
			
	}
	else
	{
?>

				<form action="" class="" style="width: 100%" method="post">		
			<div class="row mb-2">
			    <div class="">
			    <div class="card" style="width: 35rem; height: 13.25rem;">
			    	 <!-- style="width: 35rem; height: 13.25rem; -->
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">
				    	<input type="text" name="urun_baslik" class="form-control" 

				    	value="<?=$_POST["urun_baslik"]?>" placeholder="Ürün Başlık" required>

				   		<input type="text" name="urun_altBaslik" class="form-control" value="<?=$_POST["urun_altBaslik"]?>" placeholder="Ürün Alt Başlık">		
					</li>
				    <li class="list-group-item">
				    	<input type="text" name="urun_siparisKod" class="form-control" value="<?=$_POST["urun_siparisKod"]?>" placeholder="Sipariş Kodu" >
						<input type="text" name="urun_Kod" class="form-control" value="<?=$_POST["urun_Kod"]?>" placeholder="Ürün Kodu" >
					</li>				    
				  </ul>
				</div>
			</div>


	
			    <div class="col-md-6">
					<input type="file" style=" width:200; border: 5px solid #ccc; padding: 3px 6px; margin:5px " name="dosya" id="dosya" value="<?=$_POST["dosya"]?>" />				 
			    </div> 



  </div>


		<hr>
		<h1 class="mb-3 ">Standart Ürün Özellikleri</h1>
				<div class="row mb-2">
					<div class="col-md-6">
						<input type="text" name="govde" value="<?=$_POST["govde"]?>" placeholder="Gövde" class="form-control" >
					</div>
					<div class="col-md-6">
						<input type="text" name="optik" value="<?=$_POST["optik"]?>" placeholder="Optik" class="form-control" >
					</div>
				</div>

				<div class="mb-2">
					<input type="text" name="tavan_tipi" value="<?=$_POST["tavan_tipi"]?>" placeholder="Tavan Tipi" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="ip_koruması" value="<?=$_POST["ip_koruması"]?>" placeholder="Ip Koruması" class="form-control" >
				</div>

				<div class="mb-2">
					<input type="text" name="kullanim_sekli" value="<?=$_POST["kullanim_sekli"]?>" placeholder="Kullanım Şekli" class="form-control" >
				</div>

				<div class="mb-2">
					<input type="text" name="isik_kaynagi" value="<?=$_POST["isik_kaynagi"]?>" placeholder="Işık Kaynağı" class="form-control" >
				</div>




		<hr>
		<h1 class="mb-3 ">Optik ve Elektriksel Özellikler</h1>
				<div class="row mb-2">
					<div class="col-md-6">
						<input type="text" name="tuketim_gucu" value="<?=$_POST["tuketim_gucu"]?>" placeholder="Tüketim Gücü" class="form-control" >
					</div>
					<div class="col-md-6">
						<input type="text" name="armatur_lumeni" value="<?=$_POST["armatur_lumeni"]?>" placeholder="Armatür Lümeni" class="form-control" >
					</div>
				</div>

				<div class="mb-2">
					<input type="text" name="armatur_verimliliği" value="<?=$_POST["armatur_verimliliği"]?>" placeholder="Armatür Verimliliği" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="giris_gerilimi" value="<?=$_POST["giris_gerilimi"]?>" placeholder="Giriş Gerilimi" class="form-control" >
				</div>

				<div class="mb-2">
					<input type="text" name="giris_frekansı" value="<?=$_POST["giris_frekansı"]?>" placeholder="Giriş Frekans" class="form-control" >
				</div>

				<div class="mb-2">
					<input type="text" name="guc_faktoru" value="<?=$_POST["guc_faktoru"]?>" placeholder="Güç Faktörü" class="form-control" >
				</div>



				<div class="mb-2">
					<input type="text" name="surus_akimi" value="<?=$_POST["surus_akimi"]?>" placeholder="Sürüş Akımı" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="renk_sicakligi" value="<?=$_POST["renk_sicakligi"]?>" placeholder="Renk Sıcaklığı(CCT)" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="renksel_geriverim" value="<?=$_POST["renksel_geriverim"]?>" placeholder="Renksel Geriverim İndexi(CRI)" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="calisma_sicakligi" value="<?=$_POST["calisma_sicakligi"]?>" placeholder="Çalışma Sıcaklığı" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="led_omru" value="<?=$_POST["led_omru"]?>" placeholder="Led Ömrü" class="form-control" >
				</div>



		<hr>
		<h1 class="mb-3 ">Opsiyonel Özellikler</h1>
				<div class="row mb-2">
					<div class="col-md-6">
						<input type="text" name="renk_sicakligi" value="<?=$_POST["renk_sicakligi"]?>" placeholder="Renk Sıcaklığı" class="form-control" >
					</div>
					<div class="col-md-6">
						<input type="text" name="ack_uyumlulugu" value="<?=$_POST["ack_uyumlulugu"]?>" placeholder="ACK Uyumluluğu" class="form-control" >
					</div>
				</div>

				<div class="mb-2">
					<input type="text" name="dali_uyumlulugu" value="<?=$_POST["dali_uyumlulugu"]?>" placeholder="DALI Uyumluluğu" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="renk_secenegi" value="<?=$_POST["renk_secenegi"]?>" placeholder="Renk Seçeneği" class="form-control" >
				</div>

				<div class="mb-2">
					<input type="text" name="farkli_ebat_watt" value="<?=$_POST["farkli_ebat_watt"]?>" placeholder="Farklı Ebat Ve Watt" class="form-control" >
				</div>	



			    <div class="col-md-6">
			

				<input type="file" style="width:200; border: 5px solid #ccc; padding: 3px 6px; margin:5px" name="dosya2" id="" value="<?=$_POST["dosya2"]?>" />	
				 
			    </div> <br>



			<button class="btn btn-outline-info btn-lg btn-block" name="aa_urun_kaydet" type="submit"  ><i>Kaydet</i></button>

			<!-- onClick="TestFileType(this.form.uploadfile.value, ['gif', 'jpg', 'png', 'jpeg']);" -->
		</form>



<?php
	}
?>	

<?php
			if(isset($_POST["aa_urun_kaydet"]))
			{
				$sorgu_urun_kayıt="INSERT INTO `vackerlite_urun_ozellik` (
				`id`, 
				`aa_urunBaslik`,
				`aa_urunAltBaslik`,
				`aa_urunSiparisKod`,
				`aa_urunKod`,
				`aa_urunGovde`,
				`aa_urunOptik`,
				`aa_urunTavanTipi`,
				`aa_urunIpKorumasi`,
			    `aa_urunKullanimSekli`,
			    `aa_urunIsikKaynagi`,
			    `aa_urunTuketimGucu`,
			    `aa_urunArmaturLumeni`,
			    `aa_urunArmaturVerimliligi`,
			    `aa_urunGirisGerilimi`,
			    `aa_urunGirisFrekansı`,
			    `aa_urunGucFaktoru`,
			    `aa_urunSurusAkimi`,
			    `aa_urunRenkSicakligi(CCT)`,
			    `aa_urunRenkGeriverim`,
			    `aa_urunCalismaSicakligi`,
			    `aa_urunLedOmru`,
			    `aa_urunRenkSicakligi`,
			    `aa_urunACKUyumlulugu`,
			    `aa_urunDALIUyumlulugu`,
			    `aa_urunRenkSecenegi`,
			    `aa_urunFarkliEbatWatt`,
			    `aa_urunGorseli`,
			    `aa_urunTeknikCizim`)

				 VALUES (NULL,
				  '".$_POST["urun_baslik"]."',
				  '".$_POST["urun_altBaslik"]."',
				  '".$_POST["urun_siparisKod"]."',
				  '".$_POST["urun_Kod"]."',

				  
				  '".$_POST["govde"]."',
				  '".$_POST["optik"]."',
				  '".$_POST["tavan_tipi"]."',
				  '".$_POST["ip_koruması"]."',
				  '".$_POST["kullanim_sekli"]."',
				  '".$_POST["isik_kaynagi"]."',



				  '".$_POST["tuketim_gucu"]."',
				  '".$_POST["armatur_lumeni"]."',
				  '".$_POST["armatur_verimliliği"]."',
				  '".$_POST["giris_gerilimi"]."',
				  '".$_POST["giris_frekansı"]."',
				  '".$_POST["guc_faktoru"]."',
				  '".$_POST["surus_akimi"]."',
				  '".$_POST["renk_sicakligi"]."',
				  '".$_POST["renksel_geriverim"]."',
				  '".$_POST["calisma_sicakligi"]."',
				  '".$_POST["led_omru"]."',


				  '".$_POST["renk_sicakligi"]."',
				  '".$_POST["ack_uyumlulugu"]."',
				  '".$_POST["dali_uyumlulugu"]."',
				  '".$_POST["renk_secenegi"]."',
				  '".$_POST["farkli_ebat_watt"]."',
				  '".$_POST["dosya"]."',
				  '".$_POST["dosya2"]."');";

				$baglanti->query($sorgu_urun_kayıt);

			}


			if(isset($_POST["aa_guncelle"]))
			{
				$sorgu_guncelle="UPDATE `vackerlite_urun_ozellik` 

				SET `aa_urunBaslik` = '".$_POST["urun_baslik"]."',

				`aa_urunAltBaslik` = '".$_POST["urun_altBaslik"]."',

				`aa_urunSiparisKod` = '".$_POST["urun_siparisKod"]."',

				`aa_urunKod` = '".$_POST["urun_Kod"]."',

				`aa_urunGovde` = '".$_POST["govde"]."',	

				`aa_urunOptik` = '".$_POST["optik"]."',

				`aa_urunTavanTipi` = '".$_POST["tavan_tipi"]."',

				`aa_urunIpKorumasi` = '".$_POST["ip_koruması"]."',		

				`aa_urunKullanimSekli` = '".$_POST["kullanim_sekli"]."',

				`aa_urunIsikKaynagi` = '".$_POST["isik_kaynagi"]."',	

				`aa_urunTuketimGucu` = '".$_POST["tuketim_gucu"]."',	

				`aa_urunArmaturLumeni` = '".$_POST["armatur_lumeni"]."',	

				`aa_urunArmaturVerimliligi` = '".$_POST["armatur_verimliliği"]."',	

				`aa_urunGirisGerilimi` = '".$_POST["giris_gerilimi"]."',	

				`aa_urunGirisFrekansı` = '".$_POST["giris_frekansı"]."',	

				`aa_urunGucFaktoru` = '".$_POST["guc_faktoru"]."',	

				`aa_urunSurusAkimi` = '".$_POST["surus_akimi"]."',	

				`aa_urunRenkSicakligi(CCT)` = '".$_POST["renk_sicakligi"]."',	

				`aa_urunRenkGeriverim` = '".$_POST["renksel_geriverim"]."',	

				`aa_urunCalismaSicakligi` = '".$_POST["calisma_sicakligi"]."',	

				`aa_urunLedOmru` = '".$_POST["led_omru"]."',	

				`aa_urunRenkSicakligi` = '".$_POST["renk_sicakligi"]."',	

				`aa_urunACKUyumlulugu` = '".$_POST["ack_uyumlulugu"]."',	

				`aa_urunDALIUyumlulugu` = '".$_POST["dali_uyumlulugu"]."',	

				`aa_urunRenkSecenegi` = '".$_POST["renk_secenegi"]."',	

				`aa_urunFarkliEbatWatt` = '".$_POST["farkli_ebat_watt"]."',	

				`aa_urunGorseli` = '".$_POST["dosya"]."',	

				`aa_urunTeknikCizim` = '".$_POST["dosya2"]."'	
							

				 WHERE `vackerlite_urun_ozellik`.`id` =".$_POST["id"];

				$baglanti->query($sorgu_guncelle);

				
			}
?>

 		<form  method="POST" action="" align="left">
			<div class="container"  >
			<div class="py-5 text-center">				
			</div>
					
			<div class="row" >
				<table class="table table-bordered table-info "   >
					<thead>
					<tr>
						
						<th><i>Başlık</i></th>
						<th><i>Alt Başlık</i></th>
						<th><i>Sipariş Kodu</i></th>
						<th><i>Kod</i></th>
						<th><i>Gövde</i></th>
						<th><i>Optik</i></th>
						<th><i>Tavan Tipi</i></th>
						<th><i>IP Koruması</i></th>
						<th><i>Kullanım Şekli</i></th>
						<th><i>Işık Kaynağı</i></th>
						<th><i>Tüketim Gücü</i></th>	

						<th><i>Armatür Lümeni</i></th>
						<th><i>Armatür Verimliliği</i></th>
						<th><i>Giriş Gerilimi</i></th>
						<th><i>Giriş Frekansı</i></th>
						<th><i>Güç Faktörü</i></th>	

						<th><i>Sürüş Akımı</i></th>
						<th><i>Renk Sıcaklığı(CCT)</i></th>
						<th><i>Ürün Renk Geriverim</i></th>
						<th><i>Çalışma Sıcaklığı</i></th>
						<th><i>Led Ömrü</i></th>

						<th><i>Renk Sıcaklığı</i></th>
						<th><i>ACK Uyumluluğu</i></th>
						<th><i>DALI Uyumluluğu</i></th>
						<th><i>Renk Seçeneği</i></th>
						<th><i>Farklı Ebat-Watt</i></th>		

						<th><i>Ürün Görseli</i></th>
						<th><i>Teknik Çizim</i></th>					
					</tr>
					</thead>
					<tbody>

					
					<?php
						$sorgu_listele="SELECT * FROM vackerlite_urun_ozellik";
						$sonuc=$baglanti->query($sorgu_listele);
						while($kayit=$sonuc->fetch_assoc())
						{
					?>
					<tr>
						
						<td><?=$kayit["aa_urunBaslik"]?></td>
						<td><?=$kayit["aa_urunAltBaslik"]?></td>
						<td><?=$kayit["aa_urunSiparisKod"]?></td>
						<td><?=$kayit["aa_urunKod"]?></td>

						<td><?=$kayit["aa_urunGovde"]?></td>
						<td><?=$kayit["aa_urunOptik"]?></td>
						<td><?=$kayit["aa_urunTavanTipi"]?></td>

						<td><?=$kayit["aa_urunIpKorumasi"]?></td>
						<td><?=$kayit["aa_urunKullanimSekli"]?></td>
						<td><?=$kayit["aa_urunIsikKaynagi"]?></td>
						<td><?=$kayit["aa_urunTuketimGucu"]?></td>



						<td><?=$kayit["aa_urunArmaturLumeni"]?></td>
						<td><?=$kayit["aa_urunArmaturVerimliligi"]?></td>
						<td><?=$kayit["aa_urunGirisGerilimi"]?></td>
						<td><?=$kayit["aa_urunGirisFrekansı"]?></td>


						<td><?=$kayit["aa_urunGucFaktoru"]?></td>
						<td><?=$kayit["aa_urunSurusAkimi"]?></td>
						<td><?=$kayit["aa_urunRenkSicakligi(CCT)"]?></td>
						<td><?=$kayit["aa_urunRenkGeriverim"]?></td>


						<td><?=$kayit["aa_urunCalismaSicakligi"]?></td>
						<td><?=$kayit["aa_urunLedOmru"]?></td>
						<td><?=$kayit["aa_urunRenkSicakligi"]?></td>
						<td><?=$kayit["aa_urunACKUyumlulugu"]?></td>


						<td><?=$kayit["aa_urunDALIUyumlulugu"]?></td>
						<td><?=$kayit["aa_urunRenkSecenegi"]?></td>
						<td><?=$kayit["aa_urunFarkliEbatWatt"]?></td>
						<td><?=$kayit["aa_urunGorseli"]?></td>
						<td><?=$kayit["aa_urunTeknikCizim"]?></td>



						<td>
							<button class="btn btn-outline-warning" name="aa_duzenle" type="submit" value="<?=$kayit["id"]?>"><i>Düzenle</i></button>
							
						</td>
					</tr>
					<?php
						}
					?>
					</tbody>
				</table>	

				

<button class="btn btn-outline-info btn-lg btn-block" name="gonder" formaction="index.php" ><i>Önce ki Sayfaya Dön</i></button>	 
			
			</div>
			</div>
		</form> 


	</div>



</body>
</html> 