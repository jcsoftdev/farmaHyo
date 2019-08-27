<template>
        <main class="main">
            <div class="ventas-hoy">
                <div class="card">
                    <div class="card-heading p-4">
                        <div class="mini-stat-icon text-center">
                            <i class="far fa-money-bill-alt bg-success text-white"></i>
                            <h5 class="font-20 text-center" v-text="'Total: '+ventaPrecioTotal"></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-6 col-sm-4 col-md-3 col-xl-2" v-for="Venta in arrayVenta" :key="Venta.miIdVenta"> 
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-briefcase-check bg-warning text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-20 text-center" v-text="'VENTA NRO  '+Venta.lote"></h5>
                            </div>
                            <p class="cyan--text mt-4">Medicamento: <span class="lime--text" v-text="Venta.medicamento"></span></p>
                            <p class="cyan--text mt-4">Descuento: <span class="lime--text" v-text="Venta.descuento"></span></p>
                            <p class="cyan--text mt-4">Cantidad: <span class="lime--text" v-text="Venta.cantidad"></span></p>
                            <p class="cyan--text mt-4">Precio: <span class="lime--text" v-text="Venta.precio"></span></p>
                            <p class="cyan--text mt-4">Total: <span class="light-green--text font-20" v-text="'S/ ' + Venta.precio * Venta.cantidad"></span></p>
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
                arrayVenta:[],
                // arrayventa:[],
                ventaPrecioTotal: 0
            }
        },
        components: {
            
        },
        computed:{

        },
        methods : {
           
            listarReporteVentas(){
                var me = this;
                axios.get('/reporte/ventas')
                .then(function (response) {
                    // handle success
                    console.log(response);
                    me.arrayVenta=response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                });
            },
            getVentaTotal(){
                var me = this;
                axios.get('/reporte/ventas/cantidad')
                .then(function (response) {
                    // handle success
                    console.log(response);
                    me.ventaPrecioTotal=response.data[0].suma;
                    // me.arrayVenta=response.data;
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
            this.listarReporteVentas();
            this.getVentaTotal();
        }
    }
</script>
<style>

</style>
