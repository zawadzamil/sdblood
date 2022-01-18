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
{{--            @foreach($recipients as $recipient)--}}
{{--                <tr  class="bg-indigo-200 "   >--}}

{{--                    <td>{{$recipient->id}}</td>--}}
{{--                    <td>{{$recipient->first_name}} {{$recipient->last_name}}</td>--}}
{{--                    <td>{{$recipient->phone}}</td>--}}
{{--                    <td>{{$recipient->email}}</td>--}}
{{--                    <td>{{$recipient->group}}</td>--}}
{{--                    <td>{{$recipient->address}}</td>--}}
{{--                    <td>--}}
{{--                        <a href="{{url('edit-donor',$recipient->id)}}">--}}
{{--                            <button><i class="fa fa-pencil"></i></button>--}}
{{--                        </a>--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <a href="{{url('remove-donor',$recipient->id)}}">--}}
{{--                            <i class="fa fa-trash-o"></i>--}}
{{--                        </a>--}}
{{--                    </td>--}}

{{--                </tr>--}}
{{--            @endforeach--}}
            </tbody>

        </table>
    </div>
    <style>
        th{
            text-align: center;
        }
    </style>
    @endsection
