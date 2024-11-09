<?php

namespace App\Http\Controllers;

use App\Models\Receita;
use App\Models\TipoReceita;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class ReceitaController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user()->id;
    
        // Verifica se a requisição possui um parâmetro para exibir todas as receitas
        if ($request->has('all')) {
            $receitas = Receita::where('user_id', $user)->simplePaginate(10);
        } else {
            // Filtra receitas criadas no mês atual
            $receitas = Receita::where('user_id', $user)
                               ->whereMonth('created_at', now()->month)
                               ->whereYear('created_at', now()->year)
                               ->simplePaginate(10);
        }
    
        return view('app.receita.index', ['receitas' => $receitas, 'request' => $request->all()]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_receitas = TipoReceita::all();
        return view('app.receita.create', ['tipo_receitas' => $tipo_receitas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Receita::create($request->all());
        return redirect()->route('receita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receita  $receita
     * @return \Illuminate\Http\Response
     */
    public function show(Receita $receita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receita  $receita
     * @return \Illuminate\Http\Response
     */
    public function edit(Receita $receita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Receita  $receita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receita $receita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receita  $receita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receita $receita)
    {
        //
    }
}
