<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products - Product System</title>
    <style>
        :root { --pink: #c9828d; --nude: #f4e9df; --cream: #fffaf5; --coffee: #4c3028; --muted: #876e63; --line: #e3cec1; }
        * { box-sizing: border-box; }
        body { margin: 0; padding: 34px; font-family: 'Trebuchet MS', sans-serif; color: var(--coffee); background: var(--nude); }
        .page { max-width: 1120px; margin: auto; }
        .topbar { display: flex; justify-content: space-between; align-items: flex-end; gap: 20px; margin-bottom: 28px; }
        .eyebrow { color: var(--pink); font-size: 12px; font-weight: bold; letter-spacing: 2px; text-transform: uppercase; }
        h2 { margin: 8px 0 0; font-family: Georgia, serif; font-size: 36px; font-weight: normal; }
        .actions { display: flex; align-items: center; gap: 10px; }
        .btn { display: inline-block; padding: 10px 15px; border: 1px solid transparent; border-radius: 8px; text-decoration: none; font-size: 13px; font-weight: bold; }
        .btn-add { background: var(--pink); color: white; }
        .btn-edit { border-color: var(--line); background: var(--cream); color: var(--coffee); }
        .btn-delete { background: var(--coffee); color: white; }
        .btn:hover { opacity: .82; }
        .table-wrap { overflow-x: auto; border: 1px solid var(--line); border-radius: 14px; background: var(--cream); box-shadow: 0 12px 30px rgba(76, 48, 40, .08); }
        table { width: 100%; border-collapse: collapse; min-width: 700px; }
        th, td { padding: 16px 18px; border-bottom: 1px solid var(--line); text-align: left; }
        th { color: var(--muted); background: #f9f0e9; font-size: 11px; letter-spacing: 1px; text-transform: uppercase; }
        tr:last-child td { border-bottom: 0; }
        td { font-size: 14px; }
        td:first-child { color: var(--muted); }
        .empty { padding: 34px; color: var(--muted); text-align: center; }
        @media (max-width: 640px) { body { padding: 22px 14px; } .topbar { align-items: flex-start; flex-direction: column; } h2 { font-size: 30px; } .actions { width: 100%; } .actions .btn { flex: 1; text-align: center; } }
    </style>
</head>
<body>
<main class="page">
    <div class="topbar">
        <div><div class="eyebrow">Inventory</div><h2>Products</h2></div>
        <div class="actions">
            <?php if (!empty($can_manage_products)): ?><a href="<?= site_url('products/create'); ?>" class="btn btn-add">+ Add product</a><?php endif; ?>
            <a href="<?= site_url('auth/logout'); ?>" class="btn btn-delete">Log out</a>
        </div>
    </div>
    <div class="table-wrap"><table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <?php if (!empty($can_manage_products)): ?>
                    <th>Actions</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($products)): ?><tr><td colspan="6" class="empty">No products yet.</td></tr><?php endif; ?>
            <?php foreach (($products ?? []) as $product): ?>
            <tr>
                <td><?= $product['id']; ?></td>
                <td><?= $product['product_name']; ?></td>
                <td><?= $product['description']; ?></td>
                <td>₱<?= number_format($product['price'], 2); ?></td>
                <td><?= $product['quantity']; ?></td>
                <?php if (!empty($can_manage_products)): ?>
                    <td>
                        <a href="<?= site_url('products/edit/' . $product['id']); ?>" class="btn btn-edit">Edit</a>
                        <a href="<?= site_url('products/delete/' . $product['id']); ?>" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
                    </td>
                <?php endif; ?>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table></div>
</main>
</body>
</html>