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
                                    <h6 class="font-weight-semibold text-lg mb-0">Tambah Produk</h6>
                                    <p class="text-sm">Tambahkan produk baru di sini</p>
                                </div>
                                <div>
                                    <a href="{{ route('products.index') }}" class="btn btn-light btn-sm">Kembali</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Form Tambah Produk -->
                            <form action="{{ route('products.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Pilih Nama Produk</label>
                                    <select class="form-select" id="name" name="name" required>
                                        <option selected disabled>Pilih Produk</option>
                                        <option value="Iphone XR">Iphone XR</option>
                                        <option value="Iphone 11">Iphone 11</option>
                                        <option value="Iphone 12">Iphone 12</option>
                                        <option value="Iphone 13">Iphone 13</option>
                                        <option value="Iphone 14">Iphone 14</option>
                                        <option value="Iphone 15">Iphone 15</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Deskripsi Produk</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Harga Produk</label>
                                    <input type="text" class="form-control" id="price" name="price" required>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </form>
                            <!-- Akhir Form Tambah Produk -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
