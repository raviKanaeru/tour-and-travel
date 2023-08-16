<?php 
// menghubungkan database
$koneksi = mysqli_connect("localhost","root","","db_tour_travel");


// menampilkan data

function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];

	while( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

// menambahkan user
function registrasi($data){
	global $koneksi;

	$username = strtolower(stripcslashes($data["username"]));
	$no_hp = stripslashes($data["no_hp"]);
	$password = mysqli_real_escape_string($koneksi, $data["password"]);
	$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);


	// cek username ada atau belum
	$result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");
	if( mysqli_fetch_assoc($result)) {
		echo "<script>
		alert('Username telah digunakan');
		</script>";
		return false;
	}

	// cek konfirmasi password
	if( $password !== $password2) {
		echo "<script>
		alert('konfirmasi password salah');
		</script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan ke database
	mysqli_query($koneksi, "INSERT INTO user VALUES('','$username','$password','$no_hp')");

	return mysqli_affected_rows($koneksi);



}



function pemesanan(){
	global $koneksi;
	$nama = $_POST["nama_lengkap"];
	$tour = $_POST["nama_tour"];
	$jumlahtiket = $_POST["jumlah_tiket"];
	$harga = $_POST["harga"];
	$total = $harga * $jumlahtiket;
	$tanggal = $_POST["tanggal_berangkatan"];
	$username = $_SESSION["username"];
	$status = $_POST["status"];

	// 
	mysqli_query($koneksi,"INSERT INTO pesanan_tour VALUES('','$nama','$tour','$jumlahtiket','$harga','$total','$tanggal','$username','$status')");

	return mysqli_affected_rows($koneksi);

}

function canceltour($id){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM pesanan_tour WHERE nomor_pemesanan = $id");
		return mysqli_affected_rows($koneksi);
}

function pesantravel($data) {
	global $koneksi;
	$username = $_SESSION["username"];
	$namapemesan = $data["nama_lengkap"];
	$namatravel = $data["nama_travel"];
	$harga = $data["harga"];
	$jumlahtiket = $data["jumlah_tiket"];
	$total = $harga * $jumlahtiket;
	$tanggal = $data["tanggal_berangkat"];
	$status = $data["status"];

	mysqli_query($koneksi,"INSERT INTO pesanan_travel VALUES('','$username','$namapemesan','$namatravel','$harga','$jumlahtiket','$total','$tanggal','$status')");

	return mysqli_affected_rows($koneksi);
}


function canceltravel($id){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM pesanan_travel WHERE nomor_pemesanan = $id");
		return mysqli_affected_rows($koneksi);

}

function status($data){
	global $koneksi;
	$id = $data["id"];
	$status = $data["status"];

	$query = "UPDATE tb_siswa SET 
					status = '$status'
					WHERE nomor_pemesanan = $id
					  ";

		mysqli_query($koneksi,$query);
		return mysqli_affected_rows($koneksi);
}














 ?>