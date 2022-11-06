    <div class="wrapper row-offcanvas row-offcanvas-left">

        <!-- Left side column. contains the logo and sidebar -->

        <aside class="left-side sidebar-offcanvas">

            <!-- sidebar: style can be found in sidebar.less -->

            <section class="sidebar">

                <!-- Sidebar user panel -->

                <div class="user-panel">

                   <br/>

                </div>

                

                <ul class="sidebar-menu">

                    <?php

                        if(!empty($dbMenus)) {

                           
                            $menuDesign = '';
                            

                            display_menu($dbMenus, $menuDesign);

                            echo $menuDesign;

                        }

                    ?>

                </ul>

            </section>

            <!-- /.sidebar -->

        </aside>