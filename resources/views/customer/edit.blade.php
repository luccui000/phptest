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
                <form action="{{ route('customer.update', ['id' => $customer->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $customer->name }}">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" value="{{ $customer->email }}"> 
                    </div>
                    <div class="form-group">
                        <label for="">Company ID</label> 
                        <input type="number" name="company_id" class="form-control" value="{{ $customer->company_id }}">
                    </div>
                    <div class="form-group">
                        <select name="active" id="form-control">
                            @if($customer->active == 0)
                                <option value="0" selected="selected">0</option>    
                                <option value="1" >1</option> 
                            @else
                                <option value="0">0</option>    
                                <option value="1" selected="selected">1</option> 
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Customer Image</label> 
                        <input type="file" name="image" class="form-control avatar" >
                    </div>
                    @if($customer->image)
                        <div class="form-group">
                            <img src="{{ asset('storage/'.$customer->image) }}" alt="" class="img-thumbnail">
                        </div>
                    @endif 
                    <input type="submit" value="Update">
                    
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