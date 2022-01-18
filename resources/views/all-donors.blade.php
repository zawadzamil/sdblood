@extends('adminDashboard')
@section('body_parts')

    <div class="form-group ml-12 text-center color-white " style="margin-top: 40px; width: 88%;height: 100%;">
        @if (\Session::has('failed'))
            <div class="alert alert-danger">
                <ul>
                    <li style="color: #310604;text-align: center;">{!! \Session::get('failed') !!}</li>
                </ul>
            </div>
        @endif
            @if (\Session::has('Success'))
                <div class="alert alert-success">
                    <ul>
                        <li style="color: #075102;text-align: center;">{!! \Session::get('Success') !!}</li>
                    </ul>
                </div>
            @endif

        <table class="table  table-hover  text-center ml-12">
            <thead class="bg-red-300  py-6" style="text-align: center;">
            <tr >
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th class="ml-4">Email</th>
                <th>Blood Group</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
            </thead >
            <tbody style="text-align: center;">
            @foreach($donors as $donor)
            <tr  class="bg-indigo-200 "   >

                <td>{{$donor->id}}</td>
                <td>{{$donor->first_name}} {{$donor->last_name}}</td>
                <td>{{$donor->phone}}</td>
                <td>{{$donor->email}}</td>
                <td>{{$donor->group}}</td>
                <td>{{$donor->address}}</td>
                <td>
                    <a href="{{url('edit-donor',$donor->id)}}">
                        <button><i class="fa fa-pencil"></i></button>
                    </a>
                </td>
                    <td>
                        <a href="{{url('remove-donor',$donor->id)}}">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>

            </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <style>
        th{
            text-align: center;
        }
    </style>
@endsection
