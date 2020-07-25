<?php
require_once '../dompdf/autoload.inc.php';
include('../db.php'); 
use Dompdf\Dompdf;

$document = new Dompdf();
$query = mysqli_query($con,"SELECT * FROM customer") or 
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
        <th>Tanggal Lahir</th>
        <th>Nomor Handphone</th>
        <th>Jenis Kelamin</th>
        <th>Pengaturan</th>

";

$no = 1;
while($data = mysqli_fetch_assoc($query)){
    $output .= '<tr>
            <td>'.$no.'</td>
            <td>'.$data['name'].'</td>
            <td>'.$data['email'].'</td>
            <td>'.$data['tanggalLahir'].'</td>
            <td>'.$data['nomorHandphone'].'</td>
            <td>'; if($data['jenisKelamin'] == 0){
                $output .= 'Laki-laki';
                }else{
                    $output .= 'Perempuan';
                }
                $output .= '</td>
            <td>
                <a href ="../dashboard/editData.php?id='.$data['id'].'" onclick="return confirm(\'Would you want to edit this data?\')">Edit</a>
                <a href ="../proses/deletePeserta.php?id='.$data['id'].'" onclick="return confirm(\'Would you want to delete this data?\')">Hapus</a>
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