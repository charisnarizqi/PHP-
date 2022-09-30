<?php 
// array scalar
$m1 = ['nim'=>11202012970, 'nama'=>'indra' , 'nilai'=> 85 ];
$m2 = ['nim'=>11202012971, 'nama'=>'budi' , 'nilai'=> 90 ];
$m3 = ['nim'=>11202012972, 'nama'=>'rossyta' , 'nilai'=> 72 ];
$m4 = ['nim'=>11202012973, 'nama'=>'yuu' , 'nilai'=> 70 ];
$m5 = ['nim'=>11202012974, 'nama'=>'aqil' , 'nilai'=> 90 ];
$m6 = ['nim'=>11202012975, 'nama'=>'agus' , 'nilai'=> 60 ];
$m7 = ['nim'=>11202012976, 'nama'=>'ujang' , 'nilai'=> 87 ];
$m8 = ['nim'=>11202012977, 'nama'=>'fino' , 'nilai'=> 83 ];
$m9 = ['nim'=>11202012978, 'nama'=>'kamal' , 'nilai'=> 69 ];
$m10 = ['nim'=>11202012979, 'nama'=>'Ajik' , 'nilai'=> 30 ];

$ar_judul =['No','Nim','Nama','Nilai','Keterangan','Garade','Predikat'];
// array assosiatif
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

// agregat
$jml_mhs = count($mahasiswa);
$jml_nilai = array_column($mahasiswa,'nilai');
$total_nilai = array_sum($jml_nilai);
$best_score = max($jml_nilai);
$low_score = min($jml_nilai);
$rata2 = $total_nilai / $jml_mhs;

// ketentuan
$ketentuan = [
    'Nilai Tertinggi' =>$best_score,
    'Nilai Terendah' =>$low_score, 
    'Rata2' => $rata2,
    'Jumlah Mahasiswa' => $jml_mhs
];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 3 php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
    crossorigin="anonymous">
    <style>
        h3{
            text-align : center;
        }
        thead , tfoot{
            background-color : pink;
        }
        th{
            color : Black;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <table class="table table-bordered">
         <h3>Data Mahasiswa</h3>
            <thead class="text-center">
                <tr>
                <?php foreach ($ar_judul as $jdl) {
                ?>
                    <th><?= $jdl?></th>
                <?php } ?>
                </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; 
            foreach ($mahasiswa as $mhs) {

                // Keterangan lulus atau gagal
                 $ket = ($mhs['nilai'] >= 60)?"Lulus" : "Gagal" ;

                //  tentukan grade
                if($mhs['nilai'] > 85 && $mhs['nilai'] <= 100) $grade ='A';
                else if($mhs['nilai'] > 75 && $mhs['nilai'] <= 85) $grade ='B';
                else if($mhs['nilai'] > 65 && $mhs['nilai'] <= 75) $grade ='C';
                else if($mhs['nilai'] > 55 && $mhs['nilai'] <= 65) $grade ='D';
                else if($mhs['nilai'] > 20 && $mhs['nilai'] <= 55) $grade ='E';
                else  $grade ='';

                // tentukan predikat
                switch ($grade) {
                    case 'A': $predikat = 'Memuaskan'; break;
                    case 'B': $predikat = 'Bagus'; break;
                    case 'C': $predikat = 'Cukup'; break;
                    case 'D': $predikat = 'Kurang'; break;
                    case 'E': $predikat = 'Buruk'; break;
                    default: $predikat = '';
                }
            ?>
                <tr>
                    <td><?= $no?></td>
                    <td><?=$mhs['nim']?></td>
                    <td><?=$mhs['nama']?></td>
                    <td><?=$mhs['nilai']?></td>
                    <td><?=$ket?></td>
                    <td><?=$grade?></td>
                    <td><?=$predikat?></td>
                </tr>
            <?php $no++; } ?>
            </tbody>
            <tfoot>
                <?php foreach ($ketentuan as $tentu => $hasil) {
                ?>
                <tr>
                    <th colspan="6"><?= $tentu?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php   } ?>
            </tfoot>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  </body>
</html>