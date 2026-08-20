<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoMarket - Catálogo</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        .table-container {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
        }
        th {
            background-color: var(--dark);
            color: white;
        }
        tr:hover {
            background-color: #f9fafb;
        }
    </style>
</head>
<body>
    <header>
        <h1>AutoMarket</h1>
        <div>
            <a href="/" style="margin-right: 15px;">Inicio</a>
            <a href="/product/create" class="btn">+ Publicar Vehículo</a>
        </div>
    </header>

    <main class="container">
        <h2>Inventario General de Autos</h2>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Vehículo</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1</td>
                        <td><strong>Sports Car GT</strong></td>
                        <td>Deportivo</td>
                        <td style="color: var(--primary); font-weight: bold;">$45,000</td>
                        <td><a href="/product/1" class="btn" style="padding: 0.3rem 0.8rem; font-size: 0.85rem;">Ver Ficha</a></td>
                    </tr>
                    <tr>
                        <td>#2</td>
                        <td><strong>SUV Family 2024</strong></td>
                        <td>Camioneta</td>
                        <td style="color: var(--primary); font-weight: bold;">$32,000</td>
                        <td><a href="/product/2" class="btn" style="padding: 0.3rem 0.8rem; font-size: 0.85rem;">Ver Ficha</a></td>
                    </tr>
                    <tr>
                        <td>#3</td>
                        <td><strong>Sedan Executive</strong></td>
                        <td>Sedán</td>
                        <td style="color: var(--primary); font-weight: bold;">$28,000</td>
                        <td><a href="/product/3" class="btn" style="padding: 0.3rem 0.8rem; font-size: 0.85rem;">Ver Ficha</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>