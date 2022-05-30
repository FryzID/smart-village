<html>
    <body>
        <?php foreach ($modelSkck as $item) { ?>
        <p class="text-center"><b>
            <span style="font-size: 18;">PEMERINTAH KABUPATEN PONOROGO</span><br>
            <span style="font-size: 18;">KECAMATAN .....</span><br>
            <span style="font-size: 18;">KELURAHAN / DESA .....</span></b><br>
            <span style="font-size: 12;">Jln ..... Nomor. ...  Tlp. ...  Kode Pos</span>
        </p>

        <hr style="color: black">

        <h4 class="text-center"><b><u>Surat Keterangan Catatan Kepolisian</u></b></h4>
        <h5 class="text-center">Nomor : <?= $item->no_surat ?></h5><br>
        <p>Yang bertanda tangan dibawah ini Kepala Desa, menerangkan dengan sesungguhnya bahwa : </p><br>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Lengkap : <?= $item->dataPenduduk->nama_lengkap ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin : <?= $item->dataPenduduk->jenis_kelamin ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempat, Tanggal Lahir : <?= $item->dataPenduduk->tempat_lahir?>, <?= $item->dataPenduduk->tanggal_lahir ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status Perkawinan : <?= $item->dataPenduduk->status_perkawinan ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agama : <?= $item->dataPenduduk->agama['nama'] ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan : <?= $item->dataPenduduk->pekerjaan['nama'] ?></p><br>

        <p>Orang tersebut diatas adalah benar penduduk Desa kami, serta kami menerangkan bahwa orang tersebut <b>berkelakuan baik</b> dan <b>belum pernah tersangkut perkara Polisi</b>. Surat Keterangan ini kami berikan untuk memenuhi salah satu persyaratan <?= $item->tujuan_pembuatan ?></p><br>
        <p>Demikian surat keterangan ini dibuat, kepada yang bersangkutan harap maklum serta menjadikan bahan seperlunya</p><br><br>

        <table>
            <tbody>
                <tr>
                    <td width="197">
                        <br>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camat.....</p>
                    </td>
                    <td width="197">
                        <p>&nbsp;</p>
                    </td>
                    <td width="197">
                        <p>&nbsp;</p>
                    </td>
                    <td width="197">
                        <p>.......... </p>
                        <p>Kepala Desa.....</p>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <?php } ?>
    </body>
</html>

