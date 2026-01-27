<?php if (isset($_GET['success'])): ?>
    <p style="color: green;">✅ Datos enviados correctamente</p>
    <a href="index.php">⬅ Volver al panel</a>
<?php endif; ?>

<?php if (isset($_GET['error'])): ?>
    <p style="color: red;">❌ Error al enviar los datos</p>
    <a href="index.php">⬅ Volver al panel</a>
<?php endif; ?>
