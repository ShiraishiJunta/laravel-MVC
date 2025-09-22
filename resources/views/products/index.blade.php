<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produk Kami</title>
  <style>
    body {
      background-color: #f9fafb;
      margin: 0;
      font-family: Arial, sans-serif;
      color: #374151;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 3rem 1rem;
    }

    .text-center {
      text-align: center;
      margin-bottom: 2.5rem;
    }

    .title {
      font-size: 2.25rem;
      font-weight: 800;
      color: #111827;
      margin-bottom: 0.5rem;
    }

    .subtitle {
      font-size: 1.125rem;
      color: #6b7280;
    }

    .table-wrapper {
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      min-width: 600px;
    }

    thead {
      background-color: #f3f4f6;
    }

    th {
      padding: 1rem 1.5rem 0.25rem 1.5rem;
      text-align: left;
      font-size: 0.75rem;
      text-transform: uppercase;
      font-weight: 600;
      color: #111827;
      letter-spacing: 0.05em;
      border-bottom: 2px solid #e5e7eb;
    }

    td {
      padding: 1rem 1.5rem;
      border-bottom: 1px solid #e5e7eb;
      vertical-align: top;
    }

    .text-center-colspan {
      text-align: center;
    }
  </style>
</head>
<body>

  <div class="container">

    <div class="text-center">
      <h1 class="title">Produk Kami</h1>
      <p class="subtitle">Kualitas Terbaik.</p>
    </div>

    <div class="table-wrapper">
      <table>
        <thead>
          <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($products as $product)
            <tr>
              <td>{{ $product->name }}</td>
              <td>Rp. {{ number_format($product->harga, 0, ',', '.') }}</td>
              <td>{{ $product->deskripsi }}</td>
            </tr>
          @empty
            <tr>
              <td colspan="3" class="text-center-colspan">No Products Found</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

  </div>

</body>
</html>
