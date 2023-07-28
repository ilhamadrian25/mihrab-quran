<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Session extends BaseController
{
    public function snap_token()
    {
        $snapToken = session()->get('snap_token');
        return $this->response->setJSON(['snap_token' => $snapToken]);
    }

    public function remove_snap_token()
    {
        session()->remove('snap_token');
        return $this->response->setJSON(['success' => true]);
    }
}
