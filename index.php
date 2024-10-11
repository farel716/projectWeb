<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>

* {
    color: white;
    margin: 0;
    padding: 0;
    outline: none;
    box-sizing: border-box;
    border: none;
    font-family: sans-serif;
    text-decoration: none;
    list-style: none;
}

html {
    background-color: rgb(0, 0, 44);

}

.about {
    height: 160vh;
}

#About {
    position: relative;
    bottom: 120px;
}

.kotak-luar-about {
    width: 1100px;
    height: calc(120vh + 50px);
    border-radius: 30px;
    text-align: center;
    cursor: pointer;
    margin: 0 auto;
    margin-top: 80px;
    box-shadow: 0 0 10px rgba(0, 0, 255, 0.205);
}

.kotak-about .gambar .geser{
    position: relative;
    top: 20px;
}

.kotak-about:nth-child(2) {
    margin-bottom: 50px;
}

.kotak-luar-about::-webkit-scrollbar {
    display: none;
}

.judul-about h1 {
    text-align: center;
    font-size: 2.8rem;
    font-weight: 800;
    text-shadow: 0 0 50px blue;
}

.judul-about h1 span {
    color: rgb(91, 176, 255);
}

.about .kotak-about {
    padding: 30px 30px;
    display: flex;
    justify-content: space-between;
}

.about .kotak-about .gambar img {
    width: 200px;
}

.about .kotak-about .gambar img {
    border-radius: 50%;
    box-shadow: 0 0 20px blue;
}

.about .kotak-about .judul-dalam-about h2 {
    font-size: 1.6rem;
    font-weight: 900;
    margin: 0 25px 20px 0;
    color: skyblue;
    text-shadow: 0 0 20px blue;
}

.about .kotak-about .kata-about p {
    width: 780px;
}

    </style>
</head>
<body>
    
    <br><br><br>
    <div class="about">
        <div class="judul-about">
            <h1><span>About</span> Me</h1>
        </div>
        <div class="kotak-aboutt">
        <div class="kotak-luar-about">
        <div class="kotak-about">
            <div class="gambar">
                <img src="./Gambar/Muka Gw-1.jpg" alt="">
            </div>
            <div class="hahi">
                <div class="judul-dalam-about">
                    <h2>Tentang Saya</h2>
                </div>
            <div class="kata-about">
                <p>Halo semuanya nama saya Farel Nur Akbar. Saya lahir di tanggal 17 Maret 2008. Saya merupakan anak ketiga dari tiga bersaudara.  Saya orang nya rajin tidur dan sedikit pemalas tetapi walaupun saya sedikit pemalas saya suka mempelajari hal-hal baru yang berbau digital. Cita cita saya menjadi orang yang bermanfaat bagi nusa, bangsa, dan agama.</p>
                </div>
            </div>
        </div>
        <div class="kotak-about">
            <div class="hahi">
                <div class="judul-dalam-about">
                    <h2>Hobi Saya</h2>
                </div>
            <div class="kata-about">
                <p>Hobi saya yang pertama adalah bermain game, kenapa bermain game karena bermain game adalah hal yang asik tidak membosankan juga bisa menengkan pikiran. saya sendiri suka beemain game mobile legend <br><br>
                Hobi saya yang kedua adalah tidur Mengapa tidur bukanya tidur adalah kebutuhan, karena menurut saya tidur adalah kenikmatan yang hakiki karna semisal orang tidur itu akan melupakan segalanya yang ada didunia. jadi walaupun saya tidak mengantuk dan asalkan saya tidak ada hal yang harus dilakukan saya lebih memilih untuk tidur</p>
                </div>
            </div>
            <div class="gambar">
                <img class="geser" src="./Gambar/Muka Gw-1.jpg" alt="">
            </div>
        </div>
        <div class="kotak-about">
            <div class="gambar">
                <img src="./Gambar/Muka Gw-1.jpg" alt="">
            </div>
            <div class="hahi">
                <div class="judul-dalam-about">
                    <h2>Kebiasaan Saya</h2>
                </div>
            <div class="kata-about">
                <p>Kebiasaan saya sebagai manusia tentunya makan, minum, maen, dan belajar. saya biasa nya belajar di sekolah tetapi kalo di rumah saya jarang belajar hanya mengerjakan kewajiban saya sebagai anak seperti membantu orang tua dan lain lain</p>
            </div>
            </div>
        </div>
        </div>
        </div>
        </div>

</body>
</html>