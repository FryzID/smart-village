<html>
    <body>
        <?php foreach ($modelDesa as $item) { ?>
        <p class="text-center"><b>
            <span style="font-size: 18;">PEMERINTAH KABUPATEN .....</span><br>
            <span style="font-size: 18;">KECAMATAN .....</span><br>
            <span style="font-size: 18;">KELURAHAN / DESA .....</span></b><br>
            <span style="font-size: 12;">Jln ..... Nomor. ...  Tlp. ...  Kode Pos</span>
        </p>

        <hr style="color: black">

        <h4 class="text-center"><b><u>Surat Keterangan <?= $item->judul_surat ?></u></b></h4>
        <h5 class="text-center">Nomor : <?= $item->no_surat ?></h5><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini Kepala Desa Sukorejo, Kecamatan Pahandut, Kota Palangka Raya  menerangkan dengan sesungguhnya bahwa : </p><br>
        
        <p>Nama : <?= $item->dataPenduduk->nama_lengkap ?></p>
        <p>Jenis Kelamin :  <?= $item->dataPenduduk->jenis_kelamin ?></p> 
        <p>Tempat, Tanggal Lahir :  <?= $item->dataPenduduk->tempat_lahir?>, <?= $item->dataPenduduk->tanggal_lahir ?></p>
        <p>Status Perkawinan :  <?= $item->dataPenduduk->status_perkawinan ?></p>
        <p>Agama :  <?= $item->dataPenduduk->agama_id ?></p>
        <p>Pekerjaan :  <?= $item->dataPenduduk->pekerjaan_id ?></p>
        <br>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orang tersebut adalah benar warga Desa Sukorejo, Kecamatan Pahandut, Kota Palangka Raya dan Mengajukan izin untuk berpergian dengan maksud untuk <?= $item->keperluan ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Keterangan <?= $item->judul_surat ?> ini diberikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana mestinya.  </p><br><br>

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
                        <p>Kepala Desa Sukorejo</p><br><br><br><br><br><br>
                        <p><b><u>Seseorang</u></b></p>
                        <p>NIP : </p>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <?php } ?>
    </body>
</html>

