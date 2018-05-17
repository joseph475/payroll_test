@extends('layouts.app') 

@section('content')
    <div class="container-jos add_emp_container white">
        <form action="">
            <h5 class="h5-header">Employee's Information</h5>
            <div class="emp_details">
            
                <div class="row myrow">
                    <div class="col-sm-2" style="margin-bottom:5px;">
                        <img class="responsive-img emp_photo">
                    </div>
                    <div class="col-sm-7">
                        <table class="add_emp_table">
                            <tr>
                                <td>Emp No</td>
                                <td>
                                    <div class="input-field col m5 s12">
                                        <input id="empno"  name ="empno" type="text" class="validate btn-add-jos">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Full Name</td>
                                <td>
                                    <div class="input-field col s5">
                                        <input id="lname" name="lname" placeholder="Last Name" type="text" class="validate btn-add-jos">
                                    </div>
                                    <div class="input-field col s5">
                                        <input id="fname" name="fname" placeholder="First Name" type="text" class="validate btn-add-jos">
                                    </div>
                                    <div class="input-field col s2" style="padding-left:0px;">
                                        <input id="mname" name="mname" placeholder="MI" type="text" class="validate btn-add-jos">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td>
                                    <div class="input-field col s12 m5">
                                        <input id="first_name" type="text" class="validate btn-add-jos">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Department</td>
                                <td>
                                    <div class="input-field col s12 m5">
                                        <input id="first_name" type="text" class="validate btn-add-jos">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm-3 pull-s3" style="padding-top:10px;">
                        <div class="row">
                            <div class="col-sm-12">                               
                                <a class="waves-effect waves btn modal-trigger btn-jos right emp_details_btn tooltipped" href="#" data-tooltip="Save Record">
                                    <i class="material-icons left" style="margin-right:10px !important;">save</i>Save
                                </a>                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <h5 class="h5-header">Contact Information</h5>
            <div class="row myrow">
                <div class="col-sm-6">
                    <table class="add_emp_table info">
                        <tr>
                            <td class="label">Present Address</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Provincial Address</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Zip Code</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-6">
                    <table class="add_emp_table info">
                        <tr>
                            <td class="label">Mobile No.</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Telephone No.</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Email</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <h5 class="h5-header">Government ID's / ATM</h5>
            <div class="row myrow">
                <div class="col-sm-6">
                    <table class="add_emp_table info">
                        <tr>
                            <td class="label">Tin #</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">SSS #</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">PHIC #</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">HDMF #</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-6">
                    <table class="add_emp_table info">
                        <tr>
                            <td class="label">ATM No.</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Bank Name</td>
                            <td>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="1" selected>BDO</option>
                                        <option value="2">BPI</option>
                                        <option value="3">Security Bank</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <h5 class="h5-header">Contract Info</h5>
            <div class="row myrow">
                <div class="col-sm-6">
                    <table class="add_emp_table info">
                        <tr>
                            <td class="label">Contract #</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos" disabled>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Employment Status</td>
                            <td>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="1" selected>Probationary</option>
                                        <option value="2">Regular</option>
                                        <option value="3">Contractual</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Remarks</td>
                            <td>
                                <div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea my-textarea"></textarea>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-6">
                    <table class="add_emp_table info">
                        <tr>
                            <td class="label">Hired Date</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <i class="material-icons prefix">date_range</i>
                                    <input type="text" class="datepicker">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Regularized</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <i class="material-icons prefix">date_range</i>
                                    <input type="text" class="datepicker">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">EOC</td>
                            <td>
                                <div class="input-field col s12 m12">
                                     <i class="material-icons prefix">date_range</i>
                                    <input type="text" class="datepicker">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <h5 class="h5-header">Other Personal Info</h5>
            <div class="row myrow">
                <div class="col-sm-6">
                    <table class="add_emp_table info">
                        <tr>
                            <td class="label">Birthday</td>
                            <td>
                                <div class="input-field col s12 m12">
                                     <i class="material-icons prefix">date_range</i>
                                    <input type="text" class="datepicker">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Gender</td>
                            <td>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="1" selected>Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Marital Status</td>
                            <td>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="1" selected>Single</option>
                                        <option value="2">Married</option>
                                        <option value="3">Divorce</option>
                                        <option value="4">Widowed</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-6">
                    <table class="add_emp_table info">
                        <tr>
                            <td class="label">Birthplace</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Religion</td>
                            <td>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="1" selected>Roman Catholic</option>
                                        <option value="2">Iglesia ni Cristo</option>
                                        <option value="3">Born Again</option>
                                        <option value="4">Mormons</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Nationality</td>
                            <td>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="1" selected>Filipino</option>
                                        <option value="2">American</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <h5 class="h5-header">Emergency Contact</h5>
            <div class="row myrow">
                <div class="col-sm-6">
                    <table class="add_emp_table info">
                        <tr>
                            <td class="label">Name</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Address</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-6">
                <table class="add_emp_table info">
                        <tr>
                            <td class="label">Mobile No.</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Telephone No.</td>
                            <td>
                                <div class="input-field col s12 m12">
                                    <input id="first_name" type="text" class="validate btn-add-jos">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>
@endsection