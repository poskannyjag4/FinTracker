<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход — FinTracker</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">
            <h1 class="auth-title">Вход в аккаунт</h1>
            <p class="auth-subtitle">Введите свои данные для доступа к системе</p>
            
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <!-- Поле для ввода Email -->
                <div class="form-group">
                    <label for="email">Электронная почта</label>
                    <input type="email" id="email" name="email" placeholder="example@mail.com" required>
                </div>
                
                <!-- Поле для ввдоа пароля -->
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>
                
                <!-- Дополнительные опции: "Запомнить меня" и "Забыли пароль?" -->
                <div class="form-options">
                    <div class="checkbox-group">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Запомнить меня</label>
                    </div>
                    <a href="#" class="forgot-password">Забыли пароль?</a>
                </div>
                
                <!-- Кнопка отправки формы -->
                <button type="submit" class="auth-button">Войти</button>
            </form>
            
            <!-- Ссылка на страницу регистрации -->
            <div class="switch-auth">
                <p>Ещё нет аккаунта? <a href="#">Зарегистрироваться</a></p>
            </div>
        </div>
    </div>
</body>
</html>
