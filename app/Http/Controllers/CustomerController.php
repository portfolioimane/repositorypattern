<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Repositories\CustomerRepository;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
	private $customerRepository;
	public function __construct(CustomerRepository $customerRepository){
		$this->customerRepository=$customerRepository;
	}
    public function index(){
       $customers=$this->customerRepository->all();
       return $customers;
    }
}
