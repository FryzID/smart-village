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

        <h4 class="text-center"><b><u>Surat Keterangan Kematian</u></b></h4>
        <h5 class="text-center">Nomor : <?= $item->no_surat ?></h5><br>
        <p>Dengan ini Saya yang Bertanda tangan dibawah ini,  Kepala Desa ..... Kecamatan ..... Kabupaten Ponorogo, menerangkan dengan sebenarnya bahwa :</p><br>
        
        <p>Nama : </p>
        <p>Jenis Kelamin : </p>
        <p>Tempat, Tanggal Lahir : </p>
        <p>Agama : </p>
        <p>Pekerjaan : </p>
        <p>No KTP : </p>
        <p>Alamat : </p><br>

        <p>Telah meninggal dunia pada :</p><br>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hari, Tanggal : </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pukul : </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bertempat di :</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dimakam di :</p><br>

        <p>Surat Keterangan ini dibuat berdasarkan keterangan pelapor</p><br>

        <p>Nama : </p>
        <p>Jenis Kelamin : </p>
        <p>Tempat, Tanggal Lahir : </p>
        <p>Agama : </p>
        <p>Pekerjaan : </p>
        <p>No KTP : </p>
        <p>Alamat : </p><br>

        <p>Hubungan pelapor dengan yang meninggal :.. </p>

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

diganti ukuran kertas