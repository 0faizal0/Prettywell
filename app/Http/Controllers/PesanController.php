<?php

namespace App\Http\Controllers;
use App\Barang;
use App\Pesanan;
use App\User;
use App\PesananDetail;
use Auth;
use Alert;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Province;
use App\City;
use App\Courier;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function pesan(Request $request, $id)
    {	
    	$barang = Barang::where('id', $id)->first();
    	$tanggal = Carbon::now();
        $tanggalEx = Carbon::now()->addDay();
        $time = Carbon::now()->timezone('Asia/Jakarta')->format('H:i');

    	//validasi apakah melebihi stok
    	if($request->jumlah_pesan > $barang->stok)
    	{
    		return redirect('pesan/'.$id);
    	}

    	//cek validasi
    	$cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    	//simpan ke database pesanan
    	if(empty($cek_pesanan))
    	{
    		$pesanan = new Pesanan;
	    	$pesanan->user_id = Auth::user()->id;
	    	$pesanan->tanggal = $tanggal;
            $pesanan->tanggalEx = $tanggalEx;
            $pesanan->time = $time;
	    	$pesanan->status = 0;
            $pesanan->ongkir = 0;
	    	$pesanan->jumlah_harga = 0;
            $pesanan->alamatku = 0;
            $pesanan->nama = 0;
            $pesanan->notelp = 0;
            $pesanan->kode = mt_rand(100, 999);

            $pesanan->status_payment = 'choose payment';
            $pesanan->status_code = 0;
            $pesanan->transaction_id = 0;
            $pesanan->order_id = 0;
            $pesanan->gross_amount = 0;
            $pesanan->payment_type = 0;
            $pesanan->bank = 0;
            $pesanan->va_number = 0;
            $pesanan->permata_va_number = 0;
            $pesanan->bill_key = 0;
            $pesanan->biller_code = 0;
            $pesanan->permata_va_number = 0;
            $pesanan->pdf_url = 0;
	    	$pesanan->save();
    	}
    	

    	//simpan ke database pesanan detail
    	$pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

    	//cek pesanan detail
    	$cek_pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
    	if(empty($cek_pesanan_detail))
    	{
    		$pesanan_detail = new PesananDetail;
	    	$pesanan_detail->barang_id = $barang->id;
	    	$pesanan_detail->pesanan_id = $pesanan_baru->id;
	    	$pesanan_detail->jumlah = $request->jumlah_pesan;   
	    	$pesanan_detail->jumlah_harga = $barang->harga*$request->jumlah_pesan;
            $pesanan_detail->ongkir = 0;   
	    	$pesanan_detail->save();
    	}else 
    	{
    		$pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();

    		$pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

    		//harga sekarang
    		$harga_pesanan_detail_baru = $barang->harga*$request->jumlah_pesan;
	    	$pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
	    	$pesanan_detail->update();
    	}

    	//jumlah total
    	$pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    	$pesanan->jumlah_harga = $pesanan->jumlah_harga+$barang->harga*$request->jumlah_pesan;
    	$pesanan->update();
    	
        Alert::success('Pesanan Sukses Masuk Keranjang', 'Success');
    	return redirect('check-out');

    }

    public function check_out()
    {
    $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    $couriers = Courier::pluck('title', 'code');
    $provinces = Province::pluck('title', 'province_id');
 	$pesanan_details = [];
        if(!empty($pesanan))
        {
            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        }
        
        return view('pesan.check_out', compact('pesanan', 'pesanan_details', 'couriers', 'provinces'));
    }

    public function delete($id)
    {
        $pesanan_detail = PesananDetail::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();


        $pesanan_detail->delete();

        Alert::error('Pesanan Sukses Dihapus', 'Hapus');
        return redirect('check-out');
    }

    public function konfirmasi()
    {

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->tanggal = Carbon::now();
        $pesanan->tanggalEx = Carbon::now()->addDay();
        $pesanan->time = Carbon::now()->timezone('Asia/Jakarta')->format('H:i');
        $pesanan->update();

        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail) {
            $barang = Barang::where('id', $pesanan_detail->barang_id)->first();
            $barang->stok = $barang->stok-$pesanan_detail->jumlah;
            $barang->update();
            // dd($pesanan_detail->jumlah);
        }

        $stale_posts = PesananDetail::where('updated_at', '<', Carbon::now()->subDays(1))->get();

        foreach ($stale_posts as $post) {
        $post->delete();
        }
        
        Alert::success('Pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('/history');

    }


    public function getCities($id){
        $city = City::where('province_id', $id)->pluck('title', 'city_id');
        return json_encode($city);
    }

    public function submit(Request $request){
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $couriers = Courier::pluck('title', 'code');
        $provinces = Province::pluck('title', 'province_id');
        $cost = RajaOngkir::ongkosKirim([
            'origin' => '178',
            'destination' => $request->city_destination,
            'weight' => 1000,
            'courier' => 'jne'
        ])->get();

        // $pesanan_detail = PesananDetail::where('id', $id)->first();

        // $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        // $pesanan->jumlah_harga = $pesanan->jumlah_harga+$cost->jumlah_harga;
        // $pesanan->update();

        $pesanan_details = [];
        if(!empty($pesanan))
        {
            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        }

        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
        foreach ($pesanan_details as $pesanan_detail) {
            $pesanan_detail->ongkir = $cost[0]['costs'][1]['cost'][0]['value'];
            $pesanan_detail->update();
        }

        $pesanan->ongkir = $cost[0]['costs'][1]['cost'][0]['value'];
        $pesanan->alamatku = $request->alamatku;
        $pesanan->nama = $request->nama;
        $pesanan->notelp = $request->notelp;
        $pesanan->update();

        // return $request->city_destination;

        return view('pesan.check_ongkir', compact('cost', 'couriers', 'provinces', 'pesanan', 'pesanan_details'));
    }

    public function payment(Request $request){
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
        'gross_amount' => 10000,
    ),
    'customer_details' => array(
        'first_name' => 'budi',
        'last_name' => 'pratama',
        'email' => 'budi.pra@example.com',
        'phone' => '08111222333',
    ),
);
 
$snapToken = \Midtrans\Snap::getSnapToken($params);

return view('payment', ['snap_token' => $snapToken]);

    }

    public function payment_post(Request $request){
        return $request;
    }
    
}
