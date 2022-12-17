<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function loginForm(Request $r)
    {
        if ($r->isMethod('get')) {
            return view("session.loginForm");
        } else {
            if ($r->input('login') === 'ahmed' && $r->input("pwd") === '1234') {
                $r->session()->put('login', $r->input('login'));
                return view('session.dashboard');
            }
            return view('session.loginForm');
        }
    }

    //! add product to database
    public function addProduct(Request $r)
    {
        if ($r->isMethod('get')) {
            return view('Product.form');
        } else {
            $pr = new Produit();
            $pr->ProName = $r->input("name");
            $pr->price = $r->input("price");
            $pr->date = $r->input("date");
            $pr->save();
            return redirect('products');
        }
    }

    //! get Products from Database 
    public function getProducts(){

        $data = Produit::all();
        return view('Product.products',["data"=>$data]);

    }

    //! delete Product 
    public function deleteProduct($id){
        Produit::find($id)->delete();
        return redirect('products');

    }
    //! update Product
    public function updateProduct(Request $r,$id){
        $pr = Produit::find($id);
        if ($r->isMethod('get')){
            return view('Product.updateForm',['product' => $pr]);

        } else {
            $pr->ProName = $r->input('name');
            $pr->price = $r->input('price');
            $pr->date = $r->input('date');
            $pr->save();
            return redirect('products');
        }
    }
}
