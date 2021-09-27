<style>
    * {
        padding: 0;
        margin: 0;
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

</style>
<body>
    <section>
        <div class="">
            <p class="text-title">Nombre de Empresa</p>
            <p class="text-subtitle">Dirección</p>
            <p class="text-subtitle">Email</p>
            <p class="text-subtitle">Teléfono</p>
            <p class="text-subtitle">Factura <span style="color: blue;">#000</span></p>
        </div>
        <div class="">
            <img src="https://i.imgur.com/Q4RUMPt.png">
        </div>
    </section>

    <section >
        <div style="display:flex; justify-content: space-between;">
            <div style="float-right">
                <div>
                    <p class="text-article">Cliente</p>
                    <hr>
                </div>
                <div class="">
                    <p class="">Nombre del cliente</p>
                    <p class="">DNI</p>
                    <p class="">Dirección</p>
                    <p class="">Telefono/Email</p>
                </div>
            </div>
    
            <div style="float-right">
                <div>
                    <p class="text-article">Envio a</p>
                    <hr>
                </div>
                <div class="">
                    <p>Nombre de contacto</p>
                    <p>Departamento</p>
                    <p>Dirección</p>
                    <p>Telefono</p>
                </div>
            </div>
    
            <div style="float-right">
                <p><b>Fecha</b> 00.00.0000</p>
                <p><b>Fecha Vencimiento</b> 00.00.0000</p>
            </div>
        </div>
    </section>

    <section>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Descripción</th>
                    <th scope="col">Unidades</th>
                    <th scope="col">Precio Unitario</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
        <div class="float-right">
            <div>
                <p>Total parcial <span class="float-right">0.00</span></p>
                <hr>
            </div>
            <div>
                <p>Descuento <span class="float-right">0.00</span></p>
                <hr>
            </div>
            <div>
                <p>Envio <span class="float-right">0.00</span></p>
                <hr>
            </div>
            <div>
                <p>Total factura <span class="float-right">0.00</span></p>
            </div>
        </div>
    </section>
</body>
