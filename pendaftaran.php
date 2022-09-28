<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center>
<body>
    <h3> Pendaftaran siswa smkn 1 sayung 
        SMKN 1 SAYUNG</h3>
       <form action="proses_daftar.php" method="post">
       <table border=0>
       <tr>
    <td>Nama lengkap : </td>
    <td><input type="text" name="nama"/></td>
    </tr>
    <tr> 
    <td>Tempat lahir : </td>
    <td><input type="text" name="tempat"/></td>
    </tr>
    <tr>
    <td>Tanggal lahir : </td>
    <td><input type="date" name="tanggal"/></td>
    </tr>
    <tr>
    <td>Jenis kelamin : </td>
    <td><input type="radio" name="sex" value="pria"/>pria </td>
    <td><input type="radio" name="sex" value="wanita"/>wanita </td>
    </tr>
    <tr>
    <td>Alamat : </td>
    <td><input type="text-area" name="alamat" /> </td>
    </tr>
    <tr>
    <td>Agama : </td>
    <td><select nama="religion">
    <option value="islam">islam
    <option value="kristen">kristen
    <option value="budha">budha
    <option value="hindu">hindu
    <option value="katolik">katolik
    </select> </td>
    </tr>
    <tr>
    <td><input type="reset" value="ulangi"/></td>
    <td><input type="submit" value="submit" /></td>
    </tr>
    </form>
</form>
</body>
</html>