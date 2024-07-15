<?php if (isset($_GET['error'])): ?>
    <div class="error-message"><?php echo htmlspecialchars($_GET['error']); ?></div>
<?php endif; ?>