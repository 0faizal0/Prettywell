<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class notification extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => env('MIDTRANS_SERVER_KEY'), 'production' => false);
		$this->load->library('veritrans');
		$this->veritrans->config($params);
		$this->load->helper('url');
		
    }

	public function index()
	{
		echo 'test notification handler';
		$json_result = file_get_contents('php://input');
		$result = json_decode($json_result, "true");

        $order_id = $result['order_id'];
        $data = ['status_code' => $result['status_code']];

		if($result['status_code'] == 200){
            $this->db->update('orders', $data, array('order_id' => $order_id));
        }


	}
}
