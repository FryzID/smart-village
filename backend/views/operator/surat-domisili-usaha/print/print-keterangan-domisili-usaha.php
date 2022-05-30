<html>
    <body>
        <?php foreach ($modelDomisili as $item) { ?>
        <p class="text-center"><b>
            <span style="font-size: 18;">PEMERINTAH KABUPATEN PONOROGO</span><br>
            <span style="font-size: 18;">KECAMATAN .....</span><br>
            <span style="font-size: 18;">KELURAHAN / DESA .....</span></b><br>
            <span style="font-size: 12;">Jln ..... Nomor. ...  Tlp. ...  Kode Pos</span>
        </p>

        <hr style="color: black">

        <h4 class="text-center"><b><u>Surat Keterangan Domisili Usaha</u></b></h4>
        <h5 class="text-center">Nomor : <?= $item->no_surat ?></h5><br>
        <p>Yang bertanda tangan dibawah ini Kepala Desa, menerangkan dengan sesungguhnya bahwa : </p><br>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama : <?= $item->dataPenduduk->nama_lengkap ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempat, Tanggal Lahir : <?= $item->dataPenduduk->tempat_lahir?>, <?= $item->dataPenduduk->tanggal_lahir ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin : <?= $item->dataPenduduk->jenis_kelamin ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status Perkawinan : <?= $item->dataPenduduk->status_perkawinan ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agama : <?= $item->dataPenduduk->agama['nama'] ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan : <?= $item->dataPenduduk->pekerjaan['nama'] ?></p><br>

        <p>Benar saat ini membuka/mempunyai usaha sebagai berikut</p><br>
        
        
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Perusahaan : <?= $item->badan_usaha ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bidang Usaha : <?= $item->bidang_usaha ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat Usaha : <?= $item->alamat_badan_usaha ?></p><br>

        <p>Demikian Surat Keterangan Domisili  Usaha ini, dibuat dengan sebenarnya agar dapat dipergunakan sebagai maksud untuk <?= $item->maksud ?></p><br><br>

        <table class="text-center">
            <tbody>
                <tr>
                    <td width="197">
                        <p>&nbsp;</p>
                    </td>
                    <td width="150">
                        <p>&nbsp;</p>
                    </td>
                    <td width="197">
                        <p>&nbsp;</p>
                    </td>
                    <td width="197">
                        <p>Ponorogo,..... </p>
                        <p>Kepala Desa</p><br><br><br><br><br><br>
                        <p><b><u>.......</u></b></p>
                        <p>NIP : </p>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <?php } ?>
    </body>
</html>

