<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Servis :: Dizel agregati :: Energoglobal doo - Novi Sad - Srbija</title>
        <link rel="stylesheet" href="<?=base_url()?>css/reset.css" />
        <link rel="stylesheet" href="<?=base_url()?>css/text.css" />
        <link rel="stylesheet" href="<?=base_url()?>css/960.css" />
        <link rel="stylesheet" href="<?=base_url()?>css/main.css" />
        <link rel="stylesheet" href="<?=base_url()?>css/jquery.simplyscroll-1.0.4.css" />
        <script type="text/javascript" src="<?=base_url()?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="<?=base_url()?>js/jquery.simplyscroll-1.0.4.min.js"></script>
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
                <img src="<?=base_url()?>images/logo.png" alt="Dizel agregari - Energoglobal doo" />
            </div>
            <div class="grid_8" id="box1">
                <ul>
                    <li><a href="<?=base_url()?>srb/pocetna">Početna</a></li>
                    <li><a href="<?=base_url()?>srb/o_nama">O nama</a></li>
                    <li><a href="<?=base_url()?>srb/proizvodi_i_usluge">Proizvodi i usluge</a></li>
                    <li><a href="<?=base_url()?>srb/rental">Rental</a></li>
                    <li class="current_page_item"><a href="<?=base_url()?>srb/servis">Servis</a></li>
                    <li><a href="<?=base_url()?>srb/podrska">Podrška</a></li>
                    <li><a href="<?=base_url()?>srb/reference">Reference</a></li>
                    <li><a href="<?=base_url()?>srb/kontakt">Kontakt</a></li>
                </ul>
            </div>
            <div class="grid_12" id="box2">
                <form>
                <table>
                    <tr>
                        <td style="width: 15%;">
                            <a href="#" id="current_page_language">SR</a>
                            <a href="<?=base_url()?>eng/service">EN</a>
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
                <?=$this->load->view('srb/cycle_banner')?>
            </div>
        </div>
        <div id="box4">
            <div class="container_12" id="box5">
                <div class="grid_9" id="box6">
                    <div id="sub_menu">
                        <?=$this->load->view('srb/sub_menu')?>
                    </div>                    
                    <h1>Servis i rezervni delovi</h1>
                    <p>
                        EnergoGlobal je specijalizovan i za vršenje usluga  
                        servisa i održavanja rezervnih izvora napajanja, kao i 
                        nabavku odgovorajućih rezervnih delova i pomoćnog materijala 
                        za te potrebe. Specijalni zahtevi za nadogradnjom i 
                        modernizacijom tehničkih rešenja su u opisu delatnosti 
                        EnergoGlobala, dok naša servisna služba može pouzdano 
                        održavati pomoćne izvore napajanja, namenski ili tokom 
                        cele godine u slučaju pravljenja posebnih celogodišnjih 
                        ugovora o održavanju agregata.
                    </p>
                    <p>
                        Pored velikog izbora opreme koju ugrađujemo i koristimo, 
                        takođe smo jedni od prvih koji smo uveli sisteme za 
                        daljinski nadzor i upravljanje putem GSM mreže, tako da 
                        u slučaju pojave alarma korisnik dobija SMS o tipu 
                        nastalog alarma. Pokretanje, zaustavljanje pomoćnih izvora 
                        napajanja i resetovanje grešaka, takođe je omogućeno putem 
                        GSM mreže mobilne telefonije. Možemo obezbediti i izradu 
                        sertifikata o ispitavanju agregata, gde je isti dobijen 
                        nakon seta neophodnih ispitivanja.
                    </p>
                </div>
                <div class="grid_3" id="box7">
                    <?=$this->load->view('srb/news_scroller')?>
                </div>
            </div>
        </div>
        <div id="box8">
            <div class="container_12">
                <div class="grid_7" id="box9">                    
                    <ul>
                        <li><a href="<?=base_url()?>srb/pocetna">Početna</a></li>
                        <li><a href="<?=base_url()?>srb/o_nama">O nama</a></li>
                        <li><a href="<?=base_url()?>srb/proizvodi_i_usluge">Proizvodi i usluge</a></li>
                        <li><a href="<?=base_url()?>srb/rental">Rental</a></li>
                        <li class="current_page_item"><a href="<?=base_url()?>srb/servis">Servis</a></li>
                        <li><a href="<?=base_url()?>srb/podrska">Podrška</a></li>
                        <li><a href="<?=base_url()?>srb/reference">Reference</a></li>
                        <li><a href="<?=base_url()?>srb/kontakt">Kontakt</a></li>
                    </ul>
                </div>
                <div class="grid_5" id="box10">
                    <p>
                        &copy; Energoglobal doo | Ažurirano: <?=SITE_LAST_UPDATE?> | Design by Baseline / code by nebjak
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
