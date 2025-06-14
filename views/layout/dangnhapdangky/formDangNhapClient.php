<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .error-message {
            color: #e63946;
            /* Màu đỏ nổi bật */
            font-size: 14px;
            /* Giảm kích thước chữ */
            font-weight: bold;
            /* Chữ đậm hơn */
            display: block;
            /* Hiển thị trên một dòng mới */
            margin-top: 5px;
            /* Khoảng cách trên */
        }

        body {
            background: url(https://img.lovepik.com/background/20211022/small/lovepik-clothing-sale-pink-background-literary-poster-image_605659852.jpg) no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Đăng Nhập</h2>
        <p class="login-box-msg text-center" style="color: red; font-size: 17px; ">
            Vui Lòng Đăng Nhập
        </p>
        <form action="<?= BASE_URL . '?act=check-dang-nhap-client' ?>" method="post">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" id="email" name="email"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <span class="error-message">
                    <?= !empty($_SESSION['errors']['email']) ? $_SESSION['errors']['email'] : '' ?>

                </span>
            </div>

            <div class="mb-4">
                <label for="mat_khau" class="block text-sm font-medium text-gray-700">Mật khẩu:</label>
                <input type="password" id="mat_khau" name="mat_khau"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <span class="error-message">
                    <?= !empty($_SESSION['errors']['mat_khau']) ? $_SESSION['errors']['mat_khau'] : '' ?>

                </span>
            </div>


            <button type="submit" name="dangnhap"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                Đăng nhập
            </button>
        </form>
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">
                Đã có tài khoản?
                <a href="<?= BASE_URL . '?act=form-dang-ki-client' ?>" class="text-blue-500 hover:text-blue-600 font-semibold">
                    Đăng ký
                </a>
            </p>

        </div>
    </div>
</body>

</html>