<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('../db.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
    $show = mysqli_query($con,"SELECT * FROM customer WHERE id='$id'") or die(mysqli_error($con));
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysqli_num_rows($show) == 0){
		
		echo '<script>window.history.back()</script>';
		
	}else{
	
        //jika data ditemukan, maka membuat variabel $data
		$data = mysqli_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
?>

<?php include '../layout/dashboard.php';?>
<div id="dashboardData">
    <form id="formUserManager" action="../proses/editPeserta.php" method="POST" onclick="formValidation()">
        <fieldset id="fieldUserManager">
        <div class="UserManagertext">EDIT DATA</div>
            <p>Name</p>
            <input id="Name" type="text" name="name" placeholder="Nama" value="<?php echo $data['name']; ?>" required/>
            <p>Email</p>
            <input id="E-mail" type="text" name="email" placeholder="E-mail" value="<?php echo $data['email']; ?>" required/>
            <p>Tanggal Lahir</p>
            <input type="date" id="tanggalLahir" placeholder="Enter Birthdate" name="tanggalLahir" value="<?php echo $data['tanggalLahir']; ?>" required/>
            <p>Nomor Handphone</p>
            <input type="text" name="nomorHandphone" id="nomorhp" placeholder="Nomor Handphone" value="<?php echo $data['nomorHandphone']; ?>" required/>
            <div> <p>Gender</p>
                <input type="radio" name="jenisKelamin" value='0' id="Male" <?php echo ($data["jenisKelamin"] == 0) ? 'checked': '' ?> required>Male
                <input type="radio" name="jenisKelamin" value='1' id="Female" <?php echo ($data["jenisKelamin"] == 1) ? 'checked': '' ?> required>Female
            </div>
            <br>
            <input type="text" hidden name='id' value="<?php echo $data['id']; ?>">
            <button id="submit" type="submit" name="store">Add New</button>
        </fieldset>
    </form>
</div>
</body>
<style>
.userListTable{
    width: 100%;
}
table, tr, td, th{
    border: 1px;
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<script>
    var elm = document.getElementById("listUser").classList.add("isActive")
    
</script>
</html>