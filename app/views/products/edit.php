<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product - Product System</title>
    <style>
        :root { --pink: #c9828d; --nude: #f4e9df; --cream: #fffaf5; --coffee: #4c3028; --muted: #876e63; --line: #e3cec1; }
        * { box-sizing: border-box; } body { margin: 0; padding: 34px; font-family: 'Trebuchet MS', sans-serif; color: var(--coffee); background: var(--nude); }
        .card { width: min(100%, 600px); margin: 30px auto; padding: 38px; border: 1px solid var(--line); border-radius: 16px; background: var(--cream); box-shadow: 0 12px 30px rgba(76,48,40,.08); }
        .eyebrow { color: var(--pink); font-size: 12px; font-weight: bold; letter-spacing: 2px; text-transform: uppercase; } h2 { margin: 8px 0 26px; font-family: Georgia, serif; font-size: 34px; font-weight: normal; }
        .field { margin-bottom: 18px; } label { display: block; margin-bottom: 7px; color: var(--muted); font-size: 13px; font-weight: bold; } input, textarea { width: 100%; padding: 13px 14px; border: 1px solid var(--line); border-radius: 8px; background: white; color: var(--coffee); font: inherit; } textarea { min-height: 110px; resize: vertical; } input:focus, textarea:focus { outline: 0; border-color: var(--pink); }
        .form-actions { display: flex; gap: 10px; margin-top: 26px; } button, .cancel { padding: 12px 16px; border: 0; border-radius: 8px; font: inherit; font-weight: bold; text-decoration: none; cursor: pointer; } button { background: var(--coffee); color: white; } .cancel { border: 1px solid var(--line); color: var(--coffee); }
        @media (max-width: 600px) { body { padding: 14px; } .card { padding: 26px 20px; } }
    </style>
</head>
<body><main class="card">
        <?php $product = $product ?? []; ?>
    <div class="eyebrow">Inventory</div><h2>Edit product</h2>
    <form action="<?= site_url('products/update/' . ($product['id'] ?? '')); ?>" method="POST">
        <div class="field">
            <label>Product Name:</label>
            <input type="text" name="product_name" value="<?= htmlspecialchars($product['product_name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div class="field">
            <label>Description:</label>
            <textarea name="description"><?= htmlspecialchars($product['description'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
        </div>
        <div class="field">
            <label>Price:</label>
            <input type="number" step="0.01" name="price" value="<?= htmlspecialchars($product['price'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div class="field">
            <label>Quantity:</label>
            <input type="number" name="quantity" value="<?= htmlspecialchars($product['quantity'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div class="form-actions"><button type="submit">Update product</button>
        <a class="cancel" href="<?= site_url('products'); ?>">Cancel</a></div>
    </form>
    </main>
</body>
</html>