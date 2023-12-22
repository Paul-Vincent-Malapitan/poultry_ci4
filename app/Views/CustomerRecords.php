<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Records</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 5rem;
        }

        .table-container {
            position: relative;
            margin-top: 1rem;
        }

        .btn-primary, .btn-secondary {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 10px;
        }

        .btn-primary {
            background-color: #4CAF50;
            color: white;
        }

        .btn-secondary {
            background-color: #007bff;
            color: white;
        }

    </style>
</head>
<body>

    <div class="container">
        <div class="table-container mt-4">
            <a class="btn btn-secondary mb-3" href="CustomerHome">Back</a>
            <a class="btn btn-primary mb-3" href="addrecords">Add Customer</a> <!-- Add this line -->

            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customers as $customer) : ?>
                        <tr>
                            <td><?= $customer['id'] ?></td>
                            <td><?= $customer['name'] ?></td>
                            <td><?= $customer['email'] ?></td>
                            <td><?= $customer['contactNo'] ?></td>
                            <td><?= $customer['gender'] ?></td>
                            <td class="text-center action-buttons">
                                <a href="edit/<?= $customer['id'] ?>">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editCustomerModal" data-customer-id="<?= $customer['id'] ?>">
                                        <i class="fas fa-edit" style="color: black;"></i> Edit
                                    </button>
                                </a>

                                <a href="delete/<?= $customer['id'] ?>">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editCustomerModal" data-customer-id="<?= $customer['id'] ?>">
                                        <i class="fas fa-edit" style="color: black;"></i> Delete
                                    </button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
