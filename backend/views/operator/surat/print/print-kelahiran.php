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

        <h4 class="text-center"><b><u>Surat Keterangan Kelahiran</u></b></h4>
        <h5 class="text-center">Nomor : <?= $item->no_surat ?></h5><br>
        <p>Yang bertanda tangan dibawah ini Kepala Desa ..... Kecamatan ..... Kabupaten Ponorogo, menerangkan dengan sebenarnya bahwa :</p><br>
        
        <p>Nama : </p>
        <p>Tempat, Tanggal Lahir : </p>
        <p>Jenis Kelamin : </p>
        <p>Pekerjaan : </p>
        <p>Alamat : </p><br>

        <p>Adalah Anak dari</p><br>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Ayah Kandung : </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Ibu Kandung : </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anak ke :</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</p><br>

        <p>Demikian Surat Keterangan Kelahiran ini kami buat untuk dipergunakan sebagaimana mestinya.</p><br><br>

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
                        <p>..Kecamatan..,..... </p>
                        <p>Kepala Desa</p><br><br><br><br><br><br>
                        <p><b><u>Seseorang</u></b></p>
                        <p>NIP : </p>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <?php } ?>
    </body>
</html>

