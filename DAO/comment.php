<?php
    
    // Gọi tất cả bảng
    function comment_selectall(){
        $sql = "SELECT * from comments";
        return pdo_query($sql);
    }
    
    // Gọi hàm Bình luận theo id
    function comment_select_id($id){
        $sql = "SELECT * from comments where id=?";
        return pdo_query_one($sql,$id);
    }
    // lấy dữ liệu của bảng users, products, comments
    function comment_select(){
        $sql = "SELECT users.fullname,comments.id,comments.content, comments.time, comments.id_product, comments.id_user, products.name from comments 
        INNER JOIN users on users.id = comments.id_user
        INNER JOIN products on products.id = comments.id_product";
        return pdo_query($sql);
    }
    
    // Thêm mới Bình luận
    function comment_insert($content,$time,$id_product,$id_user){
        $sql = "INSERT INTO comments(content,time,id_product,id_user) VALUES(?,?,?,?)";
        pdo_execute($sql,$content,$time,$id_product,$id_user);
    }
    
    // Update Bình luận 
    function comment_update($content,$time,$id_product,$id_user,$id){
        $sql = "UPDATE comments SET content = ?,time = ?, id_product = ?, id_user = ? WHERE id = ?";
        pdo_execute($sql,$content,$time,$id_product,$id_user,$id);
    }

    // Xóa Bình luận
    function comment_delete($id){
        $sql = "DELETE FROM comments WHERE id=?";
        pdo_execute($sql,$id);
    }
    
    
?>