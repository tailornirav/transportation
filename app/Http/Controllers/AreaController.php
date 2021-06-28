<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AreaController extends Controller {
  public function index() {
    return Area::all();
  }

  public function show($area) {
    $area = explode(",", $area);
    return Area::whereIn("city", $area)->get();
  }

  public function store(Request $request) {
    $area = Area::create($request->all());
    return response()->json($area, 201);
  }

  public function delete(Area $area) {
    $area->delete();
    return response()->json(null, 204);
  }
}
