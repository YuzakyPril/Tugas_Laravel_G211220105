<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landingpage</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <nav id="header" class="header">
       <div class="header-isi">
            <div class="logo">    
                <p>Toko Baju</p>
            </div>
            <div class="menu">
                <p><a href="#form">Form</a></p>
                <p><a href="#produk">Produk</a></p>
                <p><a href="#layanan">Layanan</a></p>
            </div>
       </div>
    </nav>
    <div class="judul">
        <h1>TOKO BAJU</h1>
        <p>Kualitas Ekspor dan Impor</p>
    </div>
    <section id="form" class="form">
        <div>
            <form action="">
                <table>
                    <tr>
                        <th colspan="2">Cari Baju Yang Ingin Dicari</th>
                    </tr>
                    <tr>
                        <td><label for="">Nama Depan:</label></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td><label for="">Nama Belakang:</label></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td><label for="">Ukuran Baju:</label></td>
                        <td>
                            <select name="" id="">
                                <option value="">Small</option>
                                <option value="">Medium</option>
                                <option value="">Large</option>
                                <option value="">Extra Large</option>
                                <option value="">XXL</option>
                            </select>
                        </td>                        
                    </tr>
                    <tr>
                        <td><label for="">Jenis Baju:</label></td>
                        <td>
                            <select name="" id="">
                                <option value="">Varsity</option>
                                <option value="">Kaos</option>
                                <option value="">Hoodie</option>
                                <option value="">Jersey</option>
                            </select>
                        </td>
                    </tr>
                    <tr colspan="2">
                        <td><button>Submit</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
    <section id="produk" class="produk">
        <h2 class="judul_produk">Jenis Baju</h2>
        <div class="isi-produk">
            <div>
                <img src="img/kaos2.jpg" alt="">
                <p>Kaos</p>
            </div>
            <div>
                <img src="img/hoodie.jpg" alt="">
                <p>Hoodie</p>
            </div>            
        </div>
        <div class="isi-produk">
            <div>
                <img src="img/varsity.jpg" alt="">
                <p>Varsity</p>
            </div>
            <div>
                <img src="img/jersey.jpeg" alt="">
                <p>Jersey</p>
            </div>
        </div>
    </section>   
    <section id="layanan" class="layanan">
            <div class="tema">
                <img class="outfit" src="img/outfit.jpg" alt="">
            </div>
            <div class="hub">
                <div>
                    <img class="sosmed" src="img/ins.png" alt="">
                    <p>@TokoBaju</p>
                </div>
                <div>
                    <img class="sosmed" src="img/twitter.png" alt="">
                    <p>@tokobaju</p>
                </div>
                <div>
                    <img class="sosmed" src="img/telp.png" alt="">
                    <p>021-XXXX-XXXX</p>
                </div>
                <div>
                    <img class="sosmed" src="img/map.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur enim molestias temporibus? Vero, deserunt? Soluta, officiis sunt mollitia laudantium eius expedita illo non fugiat incidunt.</p>
                </div>
            </div>
    </section>
    <section id="footer" class="footer">
        <h2>Toko Baju</h2>
    	<h3 align="center">&copy; Fakultas Teknologi dan Informasi</h3>
    	<p align="center">Yuzaky Prilyansyah (G.211.22.0105)</p>
    </section>
</body>
</html>