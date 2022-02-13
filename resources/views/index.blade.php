<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colgate 101 Live</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}css/style.css" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <section class="form d-flex align-items-center justify-content-center flex-column">
        <div class="container">
            <div class="content d-flex justify-content-center align-items-center flex-column">
                <img src="{{asset('/')}}img/colgateHeader.png" class="img-fluid" alt="Colgate">
                <div class="form-wrapper">
                    <form method="post" action="{{route('colgate.create')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" required>
                            <label for="name" class="form-label">İsim Soy İsim(*)</label>
                        </div>

                        <div class="form-group">
                            <input type="text" name="email" class="form-control" id="email" required>
                            <label for="email" class="form-label">E-posta(*)</label>
                        </div>

                        <div class="form-group">
                            <input type="text"  name="tel" class="form-control" id="tel" required>
                            <label for="tel" class="form-label">Telefon(*)</label>
                        </div>

                        <div class="form-group">
                            <select class="form-select" name="university" required>
                                <option value="">Üniversite(*)</option>
                                <option>Abdullah Gül Üniversitesi</option>

                                <option>Acıbadem Üniversitesi</option>

                                <option>Adana Bilim ve Teknoloji Üniversitesi</option>

                                <option>Adıyaman Üniversitesi</option>

                                <option>Afyonkarahisar Sağlık Bilimleri Üniversitesi</option>

                                <option>Afyon Kocatepe Üniversitesi</option>

                                <option>Ağrı İbrahim Çeçen Üniversitesi</option>

                                <option>Akdeniz Üniversitesi</option>

                                <option>Aksaray Üniversitesi</option>

                                <option>Alanya Alaaddin Keykubat Üniversitesi</option>

                                <option>Alanya Hamdullah Emin Paşa Üniversitesi</option>

                                <option>Amasya Üniversitesi</option>

                                <option>Anadolu Üniversitesi</option>

                                <option>Ankara Güzel Sanatlar Üniversitesi</option>

                                <option>Ankara Hacı Bayram Veli Üniversitesi</option>

                                <option>Ankara Medipol Üniversitesi</option>

                                <option>Ankara Sosyal Bilimler Üniversitesi</option>

                                <option>Ankara Üniversitesi</option>

                                <option>Ankara Yıldırım Beyazıt Üniversitesi</option>

                                <option>Anka Teknoloji Üniversitesi</option>

                                <option>Antalya Akev Üniversitesi</option>

                                <option>Antalya Bilim Üniversitesi</option>

                                <option>Ardahan Üniversitesi</option>

                                <option>Artvin Çoruh Üniversitesi</option>

                                <option>Ataşehir Adıgüzel Meslek Yüksekokulu</option>

                                <option>Atatürk Üniversitesi</option>

                                <option>Atılım Üniversitesi</option>

                                <option>Avrasya Üniversitesi</option>

                                <option>Avrupa Meslek Yüksekokulu</option>

                                <option>Aydın Adnan Menderes Üniversitesi</option>

                                <option>Bahçeşehir Üniversitesi</option>

                                <option>Balıkesir Üniversitesi</option>

                                <option>Bandırma Onyedi Eylül Üniversitesi</option>

                                <option>Bartın Üniversitesi</option>

                                <option>Başkent Üniversitesi</option>

                                <option>Batman Üniversitesi</option>

                                <option>Bayburt Üniversitesi</option>

                                <option>Beykent Üniversitesi</option>

                                <option>Beykoz Lojistik Meslek Yüksekokulu</option>

                                <option>Bezmialem Vakıf Üniversitesi</option>

                                <option>Bilecik Şeyh Edebali Üniversitesi</option>

                                <option>Bingöl Üniversitesi</option>

                                <option>Biruni Üniversitesi</option>

                                <option>Bitlis Eren Üniversitesi</option>

                                <option>Boğaziçi Üniversitesi</option>

                                <option>Bolu Abant İzzet Baysal Üniversitesi</option>

                                <option>Burdur Mehmet Akif Ersoy Üniversitesi</option>

                                <option>Bursa Teknik Üniversitesi</option>

                                <option>Bursa Uludağ Üniversitesi</option>

                                <option>Çağ Üniversitesi</option>

                                <option>Çanakkale Onsekiz Mart Üniversitesi</option>

                                <option>Çankaya Üniversitesi</option>

                                <option>Çankırı Karatekin Üniversitesi</option>

                                <option>Çukurova Üniversitesi</option>

                                <option>Dicle Üniversitesi</option>

                                <option>Diğer</option>

                                <option>Doğuş Üniversitesi</option>

                                <option>Dokuz Eylül Üniversitesi</option>

                                <option>Düzce Üniversitesi</option>

                                <option>Ege Üniversitesi</option>

                                <option>Erciyes Üniversitesi</option>

                                <option>Erzincan Binali Yıldırım Üniversitesi</option>

                                <option>Erzurum Teknik Üniversitesi</option>

                                <option>Eskişehir Osmangazi Üniversitesi</option>

                                <option>Eskişehir Teknik Üniversitesi</option>

                                <option>Faruk Saraç Tasarım Meslek Yüksekokulu</option>

                                <option>Fatih Sultan Mehmet Üniversitesi</option>

                                <option>Fırat Üniversitesi</option>

                                <option>Galatasaray Üniversitesi</option>

                                <option>Gaziantep Bilim ve Teknoloji Üniversitesi</option>

                                <option>Gaziantep Üniversitesi</option>

                                <option>Gazi Üniversitesi</option>

                                <option>Gebze Teknik Üniversitesi</option>

                                <option>Gedik Üniversitesi</option>

                                <option>Giresun Üniversitesi</option>

                                <option>Girne Amerikan Üniversitesi</option>

                                <option>Gümüşhane Üniversitesi</option>

                                <option>Hacettepe Üniversitesi</option>

                                <option>Hakkari Üniversitesi</option>

                                <option>Haliç Üniversitesi</option>

                                <option>Harran Üniversitesi</option>

                                <option>Hasan Kalyoncu Üniversitesi</option>

                                <option>Hatay Mustafa Kemal Üniversitesi</option>

                                <option>Hitit Üniversitesi</option>

                                <option>İbn Haldun Üniversitesi</option>

                                <option>Iğdır Üniversitesi</option>

                                <option>İhsan Doğramacı Bilkent Üniversitesi</option>

                                <option>İnönü Üniversitesi</option>

                                <option>Işık Üniversitesi</option>

                                <option>İskenderun Teknik Üniversitesi</option>

                                <option>Isparta Uygulamalı Bilimler Üniversitesi</option>

                                <option>İstanbul 29 Mayıs Üniversitesi</option>

                                <option>İstanbul Altınbaş Üniversitesi</option>

                                <option>İstanbul Arel Üniversitesi</option>

                                <option>İstanbul Atlas Üniversitesi</option>

                                <option>İstanbul Aydın Üniversitesi</option>

                                <option>İstanbul Ayvansaray Üniversitesi</option>

                                <option>İstanbul Beykoz Üniversitesi</option>

                                <option>İstanbul Bilgi Üniversitesi</option>

                                <option>İstanbul Bilim Üniversitesi</option>

                                <option>İstanbul Esenyurt Üniversitesi</option>

                                <option>İstanbul Gedik Üniversitesi</option>

                                <option>İstanbul Gelişim Üniversitesi</option>

                                <option>İstanbul Kavram Meslek Yüksekokulu</option>

                                <option>İstanbul Kent Üniversitesi</option>

                                <option>İstanbul Kültür Üniversitesi</option>

                                <option>İstanbul Medeniyet Üniversitesi</option>

                                <option>İstanbul Medipol Üniversitesi</option>

                                <option>İstanbul Okan Üniversitesi</option>

                                <option>İstanbul Okan Üniversitesi</option>

                                <option>İstanbul Rumeli Üniversitesi</option>

                                <option>İstanbul Sabahattin Zaim Üniversitesi</option>

                                <option>İstanbul Şehir Üniversitesi</option>

                                <option>İstanbul Şişli Meslek Yüksekokulu</option>

                                <option>İstanbul Teknik Üniversitesi</option>

                                <option>İstanbul Ticaret Üniversitesi</option>

                                <option>İstanbul Üniversitesi</option>

                                <option>İstanbul Üniversitesi Cerrahpaşa</option>

                                <option>İstinye Üniversitesi</option>

                                <option>İzmir Bakırçay Üniversitesi</option>

                                <option>İzmir Demokrasi Üniversitesi</option>

                                <option>İzmir Ekonomi Üniversitesi</option>

                                <option>İzmir Kâtip Çelebi Üniversitesi</option>

                                <option>İzmir Tınaztepe Üniversitesi</option>

                                <option>İzmir Yüksek Teknoloji Enstitüsü</option>

                                <option>Kadir Has Üniversitesi</option>

                                <option>Kafkas Üniversitesi</option>

                                <option>Kahramanmaraş İstiklal Üniversitesi</option>

                                <option>Kahramanmaraş Sütçü İmam Üniversitesi</option>

                                <option>Kapadokya Üniversitesi</option>

                                <option>Karabük Üniversitesi</option>

                                <option>Karadeniz Teknik Üniversitesi</option>

                                <option>Karamanoğlu Mehmetbey Üniversitesi</option>

                                <option>Kastamonu Üniversitesi</option>

                                <option>Kayseri Üniversitesi</option>

                                <option>Kilis 7 Aralık Üniversitesi</option>

                                <option>Kırıkkale Üniversitesi</option>

                                <option>Kırklareli Üniversitesi</option>

                                <option>Kırşehir Ahi Evran Üniversitesi</option>

                                <option>Kocaeli Üniversitesi</option>

                                <option>Koç Üniversitesi</option>

                                <option>Konya Gıda ve Tarım Üniversitesi</option>

                                <option>Konya Teknik Üniversitesi</option>

                                <option>KTO Karatay Üniversitesi</option>

                                <option>Kütahya Dumlupınar Üniversitesi</option>

                                <option>Kütahya Sağlık Bilimleri Üniversitesi</option>

                                <option>Lokman Hekim Üniversitesi</option>

                                <option>Malatya Turgut Özal Üniversitesi</option>

                                <option>Maltepe Üniversitesi</option>

                                <option>Manisa Celal Bayar Üniversitesi</option>

                                <option>Mardin Artuklu Üniversitesi</option>

                                <option>Marmara Üniversitesi</option>

                                <option>MEF Üniversitesi</option>

                                <option>Mersin Üniversitesi</option>

                                <option>Millî Savunma Üniversitesi&nbsp;(Askeri)</option>

                                <option>Mimar Sinan Güzel Sanatlar Üniversitesi</option>

                                <option>Muğla Sıtkı Koçman Üniversitesi</option>

                                <option>Munzur Üniversitesi</option>

                                <option>Muş Alparslan Üniversitesi</option>

                                <option>Necmettin Erbakan Üniversitesi</option>

                                <option>Nevşehir Hacı Bektaş Veli Üniversitesi</option>

                                <option>Niğde Ömer Halisdemir Üniversitesi</option>

                                <option>Nişantaşı Üniversitesi</option>

                                <option>Nuh Naci Yazgan Üniversitesi</option>

                                <option>Ondokuz Mayıs Üniversitesi</option>

                                <option>Ordu Üniversitesi</option>

                                <option>Orta Doğu Teknik Üniversitesi</option>

                                <option>Osmaniye Korkut Ata Üniversitesi</option>

                                <option>Ostim Teknik Üniversitesi</option>

                                <option>Özyeğin Üniversitesi</option>

                                <option>Pamukkale Üniversitesi</option>

                                <option>Piri Reis Üniversitesi</option>

                                <option>Plato Meslek Yüksekokulu</option>

                                <option>Polis Akademisi</option>

                                <option>Recep Tayyip Erdoğan Üniversitesi</option>

                                <option>Sabancı Üniversitesi</option>

                                <option>Sağlık Bilimleri Üniversitesi</option>

                                <option>Sakarya Üniversitesi</option>

                                <option>Sakarya Uygulamalı Bilimler Üniversitesi</option>

                                <option>Samsun Üniversitesi</option>

                                <option>Sanko Üniversitesi</option>

                                <option>Selçuk Üniversitesi</option>

                                <option>Semerkand Bilim ve Medeniyet Üniversitesi</option>

                                <option>Siirt Üniversitesi</option>

                                <option>Sinop Üniversitesi</option>

                                <option>Şırnak Üniversitesi</option>

                                <option>Sivas Bilim ve Teknoloji Üniversitesi</option>

                                <option>Sivas Cumhuriyet Üniversitesi</option>

                                <option>Süleyman Demirel Üniversitesi</option>

                                <option>Tarsus Üniversitesi</option>

                                <option>TED Üniversitesi</option>

                                <option>Tekirdağ Namık Kemal Üniversitesi</option>

                                <option>TOBB Ekonomi ve Teknoloji Üniversitesi</option>

                                <option>Tokat Gaziosmanpaşa Üniversitesi</option>

                                <option>Toros Üniversitesi</option>

                                <option>Trabzon Üniversitesi</option>

                                <option>Trakya Üniversitesi</option>

                                <option>Türk-Alman Üniversitesi</option>

                                <option>Türk Hava Kurumu Üniversitesi</option>

                                <option>Türkiye Uluslararası İslam, Bilim ve Teknoloji Üniversitesi</option>

                                <option>Ufuk Üniversitesi</option>

                                <option>Uşak Üniversitesi</option>

                                <option>Üsküdar Üniversitesi</option>

                                <option>Van Yüzüncü Yıl Üniversitesi</option>

                                <option>Yalova Üniversitesi</option>

                                <option>Yaşar Üniversitesi</option>

                                <option>Yeditepe Üniversitesi</option>

                                <option>Yeni Yüzyıl Üniversitesi</option>

                                <option>Yıldız Teknik Üniversitesi</option>

                                <option>Yozgat Bozok Üniversitesi</option>

                                <option>Yüksek İhtisas Üniversitesi</option>

                                <option>Zonguldak Bülent Ecevit Üniversitesi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-select" name="faculty" required>
                                <option value="">Bölüm(*)</option>
                                <option>Acil Yardım Ve Afet Yönetimi (Fakülte)</option>

                                <option>Acil Yardım Ve Afet Yönetimi (Yüksekokul)</option>

                                <option>Adli Bilimler</option>

                                <option>Adli Bilişim Mühendisliği</option>

                                <option>Adli Bilişim Mühendisliği (M.T.O.K.)</option>

                                <option>Ağaç İşleri Endüstri Mühendisliği</option>

                                <option>Aile Ve Tüketici Bilimleri</option>

                                <option>Aktüerya (Fakülte)</option>

                                <option>Aktüerya (Yüksekokul)</option>

                                <option>Aktüerya Bilimleri</option>

                                <option>Aktüerya Ve Risk Yönetimi</option>

                                <option>Alman Dili Ve Edebiyatı</option>

                                <option>Almanca Öğretmenliği</option>

                                <option>Amerikan Kültürü Ve Edebiyatı</option>

                                <option>Animasyon Ve Oyun Tasarımı</option>

                                <option>Antrenörlük Eğitimi (Fakülte)</option>

                                <option>Antrenörlük Eğitimi (Yüksekokul)</option>

                                <option>Antropoloji</option>

                                <option>Arap Dili Ve Edebiyatı</option>

                                <option>Arapça Öğretmenliği</option>

                                <option>Arkeoloji</option>

                                <option>Arkeoloji Ve Sanat Tarihi</option>

                                <option>Arnavut Dili Ve Edebiyatı</option>

                                <option>Astronomi Ve Uzay Bilimleri</option>

                                <option>Avrupa Birliği İlişkileri</option>

                                <option>Azerbaycan Dili Öğretmenliği</option>

                                <option>Azerbaycan Dili Ve Edebiyatı</option>

                                <option>Azerbaycan Dili Ve Edebiyatı Öğretmenliği</option>

                                <option>Azerbaycan Türkçesi Ve Edebiyatı</option>

                                <option>Bahçe Bitkileri</option>

                                <option>Bahçe Bitkileri Üretimi Ve Pazarlaması</option>

                                <option>Bahçe Ve Tarla Bitkileri</option>

                                <option>Balıkçılık Teknolojisi (Fakülte)</option>

                                <option>Balıkçılık Teknolojisi (Yüksekokul)</option>

                                <option>Balıkçılık Teknolojisi Mühendisliği</option>

                                <option>Bankacılık (Yüksekokul)</option>

                                <option>Bankacılık Ve Finans (Fakülte)</option>

                                <option>Bankacılık Ve Finans (Yüksekokul)</option>

                                <option>Bankacılık Ve Finansman (Yüksekokul)</option>

                                <option>Bankacılık Ve Sigortacılık (Fakülte)</option>

                                <option>Bankacılık Ve Sigortacılık (Yüksekokul)</option>

                                <option>Basım Teknolojileri (Yüksekokul)</option>

                                <option>Basım Yayın Ve Redakte</option>

                                <option>Basın Ve Yayın</option>

                                <option>Batı Dilleri</option>

                                <option>Beden Eğitimi Ve Spor Öğretmenliği</option>

                                <option>Beslenme Ve Diyetetik (Fakülte)</option>

                                <option>Beslenme Ve Diyetetik (Yüksekokul)</option>

                                <option>Bilgi Ve Belge Yönetimi</option>

                                <option>Bilgisayar Bilimleri</option>

                                <option>Bilgisayar Mühendisliği</option>

                                <option>Bilgisayar Mühendisliği (M.T.O.K.)</option>

                                <option>Bilgisayar Teknolojisi Ve Bilişim Sistemleri (Yüksekokul)</option>

                                <option>Bilgisayar Ve Öğretim Teknolojileri Öğretmenliği</option>

                                <option>Bilgisayar Ve Yazılım Mühendisliği</option>

                                <option>Bilgisayar-Enformatik</option>

                                <option>Bilim Tarihi</option>

                                <option>Bilişim Sistemleri Mühendisliği</option>

                                <option>Bilişim Sistemleri Mühendisliği (M.T.O.K.)</option>

                                <option>Bilişim Sistemleri Ve Teknolojileri (Fakülte)</option>

                                <option>Bitki Koruma</option>

                                <option>Bitkisel Üretim Ve Teknolojileri</option>

                                <option>Biyoenformatik Ve Genetik</option>

                                <option>Biyokimya</option>

                                <option>Biyoloji</option>

                                <option>Biyoloji Öğretmenliği</option>

                                <option>Biyomedikal Mühendisliği</option>

                                <option>Biyomedikal Mühendisliği (M.T.O.K.)</option>

                                <option>Biyomühendislik</option>

                                <option>Biyosistem Mühendisliği</option>

                                <option>Biyoteknoloji</option>

                                <option>Biyoteknoloji Ve Moleküler Biyoloji</option>

                                <option>Boşnak Dili Ve Edebiyatı</option>

                                <option>Bulgar Dili Ve Edebiyatı</option>

                                <option>Çağdaş Türk Lehçeleri Ve Edebiyatları</option>

                                <option>Çağdaş Yunan Dili Ve Edebiyatı</option>

                                <option>Çalışma Ekonomisi Ve Endüstri İlişkileri</option>

                                <option>Çalışma Ekonomisi Ve Endüstri İlişkileri (Açıköğretim)</option>

                                <option>Canlandırma Filmi Tasarım Ve Yönetimi</option>

                                <option>Çerkez Dili Ve Edebiyatı</option>

                                <option>Cevher Hazırlama Mühendisliği</option>

                                <option>Çeviribilim</option>

                                <option>Çevre Mühendisliği</option>

                                <option>Çin Dili Ve Edebiyatı</option>

                                <option>Çizgi Film Ve Animasyon</option>

                                <option>Çocuk Gelişimi (Fakülte)</option>

                                <option>Çocuk Gelişimi (Yüksekokul)</option>

                                <option>Coğrafya</option>

                                <option>Coğrafya (Açıköğretim)</option>

                                <option>Coğrafya Öğretmenliği</option>

                                <option>Deniz İşletmeciliği Ve Yönetimi</option>

                                <option>Deniz Ulaştırma İşletme Mühendisliği (Fakülte)</option>

                                <option>Deniz Ulaştırma İşletme Mühendisliği (Yüksekokul)</option>

                                <option>Denizcilik İşletmeleri Yönetimi (Fakülte)</option>

                                <option>Deri Mühendisliği</option>

                                <option>Dijital Oyun Tasarımı (Fakülte)</option>

                                <option>Dijital Oyun Tasarımı (Yüksekokul)</option>

                                <option>Dil Ve Konuşma Terapisi</option>

                                <option>Dilbilim</option>

                                <option>Dilbilimi</option>

                                <option>Diş Hekimliği</option>

                                <option>Doğu Dilleri</option>

                                <option>Ebelik (Fakülte)</option>

                                <option>Ebelik (Yüksekokul)</option>

                                <option>Eczacılık</option>

                                <option>Ekonometri</option>

                                <option>Ekonomi</option>

                                <option>Ekonomi Ve Finans</option>

                                <option>El Sanatları (M.T.O.K.)</option>

                                <option>El Sanatları Tasarımı Ve Üretimi</option>

                                <option>Elektrik Mühendisliği</option>

                                <option>Elektrik-Elektronik Mühendisliği</option>

                                <option>Elektrik-Elektronik Mühendisliği (M.T.O.K.)</option>

                                <option>Elektronik Mühendisliği</option>

                                <option>Elektronik Ticaret Ve Teknoloji Yönetimi</option>

                                <option>Elektronik Ve Haberleşme Mühendisliği</option>

                                <option>Endüstri Mühendisliği</option>

                                <option>Endüstri Mühendisliği Programları</option>

                                <option>Endüstri Tasarımı</option>

                                <option>Endüstri Ürünleri Tasarımı (Fakülte)</option>

                                <option>Endüstri Ürünleri Tasarımı (Yüksekokul)</option>

                                <option>Endüstri Ve Sistem Mühendisliği</option>

                                <option>Endüstriyel Tasarım</option>

                                <option>Endüstriyel Tasarım Mühendisliği</option>

                                <option>Endüstriyel Tasarım Mühendisliği (M.T.O.K.)</option>

                                <option>Enerji Mühendisliği</option>

                                <option>Enerji Sistemleri Mühendisliği</option>

                                <option>Enerji Sistemleri Mühendisliği (M.T.O.K.)</option>

                                <option>Enerji Ve Malzeme Mühendisliği</option>

                                <option>Enerji Yönetimi</option>

                                <option>Ergoterapi (Fakülte)</option>

                                <option>Ergoterapi (Yüksekokul)</option>

                                <option>Ermeni Dili Ve Edebiyatı</option>

                                <option>Eşit Ağırlıklı Programlar</option>

                                <option>Eski Yunan Dili Ve Edebiyatı</option>

                                <option>Fars Dili Ve Edebiyatı</option>

                                <option>Felsefe</option>

                                <option>Felsefe (Açıköğretim)</option>

                                <option>Felsefe Grubu Öğretmenliği</option>

                                <option>Fen Bilgisi Öğretmenliği</option>

                                <option>Film Tasarım Ve Yazarlık</option>

                                <option>Film Tasarım Ve Yönetmenliği</option>

                                <option>Film Tasarımı</option>

                                <option>Finans Ve Bankacılık (Fakülte)</option>

                                <option>Finansal Ekonometri</option>

                                <option>Fizik</option>

                                <option>Fizik Mühendisliği</option>

                                <option>Fizik Öğretmenliği</option>

                                <option>Fizyoterapi Ve Rehabilitasyon (Fakülte)</option>

                                <option>Fizyoterapi Ve Rehabilitasyon (Yüksekokul)</option>

                                <option>Fotoğraf</option>

                                <option>Fotoğraf Ve Video</option>

                                <option>Fransız Dili Ve Edebiyatı</option>

                                <option>Fransızca Öğretmenliği</option>

                                <option>Gastronomi (Fakülte)</option>

                                <option>Gastronomi (Yüksekokul)</option>

                                <option>Gastronomi Ve Mutfak Sanatları</option>

                                <option>Gastronomi Ve Mutfak Sanatları (Fakülte)</option>

                                <option>Gastronomi Ve Mutfak Sanatları (M.T.O.K.)</option>

                                <option>Gastronomi Ve Mutfak Sanatları (Yüksekokul)</option>

                                <option>Gayrimenkul Geliştirme Ve Yönetimi (Fakülte)</option>

                                <option>Gayrimenkul Geliştirme Ve Yönetimi (Yüksekokul)</option>

                                <option>Gayrimenkul Ve Varlık Değerleme (Fakülte)</option>

                                <option>Gayrimenkul Ve Varlık Değerleme (Yüksekokul)</option>

                                <option>Gazetecilik</option>

                                <option>Gazetecilik Ve Kitle İletişim</option>

                                <option>Geleneksel Türk Sanatları (M.T.O.K.)</option>

                                <option>Gemi İnşaatı Ve Gemi Makineleri Mühendisliği</option>

                                <option>Gemi Makineleri İşletme Mühendisliği (Fakülte)</option>

                                <option>Gemi Makineleri İşletme Mühendisliği (Yüksekokul)</option>

                                <option>Gemi Ve Deniz Teknolojisi Mühendisliği</option>

                                <option>Gemi Ve Yat Tasarımı</option>

                                <option>Genetik Ve Biyomühendislik</option>

                                <option>Genetik Ve Yaşam Bilimleri Programları</option>

                                <option>Geomatik Mühendisliği</option>

                                <option>Gerontoloji</option>

                                <option>Gıda Mühendisliği</option>

                                <option>Gıda Teknolojisi (Yüksekokul)</option>

                                <option>Girişimcilik</option>

                                <option>Görsel İletişim</option>

                                <option>Görsel İletişim Tasarımı</option>

                                <option>Görsel Sanatlar</option>

                                <option>Görsel Sanatlar (M.T.O.K.)</option>

                                <option>Görsel Sanatlar Ve Görsel İletişim Tasarımı</option>

                                <option>Görsel Sanatlar Ve İletişim Tasarımı</option>

                                <option>Görsel Sanatlar Ve Medya</option>

                                <option>Grafik Tasarım</option>

                                <option>Grafik Tasarımı</option>

                                <option>Grafik Tasarımı (M.T.O.K.)</option>

                                <option>Gümrük İşletme (Yüksekokul)</option>

                                <option>Gürcü Dili Ve Edebiyatı</option>

                                <option>Güverte (Yüksekokul)</option>

                                <option>Halkbilim</option>

                                <option>Halkla İlişkiler</option>

                                <option>Halkla İlişkiler Ve Reklamcılık (Açıköğretim)</option>

                                <option>Halkla İlişkiler Ve Reklamcılık (Fakülte)</option>

                                <option>Halkla İlişkiler Ve Reklamcılık (Yüksekokul)</option>

                                <option>Halkla İlişkiler Ve Tanıtım</option>

                                <option>Halkla İlişkiler Ve Tanıtım (Açıköğretim)</option>

                                <option>Harita Mühendisliği</option>

                                <option>Hava Trafik Kontrol</option>

                                <option>Havacılık Elektrik Ve Elektroniği (Fakülte)</option>

                                <option>Havacılık Elektrik Ve Elektroniği (Yüksekokul)</option>

                                <option>Havacılık Ve Uzay Mühendisliği</option>

                                <option>Havacılık Yönetimi (Açıköğretim)</option>

                                <option>Havacılık Yönetimi (Fakülte)</option>

                                <option>Havacılık Yönetimi (Yüksekokul)</option>

                                <option>Hayvansal Üretim (Yüksekokul)</option>

                                <option>Hayvansal Üretim Ve Teknolojileri</option>

                                <option>Hemşirelik (Fakülte)</option>

                                <option>Hemşirelik (Yüksekokul)</option>

                                <option>Hemşirelik Ve Sağlık Hizmetleri (Fakülte)</option>

                                <option>Hemşirelik Ve Sağlık Hizmetleri (Yüksekokul)</option>

                                <option>Hidrojeoloji Mühendisliği</option>

                                <option>Hindoloji</option>

                                <option>Hititoloji</option>

                                <option>Hukuk</option>

                                <option>Hungaroloji</option>

                                <option>İbrani Dili Ve Edebiyatı</option>

                                <option>İç Mimarlık</option>

                                <option>İç Mimarlık Ve Çevre Tasarımı</option>

                                <option>İktisadi Ve İdari Bilimler Programları</option>

                                <option>İktisadi Ve İdari Programları</option>

                                <option>İktisat</option>

                                <option>İktisat (Açıköğretim)</option>

                                <option>İlahiyat</option>

                                <option>İletişim</option>

                                <option>İletişim Bilimleri</option>

                                <option>İletişim Sanatları</option>

                                <option>İletişim Tasarımı</option>

                                <option>İletişim Tasarımı Ve Medya</option>

                                <option>İletişim Tasarımı Ve Yönetimi</option>

                                <option>İletişim Ve Tasarım</option>

                                <option>İlköğretim Matematik Öğretmenliği</option>

                                <option>İmalat Mühendisliği</option>

                                <option>İmalat Mühendisliği (M.T.O.K.)</option>

                                <option>İngiliz Dil Bilimi</option>

                                <option>İngiliz Dili Ve Edebiyatı</option>

                                <option>İngiliz Dili Ve Karşılaştırmalı Edebiyat</option>

                                <option>İngiliz Ve Rus Dilleri Ve Edebiyatları</option>

                                <option>İngilizce Öğretmenliği</option>

                                <option>İnşaat Mühendisliği</option>

                                <option>İnşaat Mühendisliği (M.T.O.K.)</option>

                                <option>İnsan Kaynakları Yönetimi (Fakülte)</option>

                                <option>İnsan Kaynakları Yönetimi (Yüksekokul)</option>

                                <option>İnsan Ve Toplum Bilimleri</option>

                                <option>İş Sağlığı Ve Güvenliği (Fakülte)</option>

                                <option>İş Sağlığı Ve Güvenliği (Yüksekokul)</option>

                                <option>İslam Bilimleri</option>

                                <option>İslam Ekonomisi Ve Finans</option>

                                <option>İslam Ve Din Bilimleri</option>

                                <option>İslami İlimler</option>

                                <option>İşletme</option>

                                <option>İşletme (Açıköğretim)</option>

                                <option>İşletme Bilgi Yönetimi (Yüksekokul)</option>

                                <option>İşletme Enformatiği</option>

                                <option>İşletme Mühendisliği</option>

                                <option>İşletme Yönetimi</option>

                                <option>İşletme-Ekonomi</option>

                                <option>İspanyol Dili Ve Edebiyatı</option>

                                <option>İstatistik</option>

                                <option>İstatistik Ve Bilgisayar Bilimleri</option>

                                <option>İtalyan Dili Ve Edebiyatı</option>

                                <option>Japon Dili Ve Edebiyatı</option>

                                <option>Japonca Öğretmenliği</option>

                                <option>Jeofizik Mühendisliği</option>

                                <option>Jeoloji Mühendisliği</option>

                                <option>Kamu Yönetimi</option>

                                <option>Kamu Yönetimi (Açıköğretim)</option>

                                <option>Kanatlı Hayvan Yetiştiriciliği</option>

                                <option>Karşılaştırmalı Edebiyat</option>

                                <option>Kazak Dili Ve Edebiyatı</option>

                                <option>Kentsel Tasarım Ve Peyzaj Mimarisi</option>

                                <option>Kentsel Tasarım Ve Peyzaj Mimarlığı</option>

                                <option>Kimya</option>

                                <option>Kimya Mühendisliği</option>

                                <option>Kimya Mühendisliği Ve Uygulamalı Kimya</option>

                                <option>Kimya Öğretmenliği</option>

                                <option>Kimya Ve Süreç Mühendisliği</option>

                                <option>Kimya-Biyoloji Mühendisliği</option>

                                <option>Klasik Arkeoloji</option>

                                <option>Konaklama İşletmeciliği (Fakülte)</option>

                                <option>Konaklama İşletmeciliği (Fakülte) (Açıköğretim)</option>

                                <option>Konaklama İşletmeciliği (Yüksekokul)</option>

                                <option>Konaklama Ve Turizm İşletmeciliği (Yüksekokul)</option>

                                <option>Kontrol Ve Otomasyon Mühendisliği</option>

                                <option>Kore Dili Ve Edebiyatı</option>

                                <option>Kültür Varlıklarını Koruma Ve Onarım</option>

                                <option>Kültür Ve İletişim Bilimleri</option>

                                <option>Küresel Siyaset Ve Uluslararası İlişkiler</option>

                                <option>Kurgu-Ses Ve Görüntü Yönetimi</option>

                                <option>Kürt Dili Ve Edebiyatı</option>

                                <option>Kuyumculuk Ve Mücevher Tasarımı</option>

                                <option>Kuyumculuk Ve Mücevher Tasarımı (M.T.O.K.)</option>

                                <option>Kuyumculuk Ve Mücevher Tasarımı (M.T.O.K.)</option>

                                <option>Latin Dili Ve Edebiyatı</option>

                                <option>Leh Dili Ve Edebiyatı</option>

                                <option>Lif Ve Polimer Mühendisliği</option>

                                <option>Lojistik (Yüksekokul)</option>

                                <option>Lojistik Ve Taşımacılık (Yüksekokul)</option>

                                <option>Lojistik Yönetimi (Fakülte)</option>

                                <option>Lojistik Yönetimi (Yüksekokul)</option>

                                <option>Maden Mühendisliği</option>

                                <option>Makine Mühendisliği</option>

                                <option>Makine Mühendisliği (M.T.O.K.)</option>

                                <option>Makine Ve İmalat Mühendisliği</option>

                                <option>Makine Ve İmalat Mühendisliği (M.T.O.K.)</option>

                                <option>Maliye</option>

                                <option>Maliye (Açıköğretim)</option>

                                <option>Malzeme Bilimi Ve Mühendisliği</option>

                                <option>Malzeme Bilimi Ve Nanoteknoloji Mühendisliği</option>

                                <option>Malzeme Bilimi Ve Teknolojileri</option>

                                <option>Malzeme Mühendisliği</option>

                                <option>Matematik</option>

                                <option>Matematik Mühendisliği</option>

                                <option>Matematik Öğretmenliği</option>

                                <option>Matematik Ve Bilgisayar Bilimleri</option>

                                <option>Matematik-Bilgisayar</option>

                                <option>Medya Ve Görsel Sanatlar</option>

                                <option>Medya Ve İletişim</option>

                                <option>Medya Ve İletişim Sistemleri (Fakülte)</option>

                                <option>Medya Ve İletişim Sistemleri (Yüksekokul)</option>

                                <option>Mekatronik Mühendisliği</option>

                                <option>Mekatronik Mühendisliği (M.T.O.K.)</option>

                                <option>Mekatronik Sistemler Mühendisliği</option>

                                <option>Metalurji Ve Malzeme Mühendisliği</option>

                                <option>Metalurji Ve Malzeme Mühendisliği (M.T.O.K.)</option>

                                <option>Meteoroloji Mühendisliği</option>

                                <option>Mimarlık</option>

                                <option>Moda Tasarımı (Fakülte)</option>

                                <option>Moda Tasarımı (M.T.O.K.)</option>

                                <option>Moda Tasarımı (Yüksekokul)</option>

                                <option>Moda Ve Tekstil Tasarımı</option>

                                <option>Moleküler Biyoloji Ve Genetik</option>

                                <option>Moleküler Biyoteknoloji</option>

                                <option>Muhasebe (Yüksekokul)</option>

                                <option>Muhasebe Bilgi Sistemleri (Yüksekokul)</option>

                                <option>Muhasebe Ve Denetim (Fakülte)</option>

                                <option>Muhasebe Ve Denetim (Yüksekokul)</option>

                                <option>Muhasebe Ve Finans Yönetimi (Fakülte)</option>

                                <option>Muhasebe Ve Finans Yönetimi (Yüksekokul)</option>

                                <option>Muhasebe Ve Finansal Yönetim (Fakülte)</option>

                                <option>Muhasebe Ve Finansal Yönetim (Yüksekokul)</option>

                                <option>Mühendislik Programları</option>

                                <option>Mühendislik Ve Doğa Bilimleri Programları</option>

                                <option>Mütercim-Tercümanlık(Dil-1)</option>

                                <option>Mütercim-Tercümanlık(Dil-2)</option>

                                <option>Mütercim-Tercümanlık(Dil-3)</option>

                                <option>Müzecilik</option>

                                <option>Müzikoloji</option>

                                <option>Nanobilim Ve Nanoteknoloji</option>

                                <option>Nanoteknoloji Mühendisliği</option>

                                <option>Nükleer Enerji Mühendisliği</option>

                                <option>Odyoloji (Fakülte)</option>

                                <option>Odyoloji (Yüksekokul)</option>

                                <option>Öğretmenlik Programları</option>

                                <option>Okul Öncesi Öğretmenliği</option>

                                <option>Optik Ve Akustik Mühendisliği</option>

                                <option>Organik Tarım İşletmeciliği (Yüksekokul)</option>

                                <option>Orman Endüstrisi Mühendisliği</option>

                                <option>Orman Mühendisliği</option>

                                <option>Ortez-Protez (Fakülte)</option>

                                <option>Ortez-Protez (Yüksekokul)</option>

                                <option>Otel Yöneticiliği (Yüksekokul)</option>

                                <option>Otomotiv Mühendisliği</option>

                                <option>Otomotiv Mühendisliği (M.T.O.K.)</option>

                                <option>Özel Eğitim Öğretmenliği</option>

                                <option>Pazarlama (Fakülte)</option>

                                <option>Pazarlama (Yüksekokul)</option>

                                <option>Perfüzyon (Fakülte)</option>

                                <option>Perfüzyon (Yüksekokul)</option>

                                <option>Petrol Ve Doğalgaz Mühendisliği</option>

                                <option>Peyzaj Mimarlığı</option>

                                <option>Pilot Eğitimi</option>

                                <option>Pilotaj</option>

                                <option>Polimer Mühendisliği</option>

                                <option>Polonya Dili Ve Kültürü</option>

                                <option>Protohistorya Ve Ön Asya Arkeolojisi</option>

                                <option>Psikoloji</option>

                                <option>Psikolojik Danışmanlık Ve Rehberlik</option>

                                <option>Psikolojik Danışmanlık Ve Rehberlik Öğretmenliği</option>

                                <option>Radyo Ve Televizyon</option>

                                <option>Radyo, Televizyon Ve Sinema</option>

                                <option>Raylı Sistemler Mühendisliği</option>

                                <option>Rehberlik Ve Psikolojik Danışmanlık</option>

                                <option>Reklam Tasarımı Ve İletişimi</option>

                                <option>Reklamcılık</option>

                                <option>Reklamcılık Ve Halkla İlişkiler</option>

                                <option>Rekreasyon (Fakülte)</option>

                                <option>Rekreasyon (Yüksekokul)</option>

                                <option>Rekreasyon Yönetimi (Fakülte)</option>

                                <option>Rekreasyon Yönetimi (M.T.O.K.)</option>

                                <option>Rekreasyon Yönetimi (Yüksekokul)</option>

                                <option>Restorasyon Ve Konservasyon</option>

                                <option>Rus Dili Öğretmenliği</option>

                                <option>Rus Dili Ve Edebiyatı</option>

                                <option>Rus Dili Ve Edebiyatı Öğretmenliği</option>

                                <option>Rus Ve İngiliz Dilleri Ve Edebiyatı</option>

                                <option>Sağlık İdaresi</option>

                                <option>Sağlık Yönetimi (Açıköğretim)</option>

                                <option>Sağlık Yönetimi (Fakülte)</option>

                                <option>Sağlık Yönetimi (Yüksekokul)</option>

                                <option>Sanat Tarihi</option>

                                <option>Sanat Ve Kültür Yönetimi</option>

                                <option>Sanat Ve Sosyal Bilimler Programları</option>

                                <option>Sanat Yönetimi</option>

                                <option>Şehir Ve Bölge Planlama</option>

                                <option>Sermaye Piyasaları Ve Portföy Yönetimi (Fakülte)</option>

                                <option>Sermaye Piyasaları Ve Portföy Yönetimi (Yüksekokul)</option>

                                <option>Sermaye Piyasası (Yüksekokul)</option>

                                <option>Seyahat İşletmeciliği (Fakülte)</option>

                                <option>Seyahat İşletmeciliği (Yüksekokul)</option>

                                <option>Seyahat İşletmeciliği Ve Turizm Rehberliği (Fakülte)</option>

                                <option>Seyahat İşletmeciliği Ve Turizm Rehberliği (M.T.O.K.)</option>

                                <option>Sigortacılık (Yüksekokul)</option>

                                <option>Sigortacılık Ve Aktüerya Bilimleri (Fakülte)</option>

                                <option>Sigortacılık Ve Risk Yönetimi (Fakülte)</option>

                                <option>Sigortacılık Ve Risk Yönetimi (Yüksekokul)</option>

                                <option>Sigortacılık Ve Sosyal Güvenlik</option>

                                <option>Sinema Ve Dijital Medya</option>

                                <option>Sinema Ve Televizyon</option>

                                <option>Sınıf Öğretmenliği</option>

                                <option>Sinoloji</option>

                                <option>Siyasal Bilimler</option>

                                <option>Siyaset Bilimi</option>

                                <option>Siyaset Bilimi Ve Kamu Yönetimi</option>

                                <option>Siyaset Bilimi Ve Uluslararası İlişkiler</option>

                                <option>Sosyal Bilgiler Öğretmenliği</option>

                                <option>Sosyal Hizmet (Açıköğretim)</option>

                                <option>Sosyal Hizmet (Fakülte)</option>

                                <option>Sosyal Hizmet (Fakülte) (Açıköğretim)</option>

                                <option>Sosyal Hizmet (Yüksekokul)</option>

                                <option>Sosyal Ve Siyasal Bilimler</option>

                                <option>Sosyoloji</option>

                                <option>Sosyoloji (Açıköğretim)</option>

                                <option>Spor Yöneticiliği (Fakülte)</option>

                                <option>Spor Yöneticiliği (Yüksekokul)</option>

                                <option>Su Bilimleri Mühendisliği</option>

                                <option>Su Ürünleri Mühendisliği</option>

                                <option>Sümeroloji</option>

                                <option>Süryani Dili Ve Edebiyatı</option>

                                <option>Süt Teknolojisi</option>

                                <option>Takı Tasarımı (Fakülte)</option>

                                <option>Tapu Kadastro (Yüksekokul)</option>

                                <option>Tarih</option>

                                <option>Tarih (Açıköğretim)</option>

                                <option>Tarih Öğretmenliği</option>

                                <option>Tarih Öncesi Arkeolojisi</option>

                                <option>Tarım Ekonomisi</option>

                                <option>Tarım Makineleri Ve Teknolojileri Mühendisliği</option>

                                <option>Tarımsal Biyoteknoloji</option>

                                <option>Tarımsal Genetik Mühendisliği</option>

                                <option>Tarımsal Yapılar Ve Sulama</option>

                                <option>Tarla Bitkileri</option>

                                <option>Taşınabilir Kültür Varlıklarını Koruma Ve Onarım</option>

                                <option>Teknoloji Ve Bilgi Yönetimi</option>

                                <option>Tekstil Mühendisliği</option>

                                <option>Tekstil Tasarımı (M.T.O.K.)</option>

                                <option>Tekstil Ve Moda Tasarımı</option>

                                <option>Televizyon Haberciliği Ve Programcılığı (Fakülte)</option>

                                <option>Televizyon Haberciliği Ve Programcılığı (Yüksekokul)</option>

                                <option>Tıp</option>

                                <option>Tıp Mühendisliği</option>

                                <option>Tiyatro Eleştirmenliği Ve Dramaturji (Fakülte)</option>

                                <option>Toprak Bilimi Ve Bitki Besleme</option>

                                <option>Turizm İşletmeciliği (Fakülte)</option>

                                <option>Turizm İşletmeciliği (M.T.O.K.)</option>

                                <option>Turizm İşletmeciliği (Yüksekokul)</option>

                                <option>Turizm İşletmeciliği Ve Otelcilik (Yüksekokul)</option>

                                <option>Turizm Rehberliği</option>

                                <option>Turizm Ve Otel İşletmeciliği (Fakülte)</option>

                                <option>Turizm Ve Otel İşletmeciliği (Yüksekokul)</option>

                                <option>Turizm Ve Otel Yöneticiliği</option>

                                <option>Turizm Ve Otelcilik (Fakülte)</option>

                                <option>Turizm Ve Otelcilik (Yüksekokul)</option>

                                <option>Türk Dili Ve Edebiyatı</option>

                                <option>Türk Dili Ve Edebiyatı (Açıköğretim)</option>

                                <option>Türk Dili Ve Edebiyatı Öğretmenliği</option>

                                <option>Türk Halkbilimi</option>

                                <option>Türk İslam Arkeolojisi</option>

                                <option>Türkçe Öğretmenliği</option>

                                <option>Türkoloji</option>

                                <option>Tütün Eksperliği (Yüksekokul)</option>

                                <option>Uçak Elektrik-Elektronik (Fakülte)</option>

                                <option>Uçak Elektrik-Elektronik (Yüksekokul)</option>

                                <option>Uçak Gövde-Motor (Fakülte)</option>

                                <option>Uçak Gövde-Motor (Yüksekokul)</option>

                                <option>Uçak Gövde-Motor Bakım (Fakülte)</option>

                                <option>Uçak Gövde-Motor Bakım (Yüksekokul)</option>

                                <option>Uçak Mühendisliği</option>

                                <option>Uçak Ve Uzay Mühendisliği</option>

                                <option>Ukrayna Dili Ve Edebiyatı</option>

                                <option>Ulaştırma Mühendisliği</option>

                                <option>Ulaştırma Ve Lojistik (Fakülte)</option>

                                <option>Ulaştırma Ve Lojistik (Yüksekokul)</option>

                                <option>Ulaştırma Ve Lojistik Yönetimi (Fakülte)</option>

                                <option>Ulaştırma Ve Lojistik Yönetimi (Yüksekokul)</option>

                                <option>Uluslararası Ekonomik İlişkiler</option>

                                <option>Uluslararası Finans (Fakülte)</option>

                                <option>Uluslararası Finans (Yüksekokul)</option>

                                <option>Uluslararası Finans Ve Bankacılık (Fakülte)</option>

                                <option>Uluslararası Finans Ve Bankacılık (Yüksekokul)</option>

                                <option>Uluslararası Girişimcilik</option>

                                <option>Uluslararası İlişkiler</option>

                                <option>Uluslararası İlişkiler (Açıköğretim)</option>

                                <option>Uluslararası İşletme</option>

                                <option>Uluslararası İşletme Yönetimi</option>

                                <option>Uluslararası İşletmecilik</option>

                                <option>Uluslararası İşletmecilik Ve Ticaret (Fakülte)</option>

                                <option>Uluslararası İşletmecilik Ve Ticaret (Yüksekokul)</option>

                                <option>Uluslararası Lojistik (Fakülte)</option>

                                <option>Uluslararası Lojistik (Yüksekokul)</option>

                                <option>Uluslararası Lojistik Ve Taşımacılık (Fakülte)</option>

                                <option>Uluslararası Lojistik Ve Taşımacılık (Yüksekokul)</option>

                                <option>Uluslararası Lojistik Yönetimi</option>

                                <option>Uluslararası Perakende Yönetimi (Yüksekokul)</option>

                                <option>Uluslararası Ticaret (Fakülte)</option>

                                <option>Uluslararası Ticaret (Yüksekokul)</option>

                                <option>Uluslararası Ticaret Ve Finans</option>

                                <option>Uluslararası Ticaret Ve Finansman</option>

                                <option>Uluslararası Ticaret Ve İşletmecilik (Yüksekokul)</option>

                                <option>Uluslararası Ticaret Ve İşletmecilik (Fakülte)</option>

                                <option>Uluslararası Ticaret Ve Lojistik (Fakülte)</option>

                                <option>Uluslararası Ticaret Ve Lojistik (Yüksekokul)</option>

                                <option>Uluslararası Ticaret Ve Lojistik Yönetimi (Açıköğretim)</option>

                                <option>Uluslararası Ticaret Ve Lojistik Yönetimi (Fakülte)</option>

                                <option>Uluslararası Ticaret Ve Lojistik Yönetimi (Yüksekokul)</option>

                                <option>Uluslararası Ticaret, Lojistik Ve İşletmecilik (Yüksekokul)</option>

                                <option>Urdu Dili Ve Edebiyatı</option>

                                <option>Uzay Bilimleri Ve Teknolojileri</option>

                                <option>Uzay Mühendisliği</option>

                                <option>Veterinerlik</option>

                                <option>Yaban Hayatı Ekolojisi Ve Yönetimi</option>

                                <option>Yazılım Mühendisliği</option>

                                <option>Yazılım Mühendisliği (M.T.O.K.)</option>

                                <option>Yeni Medya (Fakülte)</option>

                                <option>Yeni Medya (Yüksekokul)</option>

                                <option>Yeni Medya Ve Gazetecilik</option>

                                <option>Yeni Medya Ve İletişim</option>

                                <option>Yeni Medya Ve İletişim Sistemleri</option>

                                <option>Yer Bilimleri Mühendisliği Programları</option>

                                <option>Yerel Yönetimler</option>

                                <option>Yiyecek-İçecek İşletmeciliği (Fakülte)</option>

                                <option>Yiyecek-İçecek İşletmeciliği (Yüksekokul)</option>

                                <option>Yönetim Bilimleri Programları</option>

                                <option>Yönetim Bilişim Sistemleri (Açıköğretim)</option>

                                <option>Yönetim Bilişim Sistemleri (Fakülte)</option>

                                <option>Yönetim Bilişim Sistemleri (Yüksekokul)</option>

                                <option>Yunan Dili Ve Edebiyatı</option>

                                <option>Zaza Dili Ve Edebiyatı</option>

                                <option>Ziraat Mühendisliği Programları</option>

                                <option>Kimya Teknolojisi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-select" name="class" required>
                                <option value="">Sınıf(*)</option>
                                <option>Hazırlık</option>
                                <option>1.Sınıf</option>
                                <option>2.Sınıf</option>
                                <option>3.Sınıf</option>
                                <option>4.Sınıf</option>
                                <option>Mezun</option>
                                <option>Yüksek Lisans Hazırlık</option>
                                <option>Yüksek Lisans 1. Sınıf</option>
                                <option>Yüksek Lisans 2. Sınıf </option>
                            </select>
                        </div>

                        <div class="kvkk-wrapper flex flex-column align-items-center justify-content-start" style="position:relative">
                            <input type="checkbox" name="kvkk" id="kvkk" required>
                            <label class="form-check-label" for="kvkk">
                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">KVKK Metnini</a> okudum, anladım.
                            </label>
                        </div>

                        <div class="button-group">
                            <button type="submit" class="btn btn-primary">Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">KVKK</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        6698 Sayılı Kişisel Verilerin Korunması kanunu kapsamında etkinliğe katılımım amacıyla paylaştığım
                        ismim, soyadım, telefonum ve kişisel verilerimin etkinlik kapsamına uygun olarak hususlara muvafakat
                        ettiğimi kabul, beyan ve taahhüt ederim.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Tamam</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('sweetalert::alert')

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js'></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('/')}}js/script.js"></script>
  
    <script>
        $("#tel").inputmask({"mask": "(999) 999-9999"});
    </script>
    

</body>

</html>