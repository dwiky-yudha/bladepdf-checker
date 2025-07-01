<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>QRIS Posgram</title>

    <!-- Paged.js polyfill -->
    <script src="https://cdn.siap.id/s3/ASVRI/paged.polyfill.js"></script>

    <style>
        /* --- Konfigurasi halaman cetak --- */
        @page {
            size: A4;
            margin: 0 0 90px 0;

            @bottom-center {
                content: element(footer);
            }
        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
            font-size: 14px;
        }

        h1,
        h2 {
            color: #0866c2;
        }

        .page-break {
            break-after: page;
        }

        .header-qris-posgram {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 20px 32px;
            background-color: #8a2be226;
            /* background: linear-gradient(to-right, #8a2be2, #ff69b4); */
        }


        .banner-merchant {
            text-align: center;
            padding-top: 20px;
        }

        .kode-qris {
            text-align: center;
        }

        .cara-pembayaran-qris {
            padding: 0 32px;
        }

        .cara-pembayaran-qris table {
            background-color: #efefef65;
            border-radius: 16px;
        }

        .cara-pembayaran-qris table tr td {
            vertical-align: top;
            padding: 16px;
        }

        .footer-versioning {
            text-align: center;
            background-color: #efefef;
        }

        #footer {
            position: running(footer);
            padding: 16px 0;
        }

        .number {
            width: 1.6rem;
            height: 1.6rem;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #8a2be2;
            font-size: 10pt;
            color: white;
            border-radius: 3rem;
        }
    </style>
</head>

<body>

    <div class="header-qris-posgram">
        <img src="https://cdn.siap.id/s3/Posgram/Qris-long-logo.svg" alt="" style="height: 40px ;">
        <img src="https://cdn.siap.id/s3/Posgram/GPN-logo.svg" alt="" style="height: 40px;">
    </div>

    <div class="banner-merchant">
        <h1 style="color: #000; margin: 0; margin-bottom: 8px; margin-top: 16px;">POSGRAM</h1>
        <p style="line-height: 1.5; margin: 0; margin-bottom: 12px; font-size: 16px;">NMID : ID12345678901234 <br> PG1</p>
    </div>

    <div class="kode-qris">
        <img src="https://cdn.siap.id/s3/Kementerian/asset%20img/tanda%20tangan/qrcode.png" alt="qris-merchant"
            style="width: 320px;">
        <h4 style="margin: 0; margin-top: 8px; font-weight: 400;">SATU QRIS UNTUK SEMUA</h4>
    </div>

    <div class="cara-pembayaran-qris" style="margin-top: 32px;">
        <h3 style="text-align: center; font-weight: 400;">Cara Menggunakan Pembayaran QRIS</h3>
        <table width="100%">
            <tr>
                <td width="33%">
                    <div
                        style="display: flex; flex-direction: row; justify-content: left; align-items: center; column-gap: 8px;">
                        <div class="number">
                            1
                        </div>
                        <p style="font-weight: 600; margin: 0;">Siapkan Aplikasi Digital</p>
                    </div>
                    <p style="margin: 0; margin-top: 8px; line-height: 1.5;">
                        Buka aplikasi mobile banking, e-wallet, atau platform pembayaran digital yang mendukung QRIS di smartphone Anda.</p>
                </td>
            </tr>
            <tr>
                <td width="33%">
                    <div
                        style="display: flex; flex-direction: row; justify-content: left; align-items: center; column-gap: 8px;">
                        <div class="number">
                            2
                        </div>
                        <p style="font-weight: 600; margin: 0;">Scan QR Code</p>
                    </div>
                    <p style="margin: 0; margin-top: 8px; line-height: 1.5;">
                        Pilih menu scan, bayar, atau transfer pada aplikasi, lalu arahkan kamera smartphone ke QR Code
                        di atas dengan jarak yang tepat dan pencahayaan yang cukup hingga kode terdeteksi secara
                        otomatis.
                    </p>
                </td>
            </tr>
            <tr>
                <td width="33%">
                    <div style="display: flex; flex-direction: row; justify-content: left; align-items: center; column-gap: 8px;">
                        <div class="number">
                            3
                        </div>
                        <p style="font-weight: 600; margin: 0;">Input Nominal & Konfirmasi</p>
                    </div>
                    <p style="margin: 0; margin-top: 8px; line-height: 1.5;">
                        Pastikan jumlah pembayaran dan detail transaksi sudah sesuai. Setelah itu, masukkan PIN atau kata sandi untuk
                        melanjutkan dan selesaikan proses.
                    </p>
                </td>
            </tr>
        </table>
    </div>

    <div id="footer" class="footer-versioning">
        <p>Dicetak oleh: { Kode NNS } | Versi Cetak: QRIS v1.0
            <br>
            28 September 2029 <a href="www.aspi-qris.id"
                style="text-decoration: none; color: #0000ff;">www.aspi-qris.id</a>
        </p>
    </div>





    <!-- Tambahkan konten lainnya sesuai kebutuhan -->

    <script>
        // Menunggu sampai semua halaman selesai dirender
        pagedPolyfill.on("rendered", () => {
            alert("Halaman sudah siap dicetak. Silakan tekan Ctrl + P.");
        });
    </script>
    <!-- Code injected by live-server -->
    <script>
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function() {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function(msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        } else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>
    </script>
</body>

</html>