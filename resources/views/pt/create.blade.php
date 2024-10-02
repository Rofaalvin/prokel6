@extends('layout')

@section('content')
    <div class="container">
        <h1>Create Pt</h1>
        <form action="{{ route('pt.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="string" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="harga_perkubikasi">Harga Perkubikasi:</label>
                <input type="string" class="form-control" name="harga_perkubikasi" required>
            </div>
            <div class="form-group">
                <label for="ongkos_supir">Ongkos Supir:</label>
                <input type="string" class="form-control" name="ongkos_supir" required>
            </div>
            <div class="form-group">
                <label for="harga_material">Harga Material:</label>
                <input type="string" class="form-control" name="harga_material" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
