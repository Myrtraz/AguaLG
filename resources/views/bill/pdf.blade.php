<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    body {
        margin: 3%;
        padding: 3%;
    }

    .text-title {
        font-size: 18px;
        color: blue;
    }

    .text-subtitle {
        font-size: 16px;
    }

    .text-article {
        font-size: 16px;
        color: blue;
    }

    .table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 5px 0px 1px 0px;
    }

    .th,
    .td {
        text-align: left;
        vertical-align: top;
        width: 30%;
        height: 150px;
        margin: 2px 2px 2px 2px;
        padding: 2px 2px 2px 2px;
    }

    h2 {
        text-align: center;
        font-size: 18px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: white;
        padding: 30px 0;
    }

    /* Table Styles */

    .table-wrapper {
        margin: 10px 50px 20px;
        box-shadow: 0px 35px 50px rgba(0, 0, 0, 0.2);
    }

    .fl-table {
        border-radius: 5px;
        font-size: 12px;
        font-weight: normal;
        border: none;
        border-collapse: collapse;
        width: 100%;
        max-width: 100%;
        white-space: nowrap;
        background-color: white;
    }

    .fl-table td,
    .fl-table th {
        padding: 8px;
    }

    .fl-table td {
        border-right: 1px solid #f8f8f8;
        font-size: 12px;
    }

    .fl-table thead th {
        color: #ffffff;
        background: #4FC3A1;
    }


    .fl-table thead th:nth-child(odd) {
        color: #ffffff;
        background: #324960;
    }

    .fl-table tr:nth-child(even) {
        background: #F8F8F8;
    }

    /* Responsive */

    @media (max-width: 767px) {
        .fl-table {
            display: block;
            width: 100%;
        }

        .table-wrapper:before {
            content: "Scroll horizontally >";
            display: block;
            text-align: right;
            font-size: 11px;
            color: white;
            padding: 0 0 10px;
        }

        .fl-table thead,
        .fl-table tbody,
        .fl-table thead th {
            display: block;
        }

        .fl-table thead th:last-child {
            border-bottom: none;
        }

        .fl-table thead {
            float: left;
        }

        .fl-table tbody {
            width: auto;
            position: relative;
            overflow-x: auto;
        }

        .fl-table td,
        .fl-table th {
            padding: 20px .625em .625em .625em;
            height: 60px;
            vertical-align: middle;
            box-sizing: border-box;
            overflow-x: hidden;
            overflow-y: auto;
            width: 120px;
            font-size: 13px;
            text-overflow: ellipsis;
        }

        .fl-table thead th {
            text-align: left;
            border-bottom: 1px solid #f7f7f9;
        }

        .fl-table tbody tr {
            display: table-cell;
        }

        .fl-table tbody tr:nth-child(odd) {
            background: none;
        }

        .fl-table tr:nth-child(even) {
            background: transparent;
        }

        .fl-table tr td:nth-child(odd) {
            background: #F8F8F8;
            border-right: 1px solid #E6E4E4;
        }

        .fl-table tr td:nth-child(even) {
            border-right: 1px solid #E6E4E4;
        }

        .fl-table tbody td {
            display: block;
            text-align: center;
        }
    }

</style>
<body>
    <section>
        <table class="table">
            <thead>
                <tr>
                    <td class="td">
                        <div class="">
                            <p class=" text-title">Agualogic</p>
                            <p class="text-subtitle">Dirección</p>
                            <p class="text-subtitle">{{ env('MAIL_FROM_ADDRESS') }}</p>
                            <p class="text-subtitle">Teléfono</p>
                            <p class="text-subtitle">Factura <span style="color: blue;">#000</span></p>
                        </div>
                    </td>
                    <td class="td">
                        <div>
                            <br>
                        </div>
                    </td>
                    <td class="td">
                        <div style="">
                            <img src=" https://i.imgur.com/Q4RUMPt.png">
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
    </section>

    <section>
        <table class="table">
            <thead>
                <tr>
                    <td class="td">
                        <div>
                            <p class="text-article">Cliente</p>
                            <hr style="width: 86%; margin-bottom: 6px;">
                        </div>
                        <div class="">
                        <p style=" margin-bottom: 6px;">{{ $user->first_name }} {{ $user->last_name }}</p>
                            <p style="margin-bottom: 6px;">{{ $user->document }}</p>
                            <p style="margin-bottom: 6px;">{{ $address->country }}/{{ $address->city }}/{{ $address->street_address }}</p>
                            <p style="margin-bottom: 6px;">{{ $user->phone }}/{{ $user->email }}</p>
                        </div>
                    </td>
                    <td class="td">
                        <div>
                            <p class="text-article">Envio a</p>
                            <hr style="width: 86%; margin-bottom: 6px;">
                        </div>
                        <div class="">
                            <p style=" margin-bottom: 6px;">Nombre de contacto
                            </p>
                            <p style="margin-bottom: 6px;">Departamento</p>
                            <p style="margin-bottom: 6px;">Dirección</p>
                            <p style="margin-bottom: 6px;">Telefono</p>
                        </div>
                    </td>
                    <td class="td">
                        <div>
                            <br>
                            <p style="margin-bottom: 10px;"><b>Fecha</b> {{ $user->created_at->format('y,m,d')}}</p>
                            <p><b>Fecha <br>Vencimiento</b> {{ $user->created_at->format('y,m,d')}}</p>
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
    </section>

    <section>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Unidades</th>
                        <th>Precio Unitario</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($myOrder as $order)
                        <tr style="border-bottom: 1px solid #cecece;">
                            <td style="border-right: 1px solid #cecece">{{ $order->product_name }} ({{ $order->product_type }})</td>
                            <td style="border-right: 1px solid #cecece">{{ $order->product_qty }}</td>
                            <td style="border-right: 1px solid #cecece">$ {{ $order->product_price }}</td>
                            <td style="border-right: 1px solid #cecece">$ {{ $order->product_price*$order->product_qty }}</td>
                        </tr>
                    @endforeach
                <tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <div style="padding: 10px; margin-bottom: 4px;">
                                    <span style="text-align: right;">Total parcial</span>
                                </div>
                                <div style="padding: 10px; margin-bottom: 4px;">
                                    <span style="text-align: right;">Descuento</span>
                                </div>
                                <div style="padding: 10px; margin-bottom: 4px;">
                                    <span style="text-align: right;">Envio</span>
                                </div>
                                <div style="padding: 10px; margin-bottom: 4px;">
                                    <span style="text-align: right !important;">Total factura</span>
                                </div>
                            </td>
                            <td>
                                <div style="padding: 10px; margin-bottom: 4px;">
                                    <span style=""> 0.00</span>
                                </div>
                                <div style="padding: 10px; margin-bottom: 4px;">
                                    <span style=""> 0.00</span>
                                </div>
                                <div style="padding: 10px; margin-bottom: 4px;">
                                    <span style=""> 0.00</span>
                                </div>
                                <div style="padding: 10px; margin-bottom: 4px;">
                                    <span style=""> $ 0.00</span>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
            </table>
        </div>
    </section>
</body>
