@extends('layouts.landing')

@section('title', 'Home - Elkhadijah')

@section('content')
<section class="mt-20 w-full flex flex-col items-center justify-center">
    <div class="border-2 border-gray-400 rounded-full py-2 px-5 text-center">
        <h1 class="text-md text-gray-800">Elkhadijah Mecca Medina</h1>
    </div>
    <p class="text-5xl mt-8 font-semibold text-gray-700 max-w-[800px] text-center">
        Wujudkan Perjalanan <span class="text-blue-500">Ibadah dan Wisata</span> Impian Anda!
    </p>
    <p class="text-md mt-8 text-gray-400 max-w-[600px] text-center">
        Kami hadir untuk menemani setiap langkah Anda, dari keberangkatan hingga kepulangan, dengan layanan profesional, aman, dan terpercaya.
    </p>

    <div class="relative w-full h-56 mt-6 overflow-hidden">
    <div class="max-w-screen-lg mx-auto">
        <!-- Carousel dengan Animasi Bergerak -->
        <div class="flex gap-6 animate-scroll whitespace-nowrap w-max" id="commentCarousel">
            <?php 
                $comments = [
                    ["name" => "Muhammad Ridwan", "role" => "Jamaah Umrah", "text" => "Luar biasa! Perjalanan ke Turki sangat berkesan. Destinasi wisata Islami dikunjungi, makanan halal selalu tersedia, dan perjalanan sangat nyaman."],
                    ["name" => "Aisyah Nur", "role" => "Jamaah Haji", "text" => "Sangat puas dengan layanan ini! Dari awal pendaftaran hingga perjalanan, semua diatur dengan sangat profesional. Ibadah haji saya tahun ini berjalan lancar dan penuh keberkahan. Terima kasih!"]
                ];
                
                // Duplikasikan komentar agar looping tampak seamless
                for ($i = 0; $i < 2; $i++) {
                    foreach ($comments as $comment) {
                        echo '
                        <div class="w-[300px] bg-white p-4 rounded-2xl shadow-xl">
                            <div class="flex items-center space-x-4">
                                <img src="images/foto.jpeg" alt="Foto Jamaah" class="w-10 h-10 rounded-full">
                                <div>
                                    <h3 class="text-base font-semibold text-gray-800">'. $comment["name"] .'</h3>
                                    <p class="text-xs text-gray-400">'. $comment["role"] .'</p>
                                </div>
                            </div>
                            <p class="mt-3 text-xs text-gray-500">'. $comment["text"] .'</p>
                        </div>';
                    }
                }
            ?>
        </div>
    </div>
</div>

</section>
@endsection
