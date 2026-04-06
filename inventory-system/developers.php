<!DOCTYPE html>
<html>
<head>
<title>Developers - InventoryPro</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

<div class="center-page">

<h1 class="dev-title">Meet the Developers !</h1>
<p class="dev-sub">The team behind InventoryPro</p>

<div class="dev-grid">

    <div class="card dev-card-pro" onclick="showDev('marky')">
        <div class="avatar">M</div>
        <h3>Marky Natividad</h3>
        <p>Frontend Developer</p>
    </div>

    <div class="card dev-card-pro" onclick="showDev('jeffrey')">
        <div class="avatar">J</div>
        <h3>Jeffrey Dela Cerna</h3>
        <p>JavaScript Developer</p>
    </div>

    <div class="card dev-card-pro" onclick="showDev('justin')">
        <div class="avatar">J</div>
        <h3>Justin Marco</h3>
        <p>QA Specialist</p>
    </div>

</div>

<a href="index.php" class="btn">← Back</a>

</div>

<!-- MODAL -->
<div id="devModal" class="modal">
<div class="modal-content dev-modal">

<div class="dev-profile">
    <img id="devImage" src="" alt="developer">
    <h2 id="devName"></h2>
    <p id="devRole"></p>
    <p id="devDesc" class="dev-desc"></p>
</div>

<button onclick="closeDev()" class="btn-secondary">Close</button>

</div>
</div>

<script src="script.js"></script>
</body>
</html>