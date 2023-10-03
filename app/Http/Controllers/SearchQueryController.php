<?php

namespace App\Http\Controllers;

    use App\SearchQuery;
    use App\Models\Product;
    use Illuminate\Http\Request;

    class SearchQueryController extends Controller
    {
        public function search(Request $request)
        {
            $query = $request->input('query');

            $results = SearchQuery::where('query', 'like', '%' . $query . '%')->paginate(10);

            // Сохранение поискового запроса в базе данных
            SearchQuery::create(['query' => $query]);

            return view('products.search_results', ['results' => $results, 'query' => $query]);
        }
}
