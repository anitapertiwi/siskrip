<?php
//koneksi mysql
$conn = new mysqli('localhost','root','','db_siskrip');

$administrasipendidikan =  $conn -> query("select * from siskrip where jurusan='Administrasi Pendidikan'");
$bimbingandankonseling =  $conn -> query("select * from siskrip where jurusan='Bimbingan dan Konseling'");
$ppgbk =  $conn -> query("select * from siskrip where jurusan='Pendidikan Profesi Guru Bimbingan dan Konseling'");
$pls =  $conn -> query("select * from siskrip where jurusan='Pendidikan luar sekolah'");
$pkh =  $conn -> query("select * from siskrip where jurusan='Pendidikan Khusus'");
$tekpen =  $conn -> query("select * from siskrip where jurusan='Teknologi Pendidikan'");
$pgsd =  $conn -> query("select * from siskrip where jurusan='Pendidikan Guru Sekolah Dasar'");
$ppgsd =  $conn -> query("select * from siskrip where jurusan='Pendidikan Profesi Guru Pendidikan Guru Sekolah Dasar'");
$pii =  $conn -> query("select * from siskrip where jurusan='Perpustakaan dan Ilmu Informasi'");
$psi =  $conn -> query("select * from siskrip where jurusan='Psikologi'");
$pedagogik =  $conn -> query("select * from siskrip where jurusan='Pedagogik'");
$pgpaud =  $conn -> query("select * from siskrip where jurusan='pgpaud'");

#echo mysqli_num_rows($administrasipendidikan);
#echo mysqli_num_rows($bimbingandankonseling);
#echo mysqli_num_rows($pls);

$jumlah_administrasipendidikan = mysqli_num_rows($administrasipendidikan);
$jumlah_bimbingandankonseling = mysqli_num_rows($bimbingandankonseling);
$jumlah_ppgbk = mysqli_num_rows($ppgbk);
$jumlah_pls = mysqli_num_rows($pls);
$jumlah_pkh = mysqli_num_rows($pkh);
$jumlah_tekpen = mysqli_num_rows($tekpen);
$jumlah_pgsd = mysqli_num_rows($pgsd);
$jumlah_ppgsd = mysqli_num_rows($ppgsd);
$jumlah_pii = mysqli_num_rows($pii);
$jumlah_psi = mysqli_num_rows($psi);
$jumlah_pedagogik = mysqli_num_rows($pedagogik);
$jumlah_pgpaud = mysqli_num_rows($pgpaud);

?>


<html>
	<head>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);

			function drawChart() {

				var data = google.visualization.arrayToDataTable([
					['FIP', 'Jumlah'],
					['Administrasi Pendidikan',<?php echo $jumlah_administrasipendidikan;?>],
					['Bimbingan dan Konseling',<?php echo $jumlah_bimbingandankonseling;?>],
					['Pendidikan Profesi Guru Bimbingan dan Konseling',<?php echo $jumlah_ppgbk;?>],
					['Pendidikan Luar Sekolah',<?php echo $jumlah_pls;?>],
					['Pendidikan Khusus',<?php echo $jumlah_pkh;?>],
					['Teknologi Pendidikan',<?php echo $jumlah_tekpen;?>],
					['Pendidikan Guru Sekolah Dasar',<?php echo $jumlah_pgsd;?>],
					['Pendidikan Profesi Guru Pendidikan Guru Sekolah Dasar',<?php echo $jumlah_ppgsd;?>],
					['Perpustakaan dan Ilmu Informasi',<?php echo $jumlah_pii;?>],
					['Psikologi',<?php echo $jumlah_psi;?>],
					['Pedagogik',<?php echo $jumlah_pedagogik;?>],
					['PGPAUD',<?php echo $jumlah_pgpaud;?>]
				]);
			
				var view = new google.visualization.DataView(data);
				view.setColumns	([0, 1,
									{ calc: "stringify",
									 sourceColumn: 1,
									 type: "string",
									 role: "annotation" }
								]);

				var options = {
					title: 'Jumlah Data Skripsi Mahasiswa FIP',
					width: 1000,
					height: 700,
					bar: {groupWidth: "95%"},
					legend: { position: "none" },	
				};

				var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));
			
				chart.draw(view, options);
			}
		</script>
	</head>
	<body>
		<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
	</body>
</html>