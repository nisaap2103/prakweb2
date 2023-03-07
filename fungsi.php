<?php
function kelulusan ($_nilai){
    //jika nilai rata" siswa dibawah 55 tidak lulus
    //jika nilai rata" siswa diatas 55 lulus
    if ($_nilai <= 55){
        return 'Anda lulus';
    }else{
        return 'Anda tidak lulus';
    }
}

//1. buat fungsi grade, lalu kasih keterangan:
//jika nilai diatas 85 grade A
//jika nilai diatas 70 grade B
//jika nilai diatas 56 grade C
//jika nilai diatas 36 grade D
//jika nilai diatas 10 grade E
//jika tidak ada nilai cetak I (anda tidak ada nilai)
function grade($_nilai){
    if ($_nilai >= 85){
        return "A";
    }elseif($_nilai >= 70){
        return "B";
    }elseif($_nilai >= 56){
        return "C";
    }elseif($_nilai >= 36){
        return "D";
    }elseif($_nilai >= 10){
        return "E";
    }else{
    return "I(tidak ada nilai)";
    }
}
    ?>