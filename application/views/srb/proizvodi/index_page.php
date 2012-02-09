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
                $(".accordion").accordion({
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
                    <div id="tabs" style="margin-bottom: 20px;">
                        <ul>
                            <li><a href="#dizel">Dizel agregati</a></li>
                            <li><a href="#benzin">Benzinski agregati</a></li>
                        </ul>
                        <div id="dizel">
                            <div class="accordion">
                                <h3><a href="#">PERKINS Powered</a></h3>
                                <div>
                                    <table summary="Perkins powered" style="width: 100%;" class="agregati">
                                        <tr>
                                            <th>Tip</th>
                                            <th>Snaga</th>
                                            <th>Motor</th>
                                            <th>Generator</th>
                                        </tr>
                                        <? foreach($perkins_powered as $a): ?>
                                        <tr>
                                            <td><?=$a->tip?></td>
                                            <td><?=number_format($a->snaga, 0, ',', '.')?> kVA</td>
                                            <td><?=$a->proizvodjac_motora?></td>
                                            <td><?=$a->proizvodjac_generatora?></td>
                                        </tr>
                                        <? endforeach; ?>
                                    </table>
                                </div>
                                <h3><a href="#">IVECO Powered</a></h3>
                                <div>
                                    <table summary="Iveco powered" style="width: 100%;" class="agregati">
                                        <tr>
                                            <th>Tip</th>
                                            <th>Snaga</th>
                                            <th>Motor</th>
                                            <th>Generator</th>
                                        </tr>
                                        <? foreach($iveco_powered as $a): ?>
                                        <tr>
                                            <td><?=$a->tip?></td>
                                            <td><?=number_format($a->snaga, 0, ',', '.')?> kVA</td>
                                            <td><?=$a->proizvodjac_motora?></td>
                                            <td><?=$a->proizvodjac_generatora?></td>
                                        </tr>
                                        <? endforeach; ?>
                                    </table>
                                </div>
                                <h3><a href="#">DOOSAN Powered</a></h3>
                                <div>
                                    <table summary="Doosan powered" style="width: 100%;" class="agregati">
                                        <tr>
                                            <th>Tip</th>
                                            <th>Snaga</th>
                                            <th>Motor</th>
                                            <th>Generator</th>
                                        </tr>
                                        <? foreach($doosan_powered as $a): ?>
                                        <tr>
                                            <td><?=$a->tip?></td>
                                            <td><?=number_format($a->snaga, 0, ',', '.')?> kVA</td>
                                            <td><?=$a->proizvodjac_motora?></td>
                                            <td><?=$a->proizvodjac_generatora?></td>
                                        </tr>
                                        <? endforeach; ?>
                                    </table>
                                </div>
                                <h3><a href="#">MTU MERCEDES</a></h3>
                                <div>
                                    <table summary="MTU Mercedes powered" style="width: 100%;" class="agregati">
                                        <tr>
                                            <th>Tip</th>
                                            <th>Snaga</th>
                                            <th>Motor</th>
                                            <th>Generator</th>
                                        </tr>
                                        <? foreach($mtu_mercedes_powered as $a): ?>
                                        <tr>
                                            <td><?=$a->tip?></td>
                                            <td><?=number_format($a->snaga, 0, ',', '.')?> kVA</td>
                                            <td><?=$a->proizvodjac_motora?></td>
                                            <td><?=$a->proizvodjac_generatora?></td>
                                        </tr>
                                        <? endforeach; ?>
                                    </table>
                                </div>
                                <h3><a href="#">LOMBARDINI Powered</a></h3>
                                <div>
                                    <table summary="Lombardini powered" style="width: 100%;" class="agregati">
                                        <tr>
                                            <th>Tip</th>
                                            <th>Snaga</th>
                                            <th>Motor</th>
                                            <th>Generator</th>
                                        </tr>
                                        <? foreach($lombardini_powered as $a): ?>
                                        <tr>
                                            <td><?=$a->tip?></td>
                                            <td><?=number_format($a->snaga, 1, ',', '.')?> kVA</td>
                                            <td><?=$a->proizvodjac_motora?></td>
                                            <td><?=$a->proizvodjac_generatora?></td>
                                        </tr>
                                        <? endforeach; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="benzin">
                            <div class="accordion">
                                <h3><a href="#">HONDA Powered</a></h3>
                                <div>
                                    <table summary="Honda powered" style="width: 100%;" class="agregati">
                                        <tr>
                                            <th>Tip</th>
                                            <th>Snaga</th>
                                            <th>Motor</th>
                                            <th>Generator</th>
                                        </tr>
                                        <? foreach($honda_powered as $a): ?>
                                            <tr>
                                                <td><?= $a->tip ?></td>
                                                <td><?= number_format($a->snaga, 1, ',', '.') ?> kVA</td>
                                                <td><?= $a->proizvodjac_motora ?></td>
                                                <td><?= $a->proizvodjac_generatora ?></td>
                                            </tr>
                                        <? endforeach; ?>
                                    </table>
                                </div>
                            </div>            
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
