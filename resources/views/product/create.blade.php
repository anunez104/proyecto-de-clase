<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoMarket - Publicar Vehículo</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>AutoMarket</h1>
        <a href="/product">← Volver al catálogo</a>
    </header>

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
</body>
</html>