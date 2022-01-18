@extends('adminDashboard')
@section('body_parts')
    @php
    function getEmployeeName($transId,$serial)
    {
        if($serial ==1 )
            {
                 $employeeId = \App\Models\Transaction::where('id',$transId)->value('employee_id');
                  $empoyeeName = \App\Models\Employee::where('id',$employeeId)->value('first_name');
                  return $empoyeeName;

            }
        else if($serial ==2 )
            {
                 $recipientId = \App\Models\Transaction::where('id',$transId)->value('recipient_id');
                  $recipientName = \App\Models\Recipient::where('id',$recipientId)->value('first_name');
                  return $recipientName;

            }

          else if($serial ==3 )
            {
                 $donationId = \App\Models\Transaction::where('id',$transId)->value('donation_id');
                 $donorId = \App\Models\Donation::where('id',$donationId)->value('donor_id');
                 $donorName = \App\Models\Donor::where('id',$donorId)->value('first_name');

                 return $donorName;

            }

           else if($serial ==4 )
            {
                 $donationId = \App\Models\Transaction::where('id',$transId)->value('donation_id');
                 $donorId = \App\Models\Donation::where('id',$donationId)->value('donor_id');
                 $donorGroup = \App\Models\Donor::where('id',$donorId)->value('group');

                 return $donorGroup;

            }

           else if($serial ==5 )
            {
                 $donationId = \App\Models\Transaction::where('id',$transId)->value('donation_id');
                 $quantity = \App\Models\Donation::where('id',$donationId)->value('quantity');

                 return $quantity;

            }



    }
    @endphp

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
        <h1 class="text-2xl mb-2">All Transaction </h1>

        <table class="table  table-hover  text-center ml-12">
            <thead class="bg-red-300  py-6" style="text-align: center;">
            <tr >
                <th>Id</th>
                <th>Medical Person Name</th>
                <th>Recipient Name</th>
                <th >Donor Name</th>
                <th>Blood Group</th>
                <th>Transaction Date</th>
                <th>Quantity</th>


            </tr>
            </thead >
            <tbody style="text-align: center;">
            @foreach($transactions as $trans)
                <tr  class="bg-indigo-200 "   >

                    <td>{{$trans->id}}</td>
                    <td>{{getEmployeeName($trans->id,1)}} </td>
                    <td>{{getEmployeeName($trans->id,2)}}</td>
                    <td>{{getEmployeeName($trans->id,3)}}</td>
                    <td>{{getEmployeeName($trans->id,4)}}</td>
                    <td>{{$trans->date}}</td>
                    <td>{{getEmployeeName($trans->id,5)}}g</td>
{{--                    <td>--}}
{{--                        <a href="{{url('edit-employee',$employee->id)}}">--}}
{{--                            <button><i class="fa fa-pencil"></i></button>--}}
{{--                        </a>--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <a href="{{url('remove-employee',$employee->id)}}">--}}
{{--                            <i class="fa fa-trash-o"></i>--}}
{{--                        </a>--}}
{{--                    </td>--}}

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
