<?php include '../layout/dashboard.php';?>
<div id="dashboardDataList">
<table class="userListTable">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Handphone</th>
            <th>Pendidikan</th>
            <th>IPK</th>
            <th>Cumlaude</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Pengaturan</th>
        </tr>
        <?php
        $query = mysqli_query($con, "SELECT * FROM bukumanager") or 
        die(mysqli_error($con));
        if(mysqli_num_rows($query) == 0){
            echo '<tr>
                <td style="text-align:center"colspan="7"> 
                    Tidak ada data! 
                </td>
            </tr>';
        }else{
            $no = 1;
            while($data = mysqli_fetch_assoc($query)){
                echo '<tr>
                        <td>'.$no.'</td>
                        <td>'.$data['Name'].'</td>
                        <td>'.$data['gmail'].'</td>
                        <td>'; if($data['JenisKelamin'] == 0){
                                echo 'Laki-laki';
                            }else{
                                echo 'Perempuan';
                            }
                        echo '</td>
                        <td>'.$data['NomorHandphone'].'</td>
                        <td>'; if($data['Pendidikan'] == 0){
                            echo 'D!';
                        }else if($data['Pendidikan'] == 1){
                            echo 'D2';
                        }else if($data['Pendidikan'] == 2){
                            echo 'D3';
                        }else{
                            echo 'S1';
                        }
                        echo '</td>
                        <td>'.$data['IPK'].'</td>
                        <td>'; if($data['Cumlaude'] == 0){
                                echo 'Ya';
                            }else{
                                echo 'Tidak';
                            }
                        echo '</td>
                        <td>'.$data['Alamat'].'</td>
                        <td>'.$data['Kota'].'</td>
                        <td>
                            <a href ="../dashboard/editBukuDash.php?Idd='.$data['Idd'].'" onclick="return confirm(\'Would you want to edit this data?\')">Edit</a>
                            <a href ="../proses/deleteBuku.php?Idd='.$data['Idd'].'" onclick="return confirm(\'Would you want to delete this data?\')">Hapus</a>
                        </td>
                    </tr>
                ';
                $no++;
            }
        }
        ?>
    </table>
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
    var elm = document.getElementById("listBuku").classList.add("isActive")
    
</script>
</html>  