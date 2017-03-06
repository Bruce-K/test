<?php

namespace App\Http\Controllers;

use App\Models\GoodStore;
use App\Models\Good;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GoodController extends Controller {
    //fjdskfjdasgodos
    public function index() {
        $goods = Good::all();
        $g = 1;
        return view('good.index', ['goods' => $goods]);
    }

    public function create() {
        return view('good.create');
    }

    public function store(Request $request) {

        return 1;


        DB::beginTransaction();

        try {

            $good = Good::create(['name' => request('name'), 'price' => request('price')]);
            $good_store = new GoodStore();
            $good_store->good_id = $good->id;

            $good_store->save();
            DB::commit();
            return redirect('good');
        } catch (Exception $e) {
            DB::rollBack();
            return "数据回滚";
        }
    }

    public function show($id) {

        $good = Good::find($id);
        if ($good) {
            dd($good);
        } else {
            return 'id not found';
        }
    }

    public function edit($id) {
        $good = Good::find($id);
        if ($good) {
            return view('good.edit', ['good' => $good]);
        } else {
            return 'id not found';
        }
    }

    public function update($id, Request $request) {
        $good = Good::find($id);
        if ($good) {
            $good->name = $request->name;
            $good->price = $request->price;
            $good->save();
            return redirect('good');
        } else {
            return 'id not found';
        }
    }

    public function destroy($id) {


        $good = Good::find($id);


        if ($good->delete()) {
            return redirect('good');
        } else {
            return 'id not found';
        }
    }
}
