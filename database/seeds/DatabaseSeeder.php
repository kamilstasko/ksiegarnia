<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ConfigTable::class);
        $this->call(MenuTable::class);
        $this->call(PagesTable::class);
        $this->call(ProductsAuthorsTable::class);
        $this->call(ProductsCategoryTable::class);
        $this->call(ProductsLimitsTable::class);
        $this->call(ProductsPublishingTable::class);
        $this->call(ProductsSortTable::class);
        $this->call(ProductsTable::class);
        $this->call(ProductsItemsTable::class);
        $this->call(SlidersTable::class);
        $this->call(UsersTable::class);
        $this->call(OrdersTable::class);
        $this->call(OrdersProductsTable::class);
        $this->call(OrdersReservationsTable::class);
        $this->call(AdminsTable::class);
        $this->call(RecommendationProductsTable::class);
        $this->call(RecommendationCategoryTable::class);
    }
}
