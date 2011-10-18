<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Zahtev za ponudu - Prodaja :: Dizel agregati :: Energoglobal doo - Novi Sad - Srbija</title>
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
                    <li class="current_page_item"><a href="<?= base_url() ?>srb/proizvodi_i_usluge">Proizvodi i usluge</a></li>
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
                    <h1>Zahtev za ponudu prodaja</h1>                    
                    <p>
                    <?=form_open('srb/zahtev_za_ponudu/prodaja')?>
                    <table>
                        <tr>
                            <td><?=form_label('Vrsta tražene opreme:', 'trazena_oprema')?></td>
                            <td>
                                <?=
                                form_dropdown(
                                        'trazena_oprema', array(
                                        'Dizel agregat' => 'Dizel agregat',
                                        'Gasni agregat' => 'Gasni agregat',
                                        'Benzinski agregat' => 'Benzinski agregat'
                                        ), set_value('trazena_oprema'), 'id="trazena_oprema"')
                                ?>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="snaga">Potrebna snaga (kVA/kW):</label></td>
                            <td>
                                <select name="snaga" id="snaga">
                                    <option value="0 / 0">
                                        0 / 0
                                    </option>
                                    <option value="3 / 3">
                                        3 / 3
                                    </option>
                                    <option value="4.2 / 3.2">
                                        4.2 / 3.2
                                    </option>
                                    <option value="7 / 5.6">
                                        7 / 5.6
                                    </option>
                                    <option value="10 / 8">
                                        10 / 8
                                    </option>
                                    <option value="13 / 10">
                                        13 / 10
                                    </option>
                                    <option value="15 / 12">
                                        15 / 12
                                    </option>
                                    <option value="22 / 17">
                                        22 / 17
                                    </option>
                                    <option value="33 / 26">
                                        33 / 26
                                    </option>
                                    <option value="44 / 35">
                                        44 / 35
                                    </option>
                                    <option value="50 / 40">
                                        50 / 40
                                    </option>
                                    <option value="55 / 44">
                                        55 / 44
                                    </option>
                                    <option value="66 / 52">
                                        66 / 52
                                    </option>
                                    <option value="66 / 53">
                                        66 / 53
                                    </option>
                                    <option value="70 / 56">
                                        70 / 56
                                    </option>
                                    <option value="82 / 66">
                                        82 / 66
                                    </option>
                                    <option value="88 / 70">
                                        88 / 70
                                    </option>
                                    <option value="94 / 75">
                                        94 / 75
                                    </option>
                                    <option value="110 / 88">
                                        110 / 88
                                    </option>
                                    <option value="138 / 110">
                                        138 / 110
                                    </option>
                                    <option value="142 / 114">
                                        142 / 114
                                    </option>
                                    <option value="143 / 114">
                                        143 / 114
                                    </option>
                                    <option value="150 / 120">
                                        150 / 120
                                    </option>
                                    <option value="165 / 132">
                                        165 / 132
                                    </option>
                                    <option value="167 / 134">
                                        167 / 134
                                    </option>
                                    <option value="176 / 141">
                                        176 / 141
                                    </option>
                                    <option value="200 / 160">
                                        200 / 160
                                    </option>
                                    <option value="205 / 164">
                                        205 / 164
                                    </option>
                                    <option value="220 / 176">
                                        220 / 176
                                    </option>
                                    <option value="225 / 180">
                                        225 / 180
                                    </option>
                                    <option value="230 / 184">
                                        230 / 184
                                    </option>
                                    <option value="250 / 200">
                                        250 / 200
                                    </option>
                                    <option value="275 / 220">
                                        275 / 220
                                    </option>
                                    <option value="300 / 240">
                                        300 / 240
                                    </option>
                                    <option value="305 / 244">
                                        305 / 244
                                    </option>
                                    <option value="330 / 264">
                                        330 / 264
                                    </option>
                                    <option value="335 / 268">
                                        335 / 268
                                    </option>
                                    <option value="350 / 280">
                                        350 / 280
                                    </option>
                                    <option value="360 / 288">
                                        360 / 288
                                    </option>
                                    <option value="385 / 308">
                                        385 / 308
                                    </option>
                                    <option value="400 / 320">
                                        400 / 320
                                    </option>
                                    <option value="410 / 328">
                                        410 / 328
                                    </option>
                                    <option value="440 / 352">
                                        440 / 352
                                    </option>
                                    <option value="450 / 360">
                                        450 / 360
                                    </option>
                                    <option value="500 / 400">
                                        500 / 400
                                    </option>
                                    <option value="506 / 405">
                                        506 / 405
                                    </option>
                                    <option value="550 / 440">
                                        550 / 440
                                    </option>
                                    <option value="556 / 445">
                                        556 / 445
                                    </option>
                                    <option value="560 / 448">
                                        560 / 448
                                    </option>
                                    <option value="630 / 500">
                                        630 / 500
                                    </option>
                                    <option value="630 / 504">
                                        630 / 504
                                    </option>
                                    <option value="700 / 560">
                                        700 / 560
                                    </option>
                                    <option value="800 / 640">
                                        800 / 640
                                    </option>
                                    <option value="880 / 700">
                                        880 / 700
                                    </option>
                                    <option value="880 / 704">
                                        880 / 704
                                    </option>
                                    <option value="935 / 748">
                                        935 / 748
                                    </option>
                                    <option value="996 / 796">
                                        996 / 796
                                    </option>
                                    <option value="1000 / 800">
                                        1000 / 800
                                    </option>
                                    <option value="1100 / 880">
                                        1100 / 880
                                    </option>
                                    <option value="1125 / 900">
                                        1125 / 900
                                    </option>
                                    <option value="1250 / 1000">
                                        1250 / 1000
                                    </option>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><?=form_label('Režim rada:', 'rezim_rada')?></td>
                            <td>
                                <?=
                                form_dropdown(
                                        'rezim_rada', array(
                                        'Stand by' => 'Stand by',
                                        'Prime' => 'Prime'
                                        ), set_value('rezim_rada'), 'id="rezim_rada"')
                                ?>
                            </td>
                            <td></td>
                        </tr>                        
                        <tr>
                            <td><?=form_label('Konstrukcija', 'konstrukcija')?></td>
                            <td>
                                <?=
                                form_dropdown(
                                        'konstrukcija', array(
                                        'Otvoreni set' => 'Otvoreni set',
                                        'Kontejnerski set' => 'Kontejnerski set'
                                        ), set_value('konstrukcija'), 'id="konstrukcija"')
                                ?>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><?=form_label('Startovanje:', 'start')?></td>
                            <td>
                                <?=
                                form_dropdown(
                                        'start', array(
                                        'Rucni start' => 'Ručni start',
                                        'Automatski start' => 'Automatski start'
                                        ), set_value('start'), 'id="start"')
                                ?>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Dodatna oprema:</td>
                            <td>
                                <?= form_checkbox('glavni_prekidac', 'da', set_checkbox('glavni_prekidac', 'da')) ?> Glavni prekidač<br/>
                                <?= form_checkbox('punjac_akumulatora', 'da', set_checkbox('punjac_akumulatora', 'da')) ?> Punjač akumulatora<br/>
                                <?= form_checkbox('grejac_motora', 'da', set_checkbox('grejac_motora', 'da')) ?> Grejač bloka motora za start po hladnom vremenu<br/>
                                <?= form_checkbox('daljinska_kontrola', 'da', set_checkbox('daljinska_kontrola', 'da')) ?> Daljinska kontrola i monitoring generator seta<br/>
                                <?= form_checkbox('extra_rezervoar', 'da', set_checkbox('extra_rezervoar', 'da')) ?> Rezevoar ekstra kapaciteta<br/>
                                <?= form_checkbox('automatsko_pretakanje', 'da', set_checkbox('automatsko_pretakanje', 'da')) ?> Sistem za automatsko pretakanje goriva iz dodatnog rezervoara<br/>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="lokacija">Lokacija ugradnje:</label></td>
                            <td><?= form_input('lokacija', set_value('lokacija'), 'id="lokacija" placeholder="Beograd"') ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="vreme_isporuke">Potrebno vreme isporuke:</label></td>
                            <td><?= form_input('vreme_isporuke', set_value('vreme_isporuke'), 'id="vreme_isporuke" placeholder="30 dana"') ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for="dodatni_zahtevi">Dodatni zahtevi:</label></td>
                            <td><textarea name="dodatni_zahtevi" id="dodatni_zahtevi" rows="5" cols="40"><?=set_value('dodatni_zahtevi')?></textarea></td>
                            <td></td>
                        </tr>
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
                            <td><label for="telefon2">Telefon 2:</label></td>
                            <td><?=form_input('telefon2', set_value('telefon2'), 'id="telefon2" placeholder="+381 21 5553333"')?></td>
                            <td><?=form_error('telefon2', '<span style="color:yellow;">','</span>')?></td>
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
                        <li class="current_page_item"><a href="<?= base_url() ?>srb/proizvodi_i_usluge">Proizvodi i usluge</a></li>
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