<footer class="wow some-text">
    <?php

    echo 'Статистика страницы index.php' . '<br>';
    $page = file_get_contents('index.php');
    $page_arr = mb_str_split($page);
    $vowels = 0;

    for ($i = 0; $i < count($page_arr); $i++) {
        if ($page_arr[$i] == 'а' or $page_arr[$i] == 'А') {
            $vowels++;
        }
        if ($page_arr[$i] == 'е' or $page_arr[$i] == 'Е') {
            $vowels++;
        }
        if ($page_arr[$i] == 'ё' or $page_arr[$i] == 'Ё') {
            $vowels++;
        }
        if ($page_arr[$i] == 'и' or $page_arr[$i] == 'И') {
            $vowels++;
        }
        if ($page_arr[$i] == 'о' or $page_arr[$i] == 'О') {
            $vowels++;
        }
        if ($page_arr[$i] == 'у' or $page_arr[$i] == 'У') {
            $vowels++;
        }
        if ($page_arr[$i] == 'ы' or $page_arr[$i] == 'Ы') {
            $vowels++;
        }
        if ($page_arr[$i] == 'э' or $page_arr[$i] == 'Э') {
            $vowels++;
        }
        if ($page_arr[$i] == 'ю' or $page_arr[$i] == 'Ю') {
            $vowels++;
        }
        if ($page_arr[$i] == 'я' or $page_arr[$i] == 'Я') {
            $vowels++;
        }
    }
    echo 'Гласные буквы: ' . $vowels . '<br>';
    // preg_match_all('~(?<vowels>[аеёиоуыэюя])~iu', $page, $arr);
    // $vowels = count(array_filter($arr['vowels']));
    // echo $vowels . '<br>';

    $page = preg_replace('/[a-zA-Z]/i', ' ', $page);
    $page = str_replace(['-'], ' ', $page);
    $page = str_replace(["'"], ' ', $page);
    $words = str_word_count($page, 1, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
    // print_r($words);
    echo 'Слова: ' . count($words);

    ?>
    <div>
        <hr>
        <p class="some-text"><a href="https://www.behance.net/lovehelm" class="item">Nazarov</a></p>
    </div>
</footer>
</body>

</html>