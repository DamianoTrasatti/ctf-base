<?php
// L'indirizzo del file su Altervista con la chiave segreta attaccata alla fine
$url = "https://portfoliodamianotrasatti.org/scuola/tpsit/get_credentials.php?key=12345";

// 1. Scarica il contenuto della pagina remota
$jsonData = file_get_contents($url);

// 2. Controlla se la risposta non è un errore di accesso negato
if ($jsonData !== "Accesso negato!" && $jsonData !== false) {
    
    // Converte il testo JSON in un array PHP leggibile
    $data = json_decode($jsonData, true);
    
    // Mostra a schermo i dati ottenuti
    echo "Username: " . $data['username'] . "<br>";
    echo "Password: " . $data['password'];

} else {
    echo "Errore: Impossibile recuperare le credenziali.";
}
?>