<?php 

namespace App\Repositories;

use App\Models\Transaction;

class TransactionRepository
{
    public function store($data)
    {
        $data['transaction_code'] = $data['transaction_code'] ?? randomCode(5);

        return Transaction::create($data);

    }
    public function randomCode($limit = 5){

        return "ABCDE";
        

    }
}