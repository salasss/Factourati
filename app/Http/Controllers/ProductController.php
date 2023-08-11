<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductFormRequest;
use App\Http\Controllers\CategorieController;
//use App\Http\Requests\productformrequest;

class ProductController extends Controller
{
    public function index() {
        $user_id = auth()->id();

        $Products = Product::where('user_id', $user_id)->get();
        return view('produits.Index', compact('Products'));
        }
        public function create() {
            $user_id = auth()->id();
            $categories = DB::table('categories')->where('user_id', $user_id)->get();
            return view('produits.ajout', compact('categories'));
            }

        public function store(Request $request) {

            if($request->hasFile('images')){
                $destination = 'public\images\produits';
                $filenom = $request->file('image');
                $path = $request->file('image')->storeAs($destination, $filenom);}
            $produit = new Product;
            $produit ->Reference = $request -> Reference;
            $produit ->nom = $request -> nom;
            $produit ->description = $request -> description;
            $produit ->Famille = $request -> Famille;

                $produit ->prix_ht = $request -> prixht;

                $produit ->image = $request -> image;
                $produit ->user_id = auth()->id();


            $produit ->save();
            return redirect('Produit/Produits-ajout')->with('message','Le produit est ajouté avec succès');



             }
             public function edit($Product_id)
             {
                $user_id = auth()->id();
                 $Product = Product::find($Product_id);
                 $categories = DB::table('categories')->where('user_id', $user_id)->get();
                 return view('produits.Modification', compact('Product'),compact('categories'));

             }

             public function update(ProductFormRequest $request, $Product_id)
                {
                    $data = $request->validated();

                    $Product = Product::where('id',$Product_id)-> update([
                        'Reference'=> $data['Reference'],
                        'nom' => $data['nom'],
                        'prix_ht'=> $data['prix_ht'],
                        'description'=> $data['description']



                    ]);
                    return redirect('Produits')->with('message','Le produit a été modifié avec succès');
                }

                public function destroy(Product $Product_id)
                {
                    $Product_id->delete();

                    return redirect('Produits')->with('message','Le Client a été supprimé avec succès');

                }


}
