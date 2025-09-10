<?php
$uri = service('uri');
$segments = $uri->getSegments();
$lastSegment = end($segments);
$path = $lastSegment ? ucfirst($lastSegment) : "Beranda";
?>

<nav class="fixed z-100 top-0 w-full p-3 border-b-1 border-[#EAEAEA] bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center gap-2">
            <img src="/img/logo/polsri_logo.png" class="size-10" alt="Politeknik Negeri Sriwijaya">
            <h1 class="text-lg leading-4 font-bold">POLSRI <br> LIBRARY</h1>
        </div>
        <!-- Menu -->
        <div class="flex justify-center items-center gap-8">
            <a href="/">
                <p class="<?= $path == 'Beranda' ? 'font-bold' : '' ?>">Beranda</p>
            </a>
            <a href="/about">
                <p class="<?= $path == 'About' ? 'font-bold' : '' ?>">Tentang</p>
            </a>
            <a href="">
                <p>Berita</p>
            </a>
            <a href="">
                <p>Bantuan</p>
            </a>
        </div>
        <!-- CTA -->
        <div>
            <button class="bg-polsri py-2 px-3 rounded font-semibold text-white flex items-center gap-2">
                <img src="/img/icons/login.svg" alt="Login Anggota">
                Login Anggota
            </button>
        </div>
    </div>
</nav>
