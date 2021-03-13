<?php

$ns1= ['id'=>1,'nama'=>'aldy','nim'=>'01101','matkul'=>'DDP','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2= ['id'=>2,'nama'=>'ranbo','nim'=>'01120','matkul'=>'WEB1','uts'=>85,'uas'=>85,'tugas'=>79];
$ns3= ['id'=>3,'nama'=>'wann','nim'=>'01130','matkul'=>'JARKOM','uts'=>84,'uas'=>82,'tugas'=>78];
$ns4= ['id'=>4,'nama'=>'albert','nim'=>'01140','matkul'=>'PPKN','uts'=>88,'uas'=>81,'tugas'=>80];

$ar_nilai = [$ns1,$ns2,$ns3,$ns4];
?>
<h3>Daftar Nilai Siswa</h3>

<table border="1" width="100%" style ="background-color = green;">
    <thead>
        <tr>
            <th>No</th><th>NAMA</th><th>NIM</th><th>MATKUL</th><th>UTS</th><th>UAS</th><th>Tugas</th><th>Nilai akhir</th>
        </tr>
    </thead>

    <tbody>
    <?php
        $nomor=1;
        foreach ($ar_nilai as $ns) {
            echo '<tr><td>'.$nomor. '</td>';
            echo '<td>'.$ns['nama'].'</td>';
            echo '<td>'.$ns['nim']. '</td>';
            echo '<td>'.$ns['matkul'].'</td>';
            echo '<td>'.$ns['uts']. '</td>';
            echo '<td>'.$ns['uas']. '</td>';
            echo '<td>'.$ns['tugas']. '</td>';
            $nilai_akhir = ($ns['uts']+$ns['uas']+$ns['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',','.'). '</td>';
            echo '<tr/>';
            $nomor++;
        }
        echo '<tr><td>'.$nomor. '</td>';
        echo '<td>'.$_GET['name'].'</td>';
        echo '<td>'.$_GET['nim'].'</td>';
        echo '<td>'.$_GET['matkul'].'</td>';
        echo '<td>'.$_GET['nilai_uts'].'</td>';
        echo '<td>'.$_GET['nilai_uas'].'</td>';
        echo '<td>'.$_GET['nilai_tugas'].'</td>';
        $nilai_akhir = ($_GET['nilai_uts']+$_GET['nilai_uas']+$_GET['nilai_tugas'])/3;
        echo '<td>'.number_format($nilai_akhir,2,',','.'). '</td>';
        echo '<tr/>';
        $nomor++;
        
    ?>
    </tbody>

</table>
