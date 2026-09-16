<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Inter:wght@400;500;600&display=swap');

        :root {
            --bg: #F6F4FB;
            --surface: #FFFFFF;
            --ink: #241F2E;
            --muted: #6F6580;
            --line: #E5DFF2;
            --primary: #6D3FC0;
            --primary-dark: #522F94;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--ink);
            font-family: 'Inter', -apple-system, sans-serif;
            font-size: 15px;
            padding: 56px 24px;
        }

        h1 {
            font-family: 'Fraunces', serif;
            font-weight: 600;
            font-size: 24px;
            margin: 0;
        }

        a { color: var(--primary); text-decoration: none; }
        a:hover { color: var(--primary-dark); }

        .card-form {
            max-width: 440px;
            margin: 40px auto 0;
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 36px;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 500;
            color: var(--muted);
            margin: 18px 0 6px;
        }
        label:first-of-type { margin-top: 0; }

        input, textarea {
            width: 100%;
            padding: 11px 14px;
            border: 1px solid var(--line);
            border-radius: 8px;
            font-family: inherit;
            font-size: 14px;
            color: var(--ink);
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(109, 63, 192, 0.12);
        }

        textarea { resize: vertical; min-height: 84px; }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 18px;
            border-radius: 8px;
            font-family: inherit;
            font-size: 14px;
            font-weight: 500;
            border: none;
            cursor: pointer;
        }

        .btn-primary { background: var(--primary); color: #fff; }
        .btn-primary:hover { background: var(--primary-dark); }

        .form-actions {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-top: 28px;
        }

        .form-actions .btn-primary { flex: 1; }
    </style>
</head>
<body>
    <div class="card-form">
        <h1>Edit product</h1>
        <form action="/products/update/<?= $product['id'] ?>" method="POST">
            <label>Name</label>
            <input type="text" name="product_name" value="<?= htmlspecialchars($product['product_name']) ?>" required>

            <label>Description</label>
            <textarea name="description"><?= htmlspecialchars($product['description']) ?></textarea>

            <label>Price</label>
            <input type="number" step="0.01" name="price" value="<?= $product['price'] ?>" required>

            <label>Quantity</label>
            <input type="number" name="quantity" value="<?= $product['quantity'] ?>" required>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update product</button>
                <a href="/products">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>