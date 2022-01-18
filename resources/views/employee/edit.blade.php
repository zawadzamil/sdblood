@extends('admin-dashboard-from-here')
@section('body_parts')

    <div class="form-group ml-12 text-center color-white bg-dark-200" style="margin-top: 40px; width: 88%;height: 100%;">
        @if (\Session::has('Success'))
            <div class="alert alert-success">
                <ul>
                    <li style="color: #075102;text-align: center;">{!! \Session::get('Success') !!}</li>
                </ul>
            </div>
        @endif
        <h1 class="text-2xl">Edit Employee Data</h1>
        <form action="{{url('updateEmployee',$employee->id)}}" method="POST" class="form-group">
            @csrf

            <input type="text" placeholder="first-name" value="{{$employee->first_name}}" name="first_name" class="bg-green-200 ml-12 w-3/4 mt-8 py-6 px-4 shadow-xl  form-select " required  >
            <input type="text" placeholder="last-name"  value="{{$employee->last_name}}"  name="last_name" class="bg-green-200 ml-12 w-3/4 mt-8 py-6 px-4 shadow-xl  form-select " required >
            <input type="text" placeholder="Address"  value="{{$employee->address}}" name="address" class="bg-green-200 ml-12 w-3/4 mt-8 py-6 px-4 shadow-xl  form-select " required >
            <div class="grid gap-2 grid-cols-2">
                <div>
                    <input type="text" placeholder="Phone" value="{{$employee->phone}}" name="phone" class="bg-green-200 ml-12 w-2/4 mt-8 py-6 px-4 shadow-xl  form-select " >
                </div>

                <div>
                    <input type="email" placeholder="Email Address @" value="{{$employee->email}}" name="email" class="bg-green-200  w-3/4 mt-8 py-6 px-4 shadow-xl  form-select " >

                </div>




            </div>
            <div class="grid grid-cols-1 gap-2">
                <div>
                    <label for="group" class="mt-8"> Blood Group</label>
                    <select id="group"  name="group" class="form-select" required >
                        <option value="{{$employee->group}}" >{{$employee->group}}</option>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="O+">O+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>
                        <option value="O-">O-</option>
                    </select>
                </div>

            </div>
            <button class="  px-12 bg-pink-600 rounded-full mt-8 py-6" type="submit"> <span class="text-white">Add</span></button>
        </form>
    </div>
@endsection
