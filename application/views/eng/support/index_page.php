<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Support :: Diesel generator sets :: Energoglobal doo - Novi Sad - Serbia</title>
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
                <img src="<?= base_url() ?>images/logo.png" alt="Diesel Gen-Sets - Energoglobal doo" />
            </div>
            <div class="grid_8" id="box1">
                <ul>
                    <li><a href="<?= base_url() ?>eng/home">Home</a></li>
                    <li><a href="<?= base_url() ?>eng/about_us">About Us</a></li>
                    <li><a href="<?= base_url() ?>eng/products">Products</a></li>
                    <li><a href="<?= base_url() ?>eng/rent">Rent</a></li>
                    <li><a href="<?= base_url() ?>eng/service">Service</a></li>
                    <li class="current_page_item"><a href="<?= base_url() ?>eng/support">Support</a></li>
                    <li><a href="<?= base_url() ?>eng/references">References</a></li>
                    <li><a href="<?= base_url() ?>eng/contact">Contact</a></li>
                </ul>
            </div>
            <div class="grid_12" id="box2">
                <form>
                    <table>
                        <tr>
                            <td style="width: 15%;">
                                <a href="<?=base_url()?>srb/podrska">SR</a>
                                <a href="#" id="current_page_language">EN</a>
                            </td>
                            <td style="width: 85%; text-align: right;">                        
                                <label for="username">Username:</label>
                                <input id="username" name="username" type="text" placeholder="username" />                        
                                <label for="password">Password:</label>
                                <input id="password" name="password" type="password" placeholder="password" />                        
                                <input type="submit" value="Login"/>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="clear"></div>
            <div class="grid_12" id="box3">                
                <?=$this->load->view('eng/cycle_banner')?>
            </div>            
        </div>
        <div id="box4">
            <div class="container_12" id="box5">
                <div class="grid_9" id="box6">
                    <div id="sub_menu">
                        Rent | Sale | Service
                    </div>
                    <h1>Support</h1>
                    <p>
                        In case you are user of our services, please log in in 
                        appropriate field of this page.
                    </p>                    
                </div>
                <div class="grid_3" id="box7">
                    <?=$this->load->view('eng/news_scroller')?>
                </div>
            </div>
        </div>
        <div id="box8">
            <div class="container_12">
                <div class="grid_7" id="box9">                    
                    <ul>
                        <li><a href="<?= base_url() ?>eng/home">Home</a></li>
                        <li><a href="<?= base_url() ?>eng/about_us">About Us</a></li>
                        <li><a href="<?= base_url() ?>eng/products">Products</a></li>
                        <li><a href="<?= base_url() ?>eng/rent">Rent</a></li>
                        <li><a href="<?= base_url() ?>eng/service">Service</a></li>
                        <li class="current_page_item"><a href="<?= base_url() ?>eng/support">Support</a></li>
                        <li><a href="<?= base_url() ?>eng/references">References</a></li>
                        <li><a href="<?= base_url() ?>eng/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="grid_5" id="box10">
                    <p>
                        &copy; Energoglobal doo | Updated: <?= SITE_LAST_UPDATE ?> | Design by Baseline / code by nebjak
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
