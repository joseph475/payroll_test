@extends('layouts.app') 

@section('content')
    <div class="container-jos">
        <div class="row myrow">
            <div class="file-field input-field col-sm-5">
                <a class="waves-effect waves btn btn-jos right" href="" style="margin-left:5px;">
                <i class="material-icons left">search</i>Search</a>
                
                <div class="file-path-wrapper">
                    <input placeholder="Search Employee" class="file-path validate myinput" type="text">
                </div>
            </div>
            <div class="input-field col-sm-2">
                <select>
                    <option value="" disabled selected>Sort By</option>
                    <option value="1">Emp No</option>
                    <option value="2">Last Name</option>
                    <option value="3">Rank</option>
                    <option value="4">Department</option>
                    <option value="5">Status</option>
                </select>
            </div>
            <div class="col-sm-2">

            </div>
            <div class="input-field col-sm-3">
                <a class="waves-effect waves btn modal-trigger btn-jos right" href="{{ url('/employee/create') }}" style="padding-left:15px;padding-right:20px; margin-bottom:10px;">
                <i class="material-icons left">add</i>Add Employee</a>
            </div>  
        </div> 
        <div class="table-wrapper">
            <table class="responsive-table highlight white z-depth-1">
                <thead>
                    <tr>
                        <td>Emp No</td>
                        <td>Last Name</td>
                        <td>First Name</td>
                        <td>Middle Name</td>
                        <td>Rank</td>
                        <td>Department</td>
                        <td>Position</td>
                        <td>Status</td>
                        <td>View Details</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2018-2428</td>
                        <td>Castelo</td>
                        <td>Mark Joseph</td>
                        <td>Ramirez</td>
                        <td>Rank and File</td>
                        <td>IT Department</td>
                        <td>Programmer</td>
                        <td>Regular</td>
                        <td>
                            <a class="waves-effect waves btn modal-trigger btn-abi tooltipped" href="{{url('/employee/details')}}" target="_blank" data-tooltip="View Details">
                            <i class="material-icons left">pageview</i>View</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2018-2231</td>
                        <td>Mariano</td>
                        <td>Abigail</td>
                        <td>Aquino</td>
                        <td>Manager</td>
                        <td>IT Department</td>
                        <td>Programmer</td>
                        <td>Regular</td>
                        <td>
                            <a class="waves-effect waves btn modal-trigger btn-abi tooltipped" href="#" data-tooltip="View Details">
                            <i class="material-icons left">pageview</i>View</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>   
@endsection