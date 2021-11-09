<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;


class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'gender'   => 'required',
            'email'    => 'required|email',
            'postcode' => 'required',
            'address'  => 'required',
            'building_name' => 'nullable',
            'opinion'  => 'required|max:120',
        ]);
        // フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        return view('contacts.confirm', ['inputs' => $inputs]);
    }

    public function process(Request $request)
    {
        $action = $request->get('action', 'return');
        $input  = $request->except('action');

        if ($action === 'submit') {

            // DBにデータを保存
            $contact = new Contact();
            $contact->fill($input);
            $contact->save();

            // メール送信


            return redirect()->route('complete');
        } else {
            return redirect()->route('contact')->withInput($input);
        }
    }

    public function complete()
    {
        return view('contacts.complete');
    }


    public function store()
    {
        $items = Contact::paginate(10);
        return view('contacts.store')->with('contacts', $items);
    }



}