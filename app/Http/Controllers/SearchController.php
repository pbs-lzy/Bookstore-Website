<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller {
	public function index() {
		return view('search.search');
	}

	public function search(Request $request) {
		if($request->ajax()) {
			$output = "";
			$products = DB::table('books')->where('name', 'LIKE', '%'.$request->search."%")->get();
			if($products) {
				foreach ($products as $key => $product) {
					$output.='<tr>'.
					'<td>'.$product->id.'</td>'.
					'<td><a href="'.route('books.show',$product->id).'">'.$product->name.'</a></td>'.
					'<td><a href="'.route('books.show',$product->id).'">'.$product->author.'</a></td>'.
					'<td>'.$product->price.'</td>'.
					'<td>'.$product->publisher.'</td>'.
					'<td><img class="popable" width="100px" src="'.$product->image_url.'"/></td>'.
					'</tr>';
				}
				return Response($output);
  			}
   		}
	}
}