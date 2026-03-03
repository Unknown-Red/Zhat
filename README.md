<!-- Zhat -->

<p align="center">
  <img src=".github/misc/logo.png">
</p>
# 🎣 Zhat - Advanced Phishing Framework

<div align="center">
  
![Version](https://img.shields.io/badge/version-2.0.0-blue.svg)
![License](https://img.shields.io/badge/license-GPLv3-red.svg)
![Kali](https://img.shields.io/badge/Kali-Linux-black.svg)
![Docker](https://img.shields.io/badge/docker-supported-blue.svg)
![Author](https://img.shields.io/badge/author-Unknown--Red-purple.svg)

</div>

<div align="center">
  <img src="https://raw.githubusercontent.com/Unknown-Red/zhat/main/.github/banner.png" alt="Zhat Banner" width="600">
</div>

---

## 📋 Sobre o Zhat

**Zhat** é uma ferramenta automatizada de phishing com **35+ templates** prontos, desenvolvida para **fins educacionais e testes de segurança autorizados**. Baseada no popular Zphisher, esta versão traz melhorias visuais e novos templates.

> **⚠️ AVISO LEGAL**: Esta ferramenta é **EXCLUSIVAMENTE** para fins educacionais e testes de penetração em ambientes controlados com autorização explícita. O uso indevido para obter acesso não autorizado a contas de terceiros é **CRIME** previsto na legislação brasileira (Lei 12.737/2012) e internacional.

---

## ✨ Funcionalidades

| Recurso | Descrição |
|---------|-----------|
| 🎯 **35+ Templates** | Facebook, Instagram, Google, **Riot Games**, Netflix, Steam e mais |
| 🌐 **Tunelamento** | Localhost, Cloudflared e LocalXpose |
| 🔗 **Mask URL** | Ofuscação de links (ex: `https://blue-verified-badge@random.trycloudflare.com`) |
| 📍 **Captura de IP** | Monitora e salva IPs da vítima |
| 🔑 **Captura de credenciais** | Salva usuário/senha em `auth/usernames.dat` |
| 📱 **User-Agent logging** | Identifica dispositivo/navegador da vítima |
| 🐳 **Docker support** | Container pronto para uso |
| 📦 **Instalador .deb** | Cria pacote Debian para instalação |
| 🔄 **Auto-update** | Verifica atualizações automaticamente |

---

## 📦 Instalação

### Método 1: Clonagem Direta (Recomendado)
```bash
# Clone o repositório
git clone --depth=1 https://github.com/Unknown-Red/zhat.git

# Entre na pasta
cd zhat

# Dê permissão e execute
chmod +x zhat.sh
./zhat.sh
