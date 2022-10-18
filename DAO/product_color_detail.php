<?php
 function get_product_colors($id){
        $sql = "select 
                        cd.id_product,
                        cd.id_color , 
                        c.name as color_name
                    from color_detail cd
                    join colors c
                        on cd.id_color = c.id
                    where cd.id_product = $id";
        return pdo_query($sql);
    }

?>