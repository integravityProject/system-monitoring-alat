<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel='shortcut icon' type='image/x-icon' href='../favicon.ico' />

    <title>Template :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style</title>
    <link href="../css/metro.css" rel="stylesheet">
    <link href="../css/metro-icons.css" rel="stylesheet">
    <link href="../css/metro-responsive.css" rel="stylesheet">

    <script src="../js/jquery-2.1.3.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/select2.min.js"></script>
    <script src="../js/metro.js"></script>

    <style>
        html, body {
            height: 100%;
        }
        body {
        }
        .page-content {
            padding-top: 3.125rem;
            min-height: 100%;
            height: 100%;
            max-width: 100%;
        }
        .table .input-control.checkbox {
            line-height: 1;
            min-height: 0;
            height: auto;
        }

        @media screen and (max-width: 800px){
            #cell-sidebar {
                flex-basis: 52px;
            }
            #cell-content {
                flex-basis: calc(100% - 52px);
            }
        }
    </style>

    <script>
        function pushMessage(t){
            var mes = 'Info|Implement independently';
            $.Notify({
                caption: mes.split("|")[0],
                content: mes.split("|")[1],
                type: t
            });
        }

        $(function(){
            $('.sidebar').on('click', 'li', function(){
                if (!$(this).hasClass('active')) {
                    $('.sidebar li').removeClass('active');
                    $(this).addClass('active');
                }
            })
        })
    $(document).ready(function() {
    $('#test').dataTable({
        "sScrollX": "100%",
        "sScrollXInner": "150%",
        "bScrollCollapse": true
    } );
} );
    </script>
</head>
<body class="bg-white">
    <div class="app-bar fixed-top darcula" data-role="appbar">
        <a class="app-bar-element branding">ERP System</a>
        <span class="app-bar-divider"></span>
        <ul class="app-bar-menu">
            <li>
                <a href="" class="dropdown-toggle">File</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="#">Backup Data</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Exit</a></li>
                </ul>
            </li>
            <li>
                <a href="" class="dropdown-toggle">Master Data</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="#">Suplier</a></li>
                    <li><a href="#">Mebel International</a></li>
                    <li><a href="#">Bahan-bahan</a></li>
                    <li><a href="#">Biaya</a></li>
                    <li><a href="#">Bank</a></li>
                    <li><a href="#">Buyer</a></li>
                    <li><a href="#">Karyawan</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Lokasi Penyimpanan</a></li>
                </ul>
            </li>
            <li>
                <a href="" class="dropdown-toggle">Transaksi</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="#">Pembelian</a></li>
                    <li><a href="#">Penjualan</a></li>
                    <li><a href="#">PO Buyer</a></li>
                    <li><a href="#">Penerimaan Barang</a></li>
                    <li><a href="#">Koreksi Stok</a></li>
                    <li><a href="#">Retur Pembelian</a></li>
                    <li><a href="#">Barang Pengganti Retur</a></li>
                    <li><a href="#">Perintah Kerja PPIC</a></li>
                    <li><a href="#">Barang Hasil Proses</a></li>
                   <li class="divider"></li>
                    <li><a href="#">Budgeting   </a></li>
                </ul>
            </li>
            <li>
                <a href="" class="dropdown-toggle">Akutansi</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="#">Aset</a></li>
                    <li><a href="#">Biaya</a></li>
                    <li><a href="#">Hutang Pembelian</a></li>
                    <li><a href="#">Piutang Penjualan</a></li>
                    <li><a href="#">Piutang Karyawan</a></li>
                    <li><a href="#">Buku Besar</a></li>
                    <li><a href="#">Neraca Adjusment</a></li>
                    <li><a href="#">Neraca Saldo</a></li>
                    <li><a href="#">Neraca Lajur</a></li>
                    <li><a href="#">Neraca</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Laporan Pajak</a></li>
                </ul>   
            </li>
            <li>
                <a href="" class="dropdown-toggle">Laporan</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="#">Pembelian</a></li>
                    <li><a href="#">Penjualan</a></li>
                    <li><a href="#">Hutang Pembelian</a></li>
                    <li><a href="#">Piutang Pembelian</a></li>
                    <li><a href="#">Piutang Penjualan</a></li>
                    <li><a href="#">Piutang Karyawan</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Produksi</a></li>
                </ul>   
            </li>
            <li><a href="">Logout</a></li>
        </ul>

        <div class="app-bar-element place-right">
            <span class="dropdown-toggle"><span class="mif-cog"></span> User Name</span>
            <div class="app-bar-drop-container padding10 place-right no-margin-top block-shadow fg-dark" data-role="dropdown" data-no-close="true" style="width: 220px">
                <h2 class="text-light">Quick settings</h2>
                <ul class="unstyled-list fg-dark">
                    <li><a href="" class="fg-white1 fg-hover-yellow">Profile</a></li>
                    <li><a href="" class="fg-white2 fg-hover-yellow">Security</a></li>
                    <li><a href="" class="fg-white3 fg-hover-yellow">Exit</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container page-content bg-white">
        <ul class="breadcrumbs">
                    <li><a href="#"><span class="icon mif-home"></span></a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Mebel International</a></li>
                </ul>
        <div class="grid no-responsive-future" style="height:100%;">
                <div class="row cells3">
                    <div class="cell padding20 " style="border:2px solid">
                    <form method="post">
                        <div class="row cells3">
                            <div class="cell">
                                    <label>Kode Mebel</label>
                            </div>
                            <div class="cell colspan2 input-control text">
                                <input type="text" name="fnama" required>
                            </div>    
                        </div>
                        <div class="row cells3">
                            <div class="cell">
                                    <label>Nama Mebel</label>
                            </div>
                            <div class="cell colspan2 input-control text">
                                <input type="text" name="fnama" required>
                            </div>    
                        </div>
                        <div class="row cells3">
                            <div class="cell">
                                    <label>Harga Jual Sat</label>
                            </div>
                            <div class="cell colspan2 input-control text">
                                <input type="text" name="fnama" required>
                            </div>    
                        </div>
                        <div class="row cells3">
                            <div class="cell">
                                    <label>Berat Kotor</label>
                            </div>
                            <div class="cell colspan2 input-control text">
                                <input type="text" name="fnama" required>
                            </div>    
                        </div>
                        <div class="row cells3">
                            <div class="cell">
                                    <label>Berat Bersih</label>
                            </div>
                            <div class="cell colspan2 input-control text">
                                <input type="text" name="fnama" required>
                            </div>    
                        </div>
                        <div class="row cells3">
                            <div class="cell">
                                    <label>Jumlah</label>
                            </div>
                            <div class="cell colspan2 input-control text">
                                <input type="text" name="fnama" required>
                            </div>    
                        </div>
                        <div class="row cells3">
                            <div class="cell">
                            <label>Satuan</label>
                        </div>
                            <div class="cell colspan2 input-control" data-role="select" data-placeholder="Pilih Satuan" data-allow-clear="true">
                                <select >
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>    
                        </div>
                        <div class="row cells3">
                            <div class="cell">
                            <label>Gambar</label>
                        </div>
                            <div class="cell colspan2 input-control file" data-role="input">
                                <input type="file">
                                <button class="button small-button"><span class="mif-file-image"></span></button>
                            </div>
                        </div>
                        <div class="row">
                            <fieldset>
                                <legend>Komposisi:</legend>
                                    <div class="row cells3">
                                    <div class="cell align-right" style="width:23%;left:0px;">
                                        <label class="minor-header" > Bahan Mentahan</label>
                                    </div>
                                    <div class="cell input-control" data-role="select" data-placeholder="Pilih Bahan" data-allow-clear="true" style="width:40%;left:0px;">
                                        <select >
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>  
                                    <div class="cell input-control" data-role="input" >
                                        <input type="text" placeholder="Qty" required style="width:60px;left:0px;">
                                        <button class="button small-button cycle-button primary align-center"><span class="mif-plus"></span></button>
                                    </div>
                                </div>
                                <div class="row cells3">
                                    <div class="cell align-right" style="width:23%;left:0px;">
                                        <label class="minor-header" > Bahan Aksesoris</label>
                                    </div>
                                   <div class="cell input-control" data-role="select" data-placeholder="Pilih Bahan" data-allow-clear="true" style="width:40%;left:0px;">
                                        <select >
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>  
                                    <div class="cell input-control" data-role="input" >
                                        <input type="text" placeholder="Qty" required style="width:60px;left:0px;">
                                        <button class="button small-button cycle-button primary align-center"><span class="mif-plus"></span></button>
                                    </div>
                                </div>
                                <div class="row cells3">
                                    <div class="cell align-right" style="width:23%;left:0px;">
                                        <label class="minor-header" > Bahan Pembantu</label>
                                    </div>
                                   <div class="cell input-control" data-role="select" data-placeholder="Pilih Bahan" data-allow-clear="true" style="width:40%;left:0px;">
                                        <select >
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>  
                                    <div class="cell input-control" data-role="input" >
                                        <input type="text" placeholder="Qty" required style="width:60px;left:0px;">
                                        <button class="button small-button cycle-button primary align-center"><span class="mif-plus"></span></button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                         <div class="row cells3">
                            <div class="cell"></div>
                            <div class="cell">
                                <button class="button success">Simpan</button>
                            </div>
                            <div class="cell ">
                                <button class="button danger">Reset</button>
                            </div>    
                        </div>
                    </form>
                    </div>
                    <div class="cell colspan2 padding20">
                        <table id="test" class="dataTable border bordered" data-role="datatable" data-auto-width="true">
                        <thead>
                        <tr>
                            
                            <td class="sortable-column sort-asc">Kode</td>
                            <td class="sortable-column ">Nama Mebel</td>
                            <td class="sortable-column">Harga Jual Sat</td>
                            <td class="sortable-column" >Berat Kotor</td>
                            <td class="sortable-column" >Berat Bersih</td>
                            <td class="sortable-column" >Jumlah</td>
                            <td class="sortable-column" >Satuan</td>
                            <td class="sortable-column" >Keterangan</td>
                            <td class="sortable-column" >Gambar</td>
                            <td >Aksi</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>12389</td>
                            <td>Machine number 1</td>
                            <td>123890723212</td>
                            <td>Machine number 1</td>
                            <td>123890723212</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>12389</td>
                            <td>Machine number 1</td>
                            <td>123890723212</td>
                            <td>Machine number 1</td>
                            <td>123890723212</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>12389</td>
                            <td>Machine number 1</td>
                            <td>123890723212</td>
                            <td>Machine number 1</td>
                            <td>123890723212</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>12389</td>
                            <td>Machine number 1</td>
                            <td>123890723212</td>
                            <td>Machine number 1</td>
                            <td>123890723212</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>12389</td>
                            <td>Machine number 1</td>
                            <td>123890723212</td>
                            <td>Machine number 1</td>
                            <td>123890723212</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>12389</td>
                            <td>Machine number 1</td>
                            <td>123890723212</td>
                            <td>Machine number 1</td>
                            <td>123890723212</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>12389</td>
                            <td>Machine number 1</td>
                            <td>123890723212</td>
                            <td>Machine number 1</td>
                            <td>123890723212</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>Machine number 1</td>
                            <td>
                                
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>