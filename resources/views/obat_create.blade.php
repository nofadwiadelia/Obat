@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Obat</h1>
            <hr>
            <form action="{{ route('obat.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama_obat">Nama Obat:</label>
                    <input type="text" class="form-control" id="nama_obat" name="nama_obat">
                </div>
				<div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="number" class="form-control" id="harga" name="harga">
                </div>
				<div class="form-group">
                    <label for="stok">Stok:</label>
                    <input type="number" class="form-control" id="stok" name="stok">
                </div>
				<div class="form-group">
                    <label for="expired_date">Expired Date:</label>
                    <input type="date" class="form-control" id="expired_date" name="expired_date">
                </div>
                <div class="form-group">
				<div class="form-group">
                    <label for="production_date">Production Date:</label>
                    <input type="date" class="form-control" id="production_date" name="production_date">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection