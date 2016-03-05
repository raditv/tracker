@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tanggal</th>
                <th>Jumlah Masuk</th>
                <th>Jumlah Keluar</th>
                <th>Total Jumlah Masuk</th>
                <th>Total Jumlah Keluar</th>
                <th>Total Didalam</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'tanggal', name: 'tanggal' },
            { data: 'objek_masuk', name: 'objek_masuk' },
            { data: 'objek_keluar', name: 'objek_keluar' },
            { data: 'total_masuk', name: 'total_masuk' },
            { data: 'total_keluar', name: 'total_keluar' },
            { data: 'total_didalam', name: 'total_didalam' }
        ]
    });
});
</script>
@endpush
