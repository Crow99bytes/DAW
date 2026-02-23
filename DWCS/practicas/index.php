<?php
    const API_URL = "https://whenisthenextmcufilm.com/api";
    $ch = curl_init(API_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); 
    $data = json_decode($result, true);
    curl_close($ch);
    var_dump($data);

?>
<!-- Centered viewport -->
<head>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
</head>
<main>
    
    <h2>La próxima película de Marvel: </h2>
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>