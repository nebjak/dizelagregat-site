<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Servis i usluge :: Dizel agregati :: Energoglobal doo - Novi Sad - Srbija</title>
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
                    <li><a href="<?=base_url()?>srb/proizvodi">Proizvodi</a></li>
                    <li><a href="<?=base_url()?>srb/rental">Rental</a></li>
                    <li class="current_page_item"><a href="<?=base_url()?>srb/servis_i_usluge">Servis i usluge</a></li>
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
                    <h1>Servis i usluge</h1>
                    <h2>Redovno i havarisko održavanje agregatskih stanica:</h2>
                    <p>
                        Energoglobal ze  je za svoje korisnike pripremio  više nivoa održavanja dizel agregatskih postrojenja.
                    </p>
                    <h2>Automatizacija i remont</h2>
                    <p>
                        Remont  i automatizacija postojećih dizel agregtaskih stanica ....
                    </p>
                    <h2>Rezervni delovi</h2>
                    <ul>
                        <li>Filteri</li>
                        <li>Ulje</li>
                        <li>Kontroleri</li>
                        <li>Generatori</li>
                        <li>Regulatori napona</li>
                        <li>Punjači baterija</li>
                        <li>Grejači rashladne tečnosti</li>
                        <li>Ostalo</li>
                    </ul>
                    <h2>Projektovanje i izrada dizel-agregatskih stanica:</h2>
                    <ul>
                        <li>Idejna rešenja sa odabirom opreme</li>
                        <li>Gradjevinski radovi</li>
                        <li>Isporuka i montaža opreme</li>
                        <li>Mašinski radovi</li>
                        <li>Elektro radovi</li>
                    </ul>
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
                        <li><a href="<?=base_url()?>srb/proizvodi">Proizvodi</a></li>
                        <li><a href="<?=base_url()?>srb/rental">Rental</a></li>
                        <li class="current_page_item"><a href="<?=base_url()?>srb/servis_i_usluge">Servis i usluge</a></li>
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
