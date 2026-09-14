<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 400px; }
        div { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input, textarea { width: 100%; padding: 8px; }
        button { padding: 8px 15px; background: #28a745; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>

    <h2>Add New Product</h2>
    <form action="<?= site_url('products/store'); ?>" method="POST">
        <div>
            <label>Product Name:</label>
            <input type="text" name="product_name" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description"></textarea>
        </div>
        <div>
            <label>Price:</label>
            <input type="number" step="0.01" name="price" required>
        </div>
        <div>
            <label>Quantity:</label>
            <input type="number" name="quantity" required>
        </div>
        <button type="submit">Save Product</button>
        <a href="<?= site_url('products'); ?>">Cancel</a>
    </form>

</body>
</html>