<?php include '../layout/dashboard.php';?>
<div id="dashboardData">
<form id="formBukuManager" action="../proses/createUserBM.php" method="POST" onclick=" return formValidation()">
<fieldset id="fieldBukuUtama">
    <div class="UserManagertext">
        <p>COME ON !</p>
        <p>JOIN US AND BE OUR MEMBER</p>
    </div>
        <fieldset id="fieldBukuManager">
            <p>Data Pegawai</p>
            <p>Name</p> 
                <input type="text" name="Name" placeholder="Nama"/>
            <p>Email</p>
                <input id="E-mail" type="text" name="gmail" placeholder="E-mail"/>
            <div><p>Gender</p>
                <input type="radio" name="JenisKelamin" id="Male" value="0">Male
                <input type="radio" name="JenisKelamin" id="Female" value="1">Female
            </div>
            <p>Nomor Handphone</p>
            <input type="text" name="NomorHandphone" id="nomorhp" placeholder="Nomor Handphone"/>
        </fieldset>
        <fieldset id="fieldBukuManager">
            <p>Pendidikan</p>
            <p>Background Pendidikan</p>
            <select name="Pendidikan">
                <option value="0">D1</option>
                <option value="1">D2</option>
                <option value="2">D3</option>
                <option value="3">S1</option>
            </select>
            <p>IPK</p>
                <input type="text" name="IPK" id="IP" placeholder="IPK">
            <p>Cumlaude</p>
                <input type="radio" name="Cumlaude" id="cumlaude1" value="0">
                <label for="cumlaude1">Ya</label>
                <input type="radio" name="Cumlaude" id="cumlaude2" value="1">
                <label for="cumlaude2">Tidak</label>
        </fieldset>
        <fieldset id="fieldBukuManager">
            <p>Lokasi Penempatan Kerja</p> 
            <p>Alamat</p>
                <input type="text" name="Alamat" id="Alamat1" placeholder="Alamat">
            <p>Kota</p>
                <input type="text" name="Kota" id="Kota1" placeholder="Kota">
        </fieldset>
        <button id="submit" type="submit" name="store">Add New</button>
</fieldset>
</form>
</div>
</body>
<style>
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
<script src="./script/script.js"></script>
<script>
var elm = document.getElementById("bukuManager").classList.add("isActive")

</script>
</html> 