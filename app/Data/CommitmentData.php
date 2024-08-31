<?php

namespace App\Data;

class CommitmentData
{
    public static function getCommitment()
    {
        return [
            [
                'title' => 'Layanan 24/7',
                'detail' => 'Tim Technical Support dan Customer Service Qwords siap membantu Anda selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live chat, Call Center, dan Support Ticket.',
                'img' => 'assets/commitments/24-jam.png',
            ],
            [
                'title' => 'Panduan Manual Lengkap',
                'detail' => 'Qwords dilengkapi dengan halaman knowledge base berisi tutorial dan tips seputar pengelolaan website dan hosting. Dapat diakses dengan mudah dan solutif.',
                'img' => 'assets/commitments/guide.png',
            ],
            [
                'title' => 'Up Time 99.99%',
                'detail' => 'Uptime Network & Server di atas 99. 99% dengan konfigurasi server yang tepat. Didukung manajemen jaringan dan multiple upstream tier 1 provider network serta multiple peering.',
                'img' => 'assets/commitments/up-time.png',
            ],
            [
                'title' => 'Jaminan Keamanan',
                'detail' => 'Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan dan pencegahan yang berstandar & berkelanjutan telah menjadi perhatian utama kami.',
                'img' => 'assets/commitments/secure.png',
            ],
            [
                'title' => 'Clustered DNS',
                'detail' => 'DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya. Hal ini membuat DNS Server akan selalu dapat di akses karena saling membackup antar server.',
                'img' => 'assets/commitments/dns.png',
            ],
            [
                'title' => 'High Enterprise Server',
                'detail' => 'Standar server Qwords adalah server kelas enterprise Dual Xeon Octa Core yang merupakan hardware kelas terbaik. Hardware ini biasa digunakan oleh perusahaan terkemuka.',
                'img' => 'assets/commitments/enterprise.png',
            ],
            [
                'title' => 'Tier 1 Network',
                'detail' => 'Tier 1 Network merupakan jaringan dunia tanpa transit network, yang membuat jaringan lebih cepat serta jalur routing yang lebih pendek dan ketersediaan backup network.',
                'img' => 'assets/commitments/tier-1.png',
            ],
            [
                'title' => 'Peering Network',
                'detail' => 'Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP dan CDIX yang membuat latency atau waktu tunggu pengiriman data semakin kecil.',
                'img' => 'assets/commitments/peering.png',
            ],
        ];
    }
}