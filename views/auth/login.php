<?php include __DIR__.'/../partials/header.php'; ?>
<h2>Login</h2>
<form method="POST" action="/login">
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Senha: <input type="password" name="senha" required></label><br>
    <button type="submit">Entrar</button>
</form>
<?php if (!empty($_SESSION['erro'])): ?>
    <p style="color:red"><?= $_SESSION['erro']; unset($_SESSION['erro']); ?></p>
<?php endif; ?>
<?php include __DIR__.'/../partials/footer.php'; ?>
