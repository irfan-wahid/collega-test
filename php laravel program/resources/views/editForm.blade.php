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

        @foreach($data as $d)
        <form action="/edit" method="post">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>
                        <tr>
                            <td><label>No. CIF</label></td>
                            <td><input type="text" name="cifid" value="{{$d->cifid}}" readonly><br></td>

                            <td><label>Tgl. Pembukaan</label></td>
                            <td><input type="date" name="dtjoin" value="{{$d->dtjoin}}"><br></td>
                        </tr>
                        <tr>
                            <td><label>Cabang</label></td>
                            <td><select>
                                <option value="001" name="cabang">001-CABANG UTAMA</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td><label>Account Officer</label></td>
                            <td><select name="aoid" value="{{$d->aoid}}" class="form-control">
                                <option value="000006">000006</option>
                                <option value="000007">000007</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td><label>Nama Lengkap</label></td>
                            <td><input type="text" name="fullnm" value="{{$d->fullnm}}"></td>
                        </tr>
                        <tr>
                            <td><label>Nama Singkat</label></td>
                            <td><input type="text" name="surenm" value="{{$d->surenm}}"></td>
                        </tr>
                        <tr>
                            <td><label>Nama Alias</label></td>
                            <td><input type="text" name="alias" value="{{$d->alias}}"></td>
                        </tr>
                        <tr>
                            <td><label>Nama Gadis Ibu Kandung</label></td>
                            <td><input type="text" name="mothrnm" value="{{$d->mothrnm}}"></td>
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
                            <td><input type="text" name="brtplace" value="{{$d->brtplace}}"><input type="date" name="brtdt" value="{{$d->brtdt}}"></td>
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
                    <td><input type="date" name="expdt" value="{{$d->expdt}}"><br></td>
                </tr>
                <tr>
                    <td><label>No. Identitas</label></td>
                    <td><input type="text" name="nip" value="{{$d->nip}}"></td>
                </tr>
                <tr>
                    <td><label>Alamat</label></td>
                    <td><input type="text" name="addr" value="{{$d->addr}}"></td>
                </tr>
                <tr>
                    <td><label>RT/RW</label></td>
                    <td><input type="text" name="rt" value="{{$d->rt}}"> / <input type="text" name="rw" value="{{$d->rw}}"></td>

                    <td><label>Kode POS</label></td>
                    <td><input type="text" name="postalcode" value="{{$d->postalcode}}"><br></td>
                </tr>
                <tr>
                    <td><label>Kelurahan</label></td>
                    <td><input type="text" name="kelnm" value="{{$d->kelnm}}"></td>

                    <td><label>Kecamatan</label></td>
                    <td><input type="text" name="kecnm" value="{{$d->kecnm}}"></td>
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
                        <select type="text" name="countryid" value="{{$d->countryid}}">
                            <option value="1">Indonesia</option>
                        </select>
                    </td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td><label>No NPWP</label></td>
                    <td><input type="text" name="npwp" value="{{$d->npwp}}"></td>

                    <td><label>Keterangan</label></td>
                    <td><input type="text" name="note" value="{{$d->note}}"></td>
                </tr>
                <tr>
                    <td><label>No. HP</label></td>
                    <td><input type="text" name="nohp" value="{{$d->nohp}}"></td>
                </tr>
            </table>
            <br>
            <input type="submit">
        </form>
        @endforeach
        <br><br>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>