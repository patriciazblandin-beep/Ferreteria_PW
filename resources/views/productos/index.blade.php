@extends('layouts.admin')
@section('titulo', 'Catálogo de Inventario')
@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-3">
 <div>
 <h1 class="h3 text-gray-800 mb-0"> Inventario de Productos</h1>
 <small class="text-muted">Ferretería La Bendición - Control de Stock</small>
 </div>
 <a href="{{ route('productos.create') }}" class="btn btn-primary shadow-sm">
 <i class="fas fa-plus me-1"></i> Nuevo Producto
 </a>
</div>
<div class="card shadow-sm mb-4 border-0">
 <div class="card-header bg-dark text-white py-3">
 <h6 class="m-0 font-weight-bold"><i class="fas fa-table me-2"></i>Listado Gen
eral de Artículos</h6>
 </div>
 <div class="card-body">
 <div class="table-responsive">
 <table class="table table-bordered table-hover align-middle">
 <thead class="table-light">
 <tr>
 <th class="text-center" style="width: 60px;">ID</th>
 <th>Nombre del Producto</th>
 <th>Descripción Técnica</th>
 <th class="text-end">Precio Unitario</th>
 <th class="text-center">Stock</th>
 <th class="text-center" style="width: 150px;">Acciones</th>
 </tr>
 </thead>
 <tbody>
 @forelse ($productos as $producto)
 <tr>
 <td class="text-center text-muted fw-bold">{{ $producto->id }}</td>
 <td class="fw-bold text-dark">{{ $producto->nombre }}</td>
 <td class="text-muted">{{ $producto->descripcion ?? 'Sin especificaciones técnicas' }}</td>
 <td class="text-end fw-bold text-primary">L. {{ number_format($producto->precio, 2) }}</td>
 <td class="text-center">
 @if($producto->stock <= 5)
 <span class="badge bg-danger"><i class="fas fa-exclam
ation-triangle me-1"></i>{{ $producto->stock }} (Bajo)</span>
 @else
 <span class="badge bg-success">{{ $producto->stock }}
unidades</span>
 @endif
 </td>
 <td class="text-center">
 <a href="{{ route('productos.edit', $producto) }}" class=
"btn btn-warning btn-sm me-1" title="Editar Producto">
 <i class="fas fa-pen"></i>
 </a>
 <form action="{{ route('productos.destroy', $producto) }}
" method="POST" class="d-inline" onsubmit="return confirm('¿Confirma que desea elimin
ar este producto del inventario?')">
 @csrf
 @method('DELETE')
 <button type="submit" class="btn btn-danger btn-sm" t
itle="Eliminar Producto">
 <i class="fas fa-trash"></i>
 </button>
 </form>
 </td>
 </tr>
 @empty
 <tr>
 <td colspan="6" class="text-center text-muted py-5">
 <i class="fas fa-box-open fa-3x mb-3 text-secondary d-blo
ck"></i>
 No hay productos registrados en el inventario. Haz clic e
n <strong>Nuevo Producto</strong> para comenzar.
 </td>
 </tr>
 @endforelse
 </tbody>
 </table>
 </div>
 <div class="d-flex justify-content-end mt-3">
 {{ $productos->links() }}
 </div>
 </div>
</div>
@endsection