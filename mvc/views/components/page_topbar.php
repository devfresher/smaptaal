        <!-- header logo: style can be found here -->

        <header class="header">

            <a href="<?php echo base_url('dashboard/index'); ?>" class="logo">

            <img src="<?=base_url("uploads/images/$siteinfos->photo")?>" width="55" style="float:left;"/>

                <!-- Add the class icon to your logo image or logo icon to add the margining -->

                <?php if(!empty($siteinfos)) { echo namesorting($siteinfos->sname, 14); } ?>

            </a>

            <!-- Header Navbar: style can be found here -->

            <nav class="navbar navbar-static-top" role="navigation">

                <!-- Sidebar toggle button-->

                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="glyphicon glyphicon-arrow-left" style="font-size:18px;"></span>

                </a>



                <div class="navbar-right">

                    <ul class="nav navbar-nav">
                        <li class='notification-menu'>
                            <a target='#' href="<?=base_url().'#'?>"><img class='rounded-circle' height='40em' src="<?=base_url("assets/icons/card.png")?>">
                            <span style='font-weight:bold'>Payment</span></a>
                        </li>
                </ul>



                <ul class="nav navbar-nav">
                        <li class='notification-menu'>
                            <a target='_blank' href="<?=base_url().'liveclass/index'?>"><img class='rounded-circle' height='40em' src="<?=base_url("assets/icons/live2.png")?>">
                            <span style='font-weight:bold'>Live Classrooms</span></a>
                        </li>
                </ul>
               
                    <ul class="nav navbar-nav">
                        <?php
                        if($this->session->userdata('usertypeID')!==4){
                        ?>
                        <li class='notification-menu' >
                            <a target='_blank' href="<?=base_url().'elearn/index'?>"><img height='40em' src="<?=base_url("assets/icons/elearn.png")?>"><span style='font-weight:bold'>E-learning</span></a>
                            
                        </li>
                        <!-- Frontend Site : style can be found here -->
                                    <?php }?>
                        <li class="dropdown notifications-menu">

                            <a target="_blank" href="<?=base_url('frontend/index')?>" class="dropdown-toggle" data-toggle="tooltip" title="<?=$this->lang->line('menu_visit_site')?>" data-placement="bottom">

                                <i class="fa fa-globe"></i>

                            </a>

                        </li>







                        <!-- Language : style can be found here -->

                        <?php if(isset($siteinfos->language_status) && $siteinfos->language_status == 0) { ?>

                            <li class="dropdown notifications-menu">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                    <img class="language-img" src="<?php 

                                    $image = $this->session->userdata('lang'); 

                                    echo base_url('uploads/language_image/'.$image.'.png'); ?>" 

                                    /> 

                                  

                                </a>

                                <ul class="dropdown-menu">

                                    <li class="header"> <?=$this->lang->line("language")?></li>

                                    <li>

                                        <!-- inner menu: contains the actual data -->

                                        <ul class="menu">

                                            <li class="language" id="arabic">

                                                <a href="<?php echo base_url('language/index/arabic')?>">

                                                    <div class="pull-left">

                                                        <img src="<?php echo base_url('uploads/language_image/arabic.png'); ?>"/>

                                                    </div>

                                                    <h4>

                                                        Arabic

                                                        <?php if($image == 'arabic') echo " <i class='glyphicon glyphicon-ok'></i>";  ?>

                                                    </h4>

                                                </a>

                                            </li>



                                            <li class="language" id="bengali">

                                                <a href="<?php echo base_url('language/index/bengali')?>">

                                                    <div class="pull-left">

                                                        <img src="<?php echo base_url('uploads/language_image/bengali.png'); ?>"/>

                                                    </div>

                                                    <h4>

                                                        Bengali

                                                        <?php if($image == 'bengali') echo " <i class='glyphicon glyphicon-ok'></i>";  ?>

                                                    </h4>

                                                </a>

                                            </li>



                                            <li class="language" id="chinese">

                                                <a href="<?php echo base_url('language/index/chinese')?>">

                                                    <div class="pull-left">

                                                        <img src="<?php echo base_url('uploads/language_image/chinese.png'); ?>"/>

                                                    </div>

                                                    <h4>

                                                        Chinese

                                                        <?php if($image == 'chinese') echo " <i class='glyphicon glyphicon-ok'></i>";  ?>

                                                    </h4>

                                                </a>

                                            </li>



                                            <li class="language" id="english">

                                                <a href="<?php echo base_url('language/index/english')?>">

                                                    <div class="pull-left">

                                                        <img src="<?php echo base_url('uploads/language_image/english.png'); ?>"/>

                                                    </div>

                                                    <h4>

                                                        English

                                                        <?php if($image == 'english') echo " <i class='glyphicon glyphicon-ok'></i>";  ?>

                                                    </h4>

                                                </a>

                                            </li>



                                            <li class="language" id="french">

                                                <a href="<?php echo base_url('language/index/french')?>">

                                                    <div class="pull-left">

                                                        <img src="<?php echo base_url('uploads/language_image/french.png'); ?>"/>

                                                    </div>

                                                    <h4>

                                                        French

                                                        <?php if($image == 'french') echo " <i class='glyphicon glyphicon-ok'></i>";  ?>

                                                    </h4>

                                                </a>

                                            </li>



                                            <li class="language" id="german">

                                                <a href="<?php echo base_url('language/index/german')?>">

                                                    <div class="pull-left">

                                                        <img src="<?php echo base_url('uploads/language_image/german.png'); ?>"/>

                                                    </div>

                                                    <h4>

                                                        German

                                                        <?php if($image == 'german') echo " <i class='glyphicon glyphicon-ok'></i>";  ?>

                                                    </h4>

                                                </a>

                                            </li>



                                            <li class="language" id="hindi">

                                                <a href="<?php echo base_url('language/index/hindi')?>">

                                                    <div class="pull-left">

                                                        <img src="<?php echo base_url('uploads/language_image/hindi.png'); ?>"/>

                                                    </div>

                                                    <h4>

                                                        Hindi

                                                        <?php if($image == 'hindi') echo " <i class='glyphicon glyphicon-ok'></i>";  ?>

                                                    </h4>

                                                </a>

                                            </li>



                                            <li class="language" id="indonesian">

                                                <a href="<?php echo base_url('language/index/indonesian')?>">

                                                    <div class="pull-left">

                                                        <img src="<?php echo base_url('uploads/language_image/indonesian.png'); ?>"/>

                                                    </div>

                                                    <h4>

                                                        Indonesian

                                                        <?php if($image == 'indonesian') echo " <i class='glyphicon glyphicon-ok'></i>";  ?>

                                                    </h4>

                                                </a>

                                            </li>



                                            <li class="language" id="italian">

                                                <a href="<?php echo base_url('language/index/italian')?>">

                                                    <div class="pull-left">

                                                        <img src="<?php echo base_url('uploads/language_image/italian.png'); ?>"/>

                                                    </div>

                                                    <h4>

                                                        Italian

                                                        <?php if($image == 'italian') echo " <i class='glyphicon glyphicon-ok'></i>";  ?>

                                                    </h4>

                                                </a>

                                            </li>



                                            <li class="language" id="portuguese">

                                                <a href="<?php echo base_url('language/index/portuguese')?>">

                                                    <div class="pull-left">

                                                        <img src="<?php echo base_url('uploads/language_image/portuguese.png'); ?>"/>

                                                    </div>

                                                    <h4>

                                                        Portuguese

                                                        <?php if($image == 'portuguese') echo " <i class='glyphicon glyphicon-ok'></i>";  ?>

                                                    </h4>

                                                </a>

                                            </li>



                                            <li class="language" id="romanian">

                                                <a href="<?php echo base_url('language/index/romanian')?>">

                                                    <div class="pull-left">

                                                        <img src="<?php echo base_url('uploads/language_image/romanian.png'); ?>"/>

                                                    </div>

                                                    <h4>

                                                        Romanian

                                                        <?php if($image == 'romanian') echo " <i class='glyphicon glyphicon-ok'></i>";  ?>

                                                    </h4>

                                                </a>

                                            </li>



                                            <li class="language" id="russian">

                                                <a href="<?php echo base_url('language/index/russian')?>">

                                                    <div class="pull-left">

                                                        <img src="<?php echo base_url('uploads/language_image/russian.png'); ?>"/>

                                                    </div>

                                                    <h4>

                                                        Russian

                                                        <?php if($image == 'russian') echo " <i class='glyphicon glyphicon-ok'></i>";  ?>

                                                    </h4>

                                                </a>

                                            </li>



                                            <li class="language" id="spanish">

                                                <a href="<?php echo base_url('language/index/spanish')?>">

                                                    <div class="pull-left">

                                                        <img src="<?php echo base_url('uploads/language_image/spanish.png'); ?>"/>

                                                    </div>

                                                    <h4>

                                                        Spanish

                                                        <?php if($image == 'spanish') echo " <i class='glyphicon glyphicon-ok'></i>";  ?>

                                                    </h4>

                                                </a>

                                            </li>



                                            <li class="language" id="thai">

                                                <a href="<?php echo base_url('language/index/thai')?>">

                                                    <div class="pull-left">

                                                        <img src="<?php echo base_url('uploads/language_image/thai.png'); ?>"/>

                                                    </div>

                                                    <h4>

                                                        Thai

                                                        <?php if($image == 'thai') echo " <i class='glyphicon glyphicon-ok'></i>";  ?>

                                                    </h4>

                                                </a>

                                            </li>



                                            <li class="language" id="turkish">

                                                <a href="<?php echo base_url('language/index/turkish')?>">

                                                    <div class="pull-left">

                                                        <img src="<?php echo base_url('uploads/language_image/turkish.png'); ?>"/>

                                                    </div>

                                                    <h4>

                                                        Turkish

                                                        <?php if($image == 'turkish') echo " <i class='glyphicon glyphicon-ok'></i>";  ?>

                                                    </h4>

                                                </a>

                                            </li>

                 

                                        </ul>

                                    </li>

                                    <li class="footer"></li>

                                </ul>

                            </li>

                        <?php } ?>

                        

                        <!-- User Info : style can be found here -->

                        <li class="dropdown user user-menu">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <img src="<?=imagelink($this->session->userdata('photo')) 

                                ?>" class="user-logo" alt="" />

                                <span>

                                    <?php

                                        $name = $this->session->userdata('name');

                                        if(strlen($name) > 10) {

                                           echo substr($name, 0, 10); 

                                        } else {

                                            echo $name;

                                        }

                                    ?>

                                    <i class="caret"></i>

                                </span>   

                            </a>



                            <ul class="dropdown-menu">

                                <!-- Menu Body -->

                                <li class="user-body">

                                    <div class="col-xs-12" style="border-bottom: 1px solid #e4eaec;padding:5px;">

                                        <a href="<?=base_url("profile/index")?>">

                                            <p><i class="fa fa-briefcase"></i>

                                            <?=$this->lang->line("profile")?> 

                                            </p>

                                        </a>



                                    </div>

                                    <div class="col-xs-12" style="padding:15px 0px 0px 0px;">

                                        <a href="<?=base_url("signin/cpassword")?>">

                                            <p><i class="fa fa-lock"></i>

                                            <?=$this->lang->line("change_password")?> 

                                            </p>

                                        </a>

                                    </div>

                                </li>

                                <!-- Menu Footer-->

                                <li class="user-footer">



                                    <div class="text-center">

                                        <a href="<?=base_url("signin/signout")?>">

                                            <div><i class="fa fa-power-off"></i></div>

                                            <?=$this->lang->line("logout")?> 

                                        </a>

                                    </div>

                                </li>

                            </ul>

                        </li>

                    </ul>

                </div>

            </nav>

        </header>