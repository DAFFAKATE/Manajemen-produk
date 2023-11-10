<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <x-app.navbar />

        <div class="container-fluid py-4 px-5">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">Manajemen Produk</h6>
                                    <p class="text-sm">Kelola data produk di sini</p>
                                </div>
                                <div>
                                    <a href="{{ route('products.show') }}" class="btn btn-dark btn-sm">Lihat Produk</a>
                                    <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">Tambah Produk</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-7">
                                                Produk</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Deskripsi</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Harga</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Tanggal dibuat</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Tanggal diupdate</th>
                                            <th class="text-center text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td class="text-secondary text-xs font-weight-semibold">{{ $product->name }}</td>
                                            <td class="text-center text-secondary text-xs font-weight-semibold">{{ $product->description }}</td>
                                            <td class="text-center text-secondary text-xs font-weight-semibold">{{ $product->price }}</td>
                                            <td class="text-center text-secondary text-xs font-weight-semibold">{{ $product->created_at }}</td>
                                            <td class="text-center text-secondary text-xs font-weight-semibold">{{ $product->updated_at }}</td>
                                            <td class="text-center text-secondary text-xs font-weight-semibold">
                                                <button class="btn btn-sm btn-info" onclick="showEditForm('{{ $product->id }}')">Edit</button>
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Edit Produk -->
            @foreach($products as $product)
            <div id="editForm_{{ $product->id }}" style="display: none;" class="mt-4">
                <div class="card border shadow-xs">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Edit Produk</h6>
                                <p class="text-sm">Edit data produk di sini</p>
                            </div>
                            <div>
                                <a href="{{ route('products.index') }}" class="btn btn-light btn-mb">&times;</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Produk</label>
                                <input type="text" class="form-control" id="name_{{ $product->id }}" name="name" value="{{ $product->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi Produk</label>
                                <textarea class="form-control" id="description_{{ $product->id }}" name="description" rows="3" required>{{ $product->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Harga Produk</label>
                                <input type="text" class="form-control" id="price_{{ $product->id }}" name="price" value="{{ $product->price }}" required>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Akhir Form Edit Produk -->
        </div>
    </main>

    <script>
        function showEditForm(productId) {
            // Hide all edit forms
            var allEditForms = document.querySelectorAll('[id^="editForm_"]');
            allEditForms.forEach(function (form) {
                form.style.display = 'none';
            });

            // Show the edit form for the clicked product
            var element = document.getElementById('editForm_' + productId);
            element.style.display = 'block';
        }
    </script>
</x-app-layout>
