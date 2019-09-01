<template>
<main class="main">
    <!-- Breadcrumb -->
    
    <div class="container-fluid mb-12">
        <div class="contenido">
            <!-- <div class="form-group row container-fluid">
                <div class="input-group">
                    
                    <v-container fluid grid-list-xl>
                    <v-layout wrap align-center justify-space-around>
                        <v-flex xs12 sm2 >
                            <v-select
                            v-model="criterio"
                            :items="busqueda"
                            label="Criterio"
                            @keyup="listarVencimiento(1,buscar,criterio)"
                            ></v-select>
                        </v-flex>
                        <v-flex xs12 sm8>
                            <v-text-field
                                @keyup="listarVencimiento(1,buscar,criterio)"
                                v-model="buscar"
                                label="Buscar"
                                clearable
                            ></v-text-field>
                        </v-flex>
                        <v-flex xs12 sm1 >
                            <v-btn @click="listarVencimiento(1,buscar,criterio)" depressed large color="primary"><i class="fa fa-search ml-1"></i></v-btn>
                        </v-flex>
                    </v-layout>
                    </v-container>
                    
                </div>
            </div> -->
            <!-- <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm grey lighten-4 black--text">
                    <thead>
                        <tr>
                            <th>Lote</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Fecha Vencimiento</th>
                            <th>Total</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="venta in arrayVencimineto" :key="venta.id">
                            
                            <td class="text-danger subtitle-2" v-text="venta.lote"></td>
                            <td class="text-danger subtitle-2" v-text="venta.medicamento"></td>
                            <td class="text-danger subtitle-2" v-text="venta.cantidad"></td>
                            <td class="text-danger subtitle-2" v-text="venta.precio"></td>
                            <td class="text-danger subtitle-2" v-text="venta.fecha_vencimiento"></td>
                            <td class="text-danger subtitle-2" v-text="venta.total"></td>
                        </tr>                                
                    </tbody>
                </table>
            </div> -->
            <div class="table-bordered mt-12 ">
                <template c>
                    <v-card class="grey lighten-4 red--text">
                        <v-layout wrap align-center justify-space-around class="grey darken-4 white--text">
                            <v-flex xs6>
                                <v-card-title>
                                 Alerta De Vencimiento
                                </v-card-title>
                                    
                            </v-flex>
                            <v-flex xs6>
                                <v-text-field
                                    v-model="search"
                                    label="Search"
                                    clearable
                                ></v-text-field>
                            </v-flex>
                            <v-flex xs12>
                                <v-data-table
                                :headers="headers"
                                :items="arrayVencimineto"
                                :search="search"
                                class="elevation-1 grey lighten-4 red--text"
                                ></v-data-table>
                            </v-flex>
                        </v-layout>
                        
                        
                    </v-card>
                </template>
            </div>
            <!-- Paginacion -->
            <!-- <nav>
                <ul class="pagination">
                    <li class="page-item" v-if="pagination.current_page > 1">
                        <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page - 1,buscar,criterio)">Ant</a>
                    </li>
                    <li class="page-item" v-for="page in pagesNumber" :key="page" :class="[page == isActived ? 'active' : '']">
                        <a class="page-link" href="#" @click.prevent="cambiarPagina(page,buscar,criterio)" v-text="page"></a>
                    </li>
                    <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                        <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page + 1,buscar,criterio)">Sig</a>
                    </li>
                </ul>
            </nav> -->
        </div>

        <!-- Los graficos  -->
        <div class="card m-4">
            <div class="car-body grey lighten-4">
                <div class="row px-4">
                    <div class="col-md-6 ">
                        <div class="card card-chart grey lighten-4 black--text ">
                            <div class="card-header grey darken-4 white--text ">
                                <h4>Ingresos <span ></span></h4>
                            </div>
                            <div class="card-content">
                                <div class="ct-chart">
                                    <canvas id="ingresos">                                                
                                    </canvas>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>Compras de los últimos meses.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-chart grey lighten-4 black--text">
                            <div class="card-header grey darken-4 white--text">
                                <h4>Ventas</h4>
                            </div>
                            <div class="card-content">
                                <div class="ct-chart">
                                    <canvas id="ventas">                                                
                                    </canvas>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>Ventas de los últimos meses.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-4">
                    <div class="col-md-6">
                        <div class="card card-chart grey lighten-4 black--text">
                            <div class="card-header grey darken-4 white--text">
                                <h4>Ingresos</h4>
                            </div>
                            <div class="card-content">
                                <div class="ct-chart">
                                    <canvas id="ingresosLine">                                                
                                    </canvas>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>Compras de los últimos meses.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-chart grey lighten-4 black--text">
                            <div class="card-header grey darken-4 white--text">
                                <h4>Ventas</h4>
                            </div>
                            <div class="card-content">
                                <div class="ct-chart">
                                    <canvas id="ventasLine">                                                
                                    </canvas>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>Ventas de los últimos meses.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
</template>
<script>
    export default {
        data (){
            return {
                search: '',
                varIngreso:null,
                charIngreso:null,
                ingresos:[],
                varTotalIngreso:[],
                varMesIngreso:[], 
                
                varVenta:null,
                charVenta:null,
                ventas:[],
                varTotalVenta:[],
                varMesVenta:[],
                // pagination : {
                //     'total' : 0,
                //     'current_page' : 0,
                //     'per_page' : 0,
                //     'last_page' : 0,
                //     'from' : 0,
                //     'to' : 0,
                // },
                offset:3,
                headers: [
                {
                    text: 'Lote',
                    align: 'left',
                    sortable: false,
                    value: 'lote',
                },
                { text: 'Descripcion', value: 'medicamento' },
                { text: 'Cantidad', value: 'cantidad' },
                { text: 'Precio', value: 'precio' },
                { text: 'Fecha', value: 'fecha_vencimiento' },
                { text: 'Total', value: 'total' },
                ],
                arrayVencimineto: [],
                // buscar: '',
                // busqueda: ['codigo','nombre','descripcion'],
                // criterio:'nombre',
            }
        },
        computed:{
            isActived: function(){
                return this.pagination.current_page;
            },
            //Calcula los elementos de la paginación
            pagesNumber: function() {
                if(!this.pagination.to) {
                    return [];
                }
                
                var from = this.pagination.current_page - this.offset; 
                if(from < 1) {
                    from = 1;
                }

                var to = from + (this.offset * 2); 
                if(to >= this.pagination.last_page){
                    to = this.pagination.last_page;
                }  

                var pagesArray = [];
                while(from <= to) {
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;
            },
            calcularTotal: function(){
                var resultado=0.0;
                for(var i=0;i<this.arrayVencimineto.length;i++){
                    resultado=resultado+(this.arrayVencimineto[i].precio*this.arrayVencimineto[i].cantidad-this.arrayVencimineto[i].descuento)
                }
                return resultado;
            }
        },
        methods : {
            listarVencimiento (page,buscar,criterio){
                let me=this;
                var url=  '/reporte/vencimiento?page=' + page + '&buscar='+ buscar + '&criterio='+ criterio;
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    console.log(ingresos);
                    me.arrayVencimineto = respuesta.ingresos.data;
                    me.pagination= respuesta.pagination;
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            getIngresos(){
                let me=this;
                var url= '/dashboard';
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.ingresos = respuesta.ingresos;
                    //cargamos los datos del chart
                    me.loadIngresosBar();
                    me.loadIngresosLine();
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            getVentas(){
                let me=this;
                var url= '/dashboard';
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.ventas = respuesta.ventas;
                    //cargamos los datos del chart
                    me.loadVentasBar();
                    me.loadVentasLine();
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            loadIngresosBar(){
                let me=this;
                me.ingresos.map(function(x){
                    me.varMesIngreso.push(x.mes);
                    me.varTotalIngreso.push(x.total);
                });
                me.varIngreso=document.getElementById('ingresos').getContext('2d');

                me.charIngreso = new Chart(me.varIngreso, {
                    type: 'bar',
                    data: {
                        labels: me.varMesIngreso,
                        datasets: [{
                            label: 'Ingresos',
                            data: me.varTotalIngreso,
                            backgroundColor: 'rgba(0, 189, 82, 0.6)',
                            borderColor: 'rgba(0, 189, 82, 0.6)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            },
            loadVentasBar(){
                let me=this;
                me.ventas.map(function(x){
                    me.varMesVenta.push(x.mes);
                    me.varTotalVenta.push(x.total);
                });
                me.varVenta=document.getElementById('ventas').getContext('2d');

                me.charVenta = new Chart(me.varVenta, {
                    type: 'bar',
                    data: {
                        labels: me.varMesVenta,
                        datasets: [{
                            label: 'Ventas',
                            data: me.varTotalVenta,
                            backgroundColor: 'rgba(54, 162, 235, 0.6)',
                            borderColor: 'rgba(54, 162, 235, 0.6)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            },
            loadIngresosLine(){
                let me=this;
                me.varIngreso=document.getElementById('ingresosLine').getContext('2d');

                me.charIngreso = new Chart(me.varIngreso, {
                    type: 'line',
                    data: {
                        labels: me.varMesIngreso,
                        datasets: [{
                            label: 'Ingresos',
                            data: me.varTotalIngreso,
                            backgroundColor: 'rgba(0, 189, 82, 0.6)',
                            borderColor: 'rgba(0, 189, 82, 0.6)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            },
            loadVentasLine(){
                let me=this;
                me.varVenta=document.getElementById('ventasLine').getContext('2d');

                me.charVenta = new Chart(me.varVenta, {
                    type: 'line',
                    data: {
                        labels: me.varMesVenta,
                        datasets: [{
                            label: 'Ventas',
                            data: me.varTotalVenta,
                            backgroundColor: 'rgba(54, 162, 235, 0.6)',
                            borderColor: 'rgba(54, 162, 235, 0.6)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            }
        },
        mounted() {
            this.getIngresos();
            this.getVentas();
            this.listarVencimiento(1,this.buscar,this.criterio);
        }
    }
</script>
<style lang="scss">
    // .theme--dark.v-data-table  { background-color: #00f !important; }
</style>
