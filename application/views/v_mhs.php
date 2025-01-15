<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>nim</th>
        <th>alamat</th>
    </tr>
    <tr>
        <?php
        foreach ($mahasiswa as $mhs):?>
           <tr>
            <td><?php echo $mhs['nama'] ?></td>
            <td><?php echo $mhs['nim'] ?></td>
            <td><?php echo $mhs['alamat'] ?></td>
           </tr>
        <?php endforeach; ?>  
      
    </tr>
</table>
</body>
</html>