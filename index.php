<?php 
require_once("utilisateur.php");
require_once("patien.php");
require_once("medcin.php");

// Création des instances
$medecin = new Medecin("Dupont", "Jean", "Cardiologue");
$patient1 = new Patient("Martin", "Pierre");
$patient2 = new Patient("Dubois", "Marie");

// Test des interactions
$patient1->prendreRendezVous("2024-12-25", "14:30");
$patient2->prendreRendezVous("2024-12-26", "10:00");

$medecin->consulterPatient($patient1, "Tension artérielle normale, pas de traitement nécessaire");
$medecin->consulterPatient($patient2, "Prescription de médicaments pour l'hypertension");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test des Classes</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .section { margin-bottom: 20px; padding: 15px; border: 1px solid #ddd; }
        h2 { color: #333; }
    </style>
</head>
<body>
    <h1>Test des Classes Utilisateur, Patient et Médecin</h1>

    <div class="section">
        <h2>Information Médecin</h2>
        <p>Nom complet: <?php echo $medecin->afficherNomComplet(); ?></p>
        <p>Spécialité: <?php echo $medecin->getSpecialite(); ?></p>
    </div>

    <div class="section">
        <h2>Information Patients</h2>
        <h3>Patient 1</h3>
        <p>Nom complet: <?php echo $patient1->afficherNomComplet(); ?></p>
        <p>Rendez-vous:</p>
        <pre><?php print_r($patient1->getRendezVous()); ?></pre>

        <h3>Patient 2</h3>
        <p>Nom complet: <?php echo $patient2->afficherNomComplet(); ?></p>
        <p>Rendez-vous:</p>
        <pre><?php print_r($patient2->getRendezVous()); ?></pre>
    </div>

    <div class="section">
        <h2>Consultations du Médecin</h2>
        <pre><?php print_r($medecin->getConsultations()); ?></pre>
    </div>
</body>
</html>