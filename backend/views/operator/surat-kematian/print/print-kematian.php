<html>
    <body>
        <?php foreach ($modelKematian as $item) { ?>
        <p class="text-center"><b>
            <span style="font-size: 18;">PEMERINTAH KABUPATEN PONOROGO</span><br>
            <span style="font-size: 18;">KECAMATAN .....</span><br>
            <span style="font-size: 18;">KELURAHAN / DESA .....</span></b><br>
            <span style="font-size: 12;">Jln ..... Nomor. ...  Tlp. ...  Kode Pos</span>
        </p>

        <hr style="color: black">

        <h4 class="text-center"><b><u>Surat Keterangan Kematian</u></b></h4>
        <h5 class="text-center">Nomor : <?= $item->no_surat ?></h5><br>
        <p>Dengan ini Saya yang Bertanda tangan dibawah ini,  Kepala Desa ..... Kecamatan ..... Kabupaten Ponorogo, menerangkan dengan sebenarnya bahwa :</p><br>
        
        <p>Nama : <?= $item->dataPenduduk->nama_lengkap ?></p>
        <p>Jenis Kelamin : <?= $item->dataPenduduk->jenis_kelamin ?></p>
        <p>Tempat, Tanggal Lahir : <?= $item->dataPenduduk->tempat_lahir ?>, <?= $item->dataPenduduk->tanggal_lahir ?></p>
        <p>Agama : <?= $item->dataPenduduk->agama['nama'] ?></p>
        <p>Pekerjaan : <?= $item->dataPenduduk->pekerjaan['nama'] ?></p>
        <p>No KTP : <?= $item->dataPenduduk->nik ?></p><br>

        <p>Telah meninggal dunia pada :</p><br>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal : <?= $item->tanggal_meninggal ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bertempat di : <?= $item->tempat_meninggal ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Umur Meninggal : <?= $item->umur_meninggal ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sebab Meninggal : <?= $item->sebab_meninggal ?></p><br>

        <p>Surat Keterangan ini dibuat berdasarkan keterangan pelapor</p><br>

        <p>Nama : <?= $item->nama_pelapor ?></p>
        <p>Hubungan pelapor dengan yang meninggal : <?= $item->hubungan_pelapor ?></p>

        <p>Demikian Surat Keterangan Kematian ini kami buat dengan sebenar - benar agar dipergunakan sebagaimana mestinya</p><br>

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
                        <p>.......... </p>
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
