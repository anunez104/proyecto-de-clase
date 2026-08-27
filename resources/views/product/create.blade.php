@extends('layout.app')

@section('content')
<main class="container">
        <div class="card">
            <h2>Publicar Nuevo Vehículo</h2>
            <form action="/product" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nombre / Modelo del Vehículo</label>
                    <input type="text" name="name" required placeholder="Ej. Mustang GT 2024">
                </div>
                <div class="form-group">
                    <label>Precio ($)</label>
                    <input type="number" name="price" required placeholder="45000">
                </div>
                <div class="form-group">
                    <label>Descripción</label>
                    <textarea name="description" rows="4" placeholder="Detalles del vehículo, motor, kilometraje..."></textarea>
                </div>
                <button type="submit" class="btn">Guardar Vehículo</button>
            </form>
        </div>
    </main>
@endsection