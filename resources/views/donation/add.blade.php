@extends('adminDashboard')
@section('body_parts')
    <div class="form-group ml-12 text-center color-white bg-dark-200" style="margin-top: 40px; width: 88%;height: 100%;">
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
        <h1 class="text-2xl"> New Donation</h1>
        <form action="{{url('addDonation')}}" method="POST" class="form-group">
            @csrf
            <div class=" text-center ">

                <input type="number" name="donor_id" placeholder="Enter Donor ID" class="w-2/4 p-4 rounded-lg shadow-xl mb-4 bg-green-200 mt-4" >

            </div>

            <div class=" text-center ">

                <label for="date" class="text-xl font-bold mr-2">Pick Date of Donation</label>
                <input type="date" id="date" name="date" placeholder="Enter Donor Date" class="w-1/4 p-4 rounded-lg shadow-xl mb-4 bg-green-200" >

            </div>
            <div class=" text-center ">
                <label for="date" class="text-xl font-bold mr-2" id="quantity">Choose Quantity</label>

                <select name="quantity" id="quantity" class="w-1/4 p-4 mt-4 shadow-lg rounded-lg bg-green-200">
                    <option selected disabled>Choose an Option</option>
                    <option value="100">100g</option>
                    <option value="150">150g</option>
                    <option value="250">250g</option>
                    <option value="500">500g</option>
                    <option value="1000">1000g</option>
                </select>

            </div>


            <button class="  px-16 bg-pink-600 rounded-full mt-8 py-6 hover:bg-gray-700" type="submit"> <span class="text-white">Add</span></button>
        </form>
    </div>
@endsection
