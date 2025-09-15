<?php include('protect.php'); ?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontakt - Säkerhetstjänster Kundcenter</title>
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
    
    
    
    /* Contact Info Section */
    .contact-info-section {
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
    
    .contact-info-section h3 {
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
    
    .contact-info-section h3::before {
      content: '';
      display: inline-block;
      width: 32px;
      height: 32px;
      margin-right: 8px;
      background: url('data:image/svg+xml;utf8,<svg width=\'32\' height=\'32\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'><circle cx=\'16\' cy=\'16\' r=\'16\' fill=\'%23f59c28\'/><path d=\'M10 12h12v8H10v-8zm2 2v4h8v-4h-8z\' stroke=\'%23183e4f\' stroke-width=\'2.2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/></svg>') no-repeat center/contain;
      vertical-align: middle;
    }
    
    .support-email {
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
      display: inline-block;
    }
    
    .support-email:hover {
      background: linear-gradient(90deg, #e68a1f 0%, #f59c28 100%);
      color: #fff;
      transform: translateY(-2px) scale(1.03);
      box-shadow: 0 8px 24px #f59c2855;
    }
    
    .contact-info-section p {
      color: #2d3a45;
      font-size: 1.13rem;
      margin-bottom: 1.1rem;
      line-height: 1.7;
      font-weight: 400;
    }
    
    .support-hours {
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
    
    .support-hours strong {
      color: #7c6f1a;
      font-weight: 700;
      font-size: 1.09rem;
      display: flex;
      align-items: center;
    }
    
    .support-hours::before {
      content: '';
      display: inline-block;
      width: 28px;
      height: 28px;
      margin-right: 8px;
      background: url('data:image/svg+xml;utf8,<svg width=\'28\' height=\'28\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'><circle cx=\'14\' cy=\'14\' r=\'14\' fill=\'%23f59c28\'/><path d=\'M8 15l4 4 8-8\' stroke=\'%237c6f1a\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/></svg>') no-repeat center/contain;
      vertical-align: middle;
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
      
      
      .main-container {
        padding: 0 1rem;
      }
      
      .contact-info-section {
        padding: 1.5rem;
      }
      
      .footer-content {
        grid-template-columns: 1fr;
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="header-container">
      <div class="logo">Säkerhetstjänster</div>
      <nav>
        <ul>
          <li><a href="index.php">Hem</a></li>
          <li><a href="index.php#om">Om oss</a></li>
          <li><a href="index.php#tjanster">Tjänster</a></li>
          <li><a href="index.php#nedladdning">Nedladdning</a></li>
          <li><a href="contact.php">Kontakt</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="main-container">
    <!-- Contact Info Section -->
    <section class="contact-info-section">
      <h3>Kontakt</h3>
      <p>Behöver du hjälp eller har frågor? Kontakta vår support.</p>
      <a href="mailto:support@säkerhetstjänster.com" class="support-email">support@säkerhetstjänster.com</a>
      <p>Vi återkommer till dig så snart som möjligt.</p>
      
      <div class="support-hours">
        <strong>Supporttider:</strong> Måndag till fredag, 08:00-17:00 (svensk tid)
      </div>
    </section>
  </main>

  <footer>
    <div style="background: #0B2028; padding: 32px 0 0 0; margin-top:0;">
      <div class="footer-container" style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: column; align-items: center;">
        <div style="display: flex; align-items: center; gap: 32px; margin-bottom: 16px;">
          <div style="width:48px; height:48px; background:#fff; border-radius:8px; display:flex; align-items:center; justify-content:center;">
            <span style="color:#183e4f; font-weight:700; font-size:1.2rem;">S</span>
          </div>
          <div style="width:48px; height:48px; background:#fff; border-radius:8px; display:flex; align-items:center; justify-content:center;">
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
          <a href="#" aria-label="LinkedIn" style="color:#eaeae7;"><svg width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="22" height="22" rx="4" fill="#f59c28"/><path d="M7.5 9h2v6h-2V9zm1-2a1 1 0 110-2 1 1 0 010 2zm3 2h2v.8c.3-.5.9-.8 1.5-.8 1.1 0 2 .9 2 2v4h-2v-4c0-.6-.4-1-1-1s-1 .4-1 1v4h-2V9z" fill="#183e4f"/></svg></a>
          <a href="#" aria-label="Instagram" style="color:#eaeae7;"><svg width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="22" height="22" rx="4" fill="#f59c28"/><circle cx="11" cy="11" r="4" stroke="#183e4f" stroke-width="2"/><circle cx="15.5" cy="6.5" r="1" fill="#183e4f"/></svg></a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
