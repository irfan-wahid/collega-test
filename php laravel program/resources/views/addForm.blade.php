<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-3">
        <p>Pembukaan Nasabah (CIF) Perorangan</p>
        <form action="/store" method="post">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>
                        <tr>
                            <td><label>No. CIF</label></td>
                            <td><input type="text" name="cifid" readonly><br></td>

                            <td><label>Tgl. Pembukaan</label></td>
                            <td><input type="date" name="dtjoin"><br></td>
                        </tr>
                        <tr>
                            <td><label>Cabang</label></td>
                            <td><select>
                                <option value="001" name="cabang">001-CABANG UTAMA</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td><label>Account Officer</label></td>
                            <td><select name="aoid" class="form-control">
                                <option value="000006">000006</option>
                                <option value="000007">000007</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td><label>Nama Lengkap</label></td>
                            <td><input type="text" name="fullnm"></td>
                        </tr>
                        <tr>
                            <td><label>Nama Singkat</label></td>
                            <td><input type="text" name="surenm"></td>
                        </tr>
                        <tr>
                            <td><label>Nama Alias</label></td>
                            <td><input type="text" name="alias"></td>
                        </tr>
                        <tr>
                            <td><label>Nama Gadis Ibu Kandung</label></td>
                            <td><input type="text" name="mothrnm"></td>
                        </tr>
                        <tr>
                            <td><label>Jenis Kelamin</label></td>
                            <td>
                                <input class="form-check-input" type="radio" name="sex" id="exampleRadios1" value="1" checked>
                                <label class="form-check-label" for="exampleRadios1">Laki-Laki</label>
                                <input class="form-check-input" type="radio" name="sex" id="exampleRadios2" value="0" checked>
                                <label class="form-check-label" for="exampleRadios1">Perempuan</label><br>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Tempat & Tanggal Lahir</label></td>
                            <td><input type="text" name="brtplace"><input type="date" name="brtdt"></td>
                        </tr>
                    </td>
                </tr>
            </table>
            <br><br>

            <p>Info Identitas</p>
            <table>
                <tr>
                    <td><label>Jenis Identitas</label></td>
                    <td><select name="ownid">
                        <option value="1">1-KTP</option>
                        <option value="2">2-SIM</option>
                    </select></td>

                    <td><label>Masa Berlaku</label></td>
                    <td><input type="date" name="expdt"><br></td>
                </tr>
                <tr>
                    <td><label>No. Identitas</label></td>
                    <td><input type="text" name="nip"></td>
                </tr>
                <tr>
                    <td><label>Alamat</label></td>
                    <td><input type="text" name="addr"></td>
                </tr>
                <tr>
                    <td><label>RT/RW</label></td>
                    <td><input type="text" name="rt"> / <input type="text" name="rw"></td>

                    <td><label>Kode POS</label></td>
                    <td><input type="text" name="postalcode"><br></td>
                </tr>
                <tr>
                    <td><label>Kelurahan</label></td>
                    <td><input type="text" name="kelnm"></td>

                    <td><label>Kecamatan</label></td>
                    <td><input type="text" name="kecnm"></td>
                </tr>
                <tr>
                    <td><label>Provinsi</label></td>
                    <td>
                        <select name="provid">
                            <option value="1">Jawa Barat</option>
                            <option value="2">Jawa Tengah</option>
                        </select>
                    </td>

                    <td><label>Kabupaten/Kota</label></td>
                    <td>
                        <select>
                            <option value="1">Bandung</option>
                            <option value="2">Jakarta</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Negara</label></td>
                    <td>
                        <select type="text" name="countryid">
                            <option value="1">Indonesia</option>
                        </select>
                    </td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td><label>No NPWP</label></td>
                    <td><input type="text" name="npwp"></td>

                    <td><label>Keterangan</label></td>
                    <td><input type="text" name="note"></td>
                </tr>
                <tr>
                    <td><label>No. HP</label></td>
                    <td><input type="text" name="nohp"></td>
                </tr>
            </table>
            <br>
            <input type="submit">
        </form>
        <br><br>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>