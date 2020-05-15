<?php

class Products
{
    private $dbase;

    public function __construct()
    {
        $this->dbase = new Database;
    }

    public function getAllProducts()
    {
        $this->dbase->query('SELECT products.*, brand_name
                        FROM products
                        INNER JOIN brands
                        ON products.brand_id = brands.brand_id
                        ORDER BY list_price DESC 
                        ');

        return $this->dbase->resultSet();
    }

    public function getProductsByBrand($brand)
    {
        $this->dbase->query("SELECT products.*, brand_name 
                        FROM products
                        INNER JOIN brands 
                        ON products.brand_id = brands.brand_id
                        where products.brand_id = {$brand}  
                        ORDER BY brand_name DESC                       
                        ");

        return $this->dbase->resultSet();
    }

    public function getBrands()
    {
        $this->dbase->query('SELECT * FROM brands');

        return $this->dbase->resultSet();
    }

    public function getBrand($brand_id)
    {
        $this->dbase->query('SELECT * FROM brands WHERE brand_id = :brand_id');

        $this->dbase->bind(':brand_id', $brand_id);

        return $this->dbase->single();
    }

    public function getProduct($product_id)
    {
        $this->dbase->query('SELECT * FROM products WHERE product_id = :product_id');

        $this->dbase->bind(':product_id', $product_id);

        return $this->dbase->single();
    }

    public function create($data)
    {
        $this->dbase->query('INSERT INTO products (product_name, brand_id, description, model_year, list_price ) 
    VALUES (:product_name, :brand_id, :description, :model_year, :list_price)');

        $this->dbase->bind(':product_name', $data['product_name']);
        $this->dbase->bind(':brand_id', $data['brand_id']);
        $this->dbase->bind('description', $data['description']);
        $this->dbase->bind(':model_year', $data['model_year']);
        $this->dbase->bind(':list_price', $data['list_price']);

        if ($this->dbase->execute()) {
            return true;
        }

        return false;
    }

    public function delete($id)
    {
        $this->dbase->query("DELETE FROM products WHERE product_id = {$id}");

        if ($this->dbase->execute()) {
            return true;
        }

        return false;
    }

    public function update($product_id, $data)
    {
        $this->dbase->query(" UPDATE products
        SET
        product_name = :product_name,
        description = :description,
        model_year = :model_year,
        list_price = :list_price
        WHERE product_id = {$product_id}    
    ");

        $this->dbase->bind(':product_name', $data['product_name']);
        $this->dbase->bind(':description', $data['description']);
        $this->dbase->bind(':model_year', $data['model_year']);
        $this->dbase->bind(':list_price', $data['list_price']);

        if ($this->dbase->execute()) {
            return true;
        }

        return false;
    }
}
