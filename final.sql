-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 01:38 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book_pdf`
--

CREATE TABLE `book_pdf` (
  `id_documents` int(11) NOT NULL,
  `title_documents` varchar(255) NOT NULL,
  `date_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `link_dowload` text NOT NULL,
  `id_course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_pdf`
--

INSERT INTO `book_pdf` (`id_documents`, `title_documents`, `date_upload`, `link_dowload`, `id_course`) VALUES
(38, 'Bảng chữ cái Hiragana và Katakana cho người mới bắt đầu', '2021-02-18 03:48:04', 'https://drive.google.com/file/d/14BJW7TS-yzb6D2huSp078TdVTG-7Ifye/view', 12),
(41, 'File nghe minna', '2021-02-18 03:44:48', 'https://drive.google.com/open?id=1yUz5_VHbCy0l3wFqbtRSrD2fEVWQnwfn', 12),
(43, 'Sách Kanji', '2021-02-18 03:45:56', 'https://drive.google.com/file/d/1kYw0800a6Tt8ic9OUGdxztIprOZwP_7h/view', 12),
(44, 'Tài liệu Ngữ pháp trong khóa học', '2021-02-18 03:46:31', 'https://drive.google.com/file/d/1Np_XCOGnxwmUzrHRzQdF4ZvjbK7qW6RX/view', 12),
(45, 'Sách Từ vựng và giải thích ngữ pháp', '2021-02-18 03:46:52', 'https://drive.google.com/open?id=1KA9V7fkpBk4kBFDcyaOOBUzRyzr6NgAq', 12),
(46, 'Sách Đọc hiểu', '2021-02-18 03:47:29', 'https://drive.google.com/file/d/19kP4KwYr5D1QC6raRCwzYgWpa1pbnGYC/view', 12);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `tendanhmuc`) VALUES
(54, 'Văn Hóa Nhật Bản'),
(55, 'Học tiếng Nhật'),
(57, 'Kinh nghiệm thi cử'),
(58, 'Nihongo Notes'),
(59, 'Blog Tiếng Nhật');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `title_course` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `date_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `price` varchar(100) NOT NULL,
  `information` mediumtext NOT NULL,
  `level` varchar(255) NOT NULL,
  `id_course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`title_course`, `image`, `date_upload`, `price`, `information`, `level`, `id_course`) VALUES
('Khóa học tiếng Nhật N5', 'http://localhost:8888/Project2/uploads/Course/n52.png', '2021-02-17 02:55:00', '', '<p><strong>Tham gia v&agrave;o kh&oacute;a học JLPT N5 tại Dekiru, người học sẽ:</strong><br />\r\n- Biết c&aacute;ch đọc, c&aacute;ch viết hai bảng chữ c&aacute;i Hiragana, Katakana, gần 1000 từ vựng v&agrave; 150 chữ Kanji sơ cấp.&nbsp;<br />\r\n- Nắm vững c&aacute;c cấu tr&uacute;c ngữ ph&aacute;p JLPT N5 kh&aacute;c nhau, &aacute;p dụng được v&agrave;o nhiều t&igrave;nh huống trong thực tế.<br />\r\n- Nghe, hiểu v&agrave; c&oacute; thể giao tiếp được tiếng Nhật trong c&aacute;c t&igrave;nh huống thường gặp trong cuộc sống, &hellip;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2018/07/16/khoahoc-n5-636673778890234250.jpg\" /></p>\r\n\r\n<p><strong>Kh&oacute;a học tiếng Nhật JLPT N5 tại Dekiru&nbsp;bao gồm những g&igrave;?</strong><br />\r\nKh&oacute;a học tiếng Nhật JLPT N5 ở Dekiru gồm 32 buổi học. Ở mỗi buổi, bạn sẽ được học c&aacute;c kỹ năng bao gồm:</p>\r\n\r\n<p><strong>1.Kanji</strong><br />\r\nDekiru đ&atilde; nghi&ecirc;n cứu v&agrave; x&acirc;y dựng một hệ thống học Kanji ho&agrave;n to&agrave;n mới so với c&aacute;c phương ph&aacute;p truyền thống từ trước đến nay.<br />\r\nỞ kh&oacute;a JLPT N5, việc học Kanji được chia l&agrave;m 3 cấp độ. Ở mỗi cấp độ, bạn sẽ được học v&agrave; luyện tập ngay lập tức những th&ocirc;ng tin cơ bản của một chữ Kanji như c&aacute;ch ghi nhớ, &yacute; nghĩa, &acirc;m On v&agrave; &acirc;m Kun, &hellip;</p>\r\n\r\n<p><strong>2.Từ vựng</strong><br />\r\nC&aacute;c b&agrave;i học từ vựng sẽ bao gồm c&aacute;c từ mới bổ trợ cho bạn xuy&ecirc;n suốt trong buổi học, mỗi từ vựng bao gồm &acirc;m thanh, &yacute; nghĩa, h&igrave;nh ảnh, đi k&egrave;m l&agrave; c&aacute;c v&iacute; dụ thực tế v&agrave; một loạt b&agrave;i tập ph&iacute;a sau.<br />\r\nĐặc biệt, Dekiru đ&atilde; nghi&ecirc;n cứu v&agrave; ph&aacute;t triển một h&igrave;nh thức học từ vựng ho&agrave;n to&agrave;n mới. Việc học từ mới qua &acirc;m thanh v&agrave; h&igrave;nh ảnh sẽ gi&uacute;p bạn ghi nhớ nhanh v&agrave; l&acirc;u hơn, ngo&agrave;i ra c&ograve;n khiến qu&aacute; tr&igrave;nh học trở n&ecirc;n th&uacute; vị hơn rất nhiều.</p>\r\n\r\n<p><br />\r\n<strong>3. Ngữ ph&aacute;p</strong><br />\r\nMỗi b&agrave;i học ngữ ph&aacute;p tr&igrave;nh độ N5 sẽ bao gồm video do gi&aacute;o vi&ecirc;n giảng dạy, phần t&oacute;m tắt lại kiến thức trong b&agrave;i v&agrave; rất nhiều b&agrave;i tập bổ trợ, củng cố những kiến thức đ&atilde; được học.</p>\r\n\r\n<p><br />\r\n<strong>4. Đọc hiểu</strong><br />\r\nC&aacute;c b&agrave;i đọc hiểu trong kh&oacute;a học JLPT N5 được bi&ecirc;n soạn v&agrave; sắp xếp theo mức độ kh&oacute; tăng dần để gi&uacute;p người học l&agrave;m quen với c&aacute;ch h&agrave;nh văn trong tiếng Nhật. Ngay sau mỗi b&agrave;i, người học sẽ trả lời c&aacute;c c&acirc;u hỏi mang t&iacute;nh tổng hợp để kiểm tra lại mức độ hiểu biết về nội dung của đoạn văn, đoạn hội thoại đ&oacute;.&nbsp;<br />\r\nĐặc biệt, bạn c&oacute; thể tra từ mới trực tiếp ngay trong b&agrave;i đọc m&agrave; kh&ocirc;ng cần phải sử dụng từ điển hỗ trợ.</p>\r\n\r\n<p><br />\r\n<strong>6. Nghe hiểu</strong><br />\r\nKh&oacute;a học JLPT N5 của Dekiru bao gồm rất nhiều b&agrave;i tập nghe hiểu với hệ thống dạng học đa dạng, trực quan v&agrave; sinh động.</p>\r\n\r\n<p>Trong mỗi buổi học, người nghe sẽ được tiếp x&uacute;c với những cuộc hội thoại trong c&aacute;c chủ đề thường ng&agrave;y, được r&egrave;n luyện c&aacute;ch nắm bắt th&ocirc;ng tin khi đối thoại bằng tiếng Nhật.</p>\r\n\r\n<p><strong>Đặc biệt, tất cả những kỹ năng bạn được học ph&iacute;a tr&ecirc;n sẽ phục vụ cho b&agrave;i kiểm tra kiến thức nhỏ ngay ph&iacute;a sau mỗi buổi học. B&agrave;i kiểm tra n&agrave;y sẽ tổng hợp lại tất cả những nội dung bạn đ&atilde; được học, gi&uacute;p củng cố lại v&agrave; ghi nhớ kiến thức một c&aacute;ch l&acirc;u d&agrave;i hơn.</strong></p>\r\n', '', 12),
('Khóa học N4 By Hiếu Lưu', 'http://localhost:8888/Project2/uploads/Course/n44.png', '2021-02-22 03:36:39', '', '<p>kh&oacute;a hc n4 bla bla</p>\r\n', '', 13),
('Nội dung 1', 'http://localhost:8888/Project2/uploads/Course/Comparison-of-the-advantages-and-disadvantages-of-the-plan-driven-and-agile-processes.png', '2021-03-19 13:00:27', '', '', '', 15),
('Nội dung 1', 'http://localhost:8888/Project2/uploads/Course/dashboardStudent.html', '2021-03-19 13:12:09', '', '', '', 16),
('Khánh Vân (Sao Nhập Ngũ): 123', 'http://localhost:8888/Project2/uploads/Course/chart.png', '2021-03-19 13:12:18', '', '', '', 17);

-- --------------------------------------------------------

--
-- Table structure for table `lession`
--

CREATE TABLE `lession` (
  `id_lesson` int(11) NOT NULL,
  `id_course` int(11) DEFAULT NULL,
  `title_lesson` varchar(300) DEFAULT NULL,
  `date_upload` timestamp NULL DEFAULT current_timestamp(),
  `video` varchar(300) DEFAULT NULL,
  `id_documents` text DEFAULT NULL,
  `file` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lession`
--

INSERT INTO `lession` (`id_lesson`, `id_course`, `title_lesson`, `date_upload`, `video`, `id_documents`, `file`) VALUES
(18, 12, 'Bảng chữ cái Hiragana - Phần 1(あ, か, さ) - Dekiru Nihongo', '2021-02-09 06:53:47', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/GSC3VDCvpX8\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, 'http://localhost:8888/Project2/uploads/Course/Video/n31.png'),
(19, 12, 'Hàng chữ た(ta)-な(na)-は(ha)', '2021-02-17 02:52:37', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/qRKPdZ6COVk\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, 'http://localhost:8888/Project2/uploads/Course/Video/'),
(20, 13, 'bài 1 : by hiếu lư', '2021-02-22 03:37:55', NULL, NULL, '<iframe width='),
(21, 13, 'bài 2 by hiếu lưu', '2021-02-22 03:38:14', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zAIRyLQH4yE\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, 'http://localhost:8888/Project2/uploads/Course/Video/'),
(22, 12, 'Bảng chữ cái Hiragana - Phần 3(ま, ら, や, わ)', '2021-03-01 02:04:25', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jpoMh9pdv1Y\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, 'http://localhost:8888/Project2/uploads/Course/Video/'),
(23, 12, 'Bảng chữ cái Hiragana - Phần 4 (が, ざ, だ)', '2021-03-01 02:52:34', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/bvSrOe8mvr0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, 'http://localhost:8888/Project2/uploads/Course/Video/'),
(24, 12, 'Bảng chữ cái Hiragana - Phần 5 (ば, ぱ,)', '2021-03-01 02:52:59', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/p6xpOvSDleU\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, 'http://localhost:8888/Project2/uploads/Course/Video/'),
(25, 12, 'Bảng chữ cái Katakana - Phần 1 (ア, カ, サ)', '2021-03-01 02:53:22', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/UA20CiuiWxw\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, 'http://localhost:8888/Project2/uploads/Course/Video/'),
(26, 12, 'Bảng chữ cái Katakana - Phần 2 (タ, ナ, ハ)', '2021-03-01 02:53:40', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7fZ7IpriVwk\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, 'http://localhost:8888/Project2/uploads/Course/Video/'),
(27, 12, 'Bảng chữ cái Katakana - Phần 3 (マ, ラ, ヤ,ワ)', '2021-03-01 02:53:56', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XtgiIfkFWu4\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, 'http://localhost:8888/Project2/uploads/Course/Video/'),
(28, 12, 'Bảng chữ cái Hiragana - Phần 6', '2021-03-01 02:54:15', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/dUNE3PwXfBQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, 'http://localhost:8888/Project2/uploads/Course/Video/');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idcategory` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` double NOT NULL,
  `image` text NOT NULL,
  `trichdan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `idcategory`, `content`, `date`, `image`, `trichdan`) VALUES
(10, 'Access to the job market in Japan', 54, '<p>From a young age, into high school and then a university student, you are constantly asked what job do you want to do after you graduate? Some of you have your own goals, others feel so vague (This is probably why adults often ask us from a young age about dreaming of the future).<br />\r\nWhen you move to Japan, you find out that young Japanese and even graduating students, many of them are not sure what career they are heading to, however this is now. gradually change. In the end, you discover the approach to employment in Japan, like almost everything else in Japan, is a little bit different than in Vietnam. When looking for a job in Japan, instead of aiming for a specific job, the Japanese are more interested in joining which organization than the position they will take. So about a year before graduation, students start sending CVs to the companies of their choice even though they don&#39;t know what job they will do. However, the more prestigious you go to school, the greater your employment opportunities in Japan.</p>\r\n\r\n<p><img src=\"https://storage.dekiru.vn/Data/2020/09/28/cach-tiep-can-thi-truong-viec-lam-tai-nhat-ban-637368979169037128.jpg?w=730\" /></p>\r\n\r\n<p>Each student goes through a standard hiring process that begins with CV review, then interviews and finally comes to the probationary stage. Here you will learn your working position, sometimes you may also have to move to another city to secure the job requirement. Depending on the size of the business, employees and managers will sometimes move from one department to another depending on the situation of the company. This means that each employee must rotate work within the enterprise so that they fully understand the organization in which they work. However, jobs in Japan are slowly changing in many ways.</p>\r\n', 1610169552, 'http://localhost:8888/Project2/uploads/News/cach-tiep-can-thi-truong-viec-lam-tai-nhat-637368979277787265.jpg', 'There are many young qualified young people in Japan or foreigners studying here who do not know how to approach the job market in Japan. Follow the article to find out'),
(11, 'Học bảng chữ cái tiếng Nhật hiragana cực dễ', 54, '<p>Tiếng Nhật l&agrave; ng&ocirc;n ngữ quốc gia của người Nhật. Người Nhật sử dụng ba loại chữ c&aacute;i l&agrave; hiragana, katakana v&agrave; kanji. Người học cần nắm vững 2 bảng kana v&agrave; một số lượng&nbsp;Kanji nhất định để . B&agrave;i viết n&agrave;y sẽ giới thiệu c&aacute;ch nhớ bảng chữ c&aacute;i tiếng Nhật dễ d&agrave;ng.</p>\r\n\r\n<h2><strong>1. Sử dụng kỹ thuật ghi nhớ</strong></h2>\r\n\r\n<p>Nếu kh&ocirc;ng t&igrave;m được c&aacute;ch ghi nhớ hiệu quả bạn sẽ mất nhiều thời gian hơn để ghi nhớ kiến thức dẫn đến nản. C&aacute;c k&yacute; tự kana đơn giản hơn kanji, c&aacute;ch nhớ bảng chữ c&aacute;i tiếng Nhật tốt nhất l&agrave; dựa tr&ecirc;n h&igrave;nh ảnh. Một h&igrave;nh minh họa dễ nhớ đại diện cho mỗi k&yacute; tự kana gi&uacute;p bạn dễ d&agrave;ng ghi nhớ c&aacute;c k&yacute; tự th&ocirc;ng qua li&ecirc;n tưởng thực tế. Thật tuyệt vời khi bạn c&oacute; thể ghi nhớ những g&igrave; đ&atilde; học th&ocirc;ng qua li&ecirc;n tưởng cụ thể.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://dekiru.vn/blog/detail-20180112171950916.htm\" target=\"_blank\">Bảng chữ c&aacute;i tiếng Nhật Hiragana, c&aacute;ch đọc, viết, học ph&aacute;t &acirc;m</a></p>\r\n\r\n<h2><strong>2. Nhập tiếng Nhật</strong></h2>\r\n\r\n<p>Một c&aacute;ch nhớ bảng chữ c&aacute;i tiếng Nhật dễ d&agrave;ng kh&aacute;c l&agrave; g&otilde; tiếng Nhật một c&aacute;ch thường xuy&ecirc;n. Bạn n&ecirc;n sử dụng tiếng Nhật khi ghi ch&uacute;, viết thư cho bạn b&egrave;/đồng nghiệp hoặc cập nhật trạng th&aacute;i tr&ecirc;n Facebook/Twitter.<br />\r\nC&agrave;i đặt&nbsp;tiếng Nhật l&agrave;m ng&ocirc;n ngữ mặc định&nbsp;để nhập tiếng Nhật dễ d&agrave;ng. Bạn chỉ cần g&otilde; một k&yacute; tự romaji tạo ra c&ugrave;ng một &acirc;m, tức l&agrave; g&otilde; &ldquo;ko&rdquo; sẽ cho bạn &ldquo;こ&rdquo; đại diện cho c&ugrave;ng một &acirc;m với &ldquo;ko&rdquo; .<br />\r\nNhấn ph&iacute;m c&aacute;ch tr&ecirc;n b&agrave;n ph&iacute;m sẽ cho ph&eacute;p bạn chuyển đổi giữa&nbsp;c&aacute;c k&yacute; tự hiragana,&nbsp;katakana hoặc kanji. N&oacute; sẽ gợi &yacute;&nbsp;c&aacute;c k&yacute; tự hiragana cũng như c&aacute;c k&yacute; tự katakana v&agrave; kanji tương ứng của ch&uacute;ng.</p>\r\n\r\n<h2><strong>3. Viết tiếng Nhật</strong></h2>\r\n\r\n<p>Nếu bạn cần c&aacute;ch nhớ bảng chữ c&aacute;i tiếng Nhật, viết tay tr&ecirc;n giấy l&agrave;&nbsp;đề xuất hiệu quả&nbsp;cho bạn. Sau khi ghi nhớ c&aacute;c k&yacute; tự th&ocirc;ng qua việc đ&aacute;nh m&aacute;y, luyện viết c&aacute;c k&yacute; tự n&agrave;y bằng tay sẽ gi&uacute;p khắc s&acirc;u từng k&yacute; tự trong tr&iacute; nhớ của bạn. Một trong những c&aacute;ch được đề xuất để viết l&agrave; viết&nbsp;nhật k&yacute;, sổ ghi ch&eacute;p hoặc thẻ ghi ch&uacute;; những điều n&agrave;y gi&uacute;p bạn ghi nhớ c&aacute;ch sử dụng c&aacute;c k&yacute; tự tiếng Nhật hiệu quả.<br />\r\nHơn nữa, một c&aacute;ch nhớ bảng chữ c&aacute;i tiếng Nhật dễ d&agrave;ng kh&aacute;c l&agrave; giữ một cuốn lịch ghi lại c&aacute;c hoạt động h&agrave;ng ng&agrave;y, nhiệm vụ, cuộc họp v&agrave; sự kiện của bạn bằng tiếng Nhật. Ban đầu sẽ l&agrave; một nhiệm vụ kh&oacute; khăn nhưng đ&acirc;y chắc chắn l&agrave; c&aacute;ch hiệu quả để học bảng chữ c&aacute;i tiếng Nhật, khi n&oacute; trở th&agrave;nh một th&oacute;i quen h&agrave;ng ng&agrave;y th&igrave; hiệu quả học tiếng Nhật của bạn sẽ được cải thiện nhanh ch&oacute;ng.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://dekiru.vn/blog/detail-20180817171253668.htm\" target=\"_blank\">Bảng chữ c&aacute;i tiếng Nhật Katakana, c&aacute;ch đọc, c&aacute;ch viết, ph&aacute;t &acirc;m...</a></p>\r\n\r\n<h2><strong>4. Đọc tiếng Nhật</strong></h2>\r\n\r\n<p>Đọc ngoại ngữ l&agrave; một thử th&aacute;ch kh&oacute;.&nbsp;Mọi người thường khuy&ecirc;n đọc l&agrave; bước đầu ti&ecirc;n để học ngoại ngữ nhưng sẽ tốt hơn nếu bạn ghi nhớ c&aacute;c k&yacute; tự trước, luyện một ch&uacute;t c&aacute;ch g&otilde; v&agrave; biết c&aacute;ch &aacute;p dụng ng&ocirc;n ngữ v&agrave;o th&oacute;i quen h&agrave;ng ng&agrave;y của bạn trước khi thực hiện thử th&aacute;ch đọc.<br />\r\nBảng c&aacute;c k&yacute; tự kana c&oacute; thể gi&uacute;p &iacute;ch rất nhiều cho việc đọc&nbsp;b&ecirc;n cạnh việc sử dụng Google để ph&aacute;t &acirc;m những từ kh&oacute; ph&aacute;t &acirc;m. Sử dụng kết hợp&nbsp;c&ocirc;ng nghệ sẽ&nbsp;hỗ trợ đẩy nhanh tiến độ học bảng chữ c&aacute;i tiếng Nhật của bạn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/09/15/cach-nho-bang-chu-cai-tieng-nhat-hieu-qua-1-637357819435553018.jpg?w=730\" /></p>\r\n\r\n<h2><strong>5. L&agrave;m b&agrave;i tập</strong></h2>\r\n\r\n<p>L&agrave;m c&aacute;c b&agrave;i tập c&oacute; sẵn tr&ecirc;n internet l&agrave; c&aacute;ch nhớ bảng chữ c&aacute;i tiếng Nhật hiệu quả. Kiểm tra những g&igrave; đ&atilde; học để theo d&otilde;i sự tiến bộ sẽ gi&uacute;p bạn cải thiện kỹ năng tiếng Nhật của m&igrave;nh. C&oacute; rất nhiều b&agrave;i tập cho người mới bắt đầu c&oacute; sẵn tr&ecirc;n internet c&oacute; thể gi&uacute;p bạn học bảng chữ c&aacute;i tiếng Nhật.<br />\r\nNhững b&agrave;i tập n&agrave;y được sắp xếp theo lộ tr&igrave;nh v&agrave; sẽ kiểm tra lại để buộc bạn nhớ lại những g&igrave; đ&atilde; học. Bạn c&agrave;ng nỗ lực v&agrave; căng thẳng hơn để nhớ lại điều g&igrave; đ&oacute;, n&atilde;o của bạn sẽ h&igrave;nh th&agrave;nh tr&iacute; nhớ mạnh mẽ hơn về n&oacute; v&agrave; dễ nhớ từ mới&nbsp;hơn theo thời gian.<br />\r\nBạn c&oacute; thể học hiragana trước, sau đ&oacute; l&agrave; c&aacute;c k&yacute; tự katakana v&agrave; kanji.</p>\r\n\r\n<p><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/09/15/cach-nho-bang-chu-cai-tieng-nhat-hieu-qua-637357819440562032.png?w=730\" />Hiragana sẽ lu&ocirc;n l&agrave; một phần của qu&aacute; tr&igrave;nh học tiếng Nhật, v&igrave; vậy việc chuyển sang c&aacute;c th&agrave;nh phần kh&aacute;c sau khi đạt được kỹ năng hiragana vừa phải sẽ thực sự gi&uacute;p n&acirc;ng cao kỹ năng hiragana cũng như hỗ trợ bạn học hai th&agrave;nh phần kh&aacute;c của ng&ocirc;n ngữ.</p>\r\n\r\n<p><strong>Dekiru</strong>&nbsp;hy vọng b&agrave;i viết n&agrave;y l&agrave; một c&acirc;u trả lời cho nỗi sợ h&atilde;i của bạn khi t&igrave;m kiếm c&aacute;ch nhớ bảng chữ c&aacute;i tiếng Nhật; tiếp tục l&agrave;m việc chăm chỉ v&agrave; bạn sẽ đạt được điều đ&oacute;!</p>\r\n', 1610169622, 'http://localhost:8888/Project2/uploads/News/header-5120x-637357026892323421.jpg', 'Học thuộc lòng bảng chữ cái tiếng Nhật là điều bắt buộc khi bắt đầu học tiếng Nhật. Dưới đây là cách nhớ bảng chữ cái tiếng Nhật hiệu quả'),
(12, 'Cách nhớ bảng chữ cái tiếng Nhật hiệu quả', 54, '<p>Học bảng chữ c&aacute;i tiếng Nhật hiragana l&agrave; điều bắt buộc khi học tiếng Nhật. B&agrave;i học đầu ti&ecirc;n m&agrave; trẻ em Nhật được cần học l&agrave; bảng chữ c&aacute;i tiếng Nhật hiragana v&agrave; nếu bạn mới bắt đầu học tiếng Nhật, bạn cũng n&ecirc;n bắt đầu với n&oacute;. B&agrave;i viết dưới đ&acirc;y&nbsp;<a href=\"https://dekiru.vn/\" target=\"_blank\"><strong>Dekiru</strong></a>&nbsp;sẽ gửi đến bạn bảng chữ c&aacute;i tiếng Nhật hiragana.&nbsp;Một khi bạn th&agrave;nh thạo Hiragana, bạn sẽ c&oacute; thể viết ra những k&yacute; tự tiếng Nhật thực sự đầu ti&ecirc;n của m&igrave;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/09/04/hiragana-mnemonics-chart-637348177530991305.jpg?w=730\" /></p>\r\n\r\n<p>Bảng chữ c&aacute;i tiếng Nhật hiragana gồm c&aacute;c nguy&ecirc;n &acirc;m tiếng Nhật a, e, u, i, o. D&ograve;ng thứ hai l&agrave; c&aacute;c &acirc;m tiết ka-ki-ku-ke-ko, v.v. Đ&ocirc;i khi &acirc;m thanh thay đổi một ch&uacute;t trong một số tổ hợp &acirc;m nhất định, v&iacute; dụ kh&ocirc;ng c&oacute; &acirc;m tiết &#39;tu&#39;, thay v&agrave;o đ&oacute; l&agrave; tsu, hay t + i tạo th&agrave;nh chi, tạo th&agrave;nh h&agrave;ng ta-chi-tsu-te- to.</p>\r\n\r\n<p>Thứ tự phổ biến m&agrave; bảng chữ c&aacute;i tiếng Nhật hiragana được tr&igrave;nh b&agrave;y thường l&agrave;: a - ka - sa - ta - na - ha - ma - ja - ra - wa - n</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://dekiru.vn/blog/detail-20191205171330844.htm\" target=\"_blank\">Tổng hợp bộ từ vựng tiếng Nhật N5</a></p>\r\n\r\n<p>Nếu bạn ghi nhớ tr&igrave;nh tự n&agrave;y, n&oacute; sẽ rất hữu &iacute;ch khi bạn tra cứu danh bạ điện thoại, từ điển tiếng Nhật (kh&ocirc;ng phải tất cả) hoặc dữ liệu kh&aacute;c trong danh s&aacute;ch &mdash; thứ tự n&agrave;y tương đương với thứ tự bảng chữ c&aacute;i được sử dụng bởi c&aacute;c ng&ocirc;n ngữ sử dụng một bảng chữ c&aacute;i.</p>\r\n\r\n<p>&Acirc;m tiết cuối c&ugrave;ng - n l&agrave; một &acirc;m tiết độc lập. V&igrave; vậy, từ 看板 (b&agrave;n kanban), hiragana l&agrave; かんばん c&oacute; bốn &acirc;m tiết ka-n-ba-n trong tiếng Nhật. Nhưng n l&agrave; &acirc;m tiết đặc biệt, tất cả những &acirc;m c&ograve;n lại l&agrave; một nguy&ecirc;n &acirc;m hoặc một phụ &acirc;m + một nguy&ecirc;n &acirc;m.</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y&nbsp;<a href=\"https://dekiru.vn/\" target=\"_blank\"><strong>Dekiru</strong></a>&nbsp;đ&atilde; giới thiệu đến c&aacute;c bạn bảng chữ c&aacute;i tiếng Nhật hiragana. Ch&uacute;c bạn sớm chinh phục được tiếng Nhật.</p>\r\n', 1610169811, 'http://localhost:8888/Project2/uploads/News/131313031_424973735548056_6269564088075827634_o.jpg', 'Học bảng chữ cái tiếng Nhật hiragana là điều bắt buộc khi học tiếng Nhật. Bài viết dưới đây sẽ giới thiệu đến bạn một số hướng dẫn về bảng này'),
(13, 'Cách học tiếng Nhật cho người mới bắt đầu - 100% Thành Công', 54, '<p>C&oacute; phải bạn chưa biết g&igrave; về tiếng Nhật v&agrave; đang muốn t&igrave;m kiếm c&aacute;ch&nbsp;<strong>học tiếng Nhật</strong>&nbsp;hiệu quả cho&nbsp;<strong>người mới bắt đầu</strong>? Thế nhưng l&agrave; một newbie mới bắt đầu học tiếng Nhật th&igrave; việc học ở đ&acirc;u, học như thế n&agrave;o, bắt đầu học từ đ&acirc;u v&agrave; cần phải học những t&agrave;i liệu g&igrave;... lại l&agrave; nỗi băn khoăn lớn của rất nhiều bạn. Thấu hiểu điều đ&oacute;,&nbsp;<strong>Dekiru&nbsp;</strong>đ&atilde; đ&atilde; d&agrave;nh trọn t&acirc;m huyết để bi&ecirc;n soạn ra một lộ tr&igrave;nh học v&ocirc; c&ugrave;ng chi tiết d&agrave;nh cho những bạn muốn&nbsp;<strong>tự học tiếng nhật</strong>&nbsp;tại nh&agrave; m&agrave; kh&ocirc;ng cần phải đến trung t&acirc;m. Lộ tr&igrave;nh bao gồm chia từng ng&agrave;y học cụ thể, c&aacute;ch học từng kỹ năng chi tiết v&agrave; trọn bộ t&agrave;i liệu đắt gi&aacute; d&agrave;nh ri&ecirc;ng cho bạn. N&agrave;o, giờ th&igrave; bắt đầu th&ocirc;i.</p>\r\n\r\n<p><strong>Mục lục</strong></p>\r\n\r\n<p><a href=\"https://dekiru.vn/blog/detail-20210104103440723.htm#1.\"><strong>1. Sơ qua về kỳ thi JLPT</strong></a></p>\r\n\r\n<p><a href=\"https://dekiru.vn/blog/detail-20210104103440723.htm#2.\"><strong>2. Kiểm tra năng lực của bản th&acirc;n</strong></a></p>\r\n\r\n<p><a href=\"https://dekiru.vn/blog/detail-20210104103440723.htm#3.\"><strong>3. X&aacute;c định mục ti&ecirc;u học tiếng Nhật cho người mới bắt đầu</strong></a><br />\r\n<a href=\"https://dekiru.vn/blog/detail-20210104103440723.htm#3.1\">3.1 GIAI ĐOẠN 1: HỌC TIẾNG NHẬT TỪ CON SỐ 0 - MỤC TI&Ecirc;U SƠ CẤP N5,N4</a><br />\r\n<a href=\"https://dekiru.vn/blog/detail-20210104103440723.htm#3.1.a\">- Thời gian</a><br />\r\n<a href=\"https://dekiru.vn/blog/detail-20210104103440723.htm#3.1.b\">- Nội dung ch&iacute;nh</a><br />\r\n<a href=\"https://dekiru.vn/blog/detail-20210104103440723.htm#3.1.c\">- Mục đ&iacute;ch</a><br />\r\n<a href=\"https://dekiru.vn/blog/detail-20210104103440723.htm#3.1.d\">- Hướng dẫn tự học</a><br />\r\n<a href=\"https://dekiru.vn/blog/detail-20210104103440723.htm#3.1.e\">- T&agrave;i Liệu</a><br />\r\n<a href=\"https://dekiru.vn/blog/detail-20210104103440723.htm#3.2\">3.2 GIAI ĐOẠN 2: Lộ tr&igrave;nh tự học tiếng Nhật N3 - Tr&igrave;nh độ Trung cấp</a><br />\r\n<a href=\"https://dekiru.vn/blog/detail-20210104103440723.htm#3.2.a\">- Thời gian</a><br />\r\n<a href=\"https://dekiru.vn/blog/detail-20210104103440723.htm#3.2.b\">- Nội dung ch&iacute;nh</a><br />\r\n<a href=\"https://dekiru.vn/blog/detail-20210104103440723.htm#3.2.c\">- Mục đ&iacute;ch</a><br />\r\n<a href=\"https://dekiru.vn/blog/detail-20210104103440723.htm#3.2.d\">- Hướng dẫn tự học</a><br />\r\n<a href=\"https://dekiru.vn/blog/detail-20210104103440723.htm#3.2.e\">- T&agrave;i liệu</a></p>\r\n\r\n<p><a href=\"https://dekiru.vn/blog/detail-20210104103440723.htm#4.\"><strong>4. Những c&acirc;u hỏi thường gặp</strong></a></p>\r\n\r\n<h2><br />\r\n<a name=\"1.\"></a></h2>\r\n\r\n<h2><a name=\"1.\"><strong>1. Sơ qua về kỳ thi JLPT</strong></a></h2>\r\n\r\n<p><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2021/01/11/so-luoc-ve-ky-thi-jlpt-637459593642778574.jpg?w=730\" /></p>\r\n\r\n<p>JLPT - Viết tắt của Japanese Language Proficiency Test l&agrave; Kỳ thi năng lực tiếng Nhật</p>\r\n\r\n<p>Đối với những bạn mới bắt đầu học tiếng Nhật, việc đầu ti&ecirc;n m&agrave; ch&uacute;ng ta n&ecirc;n l&agrave;m l&agrave; phải hiểu về k&igrave; thi n&agrave;y. C&ugrave;ng Dekiru t&igrave;m hiểu xem&nbsp;<strong>K&igrave; thi JLPT</strong>&nbsp;l&agrave; g&igrave; nh&eacute;!</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://dekiru.vn/blog/detail-20200621132856901.htm\" target=\"_blank\">JLPT l&agrave; g&igrave;? Lịch sử kỳ thi JLPT</a></p>\r\n\r\n<p><a href=\"https://dekiru.vn/blog/detail-20200605202827475.htm\" target=\"_blank\">Th&ocirc;ng tin cơ bản về kỳ thi JLPT bạn n&ecirc;n biết</a></p>\r\n\r\n<p>日本語能力試験（にほんごのうりょくしけん) hay t&ecirc;n trong tiếng Anh l&agrave; Japanese Language Proficiency Test (JLPT), tiếng Việt gọi l&agrave;&nbsp;<strong>kỳ thi Năng Lực Tiếng Nhật</strong>. Đ&acirc;y l&agrave; kỳ thi đ&aacute;nh gi&aacute; tiếng Nhật nổi tiếng, phổ biến v&agrave; c&oacute; uy t&iacute;n nhất hiện hay.&nbsp;<a href=\"https://vi.wikipedia.org/wiki/K%E1%BB%B3_thi_n%C4%83ng_l%E1%BB%B1c_ti%E1%BA%BFng_Nh%E1%BA%ADt\" target=\"_blank\"><strong>JLPT&nbsp;</strong></a>được tổ chức bởi Japan Foundation (国際交流基金 &ndash; こくさいこうりゅうききん), một tổ chức thuộc Bộ Ngoại Giao Nhật Bản. Hiện tại JLPT được tổ chức h&agrave;ng năm tại 65 quốc gia v&agrave; v&ugrave;ng l&atilde;nh thổ tr&ecirc;n to&agrave;n thế giới.</p>\r\n\r\n<p>Hiện tại, kỳ thi Năng lực Tiếng Nhật (Năng lực Nhật ngữ, hay Japanese Language Proficiency Test) được tổ chức với 5 cấp bậc từ N1 (kh&oacute; nhất) tới N5 (dễ nhất).</p>\r\n\r\n<p>Đối tượng tham gia: Tất cả mọi người kh&ocirc;ng c&oacute; ng&ocirc;n ngữ mẹ đẻ l&agrave;&nbsp;<strong>tiếng Nhật</strong>&nbsp;đều c&oacute; thể tham gia kỳ thi năng lực tiếng Nhật JLPT, kh&ocirc;ng ph&acirc;n biệt tuổi t&aacute;c, d&acirc;n tộc, t&ocirc;n gi&aacute;o hay giới t&iacute;nh.</p>\r\n\r\n<h2><a name=\"2.\"><br />\r\n<strong>2. Kiểm tra năng lực của bản th&acirc;n</strong></a></h2>\r\n\r\n<p><a href=\"https://dekiru.vn/entrance-exam\" target=\"_blank\"><img alt=\"Kiểm tra năng lực tiếng Nhật của bản thân\" src=\"https://storage.dekiru.vn/Data/2021/01/11/kiem-tra-trinh-do-tieng-nhat-cua-ban-637459595922626579.jpg?w=730\" /></a></p>\r\n\r\n<p>H&atilde;y t&igrave;m cho m&igrave;nh 1 website kiểm tra năng lực tiếng Nhật của bản th&acirc;n</p>\r\n\r\n<p><br />\r\nC&aacute;c cụ ng&agrave;y xưa đ&atilde; c&oacute; c&acirc;u: &ldquo;Biết người biết ta, trăm trận trăm thắng&rdquo;. Đ&acirc;y cũng l&agrave; điều đầu ti&ecirc;n bạn phải l&agrave;m trong lộ tr&igrave;nh &ocirc;n luyện đề thi N3. Điều n&agrave;y c&oacute; nghĩa l&agrave;, trước ti&ecirc;n bạn phải hiểu được điểm mạnh, điểm yếu của bản th&acirc;n v&agrave; biết được m&igrave;nh ở tr&igrave;nh độ n&agrave;o. H&atilde;y nh&igrave;n v&agrave;o thực tế v&agrave; bạn c&oacute; thể biết l&agrave;m thế n&agrave;o để &aacute;p dụng thực trạng của bản th&acirc;n với việc học v&agrave; &ocirc;n thi, cũng l&agrave; để vận dụng lộ tr&igrave;nh n&agrave;y được tốt hơn sao cho ph&ugrave; hợp với ch&iacute;nh khởi đầu của bản th&acirc;n m&igrave;nh.</p>\r\n\r\n<p><br />\r\nĐịa chỉ l&agrave;m b&agrave;i test miễn ph&iacute; (nhận kết quả sau 5&rsquo;) tại trang&nbsp;<a href=\"http://tryjpt.com/\" target=\"_blank\">tryjlpt.com</a>&nbsp;hoặc inbox v&agrave;o fanpage&nbsp;<a href=\"http://m.me/dekiru.vn\" target=\"_blank\">Dekiru Nihongo</a>&nbsp;để được l&agrave;m b&agrave;i test miễn ph&iacute; nh&eacute;!<br />\r\n<br />\r\nNgo&agrave;i ra c&ograve;n 1 số địa chỉ Website kh&aacute;c bạn c&oacute; thể tham khảo để test tr&igrave;nh độ tiếng Nhật của bản th&acirc;n ngo&agrave;i TryJLPT:</p>\r\n\r\n<p><a href=\"https://www.jlpt.jp/e/samples/forlearners.html\" target=\"_blank\">- Let&#39;s Try Sample Question</a></p>\r\n\r\n<p><a href=\"https://jlptsensei.com/\" target=\"_blank\">- JLPT Sensei</a></p>\r\n\r\n<p><a href=\"https://japanesetest4you.com/\" target=\"_blank\">- JLPT test for you</a></p>\r\n\r\n<p><a href=\"https://challenge-jlpt.com/\" target=\"_blank\">- Challenge-jlpt.com</a></p>\r\n\r\n<h2><a name=\"3.\"><br />\r\n<strong>3. X&aacute;c định mục ti&ecirc;u học tiếng Nhật cho người mới bắt đầu</strong></a></h2>\r\n\r\n<p><br />\r\nDekiru tin rằng, d&ugrave; c&aacute;c bạn c&oacute; muốn học level n&agrave;o v&agrave; thi chứng chỉ g&igrave; đi chăng nữa th&igrave; điều quan trọng nhất vẫn l&agrave; ĐẶT MỤC TI&Ecirc;U v&agrave; ĐỊNH HƯỚNG. Đối với những bạn mới bắt đầu học tiếng Nhật, c&aacute;c bạn cần phải x&aacute;c định r&otilde; r&agrave;ng m&igrave;nh muốn đạt level n&agrave;o, cần học g&igrave;, học t&agrave;i liệu n&agrave;o v&agrave; trong thời gian bao l&acirc;u. C&aacute;c bạn c&oacute; thể tham khảo c&aacute;ch đặt mục ti&ecirc;u SMART nh&eacute;. C&ograve;n trong b&agrave;i viết n&agrave;y,&nbsp;<strong>Dekiru Nihongo</strong>&nbsp;sẽ hướng dẫn từ A-Z c&aacute;ch học tiếng Nhật cho người mới bắt đầu v&agrave; chia sẻ cụ thể lộ tr&igrave;nh cực cực chi tiết m&agrave; bất cứ bạn n&agrave;o cũng c&oacute; thể đọc v&agrave; l&agrave;m theo. Chinh phục thứ tiếng kh&oacute; h&agrave;ng đầu thế giới, c&aacute;c bạn đ&atilde; sẵn s&agrave;ng chưa?... Bắt đầu ngay th&ocirc;i n&agrave;o!</p>\r\n\r\n<h3><a name=\"3.1\"><br />\r\n<strong>3.1 GIAI ĐOẠN 1: HỌC TIẾNG NHẬT TỪ CON SỐ 0 - MỤC TI&Ecirc;U SƠ CẤP N5,N4</strong></a></h3>\r\n\r\n<p><img alt=\"Xác định mục tiêu học tiếng Nhật cho người mới bắt đầu\" src=\"https://storage.dekiru.vn/Data/2021/01/11/hoc-tieng-nhat-tu-con-so-0-muc-tieu-n4-n5-637459598145445122.jpg?w=730\" /><br />\r\n<a name=\"3.1.a\"><br />\r\n<strong>Thời gian: 3 - 5 th&aacute;ng</strong></a></p>\r\n\r\n<p><br />\r\n<strong><a id=\"3.1.b\" name=\"3.1.b\"></a><br />\r\nNội dung ch&iacute;nh:</strong>&nbsp;Đ&acirc;y l&agrave; giai đoạn m&agrave; c&aacute;c bạn c&oacute; rất &iacute;t hoặc chưa c&oacute; ch&uacute;t kiến thức n&agrave;o về tiếng Nhật. Do đ&oacute;, mỗi bạn cần x&acirc;y dựng cho m&igrave;nh một nền tảng vững chắc bao gồm&nbsp;<strong>Từ Vựng v&agrave; Ngữ Ph&aacute;p</strong>&nbsp;cơ bản nhất. Đồng thời c&aacute;c bạn cũng cần tập th&oacute;i quen luyện nghe h&agrave;ng ng&agrave;y để quen tai v&agrave; đến l&uacute;c &ocirc;n thi cũng kh&ocirc;ng bị cho&aacute;ng. Tất nhi&ecirc;n trong giai đoạn n&agrave;y, h&atilde;y nhớ chỉ nghe những b&agrave;i si&ecirc;u cơ bản th&ocirc;i nh&eacute;, đừng vội luyện đề sẽ rất nản đấy.</p>\r\n', 1610418638, 'http://localhost:8888/Project2/uploads/News/thanh-cong-100-637454521038070331.png', 'Khẳng định 100% các bạn sẽ đỗ JLPT ở bất kì level nào. Chỉ cần quyết tâm làm theo duy nhất kế hoạch học tiếng Nhật dành cho người mới bắt đầu này thôi'),
(14, 'Phương pháp học tiếng Nhật hiệu quả nhất', 54, '<h2><strong>1. Đừng học những kiến thức nền tảng trong s&aacute;ch m&agrave; kh&ocirc;ng c&oacute; sự gi&aacute;m s&aacute;t</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mặc d&ugrave; những gi&aacute;o tr&igrave;nh dạy viết chữ hiragana v&agrave; katakana tương đối dễ học nhưng thứ tự n&eacute;t cơ bản thường bị người mới học ng&ocirc;n ngữ bỏ qua. C&oacute; sự kh&aacute;c biệt giữa n&eacute;t b&uacute;t được ho&agrave;n th&agrave;nh bằng c&aacute;ch chắp nối v&agrave; viết đ&uacute;ng n&eacute;t cơ bản. Thứ tự c&aacute;c n&eacute;t v&agrave; c&aacute;ch viết ch&iacute;nh x&aacute;c l&agrave; điều cần thiết khi học những kiến ​​thức cơ bản về kanji, v&igrave; vậy đừng bỏ qua n&oacute;! Một gi&aacute;o vi&ecirc;n hướng dẫn sẽ chỉ cho bạn c&aacute;ch viết v&agrave; g&oacute;p &yacute; gi&uacute;p bạn c&oacute; n&eacute;t chữ ch&iacute;nh x&aacute;c khi học tiếng Nhật.</p>\r\n\r\n<p><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/09/01/phuong-phap-hoc-tieng-nhat-hieu-qua-nhat-1-637345454561915456.jpg?w=730\" /></p>\r\n\r\n<h2><strong>2. Đừng bỏ qua những g&igrave; kh&oacute;</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bạn nghĩ rằng &ldquo;T&ocirc;i sẽ quay lại chương m&agrave; t&ocirc;i đ&atilde; bỏ qua&rdquo;, nhưng tr&ecirc;n thực tế, bạn thường sẽ KH&Ocirc;NG. C&aacute;c b&agrave;i học đầu ti&ecirc;n thường l&agrave; về chức danh gia đ&igrave;nh, thời gian v&agrave; c&aacute;c trợ từ. C&aacute;c cuộc tr&ograve; chuyện cơ bản trong s&aacute;ch gi&aacute;o khoa thường về chủ đề thời gian v&agrave; gia đ&igrave;nh, v&agrave; việc nắm vững c&aacute;c trợ từ sẽ mất nhiều thời gian hơn một ch&uacute;t. Bạn cần học c&aacute;ch chia c&aacute;c động từ, v&agrave; đừng tiếp tục sang b&agrave;i học tiếp theo cho đến khi bạn thật sự th&agrave;nh thạo.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://dekiru.vn/blog/detail-20191205171330844.htm\" target=\"_blank\">Tổng hợp bộ từ vựng tiếng Nhật N5</a></p>\r\n\r\n<h2><strong>3. Đầu tư v&agrave;o một số t&agrave;i liệu học tập chất lượng</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nếu bạn đang&nbsp;<a href=\"https://dekiru.vn/\" target=\"_blank\"><strong>học tiếng Nhật</strong></a>&nbsp;ở trường, bạn sẽ được chỉ định cụ thể s&aacute;ch gi&aacute;o khoa, nhưng một cuốn s&aacute;ch gi&aacute;o khoa thiếu ch&iacute;nh x&aacute;c c&oacute; thể ảnh hưởng đến việc học tập của bạn. Một số cuốn s&aacute;ch lỗi thời kh&ocirc;ng c&oacute; &iacute;ch cho một học sinh mới bắt đầu.</p>\r\n\r\n<p>Bạn c&oacute; sự lựa chọn khi t&igrave;m s&aacute;ch, Genki v&agrave; Tiếng Nhật cho người bận rộn l&agrave; những cuốn tuyệt vời để bắt đầu. Trong thực tế, s&aacute;ch gi&aacute;o khoa sẽ đưa ra hướng dẫn ch&iacute;nh x&aacute;c, nhưng hiệu quả thay đổi t&ugrave;y thuộc v&agrave;o c&aacute;ch học của bạn.</p>\r\n\r\n<p>H&atilde;y t&igrave;m một từ điển ch&iacute;nh thống c&oacute; kanji, hiragana cho mỗi kanji v&agrave; định nghĩa tiếng Việt đi k&egrave;m. Bạn c&oacute; thể tham khảo cuốn Ngữ ph&aacute;p tiếng Nhật của Barron, mua từ điển hoặc thẻ Kanji để học. Ngo&agrave;i ra c&ograve;n c&oacute; s&aacute;ch về từ l&oacute;ng tiếng Nhật, từ điển văn h&oacute;a v&agrave; b&aacute;ch khoa to&agrave;n thư về văn h&oacute;a đại ch&uacute;ng cũng sẽ gi&uacute;p bạn hiểu hơn về văn h&oacute;a Nhật bản v&agrave; c&oacute; lối giao tiếp tự nhi&ecirc;n hơn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/09/01/phuong-phap-hoc-tieng-nhat-hieu-qua-nhat-637345454571895990.jpg?w=730\" /></p>\r\n\r\n<h2><strong>4. Xem c&aacute;c chương tr&igrave;nh giải tr&iacute;</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tiếng Nhật ng&agrave;y c&agrave;ng phổ biến đối với thanh thiếu ni&ecirc;n ở nước ngo&agrave;i nhờ anime, manga (truyện tranh), nhạc rock v&agrave; nhạc pop Nhật Bản. Nhiều người h&acirc;m mộ muốn đọc v&agrave; hiểu m&agrave; kh&ocirc;ng cần đợi bản dịch ch&iacute;nh thức, v&igrave; vậy họ đ&atilde; tự dịch manga hoặc lời b&agrave;i h&aacute;t.</p>\r\n\r\n<p>Mặc d&ugrave; đ&acirc;y l&agrave; một c&aacute;ch thực sự hiệu quả để học tiếng l&oacute;ng v&agrave; c&aacute;c mẫu ngữ ph&aacute;p, nhưng một số từ vựng cơ bản kh&ocirc;ng thể d&ugrave;ng để tr&ograve; chuyện h&agrave;ng ng&agrave;y. Bạn c&oacute; thể lải nhải những từ chỉ nhịp tim, tr&agrave;n ngập, &ocirc;m h&ocirc;n, nước mắt, vĩnh viễn, kh&ocirc;ng thể tha thứ... nhưng bạn sẽ gặp rắc rối khi bị mắc kẹt ở Tokyo m&agrave; kh&ocirc;ng biết ng&acirc;n h&agrave;ng, cầu thang, s&acirc;n bay, đường t&agrave;u, rẽ, tr&aacute;i, phải v&agrave; bưu điện.</p>\r\n\r\n<h2><strong>5. Tập h&aacute;t bằng tiếng Nhật&nbsp;</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nghe nhạc v&agrave; theo d&otilde;i lời b&agrave;i h&aacute;t sẽ gi&uacute;p bạn học kana, kanji, tăng tốc độ đọc v&agrave; dạy bạn c&aacute;ch ph&aacute;t &acirc;m tiếng Nhật. Điều n&agrave;y cũng rất quan trọng v&igrave; ở Nhật Bản, karaoke l&agrave; h&igrave;nh thức giải tr&iacute; phổ biến. Người Nhật th&iacute;ch người nước ngo&agrave;i c&oacute; thể h&aacute;t lại c&aacute;c b&agrave;i h&aacute;t của họ (c&agrave;ng lớn tuổi, họ sẽ phản ứng c&agrave;ng lớn). V&igrave; vậy h&atilde;y luyện tập ngay từ sớm. Đi h&aacute;t karaoke cũng l&agrave; một c&aacute;ch tuyệt vời để kết bạn.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://dekiru.vn/blog/detail-20190605170812372.htm\" target=\"_blank\">Bỏ t&uacute;i những từ vựng tiếng Nhật cơ bản</a></p>\r\n\r\n<h2><strong>6. T&igrave;m một bạn đồng h&agrave;nh học tiếng Nhật&nbsp;</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bạn c&oacute; thể t&igrave;m một người bạn Nhật học tiếng Việt để trao đổi ng&ocirc;n ngữ. Lắng nghe bạn của m&igrave;nh sẽ gi&uacute;p bạn ph&aacute;t &acirc;m chuẩn hơn; nhờ bạn học sửa gi&uacute;p nếu cần. Điều n&agrave;y sẽ gi&uacute;p cho bộ n&atilde;o của bạn suy nghĩ bằng tiếng Nhật.</p>\r\n\r\n<p>C&aacute;c cuộc tr&ograve; chuyện trong s&aacute;ch gi&aacute;o khoa kh&ocirc;ng th&ocirc;ng dụng, v&agrave; thực tế chẳng ai n&oacute;i như vậy. Tự học tiếng Nhật kh&ocirc;ng đem lại cho bạn cơ hội thực h&agrave;nh tr&ograve; chuyện. C&oacute; rất nhiều nền tảng kết bạn như WeTalk hoặc bạn c&oacute; thể t&igrave;m kiếm bạn ở trường học địa phương v&agrave; c&aacute;c trung t&acirc;m cộng đồng để t&igrave;m cơ hội.</p>\r\n\r\n<p><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/09/01/phuong-phap-hoc-tieng-nhat-hieu-qua-nhat-2-637345454566885777.jpg?w=730\" /></p>\r\n\r\n<h2><strong>7. Tự trau dồi trước khi đến Nhật Bản</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trải nghiệm văn h&oacute;a bản xứ l&agrave; c&aacute;ch tốt nhất để học bất kỳ ng&ocirc;n ngữ n&agrave;o, nhưng đ&oacute; chỉ l&agrave; cơ hội với những người học n&acirc;ng cao, những người cần thu hẹp khoảng c&aacute;ch để sớm tr&ocirc;i chảy. Tuy nhi&ecirc;n, bạn vẫn c&oacute; thể bắt đầu sớm hơn một ch&uacute;t.</p>\r\n\r\n<p>C&aacute;c trường Đại học c&oacute; c&oacute; c&aacute;c chương tr&igrave;nh trao đổi sinh vi&ecirc;n với Nhật Bản, nhưng h&atilde;y c&acirc;n nhắc trước khi bạn quyết định. Nhiều chương tr&igrave;nh sẽ kh&ocirc;ng cho ph&eacute;p giao tiếp bằng tiếng Anh v&agrave; buộc bạn phải n&oacute;i tiếng Nhật bất kể tr&igrave;nh độ ng&ocirc;n ngữ của bạn l&agrave; g&igrave;.&nbsp;<br />\r\nBạn c&oacute; thể cần tự hỏi m&igrave;nh, &quot;T&ocirc;i c&oacute; n&ecirc;n tham gia một kh&oacute;a học cấp đại học ho&agrave;n to&agrave;n bằng tiếng Nhật nếu t&ocirc;i chưa th&ocirc;ng thạo?&quot; Đừng mong đợi bản th&acirc;n c&oacute; thể nhồi nh&eacute;t để bắt kịp tr&igrave;nh độ ng&ocirc;n ngữ cao hơn qu&aacute; nhiều so với thực lực của bạn.</p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y&nbsp;<a href=\"https://dekiru.vn/\" target=\"_blank\"><strong>Dekiru</strong></a>&nbsp;đ&atilde; giới thiệu đến bạn một số phương ph&aacute;p học tiếng Nhật hiệu quả nhất. Hi vọng bạn sẽ r&uacute;t ra được kinh nghiệm cho bản th&acirc;n tr&ecirc;n h&agrave;nh tr&igrave;nh chinh phục tiếng Nhật.</p>\r\n\r\n<p><a href=\"https://dekiru.vn/\" target=\"_blank\"><strong>Dekiru</strong></a>&nbsp;l&agrave; Website&nbsp;<strong><a href=\"http://dekiru.vn/blog/nihongo-notes.htm\" target=\"_blank\">học tiếng Nhật&nbsp;</a></strong><a href=\"http://dekiru.vn/blog/nihongo-notes.htm\" target=\"_blank\"><strong>Online</strong></a>&nbsp;h&agrave;ng đầu Việt Nam<br />\r\nWebsite&nbsp;<a href=\"https://dekiru.vn/blog/nihongo-notes.htm\" target=\"_blank\"><strong>học tiếng Nhật</strong></a>&nbsp;trực tuyến&nbsp;<a href=\"https://dekiru.vn/\" target=\"_blank\"><strong>Dekiru.vn</strong></a>&nbsp;được t&iacute;ch hợp đầy đủ mọi th&ocirc;ng tin, kiến thức v&agrave; những kỹ năng để gi&uacute;p c&aacute;c bạn chinh phục tiếng Nhật một c&aacute;ch ho&agrave;n hảo.</p>\r\n', 1610418680, 'http://localhost:8888/Project2/uploads/News/531e23554f84907a73e64838b01dc97f-637345452419562745.jpg', 'Tiếng Nhật ngày càng phổ biến khiến nhu cầu học tăng mạnh. Những người mới bắt đầu sẽ muốn có một phương pháp học tiếng Nhật hiệu quả nhất'),
(15, 'Trí tuệ nhân tạo (AI) ảnh hưởng đến cách viết CV như thế nào?', 54, '<p>N&oacute; ảnh hưởng đến c&aacute;ch ch&uacute;ng ta t&igrave;m kiếm th&ocirc;ng tin về mọi lĩnh vực. Vậy c&ograve;n đối với viết CV v&agrave;&nbsp;<a href=\"https://goodcv.vn/\" target=\"_blank\"><strong>t&igrave;m việc l&agrave;m</strong></a>&nbsp;th&igrave; sao? Tr&iacute; tuệ nh&acirc;n tạo (AI) ảnh hưởng đến c&aacute;ch viết CV như thế n&agrave;o?<br />\r\nTr&iacute; tuệ nh&acirc;n tạo l&agrave; một thuật ngữ chỉ c&aacute;c hệ thống m&aacute;y t&iacute;nh c&oacute; thể thực hiện những t&aacute;c vụ thường y&ecirc;u cầu phải c&oacute; tr&iacute; th&ocirc;ng minh của con người như nhận thức thị gi&aacute;c, nhận diện giọng n&oacute;i, đưa ra quyết định hay bi&ecirc;n dịch th&ocirc;ng tin. Tr&iacute; tuệ nh&acirc;n tạo cũng đang tạo ra những ảnh hưởng t&iacute;ch cực đến qu&aacute; tr&igrave;nh xin việc v&agrave; viết CV.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/08/31/tri-tue-nhan-tao-ai-anh-huong-den-cach-viet-cv-nhu-the-nao-1-637344916401284518.jpg?w=730\" /></p>\r\n\r\n<p>Tr&iacute; tuệ nh&acirc;n tạo (AI) ảnh hưởng đến c&aacute;ch viết CV như thế n&agrave;o?</p>\r\n\r\n<h2><br />\r\n<strong>1. Giảm thời gian viết CV</strong></h2>\r\n\r\n<p><br />\r\nAI c&oacute; thể nghi&ecirc;n cứu t&agrave;i khoản LinkedIn của bạn, m&ocirc; tả c&ocirc;ng việc cũ v&agrave; c&aacute;c loại dữ liệu kh&aacute;c để đưa ra c&aacute;c gợi &yacute; khi viết CV. Sau đ&oacute;, c&ocirc;ng việc của bạn sẽ chỉ đơn giản l&agrave; chỉnh sửa CV chứ kh&ocirc;ng phải l&agrave; viết lại to&agrave;n bộ. Dần dần, AI cũng sẽ đưa ra c&aacute;c gợi &yacute; s&aacute;t hơn dựa v&agrave;o lựa chọn của người viết tr&ecirc;n CV v&agrave; những dữ liệu m&agrave; họ thường bỏ đi trong qu&aacute; tr&igrave;nh chỉnh sửa. Nhờ đ&oacute; m&agrave; to&agrave;n bộ qu&aacute; tr&igrave;nh&nbsp;<a href=\"https://goodcv.vn/tao-cv\" target=\"_blank\"><strong>tạo CV</strong></a>&nbsp;sẽ ngắn lại.&nbsp;</p>\r\n\r\n<h2><br />\r\n<strong>2. Gợi &yacute; thuật ngữ được sử dụng nhiều trong ng&agrave;nh</strong></h2>\r\n\r\n<p><br />\r\nKh&ocirc;ng chỉ nghi&ecirc;n cứu th&ocirc;ng tin về bản th&acirc;n người viết CV, AI c&ograve;n c&oacute; thể gợi &yacute; c&aacute;c th&ocirc;ng tin kh&aacute;c dựa v&agrave;o đặc điểm v&agrave; xu hướng ph&aacute;t triển của ng&agrave;nh nghề m&agrave; bạn đang theo đuổi. N&oacute; c&oacute; thể nghi&ecirc;n cứu một loạt c&aacute;c CV kh&aacute;c v&agrave; cho bạn biết rằng bạn c&ograve;n thiếu g&igrave; trong CV của m&igrave;nh, từ phần t&oacute;m tắt, giới thiệu cho tới kỹ năng v&agrave; tr&igrave;nh độ.&nbsp;</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://dekiru.vn/blog/detail-20190605170812372.htm\" target=\"_blank\">Bỏ t&uacute;i những từ vựng tiếng Nhật cơ bản</a></p>\r\n\r\n<h2><br />\r\n<strong>3. Hướng dẫn to&agrave;n bộ quy tr&igrave;nh</strong></h2>\r\n\r\n<p><br />\r\nPhần mềm tạo CV sử dụng AI c&oacute; thể hướng dẫn bạn thực hiện to&agrave;n bộ quy tr&igrave;nh bằng c&aacute;ch đặt ra c&aacute;c c&acirc;u hỏi kh&aacute;c nhau v&agrave; bạn chỉ cần điền v&agrave;o chỗ trống thay v&igrave; viết to&agrave;n bộ mọi th&ocirc;ng tin bắt đầu từ một trang giấy trắng.&nbsp;</p>\r\n\r\n<h2><br />\r\n<strong>4. B&aacute;o lỗi hoặc điểm bất thường</strong></h2>\r\n\r\n<p><br />\r\nTrước khi ứng tuyển, bạn cần phải xem lại CV nhiều lần. Nếu bạn n&oacute;i một đằng trong CV v&agrave; n&oacute;i một nẻo khi trả lời&nbsp;<a href=\"https://goodcv.vn/blog/cau-hoi-phong-van-hay-nci29\" target=\"_blank\"><strong>c&acirc;u hỏi phỏng vấn</strong></a>&nbsp;th&igrave; cơ hội tr&uacute;ng tuyển sẽ cực kỳ thấp. Nếu bạn n&oacute;i th&ocirc;ng tin sai sự thật, bạn cũng sẽ bị loại ngay khỏi v&ograve;ng phỏng vấn. AI c&oacute; thể gi&uacute;p chỉ ra c&aacute;c lỗi sai hoặc th&ocirc;ng tin sai sự thật để bạn c&oacute; thể chỉnh sửa kịp thời.<br />\r\n<img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/08/31/tri-tue-nhan-tao-ai-anh-huong-den-cach-viet-cv-nhu-the-nao-2-637344916405634724.jpg?w=730\" /></p>\r\n\r\n<h2><strong>5. Bổ sung từ kh&oacute;a</strong></h2>\r\n\r\n<p><br />\r\nBạn đ&atilde; được nghe nhiều lời khuy&ecirc;n rằng CV cần c&oacute; từ kh&oacute;a cần thiết để vượt qua v&ograve;ng sơ loại của hệ thống ATS, đặc biệt l&agrave; khi ng&agrave;y c&agrave;ng c&oacute; nhiều c&ocirc;ng ty sử dụng c&ocirc;ng nghệ n&agrave;y. AI c&oacute; thể đề xuất c&aacute;c từ kh&oacute;a m&agrave; những ứng vi&ecirc;n trong c&ugrave;ng lĩnh vực sử dụng, thường xuy&ecirc;n xuất hiện trong m&ocirc; tả c&ocirc;ng việc trong ng&agrave;nh hoặc xuất hiện trong m&ocirc; tả c&ocirc;ng việc cụ thể m&agrave; bạn nhập v&agrave;o. N&oacute; c&oacute; thể qu&eacute;t th&ocirc;ng tin v&agrave; x&aacute;c định đ&acirc;u l&agrave; từ kh&oacute;a quan trọng nhất cần c&oacute; trong CV của bạn.&nbsp;</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://dekiru.vn/blog/detail-20171129131608344.htm\" target=\"_blank\">Từ vựng tiếng Nhật chuy&ecirc;n ng&agrave;nh x&acirc;y dựng</a></p>\r\n\r\n<h2><strong>6. Dịch CV ra nhiều ng&ocirc;n ngữ kh&aacute;c nhau</strong></h2>\r\n\r\n<p>Nếu bạn đọc định nghĩa về AI, bạn sẽ thấy c&oacute; t&iacute;nh năng dịch nhiều thứ tiếng kh&aacute;c nhau. Nếu đ&atilde; từng sử dụng Google Dịch để dịch CV ra một ng&ocirc;n ngữ kh&aacute;c, bạn sẽ thấy n&oacute; k&eacute;m xa so với kỳ vọng của m&igrave;nh v&agrave; bạn sẽ phải tự m&igrave;nh thực hiện hoặc l&agrave; thu&ecirc; người dịch. Thay v&agrave;o đ&oacute;, với sự hỗ trợ của AI, bạn c&oacute; thể viết CV bằng một ng&ocirc;n ngữ v&agrave; tự động dịch ra c&aacute;c ng&ocirc;n ngữ kh&aacute;c. Điều n&agrave;y đặc biệt hữu &iacute;ch cho những ai muốn t&igrave;m việc ở c&ocirc;ng ty nước ngo&agrave;i.&nbsp;<br />\r\nTr&iacute; tuệ nh&acirc;n tạo ng&agrave;y c&agrave;ng trở n&ecirc;n phổ biến trong c&aacute;c&nbsp;<a href=\"https://taimienphi.vn/\" target=\"_blank\"><strong>phần mềm</strong></a>&nbsp;d&agrave;nh cho người đi xin việc v&agrave; cả nh&agrave; tuyển dụng. Với sự hỗ trợ của AI, quy tr&igrave;nh tuyển dụng v&agrave; ứng tuyển sẽ trở n&ecirc;n đơn giản hơn. AI thậm ch&iacute; c&ograve;n c&oacute; thể hỗ trợ ứng vi&ecirc;n đ&agrave;m ph&aacute;n lương bởi bạn c&agrave;ng c&oacute; nhiều th&ocirc;ng tin, bạn c&agrave;ng chứng tỏ m&igrave;nh l&agrave; người hiểu biết v&agrave; l&agrave; một ứng vi&ecirc;n tiềm năng. Mức lương v&igrave; thế sẽ cao hơn v&agrave; đ&agrave;m ph&aacute;n cũng sẽ dễ d&agrave;ng hơn.</p>\r\n', 1610418721, 'http://localhost:8888/Project2/uploads/News/og-ai-as-a-solution-637344918763879818.jpg', 'Trí tuệ nhân tạo (AI) đang chứng tỏ những tác động của nó đến nhiều ngành nghề khác nhau. Khối dữ liệu mà thuật toán máy tính có thể tìm kiếm và xử lý trong một ngày thậm chí nhiều hơn số lượng một người làm trong cả đời của họ.'),
(16, 'Cách đếm ngày trong tiếng Nhật thông dụng', 54, '<p>Tr&ecirc;n hết, c&oacute; nhiều thay đổi &acirc;m thanh kh&aacute;c nhau tương tự như những g&igrave; ch&uacute;ng ta đ&atilde; thấy với 六百 , ... Bản th&acirc;n mỗi&nbsp;bộ đếm thường l&agrave; c&aacute;c k&yacute; tự kanji đơn lẻ v&agrave; c&oacute; c&aacute;ch đọc đặc biệt chỉ d&agrave;nh cho bộ đếm đ&oacute;. H&ocirc;m nay&nbsp;<a href=\"https://dekiru.vn/\" target=\"_blank\"><strong>Dekiru</strong></a>&nbsp;sẽ giới thiệu đến bạn&nbsp;bộ đếm ng&agrave;y trong tiếng Nhật.</p>\r\n\r\n<p>平成 【へい・せい】 &ndash; Thời đại Heisei<br />\r\n昭和 【しょう・わ】 &ndash; Thời đại Showa<br />\r\n和暦 【わ・れき】 &ndash; Lịch Nhật Bản<br />\r\n一日 【いち・にち】 &ndash; một ng&agrave;y</p>\r\n\r\n<p>Ng&agrave;y đầu ti&ecirc;n của th&aacute;ng l&agrave; 「ついたち」（一日）; kh&aacute;c với 「いちにち」（一日）, c&oacute; nghĩa l&agrave; &ldquo;một ng&agrave;y&rdquo;. Ngo&agrave;i điều n&agrave;y v&agrave; một số ngoại lệ kh&aacute;c, bạn c&oacute; thể chỉ cần n&oacute;i số v&agrave; th&ecirc;m 「日」 được ph&aacute;t &acirc;m ở đ&acirc;y l&agrave; 「に ち」. V&iacute; dụ: ng&agrave;y 26 trở th&agrave;nh 26日(にじゅうろくにち）. Tuy nhi&ecirc;n, 10 ng&agrave;y đầu kh&aacute; đơn giản, ng&agrave;y 14, 19, 20, 29 c&oacute; những b&agrave;i đọc đặc biệt m&agrave; bạn phải học thuộc l&ograve;ng ri&ecirc;ng. Lưu &yacute; rằng chữ kanji kh&ocirc;ng thay đổi nhưng c&aacute;ch đọc th&igrave; c&oacute;.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://dekiru.vn/blog/detail-20191205171330844.htm\" target=\"_blank\">Tổng hợp bộ từ vựng tiếng Nhật N5</a></p>\r\n\r\n<p><br />\r\n<img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/08/31/screenshot-10-637344587250705222.jpg?w=730\" /><br />\r\n<img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/08/31/screenshot-11-637344587295897816.jpg?w=730\" /><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/08/31/screenshot-12-637344587348250779.jpg?w=730\" /></p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y&nbsp;<a href=\"https://dekiru.vn/\" target=\"_blank\"><strong>Dekiru</strong></a>&nbsp;đ&atilde; giới thiệu đến bạn bộ&nbsp;đếm ng&agrave;y trong tiếng Nhật. Hi vọng b&agrave;i viết gi&uacute;p &iacute;ch cho c&aacute;c bạn đang học tiếng Nhật.</p>\r\n', 1610418765, 'http://localhost:8888/Project2/uploads/News/we7dfo-637344597153562332.jpg', 'Trong tiếng Nhật, khi bạn chỉ đơn giản đếm số sẽ tương đối dễ dàng. Tuy nhiên, nếu bạn muốn đếm ngày, bạn phải sử dụng bộ đếm ngày trong tiếng Nhật thông dụng'),
(17, 'Cách học từ vựng nhanh của người Nhật hiệu quả', 54, '<h2><strong>1.&nbsp;Nghe</strong></h2>\r\n\r\n<p>H&atilde;y nghe c&aacute;c b&agrave;i&nbsp;nhạc Nhật Bản<br />\r\n- Trong thời gian di chuyển để đi học hay đi l&agrave;m, h&atilde;y bật ngay điện thoại l&ecirc;n v&agrave; nghe những b&agrave;i h&aacute;t tiếng Nhật ưa th&iacute;ch của bạn<br />\r\nBước 1. H&atilde;y t&igrave;m kiếm những b&agrave;i h&aacute;t m&agrave; bạn th&iacute;ch&nbsp;<br />\r\nBước 2. Xem v&agrave; đọc lời b&agrave;i h&aacute;t đ&oacute;&nbsp;<br />\r\nBước 3. Sử dụng từ điển tra &yacute; nghĩa của lời b&agrave;i h&aacute;t đ&oacute;<br />\r\nBước 4. Nghe v&agrave; h&aacute;t theo lời b&agrave;i h&aacute;t<br />\r\nĐ&acirc;y ch&iacute;nh l&agrave; c&aacute;ch&nbsp;học từ vựng nhanh của người Nhật c&oacute; thể vừa học tiếng Nhật vừa h&aacute;t được những ca kh&uacute;c m&igrave;nh th&iacute;ch, thật vui phải kh&ocirc;ng ?&nbsp;<br />\r\n*** Lưu &yacute;: Trong bước 3 khi tra từ cần đọc to v&agrave; ph&aacute;t &acirc;m theo từ đ&oacute;.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://dekiru.vn/blog/detail-20171129131608344.htm\" target=\"_blank\">Từ vựng tiếng Nhật chuy&ecirc;n ng&agrave;nh x&acirc;y dựng</a></p>\r\n\r\n<p><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/08/27/1-637341179649176231.jpg?w=730\" /></p>\r\n\r\n<h2><strong>2.&nbsp;Xem, đọc phụ đề TV&nbsp;v&agrave; c&aacute;c bộ phim</strong></h2>\r\n\r\n<p><strong>XEM TV:</strong><br />\r\nViệc nh&igrave;n h&igrave;nh ảnh v&agrave; phụ đề gi&uacute;p ch&uacute;ng ta học Kanji nhanh hơn.<br />\r\nC&aacute;c&nbsp;chương tr&igrave;nh TV của Nhật Bản thường sẽ c&oacute;&nbsp;phụ đề tiếng Nhật ở dưới. Điều n&agrave;y gi&uacute;p &iacute;ch rất nhiều cho bạn trong qu&aacute; tr&igrave;nh&nbsp;học tiếng Nhật<br />\r\nViệc ch&uacute;ng ta xem c&aacute;ch sử dụng từ vựng, nơi sử dụng từ vựng cũng ch&iacute;nh l&agrave; c&aacute;ch học từ vựng nhanh của người Nhật hiệu quả.</p>\r\n\r\n<p><strong>PHIM ẢNH:</strong><br />\r\nC&aacute;c bạn c&oacute; thể học nhanh từ vựng tiếng Nhật bằng việc xem lại nhiều lần bộ phim m&agrave; bạn th&iacute;ch cũng như phụ đề c&oacute; trong đ&oacute;.<br />\r\nBước 1: Xem phụ đề<br />\r\nBước 2: Ghi lại c&aacute;c từ kh&ocirc;ng biết v&agrave; tra từ điển<br />\r\nBước 3: &nbsp;H&atilde;y cố gắng ghi nhớ c&aacute;c cụm từ, từ vừa tra, mỗi ng&agrave;y 3 lần<br />\r\nBước 4: Xem lại bộ phim m&agrave; kh&ocirc;ng bật phụ đề&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/08/27/shift-to-ip-637341179649996327.jpg?w=730\" /></p>\r\n\r\n<h2><strong>3.&nbsp;Sử dụng c&aacute;c mạng x&atilde; hội để học</strong></h2>\r\n\r\n<p>H&atilde;y tham gia c&aacute;c nh&oacute;m giao lưu Việt Nhật, kết bạn với nhiều người Nhật. Sau đ&oacute; h&atilde;y nhắn tin trao đổi, với những từ kh&ocirc;ng biết h&atilde;y tra v&agrave; học đi học lại&nbsp;tối thiểu 3 lần mỗi ng&agrave;y. C&aacute;ch học từ vựng nhanh của người Nhật&nbsp;n&agrave;y sẽ gi&uacute;p bạn nhớ kỹ từ vựng vĩnh viễn&nbsp;thay v&igrave; chỉ học thuộc l&ograve;ng 1 lần v&agrave; một tuần sau bạn sẽ lại qu&ecirc;n.&nbsp;<br />\r\nTh&ecirc;m nữa, h&atilde;y cố gắng b&igrave;nh luận v&agrave;o c&aacute;c b&agrave;i đăng của người Nhật, việc đ&oacute; gi&uacute;p việc sử dụng từ vựng tự nhi&ecirc;n hơn, nhớ l&acirc;u hơn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/08/27/japan-social-637341180495194714.png?w=730\" /></p>\r\n', 1610418822, 'http://localhost:8888/Project2/uploads/News/unnamed-637341152296829873.jpg', 'Bạn là người mới bắt đầu học tiếng Nhật và cảm thấy khó khăn với việc học từ vựng? Bài viết dưới đây sẽ giới thiệu cho bạn cách học từ vựng nhanh của người Nhật.'),
(18, 'Các thể trong tiếng Nhật bắt buộc phải nhớ', 54, '<h2><strong>Thể masu&nbsp;</strong></h2>\r\n\r\n<p><br />\r\nĐ&acirc;y l&agrave; &quot;thể trang trọng&quot; v&agrave; n&oacute; ph&ugrave; hợp trong nhiều ho&agrave;n cảnh. Phần của động từ kh&ocirc;ng c&oacute; masu gọi l&agrave; th&acirc;n từ.<br />\r\nTrong tiếng Nhật, động từ kh&ocirc;ng bị ảnh hưởng bởi chủ ngữ của ch&uacute;ng. N&oacute;i c&aacute;ch kh&aacute;c, d&ugrave; chủ ngữ l&agrave; số &iacute;t hay số nhiều, ng&ocirc;i thứ nhất hay ng&ocirc;i thứ hai, c&aacute;c động từ kh&ocirc;ng thay đổi h&igrave;nh thức của ch&uacute;ng. Li&ecirc;n quan đến c&aacute;c th&igrave; của động từ, chỉ c&oacute; hai c&aacute;ch chia thời gian: th&igrave; kh&ocirc;ng qu&aacute; khứ (th&igrave; hiện tại v&agrave; tương lai) v&agrave; th&igrave; qu&aacute; khứ.&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Khẳng định&nbsp;</td>\r\n			<td>Ti&ecirc;u cực</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kh&ocirc;ng qu&aacute; khứ</td>\r\n			<td>-masu&nbsp;</td>\r\n			<td>&nbsp;-masen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Qu&aacute; khứ</td>\r\n			<td>&nbsp;-mashita&nbsp;</td>\r\n			<td>&nbsp;-masendeshita</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2><strong>Thể đơn giản</strong></h2>\r\n\r\n<p><br />\r\nC&aacute;c dạng cơ bản của động từ tiếng Nhật l&agrave; thể căn bản, thể nai, thể ta v&agrave; thể nakatta. Bốn h&igrave;nh thức n&agrave;y gọi l&agrave; &quot;thể đơn giản&quot;.<br />\r\nThể đơn giản c&oacute; thể được sử dụng thay cho thể masu trong c&aacute;c t&igrave;nh huống th&ocirc;ng thường.<br />\r\nNhững c&acirc;u kết th&uacute;c bằng thể đơn giản th&igrave; &iacute;t trang trọng hơn v&agrave; mỗi dạng đều đề cập đến khẳng định, phủ định v&agrave; th&igrave;. Với c&aacute;ch sử dụng n&agrave;y, thể đơn giản c&ograve;n được gọi l&agrave; dạng th&ocirc;ng thường.<br />\r\nTuy nhi&ecirc;n, thể đơn giản kh&ocirc;ng chỉ giới hạn ở dạng th&ocirc;ng thường. Trong tiếng Nhật, c&aacute;c chức năng ng&ocirc;n ngữ như điều kiện (nếu), khả năng (c&oacute; thể l&agrave;m) hoặc nghĩa vụ (phải l&agrave;m) được thể hiện bằng c&aacute;ch sử dụng &quot;Mẫu chức năng&quot;. Hầu hết c&aacute;c mẫu chức năng kh&ocirc;ng theo thể masu m&agrave; l&agrave; thể đơn giản ngay cả trong c&aacute;c c&acirc;u ch&iacute;nh thức.</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;Khẳng định&nbsp;</td>\r\n			<td>&nbsp;Ti&ecirc;u cực&nbsp;&nbsp; &nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;Kh&ocirc;ng qu&aacute; khứ</td>\r\n			<td>&nbsp;thể căn bản</td>\r\n			<td>&nbsp;thể nai</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;Qu&aacute; khứ</td>\r\n			<td>&nbsp;thể ta</td>\r\n			<td>&nbsp;thể nakatta</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp; &nbsp;+ M&ocirc; h&igrave;nh chức năng</p>\r\n\r\n<h2><strong>Thể căn bản (thể từ điển)</strong></h2>\r\n\r\n<p><br />\r\nĐ&acirc;y l&agrave; dạng cơ bản nhất của động từ v&agrave; c&aacute;c từ điển tiếng Nhật sử dụng dạng n&agrave;y. Khi bạn t&igrave;m kiếm ikimasu trong từ điển, bạn cần phải tra cứu kh&ocirc;ng phải ikimasu m&agrave; l&agrave; iku. V&igrave; vậy, thể n&agrave;y c&ograve;n được gọi l&agrave; thể từ điển.<br />\r\nDạng n&agrave;y được sử dụng l&agrave;m c&acirc;u khẳng định kh&ocirc;ng qu&aacute; khứ thay v&igrave; -masu trong lời n&oacute;i th&ocirc;ng thường v&agrave; được sử dụng với c&aacute;c mẫu chức năng kh&aacute;c nhau.</p>\r\n\r\n<p><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/08/21/cac-the-trong-tieng-nhat-637336071766189517.jpg?w=730\" /></p>\r\n\r\n<h2><strong>Thể nai</strong></h2>\r\n\r\n<p><br />\r\nThể n&agrave;y được sử dụng như dạng phủ định kh&ocirc;ng qu&aacute; khứ trong lời n&oacute;i th&ocirc;ng thường v&agrave; được sử dụng với c&aacute;c mẫu chức năng kh&aacute;c nhau cũng như dạng gốc.<br />\r\nTrong lời n&oacute;i th&ocirc;ng thường, thể nai thường được sử dụng để mời ai đ&oacute; như -masen ka? hoặc -mashoo ka? với một giọng điệu l&ecirc;n cao hơn.<br />\r\nKoohii o nomimasen ka?&nbsp;&nbsp; &nbsp;=&gt;&nbsp;&nbsp; &nbsp;Koohii o nomanai?<br />\r\nHiru-gohan ni ikimashoo ka?&nbsp;&nbsp; &nbsp;=&gt;&nbsp;&nbsp; &nbsp;Hiru-gohan ni ikanai?</p>\r\n', 1610418857, 'http://localhost:8888/Project2/uploads/News/japan-637335974282926888.jpg', 'Một trong những điều bắt buộc phải ghi nhớ khi học tiếng Nhật là các thể trong tiếng Nhật. Trong bài viết dưới đây Dekiru sẽ giới thiệu đến các bạn về các thể trong tiếng Nhật.');
INSERT INTO `news` (`id`, `title`, `idcategory`, `content`, `date`, `image`, `trichdan`) VALUES
(19, 'Các lỗi sai người Việt Nam hay mắc phải khi học tiếng Nhật', 54, '<h2><strong>1. Lỗi đầu ti&ecirc;n : あるaruといるiru</strong></h2>\r\n\r\n<p><br />\r\nC&oacute; 2 từ vựng m&agrave; người nước ngo&agrave;i thường xuy&ecirc;n sử dụng sai đ&oacute; l&agrave; : Aru v&agrave; iru. &Yacute; nghĩa của n&oacute; hầu như l&agrave; giống nhau n&ecirc;n c&aacute;c bạn cần ch&uacute; &yacute; nhỉ&nbsp;<br />\r\nCả 2 đều c&oacute; &yacute; nghĩa l&agrave; &ldquo; Tồn tại&rdquo; nhưng Aru l&agrave; d&agrave;nh cho c&aacute;c vật v&ocirc; tri v&ocirc; gi&aacute;c c&ograve;n iru th&igrave; d&agrave;nh cho c&aacute;c sinh vật sống. V&iacute; dụ:<br />\r\n- Muốn n&oacute;i c&oacute; c&aacute;i b&uacute;t ch&igrave; sẽ n&oacute;i &ldquo; えんぴつがあります&ldquo;<br />\r\n- Muốn n&oacute;i c&oacute; 5 người sẽ n&oacute;i &ldquo; 5人がいます&rdquo;<br />\r\nĐ&acirc;y l&agrave; một trong c&aacute;c lỗi sai&nbsp;người Việt Nam hay mắc phải khi học tiếng Nhật. Nếu ch&uacute;ng ta sử dụng sai th&igrave; người Nhật sẽ cảm thấy rất l&agrave; k&igrave; đ&oacute;. C&aacute;c bạn h&atilde;y ch&uacute; &yacute; nh&eacute;.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://dekiru.vn/blog/detail-20191205171330844.htm\" target=\"_blank\">Tổng hợp bộ từ vựng tiếng Nhật N5</a></p>\r\n\r\n<p><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/08/27/loi-sai-nguoi-viet-nam-hay-mac-phai-1-637341145166141534.jpg?w=730\" /></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>2. Lỗi thứ 2: カワイイ( Dễ thương ) v&agrave; コワイ( Sợ h&atilde;i )</strong></h2>\r\n\r\n<p><br />\r\nĐiểm kh&aacute;c nhau duy nhất của 2 từ vựng n&agrave;y ch&iacute;nh l&agrave; &acirc;m thanh ph&aacute;t ra. Ở người Việt m&igrave;nh cũng c&oacute; những từ kh&aacute;c hay bị nhầm lẫn như vậy. Bạn n&ecirc;n ch&uacute; &yacute; lỗi sai người Việt Nam hay mắc phải khi học tiếng Nhật n&agrave;y để việc giao tiếp với người Nhật thuận lợi hơn.</p>\r\n\r\n<h2><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/08/27/loi-sai-nguoi-viet-nam-hay-mac-phai-2-637341145171241891.png?w=730\" /><br />\r\n&nbsp;</h2>\r\n\r\n<h2><strong>3. Lỗi sai thứ 3: Con quỷ ( おに) v&agrave; người anh ( あに)</strong></h2>\r\n\r\n<p><br />\r\nĐối với người Việt m&igrave;nh thỉnh thoảng&nbsp;c&aacute;c bạn bị nhầm giữa con quỷ ( おに) v&agrave; người anh ( あに). Đ&acirc;y l&agrave; lỗi sai người Việt Nam hay mắc phải khi học tiếng Nhật nguy hiểm dễ khiến đối phương hiểu nhầm &yacute; m&agrave; m&igrave;nh muốn n&oacute;i. Vậy n&ecirc;n c&aacute;c bạn h&atilde;y ch&uacute; &yacute; nh&eacute;.&nbsp;</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://dekiru.vn/blog/detail-20190605170812372.htm\" target=\"_blank\">Bỏ t&uacute;i những từ vựng tiếng Nhật cơ bản</a></p>\r\n\r\n<p><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/08/27/loi-sai-nguoi-viet-nam-hay-mac-phai-637341145176242917.jpg?w=730\" /><br />\r\nTr&ecirc;n đ&acirc;y&nbsp;<a href=\"https://dekiru.vn/\" target=\"_blank\"><strong>Dekiru</strong></a>&nbsp;đ&atilde; giới thiệu&nbsp;c&aacute;c lỗi sai người Việt Nam hay mắc phải khi học tiếng Nhật. Hi vọng qua b&agrave;i viết tr&ecirc;n c&aacute;c bạn c&oacute; thể r&uacute;t kinh nghiệm cho bản th&acirc;n tr&aacute;nh những sai lầm đ&aacute;ng tiếc khi giao tiếp.</p>\r\n', 1610418895, 'http://localhost:8888/Project2/uploads/News/6907094587-bd5960fb89-o-min-637341131914772662.jpg', 'Việc mắc lỗi khi học ngôn ngữ là điều không thể tránh khỏi. Từ những lỗi sai đó bạn sẽ rút ra được kinh nghiệm phát triển. Dưới đây là các lỗi sai người Việt Nam hay mắc phải'),
(20, 'Tuyển tập đề thi chính thức JLPT N3 - “vật bất ly thân” của dân ôn N3', 55, '<p>Dạo gần đ&acirc;y d&acirc;n t&igrave;nh đang đồn thổi nhau về một cuốn s&aacute;ch c&oacute; khả năng tăng tr&ecirc;n 50 điểm kỳ thi tiếng Nhật JLPT tr&igrave;nh độ N3. Thực hư mọi chuyện c&oacute; đ&uacute;ng như lời đồn hay chỉ l&agrave; quảng c&aacute;o?&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Liệu:</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Cuốn s&aacute;ch Tuyển tập đề thi ch&iacute;nh thức JLPT N3 c&oacute; thực sự tốt?</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">C&oacute; thể tăng 50 điểm số trong kỳ thi JLPT N3</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">C&oacute; n&ecirc;n mua s&aacute;ch Tuyển tập đề thi ch&iacute;nh thức JLPT N3 kh&ocirc;ng?</p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\">Ch&uacute;ng ta h&atilde;y c&ugrave;ng d&agrave;nh thời gian trải nghiệm v&agrave; đ&aacute;nh gi&aacute; dựa tr&ecirc;n những cảm nhận của học vi&ecirc;n sau khi đ&atilde; sử dụng s&aacute;ch.</p>\r\n\r\n<h2 dir=\"ltr\">1. S&aacute;ch Tuyển tập đề thi ch&iacute;nh thức JLPT c&oacute; g&igrave; kh&aacute;c với c&aacute;c loại s&aacute;ch luyện thi tr&ecirc;n thị trường?</h2>\r\n\r\n<p dir=\"ltr\">Thứ nhất, bộ s&aacute;ch Tuyển tập đề thi ch&iacute;nh thức JLPT N3 gồm 2 cuốn (Cuốn 1: Đề thi &amp; kiến thức trọng điểm, Cuốn 2: Đ&aacute;p &aacute;n &amp; giải th&iacute;ch chi tiết) của tất cả c&aacute;c ĐỀ THI JLPT CH&Iacute;NH THỨC đ&atilde; từng xuất hiện. Đ&acirc;y l&agrave; bộ s&aacute;ch được x&acirc;y dựng với c&aacute;c nội dung c&oacute; t&iacute;nh ứng dụng cao nhằm hỗ trợ người học củng cố lại kiến thức nền tảng của tr&igrave;nh độ N3, đồng thời chia sẻ cho người học lộ tr&igrave;nh v&agrave; phương ph&aacute;p &ocirc;n thi một c&aacute;ch hiệu quả nhất. C&aacute;c bạn học v&agrave; &ocirc;n luyện N3 chắc hẳn đều biết rằng khối lượng kiến thức về Kanji, Từ vựng, Ngữ ph&aacute;p trong N3 l&agrave; rất lớn. V&agrave; chắc chắn tr&ecirc;n thị trường kh&ocirc;ng c&oacute; bộ s&aacute;ch n&agrave;o c&oacute; thể bao trọn to&agrave;n bộ kiến thức trọng điểm, c&oacute; đ&aacute;p &aacute;n k&egrave;m giải th&iacute;ch chi tiết bằng tiếng Việt to&agrave;n bộ cho c&aacute;c đề thi JLPT N3 như bộ s&aacute;ch Tuyển tập đề thi ch&iacute;nh thức JLPT N3.</p>\r\n\r\n<p><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/07/07/img-9869-637297138530356522.jpg?w=730\" /></p>\r\n\r\n<p>Gi&aacute;o tr&igrave;nh luyện thi N3</p>\r\n\r\n<p dir=\"ltr\">Thứ hai, nội dung cuốn s&aacute;ch d&agrave;nh cho học vi&ecirc;n tr&igrave;nh độ N3 tự luyện thi tại nh&agrave;. Bạn sẽ kh&ocirc;ng phải lo lắng với khối lượng kiến thức Kanji, Từ vựng, Ngữ ph&aacute;p, Đọc hiểu, Nghe hiểu&hellip; qu&aacute; nhiều kh&ocirc;ng biết tập trung &ocirc;n ở đ&acirc;u. Với Tuyển tập đề thi ch&iacute;nh thức JLPT N3 sẽ ch&uacute; trọng những kiến thức trọng t&acirc;m xuất hiện trong đề thi, đưa ra cho bạn lộ tr&igrave;nh học chuẩn x&aacute;c nhất, gi&uacute;p bạn kh&ocirc;ng mất thời gian học, &ocirc;n luyện kiến thức kh&ocirc;ng xuất hiện trong đề thi. Ngo&agrave;i ra, bạn đọc sẽ được chia sẻ c&aacute;c tips l&agrave;m b&agrave;i Đọc - Nghe hiểu v&agrave; c&aacute;c b&agrave;i ph&acirc;n t&iacute;ch mẫu gi&uacute;p bạn dễ d&agrave;ng t&igrave;m ra đ&aacute;p &aacute;n đ&uacute;ng trong thời gian nhanh nhất v&agrave; đạt điểm tối đa trong phần thi n&agrave;y. C&oacute; thể giảm tải 10 ph&uacute;t mỗi Mondai, tiết kiệm thời gian cho c&aacute;c phần thi kh&aacute;c.</p>\r\n\r\n<p><img alt=\"Bộ sách gối đầu của rất nhiều cao thủ tiếng Nhật\" src=\"https://storage.dekiru.vn/Data/2020/07/02/gioi-thieu-sach-n3-02-637293097023433541.jpg?w=730\" /></p>\r\n\r\n<p>Bộ s&aacute;ch &ocirc;n thi N3 gối đầu của rất nhiều cao thủ tiếng Nhật</p>\r\n\r\n<p dir=\"ltr\">Thứ ba, khi mua bộ s&aacute;ch, học vi&ecirc;n sẽ được t&iacute;ch hợp t&agrave;i khoản luyện thi Online, để d&ugrave; bạn ở đ&acirc;u cũng c&oacute; thể dễ d&agrave;ng luyện thi JLPT. Th&ecirc;m v&agrave;o đ&oacute; l&agrave; bộ phiếu t&ocirc; đ&aacute;p &aacute;n giống 100% so với thực tế tạo cho bạn cảm gi&aacute;c kh&ocirc;ng bỡ ngỡ khi bước v&agrave;o kỳ thi thật. Th&ecirc;m một điều đặc biệt nữa ở Tuyển tập đề thi ch&iacute;nh thức JLPT N3 m&agrave; kh&ocirc;ng một cuốn s&aacute;ch n&agrave;o c&oacute; ch&iacute;nh l&agrave; Bảng gợi &yacute; t&iacute;nh điểm v&agrave; Phiếu đ&aacute;nh gi&aacute; năng lực. Vậy với bảng gợi &yacute; t&iacute;nh điểm v&agrave; phiếu đ&aacute;nh gi&aacute; n&agrave;y th&igrave; học vi&ecirc;n sẽ c&oacute; lợi &iacute;ch g&igrave;?</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">X&aacute;c định mức điểm ở từng c&acirc;u hỏi, từng phần thi để c&oacute; thể ph&acirc;n bổ thời gian hợp l&yacute; nhất.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">X&aacute;c định kiến thức của bản th&acirc;n đang ở mức n&agrave;o, từ đ&oacute; l&ecirc;n kế hoạch bổ sung kiến thức đầy đủ, to&agrave;n diện nhất trước khi bước v&agrave;o kỳ thi ch&iacute;nh thức.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\">Xem th&ecirc;m:&nbsp;<strong><a href=\"https://dekiru.vn/blog/detail-20200611221730349.htm\" target=\"_blank\">Lộ tr&igrave;nh &ocirc;n luyện N3 chắc chắn đỗ</a></strong></p>\r\n\r\n<h2 dir=\"ltr\">2. Những c&acirc;u hỏi li&ecirc;n quan đến bộ s&aacute;ch Tuyển tập đề thi ch&iacute;nh thức JLPT N3</h2>\r\n\r\n<p dir=\"ltr\"><strong>- Gi&aacute; s&aacute;ch 700 ngh&igrave;n đắt qu&aacute;, kh&ocirc;ng biết mua về c&oacute; học được kh&ocirc;ng?</strong></p>\r\n\r\n<p dir=\"ltr\">Trọn bộ &ldquo;Tuyển tập đề thi ch&iacute;nh thức JLPT N3&rdquo; gồm 2 cuốn (Cuốn 1: Đề thi &amp; kiến thức trọng điểm, Cuốn 2: Đ&aacute;p &aacute;n &amp; giải th&iacute;ch chi tiết) của tất cả c&aacute;c ĐỀ THI JLPT CH&Iacute;NH THỨC đ&atilde; từng xuất hiện. Bộ hai cuốn s&aacute;ch trị gi&aacute; 700k.&nbsp;<strong>Nhưng hiện tại bộ s&aacute;ch đang được khuyến mại chỉ c&ograve;n 399k</strong>. Với mong muốn chia sẻ những kh&oacute; khăn, gi&uacute;p đỡ việc học tiếng Nhật cho cộng đồng người Việt, bộ s&aacute;ch ph&ugrave; hợp với điều kiện t&agrave;i ch&iacute;nh của hầu hết mọi người, v&agrave; tr&ecirc;n tinh thần gi&uacute;p đỡ v&igrave; cộng đồng, những gi&aacute; trị m&agrave; cuốn s&aacute;ch mang lại cho bạn tốt hơn nhiều gi&aacute; tiền b&aacute;n ra.</p>\r\n\r\n<p dir=\"ltr\">-<strong>&nbsp;C&oacute; thực sự tăng được 50 điểm thi JLPT N3 kh&ocirc;ng?</strong></p>\r\n\r\n<p dir=\"ltr\">Đ&acirc;y l&agrave; c&acirc;u hỏi chung của rất nhiều bạn. Sự thật đ&atilde; được chứng minh c&oacute; rất nhiều bạn học vi&ecirc;n sử dụng bộ s&aacute;ch v&agrave; tăng được tối thiểu 20 điểm thi, thậm ch&iacute; l&ecirc;n đến hơn 50 điểm. Do đ&oacute;, bạn c&oacute; thể ho&agrave;n to&agrave;n tin tưởng khi học hết bộ s&aacute;ch sẽ tăng điểm bứt ph&aacute; trong kỳ thi JLPT N3.</p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/07/02/105770297-3194863317248370-7515504476005979159-o-637292980826979209.jpg?w=730\" /></p>\r\n\r\n<p dir=\"ltr\"><img alt=\"\" src=\"https://storage.dekiru.vn/Data/2020/07/02/106491899-3194863873914981-4201113271766784851-o-637292985154637035.jpg?w=730\" /></p>\r\n\r\n<p><img alt=\"Khoanh vùng và hệ thống toàn bộ kiến thức trọng điểm giúp học viên tiết kiệm tối đa thời gian làm bài\" src=\"https://storage.dekiru.vn/Data/2020/07/02/105677702-3194865090581526-5862958854557301784-o-637292983424038025.jpg?w=730\" /></p>\r\n\r\n<p>Khoanh v&ugrave;ng v&agrave; hệ thống to&agrave;n bộ kiến thức trọng điểm gi&uacute;p học vi&ecirc;n tiết kiệm tối đa thời gian l&agrave;m b&agrave;i</p>\r\n\r\n<p dir=\"ltr\"><strong><em>C&aacute;c bạn c&oacute; thể đăng k&yacute; mua bộ s&aacute;ch&nbsp;<a href=\"https://sachonthin3.dekiru.vn/\" target=\"_blank\">TẠI Đ&Acirc;Y&nbsp;</a></em></strong></p>\r\n\r\n<p dir=\"ltr\"><strong><em>Hoặc cmt&nbsp;dưới b&agrave;i viết n&agrave;y nh&eacute;!</em></strong></p>\r\n\r\n<p dir=\"ltr\">Ch&uacute;c c&aacute;c bạn đạt kết quả cao trong kỳ thi JLPT!</p>\r\n', 1610872476, 'http://localhost:8888/Project2/uploads/News/untitled-1-637299695548388192.jpg', 'Tuyển tập đề thi chính thức JLPT N3 - Một cuốn sách mà những cao thủ JLPT đều phải thốt lên rằng: \"Giá như biết đến cuốn sách này tốt hơn thì chặng đường chinh phục JLPT của tôi đã ngắn hơn rất nhiều rồi\"');

--
-- Triggers `news`
--
DELIMITER $$
CREATE TRIGGER `AUTO INSERT DATE` BEFORE INSERT ON `news` FOR EACH ROW BEGIN
 SET NEW.date = UNIX_TIMESTAMP();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `news_slide`
--

CREATE TABLE `news_slide` (
  `id` int(11) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `property_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_slide`
--

INSERT INTO `news_slide` (`id`, `property_name`, `property_value`) VALUES
(1, 'slides_topbanner', '[{\"title\":\"The leading website for learning Japanese online in VietNam\",\"description\":\"Dekiru online Japanese learning website is fully integrated with all information, knowledge and skills to help you conquer Japanese perfectly.\",\"button_text\":\"\",\"button_link\":\"\",\"slide_image\":\"http:\\/\\/localhost:8888\\/Project2\\/uploads\\/banner5.jpg\"},{\"title\":\"Learning Japanese is funny\",\"description\":\"Japanese is one of the most difficult languages \\u200b\\u200bin the world. Dekiru is born with the desire to make learning Japanese easier and more enjoyable through the application of technology in teaching.\",\"button_text\":\"\",\"button_link\":\"\",\"slide_image\":\"http:\\/\\/localhost:8888\\/Project2\\/uploads\\/Japanese-language.jpg\"},{\"title\":\"JAPANESE EASY TO LEARN\",\"description\":\"Dekiru provides a complete and comprehensive knowledge system: easy to learn, easy to understand, and easy to remember. Suitable for all ages who want to learn and learn Japanese.\",\"button_text\":\"\",\"button_link\":\"\",\"slide_image\":\"http:\\/\\/localhost:8888\\/Project2\\/uploads\\/fdec6133a660885cf539714c1e5420c9-637350756989487189.png\"}]'),
(2, 'ManageFooter', '{\"mangXH\":{\"linkFB\":\"https:\\/\\/www.facebook.com\\/luxurydemon99\",\"linkTwitter\":\"\",\"linkGitHub\":\"https:\\/\\/github.com\\/luxurydemon123\\/\"},\"Address\":{\"address\":\"104\\/12 L\\u00ea \\u0110\\u00ecnh L\\u00fd , TP \\u0110\\u00e0 N\\u1eb5ng\"},\"Hotline\":{\"soDT\":\"0906576269\"},\"Gmail\":{\"Gmail\":\"luxurydemon123@gmail.com\"},\"Title\":{\"nameWebsite\":\"Dekiru Nihongo\",\"titleWebsite\":\"The leading website for learning Japanese online in VietNam\"},\"logo\":\"http:\\/\\/localhost:8888\\/Project2\\/uploads\\/1.png\"}');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choice1` varchar(255) NOT NULL,
  `choice2` varchar(255) NOT NULL,
  `choice3` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `choice4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `question`, `choice1`, `choice2`, `choice3`, `answer`, `choice4`) VALUES
(1, '<strong>1. &nbsp;<u>10年</u>まえに　にほんへ　きました。</strong>', 'じゅうねん', 'じゅねん', 'じゅっねん', 'じゅうねん', 'じゅうね'),
(2, 'まっすぐ　いって、はしを（　　）。', 'いきます', 'わたります', 'わかります', 'わたります', 'ならびます'),
(3, 'ふうとうに　きってを（　　）ください。', 'やって', 'とって', 'きって', 'はって', 'はって '),
(4, 'すずきさんの　いえの　いぬは　とても（　　）です。', 'からい', 'あたらしい', 'かわいい ', 'かわいい', 'うすい'),
(5, 'とりにくを　500（　　）かいました。', 'ページ', 'メートル', 'グラム', 'グラム', 'だい'),
(6, 'あなたの　でんわばんごうを　（　　　　　　）ください。', 'はなして', ' おきて', 'とんで', 'おしえて', 'おしえて '),
(7, 'みんな（　　）をさしています。', 'ぼうし', 'コート', 'かさ', 'かさ', 'スカート'),
(8, 'タクシーを（　　）。', 'のって', 'よんで', 'とって', 'よんで', 'あって'),
(9, 'やまだせんせいは　たなかさんの（　　）にいます。', 'かお', 'すこし', 'うえ', 'となり', 'となり'),
(10, '&nbspあまい　おかしは　きらいです。', 'あまい　おかしは　きれいです。', 'あまい　おかしは　すきです。', 'あまい　おかしは　きれいではありません。', 'あまい　おかしは　すきではありません。', 'あまい　おかしは　すきではありません。');

-- --------------------------------------------------------

--
-- Table structure for table `signup_offline`
--

CREATE TABLE `signup_offline` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lichhoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `signup_offline`
--

INSERT INTO `signup_offline` (`id`, `tenkh`, `email`, `sdt`, `lichhoc`) VALUES
(1, 'nguyen van a', 'A@gmail.com', '0949983492', 'Evening class'),
(2, 'nguyen van a', 'A@gmail.com', '0949983492', 'Afternoon class'),
(3, 'nguyen van a', 'A@gmail.com', '0949983492', 'Evening class'),
(4, 'nguyen van a', 'A@gmail.com', '0949983492', 'Afternoon class'),
(5, 'Lê Thành Tài', 'luxurydemon123@gmail.com', '0949983492', 'Evening class'),
(6, 'Lê Thành Tài', 'luxurydemon123@gmail.com', '0949983492', 'Afternoon class'),
(7, 'Nguyễn Văn Tiền', 'tiendeptrai123@gmail.com', '098497979378', 'Afternoon class'),
(8, 'Nguyễn Văn Tiền', 'tiendeptrai123@gmail.com', '0993849489238', 'Afternoon class'),
(9, 'Nguyễn Văn Hậu', 'Haunguyen@gmail.com', '0123456789', 'Evening class'),
(10, 'Lưu Văn Trung Hiếu', 'HieuLuu@gmail.com', '0949983492', 'Afternoon class'),
(11, 'nguyen van a', 'A@gmail.com', '0949983492', 'Morning class'),
(12, 'Lê Tiến Luật', 'Luat@gmail.com', '091234566789', 'Afternoon class'),
(13, 'abc', 'admin@gmail.com', '0949983492', 'Evening class'),
(14, 'abc', 'abc@gmail.com', '0958043843', 'Afternoon class'),
(15, 'lee thanh tai', 'lethanhtai123@gmail.com', '090589903489', 'Afternoon class'),
(16, 'Hiếu Lưu', 'hieuluu@gmail.com', '0123456789', 'Evening class');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `studentname`, `gender`, `course`, `email`, `date`, `image`) VALUES
(3, 'Lê Thành Tài123', 'Male', 'N5', 'luxurydemon123@gmail.com', '2020-12-23', 'http://localhost:8888/Project2/uploads/studentavatar.jpg'),
(4, 'nguyen van B', 'Male', 'N4', 'luxurydemon123@gmail.com', '2020-12-09', 'http://localhost:8888/Project2/uploads/student/tien-duc.png'),
(5, 'Lưu Văn Trung Hiếu', 'Male', 'N5', 'HieuLuu@gmail.com', '2020-12-23', 'http://localhost:8888/Project2/uploads/student/dino-studio-anh-vien-cho-be-va-gia-dinh-317623.jpg'),
(6, 'Nguyễn Mai Trúc', 'Female', 'N3', 'MaiTruc@gmail.com', '2020-12-23', 'http://localhost:8888/Project2/uploads/student/0d68523b0481d68304da70f4dad00980.jpg'),
(7, 'Nguyễn Văn Hậu', 'Male', 'N2', 'Haunguyen@gmail.com', '2020-12-16', 'http://localhost:8888/Project2/uploads/student/tiem-chup-anh-the-lay-ngay-dep-nhat-pleiku-gia-lai-chu-de-da-duoc-nhan-tran-minh-phuong-318152.jpg'),
(8, 'Nguyễn Như Quỳnh', 'Female', 'N5', 'nhuquynh23@gmail.com', '2020-12-22', 'http://localhost:8888/Project2/uploads/student/anh-the.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_json`
--

CREATE TABLE `tb_json` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `data` text NOT NULL,
  `desct` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_json`
--

INSERT INTO `tb_json` (`id`, `type`, `data`, `desct`) VALUES
(1, 'hotline', '[]', 'Save hotline'),
(2, 'address', '[]', 'address');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name_teacher` varchar(255) NOT NULL,
  `age_teacher` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `linkfb` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name_teacher`, `age_teacher`, `phonenumber`, `avatar`, `linkfb`, `description`) VALUES
(8, 'Sasuke', '26', '84108479237', 'http://localhost:8888/Project2/uploads/sasuke.jpg', 'fb.com/abc', 'よろしくお願いいたします。'),
(9, 'Hirumuta Makoto', '29', '097493783', 'http://localhost:8888/Project2/uploads/tomo.jpg', 'https://www.facebook.com/abcxyz', '私は日本でSpeech - Language Pathologistとしてリハビリテーションを行っています。趣味は海外旅行、筋力トレーニングです。よろしくお願いします。????????????'),
(10, 'Thy Japan', '28', '097347987134', 'http://localhost:8888/Project2/uploads/13100963_10205529714994091_3328530946096358265_n.jpg', 'https://www.facebook.com/thyJapan', 'Thy Japan has 6 years working and studying experience in Japan, JLPT ...\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `login_oauth_uid` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updateed_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `repassword` varchar(255) NOT NULL,
  `phonenumber` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `email`, `password`, `repassword`, `phonenumber`) VALUES
(1, 'hiep1998', 'luxurydemon123@gmail.com', '123456789', '1234', '0906576269'),
(2, 'Thanh Tai', 'sad@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(3, 'nhuph', 'nhuquynh23@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', ''),
(4, 'taile', 'luxurydemon1999@gmail.com', '6950', 'e10adc3949ba59abbe56e057f20f883e', ''),
(5, 'taideptrai', 'taideptrai@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', ''),
(6, 'Nguyen A', 'NguyenA@gmail.com', '123456', '123456', ''),
(7, 'abc', 'abc@gmail.com', '123456', '123456', ''),
(8, 'thanhtai', 'tailtgcd17110@fpt.edu.vn', '123', '123', '0906576269');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_pdf`
--
ALTER TABLE `book_pdf`
  ADD PRIMARY KEY (`id_documents`),
  ADD KEY `id_course` (`id_course`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `lession`
--
ALTER TABLE `lession`
  ADD PRIMARY KEY (`id_lesson`),
  ADD KEY `id_course` (`id_course`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcategory` (`idcategory`);

--
-- Indexes for table `news_slide`
--
ALTER TABLE `news_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `signup_offline`
--
ALTER TABLE `signup_offline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_json`
--
ALTER TABLE `tb_json`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_pdf`
--
ALTER TABLE `book_pdf`
  MODIFY `id_documents` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lession`
--
ALTER TABLE `lession`
  MODIFY `id_lesson` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `news_slide`
--
ALTER TABLE `news_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `signup_offline`
--
ALTER TABLE `signup_offline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_json`
--
ALTER TABLE `tb_json`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_pdf`
--
ALTER TABLE `book_pdf`
  ADD CONSTRAINT `book_pdf_ibfk_1` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`);

--
-- Constraints for table `lession`
--
ALTER TABLE `lession`
  ADD CONSTRAINT `lession_ibfk_1` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`idcategory`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
