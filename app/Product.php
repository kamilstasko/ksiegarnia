<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Product
{
    public function __construct()
    {
    }

    public static function count($table, $column, $value)
    {
        return DB::table($table)->where($column, $value)->count();
    }

    public static function countWhere($table, $column, $value, $column2, $value2)
    {
        return DB::table($table)->where($column, $value)->where($column2, $value2)->count();
    }

    public static function max($column)
    {
        return DB::table('products')->max($column);
    }

    public static function min($column)
    {
        return DB::table('products')->min($column);
    }

    public static function sum($table, $column)
    {
        return DB::table($table)->sum($column);
    }

    public static function countId($table)
    {
        return DB::table($table)->count();
    }

    public static function selectRaw($table, $raw)
    {
        return DB::table($table)->select(DB::raw($raw))->get();
    }

    public static function selectWhere($column, $whereColumn, $whereValue)
    {
        return DB::table('products')->select($column)->where($whereColumn, $whereValue)->get();
    }

    public static function whereLike($table, $whereColumn, $whereValue)
    {
        return DB::table($table)->where($whereColumn, 'like', $whereValue)->get();
    }

    public static function getTablesNames()
    {
        return DB::table('information_schema.tables')
            ->select('table_name')
            ->where('table_schema', 'ksiegarnia')
            ->where('table_name', '<>', 'orders')
            ->where('table_name', '<>', 'orders_reservations')
            ->where('table_name', '<>', 'orders_products')
            ->where('table_name', '<>', 'password_resets')
            ->get();
    }

    public static function getColumnNames($table, $type)
    {
        $query = DB::table('INFORMATION_SCHEMA.COLUMNS')
            ->select('COLUMN_NAME')
            ->where('table_schema', 'ksiegarnia')
            ->where('TABLE_NAME', $table)
            ->where('COLUMN_NAME', '<>', 'password')
            ->where('COLUMN_NAME', '<>', 'remember_token');

        if ($type == 1)
            $query->where('COLUMN_NAME', '<>', 'id');

        $query->orderBy('ORDINAL_POSITION');

        return $query->get();
    }

    public static function getTablesData($table, $table_column)
    {
        $data = '';

        $query = DB::table($table);

        if ($table == 'products')
        {
            foreach ($table_column as $column)
                $data .= 'products.'.$column->COLUMN_NAME.',';

            $data = str_replace_last(',', '', $data);

            $query->join('products_category', 'products_category.id', 'products.id_cat')
                ->join('products_authors', 'products_authors.id', 'products.id_author')
                ->join('products_publishing', 'products_publishing.id', 'products.id_publishing')
                ->select(DB::raw($data.', products_category.slug as id_cat, concat(products_authors.name," ",products_authors.surname) as id_author, products_publishing.name as id_publishing'));
        }
        elseif ($table == 'products_items')
        {
            foreach ($table_column as $column)
                $data .= 'products_items.'.$column->COLUMN_NAME.',';

            $data = str_replace_last(',', '', $data);

            $query->join('products', 'products.id', 'products_items.id_products')
                ->select(DB::raw($data.', products.name as id_products'));
        }
        else {
            foreach ($table_column as $column)
                $data .= $column->COLUMN_NAME.',';

            $data = str_replace_last(',', '', $data);

            $query->select(DB::raw($data));
        }

        return $query->get();
    }

    public static function getTableData($table, $table_column, $id)
    {
        $data = '';

        foreach ($table_column as $column)
            $data .= $column->COLUMN_NAME.',';

        $data = str_replace_last(',', '', $data);

        return DB::table($table)
            ->select(DB::raw($data))
            ->where('id', $id)
            ->get()[0];
    }

    public static function whereRaw($table, $raw, $column, $value)
    {
        return DB::table($table)->select(DB::raw($raw))->where($column, $value)->get();
    }

    public static function disableDays($id)
    {
        $table = DB::table('orders_products')->select(DB::raw('date_rental, date_return'))->where('id_products_items', $id)->get();
        $table2 = DB::table('orders_reservations')->select(DB::raw('date_rental, date_return'))->where('id_products_items', $id)->get();

        foreach ($table2 as $value)
        {
            $tmp = new \stdClass();
            $tmp->date_rental = $value->date_rental;
            $tmp->date_return = $value->date_return;
            $table[] = $tmp;
        }

        return $table;
    }

    public static function getFirstItem($id)
    {
        return DB::table('products_items')->where('id_products', $id)->first()->id;
    }

    public static function allId($id)
    {
        return DB::table('products')
            ->join('products_category', 'products_category.id', 'products.id_cat')
            ->join('products_authors', 'products_authors.id', 'products.id_author')
            ->join('products_publishing', 'products_publishing.id', 'products.id_publishing')
            ->select(DB::raw('*, concat(products_authors.name," ",products_authors.surname) as author, products.name as name, products.id as id, products_publishing.name as publishing, products.name as name'))
            ->where('products.id', $id)
            ->get()[0];
    }

    public static function allItem($id)
    {
        return DB::table('products_items')
            ->join('products', 'products_items.id_products', 'products.id')
            ->join('products_category', 'products_category.id', 'products.id_cat')
            ->join('products_authors', 'products_authors.id', 'products.id_author')
            ->join('products_publishing', 'products_publishing.id', 'products.id_publishing')
            ->select(DB::raw('*, concat(products_authors.name," ",products_authors.surname) as author, products.name as name, products.id as id_product, products_items.id as id_item, products_publishing.name as publishing, products.name as name'))
            ->where('products_items.id', $id)
            ->get()[0];
    }

    public static function slug($slug)
    {
        return DB::table('products_category')->where('slug', $slug)->get()[0];
    }

    public static function getProducts($whereValue, $pagination, $sortColumn, $sortValue, $priceFrom, $priceTo, $authors, $publishing, $dateFrom, $dateTo, $phrase){
        $query = DB::table('products')
            ->join('products_category', 'products_category.id', 'products.id_cat')
            ->join('products_authors', 'products_authors.id', 'products.id_author')
            ->join('products_publishing', 'products_publishing.id', 'products.id_publishing')
            ->select(DB::raw('*, concat(products_authors.name," ",products_authors.surname) as author, products.name as name, products.id as id, (select id from products_items where id_products = products.id limit 1) as item, products_publishing.name as publishing, products.name as name'))
            ->whereBetween(DB::raw('(SELECT CASE WHEN is_promotion THEN promotion_price ELSE price END)'), [$priceFrom, $priceTo])
            ->whereBetween('year_publication', [$dateFrom, $dateTo]);

        if ($whereValue != 'list')
            $query->where('slug', 'like', $whereValue .'%');

        if ($authors[0] != 0)
            $query->whereIn('id_author', $authors);

        if ($publishing[0] != 0)
            $query->whereIn('id_publishing', $publishing);

        if ($phrase != '')
            $query->whereRaw('(products_authors.name like "%'.$phrase.'%" or products_authors.surname like "%'.$phrase.'%" or products.name like "%'.$phrase.'%" or products_publishing.name like "%'.$phrase.'%")');

        if ($sortColumn == 'price')
            $query->orderByRaw("CASE WHEN is_promotion THEN promotion_price ELSE price END ".$sortValue);
        else
            $query->orderBy('products.'.$sortColumn, $sortValue);

        return $query->paginate($pagination);
    }

    public static function table($table)
    {
        return DB::table($table)->get();
    }

    public static function getCategories($slug)
    {
        $data = DB::table('products_category')->where('id', 'like', '___')->where('id', 'not like', '000')->get();

        $tabs = array();

        foreach ($data as $value)
        {
            $tab['id'] = $value->id;
            $tab['slug'] = $value->slug;
            $tab['name'] = $value->title;

            if ($slug == $value->slug)
                $tab['isActive'] = true;
            else
                $tab['isActive'] = false;

            $data2 = DB::table('products_category')->where('id', 'like', $value->id . '___')->get();
            $tab['children'] = array();
            foreach ($data2 as $value2) {
                $child['id'] = $value2->id;
                $child['slug'] = $value2->slug;
                $child['name'] = $value2->title;

                if ($slug == $value2->slug)
                    $child['isActive'] = true;
                else
                    $child['isActive'] = false;

                array_push($tab['children'], $child);
            }

            array_push($tabs, $tab);
        }

        return $tabs;
    }

    public static function reservation($user, $item, $start, $end)
    {
        $query = "select count(*) as count from orders_reservations where id_products_items = " . $item . " and (('" . $start . "' between date_rental and date_return and '" . $end . "' between date_rental and date_return) or ('" . $start . "' <= date_rental and '" . $end . "' >= date_return) or ('" . $start . "' < date_rental and '" . $end . "' >= date_rental) or ('" . $start . "' <= date_return and '" . $end . "' > date_return))";
        $check1 = DB::select(DB::raw($query))[0]->count;

        $query = "select count(*) as count from orders_products where id_products_items = " . $item . " and (('" . $start . "' between date_rental and date_return and '" . $end . "' between date_rental and date_return) or ('" . $start . "' <= date_rental and '" . $end . "' >= date_return) or ('" . $start . "' < date_rental and '" . $end . "' >= date_rental) or ('" . $start . "' <= date_return and '" . $end . "' > date_return))";
        $check2 = DB::select(DB::raw($query))[0]->count;

        if ($check1 == 0 and $check2 == 0)
        {
            $time = now();

            $id_reservations = DB::table('orders_reservations')->insertGetId([
                'id_users' => $user,
                'id_products_items' => $item,
                'date_start' => $time,
                'date_rental' => $start,
                'date_return' => $end,
            ]);

            date_add($time, date_interval_create_from_date_string('30 minutes'));
            return [$time->format('H:i:s (d-m-Y)'), $id_reservations];
        }
        else
        {
            return false;
        }
    }

    public static function delete($table, $column, $value)
    {
        DB::table($table)->where($column, $value)->delete();
    }

    public static function updateReservation($id)
    {
        $time = now();
        $result = DB::table('orders_reservations')->where('id', $id)->update(['date_start' => $time]);

        if ($result)
        {
            date_add($time, date_interval_create_from_date_string('30 minutes'));
            return $time;
        }
        else
        {
            return $result;
        }
    }

    public static function order($user, $comments)
    {
        return DB::table('orders')->insertGetId([
            'id_users' => $user,
            'date' => now(),
            'paid_status' => 0,
            'comments' => $comments
        ]);
    }

    public static function orderProduct($id_orders, $id_products_items, $date_rental, $date_return, $price)
    {
        DB::table('orders_products')->insert([
            'id_orders' => $id_orders,
            'id_products_items' => $id_products_items,
            'date_rental' => $date_rental,
            'date_return' => $date_return,
            'price' => $price,
            'rate' => 0
        ]);
    }

    public static function showOrders($client)
    {
        $table = DB::table('orders')->where('id_users', $client)->get();

        foreach ($table as $value)
        {
            $value->items = DB::table('orders_products')
                ->join('products_items', 'orders_products.id_products_items', 'products_items.id')
                ->join('products', 'products.id', 'products_items.id_products')
                ->join('products_authors', 'products_authors.id', 'products.id_author')
                ->join('products_publishing', 'products_publishing.id', 'products.id_publishing')
                ->select(DB::raw('*, orders_products.id as id_orders_table, orders_products.price as price, concat(products_authors.name," ",products_authors.surname) as author, products.name as name, products.id as id_product, products_items.id as id_item, products_publishing.name as publishing, products.name as name, DATE_FORMAT(`date_rental`, "%d-%m-%Y") as date_rental, DATE_FORMAT(`date_return`, "%d-%m-%Y") as date_return, (SELECT slug from products_category where products_category.id = id_cat) as slug'))
                ->where('orders_products.id_orders', $value->id)
                ->get();

            $value->totalPrice = DB::table('orders_products')->where('id_orders', $value->id)->sum('price');
        }

        return $table;
    }

    public static function recommended($user)
    {
        if ($user)
        {
            $clientID = Auth::user()->getAuthIdentifier();

            $userProfile = DB::table('orders_products')
                ->join('products_items', 'products_items.id', 'orders_products.id_products_items')
                ->join('orders', 'orders_products.id_orders', 'orders.id')
                ->select('products_items.id_products')
                ->where('orders_products.rate', '>', 3)
                ->where('orders.id_users', '=', $clientID)
                ->groupBy('products_items.id_products')
                ->get();

            $userProfileArray = array();
            foreach ($userProfile as $data)
                array_push($userProfileArray, $data->id_products);

            $otherUserProfile = array();

            if (sizeof($userProfileArray))
                $probability = sizeof($userProfileArray);
            else
                $probability = -1;

            $quantity = 0;

            while($quantity != 5 and $probability >= 0) {
                $otherUserProfile = DB::table('orders_products')
                    ->join('products_items', 'products_items.id', 'orders_products.id_products_items')
                    ->join('orders', 'orders_products.id_orders', 'orders.id')
                    ->select('orders.id_users')
                    ->where('orders_products.rate', '>', 3)
                    ->where('orders.id_users', '<>', $clientID)
                    ->whereIn('products_items.id_products', $userProfileArray)
                    ->groupBy('orders.id_users')
                    ->havingRaw('COUNT(DISTINCT products_items.id_products) >= ' . $probability)
                    ->orderByDesc(DB::raw('(
                        select count(orders_products.id) 
                        from orders_products 
                        inner join orders o on o.id = orders_products.id_orders 
                        where o.id_users = orders.id_users)'))
                    ->limit(5)
                    ->get();

                $quantity = sizeof($otherUserProfile);
                --$probability;
            }

            $otherUserProfileArray = array();
            foreach ($otherUserProfile as $data)
                array_push($otherUserProfileArray, $data->id_users);

            $userHistoryProducts = DB::table('orders_products')
                ->join('products_items', 'products_items.id', 'orders_products.id_products_items')
                ->join('orders', 'orders_products.id_orders', 'orders.id')
                ->select('products_items.id_products')
                ->where('orders.id_users', '=', $clientID)
                ->groupBy('products_items.id_products')
                ->get();

            $userHistoryProductsArray = array();
            foreach ($userHistoryProducts as $data)
                array_push($userHistoryProductsArray, $data->id_products);

            $otherUserRecommendation = DB::table('orders_products')
                ->join('products_items', 'products_items.id', 'orders_products.id_products_items')
                ->join('orders', 'orders_products.id_orders', 'orders.id')
                ->join('products', 'products.id', 'products_items.id_products')
                ->select(DB::raw('products_items.id_products as id_recommendation_product, 
                    COUNT(products_items.id_products) as quantity'))
                ->whereIn('orders.id_users', $otherUserProfileArray)
                ->whereNotIn('products_items.id_products', $userHistoryProductsArray)
                ->groupBy('products_items.id_products')
                ->orderByDesc('id_recommendation_product')
                ->get();

            $userProductRecommendation = DB::table('recommendation_products')
                ->select(DB::raw('recommendation_products.id_products as id_recommendation_product, 
                    COUNT(recommendation_products.id_products) as quantity'))
                ->where('recommendation_products.id_users', '=', $clientID)
                ->whereNotIn('recommendation_products.id_products', $userHistoryProductsArray)
                ->groupBy('recommendation_products.id_products')
                ->orderByDesc('id_recommendation_product')
                ->get();

            $userHistoryProductsString = sizeof($userHistoryProductsArray) ?
                implode(",", $userHistoryProductsArray) : 0;

            $userCategoryRecommendation = DB::table('products')
                ->select(DB::raw('
                    products.id as id_recommendation_product, 
                    ifnull((
                        select COUNT(recommendation_category.id_cat)
                        from recommendation_category
                        where recommendation_category.id_users = ' . $clientID . ' 
                            and products.id_cat = recommendation_category.id_cat
                            and products.id not in (' . $userHistoryProductsString . ')
                        GROUP by recommendation_category.id_cat
                    ),0) as quantity'))
                ->groupBy('products.id')
                ->orderByDesc('id_recommendation_product')
                ->get();

            $recommendation = array();

            foreach ($otherUserRecommendation as $data)
            {
                if(array_key_exists($data->id_recommendation_product, $recommendation))
                    $recommendation[$data->id_recommendation_product] += ($data->quantity * 10);
                else
                    $recommendation[$data->id_recommendation_product] = ($data->quantity * 10);
            }

            foreach ($userProductRecommendation as $data)
            {
                if(array_key_exists($data->id_recommendation_product, $recommendation))
                    $recommendation[$data->id_recommendation_product] += ($data->quantity * 5);
                else
                    $recommendation[$data->id_recommendation_product] = ($data->quantity * 5);
            }

            foreach ($userCategoryRecommendation as $data)
            {
                if(array_key_exists($data->id_recommendation_product, $recommendation))
                    $recommendation[$data->id_recommendation_product] += ($data->quantity * 3);
                else
                    $recommendation[$data->id_recommendation_product] = ($data->quantity * 3);
            }

            arsort($recommendation);

            $recommendationResult = array_keys($recommendation);

            $query = DB::table('products')
                ->join('products_category', 'products_category.id', 'products.id_cat')
                ->join('products_authors', 'products_authors.id', 'products.id_author')
                ->join('products_publishing', 'products_publishing.id', 'products.id_publishing')
                ->select(DB::raw('*, concat(products_authors.name," ",products_authors.surname) as author, 
                    products.name as name, products.id as id, (select id from products_items 
                    where id_products = products.id limit 1) as item, products_publishing.name as publishing, 
                    products.name as name'))
                ->whereIn('products.id', array_slice($recommendationResult, 0,15))
                ->get();
        }
        else
            $query = DB::table('products')
                ->join('products_category', 'products_category.id', 'products.id_cat')
                ->join('products_authors', 'products_authors.id', 'products.id_author')
                ->join('products_publishing', 'products_publishing.id', 'products.id_publishing')
                ->join('products_items', 'products_items.id_products', 'products.id')
                ->select(DB::raw('             
                    products.*,
                    products_category.slug,
                    concat(products_authors.name," ",products_authors.surname) as author, 
                    products.name as name, products.id as id, 
                    (select id from products_items where id_products = products.id limit 1) as item, 
                    products_publishing.name as publishing, 
                    products.name as name,
                    ifnull((
                        select AVG(orders_products.rate)
                        from orders_products
                        INNER JOIN products_items on products_items.id = orders_products.id_products_items
                        where orders_products.rate > 0 and products_items.id_products = products.id
                        group by products_items.id_products
                    ),0) *
                    (
                        select count(products_items.id_products)
                        from orders_products
                        INNER JOIN products_items on products_items.id = orders_products.id_products_items
                        where products_items.id_products = products.id
                        group by products_items.id_products
                    ) as recommendation
                '))
                ->groupBy('products.id')
                ->orderByDesc('recommendation')
                ->limit(10)
                ->get();

        return $query;
    }

    public static function getAuthors($slug)
    {
        if ($slug == 'list')
            return DB::table('products_authors')->select(DB::raw('concat(products_authors.name," ",products_authors.surname) as value_desc, products_authors.id as value'))->get();
        else
            return DB::table('products_authors')
                ->select(DB::raw('distinct concat(products_authors.name," ",products_authors.surname) as value_desc, products_authors.id as value'))
                ->join('products', 'products_authors.id', 'products.id_author')
                ->join('products_category', 'products_category.id', 'products.id_cat')
                ->whereRaw('products_category.slug like "%'. $slug . '%"')
                ->get();
    }

    public static function getPublishings($slug)
    {
        if ($slug == 'list')
            return DB::table('products_publishing')->select(DB::raw('products_publishing.name as value_desc, products_publishing.id as value'))->get();
        else
            return DB::table('products_publishing')
                ->select(DB::raw('distinct products_publishing.name as value_desc, products_publishing.id as value'))
                ->join('products', 'products_publishing.id', 'products.id_publishing')
                ->join('products_category', 'products_category.id', 'products.id_cat')
                ->whereRaw('products_category.slug like "%'. $slug . '%"')
                ->get();
    }

    public static function saveEdit($data)
    {
        $update_data = array();

        foreach (json_decode($data['column']) as $column)
            if (isset($data[$column->COLUMN_NAME]))
                $update_data[$column->COLUMN_NAME] = $data[$column->COLUMN_NAME];
            else
                $update_data[$column->COLUMN_NAME] = '';

        return DB::table($data['table'])
            ->where('id', $data['id'])
            ->update($update_data);
    }

    public static function saveAdd($data)
    {
        $add_data = array();

        foreach (json_decode($data['column']) as $column)
            if (isset($data[$column->COLUMN_NAME]))
                $add_data[$column->COLUMN_NAME] = $data[$column->COLUMN_NAME];
            else
                if ($column->COLUMN_NAME == 'date')
                    $add_data[$column->COLUMN_NAME] = now();
                else
                    $add_data[$column->COLUMN_NAME] = '';

        return DB::table($data['table'])
            ->insert($add_data);
    }

    public static function changeRate($id, $rate)
    {
        $update_data = array();
        $update_data['rate'] = $rate;

        return DB::table('orders_products')
            ->where('id', $id)
            ->update($update_data);
    }

    public static function addRecommendationCategory($cat, $user)
    {
        $add_data = array();
        $add_data['id_cat'] = DB::table('products_category')->select('id')->whereRaw('slug like "'. $cat . '"')->get()[0]->id;
        $add_data['id_users'] = $user;
        $add_data['date'] = now();

        return DB::table('recommendation_category')
            ->insert($add_data);
    }

    public static function addRecommendationProducts($product, $user)
    {
        $add_data = array();
        $add_data['id_products'] = $product;
        $add_data['id_users'] = $user;
        $add_data['date'] = now();

        return DB::table('recommendation_products')
            ->insert($add_data);
    }
}
