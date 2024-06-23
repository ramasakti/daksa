const hero = document.getElementById('hero')
const home = document.getElementById('Home')

    const Multimedia = `
    <section id="explore1">
        <img class="img3" src="Multimedia.png" />
        <div class="text-multi">
            <h1>MULTIMEDIA</h1>
            <p>Multimedia adalah salah satu sarana media komunikasi dan informasi pada komputer yang mengkombinasikan
                antara grafik, teks, animasi, audio, dan video.</p>
            <button type="button" class="button3"><a href="Daksa_Login.php">be a creator</a></button>
        </div>
    </section>`
    const Writing = `
    <section id="explore2">
        <div class="text-write">
            <h1>WRITING</h1>
            <p>Writing adalah proses menggambarkan suatu bahasa sehingga pesan yang disampaikan penulis dapat di pahami
                pembaca.</p>
            <button type="button" class="button5"><a href="Daksa_Login.php">be a creator</a></button>
        </div>
        <img class="img4" src="Writing.png" />
    </section>`
    const Programming = `
    <section id="explore3">
        <img class="img5" src="Programming.png" />
        <div class="text-program">
            <h1>PROGRAMMING</h1>
            <p>Programming adalah suatu proses atau kegiatan menulis dan menguji (pemrograman) agar program dapat
                dibuat, dan hasilnya sesuai apa yang diinginkan.</p>
            <button type="button" class="button7"><a href="Daksa_Login.php">be a creator</a></button>
        </div>
    </section>`
    const Gaming = `
    <section id="explore4">
        <div class="text-game">
            <h1>GAMING</h1>
            <p>Game adalah sebuah software aplikasi perangkat lunak yang bertujuan untuk menghibur. Biasanya game banyak
                disukai oleh anak anak hingga orang dewasa.</p>
            <button type="button" class="button9"><a href="Daksa_Login.php">be a creator</a></button>
        </div>
        <img class="img6" src="Gaming.png" />
    </section>`
    const Marketing = `
    <section id="explore5">
        <img class="img7" src="Marketing.png" />
        <div class="text-market">
            <h1>MARKETING</h1>
            <p>Marketing adalah upaya untuk memperkenalkan produk kepada pelanggan yang dilakukan dengan beberapa
                aktivitas mulai dari promosi, distribusi, penjualan hingga strategi pengembangan produk.</p>
            <button type="button" class="button11"><a href="Daksa_Login.php">be a creator</a></button>
        </div>
    </section>`

    const param = window.location.href.slice(window.location.href.indexOf('?') + 1).split('=')[1]
    if (param) {
        home.remove()
        switch (param) {
            case 'Multimedia':
                hero.innerHTML = Multimedia
                break;
            case 'Writing':
                hero.innerHTML = Writing
                break;
            case 'Programming':
                hero.innerHTML = Programming
                break;
            case 'Gaming':
                hero.innerHTML = Gaming
                break;
            case 'Marketing':
                hero.innerHTML = Marketing
                break;
        }
    }    