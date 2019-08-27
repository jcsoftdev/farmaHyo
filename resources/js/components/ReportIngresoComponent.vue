<template>
        <main class="main">
            <div class="card">
                <div class="card-heading p-4">
                    <div class="mini-stat-icon text-center">
                        <i class="far fa-money-bill-alt bg-success text-white"></i>
                        <h5 class="font-20 text-center" v-text="'Total: '+compraIngresoTotal"></h5>
                    </div>
                    <div class="report text-center ">
                        <a href="/excelIngreso" class="btn black--text bold btn-warning">Descargar Excel</a>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-6 col-sm-4 col-md-3 col-xl-2" v-for="Ingreso in arrayIngreso" :key="Ingreso.miIdIngreso"> 
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-20 text-center" v-text="'LOTE NRO  '+Ingreso.lote"></h5>
                            </div>
                            <p class="cyan--text mt-4">Medicamento: <span class="lime--text" v-text="Ingreso.medicamento"></span></p>
                            <p class="cyan--text mt-4">Vencimiento: <span class="lime--text" v-text="Ingreso.fecha_vencimiento"></span></p>
                            <p class="cyan--text mt-4">Cantidad: <span class="lime--text" v-text="Ingreso.cantidad"></span></p>
                            <p class="cyan--text mt-4">Precio: <span class="lime--text" v-text="Ingreso.precio"></span></p>
                            <p class="cyan--text mt-4">Total: <span class="lime--text" v-text="Ingreso.precio * Ingreso.cantidad"></span></p>

                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </main>
</template>

<script>
    export default {
        props : ['ruta'],
        data (){
            return {
                arrayIngreso:[],
                arrayventa:[],
                compraIngresoTotal: 0
            }
        },
        components: {
            
        },
        computed:{

        },
        methods : {
            listarReporteIngresos(){
                var me = this;
                axios.get('/reporte/ingresos')
                .then(function (response) {
                    // handle success
                    console.log(response);
                    me.arrayIngreso=response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                });
            },
            ingresoTotal(){
                var me = this;
                axios.get('/reporte/ingresos/cantidad')
                .then(function (response) {
                    // handle success
                    console.log(response);
                    me.compraIngresoTotal=response.data[0].suma;
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
            this.listarReporteIngresos();
            this.ingresoTotal();
        }
    }
</script>
<style>

</style>
