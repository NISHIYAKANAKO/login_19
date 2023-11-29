<!-- ユーザー会員登録 -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>新規会員登録</title>
</head>
<body>



<form action="insert.php" method="post">
    <main>
<h2>新規会員登録</h2>

    <label for="username">名前:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="email">メールアドレス:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="tel">電話番号:</label>
    <input type="tel" id="tel" name="tel" required><br>

    <label for="address">住所:</label>
    <input type="text" id="address" name="address"><br>
<p>
    <input type="submit" value="登録する">
</p>

</form>
</main>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームが送信されたときの処理

    // 入力データの取得
    $username = $_POST["username"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $address = $_POST["address"];

    // ここでデータベースにデータを保存するなどの処理を行います

    // 例: ファイルに保存する場合
    $file = fopen("users.txt", "a");
    fwrite($file, "$username, $email, $tel, $address\n");
    fclose($file);

    echo "登録が完了しました。";
}
?>

</body>
</html>

<!-- ここまで -->

    <!-- </body>
</html> -->
