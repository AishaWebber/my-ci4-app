<!DOCTYPE html>
<html>
<head>
    <title>POS System - Customer Accounts</title>
</head>
<body>

<?= view('layouts/nav') ?>

<h1>Customer Accounts</h1>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= esc($customer['full_name']) ?></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>