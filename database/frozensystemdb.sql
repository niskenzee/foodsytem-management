-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 04:38 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frozensystemdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `security_question` varchar(500) NOT NULL,
  `security_answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `email`, `password`, `firstname`, `lastname`, `security_question`, `security_answer`) VALUES
(6, 'adzkie@email.com', 'adzkie07', 'adones', 'evangelista', 'What was your childhood nickname?', 'ado');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `qty` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `contact_number` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `order_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `id` int(100) NOT NULL,
  `order_id` int(100) NOT NULL,
  `order_total` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

CREATE TABLE `tblcustomers` (
  `id` int(7) UNSIGNED ZEROFILL NOT NULL,
  `order_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` int(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `contact_number` varchar(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `Employee_id` int(7) UNSIGNED ZEROFILL NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Age` int(2) NOT NULL,
  `Address` text NOT NULL,
  `Contact_Number` varchar(11) NOT NULL,
  `Email_Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`Employee_id`, `First_Name`, `Middle_Name`, `Last_Name`, `Age`, `Address`, `Contact_Number`, `Email_Address`) VALUES
(0000002, 'RIZA', 'NIAR', 'CORDOVA', 25, 'HIMAMAYLAN CITY', '09222354789', 'RIZ@EMAIL.COM'),
(0000003, 'JEAN', 'MOMBAY', 'DUTERTE', 24, 'BRGY. PAYAW, BINALBAGAN, NEG.OCC', '09124555875', 'APILLANO@EMAIL.COM'),
(0000005, 'JEFRY', 'BILLIONES', 'PALATA', 28, 'Brgy.Enclaro, Binalbagan, Neg. Occ', '09284369568', 'JEFRY@EMAIL.COM'),
(0000006, 'REX', 'OLVIDADO', 'EVANGELISTA', 24, 'KABANKALAN CITY', '09482789123', 'REZ@EMAIL.COM'),
(0000008, 'RUFFA', 'OCTAVIO', 'DE VICENTE', 29, 'ILOG, NEG. OCC', '09226785436', 'RUFFA@EMAIL.COM'),
(0000009, 'JUAN ', 'CRUZ', 'OLVIDADO', 23, 'BRGY. INAPOY, KABANKALAN CITY', '09224567891', 'JUAN@YAHOO.COM'),
(0000010, 'caren', 'batista', 'bautista', 22, 'brgy.lokotan, kabankalan city', '09383838484', 'caren@gmail.com'),
(0000012, 'wong', 'kent', 'vincent', 23, 'isabela ', '09124555875', 'caren@gmail.com'),
(0000013, 'ainee', 'suetas', 'pobreza', 23, 'brgy.tapi, Kabankalan City', '09459540344', 'aine@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `productid` int(100) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_type` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(200) NOT NULL,
  `on hand` int(1) UNSIGNED ZEROFILL NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`productid`, `product_name`, `product_type`, `image`, `description`, `price`, `on hand`, `quantity`) VALUES
(11, 'CHEESE HOTDOG', 'PHILIPPINES', 'images/cheesee.jpg', 'red cheesedog made from hefty meat stuffed', '50', 0, 1000),
(12, 'CHICKEN LONGGANIZA', 'PHILIPPINES', 'images/chickenlongganiza.jpg', 'Chicken longganisa with carrots is a healthy alternative to pork or beef longganisa because it is low in fat and has vegetable extenders such as carrots and turnips. ', '50', 0, 100),
(13, 'PORK TOCINO', 'PHILIPPINES', 'images/porktocino.jpg', 'cured meat product native to the Philippines. It is sometimes referred to as sweet red pork. The curing preparation for this pork dish is similar to that of ham and bacon, except that red food coloring is needed to for this Filipino cured meat.', '50', 0, 100),
(14, 'CHICKEN HOTDOG', 'PHILIPPINES', 'images/chickenhotdoog.jpg', 'Less expensive hot dogs are often made from chicken or turkey, using low-cost mechanically separated poultry. Typical hot dogs contain sodium, saturated fat and nitrite, which when consumed in excess have been linked to health problems.', '55', 0, 100),
(15, 'SKINLESS LONGGANIZA', 'PHILIPPINES', 'images/skinlesslongganiza.jpg', 'version of the native Filipino sausage usually made of ground pork, garlic, and spices. ... Its taste is mostly sweet and garlicky like hamonado but ï¿½hotï¿½ varieties are also common with added copious amounts of ground pepper.', '60', 0, 100),
(16, 'SWEET HAM', 'PHILIPPINES', 'images/sweetham.jpg', 'Sweet Ham with Pineapple Sauce Recipe. The touch of sweetness in this ham complements the tangy compote.', '65', 0, 100),
(17, 'NATIVE LONGGANIZA', 'PHILIPPINES', 'images/nativelongganiza.jpg', 'version of the native Filipino sausage usually made of ground pork, garlic, and spices. ... Its taste is mostly sweet and garlicky like hamonado but ï¿½hotï¿½ varieties are also common with added copious amounts of ground pepper', '60', 0, 100),
(18, 'MEATY BURGER', 'PHILIPPINES', 'images/meatyburger.jpg', 'Fresh and Meaty Burgers takes you on a delicious experience with their fresh and meaty burgers. Feast on the Double Chili Cheese Meaty Burger, the Chili Cheese King Burger, and the Chili Cheese Fries!', '75', 0, 100),
(19, 'BACON', 'PHILIPPINES', 'images/imad.jpg', 'prepared from several different cuts of meat, typically from the pork belly or from back cuts, which have less fat than the belly', '45', 0, 100),
(20, 'BEEF TAPA', 'PHILIPPINES', 'images/beeftapaa.jpg', 'ried or cured beef, mutton, venison or horse meat, although other meat or even fish may be used. Filipinos prepare tapa by using thin slices of meat and curing these with salt and spices as a preserva', '60', 0, 50),
(21, 'CHICKEN MEAT', 'PHILIPPINES', 'images/chicken.jpg', 'Chicken can be prepared in a vast range of ways, including baking, grilling, barbecuing, frying, and boiling, among many others, depending on its purpose. Since the latter half of the 20th century, prepared chicken has become a staple of fast food. Chicken is sometimes cited as being more healthful than red meat, with lower concentrations of cholesterol and saturated fat', '150', 0, 100),
(23, 'BIGTIME CHEESE HOTDOG', 'PHILIPPINES', 'images/images3.png', 'A hot dog topped with a spiced meat sauce called Cincinnati chili, mustard, diced onions, and sometimes cheese. A large, natural-casing hot dog topped with a hearty, mildly spiced meat sauce, and with mustard and diced onions. A 10-inch hot dog wrapped in a steamed bun.', '50', 0, 100),
(24, 'HAPPY HOTDOG', 'PHILIPPINES', 'images/happyhotdog.jpg', 'Hot dogï¿½ means a whole, cured, cooked sausage that is skinless or stuffed in a casing, that may be known as a frankfurter, frank, furter, wiener, red hot, vienna, bologna, garlic bologna, or knockwurst, and that may be served in a bun or roll', '45', 0, 100),
(25, 'TENDER JUICY HOTDOG', 'PHILIPPINES', 'images/tenderjuicy.jpg', 'ender Juicy Hotdog is the undisputed No. 1 hotdog brand in the Philippines, having the best tasting, juiciest, and most tender hotdogs Filipinos love throughout the years.', '60', 0, 100),
(26, 'ARGINTINA HOTDOG', 'PHILIPPINES', 'images/imagee.jpg', 'so the quality of the coarsely ground pork sausage is high enough to make you cry. It\'s seared to a beautiful crackly crust, more than any hot dog, spitting and sizzling as it gets slapped onto a toasted bun. And as for toppings, you don\'t get just ketchup and mustard.', '75', 0, 1000),
(27, 'VIRGINIA HOTDOG', 'PHILIPPINES', 'images/virginiahotdog.jpg', ' meat processing company that has been proving many families with quality food products. These products have been a tasty treat for the whole family and it has helped bring satisfaction to our taste buds. Virginia foods are indeed product perfect for every taste and lifestyle.', '75', 0, 100),
(28, 'SMOKE BACON HAM', 'philippines', 'images/smokeham.jpg', 'Most have some sugar or maple flavor in the cure. Some are smoked, and some get a smoke flavor from liquid smoke.', '50', 0, 100),
(29, 'ROLLED HAM', 'PHILIPPINES', 'images/rolledham.jpg', 'The addition of something sweet brings these rolls to a whole level of deliciousness by balancing the saltiness of the ham and the richness of the cheese. Give these ham and cheese bread rolls a try and enjoy! Trim edges of the bread and with a rolling pin, flatten until very thin. ... Repeat with remaining bread slices.', '65', 0, 100),
(30, 'SPICE HAM', 'PHILIPPINES', 'images/spiceham.jpg', 'Sweet-hot pepper jelly and tangy pineapple preserves create an easy glaze for the ham. ... Reduce oven temperature to 325ï¿½ (do not remove ham from oven); bake an additional 45 minutes, basting ham with jelly mixture every 15 minutes. ... Perfect balance of sweet, tart, spice and heat.', '95', 0, 100),
(31, 'VACUUM PACKED HAM', 'PHILIPPINES', 'images/vacuumpackedham.jpg', 'When you first take the meat from the vacuum pack you may notice a slight odour. This is normal with traditionally cured ham, and will fade in a few minutes. Once open, keep cooked ham covered with greaseproof paper to prevent the ham drying out.', '100', 0, 100),
(32, 'NAKED HAM', 'PHILIPPINES', 'images/nakedham.jpg', 'Naked ham is sourced from local farms in Pennsylvania and is antibiotic and hormone free. Mrs. Leonard loves to serve her Easter ham with a sweet glaze that includes maple syrup and brown sugar, making this dish a delightful combination of sweet and salty.', '90', 0, 100),
(33, 'SPIRAL SLICE HAM', 'PHILIPPINES', 'images/spiralsliceham.jpg', 'A precooked ham that has been pre-sliced by spiral cutting in order to make it convenient for serving the ham slices. Pre-slicing in this manner allows the ham to be cut into sections, if so desired, with each section being sliced and ready to serve.', '120', 0, 100),
(34, 'LONGGANIZA HAMONADA', 'PHILIPPINES', 'images/longganizahamonada.jpg', 'his longanisa recipe s the perfect breakfast food. Learn how to make your homemade Filipino sausage through this recipe post.', '95', 0, 100),
(35, 'CHORIZO CEBUANO', 'PHILIPPINES', 'images/chorizocebuano.jpg', 'The chorizo de Cebu is a unique type of sausage since they are circular in shape. There also come in two sizes, big and small. You can also choose the regular or spicy chorizo de Cebu and are typically sold by the dozen. Chorizo de Cebu is great for breakfast and can be paired with either plain rice or fried rice.', '55', 0, 100),
(36, 'SWEET PORK LONGGANIZA', 'PHILIPPINES', 'images/sweetpork.jpg', 'hese sweet longganisa are Filipino-style sausages made with ground pork, pork fat', '75', 0, 100),
(37, 'PORK EMBUTIDO', 'PHILIPPINES', 'images/porkembutido.jpg', 'Pork Embutido are well seasoned ground pork, well beaten eggs, minced onion and carrots, vienna sausages or hotdogs, ...', '60', 0, 100),
(38, 'CHICKEN EMBUTIDO', 'PHILIPPINES', 'images/chickenembutido.jpg', 'Embutido is a type of Filipino steamed meatloaf. Today, we are featuring Chicken Embutido, which is a meatloaf made from ground chicken.', '45', 0, 100),
(39, 'SPAM TOCINO', 'PHILIPPINES', 'images/spamtocino.jpg', 'spam comes in a myriad of different flavors including teriyaki and jalapeï¿½o, the tocino version is exclusive to the Philippines, and is an homage to the Filipino breakfast, an insane hybrid between two items that have become staples to our almusal repertoire.', '75', 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tblsupplier`
--

CREATE TABLE `tblsupplier` (
  `Supplier_Id` int(7) UNSIGNED ZEROFILL NOT NULL,
  `Supplier_Name` varchar(50) NOT NULL,
  `Supplier_Address` text NOT NULL,
  `Contact_Number` varchar(11) NOT NULL,
  `Email_Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsupplier`
--

INSERT INTO `tblsupplier` (`Supplier_Id`, `Supplier_Name`, `Supplier_Address`, `Contact_Number`, `Email_Address`) VALUES
(0000003, 'SUPPLIER4', 'HIMAMAYLAN CITY', '09451309505', 'SUPPLIER4@EMAIL.COM'),
(0000004, 'SUPPLIER4', 'BINALBAGAN', '09091675894', 'SUPPLIER4@EMAIL.COM'),
(0000012, 'supplier 7', 'Bago city', '9451309505', 'supplier7@email.com'),
(0000013, 'TALISAY1', 'SINGCANG AIRPORT', '88448488', 'A@yahoo.com'),
(0000014, 'SUPPLIER 7', 'SINGCANG AIRPORT, NEGROS OCCIDENTAL', '09124555875', 'SUPPLIER7@EMAIL.COM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `access`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(4, 'supplier', '99b0e8da24e29e4ccb5d7d76e677c2ac', 3),
(10, 'supplier2', 'supplier2', 4),
(11, 'supplier3', 'supplier3', 5),
(12, 'supplier4', 'supplier4', 6),
(13, 'supplier5', 'supplier5', 7),
(14, 'supplier6', 'supplier6', 8),
(21, 'adones', '511a02a6305fbd41c0544ae073c4a963', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(39, 'adzkie', 'evanz', 'adzkie@email.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(40, 'adones', 'evangelista', 'adones@yahoo.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(41, 'adones', 'evangelista', 'adzkie@email.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(42, 'adones', 'evangelista', 'adzkie@email.com', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`Employee_id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  ADD PRIMARY KEY (`Supplier_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  MODIFY `id` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `Employee_id` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `productid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  MODIFY `Supplier_Id` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
