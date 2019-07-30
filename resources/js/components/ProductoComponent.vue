<template>
    <div class="contenido">
        
                    
                <!-- Page-Title -->
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h4 class="container"> Productos
                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="icon-plus mr-2"></i>Nuevo</button>
                            
                            </h4>
                            
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Almacen</a></li>
                                <li class="breadcrumb-item active">Productos</li>
                            </ol>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <div class="row">

                    <div class="col-12 ">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="card-header">
                                    
                                    
                                </div>
                                <h4 class="mt-0 header-title">Administre los productos</h4>
                                <p class="sub-title">Aqui puede agregar consultar y modificar los nombres de  <code>Productos</code>.
                                </p>

                                <div class="table-responsive-md ">
                                        <table id="datatable" class="table table-bordered  table-striped " >
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
                                                <th>Estado</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                        
                                            <tr class="table-dar" v-for="producto in arrayProducto" :key="producto.id">
                                                <td v-text="producto.nombre"></td>
                                                <td v-text="producto.descripcion"></td>
                                                <td class="text-center">
                                                    <div v-if="producto.condicion == 1">
                                                        <span class="badge badge-success">Activo</span>
                                                    </div>
                                                    <div v-else>
                                                        <span class="badge badge-danger">Desactivo</span>
                                                    </div>

                                                </td>
                                                <td class="btn-block">
                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="icon-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="icon-trash-bin"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                

                <!-- El modal  -->
                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="mySmallModalLabel">Small modal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                

    </div>
            
   
</template>

<script>
    export default {
        data(){
            return {
                nombre: '',
                descripcion:'',
                arrayProducto:[]
            }
        },
        methods : {
            listarProducto(){
                
                let me = this;
                axios.get('/producto')
                .then(function (response) {
                    // handle success
                    me.arrayProducto=response.data;
                    console.log(me.arrayProducto);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                });

            }
        },
        mounted() {
            this.listarProducto();
            // $().DataTable();
        }
    }
</script>

<style>
    .btn-block{
        /* padding: 0 !important; */
        display: flex !important;
        border: 0 !important;
        justify-content: space-evenly;
        align-items: center;
    }
</style>

