<!DOCTYPE html>
<html><head>
    <title><?= $judul ?></title>
    <link rel="shortcut icon" href="<?= base_url('/'); ?>assets/img/logo.png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    
    <style type="text/css">
        body{
            font-family: 'Roboto', sans-serif;
        }
        .header{

        }
        .thead{
            background-color: #171717;
            font-size: 10px;
            font-weight: bold;
            color: white;
            text-align: center;
        }
        .tbody{
            font-size: 11px;
            text-align: left;
            vertical-align: middle;
            padding: 4px;
        }
        ._tbody{
            font-size: 11px;
            text-align: center;
            padding: 4px;
        }
        .title{
            font-size: 30px;
        }
        .title2{
            font-size: 10px;
        }
        .mark1{
            padding: 2px;
            color: white;
            height: 5px;
            background-color: #32a852;
        }
        .mark2{
            padding: 2px;
            color: white;
            height: 5px;
            background-color: #f20d0d;
        }
        tr, td{
            padding: 0px;
        }

        header{
            width: 100%;
        }
    </style>
</head><body>
    <header>
        <b class="title">PTIPD UIN SUNAN GUNUNG DJATI</b><br>
        <div class="title2">P U S A T &emsp; T E K N O L O G I &emsp; I N F O R M A S I &emsp; D A N &emsp; P A N G K A L A N &emsp; D A T A <br> U N I V E R S I T A S &emsp; I S L A M &emsp; N E G R I &emsp; S U N A N &emsp; G U N U N G &emsp; D J A T I</div>
    </header>
    <hr>
    <?php if ($dd) : ?>
        <center><h5>LAPORAN FORMULIR PENDAFTARAN EMAIL DOSEN <?= $m3 .' '. $y3 ?></h5></center>
        <br><br>
        <table style="width: 100%;font-size: 11px;border-collapse: collapse;">
            <tr>
                <th style="border: 1px solid black;" width="5%" class="thead" scope="col">No</th>
                <th style="border: 1px solid black;" colspan="2" width="95%" class="thead" scope="col">Isi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($dd as $row ) : ?>
            <tr>
                <th style="border: 1px solid black;" width="5%" class="_tbody" scope="row"> <?= $i; ?> </th>
                <td style="border: 1px solid black;" width="47.5%">
                    <table width="100%">
                        <tr>
                            <td class="tbody" width="5%">Nama</td>
                            <td class="tbody" width="95%">: <?= $row->nama ?></td>
                        </tr>
                        <tr>
                            <td class="tbody" width="5%">NIP</td>
                            <td class="tbody" width="95%">: <?= $row->nip ?></td>
                        </tr>
                        <tr>
                            <td class="tbody" width="5%">Fakultas</td>
                            <td class="tbody" width="95%">: <?= $row->fakultas ?></td>
                        </tr>
                        <tr>
                            <td class="tbody" width="5%">Telepon</td>
                            <td class="tbody" width="95%">: <?= $row->telp ?></td>
                        </tr>
                        <tr>
                            <td class="tbody" width="5%">Email Diajukan</td>
                            <td class="tbody" width="95%">: <?= $row->email1 ?></td>
                        </tr>
                    </table>
                </td>
                <td style="border: 1px solid black;" width="47.5%">
                    <table width="100%">
                        <tr>
                            <td class="tbody" width="5%">Email Sebelumnya</td>
                            <td class="tbody" width="95%">: <?= $row->email2 ?></td>
                        </tr>
                        <tr>
                            <td class="tbody" width="5%">Tanggal</td>
                            <td class="tbody" width="95%">: <?= $row->tanggal ?></td>
                        </tr>
                        <tr>
                            <td class="tbody" width="5%">Jam</td>
                            <td class="tbody" width="95%">: <?= $row->jam ?></td>
                        </tr>
                        <tr>
                            <td class="tbody" width="5%">Edit</td>
                            <td class="tbody" width="95%">: <?= $row->edit ?></td>
                        </tr>
                        <tr>
                            <td class="tbody" width="5%">Status</td>
                            <td class="tbody" width="95%">
                                : <?php
                                    if ($row->status == "Belum Dikerjakan"){
                                        echo "<mark class='mark2'>Belum Dikerjakan</mark>";
                                    }else{
                                        echo "<mark class='mark1'>Sudah Dikerjakan</mark>";
                                    }
                                ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <br><br><br><br><br><br><center><h4>TIDAK ADA FORMULIR PENDAFTARAN EMAIL DOSEN <br> PADA <?= $m3 .' '. $y3 ?></h4></center>
    <?php endif ; ?>

</body></html>     