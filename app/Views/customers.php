<?= view('partials/header', ['title' => 'Customer Accounts']) ?>

<main class="container">
    <p class="eyebrow">Accounts</p>
    <h1>Customers</h1>

    <p class="description">
        View the customer records currently stored in the temporary array.
    </p>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= esc($customer['id']) ?></td>
                        <td><?= esc($customer['name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<?= view('partials/footer') ?>