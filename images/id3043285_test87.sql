-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2018 年 06 月 12 日 18:42
-- 伺服器版本: 10.1.31-MariaDB
-- PHP 版本： 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `id3043285_test87`
--

-- --------------------------------------------------------

--
-- 資料表結構 `addmovie`
--

CREATE TABLE `addmovie` (
  `num` int(11) NOT NULL,
  `mId` varchar(16) NOT NULL,
  `mv_name` varchar(20) NOT NULL,
  `mv_type` varchar(10) NOT NULL,
  `mv_place` varchar(15) NOT NULL,
  `mv_time` datetime NOT NULL,
  `mv_people` int(10) NOT NULL,
  `mv_sex` varchar(5) NOT NULL,
  `who_add` varchar(20) NOT NULL,
  `chatID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `addmovie`
--

INSERT INTO `addmovie` (`num`, `mId`, `mv_name`, `mv_type`, `mv_place`, `mv_time`, `mv_people`, `mv_sex`, `who_add`, `chatID`) VALUES
(21, '3333', '氣象站', '動作片', '高雄威秀', '2017-11-30 19:00:00', 4, '不拘', 'root', '9999'),
(25, 'xeriot109095', '氣象站', '動作片', '高雄威秀', '2017-11-30 20:45:00', 4, '不拘', 'root', '12450'),
(26, 'testaa', 'testaa', '動作片', '台北信義威秀', '2017-11-29 03:01:00', 1, '男生', '', '03110');

-- --------------------------------------------------------

--
-- 資料表結構 `chatroom`
--

CREATE TABLE `chatroom` (
  `time` datetime NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chatID` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `chatroom`
--

INSERT INTO `chatroom` (`time`, `content`, `name`, `chatID`) VALUES
('2017-11-29 20:45:32', '哈囉 有人在嘛', '賴冠銓', 'xeriot109095'),
('2017-11-29 20:45:42', '你好啊 要不要自我介紹一下', '周仔魚', '1111'),
('2017-11-29 20:45:48', '歡迎歡迎', '', ''),
('2017-12-03 11:17:08', '你好', '李一層', 'root'),
('2018-06-11 20:35:40', '123', '李一層', 'root');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `name` varchar(10) NOT NULL,
  `mId` varchar(16) NOT NULL,
  `pId` varchar(12) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`name`, `mId`, `pId`, `sex`, `phone`, `address`, `birth`) VALUES
('李一層', 'root', 'root2', '男生', '0928788780', 'Taipei', '1996-04-11'),
('李二層', 'test01', 'root', '男生', '0928788780', 'Taipei', '0000-00-00'),
('周任謙', '10312411', '2426', '男生', '0923290106', 'Kaoshiung', '1996-01-06'),
('周任謙', '1031241110', '2426', '男生', '0923290106', 'Kaoshiung', '2017-10-04'),
('海科金城武', '1234', '1234', '男生', '0932932207', 'Kaoshiung', '2017-10-05'),
('海科金城武', '12345', '12345', '男生', '0932932207', 'Kaoshiung', '2017-10-05'),
('海科金城武', '123456', '123456', '男生', '093293220*', 'Kaoshiung', '2017-10-01'),
('海科金城武', '123', '123', '男生', '123', 'Taipei', '0000-00-00'),
('lee', 'qqq', 'qqq', '男生', '', 'Taipei', '0000-00-00'),
('賴冠銓', 'xeriot109095', '0000', '男生', '00000000', 'Taipei', '2017-01-01'),
('賴冠銓', 'xeriot109', '0000', '男生', '', 'Taipei', '0000-00-00'),
('賴冠銓', '123456789', '0000', '男生', '', 'Kaoshiung', '2017-11-22'),
('周仔魚', '1111', '1111', '女生', '0912345789', 'Taipei', '2017-11-08'),
('結依', '2222', '2222', '女生', '222222222', 'Taipei', '2017-11-08'),
('鄭家純', '3333', '3333', '女生', '', 'Taipei', '0000-00-00'),
('testaa', 'testaa', 'test123', '男生', '0987678678', 'Taipei', '2018-02-13');

-- --------------------------------------------------------

--
-- 資料表結構 `movie`
--

CREATE TABLE `movie` (
  `name` varchar(50) NOT NULL,
  `time` varchar(10) NOT NULL,
  `mv_text` text NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `movie`
--

INSERT INTO `movie` (`name`, `time`, `mv_text`, `img`) VALUES
('乒乓少女大逆襲 Mix', '2017-11-10', '究竟小時候曾被稱為「天才桌球少女」的多滿子能否創造奇蹟？這群廢柴軍團是否能獲得佳績重整俱樂部？乒乓少女的大逆襲就此展開！', '8.png'),
('劇場版精靈寶可夢 Poke\'mon the Movie', '2017-11-17', '原本應該到大木研究所領取要成為自己夥伴的寶可夢的小智，因為睡過頭，等他抵達時只剩一隻不喜歡人類的皮卡丘。儘管兩人相處有些衝突，但卻也慢慢建立起友誼。在決定外出旅行的那天，他們看見傳說的寶可夢──鳳王在天際翱翔。小智與皮卡丘拿著虹色之羽立下誓言──「總有一天，我們會一起去見牠！」', '4.png'),
('奪魂鋸：遊戲重啟 Jigsaw', '2017-11-10', '這座城市發生多起慘絕人寰的殺人案，死者死狀悽慘，面目全非，在調查過程中，所有證據都直指凶手是人稱「拼圖殺人魔」的約翰克萊默，但克萊默已經過世10年。究竟是有人故弄玄虛，模仿他的手法犯案，還是殺人魔其實沒有死，血腥的獵殺遊戲又重新開始？', '3.png'),
('正義聯盟 Justice League', '2017-11-16', '華納兄弟影業隆重推出首次登上大銀幕的史詩動作冒險鉅片《正義聯盟》，該片由查克...', '1.png'),
('氣象戰 Geostorm', '2017-10-13', '在一連串前所未有的大自然災難威脅地球之後，全世界的領導人聚首，一同創造出一套複雜的衛星網路，來控制全球氣候及保護全人類的安全。但如今出了狀況，這套原本用來保護地球的系統卻反過來攻擊地球，人類要與時間賽跑，在這場全球地磁風暴毀滅一切及天地萬物之前發現真正的威脅。', '5.png'),
('絕處逢山 The Mountain Between Us', '2017-11-10', '在一場空難中倖存的兩名生還者，發現自己困在一座遙遠並白雪覆蓋的高山上，互不相識的他們唯有彼此依賴，才能逐一克服險峻的環境，當他們意識到不會有人知道他們受困在這，他們決定要靠著自己的能耐橫越這數百英里的荒野，互相砥礪彼此的求生意志，沒想到竟在患難中燃起愛的火花。', '7.png'),
('解憂雜貨店 Miracles of the Namiya General Store', '2017-10-13', '故事講述30年前有一家專門替人消憂解惑的「浪矢雜貨店」，只要在晚上把寫了煩惱的信投入鐵捲門中，隔天就可以在店後的牛奶箱得到回信。投信者包括一心想成為音樂人，不惜離家又休學的魚店老闆兒子；為了還巨債而猶豫是否該去當有錢人情婦的心荒女生；也有爸爸的公司倒閉，被帶著全家逃走的徬徨少年等等。', '6.png'),
('雷神索爾3：諸神黃昏 Thor: Ragnarok', '2017-10-24', '索爾被監禁在一個沒有辦法使用雷神之鎚的平行宇宙，他必須要與時間賽跑，試圖回到阿斯嘉阻止善惡對決所造成的諸神黃昏，也就是阿斯嘉文明的盡頭、索爾家鄉的毀滅，而這一切都是冥后海拉所主導。\r\n', '2.png');

-- --------------------------------------------------------

--
-- 資料表結構 `talk`
--

CREATE TABLE `talk` (
  `talk_to` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `talk_from` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `num` int(11) NOT NULL,
  `chatID` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `talk`
--

INSERT INTO `talk` (`talk_to`, `talk_from`, `num`, `chatID`) VALUES
('2222', '3333', 85, '9999'),
('2222', '3333', 86, '9999'),
('1111', '3333', 87, '9999'),
('1111', '3333', 88, '9999'),
('xeriot109095', '', 89, ''),
('xeriot109095', '3333', 90, '9999'),
('xeriot109095', '3333', 91, '9999'),
('root', '3333', 92, '9999'),
('root', '3333', 93, '9999'),
('root', '3333', 94, '9999'),
('root', '3333', 95, '9999'),
('testaa', '', 96, ''),
('testaa', '3333', 97, '9999'),
('testaa', '3333', 98, '9999'),
('root', '3333', 99, '9999');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `addmovie`
--
ALTER TABLE `addmovie`
  ADD PRIMARY KEY (`num`);

--
-- 資料表索引 `chatroom`
--
ALTER TABLE `chatroom`
  ADD PRIMARY KEY (`time`);

--
-- 資料表索引 `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`name`);

--
-- 資料表索引 `talk`
--
ALTER TABLE `talk`
  ADD PRIMARY KEY (`num`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `addmovie`
--
ALTER TABLE `addmovie`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- 使用資料表 AUTO_INCREMENT `talk`
--
ALTER TABLE `talk`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
