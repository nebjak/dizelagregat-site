<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Proizvodi :: Dizel agregati :: Energoglobal doo - Novi Sad - Srbija</title>
        <link rel="stylesheet" href="<?= base_url() ?>css/reset.css" />
        <link rel="stylesheet" href="<?= base_url() ?>css/text.css" />
        <link rel="stylesheet" href="<?= base_url() ?>css/960.css" />
        <link rel="stylesheet" href="<?= base_url() ?>css/main.css" />
        <link rel="stylesheet" href="<?= base_url() ?>css/jquery.simplyscroll-1.0.4.css" />
        <link rel="stylesheet" href="<?= base_url() ?>css/redmond/jquery-ui.css" />
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/jquery-ui.min.js"></script>
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
                $("#tabs").tabs();
                $("#accordion").accordion({
                    collapsible: true,
                    autoHeight: false
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
                    <li class="current_page_item"><a href="<?= base_url() ?>srb/proizvodi">Proizvodi</a></li>
                    <li><a href="<?= base_url() ?>srb/rental">Rental</a></li>
                    <li><a href="<?= base_url() ?>srb/servis_i_usluge">Servis i usluge</a></li>
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
                        <?= $this->load->view('srb/sub_menu') ?>
                    </div>                    
                    <h1>Proizvodi i usluge</h1>
                    <div id="tabs">
                        <ul>
                            <li><a href="#tabs-1">Nunc tincidunt</a></li>
                            <li><a href="#tabs-2">Proin dolor</a></li>
                            <li><a href="#tabs-3">Aenean lacinia</a></li>
                        </ul>
                        <div id="tabs-1">
                            <div id="accordion">
                                <h3><a href="#">Section 1</a></h3>
                                <div>
                                    <p>
                                        Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                        ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                        amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                        odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                    </p>
                                </div>
                                <h3><a href="#">Section 2</a></h3>
                                <div>
                                    <p>
                                        Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                        purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                        velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                        suscipit faucibus urna.
                                    </p>
                                    <p>
                                        Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                        purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                        velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                        suscipit faucibus urna.
                                    </p>
                                    <p>
                                        Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                        purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                        velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                        suscipit faucibus urna.
                                    </p>
                                    <p>
                                        Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                        purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                        velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                        suscipit faucibus urna.
                                    </p>
                                    <p>
                                        Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                        purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                        velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                        suscipit faucibus urna.
                                    </p>
                                </div>
                                <h3><a href="#">Section 3</a></h3>
                                <div>
                                    <p>
                                        Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                        Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                        ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                        lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                    </p>
                                    <ul>
                                        <li>List item one</li>
                                        <li>List item two</li>
                                        <li>List item three</li>
                                    </ul>
                                </div>
                                <h3><a href="#">Section 4</a></h3>
                                <div>
                                    <p>
                                        Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                        et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                        mauris vel est.
                                    </p>
                                    <p>
                                        Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                        inceptos himenaeos.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="tabs-2">
                            <p>
                                Morbi tincidunt, dui sit amet facilisis feugiat, 
                                odio metus gravida ante, ut pharetra massa metus 
                                id nunc. Duis scelerisque molestie turpis. Sed 
                                fringilla, massa eget luctus malesuada, metus 
                                eros molestie lectus, ut tempus eros massa ut 
                                dolor. Aenean aliquet fringilla sem. Suspendisse 
                                sed ligula in ligula suscipit aliquam. Praesent 
                                in eros vestibulum mi adipiscing adipiscing. 
                                Morbi facilisis. Curabitur ornare consequat nunc. 
                                Aenean vel metus. Ut posuere viverra nulla. 
                                Aliquam erat volutpat. Pellentesque convallis. 
                                Maecenas feugiat, tellus pellentesque pretium 
                                posuere, felis lorem euismod felis, eu ornare 
                                leo nisi vel felis. Mauris consectetur tortor et 
                                purus.
                            </p>
                        </div>
                        <div id="tabs-3">
                            <p>
                                Mauris eleifend est et turpis. Duis id erat. 
                                Suspendisse potenti. Aliquam vulputate, pede 
                                vel vehicula accumsan, mi neque rutrum erat, eu 
                                congue orci lorem eget lorem. Vestibulum non 
                                ante. Class aptent taciti sociosqu ad litora 
                                torquent per conubia nostra, per inceptos 
                                himenaeos. Fusce sodales. Quisque eu urna vel 
                                enim commodo pellentesque. Praesent eu risus 
                                hendrerit ligula tempus pretium. Curabitur lorem 
                                enim, pretium nec, feugiat nec, luctus a, lacus.
                            </p>
                            <p>
                                Duis cursus. Maecenas ligula eros, blandit nec, 
                                pharetra at, semper at, magna. Nullam ac lacus. 
                                Nulla facilisi. Praesent viverra justo vitae 
                                neque. Praesent blandit adipiscing velit. 
                                Suspendisse potenti. Donec mattis, pede vel 
                                pharetra blandit, magna ligula faucibus eros, id 
                                euismod lacus dolor eget odio. Nam scelerisque. 
                                Donec non libero sed nulla mattis commodo. Ut 
                                sagittis. Donec nisi lectus, feugiat porttitor, 
                                tempor ac, tempor vitae, pede. Aenean vehicula 
                                velit eu tellus interdum rutrum. Maecenas commodo. 
                                Pellentesque nec elit. Fusce in lacus. Vivamus a 
                                libero vitae lectus hendrerit hendrerit.
                            </p>
                        </div>
                    </div>
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
                        <li class="current_page_item"><a href="<?= base_url() ?>srb/proizvodi">Proizvodi</a></li>
                        <li><a href="<?= base_url() ?>srb/rental">Rental</a></li>
                        <li><a href="<?= base_url() ?>srb/servis_i_usluge">Servis i usluge</a></li>
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
