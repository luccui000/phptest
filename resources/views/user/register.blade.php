@extends('base')

@section('title', 'Register')
 
<style>
    .myform {
        border: 2px solid #ccc;
        border-radius: 10px;
        padding: 10px;
    }
    .form-control {
        border-radius: 7px;
    } 
    .form-group input {
        padding: 7px 10px;
        border-radius: 10px;
    } 
    .avatar {
        height: 100px;
    }
</style>
@section('links')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="myform col-md-4"> 
                <h3 class="text-center text-success pt-2">Register</h3>
                <div class="form-group"> 
                    <label for="">Full Name *</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Email *</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Password *</label>
                    <input type="password" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Repeat Password *</label>
                    <input type="password"class="form-control" >
                </div> 
                <div class="form-group avatar">
                    <label for="">Avatar</label>
                    <input type="file" class="filepond">
                </div> 
                <input type="button" class="btn btn-success" value="Register"> 
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

    <!-- Turn all file input elements into ponds -->
    <script>
        const inputElement = document.querySelector('input[type="file"]');
        const pond = FilePond.create(inputElement);
        FilePond.setOptions({
            server: 'upload/'
        });
    </script>
@endsection