<?php
    // require_once "./global.php";

    // Gọi tất cả bảng
    function product_selectall(){
        $sql = "SELECT * from products ";
        return pdo_query($sql);
    }

    // Gọi hàm danh mục theo id
    function product_select_id($id){
        $sql = "SELECT * from products where id=?";
        return pdo_query_one($sql,$id);
    }
    // lay san pham theo danh muc
    
       // phan trang
       function get_product_top(){
          $sql = "SELECT * FROM products ORDER BY id LIMIT 0, 4";
          return pdo_query($sql);
       }
    // Thêm mới danh mục
    function product_insert($name,$image,$price,$detail,$bit_active,$color,$capacity,$id_categories){
        $sql = "INSERT INTO products (name,image,price,detail,bit_active,color,capacity,id_categories) VALUES(?,?,?,?,?,?,?,?)";
        pdo_execute($sql,$name,$image,$price,$detail,$bit_active,$color,$capacity,$id_categories);
    }
    
    // Update Danh mục 
    function product_update($id,$name,$image,$price,$detail,$bit_active,$color,$capacity,$id_categories){
        $sql = "UPDATE products SET name = ?,image = ?,price = ?,detail = ?,bit_active = ?,capacity = ?,id_categories WHERE id = ?";
        pdo_execute($sql,$id,$name,$image,$price,$detail,$bit_active,$color,$capacity,$id_categories);
    }

    // Xóa danh mục
    function product_delete($id){
        $sql = "DELETE FROM products WHERE id=?";
        pdo_execute($sql,$id);
    }
    function product_color(){
        $sql = "Select products.name,products.image,products.price, products.detail,products.bit_active, capacity.name_capacity, colors.name_color,products.id_categories
        from ((products
        INNER JOIN colors on capacity.id_capacity = products.id_capacity)
        INNER JOIN colors on colors.id_color = product.id_color)";
        return pdo_query($sql);
    }
   
?>