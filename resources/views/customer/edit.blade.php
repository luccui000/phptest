@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="form">
                <form action="{{ route('customer.store') }}" method="POST">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="email" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="">Name</label> 
                        <input type="number" name="company_id" class="form-control">
                    </div>
                </form>
            </div>
        </div> 
    </div>
@endsection 