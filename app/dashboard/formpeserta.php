<?php include '../layout/dashboard.php';?>
<div id="dashboardData">
<form id="formUserManager" action="../proses/createUser.php" method="POST" onclick=" return formValidation()">
        <fieldset id="fieldUserManager">
        <div class="UserManagertext">User Manager</div>
            <p>Name</p>
            <input id="Name" type="text" name="name" placeholder="Nama"/>
            <p>Email</p>
            <input id="E-mail" type="text" name="email" placeholder="E-mail"/>
            <p>Tanggal Lahir</p>
            <input type="date" id="tanggalLahir" placeholder="Enter Birthdate" name="tanggalLahir" />
            <p>Nomor Handphone</p>
            <input type="text" name="nomorHandphone" id="nomorhp" placeholder="Nomor Handphone"/>
            <div> <p>Gender</p>
                <input type="radio" name="jenisKelamin" id="Male" value="0">Male
                <input type="radio" name="jenisKelamin" id="Female" value="1">Female
            </div>
            <br>
            <button id="submit" type="submit" name="store">Add New</button>
        </fieldset>
</form>
</div>
</body>
<script src="./script/script.js"></script>
<script>
var elm = document.getElementById("userTab").classList.add("isActive")

</script>
</html> 