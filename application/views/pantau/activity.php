<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/4.0.0/material-components-web.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.material.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.material.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                autoWidth: false,
                columnDefs: [{
                    targets: ['_all'],
                    className: 'mdc-data-table__cell'
                }]
            });
        });

        var RefreshTimerInterval = 1000;
        $(document).ready(function() {

            tampil_data_voter();

            function tampil_data_voter() {
                $.ajax({
                    type: 'ajax',
                    url: '<?= base_url('/pantau/data_log_voter') ?>',
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        var i;
                        var pw;
                        var status;
                        var no = 1;
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                                '<td>' + no++ + '</td>' +
                                '<td>' + data[i].nim + '</td>' +
                                '<td>' + data[i].nama + '</td>' +
                                '<td>' + data[i].ip_address + '</td>' +
                                '<td>' + data[i].browser + '</td>' +
                                '<td>' + data[i].sistem_operasi + '</td>' +
                                '<td>' + data[i].status + '</td>' +
                                '<td>' + data[i].time + '</td>' +
                                '</tr>';
                        }
                        $('#show_data').html(html);
                        setTimeout(tampil_data_voter, RefreshTimerInterval);

                    }

                });
            }

        });
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center my-3">
                <h2>Voter Activity</h2>
            </div>
            <div class="col-md-12 text-center mb-5">
                <div class="card">
                    <div class="card-body shadow ">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered mx-auto table-striped table-sm mdl-data-table" id="example">
                                <thead>
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">NAMA</th>
                                        <th scope="col">Ip Address</th>
                                        <th scope="col">Browser</th>
                                        <th scope="col">Sistem Operasi</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Waktu (WIB)</th>
                                    </tr>
                                </thead>
                                <tbody id="show_data">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>