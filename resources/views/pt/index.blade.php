@extends('layout')

@section('content')
    <div class="container">
        <h1>Pt</h1>
        <a href="{{ route('pt.create') }}" class="btn btn-primary">Create New Pt</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Harga Perkubikasi</th>
                    <th>Ongkos Supir</th>
                    <th>Harga Material</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pt as $pt)
                    <tr>
                        <td>{{ $pt->nama }}</td>
                        <td>{{ $pt->harga_perkubikasi }}</td>
                        <td>{{ $pt->ongkos_supir }}</td>
                        <td>{{ $pt->harga_material }}</td>
                        <td>
                            <a href="{{ route('pt.edit', $pt->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pt.destroy', $pt->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
