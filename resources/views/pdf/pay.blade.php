<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factura de Venta</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-slate-400">
    <div class="bg-white  w-120 h-200">
        <div class="container mx-auto py-8">
            <div class="header text-center mb-8">
                <br><br><br><br><br>
                <h1 class="text-3xl font-bold">Factura</h1>
                <img src="{{ asset('image/logoMB.png') }}" class="mx-auto my-4 w-40 h-auto" alt="Logo">
                
                <p class="mb-2"><b>Ginmasio | Villa Fátima</b></p>
                <p>CASA MATRIZ</p>
                <p>No. Punto de Venta 1</p>
                <p>Calle Guanay No 952 entre Calle Caranavi y Calle Guanay</p>
                <p>Telf.: 2311724</p>
                <p>La Paz - Bolivia</p>
            </div>
            <div class="absolute top-0 right-0 p-4 border border-gray-700">
                <div class="invoice-details">
                    <p>NIT: 1016747022</p>
                    <p>N° FACTURA: 16752</p>
                    <p>CÓDIGO DE AUTORIZACIÓN: 45919354A393D85D8AC31C C2AAA09489103637060B7E FB65AF02A8E74</p>
                </div>
            </div>
            <table id="invoice-table" class="table text-center w-full mb-8 border-black">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Descripción</th>
                        <th class="border px-4 py-2">Cantidad</th>
                        <th class="border px-4 py-2">Precio Unitario</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">{{ $pay->producto->title }}</td>
                        <td class="border px-4 py-2">1</td>
                        <td class="border px-4 py-2">{{ $pay->producto->precio }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">{{ $pay->member->tipo }}</td>
                        <td class="border px-4 py-2">1</td>
                        <td class="border px-4 py-2">{{ $pay->member->precio }}</td>
                    </tr>
                    <!-- Puedes agregar más filas según los productos comprados -->
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="border px-4 py-2 text-right">Sub Total:</td>
                        <td id="sub-total" class="border px-4 py-2"> {{ $pay->producto->precio }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="border px-4 py-2 text-right">Total Bs:</td>
                        <td id="total" class="border px-4 py-2">{{ $pay->producto->precio }}</td>
                    </tr>
                </tfoot>
            </table>
            <p class="footer text-sm">
                "ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAÍS, EL USO ILÍCITO SERÁ SANCIONADO PENALMENTE DE ACUERDO A LEY"<br>
                Ley N° 453: El proveedor debe exhibir certificaciones de habilitación o documentos que acrediten las capacidades u ofertas de servicios especializados.<br>
                Este documento es la Representación Gráfica de un Documento Fiscal
            </p>
        </div>
    </div>
    <script>
        // Calcula el total de la factura
        function calcularTotal() {
            let total = 0;
            document.querySelectorAll("#invoice-table tbody tr").forEach(row => {
                const precioUnitario = parseFloat(row.cells[1].innerText);
                const cantidad = parseInt(row.cells[2].innerText);
                const subtotal = precioUnitario * cantidad;
                total += subtotal;
            });
            document.getElementById("sub-total").innerText = total.toFixed(2);
            document.getElementById("total").innerText = total.toFixed(2);
        }

        // Llama a la función para calcular el total cuando se carga la página
        window.onload = calcularTotal;
    </script>
</body>
</html>
