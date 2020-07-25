<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('../db.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$Idd = $_GET['Idd'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
    $show = mysqli_query($con,"SELECT * FROM bukumanager WHERE Idd='$Idd'") or die(mysqli_error($con));
	
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
<form id="formBukuManager" action="../proses/editBuku.php" method="POST" onclick=" return formValidation()">
<fieldset id="fieldBukuUtama">
    <div class="UserManagertext">
        <p>EDIT DATA PESERTA !</p>
    </div>
    <input type="hidden" name="Idd" value="<?php echo $data['Idd']; ?>"/>
        <fieldset id="fieldBukuManager">
            <p>Data Pegawai</p>
            <p>Name</p> 
                <input type="text" name="Name" value="<?php echo $data['Name']; ?>" require/>
            <p>Email</p>
                <input id="E-mail" type="text" name="gmail" value="<?php echo $data['gmail']; ?>" require/>
            <div><p>Gender</p>
                <input type="radio" name="JenisKelamin" value='0' id="Male" <?php echo ($data["JenisKelamin"] == 0) ? 'checked': '' ?> require>Male
                <input type="radio" name="JenisKelamin" value='1' id="Female" <?php echo ($data["JenisKelamin"] == 1) ? 'checked': '' ?> require>Female
            </div>
            <p>Nomor Handphone</p>
            <input type="text" name="NomorHandphone" id="nomorhp" value="<?php echo $data['NomorHandphone']; ?>" require/>
        </fieldset>
        <fieldset id="fieldBukuManager">
            <p>Pendidikan</p>
            <p>Background Pendidikan</p>
            <select>
                <option value="0" <?php echo ($data["Pendidikan"] == 0) ? 'selected="selected"': '' ?>> D1</option>
                <option value="1" <?php echo ($data["Pendidikan"] == 1) ? 'selected="selected"': '' ?>> D2</option>
                <option value="2" <?php echo ($data["Pendidikan"] == 2) ? 'selected="selected"': '' ?>> D3</option>
                <option value="3" <?php echo ($data["Pendidikan"] == 3) ? 'selected="selected"': '' ?>> S1</option>
            </select>
            <p>IPK</p>
                <input type="text" name="IPK" id="IP" value="<?php echo $data['IPK']; ?>" required/>
            <div> <p>Cumlaude</p>
                <input type="radio" name="Cumlaude" value='0' id="cumlaude1" <?php echo ($data["Cumlaude"] == 0) ? 'checked': '' ?> required>Ya
                <input type="radio" name="Cumlaude" value='1' id="cumlaude2" <?php echo ($data["Cumlaude"] == 1) ? 'checked': '' ?> required>Tidak
            </div>
        </fieldset>
        <fieldset id="fieldBukuManager">
            <p>Lokasi Penempatan Kerja</p> 
            <p>Alamat</p>
                <input type="text" name="Alamat" id="Alamat1" value="<?php echo $data['Alamat']; ?>" require/>
            <p>Kota</p>
                <input type="text" name="Kota" id="Kota1" value="<?php echo $data['Kota']; ?>" require/>
        </fieldset>
        <button id="submit" type="submit" name="stores">Edit</button>
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
#fieldBukuUtama{
    outline: none;
    border: black solid 1px;
    border-radius: 4px;
    padding: 40px 40px;
    background: whitesmoke;
    margin-top: 2%;
    padding: 40px 40px 40px 40px;
    text-shadow: rgb(255, 255, 255);
}

#fieldBukuUtama p{
    text-align: center;
    font-family: monospace;
    font-weight: bold;
    font-size: 20pt;
    color: black;
}

#fieldBukuUtama p:hover{
    transform-style: initial;
    color: #a26337;
}


#fieldBukuUtama button[type="submit"]{
    margin-top: 30px;
    width: 100%;
    border: none;
    outline: none;
    height: 40px;
    color: white;
    font-size: 12pt;
    background: #6f4235;
    cursor: pointer;
    border-radius: 20px;
}

#fieldBukuUtama button[type="submit"]:hover{
    background: #a26337;
    color: white;
    transform: scale(1.05);
}

/* /////////////////////////////////////////////////////// */

#formBukuManager{
    transition: all 1s;
    margin-left: 250px;
    padding: 20px;
    margin-top: 10%;
    top: 35%;
    left: 40%;
    width: 75%;
    height: 75%;
    transform: translate(-50%,-50%);
    position: absolute;
    text-shadow: 1px 1px 0p;
}

#fieldBukuManager{
    outline: none;
    border: white solid 1px;
    border-radius: 4px;
    padding: 40px 40px;
    background: rgba(255, 255, 255, 0.97);
    margin-top: 2%;
    padding: 40px 40px 40px 40px;
    text-shadow: rgb(255, 255, 255);
}

#fieldBukuManager p{
    text-align: left;
    font-family: monospace;
    font-weight: bold;
    font-size: 12pt;
    color: black;
}

#fieldBukuManager p:hover{
    transform-style: initial;
    color: #a26337;
}

#fieldBukuManager input{
    margin-bottom: 10px;
}

#fieldBukuManager input[type="text"]{
    width: 100%;
    padding: 10px;
    border: none;
    border: 1px solid black;
    border-radius: 20px;
    color: black;
    font-size: 16px;
}

#fieldBukuManager input:hover[type="text"]{
    transform: scale(1.01);
}

#fieldBukuManager input[type="date"]{
    width: 25%;
    padding: 10px;
    border: 1px solid black;
    border-radius: 20px;
    color: black;
    font-size: 16px;
}

#fieldBukuManager input:hover[type="date"]{
    transform: scale(1.1);
}

#fieldBukuManager input[type="radio"]{
    margin-right: 10px;
    color: black;
    transform: scale(1.5);
}

#fieldBukuManager input:hover[type="radio"]{
    transform: scale(1.2);
}

#fieldBukuManager select{
    padding: 1px;
    margin-right: 15px;
    width: 10%;
}

#fieldBukuManager button[type="submit"]{
    margin-top: 30px;
    width: 100%;
    border: none;
    outline: none;
    height: 40px;
    color: white;
    font-size: 12pt;
    background: #6f4235;
    cursor: pointer;
    border-radius: 20px;
}

#fieldBukuManager button[type="submit"]:hover{
    background: #a26337;
    color: white;
    transform: scale(1.05);
}
</style>
<script>
    var elm = document.getElementById("listUser").classList.add("isActive")
    
</script>
</html>