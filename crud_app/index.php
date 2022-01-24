<?php

include('function.php');

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="https://www.haegi.org/jstable/css/jstable.css" />

        <script src="https://www.haegi.org/jstable/js/jstable.min.js" type="text/javascript"></script>

        <title>Vanill JavaScript DataTables - Server-side Processing</title>
    </head>
    <body>

        <div class="container">
            <h1 class="mt-5 mb-5 text-center text-success"><b>Vanill JavaScript DataTables - Server-side Processing in PHP</b></h1>

            <div class="card">
                <div class="card-header">Vanilla JavaScript DataTables</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="customer_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php echo fetch_top_five_data($connect); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>

new JSTable('#customer_table', {
    serverSide:true,
    deferLoading : <?php echo count_all_data($connect); ?>,
    ajax : 'fetch.php'
});

</script>