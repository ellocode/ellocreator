<?php
class AuthController extends Controller
{
    public function login()
    {
        return $this->view('auth/login');
    }

    public function authenticate()
    {
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        if ($email === 'admin@admin.com' && $senha === '123456') {
            $_SESSION['usuario'] = $email;
            header('Location: /');
            exit;
        }

        $_SESSION['erro'] = 'Login inválido.';
        header('Location: /login');
        exit;
    }
}
