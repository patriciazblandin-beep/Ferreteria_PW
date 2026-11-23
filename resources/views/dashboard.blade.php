@extends('layouts.admin')

@section('titulo', 'Dashboard Gerencial')

@section('contenido')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard Gerencial - AGROVALLE HONDURAS</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Indicadores Clave de Rendimiento (KPIs)</li>
    </ol>

    <!-- Tarjetas de Indicadores Clave (Parte 7 del Examen) -->
    <div class="row">
        <!-- Tarjeta 1: Total de Insumos -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="small text-uppercase fw-bold">Insumos en Catálogo</div>
                            <div class="fs-4 fw-bold">0</div> <!-- Aquí luego irá la variable dinámica -->
                        </div>
                        <i class="fas fa-boxes-stacked fa-2x text-white-50"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link text-decoration-none" href="{{ route('insumos.index') }}">Ver Detalles</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!-- Tarjeta 2: Proveedores Activos -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="small text-uppercase fw-bold">Proveedores Activos</div>
                            <div class="fs-4 fw-bold">0</div>
                        </div>
                        <i class="fas fa-truck-field fa-2x text-white-50"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link text-decoration-none" href="{{ route('proveedores.index') }}">Ver Detalles</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!-- Tarjeta 3: Total de Empleados en Nómina -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="small text-uppercase fw-bold">Empleados en Nómina</div>
                            <div class="fs-4 fw-bold">0</div>
                        </div>
                        <i class="fas fa-users-gear fa-2x text-white-50"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link text-decoration-none" href="{{ route('empleados.index') }}">Ver Detalles</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!-- Tarjeta 4: Valor Total del Inventario -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="small text-uppercase fw-bold">Valor Inventario (L.)</div>
                            <div class="fs-5 fw-bold">L. 0.00</div>
                        </div>
                        <i class="fas fa-coins fa-2x text-white-50"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <span class="small text-white">Cálculo en Lempiras</span>
                    <div class="small text-white"><i class="fas fa-chart-line"></i></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mensaje de bienvenida corporativa -->
    <div class="card shadow-sm mb-4 border-0">
        <div class="card-body p-4">
            <h4 class="text-success"><i class="fas fa-seedling me-2"></i>Bienvenido al Sistema Central de Operaciones</h4>
            <p class="text-muted mb-0">Utiliza el menú lateral izquierdo para navegar de forma segura entre el Catálogo de Insumos, la Red de Proveedores Agrícolas y la Gestión de Personal Técnico de Agrovalle Honduras.</p>
        </div>
    </div>
</div>
@endsection