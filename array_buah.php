<?php
//cara penulisan array
//cara lama
$ar_buah = array('pisang','mangga','jeruk');

//cara baru
//array indexing
$buah = ['alpukat', 'jeruk', 'mangga'];
//cara manggil array indexing
echo $buah[1];

//cetak jumlah buah
echo '<br/>Jumlah buah ' .count($buah);

//cetak seluruh buah
echo "<ol>";
foreach($buah as $fruit){
    echo "<li>$fruit</li>";
}
echo "</ol>";

// ==================
//tambahkan buah baru kedalam array
$buah[] = "Durian";

//tambahkan buah baru kedalam array
$buah[] = "Apel";

//cetak seluruh buah
echo "<ol>";
foreach($buah as $buas){
    echo "<li>$buas</li>";
}
echo "</ol>";

?>