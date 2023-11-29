-- テーブルの構造 `gs_an_table`

CREATE TABLE IF NOT EXISTS `gs_an_table` (
    `id` int(12) NOT NULL AUTO_INCREMENT,
    `username` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
    `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
    `address` text COLLATE utf8_unicode_ci,
    `indate` datetime NOT NULL,
    `tel` varchar(12) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- テーブルのデータのダンプ `gs_an_table`
INSERT INTO `gs_an_table` (`id`, `username`, `email`, `address`, `indate`, `tel`) VALUES
(1, '地位図太郎', 'test0@test.jp', '札幌市南区中の沢一丁目', '2000-07-01 10:32:00', '0115713611'),
(2, '地位図次郎', 'test1@test.jp', '札幌市中央区北１条西２８丁目', '2010-09-01 12:10:00', '09011111234'),
(3, '五十嵐護', 'test2@test.jp', '横浜市神奈川区西神奈川一丁目', '2023-12-05 11:17:00', '08055555555');
