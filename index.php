 <!DOCTYPE html>
 <html lang="en" class="">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="dist/output.css">
     <title>My Team Page</title>
 </head>

 <body class="dark:bg-gray-900 dark:text-gray-300 font-firstFont">

     <div id="toggle" class=" w-14 h-14 rounded-full cursor-pointer sticky top-4 left-[80%]">

         <svg xmlns="http://www.w3.org/2000/svg" id="sun" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke="currentColor" class="w-14 h-14 hover:fill-yellow-300 hover:stroke-yellow-100 hidden">

             <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
         </svg>

         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" id="moon" fill="none" class="w-14 h-14 hover:stroke-blue-400 hover:fill-blue-200 stroke-blue-950">
             <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
         </svg>

     </div>

     <div class="w-fit max-w-xl md:max-w-4xl mx-auto">

         <div class="md:grid md:grid-cols-2">
             <h1 class="text-4xl font-bold tracking-tight px-3 font-secondFont">
                 The creative crew
             </h1>

             <div class="justify-self-center mt-7 md:mt-0">

                 <h2 class="text-lg font-semibold px-3">
                     Who we are
                 </h2>

                 <p class="text-sm w-[320px] px-3 md:text-lg md:w-96 ">
                     We are team of creatively diverse. driven. innovative individuals working in various locations from the world.
                 </p>

             </div>
         </div>

         <div class="grid grid-cols-2 w-full p-4 gap-x-8 auto-rows-[280px]   py-10 md:grid-cols-3 md:auto-rows-[440px]">

             <?php
                require 'card.php';
                ?>

         </div>

     </div>
        <footer class="w-full p-4 items-center justify-center text-[#A9A9A9] text-sm">
            <p class="text-center">
            created by 
                <a href="" class="font-sans font-bold ">joregesosa</a>
                -
                <a href="https://devchallenges.io/challenges/hhmesazsqgKXrTkYkt0U">devChallenges.io</a>
            </p>
        </footer>
     <script>
         const moon = document.querySelector('#moon');
         const sun = document.querySelector('#sun');
         const toggle = document.querySelector('#toggle');
         const html = document.querySelector('html');
         toggle.addEventListener('click', () => {

             moon.classList.toggle('hidden');
             sun.classList.toggle('hidden');
             html.classList.toggle('dark');

         })
     </script>

 </body>

 </html>