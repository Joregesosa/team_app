<?php
$team = [

    ['name' => 'Bill Mahoney', 'position' => 'Product owner', 'photo' => '/images/photo1.png'],
    ['name' => 'Saba Cabrera', 'position' => 'Art director', 'photo' => '/images/photo2.png'],
    ['name' => 'Shae Le', 'position' => 'Tech Lead', 'photo' => '/images/photo3.png'],
    ['name' => 'Skylah Lu', 'position' => 'UX Designer', 'photo' => '/images/photo4.png'],
    ['name' => 'Griff Richards', 'position' => 'Developer', 'photo' => '/images/photo5.png'],
    ['name' => 'Stan John', 'position' => 'Deverloper', 'photo' => '/images/photo6.png'],

];

foreach ($team as $key => $person) :
?>

    <div class="flex flex-wrap w-40  <?= $key % 2 === 0 ? 'self-start' : 'self-end' ?> mx-auto <?= ($key != 1 && $key != 4) ? 'md:self-start' : 'md:self-end' ?> md:w-72">

        <img class="w-36 md:w-60" src=<?= $person['photo'] ?> alt="">

        <span style="writing-mode: vertical-rl" class="text-[10px] md:text-xs uppercase font-secondFont">
            <?= $person['position'] ?>
        </span>

        <span class="text-sm md:text-lg font-semibold">
            <?= $person['name'] ?>
        </span>

    </div>

<?php
endforeach;
?>