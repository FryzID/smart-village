<html>
    <body>
        <?php foreach ($modelMiskin as $item) { ?>
        <p class="text-center"><b>
            <span style="font-size: 18;">PEMERINTAH KABUPATEN .....</span><br>
            <span style="font-size: 18;">KECAMATAN .....</span><br>
            <span style="font-size: 18;">KELURAHAN / DESA .....</span></b><br>
            <span style="font-size: 12;">Jln ..... Nomor. ...  Tlp. ...  Kode Pos</span>
        </p>

        <hr style="color: black">

        <h4 class="text-center"><b><u>Surat Keterangan Tidak Mampu</u></b></h4>
        <h5 class="text-center">Nomor : <?= $item->no_surat ?></h5><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini Ketua RT....../RW......Kelurahan Pahandut, Kecamatan Pahandut, Kota Palangka Raya  menerangkan dengan sebenarnya bahwa orang tersebut dibawah ini : </p><br>

        <p>Nama :  <?= $item->dataPenduduk->nama_lengkap ?></p>
        <p>NIK : <?= $item->nik ?></p>
        <p>Tempat, Tanggal Lahir :  <?= $item->dataPenduduk->tempat_lahir?>, <?= $item->dataPenduduk->tanggal_lahir ?></p>
        <p>Jenis Kelamin :  <?= $item->dataPenduduk->jenis_kelamin ?></p>
        <p>Agama :  <?= $item->dataPenduduk->agama_id ?></p>
        <p>Pendidikan :  <?= $item->dataPenduduk->pendidikan_id ?></p>
        <p>Pekerjaan :  <?= $item->dataPenduduk->pekerjaan_id ?></p>
        <p>Status Perkawinan : <?= $item->dataPenduduk->status_perkawinan ?> </p>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahwa nama tersebut diatas adalah benar warga kami yang bertempat tinggal di alamat tersebut dan tergolong keluarga tidak mampu/ekonomi lemah. Surat Keterangan Tidak Mampu ini diberikan untuk keperluan <?= $item->keterangan ?></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Keterangan Tidak Mampu ini diberikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana mestinya.  </p><br><br>

        <table>
            <tbody>
                <tr>
                    <td width="197">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ketua RW.....</p>
                    </td>
                    <td width="197">
                        <p>&nbsp;</p>
                    </td>
                    <td width="197">
                        <p>&nbsp;</p>
                    </td>
                    <td width="197">
                        <p>Ponorogo,..... </p>
                        <p>Ketua RT.....</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <br><br><br><br><br>
        <table>
            <tbody>
                <tr>
                    <td width="200">
                        <p>&nbsp;</p>
                    </td>
                    <td class="text-center justify-content-center" width="200">
                        <p>Mengetahui : </p>
                        <p>Lurah.....</p>
                    </td>
                    <td width="200">
                        <p>&nbsp;</p>
                    </td>
                </tr>
            </tbody>
        </table>

        <?php } ?>
    </body>
</html>

