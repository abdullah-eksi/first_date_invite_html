<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benimle Dışarı Çıkar Mısın</title>
    <link rel="stylesheet" href="main.css?v=4">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Sayfa 1: Ana Sayfa -->
    <div id="page1" class="page active">
        <h1>Benimle dışarı çıkar mısın? 🤍</h1>
        <div class="buttons">
            <button id="yes" onclick="showPage('page2')">Evet, Çıkabilirim! 😊</button>
            <button id="no">Hayır, Çıkamam 😢</button>
        </div>
    </div>

    <!-- Sayfa 2: Aktivite Seçimi -->
    <div id="page2" class="page">
        <h1>Birlikte Ne Yapalım? 💖</h1>
        <div class="activities">
            <div class="activity" onclick="selectActivity('İtalyan Restoranı')">
                <img src="https://static.independent.co.uk/2024/04/25/16/iStock-1414575281.jpg" alt="İtalyan Restoranı">
                <p>İtalyan Restoranı</p>
            </div>
            <div class="activity" onclick="selectActivity('Türk Döneri')">
                <img src="https://idsb.tmgrup.com.tr/ly/uploads/images/2020/09/03/55626.jpg" alt="Türk Döneri">
                <p>Türkish Döner Yemek</p>
            </div>
            <div class="activity" onclick="selectActivity('Sahilde Yürümek')">
                <img src="https://www.karasu.bel.tr/kurumlar/karasu.bel.tr/Karasu-Kesfet/Fotograf-Galerisi/Karasu-Sahil/DSC_0753.jpg" alt="Sahilde Yürümek">
                <p>Sahilde Yürümek</p>
            </div>
            <div class="activity" onclick="selectActivity('Sinema')">
                <img src="https://filmsiniflandirma.ktb.gov.tr/repo/Photos/e8040a0a-084f-401e-a12e-a5a9f264a99b.jpg" alt="Sinema">
                <p>Sinema</p>
            </div>
            <div class="activity" onclick="selectActivity('Çay İçmek')">
                <img src="https://www.popeyes.com.tr/cmsfiles/products/cay.png?v=305" alt="Çay İçmek">
                <p>Çay İçmek</p>
            </div>
            <div class="activity" onclick="selectActivity('Kahve İçmek')">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQH9tzHHIitYbN7xJ4VJJd8QihDb8I0nNPQXg&s" alt="Kahve İçmek">
                <p>Kahve İçmek</p>
            </div>
        </div>
    </div>

    <!-- Sayfa 3: Tarih Seçimi -->
    <div id="page3" class="page">
        <h1>Birlikte Ne Zaman Buluşalım? 📅</h1>
        <div class="dates">
            <div class="date-option" onclick="selectDate('Herhangi Bir Tarih')">Herhangi Bir Tarih</div>
            <?php
            $today = new DateTime(); // Bugünün tarihi
            $maxDays = 6; // Maksimum 6 gün listelenecek

            for ($i = 0; $i < $maxDays; $i++) {
                $date = (clone $today)->add(new DateInterval("P{$i}D")); // Tarihi artır
                $formattedDate = $date->format('d F'); // Tarihi '13 Şubat' gibi formatla
                $formattedDate = str_replace(
                    ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'],
                    $formattedDate
                );

                echo "<div class='date-option' onclick=\"selectDate('{$formattedDate}')\">{$formattedDate}</div>";
            }
            ?>
        </div>
    </div>

   <!-- Sayfa 4: Saat Seçimi -->
<div id="page4" class="page">
    <h1>Hangi Saatte Buluşalım? ⏰</h1>
    <div class="times">
        <div class="time-option" onclick="selectTime('10:00')">10:00</div>
        <div class="time-option" onclick="selectTime('12:00')">12:00</div>
        <div class="time-option" onclick="selectTime('14:00')">14:00</div>
        <div class="time-option" onclick="selectTime('16:00')">16:00</div>
        <div class="time-option" onclick="selectTime('18:00')">18:00</div>
        <div class="time-option" onclick="selectTime('20:00')">20:00</div>
    </div>
</div>

<!-- Sayfa 5: Final Sayfası -->
<div id="page5" class="page">
    <h1>Harika! 🎉</h1>
    <p>Buluşma detayların başarıyla seçildi!</p>
    <div class="summary">
        <p><strong>Aktivite:</strong> <span id="chosenActivity"></span></p>
        <p><strong>Tarih:</strong> <span id="chosenDate"></span></p>
        <p><strong>Saat:</strong> <span id="chosenTime"></span></p>
    </div>
    <button class="whatsapp-button" onclick="sendWhatsApp()">WhatsApp ile Gönder</button>
</div>

    <!-- Sayfa 6: Üzgün Sayfa -->
    <div id="page6" class="page">
        <h1>💔 Sağlık Olsun</h1>
        <p>Belki bir dahaki sefere...</p>
        <button onclick="showPage('page1')">Geri Dön</button>
    </div>

    <script src="main.js"></script>
</body>

</html>