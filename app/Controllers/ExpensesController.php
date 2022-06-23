<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ExpenseModel;

class ExpensesController extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
    public function index()
    {
        $expenses = new ExpenseModel();
        $data['expenses'] = $expenses->where('deleted', null)->findAll();
        return view('expenses/index', $data);
    }
    //create
    public function create()
    {
        return view('expenses/create');
    }

    //store
    public function store()
    {
        $session = \Config\Services::session();
        $expense = new ExpenseModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'amount' => $this->request->getPost('amount'),
            'deleted' => null,
        ];
        if ($expense->insert($data)) {
            $session->setFlashdata('message', 'Expense created successfully');
            return redirect()->to(base_url('/expenses'));
        } else {
            $session->setFlashdata('message', 'Expense creation failed');
            return redirect()->to(base_url('/expenses/create'));
        }
    }

    //edit
    public function edit($id)
    {
        $expense = new ExpenseModel();
        $data['expense'] = $expense->find($id);
        return view('expenses/edit', $data);
    }

    //update
    public function update($id)
    {
        $session = \Config\Services::session();
        $expense = new ExpenseModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'amount' => $this->request->getPost('amount'),
        ];
        if ($expense->update($id, $data)) {
            $session->setFlashdata('message', 'Expense updated successfully');
            return redirect()->to(base_url('/expenses'));
        } else {
            $session->setFlashdata('message', 'Expense update failed');
            return redirect()->to(base_url('/expenses/edit/' . $id));
        }
    }
    //delete
    public function delete($id)
    {
        $session = \Config\Services::session();
        $expense = new ExpenseModel();
        $data = [
            'deleted' => date('Y-m-d H:i:s'),
        ];
        if ($expense->update($id, $data)) {
            $session->setFlashdata('message', 'Expense deleted successfully');
            return redirect()->to(base_url('/expenses'));
        } else {
            $session->setFlashdata('message', 'Expense delete failed');
            return redirect()->to(base_url('/expenses/edit/' . $id));
        }
    }
}
