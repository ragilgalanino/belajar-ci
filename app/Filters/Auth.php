<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null) {
        //Jika user blm login
        if (! session()->get('logged_in')) {
            //maka redirect ke halaman login
            return redirect()->to(base_url('admin/login'));
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        
    }
}

?>