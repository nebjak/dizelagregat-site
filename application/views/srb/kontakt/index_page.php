<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Kontakt :: Dizel agregati :: Energoglobal doo - Novi Sad - Srbija</title>
        <link rel="stylesheet" href="<?= base_url() ?>css/reset.css" />
        <link rel="stylesheet" href="<?= base_url() ?>css/text.css" />
        <link rel="stylesheet" href="<?= base_url() ?>css/960.css" />
        <link rel="stylesheet" href="<?= base_url() ?>css/main.css" />
        <link rel="stylesheet" href="<?= base_url() ?>css/jquery.simplyscroll-1.0.4.css" />
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.simplyscroll-1.0.4.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#box3').cycle({
                    fx:     'scrollLeft', 
                    timeout: 5000
                });
                $("#news_scroller").simplyScroll({
                    autoMode: 'loop',
                    horizontal: false
                });
            });
        </script>
    </head>
    <body>
        <div class="container_12">
            <div class="grid_4" id="box0">
                <img src="<?= base_url() ?>images/logo.png" alt="Dizel agregari - Energoglobal doo" />
            </div>
            <div class="grid_8" id="box1">
                <ul>
                    <li><a href="<?= base_url() ?>srb/pocetna">Početna</a></li>
                    <li><a href="<?= base_url() ?>srb/o_nama">O nama</a></li>
                    <li><a href="<?= base_url() ?>srb/proizvodi_i_usluge">Proizvodi i usluge</a></li>
                    <li><a href="<?= base_url() ?>srb/rental">Rental</a></li>
                    <li><a href="<?= base_url() ?>srb/servis">Servis</a></li>
                    <li><a href="<?= base_url() ?>srb/podrska">Podrška</a></li>
                    <li><a href="<?= base_url() ?>srb/reference">Reference</a></li>
                    <li class="current_page_item"><a href="<?= base_url() ?>srb/kontakt">Kontakt</a></li>
                </ul>
            </div>
            <div class="grid_12" id="box2">
                <form>
                    <table>
                        <tr>
                            <td style="width: 15%;">
                                <a href="#" id="current_page_language">SR</a>
                                <a href="#">EN</a>
                            </td>
                            <td style="width: 85%; text-align: right;">                        
                                <label for="username">Korisnicko ime:</label>
                                <input id="username" name="username" type="text" placeholder="username" />                        
                                <label for="password">Lozinka:</label>
                                <input id="password" name="password" type="password" placeholder="password" />                        
                                <input type="submit" value="Prijavite se"/>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="clear"></div>
            <div class="grid_12" id="box3">
                <a href="srb/proizvodi_i_usluge">
                    <img src="<?= base_url() ?>images/prodaja.jpg" alt="Prodaja"/>
                </a>
                <a href="srb/servis">
                    <img src="<?= base_url() ?>images/servis.jpg" alt="Servis"/>
                </a>
                <a href="srb/rental">
                    <img src="<?= base_url() ?>images/iznajmljivanje.jpg" alt="Iznajmljivanje" />
                </a>
            </div>
        </div>
        <div id="box4">
            <div class="container_12" id="box5">
                <div class="grid_9" id="box6">
                    <div id="sub_menu">
                        Iznajmljivanje | Prodaja | Servis
                    </div>                    
                    <h1>Kontakt</h1>
                    <p>
                        <strong>ENERGOGLOBAL DOO</strong><br/>
                        Kneza Miloša 33<br/>
                        21000 Novi Sad<br/>
                        Srbija<br/>
                    </p>
                    <p>
                        +381 21 499315<br/>
                        office@energoglobal.com<br/>
                        www.energoglobal.com
                    </p>
                    <p>
                    <form action="#" method="post">
                        <table>
                            <tr>
                                <td style="width: 80px;"><label for="firma">Vaše ime:</label></td>
                                <td><input type="text" name="firma" id="firma" placeholder="Firma doo"/></td>
                            </tr>
                            <tr>
                                <td><label for="ime">Vaše ime:</label></td>
                                <td><input type="text" name="ime" id="ime" placeholder="Ime Prezime"/></td>
                            </tr>
                            <tr>
                                <td><label for="email">Vaš e-mail:</label></td>
                                <td><input type="email" name="email" id="email" placeholder="name@example.com"/></td>
                            </tr>
                            <tr>
                                <td><label for="br_tel">Vaš br. tel.:</label></td>
                                <td><input type="text" name="br_tel" id="br_tel" placeholder="+381 11 555 6677"/></td>
                            </tr>
                            <tr>
                                <td colspan="2"><label for="poruka">Poruka:</label></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <textarea name="poruka" id="poruka" rows="5" cols="40"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="all_right">
                                    <input type="reset" value="Reset" />
                                    <input type="submit" name="submit" value="Pošalji" />
                                </td>
                            </tr>
                        </table>                        
                    </form>
                    </p>
                </div>
                <div class="grid_3" id="box7">
                    <?= $this->load->view('srb/news_scroller') ?>
                </div>
            </div>
        </div>
        <div id="box8">
            <div class="container_12">
                <div class="grid_7" id="box9">                    
                    <ul>
                        <li><a href="<?= base_url() ?>srb/pocetna">Početna</a></li>
                        <li><a href="<?= base_url() ?>srb/o_nama">O nama</a></li>
                        <li><a href="<?= base_url() ?>srb/proizvodi_i_usluge">Proizvodi i usluge</a></li>
                        <li><a href="<?= base_url() ?>srb/rental">Rental</a></li>
                        <li><a href="<?= base_url() ?>srb/servis">Servis</a></li>
                        <li><a href="<?= base_url() ?>srb/podrska">Podrška</a></li>
                        <li><a href="<?= base_url() ?>srb/reference">Reference</a></li>
                        <li class="current_page_item"><a href="<?= base_url() ?>srb/kontakt">Kontakt</a></li>
                    </ul>
                </div>
                <div class="grid_5" id="box10">
                    <p>
                        &copy; Energoglobal doo | Ažurirano: <?= SITE_LAST_UPDATE ?> | Design by Baseline / code by nebjak
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>