-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `secenekler`
--

CREATE TABLE IF NOT EXISTS `secenekler` (
`id` int(11) NOT NULL,
  `fotograf` text NOT NULL,
  `soruID` int(11) NOT NULL,
  `yanit` text NOT NULL,
  `turu` varchar(15) NOT NULL,
  `hataFotografi` text NOT NULL,
  `hataMesaji` text NOT NULL,
  `sonucFotografi` text NOT NULL,
  `sonucMesaji` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `secenekler`
--

INSERT INTO `secenekler` (`id`, `fotograf`, `soruID`, `yanit`, `turu`, `hataFotografi`, `hataMesaji`, `sonucFotografi`, `sonucMesaji`) VALUES
(1, '', 1, 'Evin etrafını hilal taktiği ile sarıp saldıralım.', 'Doğru', '', '', '', ''),
(2, '', 1, 'Havanın iyice kararmasını bekleyip dinlenelim.', 'Doğru', '', '', '', ''),
(3, '', 2, 'Arkadan eve sessizce dahada yaklaş.', 'Doğru', '', '', '', ''),
(4, '', 2, 'Şimdi ateş et ve çemberi daraltmaya başla.', 'Doğru', '', '', '', ''),
(5, '', 3, 'Ateş edip çatışmaya gir.', 'Doğru', '', '', '', ''),
(6, '', 3, 'RPG ile eve vuralım.', 'Doğru', '', '', '', ''),
(7, '', 4, 'Hemen siper alıp kendimizi koruyalım.', 'Doğru', '', '', '', ''),
(8, '', 4, 'Taktiği uygulamamız lazım başka türlü ele geçiremeyiz.', 'Doğru', '', '', '', ''),
(9, '', 5, 'Evi boşver adamları öldürerek devam et.', 'Doğru', '', '', '', ''),
(10, '', 5, 'Kitaba zarar gelmesin diye eve dikkat et ve korunarak saldır.', 'Doğru', '', '', '', ''),
(11, '', 6, 'Farketmez,alanı daraltıp yakın çatışmaya devam et.', 'Yanlış', '../fotograf/638c6e0f6dbbc38ab648d40428c7475c.gif', 'Çok fazla yaklaştınız.Uzun namlulu silahlar ile sizi öldürdüler.Çok çok geçmiş olsun bundan sonra tedbirli hareket etmeye çalışın.', '', ''),
(12, '', 6, 'Kaldığımız yerden ateşe devam.', 'Doğru', '', '', '', ''),
(13, '', 7, 'Bir şey olmaz,son kalanı da indirip kimse gelmeden hemen eve gir.', 'Doğru', '', '', '', ''),
(14, '', 7, 'O muhafazın teslim olmasını iste.', 'Yanlış', '../fotograf/a24055cb94b51fdc4946dc72ab2f108a.gif', 'Muhafız teslim oldu ama canlı bomba olduğunu siz patladıktan sonra anladınız.Keşke biraz daha dikkatli olsaydınız tekrardan geçmiş olsun.', '', ''),
(15, '', 8, 'Kendimi siper etmem lazım yoksa beni de indirecekler.', 'Doğru', '', '', '', ''),
(16, '', 8, 'Kafamı kaldırıp yer değiştirmem lazım.', 'Yanlış', '../fotograf/15270f1113ade867270d45b085990644.gif', 'Sen kendinde misin ? Çatışma halinde başını kaldırırsan ölürsün ! Evin üst katında pusuda bekleyen muhafız tarafından öldürüldün.', '', ''),
(17, '', 9, 'Son durak kara toprak.Yeter ki emir yerine gelsin,durmadan evin içine koş !', 'Doğru', '', '', '', ''),
(18, '', 9, 'Bana yaklaşmalarını bekleyip onları indireceğim.', 'Doğru', '', '', '', ''),
(19, '', 10, 'Eve girmenin vakti geldi artık,girelim bakalım.', 'Yanlış', '../fotograf/0ed96fd6763b9555d65e1f077d135896.gif', 'Amaan ya naptın sen ? Eğer cesetleri kontrol etseydin sana kurulan tuzağı görüp ölmezdin.Neyse artık sağlık olsun.', '', ''),
(20, '', 10, 'Cesetleri kontrol et ve kenara taşıyıp öyle gir.', 'Doğru', '', '', '', ''),
(21, '', 11, 'Evden dışarı doğru saldırıp hepsini yok et !', 'Sonuç', '', '', '../fotograf/8d1e7b9b3302bcec38416b8ea4bf413f.gif', 'Eve girip emaneti aldın ve düşmanları yok ettin.Tebrikler,senin acilen istihbarata başvuruda bulunman lazım bu kafayla buralarda fazla gezinme ;)'),
(22, '', 11, 'Emaneti al ve hemen çık.', 'Yanlış', '../fotograf/ce73305b13a02bc3da703eb9f323a835.gif', 'Dışarı çıkar çıkmaz kafana mermiyi yedin.Hadi Allah rahmet eylesin.', '', ''),
(23, '', 12, 'Korkuyorum,oraya giremeyeceğim sanırım.', 'Yanlış', '../fotograf/fb0ab8cf67409874e9692d5b6d676cb8.gif', 'Cesurlar bir kere ,korkaklar ise her gün ölür.Görev başarısız ,üzgünüm.', '', ''),
(24, '', 12, 'Ortalık temizlendiğine göre kitabı almak istiyorum.', 'Doğru', '', '', '../fotograf/06b532352339b08c6086122cb0943a52.gif', 'Kitabı başarıyla alıp çıktın.Memleketin seninle gurur duyuyor !'),
(25, '', 13, 'Evet ben bunun için buralara kadar geldim.', 'Sonuç', '', '', '../fotograf/06b532352339b08c6086122cb0943a52.gif', 'Vay senin Allah''ına kurban.İşte bu memlekete böyle adamlar lazım.'),
(26, '', 13, 'Hayır canımı tehlikeye atmak istemiyorum.', 'Yanlış', '../fotograf/35510e5ae720e6728a9bd3bab65aa919.gif', 'Kaybettin,bu oyun böyle bitmemeliydi.', '', ''),
(27, '', 14, 'Evden ateş edip onu öldür ve emaneti alıp memlekete dön.', 'Sonuç', '', '', '../fotograf/bd5a7bafc74c6c08f2d691f3b226e1cd.gif', 'Aman yarabbi ! Bu ne cesarettir yiğidim ? Seni tanımak isterim.'),
(28, '', 14, 'Onun gitmesini bekleyip kitabı öyle alacağım.', 'Yanlış', '../fotograf/8c9ac28bd25dba52712e5e48cd7296f7.gif', 'Zamanında hareket etmek çok mühim bir konudur.Sen evde beklerken onlara gelen takviye kuvvet sonrasında seni vurup öldürdüler.', '', ''),
(30, '', 15, 'Kitabı al ve tekrar koşarak dışarı çık.', 'Yanlış', '../fotograf/364535b6c3f853274f5b0b030c246df9.gif', 'Zaten yaralısın nereye çıkıyorsun ki ? Kafanın tam ortasından mermiyi yedin.Afiyet olsun.', '', ''),
(31, '', 15, 'Yaralıyım,evin içinde biraz dinlenmem lazım.', 'Yanlış', '../fotograf/44f824c5024863f752358e26477c457d.gif', 'Kan kaybediyorsun,dışardan tek tek mermi geliyor ve cephanen bitti.Artık insanlıktan çıktın.Bu durumda ya kan kaybından ölecek ya da öldürüleceksin.Canını kurtarmak için kaçsan daha iyi olurdu.', '', ''),
(32, '', 16, 'Buraya kadarmış cebimdeki kasatura son şansım.Allah büyüktür , hadi hayırlısı.', 'Sonuç', '', '', '../fotograf/0f2dfe3c44ef2d87429370788e29ea8f.gif', 'İşte budur,risk almadan savaşamazsın.Adamın üstüne çullanınca adamın da mermisinin bittiğini gördün.İkiniz de bileğinizin gücüyle kapıştınız.Ve zafer inanlarındır.Gönülden tebrik ederiz ! Operasyon başarıyla tamamlanmıştır.'),
(33, '', 16, 'Teslim olacağım,canımı tehlikeye atmak istemiyorum.', 'Yanlış', '../fotograf/ff8990759711d3516a7abf938d5d05d1.gif', 'Tesadüf bu ya ! Karşıdaki adamın da mermisi bitmiş.Ama sen psikolojik bir korkuyla bunun farkına varamayıp kendi elinle canını teslim edip bu operasyondaki değerini kaybettin.Hayat bu,ne olacağını bilemezsin.', '../fotograf/f79d754b665503701da70c1b9ec732ec.', ''),
(34, '', 17, 'Emaneti almanın vakti.Şimdi ev yıkılmadan içeri girip emanetimizi alıp kendi toprağımıza dönelim.', 'Sonuç', '../fotograf/114d858aedf58c7ef6e32e11ecf6958c.', '', '../fotograf/178e4d20b064ef50a3593ba77b425a44.gif', 'Çok önemli bir görevi yerine getirdiğin için seni can-ı gönülden tebrik eder ve başarılarının devamını dileriz.Allah kuvvetine kuvvet katsın yiğidim.'),
(35, '', 17, 'İçerde tehlikenin olabileceğine dair şüphelerim var.Kenarda biraz bekle.', 'Yanlış', '../fotograf/0f8af202ae74a503da16a8cbe7fb620c.gif', 'Tam işi bitirdin gidecekken çok saçma bir karar ile operasyonu mahvettin.Bir umudumuz sen vardın artık sen de yoksun :(', '../fotograf/76f556f34083d558b0c9624b042e938c.', ''),
(36, '', 18, 'Sucuklu', 'Doğru', '../fotograf/62db897e46d0d95af5a12fad5f180709.', '', '../fotograf/62db897e46d0d95af5a12fad5f180709.', ''),
(37, '', 18, 'Sucuksuz', 'Doğru', '../fotograf/19e53b3adf1c44f5a8993af607108509.', '', '../fotograf/19e53b3adf1c44f5a8993af607108509.', ''),
(38, '', 19, 'Ekmeği makinenin içine koy', 'Yanlış', '../fotograf/4413257272b43711fed996bf9974bb82.gif', 'Ekmeğe daha var ama :(', '../fotograf/538c2aa58a7ab5ca69eca1b171992f0a.', ''),
(39, '', 19, 'Peynirleri ekmeğin arasına koyup ısıt.', 'Yanlış', '../fotograf/e01097eaa7391853ad872c2b32165cd7.gif', 'Peynire çok var yav :/', '../fotograf/ca22b3f910b1183f3385b3c864878c9e.', ''),
(40, '', 19, 'Makineyi açıp sucukları kızart.', 'Doğru', '../fotograf/ea97d3472e919a863fb7995caddc7a02.', '', '../fotograf/ea97d3472e919a863fb7995caddc7a02.', ''),
(41, '', 20, 'Peynirleri makinede ısıt.', 'Yanlış', '../fotograf/544d142fdb75598e3b805ade993dedb2.gif', 'Sen tostun tarifine iyi bak.Bu şekilde yapma Allah muhafaza aç kalırsın.', '../fotograf/af8951f3d8c1aebecc8f88ce3d59bd85.', ''),
(42, '', 20, 'Tereyağını ekmeğe sür ve makinede iyice ez.', 'Doğru', '../fotograf/7f79870c53badf906177d3abdb3237ce.', '', '../fotograf/7f79870c53badf906177d3abdb3237ce.', ''),
(43, '', 20, 'Ekmeğin arasına sucukları dizebiliriz.', 'Yanlış', '../fotograf/6be622b5cc7e87990238d72806ad9a0e.gif', 'Ekmeği yağlamadın,ısıtmadın hele peyniri  ekmeğe hiç koymadın.Nasıl olurda sucukları ekmeğe dizeriz.', '../fotograf/5bd66c91d44b1a21d704fc1be93fbecb.', ''),
(44, '', 21, 'Ekmeği çıkar peyniri bir daha ısıt.', 'Yanlış', '../fotograf/d0f43ed60f1e4d041fe852607cbac31d.gif', 'Kafan karışmış olsa gerek bu kadarına gerek yok :)', '../fotograf/d0f43ed60f1e4d041fe852607cbac31d.gif', ''),
(45, '', 21, 'Şimdi peynirleri ekmeğin arasına koyup makineyi bir daha kapatalım.', 'Doğru', '../fotograf/6317bd7222040a3188104b4d99df7d67.', '', '../fotograf/6317bd7222040a3188104b4d99df7d67.', ''),
(46, '', 22, 'Eyvallah,servise hazır hale getirdik.Afiyet olsun..', 'Yanlış', '../fotograf/2f47f6af70f20cc1f9def36751c7785b.gif', 'Sucukları bahçedeki kedi köpeklere vereceksin herhalde :)', '../fotograf/94c07cef163e4c6838db850b5b1775b0.', ''),
(47, '', 22, 'Sucukları ekmeğe yerleştirelim.', 'Doğru', '../fotograf/849cc51087fefa8b7332c8154a3a19c8.', '', '../fotograf/849cc51087fefa8b7332c8154a3a19c8.', ''),
(48, '', 22, 'Tekrar yağ sürüp bekleyelim.', 'Yanlış', '../fotograf/ad100ebd26961017d690b10c36345025.gif', 'Çok yağlı oldu ,bu şekilde tost yaparsan vücuduna fazlaca zarar verirsin.En iyisi iyice öğrendikten sonra tekrar dene.', '../fotograf/9ffb7258db5bc7b65ab36cec0358da75.', ''),
(49, '', 23, 'Makinenin kapağını kapatıp sucukların pişmesini bekleyelim.', 'Sonuç', '../fotograf/c21ddaaef4fe14dd5ad01a3ceef31c5c.', '', '../fotograf/fa5f83ea212f6b9917b75242fd3ec480.gif', 'Helal bee ! Can boğazdan gelirmiş ya kendine iyi bakıyorsun maşallah.Çok iyi öğrenmişsin afiyet olsun.'),
(50, '', 23, 'Üstüne peyniri de ekleyip kapatalım.', 'Yanlış', '../fotograf/119a52523156b905dc23edc52b2025ec.gif', 'Tostun %99''u bitmiş sayılır.Ama hala eksiklerin var ,hatalarını gözden geçir bakalım.', '../fotograf/94e2421d39020fb5e99c7156980bb510.', ''),
(51, '', 24, 'Önce ekmeği makinede ısıtalım.', 'Yanlış', '../fotograf/4dbf59d76474c326d27dbe58ab7324ce.gif', 'Sen ekmeği yağsız ısıtacaksan baştan salla tostu direkt yavan ekmek ye :)', '../fotograf/c01475e514f82f4bbc36e8bc44c2c2fa.', ''),
(52, '', 24, 'Peynirleri tost makinesinde pişirelim.', 'Yanlış', '../fotograf/e52052ccb530b226e495f7e3383513d0.gif', 'Peynir şu an konu bile değil.Yanlış cevap maalesef iyi düşünmeni tavsiye ederiz.', '../fotograf/d404efff540babb54ee94d0f60f65300.', ''),
(53, '', 24, 'Ekmeğe yağ sürelim.', 'Doğru', '../fotograf/ff6611db8425b48ae63f1aff48ae017c.', '', '../fotograf/ff6611db8425b48ae63f1aff48ae017c.', ''),
(54, '', 25, 'Ekmeği yağladıktan sonra makinede ısıtalım.', 'Doğru', '../fotograf/7d90beebf201490ada515b8442fe19a6.', '', '../fotograf/7d90beebf201490ada515b8442fe19a6.', ''),
(55, '', 25, 'Önce peynirleri makineye koyalım.', 'Yanlış', '../fotograf/d3422268719b2923b22e1b3e72a509bc.gif', 'Maalesef olmadı.Ekmeğin mikrop kapmaması için yağlandıktan sonra hemen ısıtman lazım.Bu arada peynirleri sonradan ilave edebilirsin.', '../fotograf/aad8f9881e50618cceeda81bc1b9988b.', ''),
(56, '', 26, 'Peyniri ekmeğe koy ve makinenin kapağını kapat.', 'Doğru', '../fotograf/3e8ee6a8e67f0c35fd903339b6c1a20c.', '', '../fotograf/3e8ee6a8e67f0c35fd903339b6c1a20c.', ''),
(57, '', 26, 'Az daha ısınsın.', 'Yanlış', '../fotograf/d94bc0e9fc9cda0a595e584566aac7e4.gif', 'Ekmek yandı.Bundan gayrı bu tost yenmez, yemeği telef ettin.', '../fotograf/f0274c8e3627839a743c9ef48afe1a2a.', ''),
(58, '', 27, 'Tamam,artık işimiz bitti ve tostumuz hazır.', 'Sonuç', '', '', '../fotograf/0bab3a53a8b183ea01906f18c2d05f14.gif', 'İşte bu kadar ! Senden çok iyi bir tostçu olabilir.Bence bu yeteneğini kullanıp bir dükkan açabilirsin.'),
(59, '', 27, 'Yok üzerine biraz daha yağ sürecem.', 'Yanlış', '../fotograf/fe6cf717bf5895ecf09dd8e2fe707d48.gif', 'Tam ne güzel karnımız doyacak tostu yiyeceğiz demiştik ki bu kadar yağ ile sen öbür tarafa uçuracaksın bizi.Bu tost sağlıksız oldu yani bizce hiç olmadı.', '../fotograf/d0e3fe46f02659e6b8edc0986896dc83.', ''),
(60, '../fotograf/1b0521045401e0063d3f6003ff9d3924.jpg', 28, 'Sebzeli', 'Doğru', '../fotograf/feee900994ef32af763385538c3ca221.jpg', '', '../fotograf/feee900994ef32af763385538c3ca221.', ''),
(61, '../fotograf/b587baefad79bf69d2516f718f4cb6ee.jpg', 28, 'Etli Yemekler', 'Doğru', '../fotograf/8aab1f7b8f6a74ffd6142520e356c206.', '', '../fotograf/8aab1f7b8f6a74ffd6142520e356c206.', ''),
(62, '../fotograf/a425c9e33edc2573ae91e52846c73792.jpg', 29, 'Yabancı Müzik', 'Doğru', '../fotograf/a0312d6b0f4fadc7a10b8e2aa119b469.', '', '../fotograf/a0312d6b0f4fadc7a10b8e2aa119b469.', ''),
(63, '../fotograf/380b8f3837fa9d664021cc0b8153dbe1.jpg', 29, 'Yerli Müzik', 'Doğru', '../fotograf/9b3f137e0144a4f28f28645d9cb869e1.', '', '../fotograf/9b3f137e0144a4f28f28645d9cb869e1.', ''),
(64, '', 30, '8 saatten az.', 'Doğru', '../fotograf/320c1c653fbe9a03fd3f644dc7529dc8.', '', '../fotograf/320c1c653fbe9a03fd3f644dc7529dc8.', ''),
(65, '', 30, '8 saatten fazla.', 'Doğru', '', '', '../fotograf/c4115f80cc4c45a6a52038751d65ade6.', ''),
(66, '../fotograf/8a8c441198d5735b73695c9d649b59ed.jpg', 31, 'Evet ,isterim.', 'Doğru', '', '', '../fotograf/cc320b830c40b8d6ced690d2be872c4c.', ''),
(67, '../fotograf/4c74c9a7254e16e9ca1b206d3d63f2d6.jpg', 31, 'Gereği yok,teşekkürler.', 'Doğru', '', '', '../fotograf/eb4708fc564f2be445f0bfc21b0f983f.', ''),
(68, '../fotograf/90961726914be60427174bc8930c1ba4.jpg', 32, 'Sağlık olsun,olmadı tek başıma yerim.', 'Doğru', '', '', '', ''),
(69, '../fotograf/88126c8473122a3045ee6b1923762e9b.jpg', 32, 'Gözüm kapalı ortalığı dağıtırım.', 'Doğru', '', '', '', ''),
(70, '../fotograf/12a54d200a84c8d2e946bd1d5c15a324.jpg', 33, 'Sakin bir köye gidip kafamı dinlemeyi.', 'Doğru', '', '', '', ''),
(71, '../fotograf/60c9625cfc806b9fb29ff9a433377fc6.jpg', 33, 'Para kazanmam lazım emeklilik bize göre değil.', 'Doğru', '', '', '', ''),
(72, '../fotograf/85893d63beebdc5a622e07074c8b1fdf.jpg', 34, 'Kendimi geliştirecek derecede okurum.', 'Doğru', '', '', '', ''),
(73, '../fotograf/a4e709bec187a0f09a543470ef0a6d80.jpg', 34, 'Kitap mı ? Neyden bahsediyorsun sen.', 'Doğru', '', '', '', ''),
(74, '../fotograf/b5807aeb0710b58e4c7c71e5f70fc476.jpg', 35, 'Bir hapşuruğun çok yaşattığı kadar.', 'Sonuç', '', '', '../fotograf/6cd970afb5882eebad13ae8c79d4dcd1.jpg', 'Sen son derece mütevazi,entellektüel bilgiler doğrultusunda yaşayan ve hayatını insanlara faydalı olabilmek uğruna adayan bir yaşlı olacaksın.'),
(75, '../fotograf/b817ccedcdb9ff44d2dd5e22ed5b22cd.jpg', 35, 'Şimdi ölsem farketmez.', 'Doğru', '', '', '', ''),
(78, '', 37, '8 saatten az.', 'Doğru', '', '', '', ''),
(79, '', 37, '8 saatten fazla.', 'Doğru', '', '', '', ''),
(80, '../fotograf/8a8c441198d5735b73695c9d649b59ed.jpg', 38, 'Evet ,isterim.', 'Doğru', '', '', '', ''),
(81, '../fotograf/4c74c9a7254e16e9ca1b206d3d63f2d6.jpg', 38, 'Gereği yok,teşekkürler.', 'Doğru', '', '', '', ''),
(82, '../fotograf/90961726914be60427174bc8930c1ba4.jpg', 39, 'Sağlık olsun,olmadı dışardan söyleriz.', 'Doğru', '', '', '', ''),
(83, '../fotograf/88126c8473122a3045ee6b1923762e9b.jpg', 39, 'Gözüm kapalı ortalığı dağıtırım.', 'Doğru', '', '', '', ''),
(84, '../fotograf/12a54d200a84c8d2e946bd1d5c15a324.jpg', 40, 'Sakin bir köye gidip kafamı dinlemeyi.', 'Doğru', '', '', '', ''),
(85, '../fotograf/60c9625cfc806b9fb29ff9a433377fc6.jpg', 40, 'Para kazanmam lazım emeklilik bize göre değil.', 'Doğru', '', '', '', ''),
(86, '../fotograf/85893d63beebdc5a622e07074c8b1fdf.jpg', 41, 'Kendimi geliştirecek derecede okurum.', 'Doğru', '', '', '', ''),
(87, '../fotograf/a4e709bec187a0f09a543470ef0a6d80.jpg', 41, 'Kitap mı ? Neyden bahsediyorsun sen.', 'Doğru', '', '', '', ''),
(88, '../fotograf/b5807aeb0710b58e4c7c71e5f70fc476.jpg', 42, 'Bir hapşırığın çok yaşattığı kadar.', 'Doğru', '', '', '', ''),
(89, '../fotograf/b817ccedcdb9ff44d2dd5e22ed5b22cd.jpg', 42, 'Şimdi ölsem farketmez.', 'Sonuç', '', '', '../fotograf/y4a123s970622d0fd9ede0006a6d110ea3.jpg', 'Anadolunun bu topraklarından yetişmiş,yetişirken de bütün kültürlerini peşine takmış huysuz ve aksi bir yaşlı olacaksın gibi duruyor.Bu kadar strestli bir hayatın içinde kendine kontrol edip aksi birisi değil de nazik ve kibar bir yaşlı olabilmeyi denemelisin !');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorular`
--

CREATE TABLE IF NOT EXISTS `sorular` (
`id` int(11) NOT NULL,
  `testID` int(11) NOT NULL,
  `cocukID` int(11) DEFAULT NULL,
  `fotograf` text NOT NULL,
  `soru` varchar(455) NOT NULL,
  `hataFotografi` text NOT NULL,
  `hataMesaji` text NOT NULL,
  `sonucFotografi` text NOT NULL,
  `sonucMesaji` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sorular`
--

INSERT INTO `sorular` (`id`, `testID`, `cocukID`, `fotograf`, `soru`, `hataFotografi`, `hataMesaji`, `sonucFotografi`, `sonucMesaji`) VALUES
(1, 1, 0, '../fotograf/63f9c58881bcbbf94da0f525a0cf26c2.gif', 'Şimdi ne yapmak istiyorsunuz ?', '', '', '', ''),
(2, 1, 1, '../fotograf/fd2eaaa54ccc8bfdf7ddefc046f4ebee.gif', 'Evin etrafını sardınız.', '', '', '', ''),
(3, 1, 2, '../fotograf/4e7704fbd74cfafbf002751965dc9a3b.gif', 'Hava tamamen karardı artık yorgunluk çökmeye başladı.', '', '', '', ''),
(4, 1, 3, '../fotograf/7076c78d660cfce9b9f743595ad691a3.gif', 'Sessizce yaklaşırken,arkadaşının ayağı takılınca yere düştü ve ses çıkardı.Artık çok geç, ateş etmeye başladılar !', '', '', '', ''),
(5, 1, 4, '../fotograf/d6210aa4e08ffd638d9e6a6b3e64163f.gif', 'Ateş ederek yaklaşıyorsunuz ama ev hasar görmeye başladı ve yıkılmak üzere.Ne yapmayı düşünüyorsun ?', '', '', '', ''),
(6, 1, 5, '../fotograf/ca385558afe6d549f40fbf876ba0f44a.gif', '7 kişiden ikisini öldürdünüz.Ama geriye kalanlar hâlâ tehlikeli.', '', '', '', ''),
(7, 1, 6, '../fotograf/88ed07ea96fcba204fe9a072b2c209b9.gif', 'RPG İle iyi salladın 7 muhafızdan altısı hayatını kaybetti lakin evin tavanı da çöktü.', '', '', '', ''),
(8, 1, 7, '../fotograf/2d523331097eafaeb9ff7e57843b05a4.gif', 'Maalesef arkadaşlarından dördünü vurdular.Artık 2 kişisiniz.', '', '', '', ''),
(9, 1, 8, '../fotograf/6db0fbf081be70aaf483798d70cf9fa3.gif', 'Taktiği başarıyla uyguladın ama sizden sadece sen ,onlardan ise iki kişi kaldı.Ne yapacaksın ?', '', '', '', ''),
(10, 1, 9, '../fotograf/9abeaa2edba215626e11f8d2276cfe50.jpg', 'Evin dibindesin adamların hepsi de öldü kimse kalmadı ne yapalım ?', '', '', '', ''),
(11, 1, 10, '../fotograf/20b030ffa134b4a0af5ac3414762bdd3.gif', 'İçeri girmeyi başardın ! Ne arzu edersiniz ?', '', '', '', ''),
(12, 1, 12, '../fotograf/a4e56abf9135071e8c923f47b473cddb.gif', 'Adamların hepsini öldürdünüz.Şimdi stratejik bir karar vermelisin.', '', '', '', ''),
(13, 1, 13, '../fotograf/4974e8be454d3b51652894649ccb8c50.gif', 'Ve son leşiniz de yerde masumca yatıyor.Ev çökmek üzere girmek istediğine emin misin ?', '', '', '', ''),
(14, 1, 15, '../fotograf/c497bbe9e5c61f2576fb52d9a0f7425f.gif', 'Siperden sürünerek eve geçtin.Karşında tek bir savaşçı kaldı.Kitabı alıp çıkacak kadar cesaretin var mı ?', '', '', '', ''),
(15, 1, 17, '../fotograf/8140d9e00d24fb6298243d516c1aa0c4.gif', 'Tüh ! Omzundan vuruldun ama şu an evin içindesin.', '', '', '', ''),
(16, 1, 18, '../fotograf/e9591637efc378408cc90f484ebc61ed.gif', 'Adamın birisi öldü,silahında mermi de bitti.Şu an karşı karşıyasınız.', '', '', '', ''),
(17, 1, 20, '../fotograf/142f46ef36ba189ba6be90fd39d18b46.gif', 'Cesetlerde tuzak yok.Giriş yolunuz da temizlendi ,önünüz açık.', '', '', '', ''),
(18, 2, 0, '../fotograf/427525b7ff604093cd4e26ae3b9455a8.gif', 'Sucuklu mu Sucuksuz mu ?', '', '', '', ''),
(19, 2, 36, '../fotograf/4066596d4e4fd0b9d5068de54dede43d.gif', 'Sucuklu tost için önce ne yapıyoruz ?', '', '', '', ''),
(20, 2, 40, '../fotograf/6ae396ab3a4981a2ba54425123a39f80.gif', 'Eveet sucukları kızarttık.Şimdi ne yapalım ?', '', '', '', ''),
(21, 2, 42, '../fotograf/9ee4a9d12b83a3c8b950a0fadd3dde50.gif', 'Karnımız iyice acıktı.Biraz daha hızlansak mı acaba ?', '', '', '', ''),
(22, 2, 45, '../fotograf/aef0c4ce8d713d61e1774b12677db164.gif', 'Her şey kıvamında.Bitirelim mi ?', '', '', '', ''),
(23, 2, 47, '../fotograf/cdaa98f46c4dcac38ca888cce4a9953a.gif', 'Ekmeği açıp,sucukları da içine attık.', '', '', '', ''),
(24, 2, 37, '../fotograf/ebbbea449db856c73d608e1cb021f267.gif', 'Madem tost sucuksuz olacak o halde nereden başlayalım ?', '', '', '', ''),
(25, 2, 53, '../fotograf/b4f784bee29dcdfe7ace461b111bcb8d.gif', 'Elimiz hep yağ oldu ama mecbur bu tost bitecek.', '', '', '', ''),
(26, 2, 54, '../fotograf/256a55966aa52ad7a2ab14ab22d5b39b.jpeg', 'Ekmek kuruyor dikkat et !', '', '', '', ''),
(27, 2, 56, '../fotograf/195ae2d0622d0fd9ede0006a6d110ea3.gif', 'Bitti gibi galiba ?', '', '', '', ''),
(28, 5, 0, '', 'Bir yemek yiyecek olsan hangisi olurdu ?', '', '', '', ''),
(29, 5, 60, '', 'En çok hangi tür müzik dinlersin ?', '', '', '', ''),
(30, 5, 62, '../fotograf/10kjtrd0622d0fd9ede0006a6d110ea3.jpg', 'Genelde kaç saat uyursun ?', '', '', '', ''),
(31, 5, 65, '', 'Torun sahibi olmak ister misin ?', '', '', '', ''),
(32, 5, 67, '', 'Eşin ile birlikte yemek yiyecektin ama sözünde durmadı,ne yaparsın ?', '', '', '', ''),
(33, 5, 68, '', 'Emekli olunca ne yapmayı düşünüyorsun ?', '', '', '', ''),
(34, 5, 70, '', 'Kitap okuma alışkanlığın nedir ?', '', '', '', ''),
(35, 5, 72, '', 'Son olarak kaç yaşına kadar yaşamayı düşünüyorsun ?', '', '', '', ''),
(37, 5, 63, '../fotograf/10kjtrd0622d0fd9ede0006a6d110ea3.jpg', 'Genelde kaç saat uyursun ?', '', '', '', ''),
(38, 5, 78, '', 'Torun sahibi olmak ister misin ?', '', '', '', ''),
(39, 5, 80, '', 'Eşin yemeği yetiştiremediğini söyledi,ne yaparsın ?', '', '', '', ''),
(40, 5, 83, '', 'Emekli olunca ne yapmayı düşünüyorsun ?', '', '', '', ''),
(41, 5, 85, '', 'Kitap okuma alışkanlığın nedir ?', '', '', '', ''),
(42, 5, 87, '', 'Son olarak kaç yaşına kadar yaşamayı düşünüyorsun ?', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `testler`
--

CREATE TABLE IF NOT EXISTS `testler` (
`id` int(11) NOT NULL,
  `fotograf` text NOT NULL,
  `baslik` varchar(255) CHARACTER SET utf8 NOT NULL,
  `aciklama` text CHARACTER SET utf8 NOT NULL,
  `okunma` int(15) NOT NULL,
  `tarih` varchar(25) NOT NULL,
  `ekleyen` varchar(55) NOT NULL,
  `onay` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `testler`
--

INSERT INTO `testler` (`id`, `fotograf`, `baslik`, `aciklama`, `okunma`, `tarih`, `ekleyen`, `onay`) VALUES
(1, '../fotograf/58d4c3cd3e61c172a946bbf219082a01.jpg', 'Macera : Özel bir görev için Ortadoğu''ya sınır ötesine gittiniz ama dönebilecek misiniz ?', 'Önemli bir kitabı ülkemize getirmek için sınırdışı görevi emri verildi.Kordinatları verilen harabe bir evin içinde bulunan ve savaşçılar tarafından muhahaza edilen bu kitabı getirmek için yola koyulup sizinle beraber 6 kişi ile ülke sınırları\r\ndışına çıktınız.Saatler ilerledikten sonra harabe evin şu an tam 50 metre kadar yakınına büyük bir titizlik ile yaklaştınız.', 302, '25-01-2017 05:25', 'mirac', 1),
(2, '../fotograf/36b0a0d040e2c5799ce9810c765bc734.jpg', 'Atıştırmalıkların vazgeçilmezi olan tostu yapabilir misin ?', 'Okullarda,öğle aralarında,iş yerlerinde günün her vakti yiyebileceğiniz mükemmel bir yiyecek olan ; tost.Peki ya siz de tost yapabilirim diyor musunuz ? Eğer bu kadar kendinizden eminseniz buyrun deneyin,mutfak sizin !', 173, '26-01-2017 19:59', 'mirac', 1),
(5, '../fotograf/121f309508105710f560f327f62da6bb.jpg', 'Yaşlandığında Nasıl Biri Olacaksın ?', 'Gün geçmiyorki insan yaşlılığına doğru bir gün daha geçirmesin.Hayat hepimizi aynı noktaya doğru sürüklüyor.Peki ya yaş kemale erince nasıl birisi olacağını hiç düşündün mü ? Soruları çöz ve sana ihtiyarladığında ortaya çıkacak karakterinden bahsedelim.', 325, '28-01-2017 18:14', 'mirac', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `isim` varchar(155) NOT NULL,
  `fotograf` text NOT NULL,
  `unvan` varchar(55) NOT NULL,
  `kadi` varchar(55) NOT NULL,
  `sifre` text NOT NULL,
  `rutbe` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `isim`, `fotograf`, `unvan`, `kadi`, `sifre`, `rutbe`) VALUES
(1, 'Deneme Editör', '../user/editor.jpg', 'Kurucu', 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `secenekler`
--
ALTER TABLE `secenekler`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sorular`
--
ALTER TABLE `sorular`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `testler`
--
ALTER TABLE `testler`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `secenekler`
--
ALTER TABLE `secenekler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- Tablo için AUTO_INCREMENT değeri `sorular`
--
ALTER TABLE `sorular`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- Tablo için AUTO_INCREMENT değeri `testler`
--
ALTER TABLE `testler`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
