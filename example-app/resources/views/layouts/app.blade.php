<!DOCTYPE html>
<html>
    <head>
       @include('includes.meta')    <!-- menyisipkan file meta yg ada di folder includes -->
       
       <title>@yield('title') | Landing Page</title>    <!-- bersifat dinamis -->

       <!-- Favicon -->
       <!-- dibawah ini standart favicon yg wajib ada dalam membuat website -->
       <link rel="apple-touch-icon" href="">
       <link rel="shortcut icon" type="image/x-icon" href="">

       <!-- fungsi stack ialah memungkinkan kita untuk menyisipkan style tambahan atau script tambahan javascript yg hanya 
        berjalan pada page tertentu.
        Stack ini biasa digunakan agar kita tidak load semua style/script yg tidak digunakan atau digunakan hanya pada file tertentu.-->
       @stack('before-style')
       <!-- style -->
       @include('includes.style')   <!-- untuk memisahkan style2 yg dipakai secara umum (digunakan disemua page) -->

       @stack('after-style')

    </head>
    <body>

        <!-- header dan footer dapat dipanggil satu kali saja dan bisa digunakan disetiap tempat, karena dalam tag body
        ada includes header dan footer tapi diantara itu/didalamnya ada sebuah content -->
        @include('includes.header')
            @yield('content')   <!-- file clubs, managers, players, stadiums menjadi sebuah content, sehingga ketika kita 
                berpindah-pindah page masih bisa melihat header dan footer atau tanpa memanggil header dan footer berulang kali -->
        @include('includes.footer')

        <!-- fungsi stack ialah memungkinkan kita untuk menyisipkan style tambahan atau script tambahan javascript yg hanya 
        berjalan pada page tertentu.
        Stack ini biasa digunakan agar kita tidak load semua style/script yg tidak digunakan atau digunakan hanya pada file tertentu.-->
        @stack('before-script')
        <!-- script -->
        @include('includes.script')     <!-- untuk memisahkan script2 yg dipakai secara umum (digunakan disemua page) -->

        @stack('after-script')
    </body>
</html>