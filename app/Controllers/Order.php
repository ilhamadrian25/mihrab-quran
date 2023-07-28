<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Order extends BaseController
{
    public function index()
    {
        $orderID = $this->request->getVar('order_id');
        $statusCode = $this->request->getVar('status_code');
        $transactionStatus = $this->request->getVar('transaction_status');

        if ($statusCode == 200) {
            session()->destroy();
            // session()->remove('snap_token');            
            redirect()->back();
        }
    }
}
