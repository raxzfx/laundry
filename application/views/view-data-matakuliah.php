<html>
    <head>
        <title>
            data
        </title>
    </head>
    <body>
        <center>
            <table>
                <tr>
                    <th colspan="3">
                      tampil data matkul
                    </th>
                </tr>
                <tr>
                    <td colspan="3"> 
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>
                        kode mtk
                    </th>
                    <th>:</th>
                    <td>
                        <?=$kode;?>
                    </td>
                </tr>
                <tr>
                    <td>nama MTK</td>
                    <td>:</td>
                    <td>
                        <?=$nama;?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= $sks; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('matakuliah') ?>">kembali</a>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>