

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13991774_search`
--
CREATE DATABASE IF NOT EXISTS `id13991774_search` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id13991774_search`;

-- --------------------------------------------------------

--
-- بنية الجدول `emp`
--

CREATE TABLE `emp` (
  `barcode` text COLLATE utf8_unicode_ci NOT NULL,
  `describtion` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `percent` double NOT NULL,
  `ward` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
