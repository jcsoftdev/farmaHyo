<template>
    <div class="contenido">
        
                    
                <!-- Page-Title -->
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h4 class="container"> Productos
                            <button type="button" class="btn btn-primary waves-effect waves-light" @click="abrirModal('producto','registrar')"><i class="icon-plus mr-2"></i>Nuevo</button>
                            
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
                                                    
                                                    <button @click="abrirModal('producto','actualizar',producto)" type="button" class="btn btn-primary waves-effect waves-light"><i class="icon-pencil "></i></button>
                                                    <template v-if="producto.condicion">
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" @click="alertaConfirm('Desactivar','¿Seguro que desea Desactivar?','Desactivado', 'desactivar',producto.id)">
                                                            <i class="icon-trash-bin"></i>
                                                        </button>
                                                    </template>
                                                    <template v-else>
                                                        <button type="button" class="btn btn-info waves-effect waves-light" @click="alertaConfirm('Activar','¿Seguro que desea Activar?','Activado', 'activar',producto.id)">
                                                            <i class="icon-check"></i>
                                                        </button>
                                                    </template>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        Mostrando
                                    </div>
<div class="col-sm-12 col-md-7 dataTables_paginate paging_simple_numbers" >
    <ul class="pagination">
        <li class="paginate_button page-item previous" v-if="pagination.current_page > 1" >
            <a href="#" class="page-link" @click.prevent="cambiarPagina(pagination.current_page - 1, buscar, criterio)">
                Anterior
            </a>
        </li>
        <li class="paginate_button page-item active" v-for="page in pagesNumber" :key="page" :class="[page == isActived ? 'active':'']">
            <a href="#" class="page-link" @click.prevent="cambiarPagina(page, buscar, criterio)" v-text="page"></a>
        </li>
        <li class="paginate_button page-item " v-if="pagination.current_page < pagination.last_page">
            <a href="#" class="page-link" @click.prevent="cambiarPagina(pagination.current_page + 1, buscar, criterio)">
                Siguiente
            </a>
        </li>
    </ul>
</div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                

                <!-- El modal  -->
                <div class="modal fade" :class="{'mostrar':modal}" tabindex="-1"  role="dialog" aria-labelledby="newProductModal" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" v-text="tituloModal"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Cuerpo de mdal -->
                                    <form action="#">
                                        <div class="form-group">
                                            <label>Producto</label>
                                            <div>
                                                <input v-model="nombre" class="form-control"
                                                    required placeholder="Nombre de propducto"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Descripcion</label>
                                            <div>
                                                <input v-model="descripcion" 
                                                    class="form-control" required
                                                    placeholder="Descripcion del producto"/>
                                            </div>
                                        </div>
                                        <div v-show="errorProducto" class="form-group row div-error">
                                            <div class="text-center text-error">
                                                <div class="text-center pt-3" v-for="error in errorMostrarMsjProducto" :key="error" v-text="error">
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" @click="cerrarModal()">Cerrar</button>
                                            <button  type="button" v-if="tipoAccion==1" class="btn btn-primary" @click="registrarProducto(); ">Guardar</button>
                                            <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="actualizarProducto()">Actualizar</button>
                                        </div>
                                    </form>
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
                producto_id : 0,
                nombre: '',
                descripcion:'',
                arrayProducto:[],
                modal:0,
                tituloModal:0,
                tipoAccion: 1,
                errorProducto : 0,
                errorMostrarMsjProducto : [],
                pagination: {
                    'total':0,
                    'current_page':0,
                    'per_page':0,
                    'last_page':0,
                    'from':0,
                    'to':0
                },
                offset:3
            }
        },
        computed:{
            isActived : function(){
                return this.pagination.current_page;
            },
            // calcula los elemento de la pagination
            pagesNumber : function(){
                if(!this.pagination.to){
                    return [];
                }
                var from = this.pagination.current_page - this.offset;
                if(from<1){
                    from = 1;
                }
                var to = from + (this.offset * 2);
                if(to >= this.pagination.last_page){
                    to = this.pagination.last_page;
                }
                var pagesArray = [];
                while(from <= to){
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;
            }
        },
        methods : {
            listarProducto(page){
                
                let me = this;
                var url = '/producto?page='+page;
                axios.get(url)
                .then(function (response) {
                    var respuesta = response.data;
                    me.arrayProducto=respuesta.productos.data;
                    me.pagination=respuesta.pagination
                    console.log(me.arrayProducto);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                });

            },
            cambiarPagina(page, buscar , criterio){
                let me = this;
                me.pagination.current_page = page;
                me.listarProducto(page, buscar , criterio);
            },
            registrarProducto(){
                let me = this;
                if (me.validarProducto()) {
                    return
                }else{
                    axios.post('/producto/registrar', {
                        nombre: me.nombre,
                        descripcion: me.descripcion
                    })
                    .then(function (response) {
                        me.nombre='';
                        me.descripcion='';
                        console.log(response);
                        me.modal = 0;
                        me.listarProducto();
                        me.alerta('success','Actualizado con exito');
                    })
                    .catch(function (error) {
                        console.log(error);
                        me.alerta('error','Algo ha fallado en el registro');
                    });
                }
            },
            actualizarProducto(){

                let me = this;
                if (me.validarProducto()) {
                    return
                }else{
                    axios.put('/producto/actualizar', {
                        id:me.producto_id,
                        nombre: me.nombre,
                        descripcion: me.descripcion
                    })
                    .then(function (response) {
                        me.nombre='';
                        me.descripcion='';
                        console.log(response);
                        me.modal=0;
                        me.listarProducto();
                        me.alerta('info','Actualizado con exito');
                    })
                    .catch(function (error) {
                        console.log(error);
                        me.alerta('error','La actualizacion ha fallado');
                    });
                }
            },
            abrirModal(modelo, accion, data=[]){
                switch(modelo){
                    case "producto":{
                        switch (accion) {
                            case "registrar":
                                {
                                    this.modal = 1;
                                    this.tituloModal =  'Registrar Producto'
                                    this.nombre = '';
                                    this.descripcion = '';
                                    this.tipoAccion = 1;
                                    break
                                }
                            case "actualizar":
                                {
                                    this.modal = 1;
                                    this.tituloModal =  'Actualziar Producto';
                                    this.producto_id = data.id;
                                    this.nombre = data.nombre;
                                    this.tipoAccion = 2;
                                    this.descripcion = data.descripcion;
                                    break
                                }
                           
                        }
                    }
                }
            },
            cerrarModal(){
                this.modal = 0;
                this.tituloModal = '';
                this.nombre = '';
                this.descripcion = '';
            },
            eliminar(){
                alertaConfirm(titulo,message,outText)
            },
            alerta(type,message){
                var me = this;
                const Toast = me.$swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 2000
                });

                Toast.fire({
                type: type,
                title: message
                })
            },
            alertaConfirm(titulo,message,outText, accion, id){
                var me = this;
                me.$swal.fire({
                    title: titulo,
                    text: message,
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, '+titulo
                    }).then((result) => {
                        if (result.value) {
                            switch (accion) {
                                case 'activar':
                                    axios.put('/producto/activar', {
                                        'id' : id
                                    })
                                    .then(function (response) {
                                        me.alerta('success',outText);
                                        me.listarProducto();
                                    })
                                    .catch(function (error) {
                                        console.log(error);
                                        me.alerta('error','Falla al activar el producto');
                                    });
                                    break;
                            
                                case 'desactivar':
                                    axios.put('/producto/desactivar', {
                                        'id' : id
                                    })
                                    .then(function (response) {
                                        me.alerta('success',outText);
                                        me.listarProducto();
                                    })
                                    .catch(function (error) {
                                        console.log(error);
                                        me.alerta('error','Falla al desactivar el producto');
                                    });
                                    break;
                            
                            }
                        }else{
                            
                            result.dismiss 
                        }
                        
                    })
            },
            validarProducto(){
                this.errorProducto = 0;
                this.errorMostrarMsjProducto = [];
                if(!this.nombre) this.errorMostrarMsjProducto.push("El nombre del Producto no puede estar vacio");
                if(this.errorMostrarMsjProducto.length) this.errorProducto = 1;
                return this.errorProducto;
            }
        },
        mounted() {
            this.listarProducto(1);
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
    .modal-content{
        width: 100% !important;
        position: absolute !important;
        
    }
    .mostrar{
        display: list-item !important;
        padding-top: 5rem;
        /* height: 100vh; */
        opacity: 1 !important;
        position: absolute !important;
        background-color: rgba(0, 0, 0, 0.671) !important;
        /* display: flex !important; */
        /* justify-content: center; */
        /* align-items: center; */
        /* overflow: hidden; */

    }
    .div-error{
        display:flex;
        justify-content: center;
        width:100%;
    }
    .text-error{
        color:red !important;
        font-weight:bold;
        
    }
</style>

