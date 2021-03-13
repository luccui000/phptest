@extends('layouts.app')

<style>
    .avatar {
        padding-bottom: 35px;
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="">Company ID</label> 
                        <input type="number" name="company_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <select name="active" id="form-control">
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Company ID</label> 
                        <input type="file" name="image" class="form-control avatar">
                    </div>
                    <input type="submit" value="Create">
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div> 
        </div> 
    </div>
@endsection
