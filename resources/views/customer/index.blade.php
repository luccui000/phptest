@extends('layouts.app')


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
        <div class="row">
            <table class="table table-sm mt-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th> 
                    <th scope="col">created at</th> 
                    <th scope="col">updated at</th> 
                    @can('edit-customer', Customer::class)
                        <th scope="col">action</th>
                    @endcan
                  </tr>
                </thead>
                <tbody> 
                    @forelse($customers as $customer)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $customer->name }}</td> 
                            <td>{{ $customer->email }}</td> 
                            <td>{{ $customer->created_at }}</td> 
                            <td>{{ $customer->updated_at }}</td> 
                            @can('edit-customer', Customer::class) 
                                <td><a href="{{ route('customer.edit', ['id' => $customer->id ])}}">edit</a></td> 
                            @endcan
                        </tr> 
                    @empty
                        <span class="text-center">No Item</span>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
@endsection