<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .btn { padding: 6px 12px; text-decoration: none; border-radius: 4px; color: white; }
        .btn-add { background-color: #28a745; }
        .btn-edit { background-color: #ffc107; color: black; }
        .btn-delete { background-color: #dc3545; }
    </style>
</head>
<body>

    <h2>Product Management</h2>
    <?php if (!empty($can_manage_products)): ?>
        <a href="<?= site_url('products/create'); ?>" class="btn btn-add">+ Add New Product</a>
    <?php endif; ?>
    <a href="<?= site_url('auth/logout'); ?>" class="btn btn-delete" style="float: right;">Logout</a>

    <table>
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
    </table>

</body>
</html>