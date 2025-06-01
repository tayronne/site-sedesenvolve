
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SeDesenvolve - Sistemas e Sites</title>
  <link href="https://unpkg.com/lucide@latest" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
<!--
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: #f9f9f9;
      color: #222;
      line-height: 1.6;
    }

    header {
      background: #111827;
      padding: 1.2rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    header img {
      height: 60px;
    }

    nav a {
      color: white;
      margin-left: 1.5rem;
      text-decoration: none;
      font-weight: 500;
    }

    nav a:hover {
      text-decoration: underline;
    }

    .hero {
      background: linear-gradient(135deg, #111827, #1f2937);
      color: white;
      padding: 4rem 2rem;
      text-align: center;
    }

    .hero h2 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .hero p {
      font-size: 1.2rem;
      max-width: 600px;
      margin: 0 auto;
    }

    section {
      padding: 3rem 2rem;
      max-width: 1100px;
      margin: 0 auto;
    }

    .section-title {
      font-size: 2rem;
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .services {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
    }

    .service-card {
      background: white;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      padding: 1.5rem;
      width: 300px;
      text-align: center;
      transition: 0.3s ease;
    }

    .service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .service-card i {
      font-size: 2rem;
      margin-bottom: 1rem;
      color: #1e40af;
    }

    footer {
      background: #111827;
      color: white;
      text-align: center;
      padding: 2rem;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }

      nav {
        margin-top: 1rem;
      }

      nav a {
        margin: 0 0.5rem;
      }

      .services {
        flex-direction: column;
        align-items: center;
      }
    }
  -->

</head>
<body>

  <header>
    <img src="image/logo-sedesenvolve.png" alt="SeDesenvolve Logo">
    <nav>
      <a href="#servicos">Serviços</a>
      <a href="#sobre">Sobre</a>
      <a href="#contato">Contato</a>
    </nav>
  </header>

  <section class="hero">
    <h2>Transformamos Ideias em Soluções Digitais</h2>
    <p>Sites modernos, sistemas personalizados e suporte profissional para sua empresa evoluir no digital.</p>
  </section>

  <section id="servicos">
    <h3 class="section-title">Nossos Serviços</h3>
    <div class="services">
      <div class="service-card">
        <i data-lucide="monitor-smartphone"></i>
        <h4>Criação de Sites</h4>
        <p>Sites responsivos, rápidos e com visual moderno sob medida para seu negócio.</p>
      </div>
      <div class="service-card">
        <i data-lucide="settings"></i>
        <h4>Desenvolvimento de Sistemas</h4>
        <p>Soluções web personalizadas para automatizar processos e aumentar produtividade.</p>
      </div>
      <div class="service-card">
        <i data-lucide="shield-check"></i>
        <h4>Suporte e Segurança</h4>
        <p>Hospedagem, monitoramento e proteção de dados para sua tranquilidade.</p>
      </div>
    </div>
  </section>

  <section id="sobre">
    <h3 class="section-title">Sobre a SeDesenvolve</h3>
    <p style="text-align: center; max-width: 700px; margin: 0 auto;">
      A SeDesenvolve nasceu com o propósito de oferecer soluções digitais de qualidade, acessíveis e modernas para empresas de todos os tamanhos. Combinamos criatividade, tecnologia e atendimento humano para gerar resultados reais.
    </p>
  </section>

  <section id="contato">
    <h3 class="section-title">Fale Conosco</h3>
    <p style="text-align: center; max-width: 600px; margin: 0 auto;">
      Precisa de um site, sistema ou consultoria? Envie um e-mail para <strong>contato@sedesenvolve.com</strong> ou fale direto no WhatsApp <strong>(99) 99999-9999</strong>.
    </p>
  </section>

  <footer>
    &copy; 2025 SeDesenvolve. Todos os direitos reservados.
  </footer>

  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
  <script>
    lucide.createIcons();
  </script>

</body>
</html>
