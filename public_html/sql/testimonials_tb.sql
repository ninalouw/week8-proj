-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 28, 2017 at 09:00 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `testimonials_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_tb`
--

CREATE TABLE `testimonials_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials_tb`
--

INSERT INTO `testimonials_tb` (`id`, `name`, `date`, `content`) VALUES
(1, 'Bob Hope', '2017-07-01', 'I am so pleased with this product. We were treated like royalty. It\'s incredible.I am so pleased with this product. We were treated like royalty. It\'s incredible. I don\'t know what else to say. I will recommend you to my colleagues.Definitely worth the investment. The service was excellent. You won\'t regret it.'),
(2, 'James Johnson', '2017-07-27', 'Definitely worth the investment. The service was excellent. Thank You! I can\'t say enough about EdiPhotos. I am completely blown away. The service was excellent. You won\'t regret it.Definitely worth the investment. The service was excellent. You won\'t regret it. '),
(3, 'Mandy Smith', '2017-05-03', 'EdiPhotos is the next killer service. You guys rock! Sullae consulatum? Idem fecisset Epicurus, si sententiam hanc, quae nunc Hieronymi est, coniunxisset cum Aristippi vetere sententia. Propter nos enim illam, non propter eam nosmet ipsos diligimus. Quae cum dixisset, finem ille. Illum mallem levares, quo optimum atque humanissimum virum, Cn. Suo genere perveniant ad extremum; Sed tamen intellego quid velit.'),
(4, 'Jeffrey Singh', '2017-06-07', 'I use EdiPhotos often. I will recommend you to my colleagues. I don\'t always clop, but when I do, it\'s because of EdiPhotos. Propter nos enim illam, non propter eam nosmet ipsos diligimus. Quae cum dixisset, finem ille. I use EdiPhotos often. I will recommend you to my colleagues. I don\'t always clop, but when I do, it\'s because of EdiPhotos. Illum mallem levares, quo optimum atque humanissimum virum, Cn. Suo genere perveniant ad extremum; Sed tamen intellego quid velit.'),
(5, 'Stella Amy', '2017-05-01', 'Ediphotos is the bomb! I am so pleased with this product. It really saves me time and effort. EdiPhotos is exactly what our business has been lacking. Sullae consulatum? Idem fecisset Epicurus, si sententiam hanc, quae nunc Hieronymi est, coniunxisset cum Aristippi vetere sententia. Propter nos enim illam, non propter eam nosmet ipsos diligimus. Quae cum dixisset, finem ille. '),
(7, 'Nina Louw', '2017-07-01', 'I am completely blown away. This is simply unbelievable! We can\'t understand how we\'ve been living without EdiPhotos. EdiPhotos is the most valuable business resource we have EVER purchased. Tollitur beneficium, tollitur gratia, quae sunt vincla concordiae. Quod non faceret, si in voluptate summum bonum poneret. '),
(10, 'Hanson Hammles', '2017-07-02', 'Nice work on EdiPhotos. I like EdiPhotos more and more each day because it makes my life a lot easier. Since I invested in EdiPhotos I made over 100,000 dollars profits. Tollitur beneficium, tollitur gratia, quae sunt vincla concordiae. Quod non faceret, si in voluptate summum bonum poneret. An haec ab eo non dicuntur? Tu enim ista lenius, hic Stoicorum more nos vexat.Quid enim tanto opus est instrumento in optimis artibus comparandis? Duo Reges: constructio interrete. Tollitur beneficium, tollitur gratia, quae sunt vincla concordiae. Quod non faceret, si in voluptate summum bonum poneret. An haec ab eo non dicuntur? Tu enim ista lenius, hic Stoicorum more nos vexat.Quid enim tanto opus est instrumento in optimis artibus comparandis? '),
(11, 'Zero Mustapha', '2017-07-01', 'I have gotten at least 50 times the value from EdiPhotos. Thanks guys, keep up the good work! Ediphotos is worth much more than I paid. Photography was the best investment I ever made. I don\'t know what else to say. I have gotten at least 50 times the value from EdiPhotos. Thanks guys, keep up the good work! Ediphotos is worth much more than I paid. Photography was the best investment I ever made. I don\'t know what else to say.'),
(12, 'Erik Nilson', '2017-07-21', 'I am so pleased with EdiPhotos. We were treated so well. It\'s incredible. I am so pleased with this product. I am completely blown away. This is simply unbelievable! We can\'t understand how we\'ve been living without EdiPhotos. EdiPhotos is the most valuable business resource we have EVER purchased. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testimonials_tb`
--
ALTER TABLE `testimonials_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testimonials_tb`
--
ALTER TABLE `testimonials_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;