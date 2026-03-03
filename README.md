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

---

## 📋 About Zhat

**Zhat** is an automated phishing tool with **35+ ready-to-use templates**, developed for **educational purposes and authorized security testing**. Based on the popular Zphisher, this version brings visual improvements and new templates.

> **⚠️ LEGAL NOTICE**: This tool is **EXCLUSIVELY** for educational purposes and penetration testing in controlled environments with explicit authorization. Misuse to gain unauthorized access to third-party accounts is a **CRIME** under Brazilian legislation (Law 12.737/2012) and international laws.

---

## ✨ Features

| Feature | Description |
|---------|-------------|
| 🎯 **35+ Templates** | Facebook, Instagram, Google, **Riot Games**, Netflix, Steam and more |
| 🌐 **Tunneling** | Localhost, Cloudflared and LocalXpose |
| 🔗 **Mask URL** | Link obfuscation (e.g., `https://blue-verified-badge@random.trycloudflare.com`) |
| 📍 **IP Capture** | Monitors and saves victim's IP |
| 🔑 **Credential Capture** | Saves username/password in `auth/usernames.dat` |
| 📱 **User-Agent logging** | Identifies victim's device/browser |
| 🐳 **Docker support** | Ready-to-use container |
| 📦 **.deb Installer** | Creates Debian package for installation |
| 🔄 **Auto-update** | Automatically checks for updates |

---

## 📦 Installation

### Method 1: Direct Clone (Recommended)
```bash
# Clone the repository
git clone --depth=1 https://github.com/Unknown-Red/zhat.git

# Enter the folder
cd zhat

# Give permissions and execute
chmod +x zhat.sh
./zhat.sh
