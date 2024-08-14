<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/dataTables.dataTables.css') ?>">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-header text-center bg-dark text-light">
                    <?= heading("Users Details") ?>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="userTable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/dataTables.js') ?>"></script>
    <script>
        $("#userTable").DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "<?= site_url('dataTable/getUsers') ?>",
                type: "POST",
                dataType: "json"
            },
            columns: [{
                    "data": "id",
                    "name": "id"
                },
                {
                    "data": "name",
                    "name": "name"
                },
                {
                    "data": "age",
                    "name": "age"
                },
                {
                    "data": "email",
                    "name": "email"
                },
                {
                    "data": "city",
                    "name": "city"
                },
                {
                    "data": "address",
                    "name": "address"
                },
            ],
            columnDefs: [{
                target: [0],
                oderable: false,
                searchable: false
            }]
        })
    </script>
</body>

</html>