<!doctype html>
<html lang="en">
<!-- <meta http-equiv="refresh" content="1"> -->

<head>
    <title>Pantau Voter</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        thead {
            width: 100%;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        var a = '';
        var RefreshTimerInterval = 1000;
        $(document).ready(function() {

            tampil_data_voter(); //pemanggilan fungsi tampil voter.
            //fungsi tampil barang
            function tampil_data_voter() {
                $.ajax({
                    type: 'ajax',
                    url: '<?= base_url('/pantau/data_voter') ?>',
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        var i;
                        var pw;
                        var status;
                        var no = 1;
                        for (i = 0; i < data.length; i++) {
                            pw = data[i].set_pw;
                            if (pw == 1) {
                                pw = "<span class='btn btn-success py-0'>Sudah</span>";
                            } else {
                                pw = "<span class='text-danger'>Belum</span>";
                            }
                            status = data[i].status;
                            if (status == 1) {
                                status = "<span class='btn btn-success py-0'>Sudah</span>";
                            } else {
                                status = "<span class='text-danger'>Belum</span>";
                            }
                            html += '<tr>' +
                                '<td>' + no++ + '</td>' +
                                '<td>' + data[i].nim + '</td>' +
                                '<td>' + data[i].nama + '</td>' +
                                '<td>' + pw + '</td>' +
                                '<td>' + status + '</td>' +
                                '</tr>';
                        }
                        $('#show_data').html(html);
                        setTimeout(tampil_data_voter, RefreshTimerInterval);

                    }

                });
            }

            data_pw_sudah(); //pemanggilan fungsi tampil voter.
            //fungsi tampil barang
            function data_pw_sudah() {
                $.ajax({
                    type: 'ajax',
                    url: '<?= base_url('/pantau/data_pw/1') ?>',
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        html = data['sudah'];
                        $('#pw_sudah').html(html);
                        setTimeout(data_pw_sudah, RefreshTimerInterval);
                    }

                });
            }

            data_pw_belum(); //pemanggilan fungsi tampil voter.
            //fungsi tampil barang
            function data_pw_belum() {
                $.ajax({
                    type: 'ajax',
                    url: '<?= base_url('/pantau/data_pw/0') ?>',
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        html = data['belum'];
                        $('#pw_belum').html(html);
                        setTimeout(data_pw_belum, RefreshTimerInterval);
                    }

                });
            }

            data_status_sudah(); //pemanggilan fungsi tampil voter.
            //fungsi tampil barang
            function data_status_sudah() {
                $.ajax({
                    type: 'ajax',
                    url: '<?= base_url('/pantau/data_status/1') ?>',
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        html = data['sudah'];
                        $('#status_sudah').html(html);
                        setTimeout(data_status_sudah, RefreshTimerInterval);

                    }

                });

            }
            data_status_belum(); //pemanggilan fungsi tampil voter.

            function data_status_belum() {
                $.ajax({
                    type: 'ajax',
                    url: '<?= base_url('/pantau/data_status/0') ?>',
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        html = data['belum'];
                        a = html;
                        $('#status_belum').html(html);
                        setTimeout(data_status_belum, RefreshTimerInterval);
                    }

                });
            }

        });
    </script>
</head>

<body>
    <div class="container p-3">
        <div class="row">
            <div class="col-md-12 text-center mb-3">
                <h2 class="mb-0">Pantau Voter</h2>
                <a href="<?= base_url('pantau/activity') ?>">Voter Activity</a>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center mb-2">
                <div><b> Set Password </b></div>
                <span class="badge badge-success">Sudah <span id="pw_sudah"></span></span>
                <span class="badge badge-danger">Belum <span id="pw_belum"></span></span>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center mb-2">
                <div><b> Voting </b></div>
                <span class="badge badge-success">Sudah <span id="status_sudah"></span></span>
                <span class="badge badge-danger">Belum <span id="status_belum"></span></span>
            </div>
            <div class="col-md-3"></div>

            <div class="col-md-12 text-center mb-5">
                <div class="card">
                    <div class="card-body shadow ">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered mx-auto table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">NAMA</th>
                                        <th scope="col">Set password</th>
                                        <th scope="col">Voting</th>
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