@extends('layout.app')

@section('content')
     <table class="table table-primary mt-5">
                <tr>
                    <th>S.N</th>
                    <th>Brand Name</th>
                    <th>Model Name</th>
                    <th>Quantity</th>
                    <th>Added Date</th>
                    <th>Remark</th>
                    <th>Image</th>
                    <th>Action</th>


                </tr>
                
                @foreach ($items as $value)
                        <tr>
                            <td>
                                {{$value->id}}
                            </td>
                            <td>
                                {{$value->brandname}}
                            </td>
                            <td>
                                {{$value->modelname}}
                            </td>
                            <td>
                                {{$value->quantity}}
                            </td>
                            <td>
                                {{$value->created_at}}
                            </td>
                            <td>
                                {{$value->remark}}
                            </td>
                            <td>
                                <img src="/storage/{{$value->image}}" alt="" class="w-25 h-25">
                            </td>
                            <td>
                                <a class="btn btn-success" href="/edit/{{$value->id}}">Edit</a>
                                <a class="btn btn-danger" href="/delete/{{$value->id}}"> Delete</a>
                            </td>
                        </tr>
                @endforeach
                
            </table>
             <form action="{{route('home')}}" method="GET" class="d-flex justify-content-start">
                @csrf
                <button class="btn btn-warning" type="submit" name="return">Return To Admin Panel</button>
            </form>
@endsection