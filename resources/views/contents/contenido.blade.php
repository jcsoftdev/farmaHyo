@extends('templates.index')

@section('contenido')
    <template v-if="menu==0">
        
        <escritorio-v></escritorio-v>
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