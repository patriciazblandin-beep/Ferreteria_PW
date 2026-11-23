<!-- resources/views/productos/edit.blade.php -->
@extends('layouts.admin')
@section('titulo', 'Editar Producto')
@section('contenido')
<div class="mb-3">
 <h1 class="h3 text-gray-800 mb-0">✏️ Editar Producto</h1>
 <small class="text-muted">Modificando: <strong>{{ $producto->nombre }}</strong> (
ID: {{ $producto->id }})</small>
</div>
<div class="card shadow-sm border-0 col-lg-8">
 <div class="card-header bg-warning text-dark py-3">
 <h6 class="m-0 font-weight-bold"><i class="fas fa-edit me-2"></i>Actualizar I
nformación Técnica</h6>
 </div>
 <div class="card-body p-4">
 <form action="{{ route('productos.update', $producto) }}" method="POST">
 @csrf
 @method('PUT')
 <div class="mb-3">
    <label class="form-label fw-bold">Nombre del Producto <span class="te
xt-danger">*</span></label>
 <input type="text" name="nombre" class="form-control @error('nombre')
is-invalid @enderror" value="{{ old('nombre', $producto->nombre) }}">
 @error('nombre')
 <div class="invalid-feedback">{{ $message }}</div>
 @enderror
 </div>
 <div class="mb-3">
 <label class="form-label fw-bold">Descripción / Especificaciones</lab
el>
 <textarea name="descripcion" class="form-control @error('descripcion'
) is-invalid @enderror" rows="3">{{ old('descripcion', $producto->descripcion) }}</te
xtarea>
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
ntrol @error('precio') is-invalid @enderror" value="{{ old('precio', $producto->preci
o) }}">
 @error('precio')
 <div class="invalid-feedback">{{ $message }}</div>
 @enderror
 </div>
</div>
 <div class="col-md-6 mb-3">
 <label class="form-label fw-bold">Stock en Bodega <span class="te
xt-danger">*</span></label>
 <input type="number" name="stock" class="form-control @error('sto
ck') is-invalid @enderror" value="{{ old('stock', $producto->stock) }}">
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
 <button type="submit" class="btn btn-success">
 <i class="fas fa-sync me-1"></i> Guardar Cambios
 </button>
 </div>
 </form>
 </div>
</div>
@endsection