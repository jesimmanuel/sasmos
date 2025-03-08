@extends('Common.header')
@section('content')
    <main class="main-wrapper">
        <div class="main-content">

{{--            <div class="page-breadcrumb d-none d-sm-flex align-items-center justify-content-between mb-3">--}}

{{--                <!-- Left Side (Breadcrumb, Date Picker & MultiSelect) -->--}}
{{--                <div class="d-flex align-items-center gap-3 w-100">--}}

{{--                    <!-- Breadcrumb -->--}}
{{--                    <div class="breadcrumb-title pe-3">Components</div>--}}
{{--                    <nav aria-label="breadcrumb">--}}
{{--                        <ol class="breadcrumb mb-0 p-0">--}}
{{--                            <li class="breadcrumb-item">--}}
{{--                                <a href="javascript:;"><i class="bx bx-home-alt"></i></a>--}}
{{--                            </li>--}}
{{--                            <li class="breadcrumb-item active" aria-current="page">Data Table</li>--}}
{{--                        </ol>--}}
{{--                    </nav>--}}

{{--                    <!-- Date Picker -->--}}
{{--                    <div class="d-flex align-items-center">--}}
{{--                        <h6 class="mb-0">Select Date:</h6>--}}
{{--                        <input type="text" id="dateRange" placeholder="Select From Date → To Date" class="ms-2 form-control w-auto">--}}
{{--                        <input type="text" id="dateRange1" placeholder="Select From Date → To Date" class="ms-2 form-control w-auto">--}}
{{--                    </div>--}}

{{--                    <!-- MultiSelect Dropdown -->--}}
{{--                    <div class="ms-dropdown">--}}
{{--                        <div class="dropdown-btn" onclick="toggleDropdown()">--}}
{{--                            <span id="selected-text">Select Options</span> ▼--}}
{{--                        </div>--}}
{{--                        <div class="dropdown-content">--}}
{{--                            <!-- Search Input -->--}}
{{--                            <input type="text" id="searchBox" placeholder="Search..." onkeyup="filterOptions()">--}}
{{--                            <!-- Options List -->--}}
{{--                            <div id="options-list">--}}
{{--                                <label><input type="checkbox" value="Option 1" onchange="updateSelection()"> Option 1</label>--}}
{{--                                <label><input type="checkbox" value="Option 2" onchange="updateSelection()"> Option 2</label>--}}
{{--                                <label><input type="checkbox" value="Option 3" onchange="updateSelection()"> Option 3</label>--}}
{{--                                <label><input type="checkbox" value="Option 4" onchange="updateSelection()"> Option 4</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}



{{--            </div>--}}




            <div class="container">
                <div class="row">
                    <div class="col"><h5>Purchase Orders</h5></div>
                    <div class="col"></div>
                    <div class="col"><button class="btn btn-success btn-sm">Export CSV</button> <button class="btn btn-primary btn-sm" onclick="openfilter();" id="showbutton">Show Filter</button>     </div>
                </div>
            </div>
            <div class="container" id="filtersection" >
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label for="inputSelectCountry" class="form-label"><strong>P.O No</strong></label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter P.O No" >
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label for="inputSelectCountry" class="form-label"><strong>P.O Date</strong></label>
                        <input type="text" id="dateRangepo"  placeholder="From Date → To Date" class="ms-2 form-control w-auto" >

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label for="inputSelectCountry" class="form-label"><strong>RM Inhouse Date</strong></label>
                        <input type="text" id="dateRangerm" placeholder="From Date → To Date" class="ms-2 form-control w-auto" >

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label for="inputSelectCountry" class="form-label"><strong>Consolid Delivery Date</strong></label>
                            <input type="text" id="dateRangeconsolid" placeholder="From Date → To Date" class="ms-2 form-control w-auto" >
                    </div>


                </div>
                <div style="height: 5px;"></div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label for="inputSelectCountry" class="form-label"><strong>Confirmation Date</strong></label>
                        <input type="text" id="dateRangeconfirm" placeholder="From Date → To Date" class="ms-2 form-control w-auto" >
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label for="inputSelectCountry" class="form-label"><strong>Delivery Location</strong></label>


                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label for="inputSelectCountry" class="form-label"><strong>Divisions</strong></label>





                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label for="inputSelectCountry" class="form-label"><strong>Material Groups</strong></label>




                    </div>
                </div>
                <div style="height: 5px;"></div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label for="inputSelectCountry" class="form-label"><strong>Material</strong></label>


                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label for="inputSelectCountry" class="form-label"><strong>Status</strong></label>
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
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label for="inputSelectCountry" class="form-label"><strong>View</strong></label>
                        <select class="form-select" name="role" aria-label="Default select example">
                            <option value="">3 Month PO's</option>
                            <option value="">All PO's</option>

                        </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <button class="btn btn-warning btn-sm" style="margin-top: 30px;">Filter</button><button class="btn btn-info btn-sm" style="margin-top: 30px;margin-left: 10px;" >Reset</button>
                    </div>


                </div>
            </div>
            <div style="height: 10px;"></div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
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
                                    <td>{{$list->buyer_location_code}}</td>
                                    <td></td>
                                    <td>{{$list->vendor_code}}</td>
                                    <td>{{$list->vendor_name}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{$list->materialname}}</td>
                                    <td></td>
                                    <td>{{$list->qty}}</td>
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


        </div>
    </main>


@endsection

<script>
    function openfilter()
    {
        document.getElementById('filtersection').style.display='block';
        document.getElementById('showbutton').innerHTML='HideFilter';

    }
</script>
<script>
    function toggleDropdown(dropdownId) {
        document.querySelectorAll(".ms-dropdown").forEach(dropdown => {
            if (dropdown.id !== dropdownId) {
                dropdown.classList.remove("open");
            }
        });
        document.getElementById(dropdownId).classList.toggle("open");
    }

    function updateSelection(selectedTextId, optionsListId) {
        let selectedOptions = [];
        let checkboxes = document.querySelectorAll(`#${optionsListId} input[type="checkbox"]:checked`);

        checkboxes.forEach((checkbox) => {
            selectedOptions.push(checkbox.value);
        });

        let selectedText = document.getElementById(selectedTextId);
        selectedText.innerHTML = selectedOptions.length > 0 ? selectedOptions.join(', ') : "Select Options";
    }

    function filterOptions(searchBoxId, optionsListId) {
        let searchValue = document.getElementById(searchBoxId).value.toLowerCase();
        let options = document.querySelectorAll(`#${optionsListId} label`);

        options.forEach(option => {
            let text = option.textContent.toLowerCase();
            option.style.display = text.includes(searchValue) ? "block" : "none";
        });
    }

    // Close dropdown when clicking outside
    document.addEventListener("click", function (event) {
        if (!event.target.closest(".ms-dropdown")) {
            document.querySelectorAll('.ms-dropdown').forEach(dropdown => {
                dropdown.classList.remove('open');
            });
        }
    });
</script>



