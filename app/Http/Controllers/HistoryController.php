<?php

namespace App\Http\Controllers;
use App\Barang;
use App\Pesanan;
use App\User;
use App\Models\Order;
use App\PesananDetail;
use Auth;
use Carbon\Carbon;
use Alert;
use App\Province;
use App\City;
use App\Courier;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=',0)->get();

    	return view('history.index', compact('pesanans'));
    }

    public function admin()
    {
    	$pesanans = Pesanan::all();
        $users = User::all();

    	return view('history.admin', compact('pesanans', 'users'));
    }

    public function detail($id)
    {
    	$pesanan = Pesanan::where('id', $id)->first();
        $user = User::where('id', Auth::user()->id)->first();
    	$pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        // Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-5eeoDpKrrgdxUBPiXxsj45I1';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;



    $params = array(
        'transaction_details' => array(
            'order_id' => rand(),
            'gross_amount' => $pesanan->jumlah_harga+$pesanan->kode+$pesanan->ongkir,
        ),
        'customer_details' => array(
            'first_name' => $pesanan->nama ,
            'email' => $user->email,
            'phone' => $pesanan->notelp,
        ),
        // 'item_details' => array(
        //       "id"=> "a1",
        //       "price"=> $pesanan->jumlah_harga,
        //       "quantity"=> $pesanan_details->jumlah,
        //       "name"=> $pesanan_details->barang,
        // ),
        
    );



    $snapToken = \Midtrans\Snap::getSnapToken($params);


    // return dd($pesanan->barang->nama_barang);
     	return view('history.detail', compact('pesanan','pesanan_details', 'user', 'snapToken'));
    }

    public function detail_post(Request $request, $id){

        $pesanan = Pesanan::where('id', $id)->first();
        $pesanan->status = 2;
        $pesanan->tanggalEx = Carbon::now()->addDay();
        $json = json_decode($request->get('json'));
        $pesanan->status_payment = $json->transaction_status;
        $pesanan->status_code = $json->status_code;
        $pesanan->transaction_id = $json->transaction_id;
        $pesanan->order_id = $json->order_id;
        $pesanan->gross_amount = $json->gross_amount;
        $pesanan->payment_type = $json->payment_type;
        $pesanan->pdf_url = isset($json->pdf_url) ? $json->pdf_url : null;
        $pesanan->payment_code = isset($json->payment_code) ? $json->payment_code : null;
        $pesanan->bank = isset($json->va_numbers[0]->bank) ? $json->va_numbers[0]->bank : null;
        $pesanan->va_number = isset($json->va_numbers[0]->va_number) ? $json->va_numbers[0]->va_number : null;
        $pesanan->permata_va_number = isset($json->permata_va_number) ? $json->permata_va_number : null;
        $pesanan->bill_key = isset($json->bill_key) ? $json->bill_key : null;
        $pesanan->biller_code = isset($json->biller_code) ? $json->biller_code : null;
        $pesanan->update();

        // dd($request);
        notify()->success('Successfully select payment');
        return redirect('history');
    }

    public function payment_handler(Request $request){
        $json = json_decode($request->getContent());
        $signature_key = hash('sha512',$json->order_id . $json->status_code . $json->gross_amount . 'SB-Mid-server-5eeoDpKrrgdxUBPiXxsj45I1');

        if($signature_key != $json->signature_key){
            return abort(404);
        }

        $order = Order::where('order_id', $json->order_id)->first();
        return $order->update(['status'=>$json->transaction_status]);
        // return Response::json(['status' => 'ok'], 200);
        // return $signature_key;
    }

    
}
