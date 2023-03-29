<!doctype html>
<?php include 'header.php'?>
<body>
<div class="relative py-10 bg-gray-900">
    <div class="absolute inset-0">
        <img src="media/pexels-lukas-574071.jpg" alt="Header Image AMP-IT" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black opacity-70"></div>
    </div>
    <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Contact</h1>
        <p class="mt-6 text-xl text-white max-w-3xl">Overtuigd? Dan help ik u graag verder.</p>
    </div>
</div>

<img class="absolute md:hidden" src="media/bgContact.svg">
    <div class="m-auto p-10 rounded-3xl container my-20 bg-blue-300 w-2/3 relative">
    <form class="columns-4 gap-10 relative grid grid-rows-1" method="post" name="contactform">
        <input class="py-2" name="name" placeholder="Naam" type="text">
        <input class="py-2" name="email" placeholder="Email" type="email">
        <input class="py-2" name="tel" placeholder="Nummer" type="tel">
        <textarea class="py-2" name="message" type="text" placeholder="Uw vraag"></textarea>
        <input class="text-white bg-blue-300 rounded-3xl py-2 m-auto w-2/4 lg:w-1/4" type="submit">
    </form>
    </div>
</body>
</html>