<!-- resources/views/productos/create.blade.php -->
@extends('layouts.admin')
@section('titulo', 'Registrar Nuevo Producto')
@section('contenido')
<div class="mb-3">
 <h1 class="h3 text-gray-800 mb-0">➕ Registrar Nuevo Producto</h1>
 <small class="text-muted">Ferretería La Bendición - Formulario de Alta</small>
</div>
<div class="card shadow-sm border-0 col-lg-8">
 <div class="card-header bg-primary text-white py-3">
 <h6 class="m-0 font-weight-bold"><i class="fas fa-file-invoice me-2"></i>Fich
a Técnica del Producto</h6>
 </div>
 <div class="card-body p-4">
 <form action="{{ route('productos.store') }}" method="POST">
 @csrf
 <div class="mb-3">
 <label class="form-label fw-bold">Nombre del Producto <span class="te
xt-danger">*</span></label>
 <input type="text" name="nombre" class="form-control @error('nombre')
is-invalid @enderror" value="{{ old('nombre') }}" placeholder="Ej: Taladro Percutor I
nalámbrico DeWalt 20V Max XR">
 @error('nombre')
 <div class="invalid-feedback">{{ $message }}</div>
 @enderror
 </div>
 <div class="mb-3">
 <label class="form-label fw-bold">Descripción / Especificaciones</lab
el>
 <textarea name="descripcion" class="form-control @error('descripcion'
) is-invalid @enderror" rows="3" placeholder="Detalles de potencia, voltaje, marca o
medidas">{{ old('descripcion') }}</textarea>
 @error('descripcion')
 <div class="invalid-feedback">{{ $message }}</div>
 @enderror
 </div>
 <div class="row">
 <div class="col-md-6 mb-3">
 <label class="form-label fw-bold">Precio Unitario en Lempiras (L.
) <span class="text-danger">*</span></label>
 <div class="input-group">
 <span class="input-group-text">L.</span>
 <input type="number" step="0.01" name="precio" class="form-co
ntrol @error('precio') is-invalid @enderror" value="{{ old('precio') }}" placeholder=
"0.00">
 @error('precio')
 <div class="invalid-feedback">{{ $message }}</div>
 @enderror
 </div>
 </div>
 <div class="col-md-6 mb-3">
 <label class="form-label fw-bold">Stock Inicial en Bodega <span c
lass="text-danger">*</span></label>
 <input type="number" name="stock" class="form-control @error('sto
ck') is-invalid @enderror" value="{{ old('stock') }}" placeholder="0">
 @error('stock')
 <div class="invalid-feedback">{{ $message }}</div>
 @enderror
 </div>
 </div>
 <hr class="my-4">
 <div class="d-flex justify-content-end gap-2">
 <a href="{{ route('productos.index') }}" class="btn btn-secondary">
 <i class="fas fa-times me-1"></i> Cancelar
 </a>
 <button type="submit" class="btn btn-primary">
    <i class="fas fa-save me-1"></i> Guardar en Inventario
 </button>
 </div>
 </form>
 </div>
</div>
@endsection