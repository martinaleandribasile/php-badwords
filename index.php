<?php
$text = "Sei matta, svitata, hai perso la testa… Ma ti dirò un segreto: tutti i migliori sono matti.";
$text_lowercase = strtolower($text);
$word_to_replace = $_GET["input_word"];
$text_censored = str_replace($word_to_replace, "***", $text_lowercase);
?>

<h1>Bad Words</h1>
<h3>Inserisci nell' input la parola da censurare</h3>

<div>
    <p class="text-underline-red">Testo originale:</p>
    <p class="text"><?= $text ?> </p>
    <p>Lungezza testo: <?php echo strlen($text) ?> </p>
</div>

<div>
    <form action="" method="get">
        <label for="input_word">Parola da censurare</label>
        <input name="input_word" type="text">
        <button type="submit">Invia</button>
    </form>
</div>
<div>
    <?php if ($word_to_replace != "") : ?>
        <p class="text-underline-red">Testo censurato:</p>
        <p class="text"><?= ucfirst($text_censored) ?> </p>
        <p>Lunghezza testo censurato: <?php echo strlen($text_censored) ?> </p>
    <?php endif ?>
</div>

<style>
    .text {
        width: 50%;
        padding: 10px 0;
        background-color: aliceblue;
    }

    .text-underline-red {
        text-decoration: underline;
        text-decoration-color: red
    }

    div {
        margin: 50px 0;
    }
</style>