<?php
require_once __DIR__ . '/vendor/autoload.php';

/*$vackerlite=$_POST["vackerlite"];*/
/*https://mpdf.github.io/what-else-can-i-do/images.html*/






$urun_baslik=$_POST["urun_baslik"];
$urun_altBaslik=$_POST["urun_altBaslik"];



$urun_siparisKod=$_POST["urun_siparisKod"];
$urun_Kod=$_POST["urun_Kod"];


$dosya=$_POST["dosya"];




$govde=$_POST["govde"];

$optik=$_POST["optik"];

$tavan_tipi=$_POST["tavan_tipi"];

$ip_koruması=$_POST["ip_koruması"];

$kullanim_sekli=$_POST["kullanim_sekli"];

$isik_kaynagi=$_POST["isik_kaynagi"];




$tuketim_gucu=$_POST["tuketim_gucu"];
$armatur_lumeni=$_POST["armatur_lumeni"];
$armatur_verimliliği=$_POST["armatur_verimliliği"];
$giris_gerilimi=$_POST["giris_gerilimi"];
$giris_frekansı=$_POST["giris_frekansı"];
$guc_faktoru=$_POST["guc_faktoru"];
$surus_akimi=$_POST["surus_akimi"];
$renk_sicakligi=$_POST["renk_sicakligi"];
$renksel_geriverim=$_POST["renksel_geriverim"];
$calisma_sicakligi=$_POST["calisma_sicakligi"];
$led_omru=$_POST["led_omru"];



$renk_sicakligi=$_POST["renk_sicakligi"];
$ack_uyumlulugu=$_POST["ack_uyumlulugu"];
$dali_uyumlulugu=$_POST["dali_uyumlulugu"];
$renk_secenegi=$_POST["renk_secenegi"];
$farkli_ebat_watt=$_POST["farkli_ebat_watt"];


$dosya2=$_POST["dosya2"];

//$mpdf->showImageErrors = true;


$mpdf=new Mpdf\Mpdf();

/*$mpdf->SetHTMLHeader('



			<table style="width: 100%; ">
			<tr>
			    <td style="width: 100%;">	
			    <div style="text-align: right; font-weight: bold;">
   					 <img class="mr-3" src="vackerlite.png" alt="" width="200" height="48" >
   					 <hr style="height:10px;border-width:0;color:green;background-color:green">
				</div>				
			    </td>
			   		    
			</tr>
		
			</table><br>

');
*/


$mpdf->SetHeader('
	<img class="mr-3" src="vackerlite.png" alt="" width="200" height="48" >
	');


/*$veri.='<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm" >
			<img class="mr-3" src="vackerlite.png" alt="" width="100" height="24" >
			<hr style="height:10px;border-width:0;color:green;background-color:green">
		</div>';*/

$veri.='
			<br><table style="width: 100%; ">

			<tr>
			    <td style="width: 50%;">
				
				  
				    <h1 style="color:#0886ff">'.$urun_baslik.'</h1>
				    <p  style="color:#0886ff">'.$urun_altBaslik.'</p> 	
				    <br>								 
				    <strong style="color:#0886ff">Sipariş Kodu:</strong>'.$urun_siparisKod.'<br>
				    <strong style="color:#0886ff">Ürün Kodu:</strong>'.$urun_Kod.'<br>			
				
			    </td>


			    <td style="padding:5px;width: 50%; align:center;">
			  		<img src=image/'.$dosya.' alt="" width="300" height="200">
			    </td>
			    
			</tr>
			</table>';

/*<hr style="height:0.5px;border-width:0;color:gray;background-color:gray">*/
/*burada dosya yolu çok önemli, mutlaka belirtilmeli.Hatalar buradan kaynaklı oluyor.*/

$veri.='<h3 style="color:#0886ff">Standart Ürün Özellikleri</h3>';


$veri.='<table style="  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  width: 75%;
			  ">

			  <tr >
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Gövde:<br>
			  	</td>  

			  <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$govde.'<br>
			  	</td>      
			  </tr>
			  
			  
			  
			  <tr style=" background-color: #dddddd;">
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Optik:<br></td>    

			  	<td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$optik.'<br></td> 
			  </tr>
			  
			  
			  
			  
			  <tr>
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Tavan Tipi:<br></td>   

			 <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$tavan_tipi.'<br></td>  
			  </tr>
			  
			  
			  
			  <tr style=" background-color: #dddddd;">
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Ip Koruması:<br></td>   

			  <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$ip_koruması.'<br></td>   
			  </tr>
			  
			  
			  
			  <tr>
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Kullanım Şekli:<br></td>    

			  <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$kullanim_sekli.'<br></td>   
			  </tr>
			  
			  
			  
			  <tr style=" background-color: #dddddd;">
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Işık Kaynağı:<br></td>    


			  <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$isik_kaynagi.'<br></td>    
			  </tr>
    
</table>';


$veri.='<h3 style="color:#0886ff">Optik ve Elektriksel Özellikler</h3>';


$veri.='<table style="  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  width: 75%;">

			  <tr >
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Tüketim Gücü:<br>
			  	</td>  

			  <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$tuketim_gucu.'<br>
			  	</td>      
			  </tr>
			  
			  
			  
			  <tr style=" background-color: #dddddd;">
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Armatür Lümeni:<br></td>    

			  	<td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$armatur_lumeni.'<br></td> 
			  </tr>
			  
			  
			  
			  
			  <tr>
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Armatür Verimliliği:<br></td>   

			 <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$armatur_verimliliği.'<br></td>  
			  </tr>
			  
			  
			  
			  <tr style=" background-color: #dddddd;">
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Giriş Gerilimi:<br></td>   

			  <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$giris_gerilimi.'<br></td>   
			  </tr>
			  
			  
			  
			  <tr>
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Giriş Frekansı:<br></td>    

			  <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$giris_frekansı.'<br></td>   
			  </tr>

			  
			  <tr style=" background-color: #dddddd;">
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Güç Faktörü:<br></td>    


			  <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$guc_faktoru.'<br></td>    
			  </tr>



			  <tr>
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Sürüş Akımı:<br></td>    

			  <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$surus_akimi.'<br></td>   
			  </tr>
			  
			  
			  
			  <tr style=" background-color: #dddddd;">
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Renk Sıcaklığı:<br></td>    


			  <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$renk_sicakligi.'<br></td>    
			  </tr>




			  <tr>
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;"> Renksel Geriverim:<br></td>    

			  <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$renksel_geriverim.'<br></td>   
			  </tr>
			  
			  
			  
			  <tr style=" background-color: #dddddd;">
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Çalışma Sıcaklığı:<br></td>    


			  <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$calisma_sicakligi.'<br></td>    
			  </tr>



			 <tr>
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Led Ömrü:<br></td>    

			  <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$led_omru.'<br></td>   
			  </tr>
    
</table>';





$veri.='<h3 style="color:#0886ff">Opsiyonel Özellikler</h3>';


$veri.='<table style="  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  width: 75%;">

			  <tr >
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Renk Sıcaklığı:<br>
			  	</td>  

			  <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$renk_sicakligi.'<br>
			  	</td>      
			  </tr>
			  
			  
			  
			  <tr style=" background-color: #dddddd;">
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">ACK Uyumluluğu:<br></td>    

			  	<td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$ack_uyumlulugu.'<br></td> 
			  </tr>
			  
			  <tr>
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">DALI Uyumluluğu:<br></td>   

			 <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$dali_uyumlulugu.'<br></td>  
			  </tr>
			  
			  
			  
			  <tr style=" background-color: #dddddd;">
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Renk Seçeneği :<br></td>   

			  <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$renk_secenegi.'<br></td>   
			  </tr>


			  <tr style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">
			    <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">Farklı Ebat ve Watt:<br></td>   

			  <td style="  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 2px;">'.$farkli_ebat_watt.'<br></td>   
			  </tr>
</table><br><br><br>';



/*
$veri.='<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm" >
			<img class="mr-3" src="vackerlite.png" alt="" width="200" height="48" >
			<hr style="height:10px;border-width:0;color:green;background-color:green">
		</div>';*/
/*$mpdf->SetHeader('Document Title|Center Text|{PAGENO}');*/
/*https://mpdf.github.io/headers-footers/method-3.html*/

/*
$veri.='<img src=image/'.$dosya2.' alt="" align="center" width="800" height="800" >';*/


$veri.='
			<br><table style="width: 100%; ">

			<tr>
			    <td style="padding:8px;width: 50%; align:center;">
			  		<br>
			    </td>
			    
			</tr>

			<tr>
			    <td style="padding:8px;width: 50%; align:center;">
			  		<img src=image/'.$dosya2.' alt="" align="center" width="800" height="800" >
			    </td>
			    
			</tr>
			</table>';





$mpdf->SetFooter('
<div class="row">
    <div class="col-6 col-md">
      <small class="d-block mb-3 text-muted"><b>VACKERLITE Lighting</b></small>|
      <small class="d-block mb-3 text-muted">Muratpasa Mah. Siteler Cad. No: 2/4 Bayrampasa/Istanbul/TURKEY</small><br>
      <small class="d-block mb-3 text-muted">(+90) 212 565 4045 | info@vackerlite.com | Vackerlite.com</small>
    </div>
</div>
	');

$mpdf->writeHTML($veri);




$mpdf->output('bilgilerim.pdf','D');



?>


