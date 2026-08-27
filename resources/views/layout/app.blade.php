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
        
    
       @yield('content')
        
    </main>
</body>
</html>