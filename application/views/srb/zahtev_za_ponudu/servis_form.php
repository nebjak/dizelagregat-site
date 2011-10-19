<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Zahtev za ponudu - Servis :: Dizel agregati :: Energoglobal doo - Novi Sad - Srbija</title>
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
                $("#session_message").click(function() {
                    $(this).fadeOut(1000);
                });                
            });
        </script>
    </head>
    <body>
        <?if(strlen($this->session->flashdata('message'))>0):?>
        <div id="session_message">
            <?= $this->session->flashdata('message') ?>
        </div>
        <?endif;?>
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
                    <li><a href="<?= base_url() ?>srb/kontakt">Kontakt</a></li>
                </ul>
            </div>
            <div class="grid_12" id="box2">
                <form>
                    <table>
                        <tr>
                            <td style="width: 15%;">
                                <a href="#" id="current_page_language">SR</a>
                                <a href="<?= base_url() ?>eng/products">EN</a>
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
                <?= $this->load->view('srb/cycle_banner') ?>
            </div>
        </div>
        <div id="box4">
            <div class="container_12" id="box5">
                <div class="grid_9" id="box6">
                    <div id="sub_menu">
                        Iznajmljivanje | Prodaja | Servis
                    </div>                    
                    <h1>Zahtev za ponudu - servis</h1>                    
                    <p>
                    <?=form_open('srb/zahtev_za_ponudu/servis')?>
                    <table>
                        <tr>
                            <td><label for="proizvodjac">Proizvođač agregata:</label></td>
                            <td><?=form_input('proizvodjac', set_value('proizvodjac'), 'id="proizvodjac" placeholder="Energoglobal"')?> *</td>
                            <td><?=form_error('proizvodjac', '<span style="color:yellow;">','</span>')?></td>
                        </tr>
                        <tr>
                            <td><label for="tip">Tip agregata:</label></td>
                            <td><?=form_input('tip', set_value('tip'), 'id="tip" placeholder="PR.100.KA"')?> *</td>
                            <td><?=form_error('tip', '<span style="color:yellow;">','</span>')?></td>
                        </tr>
                        <tr>
                            <td><label for="snaga">Snaga agregata:</label></td>
                            <td><?=form_input('snaga', set_value('snaga'), 'id="snaga" placeholder="100 kVA"')?> *</td>
                            <td><?=form_error('snaga', '<span style="color:yellow;">','</span>')?></td>
                        </tr>
                        <tr>
                            <td><label for="u_kvaru">Agregat u kvaru:</label></td>
                            <td>
                                <?=form_radio('u_kvaru', 'da', (set_value("u_kvaru") == "da"), 'id="u_kvaru_da"')?>
                                <label for="u_kvaru_da">Da</label>
                                <?=form_radio('u_kvaru', 'ne', (set_value("u_kvaru") == "ne"), 'id="u_kvaru_ne"')?>
                                <label for="u_kvaru_ne">Ne</label>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Agregat pod garancijom:</td>
                            <td>
                                <?=form_radio('garancija', 'da', (set_value("garancija") == "da"), 'id="garancija_da"')?>
                                <label for="garancija_da">Da</label>
                                <?=form_radio('garancija', 'ne', (set_value("garancija") == "ne"), 'id="garancija_ne"')?>
                                <label for="garancija_ne">Ne</label>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="dodatni_zahtevi">Dodatni zahtevi:</label></td>
                            <td><textarea name="dodatni_zahtevi" id="dodatni_zahtevi" rows="5" cols="40"><?=set_value('dodatni_zahtevi')?></textarea></td>
                            <td></td>
                        <tr>
                            <td colspan="3"><hr/></td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Vaši podaci:</strong></td>
                        </tr>
                        <tr>
                            <td><label for="firma">Naziv firme:</label></td>
                            <td><?=form_input('firma', set_value('firma'), 'id="firma" placeholder="Company doo"')?> *</td>
                            <td><?=form_error('firma', '<span style="color:yellow;">','</span>')?></td>
                        </tr>
                        <tr>
                            <td><label for="k_osoba">Kontakt osoba:</label></td>
                            <td><?=form_input('k_osoba', set_value('k_osoba'), 'id="k_osoba" placeholder="Marko Marković"')?> *</td>
                            <td><?=form_error('k_osoba', '<span style="color:yellow;">','</span>')?></td>
                        </tr>
                        <tr>
                            <td><label for="pib">PIB:</label></td>
                            <td><?=form_input('pib', set_value('pib'), 'id="pib" placeholder="106644707"')?></td>
                            <td><?=form_error('pib', '<span style="color:yellow;">','</span>')?></td>
                        </tr>
                        <tr>
                            <td><label for="adresa">Adresa:</label></td>
                            <td><?= form_input('adresa', set_value('adresa'), 'id="adresa" placeholder="Mihaila Pupina 10"') ?></td>
                            <td><?=form_error('adresa', '<span style="color:yellow;">','</span>')?></td>
                        </tr>
                        <tr>
                            <td><label for="grad">Grad:</label></td>
                            <td><?=form_input('grad', set_value('grad'), 'id="grad" placeholder="21000 Novi Sad"')?></td>
                            <td><?=form_error('grad', '<span style="color:yellow;">','</span>')?></td>
                        </tr>
                        <tr>
                            <td><label for="telefon">Telefon:</label></td>
                            <td><?=form_input('telefon', set_value('telefon'), 'id="telefon" placeholder="+381 21 5554444"')?> *</td>
                            <td><?=form_error('telefon', '<span style="color:yellow;">','</span>')?></td>
                        </tr>
                        <tr>
                            <td><label for="mobilni_telefon">Mobilni telefon:</label></td>
                            <td><?=form_input('mobilni_telefon', set_value('mobilni_telefon'), 'id="mobilni_telefon" placeholder="+381 65 5553333"')?></td>
                            <td><?=form_error('mobilni_telefon', '<span style="color:yellow;">','</span>')?></td>
                        </tr>
                        <tr>
                            <td><label for="email">E-mail:</label></td>
                            <td><?=form_input('email', set_value('email'), 'id="email" placeholder="name@example.com"')?></td>
                            <td><?=form_error('email', '<span style="color:yellow;">','</span>')?></td>
                        </tr>
                        <tr>
                            <td><label for="web_site">Web sajt:</label></td>
                            <td><?=form_input('web_site', set_value('web_site'), 'id="web_site" placeholder="www.example.com"')?></td>
                            <td></td>
                        </tr>                        
                        <tr>
                            <td>
                                <span style="font-size: xx-small;">* - obavezna polja</span>
                            </td>
                            <td style="text-align: right;">
                                <?=form_submit('submit', 'Pošalji')?>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
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
                        <li><a href="<?= base_url() ?>srb/kontakt">Kontakt</a></li>
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