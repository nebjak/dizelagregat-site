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
                
                $("#sumbit_button").click(function(e) {
                    e.preventDefault();
                    $(this).attr('disabled', 'disabled');
                    $(this).parent().append('<img src="<?=base_url()?>images/ajax-loader.gif" alt="Šalje se..." id="ajax_loader"/>')
                    $.post(
                        "<?=base_url()?>srb/kontakt/process", 
                        {
                            firma   :   $("#firma").val(),
                            ime     :   $("#ime").val(),
                            email   :   $("#email").val(),
                            br_tel  :   $("#br_tel").val(),
                            poruka  :   $("#poruka").val()
                        }, 
                        function(return_data) {
                            alert(return_data);
                            $("#ajax_loader").remove();
                            $("#sumbit_button").removeAttr('disabled');
                        }
                    );                    
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
                                <a href="<?=base_url()?>eng/contact">EN</a>
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
                    <h1>Kontakt</h1>
                    <p>
                        <strong>ENERGOGLOBAL DOO</strong><br/>
                        Kneza Miloša 33<br/>
                        21000 Novi Sad<br/>
                        Srbija<br/>
                    </p>
                    <p>
                        Tel: +381 21 499315<br/>
                        Fax: +381 21 499315<br/>
                        E-mail: office@energoglobal.com<br/>
                        Web: <a href="http://www.energoglobal.com">www.energoglobal.com</a>
                    </p>
                    <p>
                        PIB: 106644707<br/>
                        MB: 20650800<br/>
                        Br. računa: 340-11004902-47 (Erste Bank)
                    </p>
                    <p>
                    <form action="#" method="post">
                        <table>
                            <tr>
                                <td style="width: 80px;"><label for="firma">Firma:</label></td>
                                <td><input type="text" name="firma" id="firma" placeholder="Firma doo"/></td>
                            </tr>
                            <tr>
                                <td><label for="ime">Vaše ime:</label></td>
                                <td><input type="text" name="ime" id="ime" placeholder="Ime Prezime" required="required"/></td>
                            </tr>
                            <tr>
                                <td><label for="email">Vaš e-mail:</label></td>
                                <td><input type="email" name="email" id="email" placeholder="name@example.com"/></td>
                            </tr>
                            <tr>
                                <td><label for="br_tel">Vaš br. tel.:</label></td>
                                <td><input type="text" name="br_tel" id="br_tel" placeholder="+381 11 555 6677" required="required"/></td>
                            </tr>
                            <tr>
                                <td colspan="2"><label for="poruka">Poruka:</label></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <textarea name="poruka" id="poruka" rows="5" cols="40" required="required"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="all_right">
                                    <input type="reset" value="Reset" />
                                    <input type="submit" name="submit" value="Pošalji" id="sumbit_button" />
                                </td>
                            </tr>
                        </table>                        
                    </form>
                    </p>
                    <iframe width="700" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Energoglobal+doo,+%D0%91%D1%83%D0%BB%D0%B5%D0%B2%D0%B0%D1%80+%D0%BA%D0%BD%D0%B5%D0%B7%D0%B0+%D0%9C%D0%B8%D0%BB%D0%BE%D1%88%D0%B0,+Novi+Sad,+%D0%A1%D1%80%D0%B1%D0%B8%D1%98%D0%B0&amp;aq=0&amp;ie=UTF8&amp;hq=Energoglobal+doo,&amp;hnear=Bulevar+%D0%BAneza+Milo%C5%A1a,+Novi+Sad,+South+Backa+district,+Vojvodina,+Serbia&amp;t=m&amp;vpsrc=6&amp;ll=45.26945,19.819508&amp;spn=0.042284,0.120163&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Energoglobal+doo,+%D0%91%D1%83%D0%BB%D0%B5%D0%B2%D0%B0%D1%80+%D0%BA%D0%BD%D0%B5%D0%B7%D0%B0+%D0%9C%D0%B8%D0%BB%D0%BE%D1%88%D0%B0,+Novi+Sad,+%D0%A1%D1%80%D0%B1%D0%B8%D1%98%D0%B0&amp;aq=0&amp;ie=UTF8&amp;hq=Energoglobal+doo,&amp;hnear=Bulevar+%D0%BAneza+Milo%C5%A1a,+Novi+Sad,+South+Backa+district,+Vojvodina,+Serbia&amp;t=m&amp;vpsrc=6&amp;ll=45.26945,19.819508&amp;spn=0.042284,0.120163&amp;z=13&amp;iwloc=A" style="color:#fff;text-align:left;font-size: 10px;">Pogledajte veću mapu</a></small>
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
                        <li><a href="<?= base_url() ?>srb/proizvodi">Proizvodi</a></li>
                        <li><a href="<?= base_url() ?>srb/rental">Rental</a></li>
                        <li><a href="<?= base_url() ?>srb/servis_i_usluge">Servis i usluge</a></li>
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