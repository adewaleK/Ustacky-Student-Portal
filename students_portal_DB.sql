-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 10:28 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `locals`
--

CREATE TABLE `locals` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locals`
--

INSERT INTO `locals` (`id`, `name`, `state_id`) VALUES
(1, 'Aba North,Aba South,Arochukwu,Bende,Ikwuano,Isiala Ngwa North,Isiala Ngwa South,Isuikwuato,Obi Ngwa,Ohafia,Osisioma,Ugwunagbo,Ukwa East,Ukwa West,Umuahia North,Umuahia South,Umu Nneochi', 1),
(2, 'Demsa,Fufure,Ganye,Gayuk,Gombi,Grie,Hong,Jada,Lamurde,Madagali,Maiha,Mayo Belwa,Michika,Mubi North,Mubi South,Numan,Shelleng,Song,Toungo,Yola North,Yola South', 2),
(3, 'Abak,Eastern Obolo,Eket,Esit Eket,Essien Udim,Etim Ekpo,Etinan,Ibeno,Ibesikpo Asutan,Ibiono-Ibom,Ika,Ikono,Ikot Abasi,Ikot Ekpene,Ini,Itu,Mbo,Mkpat-Enin,Nsit-Atai,Nsit-Ibom,Nsit-Ubium,Obot Akara,Okobo,Onna,Oron,Oruk Anam,Udung-Uko,Ukanafun,Uruan,Urue-Offong/Oruko,Uyo', 3),
(4, 'Aguata,Anambra East,Anambra West,Anaocha,Awka North,Awka South,Ayamelum,Dunukofia,Ekwusigo,Idemili North,Idemili South,Ihiala,Njikoka,Nnewi North,Nnewi South,Ogbaru,Onitsha North,Onitsha South,Orumba North,Orumba South,Oyi', 4),
(5, 'Alkaleri,Bauchi,Bogoro,Damban,Darazo,Dass,Gamawa,Ganjuwa,Giade,Itas\\/Gadau,Jama\'are,Katagum,Kirfi,Misau,Ningi,Shira,Tafawa Balewa,Toro,Warji,Zaki', 5),
(6, 'Brass,Ekeremor,Kolokuma/Opokuma,Nembe,Ogbia,Sagbama,Southern Ijaw,Yenagoa', 6),
(7, 'Agatu,Apa,Ado,Buruku,Gboko,Guma,Gwer East,Gwer West,Katsina-Ala,Konshisha,Kwande,Logo,Makurdi,Obi,Ogbadibo,Ohimini,Oju,Okpokwu,Oturkpo,Tarka,Ukum,Ushongo,Vandeikya', 7),
(8, 'Abadam,Askira/Uba,Bama,Bayo,Biu,Chibok,Damboa,Dikwa,Gubio,Guzamala,Gwoza,Hawul,Jere,Kaga,Kala/Balge,Konduga,Kukawa,Kwaya Kusar,Mafa,Magumeri,Maiduguri,Marte,Mobbar', 8),
(9, 'Abi,Akamkpa,Akpabuyo,Bakassi,Bekwarra,Biase,Boki,Calabar Municipal,Calabar South,Etung,Ikom,Obanliku,Obubra,Obudu,Odukpani,Ogoja,Yakuur,Yala', 9),
(10, 'Aniocha North,Aniocha South,Bomadi,Burutu,Ethiope East,Ethiope West,Ika North East,Ika South,Isoko North,Isoko South,Ndokwa East,Ndokwa West,Okpe,Oshimili North,Oshimili South,Patani,Sapele,Udu,Ughelli North,Ughelli South,Ukwuani,Uvwie,Warri North,Warri South,Warri South West', 10),
(11, 'Abakaliki,Afikpo North,Afikpo South,Ebonyi,Ezza North,Ezza South,Ikwo,Ishielu,Ivo,Izzi,Ohaozara,Ohaukwu,Onicha', 11),
(12, 'Akoko-Edo,Egor,Esan Central,Esan North-East,Esan South-East,Esan West,Etsako Central,Etsako East,Etsako West,Igueben,Ikpoba Okha,Orhionmwon,Oredo,Ovia North-East,Ovia South-West,Owan East,Owan West,Uhunmwonde', 12),
(13, 'Ado Ekiti,Efon,Ekiti East,Ekiti South-West,Ekiti West,Emure,Gbonyin,Ido Osi,Ijero,Ikere,Ikole,Ilejemeje,Irepodun/Ifelodun,Ise/Orun,Moba,Oye', 13),
(14, 'Aninri,Awgu,Enugu East,Enugu North,Enugu South,Ezeagu,Igbo Etiti,Igbo Eze North,Igbo Eze South,Isi Uzo,Nkanu East,Nkanu West,Nsukka,Oji River,Udenu,Udi,Uzo Uwani', 14),
(15, 'Aninri,Awgu,Enugu East,Enugu North,Enugu South,Ezeagu,Igbo Etiti,Igbo Eze North,Igbo Eze South,Isi Uzo,Nkanu East,Nkanu West,Nsukka,Oji River,Udenu,Udi,Uzo Uwani', 15),
(16, 'Abaji,Bwari,Gwagwalada,Kuje,Kwali,Municipal Area Council', 16),
(17, 'Akko,Balanga,Billiri,Dukku,Funakaye,Gombe,Kaltungo,Kwami,Nafada,Shongom,Yamaltu/Deba', 17),
(18, 'Aboh Mbaise,Ahiazu Mbaise,Ehime Mbano,Ezinihitte,Ideato North,Ideato South,Ihitte/Uboma,Ikeduru,Isiala Mbano,Isu,Mbaitoli,Ngor Okpala,Njaba,Nkwerre,Nwangele,Obowo,Oguta,Ohaji/Egbema,Okigwe,Orlu,Orsu,Oru East,Oru West,Owerri Municipal,Owerri North,Owerri West,Unuimo', 18),
(19, 'Auyo,Babura,Biriniwa,Birnin Kudu,Buji,Dutse,Gagarawa,Garki,Gumel,Guri,Gwaram,Gwiwa,Hadejia,Jahun,Kafin Hausa,Kazaure,Kiri Kasama,Kiyawa,Kaugama,Maigatari,Malam Madori,Miga,Ringim,Roni,Sule Tankarkar,Taura,Yankwashi', 19),
(20, 'Birnin Gwari,Chikun,Giwa,Igabi,Ikara,Jaba,Jema\'a,Kachia,Kaduna North,Kaduna South,Kagarko,Kajuru,Kaura,Kauru,Kubau,Kudan,Lere,Makarfi,Sabon Gari,Sanga,Soba,Zangon Kataf,Zaria', 20),
(21, 'Ajingi,Albasu,Bagwai,Bebeji,Bichi,Bunkure,Dala,Dambatta,Dawakin Kudu,Dawakin Tofa,Doguwa,Fagge,Gabasawa,Garko,Garun Mallam,Gaya,Gezawa,Gwale,Gwarzo,Kabo,Kano Municipal,Karaye,Kibiya,Kiru,Kumbotso,Kunchi,Kura,Madobi,Makoda,Minjibir,Nasarawa,Rano,Rimin Gado,Rogo,Shanono,Sumaila,Takai,Tarauni,Tofa,Tsanyawa,Tudun Wada,Ungogo,Warawa,Wudil', 21),
(22, 'Bakori,Batagarawa,Batsari,Baure,Bindawa,Charanchi,Dandume,Danja,Dan Musa,Daura,Dutsi,Dutsin Ma,Faskari,Funtua,Ingawa,Jibia,Kafur,Kaita,Kankara,Kankia,Katsina,Kurfi,Kusada,Mai\'Adua,Malumfashi,Mani,Mashi,Matazu,Rimi,Sabuwa,Safana,Sandamu,Zango', 22),
(23, 'Aleiro,Arewa Dandi,Argungu,Augie,Bagudo,Birnin Kebbi,Bunza,Dandi,Fakai,Gwandu,Jega,Kalgo,Koko/Besse,Maiyama,Ngaski,Sakaba,Shanga,Suru,Wasagu/Danko,Yauri,Zuru', 23),
(24, 'Asa,Baruten,Edu,Ekiti,Ifelodun,Ilorin East,Ilorin South,Ilorin West,Irepodun,Isin,Kaiama,Moro,Offa,Oke Ero,Oyun,Pategi', 24),
(25, 'Agege,Ajeromi-Ifelodun,Alimosho,Amuwo-Odofin,Apapa,Badagry,Epe,Eti Osa,Ibeju-Lekki,Ifako-Ijaiye,Ikeja,Ikorodu,Kosofe,Lagos Island,Lagos Mainland,Mushin,Ojo,Oshodi-Isolo,Shomolu,Surulere', 25),
(26, 'Akwanga,Awe,Doma,Karu,Keana,Keffi,Kokona,Lafia,Nasarawa,Nasarawa Egon,Obi,Toto,Wamba', 26),
(27, 'Agaie,Agwara,Bida,Borgu,Bosso,Chanchaga,Edati,Gbako,Gurara,Katcha,Kontagora,Lapai,Lavun,Magama,Mariga,Mashegu,Mokwa,Moya,Paikoro,Rafi,Rijau,Shiroro,Suleja,Tafa,Wushishi', 27),
(28, 'Abeokuta North,Abeokuta South,Ado-Odo/Ota,Egbado North,Egbado South,Ewekoro,Ifo,Ijebu East,Ijebu North,Ijebu North East,Ijebu Ode,Ikenne,Imeko Afon,Ipokia,Obafemi Owode,Odeda,Odogbolu,Ogun Waterside,Remo North,Shagamu', 28),
(29, 'Akoko North-East,Akoko North-West,Akoko South-West,Akoko South-East,Akure North,Akure South,Ese Odo,Idanre,Ilaje,Ile Oluji/Okeigbo,Irele,Odigbo,Okitipupa,Ondo East,Ondo West,Ose,Owo', 29),
(30, 'Atakunmosa East,Atakunmosa West,Aiyedaade,Aiyedire,Boluwaduro,Boripe,Ede North,Ede South,Ife Central,Ife East,Ife North,Ife South,Egbedore,Ejigbo,Ifedayo,Ifelodun,Ila,Ilesa East,Ilesa West,Irepodun,Irewole,Isokan,Iwo,Obokun,Odo Otin,Ola Oluwa,Olorunda,Oriade,Orolu,Osogbo', 30),
(31, 'Afijio,Akinyele,Atiba,Atisbo,Egbeda,Ibadan North,Ibadan North-East,Ibadan North-West,Ibadan South-East,Ibadan South-West,Ibarapa Central,Ibarapa East,Ibarapa North,Ido,Irepo,Iseyin,Itesiwaju,Iwajowa,Kajola,Lagelu,Ogbomosho North,Ogbomosho South,Ogo Oluwa,Olorunsogo,Oluyole,Ona Ara,Orelope,Ori Ire,Oyo,Oyo East,Saki East,Saki West,Surulere', 31),
(32, 'Bokkos,Barkin Ladi,Bassa,Jos East,Jos North,Jos South,Kanam,Kanke,Langtang South,Langtang North,Mangu,Mikang,Pankshin,Qua\'an Pan,Riyom,Shendam,Wase', 32),
(33, 'Abua\\/Odual,Ahoada East,Ahoada West,Akuku-Toru,Andoni,Asari-Toru,Bonny,Degema,Eleme,Emuoha,Etche,Gokana,Ikwerre,Khana,Obio/Akpor,Ogba/Egbema/Ndoni,Ogu/Bolo,Okrika,Omuma,Opobo/Nkoro,Oyigbo,Port Harcourt,Tai', 33),
(34, 'Binji,Bodinga,Dange Shuni,Gada,Goronyo,Gudu,Gwadabawa,Illela,Isa,Kebbe,Kware,Rabah,Sabon Birni,Shagari,Silame,Sokoto North,Sokoto South,Tambuwal,Tangaza,Tureta,Wamako,Wurno,Yabo\r\n\r\n\r\n\r\n\r\n\r\n', 34),
(35, 'Ardo Kola,Bali,Donga,Gashaka,Gassol,Ibi,Jalingo,Karim Lamido,Kumi,Lau,Sardauna,Takum,Ussa,Wukari,Yorro,Zing\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 35),
(36, 'Bade,Bursari,Damaturu,Fika,Fune,Geidam,Gujba,Gulani,Jakusko,Karasuwa,Machina,Nangere,Nguru,Potiskum,Tarmuwa,Yunusari,Yusufari\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 36),
(37, 'Anka,Bakura,Birnin Magaji/Kiyaw,Bukkuyum,Bungudu,Gummi,Gusau,Kaura Namoda,Maradun,Maru,Shinkafi,Talata Mafara,Chafe,Zurmi\r\n\r\n\r\n\r\n\r\n', 37);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Abia State'),
(2, 'Adamawa State'),
(3, 'Akwa Ibom State'),
(4, 'Anambra State'),
(5, 'Bauchi State'),
(6, 'Bayelsa State'),
(7, 'Benue State'),
(8, 'Borno State'),
(9, 'Cross River State'),
(10, 'Delta State'),
(11, 'Ebonyi State'),
(12, 'Edo State'),
(13, 'Ekiti State'),
(14, 'Enugu State'),
(15, 'Enugu State'),
(16, 'FCT'),
(17, 'Gombe State'),
(18, 'Imo State'),
(19, 'Jigawa State'),
(20, 'Kaduna State'),
(21, 'Kano State'),
(22, 'Katsina State'),
(23, 'Kebbi State'),
(24, 'Kwara State'),
(25, 'Lagos State'),
(26, 'Nasarawa State'),
(27, 'Niger State'),
(28, 'Ogun State'),
(29, 'Ondo State'),
(30, 'Osun State'),
(31, 'Oyo State'),
(32, 'Plateau State'),
(33, 'Rivers State'),
(34, 'Sokoto State'),
(35, 'Taraba State'),
(36, 'Yobe State'),
(37, 'Zamfara State');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(200) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `address` text NOT NULL,
  `state_of_origin` varchar(200) NOT NULL,
  `local_govt` varchar(200) NOT NULL,
  `next_of_kin` varchar(200) NOT NULL,
  `jamb_score` int(11) NOT NULL,
  `admin_status` varchar(200) NOT NULL DEFAULT 'Undecided'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `image_path`, `firstname`, `middlename`, `lastname`, `email`, `date_of_birth`, `gender`, `phone_number`, `address`, `state_of_origin`, `local_govt`, `next_of_kin`, `jamb_score`, `admin_status`) VALUES
(51, 'image_uploads/newImg.jpg', 'Kamilu', 'Akanji', 'Adewale', 'devkamilnaija@gmail.com', '2021-04-14', 'male', 2147483647, '42, hassan Balogun, Street, Isheri-olofin, Lagos', 'Osun', 'Odo Otin', 'jacob', 250, 'Undecided'),
(52, 'image_uploads/mypic.PNG', 'Kamil', 'Akanji', 'Opeyemi', 'pearlkelar1@gmail.com', '2021-04-06', 'male', 2147483647, '42, Hassan Balogun Street, Isheri, Lagos', 'Enugu State', 'Oji River', 'jacob', 300, 'Admitted'),
(53, 'image_uploads/st6.jpg', 'Juliana', 'Mary', 'Bimbols', 'devkamilnaija@gmail.com', '2021-04-21', 'male', 2147483647, '42, Hassan Balogun Street, Isheri-Olofin,', 'FCT', 'Gwagwalada', 'jacob', 180, 'Undecided'),
(54, 'image_uploads/st19.jpg', 'Idris', 'Buhari', 'Omojuyi', 'idris@gmail.com', '2021-04-24', 'male', 908756467, '', 'Jigawa State', 'Hadejia', 'Jacob', 250, 'Admitted'),
(55, 'image_uploads/st1.jpg', 'Oseni', 'Buhari', 'Muhammed', 'devkamilnaija@gmail.com', '2021-05-08', 'male', 2147483647, '42, Hassan Balogun Street, Isheri-Olofin,', 'Katsina State', 'Kaita', 'Jacob', 180, 'Undecided'),
(56, 'image_uploads/st9.jpg', 'Mariana', 'Chuks', 'Adewale', 'devkamilnaija@gmail.com', '2013-11-19', 'female', 2147483647, '42, Hassan Balogun Street, Isheri-Olofin,', 'FCT', 'Kuje', 'Jacob', 200, 'Undecided'),
(57, 'image_uploads/st8.jpg', 'Balqees', 'Buhari', 'Rahmon', 'devkamilnaija@gmail.com', '2018-07-05', 'female', 908756467, '42, Hassan Balogun Street, Isheri-Olofin,', 'Kano State', 'Gezawa', 'Muhammed', 257, 'Undecided'),
(58, 'image_uploads/st13.jpg', 'Johnson', 'Maduba', 'Adewale', 'devkamilnaija@gmail.com', '2021-04-29', 'male', 2147483647, '42, Hassan Balogun Street, Isheri-Olofin,', 'Kebbi State', 'Yauri', 'Muhammed', 257, 'Admitted'),
(59, 'image_uploads/st14.jpg', 'Deborah', 'Elizabeth', 'Ojo', 'devkamilnaija@gmail.com', '2021-04-07', 'female', 908756467, '42, Hassan Balogun Street, Isheri-Olofin,', 'Abia State', 'Ohafia', 'jacob', 300, 'Undecided'),
(60, 'image_uploads/st7.jpg', 'Smith', 'Jacob', 'Akanji', 'devkamilnaija@gmail.com', '2021-04-29', 'male', 2147483647, '42, Hassan Balogun Street, Isheri-Olofin,', 'Anambra', 'Nnewi North', 'Jacob', 300, 'Undecided'),
(61, 'image_uploads/st16.jpg', 'Joseph', 'Buhari', 'Adewale', 'devkamilnaija@gmail.com', '2021-04-20', 'male', 908756467, '42, Hassan Balogun Street, Isheri-Olofin,', 'Bauchi State', 'Kirfi', 'Jacob', 200, 'Undecided'),
(62, 'image_uploads/st12.jpg', 'Maryam', 'Buhari', 'Adewale', 'devkamilnaija@gmail.com', '2021-04-21', 'male', 908756467, '42, Hassan Balogun Street, Isheri-Olofin,', 'Taraba State', 'Yorro', 'Muhammed', 180, 'Undecided'),
(63, 'image_uploads/st17.jpg', 'Etebo', 'Ogbe', 'James', 'dem@gmail.com', '2021-04-20', 'male', 908765433, '23, Olayemi Street, Ota', 'Ogun State', 'Ifo', 'Paul', 200, 'Undecided');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locals`
--
ALTER TABLE `locals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locals`
--
ALTER TABLE `locals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
