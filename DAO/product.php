<?php
    // require_once "./global.php";

    // Gọi tất cả bảng
    function product_selectall(){
        $sql = "SELECT * from products";
        return pdo_query($sql);
    }

    function product_select_all_innerjoin(){
        $sql = "SELECT p.id,p.name,p.image,p.price,p.detail,p.bit_active,clr.name_color,cap.name_capacity, cate.name_cate
        from products p
        inner join colors clr on clr.id = p.color
        inner join capacity cap on cap.id = p.capacity
        inner join categories cate on cate.id = p.id_categories";
        return pdo_query($sql);
    }

    // Gọi hàm danh mục theo id
    function product_select_id($id){
        $sql = "SELECT * from products where id=?";
        return pdo_query_one($sql,$id);
    }

    function product_select_all_innerjoin_id($id){
        $sql = "SELECT p.id,p.name,p.image,p.price,p.detail,p.bit_active,clr.name_color,cap.name_capacity, cate.name_cate
        from products p
        inner join colors clr on clr.id = p.color
        inner join capacity cap on cap.id = p.capacity
        inner join categories cate on cate.id = p.id_categories
        where p.id = $id";
        return pdo_query_one($sql,$id);
    }

    function product_select_all_innerjoin_cate($id_categories){
        $sql = "SELECT *
        from products
        where id_categories = $id_categories";
        return pdo_query_one($sql,$id_categories);
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
    function product_update($name,$image,$price,$detail,$bit_active,$id_categories,$color,$capacity,$id){
        $sql = "UPDATE products SET name = ?,image = ?, price = ?,detail = ?, bit_active = ?,id_categories = ?, color = ?, capacity = ? WHERE id = ?";
        pdo_execute($sql,$name,$image,$price,$detail,$bit_active,$id_categories,$color,$capacity,$id);
    }

    // Xóa danh mục
    function product_delete($id){
        $sql = "DELETE FROM products WHERE id=?";
        pdo_execute($sql,$id);
    }
    
    // function product_color(){
    //     $sql = "SELECT colors.name_color ,colors.id,
    //             products.id,image_file,price,bit_active,id_categories,products.name,products.detail,
    //             color_detail.id_color,color_detail.id_product
    //     FROM colors
    //     JOIN color_detail on colors.id = color_detail.id_color
    //     JOIN products on products.id = color_detail.id_product 
        
    //     ";
    //     return pdo_query($sql);

        
    // }
    // function product_capacity(){
    //     $sql = "SELECT capacity.name_capacity ,capacity.id,
    //             products.id,image_file,price,bit_active,id_categories,
    //             capacity_detail.id_capacity,capacity_detail.id_product
    //     FROM capacity
    //     JOIN capacity_detail on capacity.id = capacity_detail.id_capacity
    //     JOIN products on products.id = capacity_detail.id_product 
        
    //     ";
    //     return pdo_query($sql);
    // }
    // function product_color_detail($id){
    //     $sql = "select 
    //                     pcx.id_product,
    //                     pcx.id_color , 
    //                     c.name_color as color_name
    //                 from color_detail pcx
    //                 join colors c
    //                     on pcx.id_color = c.id
    //                 where pcx.id_product = $id";
    //     return pdo_query($sql);
    // }
?>