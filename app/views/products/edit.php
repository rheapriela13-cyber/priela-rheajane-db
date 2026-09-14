<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 400px; }
        div { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, textarea { width: 100%; padding: 8px; }
        button { padding: 8px 15px; background: #ffc107; color: black; border: none; cursor: pointer; }
    </style>
</head>
<body>

        <?php $product = $product ?? []; ?>
    <h2>Edit Product</h2>
    <form action="<?= site_url('products/update/' . ($product['id'] ?? '')); ?>" method="POST">
        <div>
            <label>Product Name:</label>
            <input type="text" name="product_name" value="<?= htmlspecialchars($product['product_name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description"><?= htmlspecialchars($product['description'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
        </div>
        <div>
            <label>Price:</label>
            <input type="number" step="0.01" name="price" value="<?= htmlspecialchars($product['price'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div>
            <label>Quantity:</label>
            <input type="number" name="quantity" value="<?= htmlspecialchars($product['quantity'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <button type="submit">Update Product</button>
        <a href="<?= site_url('products'); ?>">Cancel</a>
    </form>

</body>
</html>