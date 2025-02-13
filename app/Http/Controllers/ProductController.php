<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    private $model;

    public function __construct() {
        $this->model =  new Product();
    }

    public function create(Request $req)
    {        
        $rules = array(
            "name" => "required |min:1",
            "description" => "required |min:1",
            "image" => "required |min:3",
            "category" => "required |min:3",
            "price" => "required |min:3",
        );
        $validator = Validator::make($req->all(), $rules);
       
        if ($validator->fails()) {
           return response()->json($validator->errors(),400);
        }
        $product = new Product();
        $product ->name =$req->name;
        $product ->description =$req->description;
        $product ->image =$req->image;
        $product ->price =$req->price;
        $product ->category =$req->category;
        $product ->save();
        $saveProduct = Product::finder($req->id);
        if ($saveProduct) {
            return response()->json(["Msg"=>"Produto salvo  ",
               "Produto"=>$product
        ], 201);

        }
        return response()->json("Erro ao salvar o produto   ", 400);
    
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        if ($product) {
            return response()->json($product
     , 200);
        }
        return response()->json("Erro ao buscar a lista de produtos    ", 400);


    }

    /**
     * Show the form for creating a new resource.
     */
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( $req)
    {
        $product = Product::where("id", $req)->orWhere("name", $req)->first();
        if ($product) {
            return response()->json($product
     , 200);
        }
        return response()->json("Erro ao buscar o  produto   ", 400);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req,  $id)
    {
        $rules = array(
            "description" => "required |min:1",
            "image" => "required |min:3",
            "category" => "required |min:3",
            "price" => "required |min:3",

        );
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
           return response()->json($validator->errors(),400);
        }
        $product = Product::find($id);
        if (!$product) {
            return response()->json("Producto que pretende editar não existe", 200);
        }
        $product ->description =$req->description;
        $product ->name =$product->name;
        $product ->image =$req->image;
        $product ->price =$req->price;
        $product ->category =$req->category;

        $saveProduct = $product ->save();
        if ($saveProduct) {
            return response()->json(["Msg"=>"Produto editado com sucesso  ",
               "Produto"=>$product
        ], 200);

        }
        return response()->json("Erro ao editar o produto   ", 400);
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $produto = Product::find($id);
        if ($produto) {
            $produto->delete();
            return response()->json("Sucesso ao eliminar o produto   ", 200);
        }
        return response()->json("produto que pretende eliminar não existe ", 400);
    
    }
}
