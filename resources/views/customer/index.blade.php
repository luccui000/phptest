@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link href="{{ asset('css/datatables.css') }}" rel="stylesheet"> 
    <style>
        .table thead tr th,
        .table tbody tr td {
            padding: 5px;
        }
        .table.dataTable.no-footer {
            border-bottom: 0px;
        } 
        .dataTables_filter label input {
            height: 25px;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <h3>Customer</h3>
        </div>
        @can('edit-customer', Customer::class)
            <div class="row">
                <a href="{{ route('customer.create') }}" class="btn btn-primary btn-sm">Create</a>
            </div>
        @endcan
        <table class="table pt-2" id="customers">
            
        </table>  
    </div>
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" defer></script>
    <script  type="text/javascript"> 
        $(document).ready(() => {
            $('#customers').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('customer.anyData') !!}',
                columns: [
                    { data: 'id',  title: 'id' },
                    { data: 'name', title: 'name' },
                    { data: 'email', title: 'email' },
                    { data: 'created_at', title: 'created_at' },
                    { data: 'updated_at', title: 'updated_at' },
                    { data: 'action', title: 'action' }
                ]
            });   
        });
    </script>
@endpush