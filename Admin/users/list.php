<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <style>
            td{
                text-align: center;
                border: 1px solid #000;
                padding: 8px;
            }
     </style>
</head>
<body>
        <!-- Content -->

        <div class="container mx-auto flex gap-5 mt-4">
            <div class="flex-none w-[300px]">
                <div class="">
                    <div class="">
                        <div class="bg-[#525151] text-white p-[10px] text-[18px] leading-[20px] rounded-t-lg">Admin Menu</div>
                        <div class="pb-[15px] border border-[#ccc] border-solid rounded-b-lg">
                            <ul class="m-0 p-0">
                                <li class="leading-[30px] pl-[15px] border border-[#ccc] border-dashed"><a class="hover:text-red-600" href="../products/index.php">Quản lý sản phẩm</a></li>
                                <li class="leading-[30px] pl-[15px] border border-[#ccc] border-dashed"><a class="hover:text-red-600" href="../categories/index.php">Quản lý danh mục</a></li>
                                <li class="leading-[30px] pl-[15px] border border-[#ccc] border-dashed"><a class="hover:text-red-600" href="../users/index.php">Quản lý thành viên</a></li>
                                <li class="leading-[30px] pl-[15px] border border-[#ccc] border-dashed"><a class="hover:text-red-600" href="../comments/index.php">Quản lý bình luận</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grow">
                <div class="w-full mx-auto">
                    <div class="">
                        <div class="bg-[#525151] text-white p-[10px] text-[18px] leading-[20px] rounded-t-lg">Danh sách thành viên</div>
                        <div class="pb-[15px] border border-[#ccc] border-solid rounded-b-lg">
                            <div class="flex justify-center h-[50px] items-center mt-3">
                                <a class="border border-[#000] p-2 bg-[#000] text-white" href="../../Site/register.php">Thêm thành viên</a>
                            </div>
                            
                            <div class="flex items-center justify-center mt-6">
                                <table>
                                    <tr class="font-bold">
                                        <td>Mã tài khoản</td>
                                        <td>Gmail</td>
                                        <td>Mật khẩu</td>
                                        <td>Số điện thoại</td>
                                        <td>Tên chức vụ</td>
                                        <td>Sửa tài khoản</td>
                                        <td>Xóa tài khoản</td>
                                    </tr>
                                    
                                <tr>
                                    <td>

                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <a class="border border-[#000] p-2 bg-[#008844] text-white" href="../users/index.php?update&id=">Sửa</a>
                                    </td>
                                    <td>
                                        <a class="border border-[#000] p-2 bg-[#d62d20] text-white" href="../users/index.php?remove&id=">Xóa</a>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>