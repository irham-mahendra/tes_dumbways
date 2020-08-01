<!DOCTYPE html>
<html>
<head>
	<title>Voucher DumbWays</title>
</head>
<body>
	
	<?php
		
			$uang = 1000000;
			$harga = 90000;
			$diskon1 = $harga * 0.2;
			$diskon2 = $harga * 0.3;
			$totaldj1 = $harga - $diskon1;
			$totaldj2 = $harga - 20000;
			$totaldm1 = $harga - $diskon2;
			$totaldm2 = $harga - 40000;
 			$kembaliandj1 = $uang - $totaldj1;
			$kembaliandj2 = $uang - $totaldj2;
			$kembaliandm1 = $uang - $totaldm1;
			$kembaliandm2 = $uang - $totaldm2;
			//pilih true untuk menghidupkan
			$member = true;
			$member2 = true;
		echo "<b>VoucherDumbWaysJos: </b> (jika dalam kondisi true)<b>:</b><br>";
		if ($member)  {
			if ($harga > 100000) {
				echo "uang anda ".$uang."<br>";
				echo "harganya adalah ".$harga."<br>";
				echo "diskonnya adalah ".$diskon1."<br>";
				echo "total yang harus dibayar ".$totaldj2."<br>";
				echo "kembaliannya adalah: ".$kembaliandj2."<br>";
				}elseif ($harga >= 50000 && $harga < 100000){
				echo "uang anda ".$uang."<br>";
				echo "harganya adalah ".$harga."<br>";
				echo "diskonnya adalah ".$diskon1."<br>";
				echo "total yang harus dibayar ".$totaldj1."<br>";
				echo "kembaliannya adalah: ".$kembaliandj1;
				}else{
				echo "maaf anda belum dapat diskon ";
			}
		}
		echo "<br><br> <br><b>Voucher DumbWaysMantap </b>(jika dalam kondisi true)<b>:</b><br>";
		if ($member2) {
			if ($harga > 100000) {
				echo "uang anda ".$uang."<br>";
				echo "harganya adalah ".$harga."<br>";
				echo "diskonnya adalah ".$diskon2."<br>";
				echo "total yang harus dibayar ".$totaldm2."<br>";
				echo "kembaliannya adalah: ".$kembaliandm2."<br>";
				}elseif ($harga >= 80000 && $harga < 100000){
				echo "uang anda ".$uang."<br>";
				echo "harganya adalah ".$harga."<br>";
				echo "diskonnya adalah ".$diskon2."<br>";
				echo "total yang harus dibayar ".$totaldm1."<br>";
				echo "kembaliannya adalah: ".$kembaliandm1;
				}else{
					echo "maaf anda belum dapat diskon";		
				}
			
				
		}
		
	

	?>

</body>
</html>