@extends('admin.layout')
@section('a')
<div class="right_col" role="main" style="padding-top: 75px;">

<!-- top tiles -->


@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
<div class="panel pane-default" > 


    <div class="panel-heading no-collapse" style="text-align: center; background-color: #EDEDED; height: 40px;"><h3><strong>Company List</strong> </h3></div>
    <div class="panel-body"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>SL </th>
                <th>Client Name</th>
                <th>Company Name</th>
                <th>Email </th>
                <th>Phone </th>
                <th>Address</th>
                <th>Reg date</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>SL </th>
                <th>Client Name</th>
                <th>Company Name</th>
                <th>Email </th>
                <th>Phone </th>
                <th>Address</th>
                <th>Reg date</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </tfoot>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->company}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->phone}}</td>
                <td>{{$client->address}}</td>
                <td>{{$client->created_at}}</td>
                <td align="center">
                    <a href="{{action('ClientController@edit',$client->id)}}" class="btn btn-warning ">Edit</a>
                    <a href="{{action('ClientController@destroy',$client->id)}}" class="btn btn-danger ">Delete</a>
                </td>
            </tr>
            @endforeach
            
               </tbody>
    </table></div>

</div>

</div><!-- /top tiles -->
 @endsection()