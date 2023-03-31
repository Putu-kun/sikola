<?php
error_reporting(E_ALL ^ E_DEPRECATED);
mysqli_connect("localhost","root","");
$database='db_codeigniterv2';
$konek=mysqli_connect('localhost','root','');
mysqli_select_db($konek, $database);
    echo "<h3>Soal Ujian Akhir Semester</h3>
    <pre>
    <br><br>
Kode Ujian           :
Nama Mata Pelajaran  :
Kelas                : </pre>";
echo "<div style='width:100%; border: 1px solid #EBEBEB; overflow:scroll;height:700px;'>";
 echo '<table width="100%" border="0">';

        $hasil=mysqli_query($konek, "select * from tbl_soal WHERE  jurusan='IPA' && aktif='Y' ORDER BY RAND ()");
        $jumlah=mysqli_num_rows($hasil);
        $urut=0;
        while($row =mysqli_fetch_array($hasil))
        {
            $id=$row["id_soal"];
            $pertanyaan=$row["soal"];
            $pilihan_a=$row["a"];
            $pilihan_b=$row["b"];
            $pilihan_c=$row["c"];
            $pilihan_d=$row["d"];

            ?>
<form name="form1" method="post"  action="<?php echo base_url().'index.php/welcome/aksi_tambah_jawabann'; ?>" >
            <input type="hidden" name="id[]" value=<?php echo $id; ?>>
            <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
            <tr>
                  <td width="17"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
                  <td width="430"><font color="#000000"><?php echo "$pertanyaan"; ?></font></td>
            </tr>
            <?php
                if (!empty($row["gambar"])) {
                    echo "<tr><td></td><td><img src='foto/$row[gambar]' width='200' hight='200'></td></tr>";
                }
            ?>
            <tr>
                  <td height="21"><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
               A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A" required="">
                <?php echo "$pilihan_a";?></font> </td>
            </tr>
            <tr>
                  <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
               B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B" required="">
                <?php echo "$pilihan_b";?></font> </td>
            </tr>
            <tr>
                  <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
              C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C" required="">
                <?php echo "$pilihan_c";?></font> </td>
            </tr>
            <tr>
                <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
              D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D" required="">
                <?php echo "$pilihan_d";?></font> </td>
            </tr>

        <?php
        }
        ?>


            <tr>
                <td>&nbsp;</td>
                  <td><input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">
                  </td>
            </tr>
            </table>
</form>
</form>
        </p>
</div>
