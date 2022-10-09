<!DOCTYPE html>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quản lý sản phẩm</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <!-- Header -->
        <div class="bg-[#999999]">
            <div class="container mx-auto">
                <div class="flex justify-between items-center h-[50px]">
                    <div class="">
                        <span class="text-white mr-1">
                            Chào bạn 
                        </span>
                        <span class="text-red-600 font-bold uppercase">Admin</span>
                    </div>

                    <div>
                        <ul class="flex flex-col-2 gap-7">
                            <li><a class="text-blue-600 font-bold hover:text-red-600 hover:underline" href="Trangchu.php">Trang chủ</a></li>
                            <li><a class="font-bold hover:text-red-600 hover:underline" href="logout.php">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <main>
            <?php include_once $VIEW_NAME ?>
        </main>
    </body>
</html>