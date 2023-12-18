<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $articles = [
            [
                'id' => 1,
                'title' => "Menemukan Kesejatian Hidup Melalui Umrah",
                'text' => "Pengalaman pribadi menemukan kehidupan yang sejati melalui ibadah umrah. Bagikan kisah dan pelajaran berharga ini bersama kami.",
                'author' => "Aisyah Taqwa",
                'created_at' => "2023-03-15"
            ],
            [
                'id' => 2,
                'title' => "Tips Packing Ringan untuk Haji yang Nyaman",
                'text' => "Panduan praktis merencanakan dan membawa barang bawaan yang ringan namun cukup untuk perjalanan haji yang nyaman. Pelajari cara efisien packing.",
                'author' => "Ahmad Ramah",
                'created_at' => "2023-04-02"
            ],
            [
                'id' => 3,
                'title' => "Kiat Aman dan Nyaman Selama Musim Haji",
                'text' => "Langkah-langkah untuk menjaga kesehatan dan keamanan selama musim haji. Dapatkan informasi penting sebelum berangkat ke tanah suci.",
                'author' => "Fatimah Sehat",
                'created_at' => "2023-05-20"
            ],
            [
                'id' => 4,
                'title' => "Seni Fotografi Haji: Merekam Keindahan Spiritual",
                'text' => "Panduan praktis untuk memotret momen-momen spiritual selama perjalanan haji. Temukan seni fotografi yang menggugah hati Anda.",
                'author' => "Ali Fotografer",
                'created_at' => "2023-06-10"
            ],
            [
                'id' => 5,
                'title' => "Membangun Jaringan Kebersamaan di Tanah Suci",
                'text' => "Cara terbaik untuk berinteraksi dan membangun jaringan dengan sesama jamaah selama perjalanan haji dan umrah. Sukseskan perjalanan bersama-sama.",
                'author' => "Khadijah Bersahabat",
                'created_at' => "2023-07-01"
            ],
        ];
        return view('index', ['articles' => $articles]);
    }
    public function article()
    {
        $articles = [
            [
                'id' => 1,
                'title' => "Menemukan Kesejatian Hidup Melalui Umrah",
                'text' => "Pengalaman pribadi menemukan kehidupan yang sejati melalui ibadah umrah. Bagikan kisah dan pelajaran berharga ini bersama kami.",
                'author' => "Aisyah Taqwa",
                'created_at' => "2023-03-15"
            ],
            [
                'id' => 2,
                'title' => "Tips Packing Ringan untuk Haji yang Nyaman",
                'text' => "Panduan praktis merencanakan dan membawa barang bawaan yang ringan namun cukup untuk perjalanan haji yang nyaman. Pelajari cara efisien packing.",
                'author' => "Ahmad Ramah",
                'created_at' => "2023-04-02"
            ],
            [
                'id' => 3,
                'title' => "Kiat Aman dan Nyaman Selama Musim Haji",
                'text' => "Langkah-langkah untuk menjaga kesehatan dan keamanan selama musim haji. Dapatkan informasi penting sebelum berangkat ke tanah suci.",
                'author' => "Fatimah Sehat",
                'created_at' => "2023-05-20"
            ],
            [
                'id' => 4,
                'title' => "Seni Fotografi Haji: Merekam Keindahan Spiritual",
                'text' => "Panduan praktis untuk memotret momen-momen spiritual selama perjalanan haji. Temukan seni fotografi yang menggugah hati Anda.",
                'author' => "Ali Fotografer",
                'created_at' => "2023-06-10"
            ],
            [
                'id' => 5,
                'title' => "Membangun Jaringan Kebersamaan di Tanah Suci",
                'text' => "Cara terbaik untuk berinteraksi dan membangun jaringan dengan sesama jamaah selama perjalanan haji dan umrah. Sukseskan perjalanan bersama-sama.",
                'author' => "Khadijah Bersahabat",
                'created_at' => "2023-07-01"
            ],
            [
                'id' => 6,
                'title' => "Keindahan Sahur di Mekkah",
                'text' => "Menjelajahi tradisi sahur di Mekkah dan cara menikmati sahur yang bermakna selama perjalanan ibadah Anda. Rasakan keberkahan setiap suapannya.",
                'author' => "Umar Sahur",
                'created_at' => "2023-08-12"
            ],
            [
                'id' => 7,
                'title' => "Menyusuri Jejak Sejarah di Madinah",
                'text' => "Petualangan melacak jejak sejarah di kota Madinah. Temukan tempat-tempat bersejarah yang memperkaya pengalaman spiritual Anda.",
                'author' => "Aisyah Penjelajah",
                'created_at' => "2023-09-25"
            ],
            [
                'id' => 8,
                'title' => "Kisah Inspiratif: Transformasi Hidup Melalui Umrah",
                'text' => "Menyimak kisah-kisah inspiratif jamaah yang mengalami transformasi hidup melalui ibadah umrah. Temukan inspirasi dalam perjalanan spiritual mereka.",
                'author' => "Ibrahim Mubarak",
                'created_at' => "2023-10-18"
            ],
            [
                'id' => 9,
                'title' => "Meraih Kesejahteraan Spiritual dalam Haji",
                'text' => "Tips praktis untuk mencapai kesejahteraan spiritual selama perjalanan haji. Temukan kedamaian dalam setiap langkah ibadah Anda.",
                'author' => "Amina Damai",
                'created_at' => "2023-11-05"
            ],
        ];
        return view('article', ['articles' => $articles]);
    }
    public function singleArticle(string $id)
    {
        $articles = [
            [
                'id' => 1,
                'title' => "Menemukan Kesejatian Hidup Melalui Umrah",
                'text' => "Pengalaman pribadi menemukan kehidupan yang sejati melalui ibadah umrah. Bagikan kisah dan pelajaran berharga ini bersama kami.",
                'author' => "Aisyah Taqwa",
                'created_at' => "2023-03-15"
            ],
            [
                'id' => 2,
                'title' => "Tips Packing Ringan untuk Haji yang Nyaman",
                'text' => "Panduan praktis merencanakan dan membawa barang bawaan yang ringan namun cukup untuk perjalanan haji yang nyaman. Pelajari cara efisien packing.",
                'author' => "Ahmad Ramah",
                'created_at' => "2023-04-02"
            ],
            [
                'id' => 3,
                'title' => "Kiat Aman dan Nyaman Selama Musim Haji",
                'text' => "Langkah-langkah untuk menjaga kesehatan dan keamanan selama musim haji. Dapatkan informasi penting sebelum berangkat ke tanah suci.",
                'author' => "Fatimah Sehat",
                'created_at' => "2023-05-20"
            ],
            [
                'id' => 4,
                'title' => "Seni Fotografi Haji: Merekam Keindahan Spiritual",
                'text' => "Panduan praktis untuk memotret momen-momen spiritual selama perjalanan haji. Temukan seni fotografi yang menggugah hati Anda.",
                'author' => "Ali Fotografer",
                'created_at' => "2023-06-10"
            ],
            [
                'id' => 5,
                'title' => "Membangun Jaringan Kebersamaan di Tanah Suci",
                'text' => "Cara terbaik untuk berinteraksi dan membangun jaringan dengan sesama jamaah selama perjalanan haji dan umrah. Sukseskan perjalanan bersama-sama.",
                'author' => "Khadijah Bersahabat",
                'created_at' => "2023-07-01"
            ],
            [
                'id' => 6,
                'title' => "Keindahan Sahur di Mekkah",
                'text' => "Menjelajahi tradisi sahur di Mekkah dan cara menikmati sahur yang bermakna selama perjalanan ibadah Anda. Rasakan keberkahan setiap suapannya.",
                'author' => "Umar Sahur",
                'created_at' => "2023-08-12"
            ],
            [
                'id' => 7,
                'title' => "Menyusuri Jejak Sejarah di Madinah",
                'text' => "Petualangan melacak jejak sejarah di kota Madinah. Temukan tempat-tempat bersejarah yang memperkaya pengalaman spiritual Anda.",
                'author' => "Aisyah Penjelajah",
                'created_at' => "2023-09-25"
            ],
            [
                'id' => 8,
                'title' => "Kisah Inspiratif: Transformasi Hidup Melalui Umrah",
                'text' => "Menyimak kisah-kisah inspiratif jamaah yang mengalami transformasi hidup melalui ibadah umrah. Temukan inspirasi dalam perjalanan spiritual mereka.",
                'author' => "Ibrahim Mubarak",
                'created_at' => "2023-10-18"
            ],
            [
                'id' => 9,
                'title' => "Meraih Kesejahteraan Spiritual dalam Haji",
                'text' => "Tips praktis untuk mencapai kesejahteraan spiritual selama perjalanan haji. Temukan kedamaian dalam setiap langkah ibadah Anda.",
                'author' => "Amina Damai",
                'created_at' => "2023-11-05"
            ],
        ];
        $latest_article = array_filter($articles, function ($data) use ($id) {
            return $data['id'] != $id;
        });
        return view('singleArticle', ['article' => $articles[$id - 1], 'articles' => array_slice($latest_article, 0, 4)]);
    }
    public function about()
    {
        return view('about');
    }
}
