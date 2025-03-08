@extends('Common.header')
@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <main class="main-wrapper">
        <div class="main-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">



            </div>
            <!--end breadcrumb-->


            <div class="row">


                <div class="col-12 col-lg-12 d-flex">
                    <div class="card w-100">

                        <div class="table-responsive">

                            <div class="container">
                                <div class="row">
                                    <div class="col"><h5>Purchase Orders</h5></div>
                                    <div class="col"></div>
                                    <div class="col"><button class="btn btn-success btn-sm">Export CSV</button> <button class="btn btn-primary btn-sm" onclick="openfilter();" id="showbutton">Show Filter</button>     </div>
                                </div>
                            </div>
                            <div style="height: 5px;"></div>
                            <div class="container" id="filtersection" style="display:none;">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label for="inputSelectCountry" class="form-label">P.O No</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Enter P.O No" >
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label for="inputSelectCountry" class="form-label">P.O Date</label>
                                        <input type="text" class="form-control" name="phone" >
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label for="inputSelectCountry" class="form-label">RM Inhouse Date</label>
                                        <input type="text" class="form-control" name="phone" >
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label for="inputSelectCountry" class="form-label">Consolid Delivery Date</label>
                                        <input type="text" class="form-control" name="phone" >
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label for="inputSelectCountry" class="form-label">Confirmation Date</label>
                                        <input type="text" class="form-control" name="phone" >
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label for="inputSelectCountry" class="form-label">Delivery Location</label>

                                        <select class="form-select"  name="role" aria-label="Default select example">
                                            <option value="">--All Locations--</option>
                                            @foreach ($buyerlocationlist as $list)
                                              <option value="{{$list->id}}">{{$list->code}}-{{$list->description}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div style="height: 5px;"></div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label for="inputSelectCountry" class="form-label">Divisions</label>
                                        <select class="form-select"  name="role" aria-label="Default select example">
                                            <option value="">--All Divisions--</option>
                                            @foreach ($materialdivisionslist as $list)
                                                <option value="{{$list->id}}">{{$list->code}}-{{$list->description}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label for="inputSelectCountry" class="form-label">Material Groups</label>
                                        <select class="form-select"  name="role" aria-label="Default select example">
                                            <option value="">--All Material Groups--</option>
                                            @foreach ($materialgroupslist as $list)
                                                <option value="{{$list->id}}">{{$list->code}}-{{$list->description}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label for="inputSelectCountry" class="form-label">Material</label>
                                        <select class="form-select"  name="role" aria-label="Default select example">
                                            <option value="">--All Material--</option>
{{--                                            @foreach ($materialslist as $list)--}}
{{--                                                <option value="{{$list->id}}">{{$list->code}}-{{$list->description}}</option>--}}
{{--                                            @endforeach--}}
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label for="inputSelectCountry" class="form-label">Status</label>
                                        <select class="form-select" name="role" aria-label="Default select example">
                                            <option value="">--All Status--</option>
                                            <option value="">Pending</option>
                                            <option value="">Acknowledge</option>
                                            <option value="">Confirmed</option>
                                            <option value="">Rejected</option>
                                            <option value="">Amended</option>
                                            <option value="">Amended Acknowledge</option>
                                            <option value="">Amended Confirmed</option>
                                            <option value="">Amended Rejected</option>
                                            <option value="">Partially Confirmed</option>
                                            <option value="">Request for Change</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <label for="inputSelectCountry" class="form-label">View</label>
                                        <select class="form-select" name="role" aria-label="Default select example">
                                            <option value="">3 Month PO's</option>
                                            <option value="">All PO's</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <button class="btn btn-warning btn-sm" style="margin-top: 30px;">Filter</button><button class="btn btn-info btn-sm" style="margin-top: 30px;margin-left: 10px;" >Reset</button>
                                    </div>


                                </div>
                            </div>


                            <hr>

                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Slno</th>
                                    <th scope="col">Company&nbsp;Code</th>
                                    <th scope="col">P.O&nbsp;No</th>
                                    <th scope="col">P.O&nbsp;Date</th>
                                    <th scope="col">Delivery&nbsp;Location</th>
                                    <th scope="col">PurchaseOrg</th>
                                    <th scope="col">Vendor&nbsp;No</th>
                                    <th scope="col">Vendor&nbsp;Name</th>
                                    <th scope="col">Payment&nbsp;Terms</th>
                                    <th scope="col">Payment&nbsp;Terms&nbsp;Desc</th>
                                    <th scope="col">Inco&nbsp;Terms</th>
                                    <th scope="col">Inco&nbsp;Terms&nbsp;Desc</th>
                                    <th scope="col">Material</th>
                                    <th scope="col">Material&nbsp;Desc</th>
                                    <th  width="2%">Item&nbsp;Qty</th>
                                    <th  width="2%">Received&nbsp;Qty</th>
                                    <th  width="2%">Open&nbsp;Qty</th>
                                    <th  width="2%">Vendor&nbsp;Confirmed&nbsp;Qty</th>
                                    <th  width="2%">Vendor&nbsp;PendingTo&nbsp;Confirm&nbsp;Qty</th>
                                    <th  width="2%">Vendor&nbsp;Conf.&nbsp;Qty</th>
                                    <th  width="2%">Vendor&nbsp;To&nbsp;be&nbsp;Conf.&nbsp;Qty</th>
                                    <th  width="2%">Buyer&nbsp;Conf.&nbsp;Qty</th>
                                    <th  width="2%">Buyer&nbsp;To&nbsp;be&nbsp;conf.&nbsp;Qty</th>
                                    <th  width="2%">UOM</th>
                                    <th scope="col">P.O.&nbsp;Validity&nbsp;Date</th>
                                    <th scope="col">P.O.&nbsp;BuyerGroup&nbsp;ID</th>
                                    <th scope="col">P.O.&nbsp;BuyerGroup&nbsp;Name</th>
                                    <th scope="col">P.O.&nbsp;Release&nbsp;Date</th>
                                    <th width="15%">Status</th>
                                    <th  width="30%">Actions</th>


                                </tr>
                                </thead>
                                <tbody>
                                                                @foreach ($recordlist as $list)
                                                                    <tr>
                                                                        <td>{{$i++}}</td>


                                                                        <td>{{$list->company_code}}</td>
                                                                        <td>{{$list->purchase_order_number}}</td>
                                                                        <td>{{$list->created_date}}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>



                                                                    </tr>
                                                                @endforeach
                                </tbody>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!--end row-->




        </div>
    </main>

@endsection
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
<script>
    function openfilter()
    {
        document.getElementById('filtersection').style.display='block';
        document.getElementById('showbutton').innerHTML='HideFilter';

    }
</script>


