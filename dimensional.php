<?php
//two-dimensional
$badangmart = array (
    'Nomor' =>array('1','2'),
    'Nama' =>array('pangsit','milktea'),
    'harga' =>array('Rp3000','Rp2000')
);
echo $badangmart['Nomor'][0];

//cara kedua dimensional Halalmart
$badangMart = array (
    array(1,"pangsit","Rp3000"),
    array(2,'milktea','Rp2000'),
  );
  echo $badangMart[0][0];
  echo $badangMart[1][1];
  echo $badangMart[1][2];

//matrix
$matrix = array (
    array(1,2),
    array(3,4)
);
$matrix1 = array (
    array(4,3),
    array(2,1)
)
    ?>