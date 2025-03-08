<?php
namespace App\Http\Controllers\vendor;
use App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use App;
use Session;
use Route;
use DB;
use App\Vendor_users;
use App\Vendors;
use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Form;
use Illuminate\Support\Facades\Html;


class AuthController extends Controller {
    public function index( Request $request ) {

        return view( 'vendor.index' );
    }


    public function checkuser( Request $request )
    {
        $rules = array(
            'username'             => 'required',
            'pw'                => 'required',
        );

        $fieldNames = array(
            'username'             => 'Username',
            'pw'                => 'Password',

        );
        $validator = Validator::make( $request->all(), $rules );
        $validator->setAttributeNames( $fieldNames );

        if ( $validator->fails() ) {
            return back()->withErrors( $validator )->withInput();
        } else {


            $user = DB::table('vendor_users')->where( 'username', $request->username )->first();

            if ($user && Hash::check($request->pw, $user->password)) {
                session()->put( 'vendor_id', $user->vendor_id );
                $vendor_id = session()->get( 'vendor_id' );
                $loginname = DB::table('vendors')->where( 'code', $request->username )->first()->name;
                session()->put( 'loginname', $loginname);
                $loginname = session()->get( 'loginname' );
                return redirect( 'vendor/Dashboard' );
            } else {
                $request->session()->flash( 'Invalid' );
                return redirect( '/vendor/login' );
            }



        }
    }


    public function logout( Request $request ) {
        session_abort();
        Session::flush();
        Auth::logout();
        return redirect( '/vendor/login' );
    }


}
