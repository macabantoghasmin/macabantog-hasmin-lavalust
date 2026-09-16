<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Products</title>
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
            --danger: #B33951;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--ink);
            font-family: 'Inter', -apple-system, sans-serif;
            font-size: 15px;
            line-height: 1.5;
            padding: 56px 24px;
        }

        h1 {
            font-family: 'Fraunces', serif;
            font-weight: 600;
            font-size: 28px;
            letter-spacing: -0.01em;
            margin: 0;
        }

        a { color: var(--primary); text-decoration: none; }
        a:hover { color: var(--primary-dark); }

        .page { max-width: 880px; margin: 0 auto; }

        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 28px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 10px 18px;
            border-radius: 8px;
            font-family: inherit;
            font-size: 14px;
            font-weight: 500;
            border: 1px solid transparent;
            cursor: pointer;
            transition: background-color 0.15s ease, border-color 0.15s ease;
        }

        .btn-primary { background: var(--primary); color: #fff; }
        .btn-primary:hover { background: var(--primary-dark); color: #fff; }

        .btn-ghost { background: transparent; border-color: var(--line); color: var(--ink); }
        .btn-ghost:hover { border-color: var(--primary); color: var(--primary); }

        .btn-danger { background: transparent; border-color: var(--line); color: var(--danger); }
        .btn-danger:hover { background: var(--danger); border-color: var(--danger); color: #fff; }

        .table-card {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 14px;
            overflow: hidden;
        }

        table { width: 100%; border-collapse: collapse; }

        thead th {
            text-align: left;
            font-weight: 500;
            font-size: 13px;
            color: var(--muted);
            padding: 14px 20px;
            border-bottom: 1px solid var(--line);
        }

        tbody td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--line);
            vertical-align: middle;
        }

        tbody tr:last-child td { border-bottom: none; }
        tbody tr:hover { background: #FBFAFE; }

        .actions { display: flex; gap: 8px; }

        .empty-state { padding: 48px 20px; text-align: center; color: var(--muted); }
    </style>
</head>
<body>
    <div class="page">
        <div class="page-header">
            <h1>Product Management</h1>
            <a href="/products/create" class="btn btn-primary">Add product</a>
        </div>

        <div class="table-card">
            <?php if (empty($products)): ?>
                <div class="empty-state">No products yet — add your first one.</div>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= htmlspecialchars($product['product_name']) ?></td>
                            <td><?= htmlspecialchars($product['description']) ?></td>
                            <td>₱<?= number_format((float)$product['price'], 2) ?></td>
                            <td><?= $product['quantity'] ?></td>
                            <td>
                                <div class="actions">
                                    <a href="/products/edit/<?= $product['id'] ?>" class="btn btn-ghost">Edit</a>
                                    <form action="/products/delete/<?= $product['id'] ?>" method="POST">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Delete this product?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>