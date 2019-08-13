

<!-- MENU Start -->
<div class="navbar-custom deep-purple darken-4">
    <div class="container-fluid">

        <div id="navigation">

            <!-- Navigation Menu-->
            <ul class="navigation-menu deep-purple darken-4">

                <li @click="menu=0" class="has-submenu deep-purple darken-4">
                    <a href="#"><i class="icon-accelerator"></i> Escritorio</a>
                </li>

                <li class="has-submenu deep-purple darken-4">
                    <a href="#"><i class="icon-todolist-check deep-purple darken-4"></i> Almacen <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu">
                        <li @click="menu=1" class="deep-purple darken-4">
                            <a href="#"><i class="icon-todolist-add mr-2"></i>Productos</a>
                        </li>
                        <li @click="menu=2" class="deep-purple darken-4">
                            <a href="#"><i class="icon-todolist-add mr-2 "></i>Medicamentos</a>
                        </li>
                        
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="icon-life-buoy"></i> Gestion  <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu">
                        <li @click="menu=3" class="deep-purple darken-4">
                           <a href="#"> Presentaciones </a>
                        </li>

                        <li @click="menu=4" class="deep-purple darken-4">
                           <a href="#"> Concentraciones </a>
                        </li>
                        

                        <li @click="menu=5" class="deep-purple darken-4">
                           <a href="#"> Laboratorio </a>
                        </li>

                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="icon-diamond"></i> Advanced UI <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu megamenu">
                        <li @click="menu=6" class="deep-purple darken-4">
                           <a href="#"> Algo </a>
                        </li>
                        <li @click="menu=7" class="deep-purple darken-4">
                           <a href="#"> Algo </a>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="icon-paper-sheet"></i> Pages <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu">

                        <li @click="menu=8" class="deep-purple darken-4">
                           <a href="#"> Algo </a>
                        </li>
                        <li @click="menu=9" class="deep-purple darken-4">
                           <a href="#"> Algo </a>
                        </li>
                    </ul>
                </li>

            </ul>
            <!-- End navigation menu -->
        </div>
        <!-- end #navigation -->
    </div>
    <!-- end container -->
</div>
<!-- end navbar-custom -->
