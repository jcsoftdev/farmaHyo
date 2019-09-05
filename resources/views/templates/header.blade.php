

<!-- MENU Start -->
<div class="navbar-custom blue-pink darken-4">
    <div class="container-fluid">

        <div id="navigation">

            <!-- Navigation Menu-->
            <ul class="navigation-menu blue-pink darken-4">

                <li @click="menu=0" class="has-submenu blue-pink darken-4">
                    <a href="#"><i class="icon-accelerator"></i> Escritorio</a>
                </li>

                <li class="has-submenu blue-pink darken-4">
                    <a href="#"><i class="icon-todolist-check blue-pink darken-4"></i> Almacen <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu">
                        <li @click="menu=1" class="blue-pink darken-4">
                            <a href="#"><i class="icon-todolist-add mr-2"></i>Productos</a>
                        </li>
                        <li @click="menu=2" class="blue-pink darken-4">
                            <a href="#"><i class="icon-todolist-add mr-2 "></i>Medicamentos</a>
                        </li>
                        
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="icon-life-buoy"></i> Gestion  <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu">
                        <li @click="menu=3" class="blue-pink darken-4">
                           <a href="#"> Presentaciones </a>
                        </li>

                        <li @click="menu=4" class="blue-pink darken-4">
                           <a href="#"> Concentraciones </a>
                        </li>
                        

                        <li @click="menu=5" class="blue-pink darken-4">
                           <a href="#"> Laboratorio </a>
                        </li>

                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="icon-diamond"></i> Acceso <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu megamenu">
                        <li @click="menu=6" class="blue-pink darken-4">
                           <a href="#"> Usuarios </a>
                        </li>
                        
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="icon-paper-sheet"></i> Ventas <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu">

                        <li @click="menu=8" class="blue-pink darken-4">
                           <a href="#"> Venta </a>
                        </li>
                        <li @click="menu=9" class="blue-pink darken-4">
                           <a href="#"> Clientes </a>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="icon-paper-sheet"></i> Ingresos <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu">

                        <li @click="menu=10" class="blue-pink darken-4">
                           <a href="#"> Ingreso </a>
                        </li>
                        <li @click="menu=11" class="blue-pink darken-4">
                           <a href="#"> Proveedores </a>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="icon-paper-sheet"></i> Reportes <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu">

                        <li @click="menu=7" class="blue-pink darken-4">
                           <a href="#"> Ingreso </a>
                        </li>
                        <li @click="menu=17" class="blue-pink darken-4">
                           <a href="#"> Venta </a>
                        </li>
                        <li  class="blue-pink darken-4">
                           <a href="http://127.0.0.1:8000/excelIngreso"> Reporte </a>
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
