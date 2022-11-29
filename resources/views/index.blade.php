@extends('layout.app')

@section('content')
<div class="ms-5 me-5">

    <h1 class="text-center">Add Record</h1>


    {{-- <div class="text-center mb-5">
        </div> --}}
        <div class="">
            <form class="col-6 mx-auto" action="{{route('create')}}" method="POST">
                @csrf
            <div class="mb-3">
                <label for="" class="form-label">Brand Name</label>
                <input type="text" class="form-control" name="brandname">
                <!-- <div id="" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Model Name</label>
                <input type="text" class="form-control" id="" name="modelname">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="" name="quantity">
                
            </div>
            <div class="form-floating mt-2">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="remark"></textarea>
                <label for="floatingTextarea">Remarks</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Save</button>
            </form>
        </div>
           
      
        <div>
             <form action="{{route('viewtable')}}" method="GET" class="d-flex justify-content-start">
                @csrf
                <button class="btn btn-warning" type="submit" name="view">View Table</button>
            </form>
            <form action="{{route('logout')}}" method="POST" class="d-flex justify-content-end">
                @csrf
                <button class="btn btn-warning" type="submit" name="logout">Log Out</button>
            </form>
        </div>
        
</div>
@endsection