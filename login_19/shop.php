<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>ショッピングカート</title>
</head>

<body>
    <header>
        <h1>ショッピングカート</h1>
        <a href="membership.php">会員登録</a>
    </header>

    <main>

        <!-- 商品一覧 -->
        <h2>商品一覧</h2>
        <img src="img/morupk.png" alt="通常盤モルちゃん写真集">
        <form method="post" action="">
            <input type="hidden" name="item_id" value="1">
            <input type="hidden" name="item_name" value="通常盤モルちゃん写真集">
            <input type="hidden" name="item_price" value="6850">
            <label>通常盤モルちゃん写真集（初回特典付） - 価格: ¥6,850</label>
            <input type="submit" name="add_to_cart" value="カートに追加">
        </form>
        <img src="img/morua.png" alt="モルちゃん写真集【TYPE:A】">
        <form method="post" action="">
            <input type="hidden" name="item_id" value="2">
            <input type="hidden" name="item_name" value="モルちゃん写真集【TYPE:A】">
            <input type="hidden" name="item_price" value="7200">
            <label>モルちゃん写真集【TYPE:A】 - 価格: ¥7,200</label>
            <input type="submit" name="add_to_cart" value="カートに追加">
        </form>
        <img src="img/morub.png" alt="モルちゃん写真集【TYPE:B】">
        <form method="post" action="">
            <input type="hidden" name="item_id" value="3">
            <input type="hidden" name="item_name" value="モルちゃん写真集【TYPE:B】(ハードBOX)">
            <input type="hidden" name="item_price" value="9980">
            <label>モルちゃん写真集【TYPE:B】(ハードBOX) - 価格: ¥9,980</label>
            <input type="submit" name="add_to_cart" value="カートに追加">
        </form>

        <!-- カートの中身を表示 -->
        <ul>
            <?php
            session_start();

            // カートの初期化
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }

            // フォームからのデータ処理
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['add_to_cart'])) {
                    $item_id = $_POST['item_id'];
                    $item_name = $_POST['item_name'];
                    $item_price = $_POST['item_price'];

                    // カートにアイテムを追加
                    $item = array(
                        'id' => $item_id,
                        'name' => $item_name,
                        'price' => $item_price,
                        'quantity' => 1
                    );

                    // カートに同じアイテムが既に存在する場合、数量を増やす
                    if (array_key_exists($item_id, $_SESSION['cart'])) {
                        $_SESSION['cart'][$item_id]['quantity']++;
                    } else {
                        $_SESSION['cart'][$item_id] = $item;
                    }
                }

                // カートを空にする
                if (isset($_POST['clear_cart'])) {
                    unset($_SESSION['cart']);
                    $_SESSION['cart'] = array();
                }
            }

            // カートの中身を表示
            echo '<h2>カートの中身</h2>';
            echo '<ul>';

            $total_price = 0;

            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $item) {
                    echo '<li>' . $item['name'] . ' - 価格: ¥' . $item['price'] . ' - 数量: ' . $item['quantity'] . '</li>';
                    $total_price += $item['price'] * $item['quantity'];
                }
            }

            echo '</ul>';
            echo '<p>合計金額: ¥' . $total_price . '</p>';
            ?>
            <!-- カートを空にする -->
            <form method="post" action="">
                <input type="submit" name="clear_cart" value="カートを空にする">
            </form>
        </ul>
    </main>

    <footer>
        &copy; Cheese ACADEMY TOKYO
    </footer>
</body>

</html>