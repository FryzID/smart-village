<html>
    <body>
        <?php foreach ($modelDesa as $item) { ?>
        <p class="text-center"><b>
            <span style="font-size: 18;">PEMERINTAH KABUPATEN PONOROGO</span><br>
            <span style="font-size: 18;">KECAMATAN .....</span><br>
            <span style="font-size: 18;">KELURAHAN / DESA .....</span></b><br>
            <span style="font-size: 12;">Jln ..... Nomor. ...  Tlp. ...  Kode Pos</span>
        </p>

        <hr style="color: black">

        <h4 class="text-center"><b><u>Surat Keterangan Domisili</u></b></h4>
        <h5 class="text-center">Nomor : <?= $item->no_surat ?></h5><br>
        <p>Yang bertanda tangan dibawah ini Kepala Desa, menerangkan dengan sesungguhnya bahwa : </p><br>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nik : </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama : </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin : </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempat, Tanggal Lahir : </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status Perkawinan : </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agama : </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan : </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat : </p><br>

        <p>Benar Orang tersebut berdomisili di Desa ..., Kecamatan .., Kabupaten .., Provinsi ...,</p><br>
        <p>Demikian Surat Keterangan Domisili ini kami buat untuk dipergunakan sebagaimana mestinya. </p><br><br>

        <table class="text-center">
            <tbody>
                <tr>
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

