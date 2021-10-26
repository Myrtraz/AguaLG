@extends('layouts.adminPanel')
@section('body')
    <!-- SmartPhone -->
    <section class="py-4 d-block d-sm-block d-md-none">
        <div class="container">
            <div class="">
                <div class="col-md-4 mb-2">
                    <div style="background-color: #4e4376; padding: 20px;">
                        <span class="text-white">Total Orders</span><br>
                        <span class="text-white">Last year expenses</span>
                        <span class="float-right text-white" style="font-size: 24px;">1000</span>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div style="background-color: #30c7ec; padding: 20px;">
                        <span class="text-white">Clients</span><br>
                        <span class="text-white">Total Clients Profit</span>
                        <span class="float-right text-white" style="font-size: 24px;">1000</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="background-color: #3cba92; padding: 20px;">
                        <span class="text-white">Followers</span><br>
                        <span class="text-white">People Interested</span>
                        <span class="float-right text-white" style="font-size: 24px;">1000</span>
                    </div>
                </div>
            </div>

            <canvas id="myChart" width="400" height="400" class="mb-4 my-4"></canvas>

            <div class="">
                <div class="col-md-4 mb-2">
                    <div class="shadow p-3 mb-5 bg-white rounded" style="padding: 20px;">
                        <span>Total Orders</span><br>
                        <span>Last year expenses</span>
                        <span class="float-right" style="font-size: 24px; color:green;">1000</span>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="shadow p-3 mb-5 bg-white rounded" style="padding: 20px;">
                        <span>Clients</span><br>
                        <span>Total Clients Profit</span>
                        <span class="float-right" style="font-size: 24px; color:yellow;">$10M</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shadow p-3 mb-5 bg-white rounded" style="padding: 20px;">
                        <span>Followers</span><br>
                        <span>People Interested</span>
                        <span class="float-right" style="font-size: 24px; color:red;">1000</span>
                    </div>
                </div>
        </div>
    </section>

    <section class="py-4 d-none d-sm-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <div style="background-color: #4e4376; padding: 20px;">
                        <span class="text-white">Total Orders</span><br>
                        <span class="text-white">Last year expenses</span>
                        <span class="float-right text-white" style="font-size: 24px;">1000</span>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div style="background-color: #30c7ec; padding: 20px;">
                        <span class="text-white">Clients</span><br>
                        <span class="text-white">Total Clients Profit</span>
                        <span class="float-right text-white" style="font-size: 24px;">1000</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="background-color: #3cba92; padding: 20px;">
                        <span class="text-white">Followers</span><br>
                        <span class="text-white">People Interested</span>
                        <span class="float-right text-white" style="font-size: 24px;">1000</span>
                    </div>
                </div>
            </div>

            <canvas id="myChart1" width="200" height="100" class="mb-4 my-4"></canvas>

            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="shadow p-3 mb-5 bg-white rounded" style="padding: 20px;">
                        <span>Total Orders</span><br>
                        <span>Last year expenses</span>
                        <span class="float-right" style="font-size: 24px; color:green;">1000</span>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="shadow p-3 mb-5 bg-white rounded" style="padding: 20px;">
                        <span>Clients</span><br>
                        <span>Total Clients Profit</span>
                        <span class="float-right" style="font-size: 24px; color:yellow;">$10M</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shadow p-3 mb-5 bg-white rounded" style="padding: 20px;">
                        <span>Followers</span><br>
                        <span>People Interested</span>
                        <span class="float-right" style="font-size: 24px; color:red;">1000</span>
                    </div>
                </div>
        </div>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Producto</th>
                <th scope="col">Stock Restantes</th>
                <th scope="col">Precio Unitario</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
              </tr>
            </tbody>
          </table>
    </section>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        </script>

    <script>
    var ctx = document.getElementById('myChart1').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
@endsection
