<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Contact :: Diesel generator sets :: Energoglobal doo - Novi Sad - Serbia</title>
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
                    $(this).parent().append('<img src="<?=base_url()?>images/ajax-loader.gif" alt="Sending..." id="ajax_loader"/>')
                    $.post(
                        "<?=base_url()?>eng/contact/process", 
                        {
                            company     :   $("#company").val(),
                            name        :   $("#name").val(),
                            email       :   $("#email").val(),
                            phone_num   :   $("#phone_num").val(),
                            message     :   $("#message").val()
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
                <img src="<?= base_url() ?>images/logo.png" alt="Diesel Gen-Sets - Energoglobal doo" />
            </div>
            <div class="grid_8" id="box1">
                <ul>
                    <li><a href="<?= base_url() ?>eng/home">Home</a></li>
                    <li><a href="<?= base_url() ?>eng/about_us">About Us</a></li>
                    <li><a href="<?= base_url() ?>eng/products">Products</a></li>
                    <li><a href="<?= base_url() ?>eng/rent">Rent</a></li>
                    <li><a href="<?= base_url() ?>eng/service">Service</a></li>
                    <li><a href="<?= base_url() ?>eng/support">Support</a></li>
                    <li><a href="<?= base_url() ?>eng/references">References</a></li>
                    <li class="current_page_item"><a href="<?= base_url() ?>eng/contact">Contact</a></li>
                </ul>
            </div>
            <div class="grid_12" id="box2">
                <form>
                    <table>
                        <tr>
                            <td style="width: 15%;">
                                <a href="<?=base_url()?>srb/kontakt">SR</a>
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
                    <h1>Energoglobal doo</h1>
                    <p>
                        Energoglobal doo<br/>
                        Kneza Miloša 33<br/>
                        Novi Sad<br/>
                        Serbia<br/>
                    </p>
                    <p>
                        Tel: +381 21 499315<br/>
                        Fax: +381 21 499315<br/>
                        E-mail: office@energoglobal.com<br/>
                        Web: <a href="http://www.energoglobal.com">www.energoglobal.com</a>
                    </p>
                    <p>
                        PIB: 106644707<br/>
                        MB: 206508000<br/>
                        Br. računa: 340-11004902-47 (Erste Bank)
                    </p>
                    <p>
                    <form action="#" method="post">
                        <table>
                            <tr>
                                <td style="width: 80px;"><label for="company">Company:</label></td>
                                <td><input type="text" name="company" id="company" placeholder="Company Ltd"/></td>
                            </tr>
                            <tr>
                                <td><label for="name">Name:</label></td>
                                <td><input type="text" name="name" id="name" placeholder="John Doe" required="required"/></td>
                            </tr>
                            <tr>
                                <td><label for="email">E-mail:</label></td>
                                <td><input type="email" name="email" id="email" placeholder="name@example.com"/></td>
                            </tr>
                            <tr>
                                <td><label for="phone_num">Phone num.:</label></td>
                                <td><input type="text" name="phone_num" id="phone_num" placeholder="+381 11 555 6677" required="required"/></td>
                            </tr>
                            <tr>
                                <td colspan="2"><label for="message">Message:</label></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <textarea name="message" id="message" rows="5" cols="40" required="required"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="all_right">
                                    <input type="reset" value="Reset" />
                                    <input type="submit" name="submit" value="Send" id="sumbit_button" />
                                </td>
                            </tr>
                        </table>                        
                    </form>
                    </p>
                    <iframe width="700" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Energoglobal+doo,+%D0%91%D1%83%D0%BB%D0%B5%D0%B2%D0%B0%D1%80+%D0%BA%D0%BD%D0%B5%D0%B7%D0%B0+%D0%9C%D0%B8%D0%BB%D0%BE%D1%88%D0%B0,+Novi+Sad,+%D0%A1%D1%80%D0%B1%D0%B8%D1%98%D0%B0&amp;aq=0&amp;ie=UTF8&amp;hq=Energoglobal+doo,&amp;hnear=Bulevar+%D0%BAneza+Milo%C5%A1a,+Novi+Sad,+South+Backa+district,+Vojvodina,+Serbia&amp;t=m&amp;vpsrc=6&amp;ll=45.26945,19.819508&amp;spn=0.042284,0.120163&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Energoglobal+doo,+%D0%91%D1%83%D0%BB%D0%B5%D0%B2%D0%B0%D1%80+%D0%BA%D0%BD%D0%B5%D0%B7%D0%B0+%D0%9C%D0%B8%D0%BB%D0%BE%D1%88%D0%B0,+Novi+Sad,+%D0%A1%D1%80%D0%B1%D0%B8%D1%98%D0%B0&amp;aq=0&amp;ie=UTF8&amp;hq=Energoglobal+doo,&amp;hnear=Bulevar+%D0%BAneza+Milo%C5%A1a,+Novi+Sad,+South+Backa+district,+Vojvodina,+Serbia&amp;t=m&amp;vpsrc=6&amp;ll=45.26945,19.819508&amp;spn=0.042284,0.120163&amp;z=13&amp;iwloc=A" style="color:#fff;text-align:left;font-size: 10px;">View Larger Map</a></small>
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
                        <li><a href="<?= base_url() ?>eng/support">Support</a></li>
                        <li><a href="<?= base_url() ?>eng/references">References</a></li>
                        <li class="current_page_item"><a href="<?= base_url() ?>eng/contact">Contact</a></li>
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