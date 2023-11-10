<!-- resources/views/show.blade.php -->
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
                                    <p class="text-sm">Ini adalah data produk</p>
                                </div>
                                <div>
                                    <a href="{{ route('products.index') }}" class="btn btn-light btn-sm">Kembali</a>
                                </div>
                            </div>
                        </div>
                    <div class="card-body">
                        <div class="table-responsive p-0">
                            <table class="table table-striped align-middle mb-0">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-semibold opacity">Produk</th>
                                        <th class="text-center text-secondary text-xs font-weight-semibold opacity">Deskripsi</th>
                                        <th class="text-center text-secondary text-xs font-weight-semibold opacity">Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td class="text-secondary text-xs font-weight-semibold opacity">{{ $product->name }}</td>
                                            <td class="text-center text-secondary text-xs font-weight-semibold opacity">{{ $product->description }}</td>
                                            <td class="text-center text-secondary text-xs font-weight-semibold opacity-7">{{ $product->price }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
