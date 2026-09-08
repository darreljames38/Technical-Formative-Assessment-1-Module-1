<?= view('partials/header', ['title' => 'User Accounts']) ?>

<main class="container">
    <p class="eyebrow">Accounts</p>
    <h1>Users</h1>

    <p class="description">
        View the system users and their assigned roles.
    </p>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Role</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= esc($user['id']) ?></td>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['role']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<?= view('partials/footer') ?>