<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>O nama :: Dizel agregati :: Energoglobal doo - Novi Sad - Srbija</title>
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
                <img src="<?=base_url()?>images/logo.png" alt="Dizel agregati - Energoglobal doo" />
            </div>
            <div class="grid_8" id="box1">
                <ul>
                    <li><a href="<?=base_url()?>srb/pocetna">Početna</a></li>
                    <li class="current_page_item"><a href="<?=base_url()?>srb/o_nama">O nama</a></li>
                    <li><a href="<?=base_url()?>srb/proizvodi">Proizvodi</a></li>
                    <li><a href="<?=base_url()?>srb/rental">Rental</a></li>
                    <li><a href="<?=base_url()?>srb/servis_i_usluge">Servis i usluge</a></li>
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
                            <a href="<?=base_url()?>eng/about_us">EN</a>
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
                    <h1>O nama</h1>
                    <h2>Profil kompanije</h2>
                    <p>
                        ENERGOGLOBAL, je nastao  od ideje da se višegodišnje 
                        iskustvo iz oblasti energetike, rezervnih izvora napajanja 
                        električnom energijom (dizel agregati i UPS) i 
                        obnovljivih izvora električne energije (male 
                        hidroelektrane, biomasa), objedini u timu stručnjaka, 
                        sa ciljem da se tržištu ponude kvalitetnija rešenja po 
                        konkurentnim uslovima.<br/>
                        Biramo da naši parteri budu najpoznatije domaće i svetske 
                        firme koje su u svom segmentu uvek korak ispred drugih.
                    </p>
                    <h2>Misija i i vizija</h2>
                    <p>
                        Naša misija je da primenom dugogodišnjeg iskustva i 
                        kvalitetnih komponeti pomognemo našim klijentima pri 
                        projektovanju, odabiru i, ispruci opreme i  izvođenju po 
                        sistemu ključ u ruke, remontu i servisu dizelagregatskih 
                        postrojenja i UPS sistema.<br/>
                        Naša vizija je da kroz  konstantno povećanje  znanja i 
                        novih tehnologija  postamo  jedna od vodećih kompanija iz 
                        oblasti rezervnih i alternativnih izvora napajanja a na 
                        zadovoljstvo naših korisnika i partnera.
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
                        <li class="current_page_item"><a href="<?=base_url()?>srb/o_nama">O nama</a></li>
                        <li><a href="<?=base_url()?>srb/proizvodi">Proizvodi</a></li>
                        <li><a href="<?=base_url()?>srb/rental">Rental</a></li>
                        <li><a href="<?=base_url()?>srb/servis_i_usluge">Servis i usluge</a></li>
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
