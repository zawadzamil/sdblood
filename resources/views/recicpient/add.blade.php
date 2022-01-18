@extends('adminDashboard');
@section('body_parts')
    <div class="form-group ml-12 text-center color-white bg-dark-200" style="margin-top: 40px; width: 88%;height: 100%;">
        @if (\Session::has('Success'))
            <div class="alert alert-success">
                <ul>
                    <li style="color: #075102;text-align: center;">{!! \Session::get('Success') !!}</li>
                </ul>
            </div>
        @endif
        <form action="{{url('addRecipienttoDB')}}" method="POST" class="form-group">
            <h1 class="text-4xl">Add New Recipient </h1>
            @csrf

            <input type="text" placeholder="first-name" name="first_name" class="bg-green-200 ml-12 w-3/4 mt-8 py-6 px-4 shadow-xl  form-select " required  >
            <input type="text" placeholder="last-name" name="last_name" class="bg-green-200 ml-12 w-3/4 mt-8 py-6 px-4 shadow-xl  form-select " required >
            <input type="text" placeholder="Address" name="address" class="bg-green-200 ml-12 w-3/4 mt-8 py-6 px-4 shadow-xl  form-select " required >
            <div class="grid gap-2 grid-cols-2">
                <div>
                    <input type="text" placeholder="Phone" name="phone" class="bg-green-200 ml-12 w-2/4 mt-8 py-6 px-4 shadow-xl  form-select " >
                </div>

                <div>
                    <input type="email" placeholder="Email Address @" name="email" class="bg-green-200  w-3/4 mt-8 py-6 px-4 shadow-xl  form-select " >

                </div>




            </div>
            <div class="grid grid-cols-1 gap-2">
                <div>
                    <label for="group" class="mt-8"> Blood Group</label>
                    <select id="group"  name="group" class="form-select" required >
                        <option selected>Choose Blood Group</option>
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
                <div>
                    <input type="password" placeholder="Enter Passsword" name="password" class="bg-green-200  w-2/4 mt-8 py-6 px-4 shadow-xl  form-select " required >

                </div>
            </div>
            <button class="  px-12 bg-pink-600 rounded-full mt-8 py-6" type="submit"> <span class="text-white">Add</span></button>
        </form>
    </div>
@endsection
