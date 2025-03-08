<?php

namespace App\Http\Controllers\vendor;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use App;
use Session;
use Route;
use DB;
use App\Vendor_users;
use App\BuyerLocations;
use App\MaterialDivisions;
use App\MaterialGroups;
use App\Materials;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Form;
use Illuminate\Support\Facades\Html;


class HomeController extends Controller
{

    public function Dashboard()
    {
        return view('vendor.Dashboard');
    }

    public function purchase_orders()
    {
        $vendorid=session()->get( 'vendor_id' );

        $buyerlocationlist = BuyerLocations::orderBy('id', 'asc')->get();
        $materialdivisionslist = MaterialDivisions::orderBy('id', 'asc')->get();
        $materialgroupslist = MaterialGroups::orderBy('id', 'asc')->get();
      //  $materialslist = Materials::orderBy('id', 'asc')->get();

        $recordlist = DB::table('purchase_order_items')
            ->join('purchase_orders', 'purchase_order_items.purchase_order_id', '=', 'purchase_orders.id')
            ->join('buyer_locations', 'purchase_orders.buyer_location_id', '=', 'buyer_locations.id')
            ->join('vendors', 'vendors.id', '=', 'purchase_orders.vendor_id')
            ->join('material_divisions', 'material_divisions.id', '=', 'purchase_order_items.material_division_id')
            ->join('material_groups', 'material_groups.id', '=', 'purchase_order_items.material_group_id')
            ->join('materials', 'materials.id', '=', 'purchase_order_items.material_id')
            ->where('purchase_orders.vendor_id', $vendorid)
            ->where('purchase_order_items.status', 'Pending')
            ->where('purchase_order_items.is_del', 0)
//          ->where('purchase_order_items.is_delivery_completed', 1)
            ->where('purchase_order_items.is_restricted', 0)
            ->select('purchase_orders.company_code', 'purchase_order_items.purchase_order_number', 'purchase_orders.created_date',
                'purchase_orders.document_date','buyer_locations.code as buyer_location_code','vendors.code as vendor_code',
                'vendors.name as vendor_name','purchase_order_items.material_code as materialname','purchase_order_items.quantity as qty',)
            ->orderBy('purchase_order_items.status', 'asc')
            ->orderBy('purchase_orders.document_date', 'desc')
            ->get();
            //dd($recordlist);
        $i=1;
        return view('vendor.purchase_orders', compact('i','buyerlocationlist','materialdivisionslist','materialgroupslist','recordlist'));
    }
}
