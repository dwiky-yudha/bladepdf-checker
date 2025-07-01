<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>QRIS Posgram</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            font-size: 14px;
        }

        .section {
            padding: 16px 32px;
        }

        table {
            width: 100%;
            border-spacing: 0;
            background-color: #efefef65;
            border-radius: 16px;
            padding: 20px 16px;
        }

        td {
            vertical-align: top;
            padding: 8px;
        }

        .footer {
            text-align: center;
            font-size: 10px;
            color: gray;
            margin-top: 32px;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <table width="100%" style="background-color: #f0e6ff; padding: 16px;">
        <tr>
            <td width="50%">
                <div style="display: block; width: 100%;">
                    <img src="{{ public_path('images/qris-logo.png') }}" alt="QRIS Logo" style="height: 40px;">
                </div>
            </td>
            <td width="50%" align="right">
                <div style="display: block; width: 100%;">
                    <img src="{{ public_path('images/gpn-logo.png') }}" alt="GPN Logo" style="height: 40px;">
                </div>
            </td>
        </tr>
    </table>

    <!-- Banner -->
    <div class="section" style="text-align: center;">
        <h1 style="color: #000;">POSGRAM</h1>
        <p style="font-size: 16px;">NMID : ID12345678901234 <br> PG1</p>
    </div>

    <!-- QR Code -->
    <div class="section" style="text-align: center;">
        <img src="" alt="qris-merchant" style="width: 300px;">
        <h4 style="font-weight: normal; margin-top: 8px;">SATU QRIS UNTUK SEMUA</h4>
    </div>

    <!-- Cara Pembayaran -->
    <div class="cara-pembayaran-qris" style="margin-top: 32px;">
        <h3 style="text-align: center; font-weight: 400;">Cara Menggunakan Pembayaran QRIS</h3>
        <table width="100%">

            <!--tester -->
            <tr>
                <td style="width: 2%; vertical-align:middle">
                    <div style="background-color: #8a2be2; color: #fff; aspect-ratio: 1/1; width: 24px; height: 24px; border-radius: 50%; text-align: center; vertical-align: middle; line-height:20px">
                        <h4 style="margin: 0;">1</h4>
                    </div>
                </td>
                <td style="width: 98%; vertical-align:middle; font-weight: 600;">
                    <h3 style="margin: 0;">Siapkan Aplikasi Digital</h3>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="line-height: 1.5;">Buka aplikasi mobile banking, e-wallet, atau platform pembayaran digital yang mendukung QRIS di smartphone Anda.</td>
            </tr>

            <tr>
                <td style="width: 2%; vertical-align:middle">
                    <div style="background-color: #8a2be2; color: #fff; aspect-ratio: 1/1; width: 24px; height: 24px; border-radius: 50%; text-align: center; vertical-align: middle; line-height:20px">
                        <h4 style="margin: 0;">2</h4>
                    </div>
                </td>
                <td style="width: 98%; vertical-align:middle; font-weight: 600;">
                    <h3 style="margin: 0;">Scan QR Code</h3>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="line-height: 1.5;">Pilih menu scan, bayar, atau transfer pada aplikasi, lalu arahkan kamera smartphone ke QR Code
                    di atas dengan jarak yang tepat dan pencahayaan yang cukup hingga kode terdeteksi secara
                    otomatis.</td>
            </tr>

            <tr>
                <td style="width: 2%; vertical-align:middle">
                    <div style="background-color: #8a2be2; color: #fff; aspect-ratio: 1/1; width: 24px; height: 24px; border-radius: 50%; text-align: center; vertical-align: middle; line-height:20px">
                        <h4 style="margin: 0;">3</h4>
                    </div>
                </td>
                <td style="width: 98%; vertical-align:middle; font-weight: 600;">
                    <h3 style="margin: 0;">Input Nominal & Konfirmasi</h3>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="line-height: 1.5;">Pastikan jumlah pembayaran dan detail transaksi sudah sesuai. Setelah itu, masukkan PIN atau kata sandi untuk
                    melanjutkan dan selesaikan proses.</td>
            </tr>

        </table>
    </div>

    <!-- Footer -->
    <div class="footer" style="background-color: #efefef; padding: 12px 0">
        <a href="http://www.aspi-qris.id" style="text-decoration: none;">www.aspi-qris.id</a>
    </div>

</body>

</html>