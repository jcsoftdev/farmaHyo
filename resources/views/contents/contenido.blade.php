@extends('templates.index')

@section('contenido')
    <template v-if="menu==0">
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates blanditiis adipisci, recusandae, amet quam asperiores quis laudantium voluptate itaque, sunt sequi. Atque expedita enim, odit ab corporis itaque veniam recusandae? 0</h1>
    </template>
    <template v-if="menu==1">
        <producto-component></producto-component>
    </template>
    <template v-if="menu==2">
        <medicamento-component></medicamento-component>
    </template>
    <template v-if="menu==3">
        <presentacion-component></presentacion-component>
    </template>
    <template v-if="menu==4">
        <concentracion-component></concentracion-component>
    </template>
    <template v-if="menu==5">
        <laboratorio-component></laboratorio-component>
    </template>
    <template v-if="menu==6">
        <user-component></user-component>
    </template>
    <template v-if="menu==7">
        <reporte-c></reporte-c>
    </template>
    <template v-if="menu==17">
        <reporte-v></reporte-v>
    </template>
    <template v-if="menu==8">
        <venta-component></venta-component>
    </template>
    <template v-if="menu==9">
            <cliente-component></cliente-component>
        
    </template>
    <template v-if="menu==10">
        <ingreso-component></ingreso-component>
    </template>
    <template v-if="menu==11">
         <proveedor-component></proveedor-component>
    </template>
            
            {{-- <example-component></example-component> --}}
            

@endsection