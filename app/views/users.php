<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users - Product System</title>
    <style>
        :root { --pink: #c9828d; --nude: #f4e9df; --cream: #fffaf5; --coffee: #4c3028; --muted: #876e63; --line: #e3cec1; }
        * { box-sizing: border-box; }
        body { margin: 0; padding: 34px; font-family: 'Trebuchet MS', sans-serif; color: var(--coffee); background: var(--nude); }
        .page { max-width: 1000px; margin: auto; }
        .eyebrow { color: var(--pink); font-size: 12px; font-weight: bold; letter-spacing: 2px; text-transform: uppercase; }
        h2 { margin: 8px 0 28px; font-family: Georgia, serif; font-size: 36px; font-weight: normal; }
        .table-wrap { overflow-x: auto; border: 1px solid var(--line); border-radius: 14px; background: var(--cream); box-shadow: 0 12px 30px rgba(76, 48, 40, .08); }
        table { width: 100%; min-width: 680px; border-collapse: collapse; }
        th, td { padding: 16px 18px; border-bottom: 1px solid var(--line); text-align: left; }
        th { color: var(--muted); background: #f9f0e9; font-size: 11px; letter-spacing: 1px; text-transform: uppercase; }
        tr:last-child td { border-bottom: 0; }
        td { font-size: 14px; }
        @media (max-width: 640px) { body { padding: 22px 14px; } h2 { font-size: 30px; } }
    </style>
</head>
<body><main class="page">
    <div class="eyebrow">Directory</div><h2>User records</h2>
    <div class="table-wrap"><table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (($users ?? []) as $user): ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['first_name']; ?></td>
                <td><?= $user['last_name']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= $user['username']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table></div>
</main>
</body>
</html>