@extends('layout.app')

@section('content')

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
@endsection