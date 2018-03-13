<?php
include("config.php");
?>
<!doctype html>
<html>
<head>
<meta  name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<title>Home - Departemen Teknologi Informasi</title>
<link rel="stylesheet" type="text/css" href="teknologiInformasi.css">
<link rel="shortcut icon" href="logo.ico" />
</head>


<body>
<div id="header" style="margin: 0">
	<h1 id="namajurusan">Teknologi Infomasi</h1>
	<p id="tanggal"></p>
</div>

<div class="navbar" id="mynavbar">
		<a href="#header" class="scroll">Home</a>
		<a href="#visimisi" class="scroll">Visi dan Misi</a>
		<a href="#mengapa" class="scroll">Mengapa Teknologi Informasi?</a>
		<a href="#fasilitas" class="scroll">Fasilitas</a>
		<a href="#lulusan" class="scroll">Profil Lulusan</a>
		<a href="#peluang" class="scroll">Jenis Peluang Kerja</a>
		<a href="#seleksi" class="scroll">Seleksi Masuk</a>
		<a href="#katamereka" class="scroll">Apa Kata Mereka?</a>
		<a href="#contact" class="scroll">Contact us</a>
		<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div id="visimisi" style="position:relative;background-image:url(Images/visimisi.jpg);background-size:cover;background-repeat: no-repeat;padding-top:20px" ><div style="background-color: rgba(35,71,168,0.2);width: 100%;height: 100%;top:0;left:0;position: absolute"></div>
	<div class="rectangle">
	<h1>Visi dan Misi</h1></div>
	<div class="row" >
	  <div class="column">
		<h2>Visi</h2>
		<p>
			Menjadi Program Studi Teknologi Informasi yang unggul dalam bidang kemanan siber dan Teknologi
			berbasis internet (<em>internet of Things</em>) untuk mendukung pembangunan Smart City secara berkelanjutan hingga tahun 2022
		</p>
	  </div>
	  <div class="column">
		<h2>Misi</h2>
		<ol>
		<li>
			<p>
				Menyelenggarakan pendidikan dan pengajaran Teknologi Informasi dengan menggunakan kurikulum yang adaptif, berorientasi ke masa depan dan didukung SDM uang berkualitas serta fasilitas yang memadai.
			</p>
		</li>
		<li>
			<p>
				Melaksanakan penelitian yang bermutu di bidang Keamanan Siber dan Internert of Things untuk teknologi <em>Smart City</em>.
			</p>
		</li>
		<li>
			<p>
				Menjalin kemitraan dengan instansi dalam maupun luar negeri.
			</p>
		</li>
		<li>
			<p>
				Menyelenggrakan pengabdian kepada masyarakat berupa pelatihan, penyuluhan, penerapan hasil penelitian untuk pengembangan potensi dan pemberdayaan masyarakat daerah.
			</p>
		</li>
		</ol>
	  </div>
	</div>
	
</div>

<div id="mengapa" style="padding-top:20px">
	<div class="rectangle">
	<h1>Mengapa Teknologi Informasi?</h1></div>
	<div  class="mengapa" style="width:65%;text-align: center;margin:0px auto">
	<p>
		Saat ini banyak terdapat <em>hacker</em> di dunia siber, oleh karena itu diperlukan ahli keamanan siber dan aplikasi untuk mengurangi penipuan(<em>fraud</em>).
	</p>
	<p>
		Program Studi Teknologi Informasi dapat mencetak lulusan yang mempunyai keahlian di bidang layanan awan, yang berkontribusi dalam meningkatkan kuantitas dan kualitas SDM, sehingga dapat mengingatkan efisiensi operasional organinsasi.
	</p>
	<p>
		Memiliki kemampuan untuk menghasilkan SDM yang ahli dalam bidang integrasi sistem sebagai solusi untuk mendukung penanganan aplikas-aplikasi di instansi pemenerintahan (E-Gov).
	</p>
	<p>
		Mmefasilitasi otomatisasi proses bisnis do organisasi untuk menghadapu perkembangan teknologi internet yang pesat dalam rangka mendukung pengembangan Teknologi <em>Smart City</em>.
	</p>
	</div>
</div>

<div id="fasilitas" style="padding-top:20px">
	<div class="rectangle">
	<h1>Fasilitas</h1></div>
	<div style="text-align: center">
	<div id="lab" style="background-image: url(Images/lab.png);width: 90%; background-size: cover;margin: 0px auto"><h1>Laboratorium</h1>
		<p>
			Terdapat 2 laboratorium komputer (Lab Keamanan Siber dan Lab Teknologi Smart City). Selluruh Komputer telah dilengkapi oleh perangkat lunak yang dapat digunakan untuk mendukung kegiatan praktikum maupun kegiatan akademis lainnya.<br>
		</p>
		</div>
		<div id="ruangbaca" style="background-image: url(Images/lab.png);width: 90%; background-size: cover;margin: 0px auto">
	<h1>Raung Baca</h1>
	<p>
		Memiliki berbagai macam koleksi mulai dari fiksi hingga materi perkuliahanm dari bahan cetak hingga koleksi digital seperti CD-ROM, CD, VCD dan DVD. Selain itu juga menyediaan publikasi serial harian dan bulanan seperti surat kabar dan majalah.
	</p>
	</div>
	<div id="ruangkelas" style="background-image: url(Images/lab.png);width: 90%; background-size: cover;margin: 0px auto">
	<h1>Ruang Kelas</h1>
	<p>
		Setiap ruang kelas dilengkapi dengan pendingin ruangan dan LCD serta akses intermet gratis yang dapat mendukung kegiatan akademis mahasiswa.
	</p>
	</div>
	</div>
</div>

<div id="lulusan" style="padding-top:20px">
	<div class="rectangle">
	<h1>Profil Lulusan</h1></div>
	<div style="display:flex;clear:both;margin:20px;">
	<div class="container1">
	  <img src="Images/1.png" class="image">
	  <div class="overlay">
		<div class="text">Spesialis Keamanan Siber</div>
	  </div>
	</div>
	<div class="container1">
	  <img src="Images/2.png" class="image">
	  <div class="overlay">
		<div class="text">Spesialis Internet of Things</div>
	  </div>
	</div>
	<div class="container1">
	  <img src="Images/3.png" class="image">
	  <div class="overlay">
		<div class="text">Analisis Kemanan Aplikasi</div>
	  </div>
	</div>
	<div class="container1">
	  <img src="Images/4.png" class="image">
	  <div class="overlay">
		<div class="text">Pengembang Layanan Awan</div>
	  </div>
	</div>
	<div class="container1">
	  <img src="Images/5.png" class="image">
	  <div class="overlay">
		<div class="text">Spesialis Integrasi Sistem</div>
	  </div>
	</div>
	</div>
</div>

<div id="peluang" style="background-image: url(Images/lulus.jpg);background-size: cover; padding-top:20px">
	<div class="rectangle">
	<h1>Jenis Peluang Kerja</h1></div>
	<div class= "kerja" style="margin:0px auto;text-align: center">
	<br>
	<p class="white">
		Komputasi dan Komputaso Tedistribusi<br>(<em>Cloud and Distributed Computing</em>).
	</p>

	<p class="white">
		Arsitektur Web dan Pengembangan Framework <br>
(<em>Web Architecture and Development Framework</em>).
	</p>

	<p class="white">
		Integrasi Perangkat Lunak dan Middleware <br>
(<em>Middleware and Integration Software</em>).
	</p>

	<p class="white">
		Rancangan Antarmuka Pengguna <br>
(<em>User Interrface Design</em>).
	</p>

	<p class="white">
		Keamanan Informasi dan Jaringan <br>
(<em>Network and Information Security</em>).
	</p>

	<p class="white">
		Manajemen Penyimpanan Data <br>
(<em>Storage Systems and Management</em>).
	</p>

	</div>
</div>

<div id="seleksi" style="padding-top:20px">
	<div class="rectangle">
	<h1>Seleksi Masuk</h1></div>
	<div class="masuk" style="margin:0px auto; text-align: center">
		<h1>Tahun Akademik 2018/2019</h1>
		<a class="besar" href="https://smits.its.ac.id/sarjana/#snmptn" target="_blank"><h1 style="color: black">>SNMPTN</h1></a>
		<br>
		<a class="besar" href="https://smits.its.ac.id/sarjana/#sbmptn" target="_blank"><h1 style="color: black">>SBMPTN</h1></a>
		<br>
		<a class="besar" href="https://smits.its.ac.id/sarjana/#pkm" target="_blank"><h1 style="color: black">>PKM</h1></a>
		<br>
	</div>
</div>

<div id="katamereka" style="padding-top:20px">
	<div class="rectangle">
	<h1>Apa Kata Mereka?</h1></div>
	<div class="mereka" style="width: 100%;display:flex;clear:both;margin-top: 20px;margin-bottom: 20px">
		<div class="kartu" style="margin: 20px; float:left;margin:0px auto">
			<img src="Images/wiranto.jpg" style="width:  100%">
			<div class="container">
				<h4><strong>Wiranto - Menko Polhukam</strong></h4>
				<p>"Kegiatan siber nasional terutama pengamanan siber ini merupakan keharusan, keniscayaan.."</p>
			</div>
		</div>
		<div class="kartu" style="margin: 20px; float:left;margin:0px auto">
			<img src="Images/john.jpg" style="width:  100%">
			<div class="container">
				<h4><strong>John McCarthy - Pakar Komputasi MIT</strong></h4>
				<p>"Suatu hari nanti komputasi akan menjadi infrastruktur publik seperti listrik dan telepon."</p>
			</div>
		</div>
		<div class="kartu" style="margin: 20px; float:left;margin:0px auto">
			<img src="Images/rudiantara.jpg" style="width:  100%">
			<div class="container">
				<h4><strong>Rudiantara - Menkominfo</strong></h4>
				<p>"Smart City menciptakan perubahan sistem lebih efektif dan efisien dalam lembaga pemerintahan."</p>
			</div>
		</div>
		<div class="kartu" style="margin: 20px; float:left;margin:0px auto">
			<img src="Images/bill.jpg" style="width:  100%">
			<div class="container">
				<h4><strong>Bill Gates - Microsoft</strong></h4>
				<p>"Jika kita tidak memecahkan masalah keamanan, maka orang-orang akan ragu."</p>
			</div>
		</div>
	</div>
</div>


<div id="contact" style="padding-top:20px">
	<div style="background-color: navy; padding-bottom: 20px">
		<h1 style="color: white">Komentar</h1>
		<br>
			<form action="formkomentar.php" method="post">
				<div class="rows">
					<p class="min40" style="color: darkcyan">Nama :</p>
					<input class="komen" type="text" name="nama_depan_komentar" placeholder="Nama anda" style="height: 30px;float: left; width: 30%">
				</div>
				<div class="rows">
					<p class="min40" style="color: darkcyan">E-mail :</p>
					<input class="komen" type="email" name="email_komentar" placeholder="Email anda"  style="height:30px;float: left; width: 30%">
				</div>
				<div class="rows">
				<textarea class="komen" name="komentar" style="width:50%; height:150px" placeholder="Tuliskan komentar anda disini..." ></textarea>
				</div><br><br>
				<div class="rows">
				<input type="submit" value="Submit" style="font-size: 25px;margin: 0 auto">
				</div>
			</form>
			
			<br>
	</div>
	
</div>
			
	<div>
		<?php
		$servername = "localhost";
		$username = "id4957013_localhost";
		$password = "localhost";
		$dbname = "id4957013_userinfo";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
			$sql = "
			SELECT * 
            FROM (
              SELECT nama, email, time, isi, id
              FROM komentar
              ORDER BY 'id' ASC 
              LIMIT 3
            ) AS sq 
            ORDER BY 'id' DESC";
			$query = mysqli_query($conn, $sql);
			$data = mysqli_fetch_assoc($query);
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) { ?>
				<div style="border:3px solid darkcyan; border-radius: 15px; width:40%;margin:20px auto">
					<h1 style="text-align: left;margin-left: 20px;color: darkcyan"><?php echo $row["nama"] ?></h3>
					<p style="text-align: left;margin-left: 40px"><?php echo $row["time"] ?></p>
					<h5 style="text-align: left;margin-left: 40px;color: #1b75ab"><?php echo $row["email"] ?></h5><br>
					<p style="text-align: left;margin-left: 40px"><?php echo $row["isi"] ?></p>
					<a href="formupdate.php?id=<?php echo $data['id']; ?>" target="_self"><button style="text-align: left;margin-left: 20px" class="button"><span>Edit </span></button>
					<a href="delete.php?id=<?php echo $data['id']; ?>" target="_self"><button class="tombol"><span>Hapus </span></button></a>
					<p style="text-align: center">-------------------------------------</p>
					</div>
			<?php	}
			} else { ?>
				<p><?php echo "0 results"; ?></p>
			<?php } ?>
	</div>	

<div id="contact" style="padding-top:20px">
	<div style="background-color: navy; padding-bottom: 20px">
		<h1 style="color: white">Hubungi Kami</h1>
		<br>
			<form action="form.php" method="post">
				<div class="rows">
					<p class="min25">Nama Lengkap :</p>
					<input class="hubungi" type="text" name="nama_depan_pengunjung" placeholder="Nama Lengkap anda" style="height: 30px;float: left; width: 50%">
				</div>
				<div class="rows">
					<p class="min25">E-mail :</p>
					<input class="hubungi" type="email" name="email_pengunjung" placeholder="Email Address"  style="height:30px;float: left; width: 50%">
				</div>
				<div class="rows">
				<textarea class="hubungi" name="pesan_kesan" style="width:50%; height:150px" placeholder="Tuliskan pesan anda disini..." ></textarea></div><br><br>
				<div class="rows">
				<input type="submit" value="Submit" style="font-size: 25px;">
				</div>
			</form>
			
			<br>
		<p class="footer">email : teknologi.informasi@its.ac.id</p>
		<p class="footer">Departemen Teknologi Informasi ITS<br>Kampus ITS, Surabaya 60111<br>Indonesia</p>
	</div>
	</div>
<script>
function myFunction() {
    var x = document.getElementById("mynavbar");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}
	document.getElementById("tanggal").innerHTML = Date();
	
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".scroll").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
</body>
</html>
