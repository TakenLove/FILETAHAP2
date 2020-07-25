<?php

require_once '../dompdf/autoload.inc.php';
include('../db.php'); 
use Dompdf\Dompdf;

$document = new Dompdf();
$query = mysqli_query($con,"SELECT * FROM bukumanager") or 
            die(mysqli_error($con));

$output = "
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

<table>
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

";

$no = 1;   
while($data = mysqli_fetch_assoc($query)){
    $output .='<tr>
            <td>'.$no.'</td>
            <td>'.$data['Name'].'</td>
            <td>'.$data['gmail'].'</td>
            <td>'; if($data['JenisKelamin'] == 0){
                $output .='Laki-laki';
                }else{
                    $output .='Perempuan';
                }
                $output .='</td>
            <td>'.$data['NomorHandphone'].'</td>
            <td>'; if($data['Pendidikan'] == 0){
                $output .='D1';
            }else if($data['Pendidikan'] == 1){
                $output .='D2';
            }else if($data['Pendidikan'] == 2){
                $output .='D3';
            }else{
                $output .='S1';
            }
            $output .='</td>
            <td>'.$data['IPK'].'</td>
            <td>'; if($data['Cumlaude'] == 0){
                $output .='Ya';
                }else{
                    $output .='Tidak';
                }
                $output .='</td>
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

$output .= '</table>';

$document->loadHtml($output);

$document->setPaper('A4', 'landscape');
$document->render();
$document->stream();

?>