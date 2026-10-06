<?php
// La password segreta che decidi tu
$chiaveSegreta = "12345";

// Legge la chiave inviata nell'indirizzo (es. ?key=12345)
$tokenRicevuto = $_GET['key'] ?? '';

// Controlla se la chiave è corretta
if ($tokenRicevuto === $chiaveSegreta) {
    // Restituisce le credenziali in formato JSON
    echo json_encode([
        "username" => "admin",
        "password" => "password"
    ]);
} else {
    // Se la chiave è sbagliata o manca
    echo "Accesso negato!";
}
?>