@extends('adminDashboard')
@section('body_parts')

    <div class="form-group ml-12 text-center color-white bg-dark-200" style="margin-top: 40px; width: 88%;height: 100%;">
        @php
        $employees = \App\Models\Employee::all();
        $recipients = \App\Models\Recipient::all();
        $donations = \App\Models\Donation::all();
        @endphp
        @if (\Session::has('Success'))
            <div class="alert alert-success">
                <ul>
                    <li style="color: #075102;text-align: center;">{!! \Session::get('Success') !!}</li>
                </ul>
            </div>
        @endif
        <h1 class="text-2xl">Add New Transaction</h1>
        <form action="{{url('addTransaction')}}" method="POST" class="form-group">
            @csrf
            <div class="inputs mt-4">
                <label for="employee_id" class="text-xl font-bold mr-4">Select Employee </label>
                <select name="employee_id" id="employee_id" required class="w-2/4 bg-green-200 p-4 rounded-lg shadow-xl focus:bg-red-200 mb-4">
                    <option selected disabled>Choose An Employee</option>
                    @foreach($employees as $employee)

                    <option value="{{$employee->id}}">ID: {{$employee->id}} Name: {{$employee->first_name}}</option>
                   @endforeach
                </select>
            </div>

            <div class="inputs mt-4">
                <label for="recipient_id" class="text-xl font-bold mr-4">Select Recipient </label>
                <select name="recipient_id" id="recipient_id" required class="w-2/4 bg-green-200 p-4 rounded-lg shadow-xl focus:bg-red-200 mb-4">
                    <option selected disabled>Choose A Recipient</option>
                    @foreach($recipients as $recipient)

                        <option value="{{$recipient->id}}">ID: {{$recipient->id}} Name: {{$recipient->first_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="inputs mt-4">
                <label for="donation_id" class="text-xl font-bold mr-4">Select Donation </label>
                <select name="donation_id" id="donation_id" required class="w-2/4 bg-green-200 p-4 rounded-lg shadow-xl focus:bg-red-200 mb-4">
                    <option selected disabled>Choose Donation </option>
                    @foreach($donations as $donation)

                        <option value="{{$donation->id}}">ID: {{$donation->id}} Date: {{$donation->date}}</option>
                    @endforeach
                </select>
            </div>

            <div class="inputs mt-4">
                <label for="date" class="text-xl font-bold mr-4">Select Date </label>
                <input type="date" id="date" name="date" required class="w-1/4 bg-green-200 p-4 rounded-lg shadow-xl focus:bg-red-200 mb-4">

            </div>

            <button class="  px-12 bg-pink-600 rounded-full mt-8 py-6" type="submit"> <span class="text-white">Add</span></button>
        </form>
    </div>
@endsection
