<?php 
// koneksi

$koneksi = mysqli_connect("localhost", "root", "", "db_tour_travel");


// menampilkan

function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];

	while ( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

// tambah paket tour
function tambahtour($tambah) {
	global $koneksi;

	$Nama = htmlspecialchars($tambah["nama_tour"]);
		$harga = htmlspecialchars($tambah["harga"]);
		$lokasi = htmlspecialchars($tambah["lokasi"]);
		$durasi = htmlspecialchars($tambah["durasi"]);
		$tgg = htmlspecialchars($tambah["tanggal_berangkat"]);
		$tgg2 = htmlspecialchars($tambah["tanggal_berangkat2"]);
		$tgg3 = htmlspecialchars($tambah["tanggal_berangkat3"]);
		$day1 = htmlspecialchars($tambah["day1"]);
		$day2 = htmlspecialchars($tambah["day2"]);
		$day3 = htmlspecialchars($tambah["day3"]);
		$day4 = htmlspecialchars($tambah["day4"]);
		$day5 = htmlspecialchars($tambah["day5"]);
		$day6 = htmlspecialchars($tambah["day6"]);
		$day7 = htmlspecialchars($tambah["day7"]);
		
		// UPLOAD GAMBAR
		$Foto = upload();
		if( !$Foto) {
			return false;
		}

		$query = "INSERT INTO tour VALUES('','$Nama','$Foto','$harga','$lokasi','$durasi','$tgg','$tgg2','$tgg3')"; 
		mysqli_query($koneksi,$query);

		$query1 = "INSERT INTO itinerary_tour VALUES('','$Nama','$day1','$day2','$day3','$day4','$day5','$day6','$day7')"; 
		mysqli_query($koneksi,$query1);

		return mysqli_affected_rows($koneksi);
}

function upload() {
	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpname = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada foto yang diupload
	if( $error === 4) {
		echo "<script>
				alert('Silahkan Masukkan Foto Terlebih dahulu!');
				</script>";

				return false;
	}

	// cek apakah yang diupload adalah foto
	$ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
	$ekstensigambar = explode('.', $namafile);
	$ekstensigambar = strtolower(end($ekstensigambar));
	if( !in_array($ekstensigambar, $ekstensigambarvalid)) {
		echo "<script>
				alert('Yang Anda Upload Bukan Foto!');
				</script>";

				return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranfile > 1000000) {
		echo "<script>
				alert('Ukuran Foto Terlalu Besar');
				</script>";

				return false;
	}

	// lolos pengecekan, foto siap diupload
	// generate nama foto baru
	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensigambar;

	move_uploaded_file($tmpname, 'tour/'. $namafilebaru);

	return $namafilebaru;


}

// tambah paket tour
function tambahtravel($tambah) {
	global $koneksi;

	$Nama = htmlspecialchars($tambah["nama_travel"]);
		$harga = htmlspecialchars($tambah["harga"]);
		$lokasi = htmlspecialchars($tambah["lokasi"]);
		$durasi = htmlspecialchars($tambah["durasi"]);
		
		// UPLOAD GAMBAR
		$Foto = upload2();
		if( !$Foto) {
			return false;
		}

		$query = "INSERT INTO travel VALUES('','$Nama','$Foto','$harga','$durasi','$lokasi')"; 
		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi);
}

function upload2() {
	$namafile = $_FILES['foto']['name'];
	$ukuranfile = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmpname = $_FILES['foto']['tmp_name'];

	// cek apakah tidak ada foto yang diupload
	if( $error === 4) {
		echo "<script>
				alert('Silahkan Masukkan Foto Terlebih dahulu!');
				</script>";

				return false;
	}

	// cek apakah yang diupload adalah foto
	$ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
	$ekstensigambar = explode('.', $namafile);
	$ekstensigambar = strtolower(end($ekstensigambar));
	if( !in_array($ekstensigambar, $ekstensigambarvalid)) {
		echo "<script>
				alert('Yang Anda Upload Bukan Foto!');
				</script>";

				return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranfile > 1000000) {
		echo "<script>
				alert('Ukuran Foto Terlalu Besar');
				</script>";

				return false;
	}

	// lolos pengecekan, foto siap diupload
	// generate nama foto baru
	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensigambar;

	move_uploaded_file($tmpname, 'travel/'. $namafilebaru);

	return $namafilebaru;


}

function ubahtour($ubah) {
	global $koneksi;
		$id = htmlspecialchars($ubah["nomor_pemesanan"]);
		$status = htmlspecialchars($ubah["status"]);

		$query = "UPDATE pesanan_tour SET 
					status = '$status'
					WHERE nomor_pemesanan = $id
					  ";

		mysqli_query($koneksi,$query);
		return mysqli_affected_rows($koneksi);

}

function ubahtravel($ubah) {
	global $koneksi;
		$id = htmlspecialchars($ubah["nomor_pemesanan"]);
		$status = htmlspecialchars($ubah["status"]);

		$query = "UPDATE pesanan_travel SET 
					status = '$status'
					WHERE nomor_pemesanan = $id
					  ";

		mysqli_query($koneksi,$query);
		return mysqli_affected_rows($koneksi);

}

function hapuspesantour($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM pesanan_tour WHERE nomor_pemesanan= $id");
	 return mysqli_affected_rows($koneksi);
}

function hapuspesantravel($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM pesanan_travel WHERE nomor_pemesanan= $id");
	 return mysqli_affected_rows($koneksi);
}

function hapustour($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tour WHERE id_tour = $id");
	 return mysqli_affected_rows($koneksi);
}

function hapustravel($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM travel WHERE id_travel = $id");
	 return mysqli_affected_rows($koneksi);
}




 ?>