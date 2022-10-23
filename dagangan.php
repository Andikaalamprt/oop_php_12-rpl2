<?php
    $pkk = array(
        'kd_barang' => array(1, 2, 3),
        'nama_barang' => array('Pangsit', 'Milk Tea', '???'),
        'price' => array('Rp.3,000', 'Rp.5,000', '???')
    );
    echo "kd barang || nama barang || Harga \n";
    echo $pkk['kd_barang'][0], " || ", $pkk['nama_barang'][0], " || ", $pkk['price'][0], "\n";
    echo $pkk['kd_barang'][1], " || ", $pkk['nama_barang'][1], " || ", $pkk['price'][1], "\n";
    echo $pkk['kd_barang'][2], " || ", $pkk['nama_barang'][2], " || ", $pkk['price'][2], "\n";
?>