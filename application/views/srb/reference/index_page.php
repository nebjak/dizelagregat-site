<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Reference :: Dizel agregati :: Energoglobal doo - Novi Sad - Srbija</title>
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
                    <li><a href="<?= base_url() ?>srb/proizvodi">Proizvodi</a></li>
                    <li><a href="<?= base_url() ?>srb/rental">Rental</a></li>
                    <li><a href="<?= base_url() ?>srb/servis_i_usluge">Servis i usluge</a></li>
                    <li><a href="<?= base_url() ?>srb/podrska">Podrška</a></li>
                    <li class="current_page_item"><a href="<?= base_url() ?>srb/reference">Reference</a></li>
                    <li><a href="<?= base_url() ?>srb/kontakt">Kontakt</a></li>
                </ul>
            </div>
            <div class="grid_12" id="box2">
                <form>
                    <table>
                        <tr>
                            <td style="width: 15%;">
                                <a href="#" id="current_page_language">SR</a>
                                <a href="<?=base_url()?>eng/references">EN</a>
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
                        <?=$this->load->view('srb/sub_menu')?>
                    </div>                    
                    <h1>Reference</h1>
                    <p>
                    <ul>
                        <li>GORŠTAK DOO</li>
                        <li>PILE PROM DOO 100 kVA</li>
                        <li>POLJOAUTO DOO 55 kVA</li>
                        <li>POLJOAUTO DOO 40 kVA</li>
                        <li>POLJOAUTO DOO 55 kVA</li>
                        <li>LETAČ DOO</li>
                        <li>UNITEC CNC DOO</li>
                        <li>AGRAR KOMERC DOO 55 kVA</li>
                        <li>ALEACOM DOO</li>
                        <li>BIODEKOR DOO</li>
                        <li>KNEZ PETROL DOO 25 kVA</li>
                        <li>GRANIČAR AD 110 kVA</li>
                        <li>ABM ELEKTRO 300 kVA</li>
                        <li>MILGEN DOO</li>
                        <li>SILAGRO DOO 400 kVA</li>
                        <li>ELKTROVOLT DOO 70 kVA</li>
                        <li>JP ŽELEZNICE SRBIJE rekonstrukcija agregat 40 kVA </li>
                        <li>OMEGA ELEKTRO DOO</li>
                        <li>GP ZLATIBOR GRADNJA</li>
                        <li>ROPER DOO 30 kVA</li>
                        <li>TURKOVIĆ DOO 78 kVA</li>
                        <li>TREMOMONT ELEKTRO DOO</li>
                        <li>ZAVOD ZA HITNU MEDICINSKU POMOĆ NOVI SAD 33 kVA</li>
                        <li>TEKIJANKA-KLADOVO 55 kVA</li>
                        <li>FARMAKOM MB 160 kVA</li>
                        <li>RD TIM LIVE 22 kVA</li>
                        <li>RD TIM LIVE 15 kVA</li>
                        <li>KNEZ PETROL 25 kVA</li>
                        <li>KNEZ PETROL 25 kVA</li>
                        <li>VOĆAR KOPAONIK 10 kVA</li>
                        <li>ELSA SYSTEM 10 kVA</li>
                        <li>DECO 33 kVA</li>
                        <li>ENERGOTEHNIKA JUŽNA BAČKA automatizacija dva agregata 250 kVA</li>
                        <li>NEOLINK 30 kVA</li>
                        <li>TURBINA automatizacija agregata 330 kVA</li>
                        <li>JKP VODOVOD PARAĆIN 8 kVA</li>
                        <li>MEDIUS STARA PAZOVA 17 kVA</li>
                        <li>BOŽANOVIĆ 50 kVA</li>
                        <li>UNIPROMET 138 kVA</li>
                        <li>DILEKTRA 3 kW</li>
                        <li>KNEZ PETROL 125 kVA</li>
                        <li>TRANSPORT GOLUBOVIĆ trafo 400 kVA</li>
                        <li>TARKETT automatizacija</li>
                        <li>ALIMOIJE 250 kVA</li>
                        <li>VIS COMPANY 20 kVA</li>
                        <li>ELKO TIM 40 kVA</li>
                        <li>JKP BEOGRADSKI VODOVOD I KANALIZACIJA 8 kVA</li>
                        <li>RP TEHNOMETAL 160 kVA</li>
                        <li>ELEKTROTIM 500 kVA</li>
                    </ul>                        
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
                        <li class="current_page_item"><a href="<?= base_url() ?>srb/reference">Reference</a></li>
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