
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Pdf Oluştur</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<style type="text/css">

		.cerceve2 {
		  
		  width: 100px;
		  
		  margin: 0 auto;
		}
	</style>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">




<!-- 	<button type="button" class="btn btn-success btn-lg btn-block"></button> -->

		<form action="pdf.php" class="" style="width: 100%" method="post">	


			<div class="row mb-2">
			    <div class="">
			    <div class="card" style="width: 35rem; height: 13.25rem;">
			    	 <!-- style="width: 35rem; height: 13.25rem; -->
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">
				    	<input type="text" name="urun_baslik" class="form-control" placeholder="Ürün Başlığını Giriniz"required>
				   		<input type="text" name="urun_altBaslik" class="form-control" placeholder="Ürün Alt Başlığını Giriniz">		
					</li>
				    <li class="list-group-item">
				    	<input type="text" name="urun_siparisKod" class="form-control" placeholder="Sipariş Kodu" >
						<input type="text" name="urun_Kod" class="form-control" placeholder="Ürün Kodu" >
					</li>
				    
				  </ul>
				</div>
			    </div>


	
			    <div class="col-md-6">
			    	<label class="h5 mb-3 fw-normal" style="color: #8B0000">Browse Butonuna Tıklayarak Ürün Görselini Seçiniz.</label>

			    <div class="cerceve2">
					<i class="fa fa-arrow-alt-circle-down" style="font-size:50px;color:#8B0000" ></i><br>
				</div>	
				
			    
					<input type="file" style=" width:200; border: 5px solid #ccc; padding: 3px 6px; margin:5px " name="dosya" id="dosya"  />		
				 
			    </div> 



  </div>


		<hr>
		<h1 class="mb-3 ">Standart Ürün Özellikleri</h1>
				<div class="row mb-2">
					<div class="col-md-6">
						<input type="text" name="govde" placeholder="Gövde" class="form-control" >
					</div>
					<div class="col-md-6">
						<input type="text" name="optik" placeholder="Optik" class="form-control" >
					</div>
				</div>

				<div class="mb-2">
					<input type="text" name="tavan_tipi" placeholder="Tavan Tipi" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="ip_koruması" placeholder="Ip Koruması" class="form-control" >
				</div>

				<div class="mb-2">
					<input type="text" name="kullanim_sekli" placeholder="Kullanım Şekli" class="form-control" >
				</div>

				<div class="mb-2">
					<input type="text" name="isik_kaynagi" placeholder="Işık Kaynağı" class="form-control" >
				</div>




		<hr>
		<h1 class="mb-3 ">Optik ve Elektriksel Özellikler</h1>
				<div class="row mb-2">
					<div class="col-md-6">
						<input type="text" name="tuketim_gucu" placeholder="Tüketim Gücü" class="form-control" >
					</div>
					<div class="col-md-6">
						<input type="text" name="armatur_lumeni" placeholder="Armatür Lümeni" class="form-control" >
					</div>
				</div>

				<div class="mb-2">
					<input type="text" name="armatur_verimliliği" placeholder="Armatür Verimliliği" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="giris_gerilimi" placeholder="Giriş Gerilimi" class="form-control" >
				</div>

				<div class="mb-2">
					<input type="text" name="giris_frekansı" placeholder="Giriş Frekans" class="form-control" >
				</div>

				<div class="mb-2">
					<input type="text" name="guc_faktoru" placeholder="Güç Faktörü" class="form-control" >
				</div>



				<div class="mb-2">
					<input type="text" name="surus_akimi" placeholder="Sürüş Akımı" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="renk_sicakligi" placeholder="Renk Sıcaklığı(CCT)" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="renksel_geriverim" placeholder="Renksel Geriverim İndexi(CRI)" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="calisma_sicakligi" placeholder="Çalışma Sıcaklığı" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="led_omru" placeholder="Led Ömrü" class="form-control" >
				</div>



		<hr>
		<h1 class="mb-3 ">Opsiyonel Özellikler</h1>
				<div class="row mb-2">
					<div class="col-md-6">
						<input type="text" name="renk_sicakligi" placeholder="Renk Sıcaklığı" class="form-control" >
					</div>
					<div class="col-md-6">
						<input type="text" name="ack_uyumlulugu" placeholder="ACK Uyumluluğu" class="form-control" >
					</div>
				</div>

				<div class="mb-2">
					<input type="text" name="dali_uyumlulugu" placeholder="DALI Uyumluluğu" class="form-control" >
				</div>


				<div class="mb-2">
					<input type="text" name="renk_secenegi" placeholder="Renk Seçeneği" class="form-control" >
				</div>

				<div class="mb-2">
					<input type="text" name="farkli_ebat_watt" placeholder="Farklı Ebat Ve Watt" class="form-control" >
				</div>	



			    <div class="col-md-6">
				<label class="h5 mb-3 fw-normal" style="color: #8B0000">Browse Butonuna Tıklayarak Teknik Çizim Seçiniz.</label><br>

				<div class="cerceve2">
					<i class="fa fa-arrow-alt-circle-down" style="font-size:50px;color:#8B0000" ></i><br>
				</div>	
				
				

				<input type="file" style="width:200; border: 5px solid #ccc; padding: 3px 6px; margin:5px" name="dosya2" id="" />	
				 
			    </div> <br>

			




			<button type="submit" class="btn btn-info btn-lg btn-block"   >PDF Oluştur</button>




<button class="btn btn-outline-info btn-lg btn-block" name="gonder" formaction="crud3.php" ><i>CRUD</i></button>
			


			<!-- onClick="TestFileType(this.form.uploadfile.value, ['gif', 'jpg', 'png', 'jpeg']);" -->
		</form><br>










	</div>



</body>
</html> 