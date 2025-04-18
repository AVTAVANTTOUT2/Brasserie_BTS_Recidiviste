<?php
include 'config_admin.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = $_POST['type'];
    $montant = $_POST['montant'];
    $description = $_POST['description'];
    $date = $_POST['date_finance'] ?? date('Y-m-d');
    $stmt = $mysqli->prepare("INSERT INTO finances (type, montant, description, date_finance) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sdss", $type, $montant, $description, $date);
    $stmt->execute();
}

$mois = $_GET['mois'] ?? date('m');
$annee = $_GET['annee'] ?? date('Y');
$debut = "$annee-$mois-01";
$fin = date("Y-m-t", strtotime($debut));

// Bilan Financier
$resFinances = $mysqli->query("SELECT type, SUM(montant) as total FROM finances WHERE date_finance BETWEEN '$debut' AND '$fin' GROUP BY type");
$recettes = $depenses = 0;y
while ($row = $resFinances->fetch_assoc()) {
    if ($row['type'] == 'recette') $recettes = $row['total'];
    if ($row['type'] == 'dépense') $depenses = $row['total'];
}

// Ventes par produit
$produits = [];
$resProduits = $mysqli->query("
    SELECT p.nom, SUM(v.total) as total_ventes
    FROM ventes v
    JOIN produits p ON v.date_vente BETWEEN '$debut' AND '$fin'
    GROUP BY p.nom
");
while ($prod = $resProduits->fetch_assoc()) {
    $produits[$prod['nom']] = $prod['total_ventes'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bilan Financier</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="container py-4">
    <h1>Bilan Financier - <?= date('F Y', strtotime($debut)) ?></h1>

    <!-- Navigation -->
    <form method="GET" class="row g-2 mb-4">
        <div class="col-auto">
            <select name="mois" class="form-select">
                <?php for ($m = 1; $m <= 12; $m++): ?>
                    <option value="<?= sprintf('%02d', $m) ?>" <?= $mois == sprintf('%02d', $m) ? 'selected' : '' ?>>
                        <?= date('F', mktime(0, 0, 0, $m, 10)) ?>
                    </option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="col-auto">
            <select name="annee" class="form-select">
                <?php for ($y = 2023; $y <= date('Y'); $y++): ?>
                    <option <?= $annee == $y ? 'selected' : '' ?>><?= $y ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="col-auto">
            <button class="btn btn-primary">Filtrer</button>
        </div>
    </form>

    <!-- Résumé -->
    <div class="mb-4">
        <h3>Résumé du mois</h3>
        <ul>
            <li><strong>Recettes :</strong> <?= number_format($recettes, 2) ?> €</li>
            <li><strong>Dépenses :</strong> <?= number_format($depenses, 2) ?> €</li>
            <li><strong>Solde :</strong> <?= number_format($recettes - $depenses, 2) ?> €</li>
        </ul>
    </div>

    <!-- Formulaire -->
    <h3>Ajouter une transaction</h3>
    <form method="POST" class="row g-3 mb-5">
        <div class="col-md-2">
            <select name="type" class="form-select" required>
                <option value="recette">Recette</option>
                <option value="dépense">Dépense</option>
            </select>
        </div>
        <div class="col-md-2">
            <input type="number" step="0.01" name="montant" class="form-control" placeholder="Montant" required>
        </div>
        <div class="col-md-4">
            <input type="text" name="description" class="form-control" placeholder="Description">
        </div>
        <div class="col-md-2">
            <input type="date" name="date_finance" class="form-control" value="<?= date('Y-m-d') ?>">
        </div>
        <div class="col-md-2">
            <button class="btn btn-success">Ajouter</button>
        </div>
    </form>

    <!-- Ventes -->
    <h3>Ventes par produit</h3>
    <table class="table table-striped">
        <thead><tr><th>Produit</th><th>Total ventes (€)</th></tr></thead>
        <tbody>
            <?php foreach ($produits as $nom => $total): ?>
                <tr><td><?= htmlspecialchars($nom) ?></td><td><?= number_format($total, 2) ?></td></tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Graphique -->
    <h4 class="mt-5">Graphique des ventes</h4>
    <canvas id="ventesChart" width="400" height="200"></canvas>
    <script>
        const ctx = document.getElementById('ventesChart').getContext('2d');
        const ventesChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?= json_encode(array_keys($produits)) ?>,
                datasets: [{
                    label: 'Ventes',
                    data: <?= json_encode(array_values($produits)) ?>,
                    backgroundColor: [
                        '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0',
                        '#9966FF', '#FF9F40', '#8BC34A', '#CDDC39'
                    ],
                    borderWidth: 1
                }]
            }
        });
    </script>
</body>
</html>
