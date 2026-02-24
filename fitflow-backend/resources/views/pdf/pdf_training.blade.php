<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plano Personalizado de Treino & Nutrição</title>
  <meta name="description" content="Plano personalizado de treino e nutrição para transformação corporal">
  <link rel="stylesheet" href="{{ public_path('css/pdf.css') }}">
</head>

<body>

  <!-- ==================== PAGE 1: COVER ==================== -->
  <section class="pdf-page cover">
    <!-- Sidebar accent stripe -->
    <div class="cover-sidebar"></div>
    <div class="cover-sidebar-right"></div>

    <!-- Top accent bar -->
    <div class="cover-topbar">
      <div class="cover-topbar-inner">
        <span class="cover-topbar-text">HIGHFIT AI</span>
        <span class="cover-topbar-divider">|</span>
        <span class="cover-topbar-text">PLANO PREMIUM</span>
        <span class="cover-topbar-divider">|</span>
        <span class="cover-topbar-text">{{ now()->translatedFormat('Y') }}</span>
      </div>
    </div>

    <div class="cover-content">
      <!-- Badge Premium -->
      <div class="cover-badge">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z" />
        </svg>
        <span>Plano Premium Personalizado</span>
      </div>

      <!-- Título Principal -->
      <div class="cover-hero">
        <h1 class="cover-title-line1">PLANO</h1>
        <h1 class="cover-title-line2">PERSONALIZADO</h1>
        <div class="cover-title-accent">
          <div class="cover-title-line"></div>
          <span class="cover-title-de">DE</span>
          <div class="cover-title-line"></div>
        </div>
        <h2 class="cover-subtitle">TREINO <span class="cover-amp">&</span> NUTRIÇÃO</h2>
      </div>

      <!-- Divider decorativo -->
      <div class="cover-ornament">
        <div class="cover-ornament-wing left"></div>
        <div class="cover-ornament-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M14.4 14.4 9.6 9.6" />
            <path d="M18.657 21.485a2 2 0 1 1-2.829-2.828l-1.767 1.768a2 2 0 1 1-2.829-2.829l6.364-6.364a2 2 0 1 1 2.829 2.829l-1.768 1.767a2 2 0 1 1 2.828 2.829z" />
            <path d="m21.5 21.5-1.4-1.4" />
            <path d="M3.9 3.9 2.5 2.5" />
            <path d="M6.404 12.768a2 2 0 1 1-2.829-2.829l1.768-1.767a2 2 0 1 1-2.828-2.829l2.828-2.828a2 2 0 1 1 2.829 2.828l1.767-1.768a2 2 0 1 1 2.829 2.829z" />
          </svg>
        </div>
        <div class="cover-ornament-wing right"></div>
      </div>

      <!-- Card do Usuário -->
      <div class="cover-user-card">
        <p class="cover-user-label">Desenvolvido exclusivamente para</p>
        <p class="cover-user-name">{{$user->nome}}</p>
        <div class="cover-user-underline"></div>
      </div>

      <!-- 3 Features em colunas -->
      <div class="cover-features">
        <div class="cover-feature">
          <div class="cover-feature-icon" style="border-color: hsla(160, 84%, 39%, 0.5);">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: hsl(160, 84%, 39%);">
              <path d="M14.4 14.4 9.6 9.6" />
              <path d="M18.657 21.485a2 2 0 1 1-2.829-2.828l-1.767 1.768a2 2 0 1 1-2.829-2.829l6.364-6.364a2 2 0 1 1 2.829 2.829l-1.768 1.767a2 2 0 1 1 2.828 2.829z" />
              <path d="m21.5 21.5-1.4-1.4" />
              <path d="M3.9 3.9 2.5 2.5" />
              <path d="M6.404 12.768a2 2 0 1 1-2.829-2.829l1.768-1.767a2 2 0 1 1-2.828-2.829l2.828-2.828a2 2 0 1 1 2.829 2.828l1.767-1.768a2 2 0 1 1 2.829 2.829z" />
            </svg>
          </div>
          <span class="cover-feature-title">Treino</span>
          <span class="cover-feature-desc">Periodização científica</span>
        </div>

        <div class="cover-feature-divider"></div>

        <div class="cover-feature">
          <div class="cover-feature-icon" style="border-color: hsla(142, 71%, 45%, 0.5);">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: hsl(142, 71%, 45%);">
              <path d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 3-1-1.56-2.78-3-5-3a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z" />
              <path d="M10 2c1 .5 2 2 2 5" />
            </svg>
          </div>
          <span class="cover-feature-title">Nutrição</span>
          <span class="cover-feature-desc">Macros otimizados</span>
        </div>

        <div class="cover-feature-divider"></div>

        <div class="cover-feature">
          <div class="cover-feature-icon" style="border-color: hsla(38, 92%, 50%, 0.5);">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: hsl(38, 92%, 50%);">
              <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
              <polyline points="16 7 22 7 22 13" />
            </svg>
          </div>
          <span class="cover-feature-title">Evolução</span>
          <span class="cover-feature-desc">Resultados mensuráveis</span>
        </div>
      </div>

      <!-- Citação -->
      <div class="cover-quote">
        <span class="cover-quote-open">"</span>
        <p>Seu corpo é o reflexo das suas escolhas diárias. Cada treino, cada refeição, cada decisão te aproxima do seu objetivo.</p>
        <span class="cover-quote-close">"</span>
      </div>
    </div>

    <!-- Footer bar -->
    <div class="cover-footer">
      <div class="cover-footer-inner">
        <div class="cover-footer-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
            <line x1="16" x2="16" y1="2" y2="6" />
            <line x1="8" x2="8" y1="2" y2="6" />
            <line x1="3" x2="21" y1="10" y2="10" />
          </svg>
          <span>{{ now()->translatedFormat('d \\d\\e F \\d\\e Y') }}</span>
        </div>
        <div class="cover-footer-dot">◆</div>
        <div class="cover-footer-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10" />
            <polyline points="12 6 12 12 16 14" />
          </svg>
          <span>Programa de {{$user->prazoPlanejado}}</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PÁGINA 2: CONHECENDO O PROTOCOLO ==================== -->
  <section class="pdf-page">
    <!-- Header Premium com Gradiente -->
    <div class="protocol-header">
      <div class="protocol-badge">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 7v14" />
          <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z" />
        </svg>
        <span>Introdução ao Protocolo</span>
      </div>
      <h2 class="protocol-title">Conhecendo o Protocolo HighFIT AI</h2>
      <p class="protocol-subtitle">Um sistema completo baseado em ciência e inteligência artificial para sua transformação</p>
    </div>

    <!-- Por Que Funciona -->
    <div class="protocol-science">
      <h3>Por Que Este Protocolo Funciona</h3>
      <p>Desenvolvido com base em <strong>estudos de hipertrofia muscular e fisiologia do exercício</strong>, este programa maximiza os três mecanismos fundamentais do crescimento muscular: <span class="highlight-text">tensão mecânica</span>, <span class="highlight-text">dano muscular</span> e <span class="highlight-text">estresse metabólico</span>. A divisão inteligente garante recuperação adequada enquanto mantém frequência de treino ideal para adaptações superiores.</p>
    </div>

    <!-- Os 4 Pilares Científicos -->
    <div class="protocol-pillars-section">
      
      <div class="protocol-pillars-grid">
        <!-- Pilar 1 -->
        <div class="protocol-pillar-card accent">
          <div class="protocol-card-header">
            <div class="protocol-pillar-icon border">
              <svg width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M96 176C96 149.5 117.5 128 144 128C170.5 128 192 149.5 192 176L192 288L448 288L448 176C448 149.5 469.5 128 496 128C522.5 128 544 149.5 544 176L544 192L560 192C586.5 192 608 213.5 608 240L608 288C625.7 288 640 302.3 640 320C640 337.7 625.7 352 608 352L608 400C608 426.5 586.5 448 560 448L544 448L544 464C544 490.5 522.5 512 496 512C469.5 512 448 490.5 448 464L448 352L192 352L192 464C192 490.5 170.5 512 144 512C117.5 512 96 490.5 96 464L96 448L80 448C53.5 448 32 426.5 32 400L32 352C14.3 352 0 337.7 0 320C0 302.3 14.3 288 32 288L32 240C32 213.5 53.5 192 80 192L96 192L96 176z"/></svg>
            </div>
            <div class="protocol-pillar-highlight">
              Evita platôs e estagnação
            </div>
          </div>
          <h4>Sobrecarga Progressiva</h4>
          <p>Aumento gradual e sistemático de carga, volume ou intensidade. Seu corpo se adapta constantemente, exigindo estímulos crescentes para ganhos contínuos.</p>
        </div>

        <!-- Pilar 2 -->
        <div class="protocol-pillar-card primary">
          <div class="protocol-card-header">
            <div class="protocol-pillar-icon border">
              <svg width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M224 64C241.7 64 256 78.3 256 96L256 128L384 128L384 96C384 78.3 398.3 64 416 64C433.7 64 448 78.3 448 96L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 96C192 78.3 206.3 64 224 64zM160 304L160 336C160 344.8 167.2 352 176 352L208 352C216.8 352 224 344.8 224 336L224 304C224 295.2 216.8 288 208 288L176 288C167.2 288 160 295.2 160 304zM288 304L288 336C288 344.8 295.2 352 304 352L336 352C344.8 352 352 344.8 352 336L352 304C352 295.2 344.8 288 336 288L304 288C295.2 288 288 295.2 288 304zM432 288C423.2 288 416 295.2 416 304L416 336C416 344.8 423.2 352 432 352L464 352C472.8 352 480 344.8 480 336L480 304C480 295.2 472.8 288 464 288L432 288zM160 432L160 464C160 472.8 167.2 480 176 480L208 480C216.8 480 224 472.8 224 464L224 432C224 423.2 216.8 416 208 416L176 416C167.2 416 160 423.2 160 432zM304 416C295.2 416 288 423.2 288 432L288 464C288 472.8 295.2 480 304 480L336 480C344.8 480 352 472.8 352 464L352 432C352 423.2 344.8 416 336 416L304 416zM416 432L416 464C416 472.8 423.2 480 432 480L464 480C472.8 480 480 472.8 480 464L480 432C480 423.2 472.8 416 464 416L432 416C423.2 416 416 423.2 416 432z"/></svg>
            </div>
            <div class="protocol-pillar-highlight">
              Zona ideal de hipertrofia
            </div>
          </div>
          <h4>Volume Otimizado</h4>
          <p>10-20 séries semanais por grupo muscular. Balanceamento perfeito entre estímulo máximo e capacidade de recuperação do seu corpo.</p>
        </div>

        <!-- Pilar 3 -->
        <div class="protocol-pillar-card gold">
          <div class="protocol-card-header">
            <div class="protocol-pillar-icon border">
              <svg width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M160 96C142.3 96 128 110.3 128 128C128 145.7 142.3 160 160 160L178.7 160L73.4 265.4C60.9 277.9 60.9 298.2 73.4 310.7C85.9 323.2 106.2 323.2 118.7 310.7L224 205.3L224 224C224 241.7 238.3 256 256 256C273.7 256 288 241.7 288 224L288 128C288 110.3 273.7 96 256 96L160 96zM467.8 134.1C467.8 155.1 484.9 172.2 505.9 172.2C526.9 172.2 544 155.1 544 134.1C544 113.1 526.9 96 505.9 96C484.9 96 467.8 113.1 467.8 134.1zM343.7 258.2C343.7 279.2 360.8 296.3 381.8 296.3C402.8 296.3 419.9 279.2 419.9 258.2C419.9 237.2 402.8 220.1 381.8 220.1C360.8 220.1 343.7 237.2 343.7 258.2zM505.9 220.1C484.9 220.1 467.8 237.2 467.8 258.2C467.8 279.2 484.9 296.3 505.9 296.3C526.9 296.3 544 279.2 544 258.2C544 237.2 526.9 220.1 505.9 220.1zM220.2 381.8C220.2 402.8 237.3 419.9 258.3 419.9C279.3 419.9 296.4 402.8 296.4 381.8C296.4 360.8 279.3 343.7 258.3 343.7C237.3 343.7 220.2 360.8 220.2 381.8zM381.8 343.7C360.8 343.7 343.7 360.8 343.7 381.8C343.7 402.8 360.8 419.9 381.8 419.9C402.8 419.9 419.9 402.8 419.9 381.8C419.9 360.8 402.8 343.7 381.8 343.7zM467.9 381.8C467.9 402.8 485 419.9 506 419.9C527 419.9 544.1 402.8 544.1 381.8C544.1 360.8 527 343.7 506 343.7C485 343.7 467.9 360.8 467.9 381.8zM134.1 467.8C113.1 467.8 96 484.9 96 505.9C96 526.9 113.1 544 134.1 544C155.1 544 172.2 526.9 172.2 505.9C172.2 484.9 155.1 467.8 134.1 467.8zM220.2 505.9C220.2 526.9 237.3 544 258.3 544C279.3 544 296.4 526.9 296.4 505.9C296.4 484.9 279.3 467.8 258.3 467.8C237.3 467.8 220.2 484.9 220.2 505.9zM381.8 467.8C360.8 467.8 343.7 484.9 343.7 505.9C343.7 526.9 360.8 544 381.8 544C402.8 544 419.9 526.9 419.9 505.9C419.9 484.9 402.8 467.8 381.8 467.8zM467.9 505.9C467.9 526.9 485 544 506 544C527 544 544.1 526.9 544.1 505.9C544.1 484.9 527 467.8 506 467.8C485 467.8 467.9 484.9 467.9 505.9z"/></svg>
            </div>
            <div class="protocol-pillar-highlight">
              Maximiza síntese proteica
            </div>
          </div>
          <h4>Recuperação Estratégica</h4>
          <p>Dias de descanso e intervalos planejados cientificamente. O músculo cresce durante a recuperação, não durante o treino.</p>
        </div>

        <!-- Pilar 4 -->
        <div class="protocol-pillar-card purple">
          <div class="protocol-card-header">
            <div class="protocol-pillar-icon border">
              <svg width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M420.9 448C428.2 425.7 442.8 405.5 459.3 388.1C492 353.7 512 307.2 512 256C512 150 426 64 320 64C214 64 128 150 128 256C128 307.2 148 353.7 180.7 388.1C197.2 405.5 211.9 425.7 219.1 448L420.8 448zM416 496L224 496L224 512C224 556.2 259.8 592 304 592L336 592C380.2 592 416 556.2 416 512L416 496zM312 176C272.2 176 240 208.2 240 248C240 261.3 229.3 272 216 272C202.7 272 192 261.3 192 248C192 181.7 245.7 128 312 128C325.3 128 336 138.7 336 152C336 165.3 325.3 176 312 176z"/></svg>
            </div>
            <div class="protocol-pillar-highlight">
              Previne adaptação excessiva
            </div>
          </div>
          <h4>Variação Inteligente</h4>
          <p>Combinação de exercícios compostos e isolados, diferentes angulações e faixas de repetições para estímulo muscular completo.</p>
        </div>
      </div>
    </div>

    <!-- CTA Final -->
    <div class="protocol-cta border">
      <h3>
        Você Está Pronto?
        <svg height="28" width="28" fill="#16A34A" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z"/></svg>

      </h3> 
      <p>Nas próximas páginas, você encontrará seu programa completo de treino. Siga com disciplina, aplique os fundamentos e veja sua transformação acontecer.</p>
    </div>
  </section>

  <!-- ==================== PÁGINA 3: ESTRATÉGIA NUTRICIONAL ==================== -->
  <section class="pdf-page">
    <!-- Header Premium -->
    <div class="calorie-header-improved">
      <div class="calorie-badge-improved">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z" />
        </svg>
        <span>Estratégia Nutricional</span>
      </div>
      <h2 class="calorie-title-improved">Seu Plano Calórico Personalizado</h2>
      <p class="calorie-subtitle-improved">Cálculos científicos precisos para alcançar seus objetivos de forma saudável</p>
    </div>

    <!-- Card Hero com Informação Principal -->
    <div class="calorie-hero-card">
      <h3>Balanço Energético Calculado</h3>
      <p>{{ $data->estrategia_nutricional->descricao_balanco_energetico }}</p>
    </div>

    <!-- Grid de Cards de Calorias -->
    <div class="calorie-stats-grid">
      <!-- Card 1: Manutenção -->
      <div class="calorie-stat-card maintenance">
        <div class="calorie-stat-header">
          <div class="calorie-stat-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10" />
              <circle cx="12" cy="12" r="6" />
              <circle cx="12" cy="12" r="2" />
            </svg>
          </div>
          <div class="calorie-stat-info">
            <p class="calorie-stat-label">Gasto Diário</p>
            <p class="calorie-stat-sublabel">Manutenção (TDEE)</p>
          </div>
        </div>
        <div class="calorie-stat-value">
          <span class="calorie-number">{{ $data->estrategia_nutricional->gasto_diario_tdee }}</span>
          <span class="calorie-unit">kcal</span>
        </div>
      </div>

      <!-- Card 2: Meta (Destaque) -->
      <div class="calorie-stat-card target">
        <div class="calorie-stat-header">
          <div class="calorie-stat-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z" />
            </svg>
          </div>
          <div class="calorie-stat-info">
            <p class="calorie-stat-label">Sua Meta</p>
            <p class="calorie-stat-sublabel">Para atingir resultados</p>
          </div>
        </div>
        <div class="calorie-stat-value featured">
          <span class="calorie-number">{{ $data->estrategia_nutricional->meta_calorica_diaria }}</span>
          <span class="calorie-unit">kcal</span>
        </div>
      </div>

      <!-- Card 3: Déficit -->
      <div class="calorie-stat-card deficit">
        <div class="calorie-stat-header">
          <div class="calorie-stat-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <polyline points="22 17 13.5 8.5 8.5 13.5 2 7" />
              <polyline points="16 17 22 17 22 11" />
            </svg>
          </div>
          <div class="calorie-stat-info">
            <p class="calorie-stat-label">{{ $data->estrategia_nutricional->tipo_objetivo_calorico }}</p>
            <p class="calorie-stat-sublabel">{{ $data->estrategia_nutricional->descricao_tipo_objetivo}}</p>
          </div>
        </div>
        <div class="calorie-stat-value">
          <span class="calorie-number">{{ $data->estrategia_nutricional->diferenca_calorica }}</span>
          <span class="calorie-unit">kcal</span>
        </div>
      </div>
    </div>

    <!-- Painel de Macronutrientes -->
    <div class="macros-section-improved">
      <div class="macros-section-header">
        <div class="macros-section-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2">
            <path d="M3 3v18h18" />
            <path d="m19 9-5 5-4-4-3 3" />
          </svg>
        </div>
        <div>
          <h3>Distribuição de Macronutrientes</h3>
          <p>Proporção otimizada para seus objetivos</p>
        </div>
      </div>

      @php
        $radius = 40;
        $circumference = 2 * pi() * $radius;
      @endphp

      <!-- Grid de Macros com Círculos -->
      <div class="macros-grid-improved">
        <!-- Proteínas -->
        <div class="macro-card-improved protein">
          <div class="macro-circle-improved">
            <svg class="macro-progress-ring" viewBox="0 0 100 100">
              <circle class="macro-progress-bg" cx="50" cy="50" r="{{ $radius }}" />
              <circle
                class="macro-progress-bar"
                cx="50"
                cy="50"
                r="{{ $radius }}"
                style="
                  stroke-dasharray: {{ $circumference }};
                  stroke-dashoffset: {{ circleProgressOffset($data->estrategia_nutricional->macronutrientes->proteina->percentual) }};
                "
              />
            </svg>
            <div class="macro-circle-content">
              <span class="macro-value">{{ $data->estrategia_nutricional->macronutrientes->proteina->gramas }}g</span>
              <span class="macro-percent">{{ $data->estrategia_nutricional->macronutrientes->proteina->percentual }}%</span>
            </div>
          </div>
          <div class="macro-label-improved">
            <svg width="22" height="22" fill="var(--primary)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path d="M224 329.2C224 337.7 220.6 345.8 214.6 351.8L187.8 378.6C175.5 390.9 155.3 390 138.4 385.8C133.8 384.7 128.9 384 123.9 384C90.8 384 63.9 410.9 63.9 444C63.9 477.1 90.8 504 123.9 504C130.2 504 135.9 509.7 135.9 516C135.9 549.1 162.8 576 195.9 576C229 576 255.9 549.1 255.9 516C255.9 511 255.3 506.2 254.1 501.5C249.9 484.6 248.9 464.4 261.3 452.1L288.1 425.3C294.1 419.3 302.2 415.9 310.7 415.9L399.9 415.9C406.2 415.9 412.3 415.6 418.4 414.9C430.3 413.7 434.8 399.4 429.2 388.9C420.7 373.1 415.9 355.1 415.9 335.9C415.9 274 466 223.9 527.9 223.9C535.9 223.9 543.6 224.7 551.1 226.3C562.8 228.8 575.2 220.4 573.1 208.7C558.4 126.4 486.4 63.9 399.9 63.9C302.7 63.9 223.9 142.7 223.9 239.9L223.9 329.1z"/>
            </svg>
            <span>Proteínas</span>
          </div>
          <p class="macro-description">Construção e reparo muscular</p>
        </div>

        <!-- Carboidratos -->
        <div class="macro-card-improved carbs">
          @php
            $carb = $data->estrategia_nutricional->macronutrientes->carboidrato;
          @endphp
          <div class="macro-circle-improved">
            <svg class="macro-progress-ring" viewBox="0 0 100 100">
              <circle
                class="macro-progress-bg"
                cx="50"
                cy="50"
                r="{{ $radius }}"
              />

              <circle
                class="macro-progress-bar"
                cx="50"
                cy="50"
                r="{{ $radius }}"
                style="
                  stroke-dasharray: {{ $circumference }};
                  stroke-dashoffset: {{ circleProgressOffset($carb->percentual, $radius) }};
                "
              />
            </svg>

            <div class="macro-circle-content">
              <span class="macro-value">{{ $carb->gramas }}g</span>
              <span class="macro-percent">{{ $carb->percentual }}%</span>
            </div>
          </div>

          <div class="macro-label-improved">
            <svg width="22" height="22" fill="var(--accent)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path d="M240 104C240 90.7 250.7 80 264 80L280 80C293.3 80 304 90.7 304 104C304 117.3 293.3 128 280 128L264 128C250.7 128 240 117.3 240 104zM264 152L280 152C293.3 152 304 162.7 304 176C304 189.3 293.3 200 280 200L264 200C250.7 200 240 189.3 240 176C240 162.7 250.7 152 264 152zM120 224L136 224C149.3 224 160 234.7 160 248C160 261.3 149.3 272 136 272L120 272C106.7 272 96 261.3 96 248C96 234.7 106.7 224 120 224zM64 347.4C64 332.3 76.3 320 91.4 320L548.5 320C563.6 320 575.9 332.3 575.9 347.4C575.9 417.9 531.5 478.1 469.2 501.5L467.5 516C465.5 532 451.9 544 435.7 544L204.2 544C188.1 544 174.4 532 172.4 516L170.6 501.6C108.4 478.1 64 417.9 64 347.4zM288 248C288 234.7 298.7 224 312 224L328 224C341.3 224 352 234.7 352 248C352 261.3 341.3 272 328 272L312 272C298.7 272 288 261.3 288 248zM192 248C192 234.7 202.7 224 216 224L232 224C245.3 224 256 234.7 256 248C256 261.3 245.3 272 232 272L216 272C202.7 272 192 261.3 192 248zM168 152L184 152C197.3 152 208 162.7 208 176C208 189.3 197.3 200 184 200L168 200C154.7 200 144 189.3 144 176C144 162.7 154.7 152 168 152zM384 248C384 234.7 394.7 224 408 224L424 224C437.3 224 448 234.7 448 248C448 261.3 437.3 272 424 272L408 272C394.7 272 384 261.3 384 248zM360 152L376 152C389.3 152 400 162.7 400 176C400 189.3 389.3 200 376 200L360 200C346.7 200 336 189.3 336 176C336 162.7 346.7 152 360 152zM480 248C480 234.7 490.7 224 504 224L520 224C533.3 224 544 234.7 544 248C544 261.3 533.3 272 520 272L504 272C490.7 272 480 261.3 480 248zM456 152L472 152C485.3 152 496 162.7 496 176C496 189.3 485.3 200 472 200L456 200C442.7 200 432 189.3 432 176C432 162.7 442.7 152 456 152zM360 80L376 80C389.3 80 400 90.7 400 104C400 117.3 389.3 128 376 128L360 128C346.7 128 336 117.3 336 104C336 90.7 346.7 80 360 80z"/>
            </svg>
            <span>Carboidratos</span>
          </div>

          <p class="macro-description">Energia para treinos intensos</p>
        </div>

        <!-- Gorduras -->
        <div class="macro-card-improved fat">
          @php
            $fat = $data->estrategia_nutricional->macronutrientes->gordura;
          @endphp
          <div class="macro-circle-improved">
            <svg class="macro-progress-ring" viewBox="0 0 100 100">
              <circle
                class="macro-progress-bg"
                cx="50"
                cy="50"
                r="{{ $radius }}"
              />

              <circle
                class="macro-progress-bar"
                cx="50"
                cy="50"
                r="{{ $radius }}"
                style="
                  stroke-dasharray: {{ $circumference }};
                  stroke-dashoffset: {{ circleProgressOffset($fat->percentual, $radius) }};
                "
              />
            </svg>

            <div class="macro-circle-content">
              <span class="macro-value">{{ $fat->gramas }}g</span>
              <span class="macro-percent">{{ $fat->percentual }}%</span>
            </div>
          </div>

          <div class="macro-label-improved">
            <svg width="22" height="22" fill="var(--gold)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path d="M589 160.7C603.4 175.1 601.4 199.1 584.7 210.9L520.1 256.6C476.4 287.5 440.9 328.5 416.7 376.2L391.4 426C366.3 475.3 329.3 517.5 283.6 548.6L209.5 599.2C196.4 608.1 178.8 606.5 167.7 595.3L122.8 550.4L209.3 483.9C251.6 451.4 286 409.6 309.9 361.9L334.4 312.8C358.9 263.8 396.2 222.2 442.3 192.6L551 122.7L589 160.7zM516.2 87.9L416.3 152.2C362.9 186.5 319.8 234.6 291.4 291.3L266.9 340.4C246.3 381.7 216.6 417.7 180 445.8L88.6 516.1L51.7 479.2C37.3 464.8 39.3 440.8 56 429L120.6 383.3C164.3 352.4 199.8 311.4 224 263.7L249.3 213.9C274.3 164.8 311.3 122.6 357 91.4L431.1 40.8C444.2 31.9 461.7 33.5 472.9 44.7L516.2 88z"/>
            </svg>
            <span>Gorduras</span>
          </div>

          <p class="macro-description">Saúde hormonal e saciedade</p>
        </div>
      </div>

      <!-- Resumo Total -->
      <div class="macros-summary-improved">
        <div class="macros-summary-left">
          <span class="macros-summary-item">
            <span class="macros-dot protein"></span>
            Prot: <strong>{{ $data->estrategia_nutricional->macronutrientes->proteina->gramas }}g</strong>
          </span>
          <span class="macros-summary-item">
            <span class="macros-dot carbs"></span>
            Carb: <strong>{{ $data->estrategia_nutricional->macronutrientes->carboidrato->gramas }}g</strong>
          </span>
          <span class="macros-summary-item">
            <span class="macros-dot fat"></span>
            Gord: <strong>{{ $data->estrategia_nutricional->macronutrientes->gordura->gramas }}g</strong>
          </span>
        </div>
        <div class="macros-summary-total">
          <span>Total Diário:</span>
          <strong>{{ $data->estrategia_nutricional->meta_calorica_diaria }} kcal</strong>
        </div>
      </div>
    </div>

    <!-- Benefícios da Distribuição - VERSÃO COMPACTA -->
    <div class="benefits-card-compact">
      <div class="benefits-header-compact">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2.5">
          <polyline points="20 6 9 17 4 12" />
        </svg>
        <h3>Por Que Esta Distribuição Funciona</h3>
      </div>
      
      <div class="benefits-grid-compact">
        <!-- Proteína -->
        <div class="benefit-card protein">
          <div class="benefit-header">
            <div class="benefit-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 640 640" fill="currentColor">
                <path d="M212.5 205.5C251.7 172.5 304.6 144 368 144C431.4 144 484.3 172.5 523.5 205.5C562.6 238.5 590.4 277.9 604.5 305.3C609.2 314.5 609.2 325.4 604.5 334.6C590.4 362 562.6 401.4 523.5 434.4C484.3 467.5 431.5 495.9 368 495.9C304.5 495.9 251.7 467.4 212.5 434.4C196.3 420.7 182 405.9 169.8 391.3L80.1 443.6C67.6 450.9 51.7 448.9 41.4 438.7C31.1 428.5 29 412.7 36.1 400.1L82 320L36.2 239.9C29 227.3 31.2 211.5 41.5 201.3C51.8 191.1 67.6 189.1 80.2 196.4L169.9 248.7C182.1 234.1 196.4 219.3 212.6 205.6zM480 320C480 302.3 465.7 288 448 288C430.3 288 416 302.3 416 320C416 337.7 430.3 352 448 352C465.7 352 480 337.7 480 320z"/>
              </svg>
            </div>
            <h4>{{ $data->estrategia_nutricional->beneficios_distribuicao_macros->proteina_titulo }}</h4>
          </div>
          <p>{{ $data->estrategia_nutricional->beneficios_distribuicao_macros->proteina_descricao }}</p>
        </div>

        <!-- Carboidratos -->
        <div class="benefit-card carbs">
          <div class="benefit-header">
            <div class="benefit-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2.5">
                <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z" />
              </svg>
            </div>
            <h4>{{ $data->estrategia_nutricional->beneficios_distribuicao_macros->carboidrato_titulo }}</h4>
          </div>
          <p>{{ $data->estrategia_nutricional->beneficios_distribuicao_macros->carboidrato_descricao }}</p>
        </div>

        <!-- Gorduras -->
        <div class="benefit-card fat">
          <div class="benefit-header">
            <div class="benefit-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2.5">
                <path d="M12 2v20" />
                <path d="m15 5 3 3-3 3" />
                <path d="m9 19-3-3 3-3" />
              </svg>
            </div>
            <h4>{{ $data->estrategia_nutricional->beneficios_distribuicao_macros->gordura_titulo }}</h4>
          </div>
          <p>{{ $data->estrategia_nutricional->beneficios_distribuicao_macros->gordura_descricao }}</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PAGE 4: PROGRESSION TIMELINE ==================== -->
  <section class="pdf-page">
    <!-- Header Premium -->
    <div class="progression-header-premium">
      <div class="progression-badge-premium">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2.5">
          <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
          <polyline points="16 7 22 7 22 13" />
        </svg>
        <span>Sua Jornada de Transformação</span>
      </div>
      <h2 class="progression-title-premium">Projeção de Resultados</h2>
      <p class="progression-subtitle-premium">Baseado em dados científicos e 85%+ de adesão ao protocolo</p>
    </div>

    <!-- Cards de Estatísticas Principais -->
    <div class="progression-stats-showcase">
      <div class="progression-stat-premium weight">
        @php
          $peso = $data->projecao_resultados->totais_esperados->variacao_peso_total_kg;
          $isNegative = str_starts_with($peso, '-');
        @endphp
        <div class="stat-premium-content">
          <span class="stat-premium-label">
            Evolução do Peso
          </span>
          <span class="stat-premium-value">
            <div class="stat-premium-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z" />
                  <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z" />
                  <path d="M7 21h10" />
                  <path d="M12 3v18" />
                  <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2" />
              </svg>
            </div>
            <div style="display: flex; flex-direction: column; gap: 7px">
              <span class="{{ $isNegative ? 'is-negative' : 'is-positive' }}">
                {{ $peso }}
              </span>
              <span class="stat-premium-detail">
                em {{ $data->projecao_resultados->prazo_escolhido }} dias
              </span>
            </div>
          </span>

          
        </div>
      </div>

      <div class="progression-stat-premium bodyfat">
        @php
          $peso = $data->projecao_resultados->totais_esperados->gordura_corporal;
          $isNegative = str_starts_with($peso, '-');
        @endphp
        <div class="stat-premium-content">
          <span class="stat-premium-label">Gordura Corporal</span>
          <span class="stat-premium-value">
            <div class="stat-premium-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <line x1="19" x2="5" y1="5" y2="19" />
                <circle cx="6.5" cy="6.5" r="2.5" />
                <circle cx="17.5" cy="17.5" r="2.5" />
              </svg>
            </div>
            <div style="display: flex; flex-direction:column; gap: 7px">
              <span class="{{ $isNegative ? 'is-negative' : 'is-positive' }}">
                {{ $peso }}
              </span>
              <span class="stat-premium-detail">Definição visível</span>
            </div>
          </span>
          
        </div>
      </div>

      <div class="progression-stat-premium muscle">
        @php
          $peso = $data->projecao_resultados->totais_esperados->ganho_massa_magra_kg;
          $isNegative = str_starts_with($peso, '-');
        @endphp
        
        <div class="stat-premium-content">
          <span class="stat-premium-label">Ganho Muscular</span>
          <span class="stat-premium-value">
            <div class="stat-premium-icon">
              <svg fill="currentColor" viewBox="-3.2 -3.2 38.40 38.40" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.00032" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>muscle-up</title> <path d="M5.717 15.31v0 0zM21.591 1.165c-2.541 2.457 0.407 6.347 2.721 3.551 2.378 4.452 0.418 8.203-5.017 4.913 0.32-0.668 0.504-1.442 0.504-2.269 0-2.511-1.693-4.547-3.782-4.547s-3.782 2.036-3.782 4.547c0 0.808 0.176 1.567 0.483 2.225-5.489 3.366-7.477-0.399-5.088-4.87 2.314 2.796 5.263-1.094 2.721-3.551-9.379 2.533-12.984 11.224-4.566 14.146h-0.068c0.040 0.005 0.079 0.012 0.118 0.017 0.562 0.192 1.177 0.359 1.847 0.497 3.136 1.234 5.404 4.22 5.588 7.137-2.091 1.441-3.711 3.921-3.711 3.921l1.64 2.414-2.572 1.465h5.114c-2.522-2.523-0.732-5.361 2.255-5.361 3.029 0 4.613 3.003 2.255 5.361h5.062l-2.519-1.465 1.64-2.414c0 0-1.646-2.52-3.761-3.955 0.2-2.906 2.462-5.874 5.586-7.103 0.67-0.138 1.285-0.305 1.847-0.497 0.039-0.006 0.079-0.012 0.118-0.017h-0.068c8.418-2.922 4.813-11.613-4.566-14.146z"></path> </g></svg>
            </div>
            <div style="display: flex; flex-direction: column; gap: 7px">
              <span class="{{ $isNegative ? 'is-negative' : 'is-positive' }}">
                {{ $peso }}
              </span>
              <span class="stat-premium-detail">Recomposição</span>
            </div>
          </span>
        </div>
      </div>
    </div>

    <!-- Timeline Visual das Fases -->
    <div class="progression-timeline-visual">
      <h3 class="timeline-visual-title">Evolução ao Longo do Tempo</h3>
      
      <div class="timeline-phases">
        <!-- Fase 1: 30 Dias -->
        <div class="timeline-phase phase-1">
          @if($data->projecao_resultados->prazo_escolhido == 30)
            <div class="phase-featured-badge">META!</div>
          @endif
          <div class="phase-header">
            <div class="phase-badge">FASE 1</div>
            <div class="phase-days">
              <span class="phase-days-number">30</span>
              <span class="phase-days-label">DIAS</span>
            </div>
          </div>
          
          <div class="phase-results">
            <div class="phase-result-item">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12.0002 6L11.0064 9M16.5 6C17.8978 6 18.5967 6 19.1481 6.22836C19.8831 6.53284 20.4672 7.11687 20.7716 7.85195C21 8.40326 21 9.10218 21 10.5V16.2C21 17.8802 21 18.7202 20.673 19.362C20.3854 19.9265 19.9265 20.3854 19.362 20.673C18.7202 21 17.8802 21 16.2 21H7.8C6.11984 21 5.27976 21 4.63803 20.673C4.07354 20.3854 3.6146 19.9265 3.32698 19.362C3 18.7202 3 17.8802 3 16.2V10.5C3 9.10218 3 8.40326 3.22836 7.85195C3.53284 7.11687 4.11687 6.53284 4.85195 6.22836C5.40326 6 6.10218 6 7.5 6M10 17H14M10.5415 3H13.4588C14.5397 3 15.0802 3 15.4802 3.18541C16.0136 3.43262 16.4112 3.90199 16.5674 4.46878C16.6845 4.89387 16.5957 5.42698 16.418 6.4932C16.2862 7.28376 16.2203 7.67904 16.0449 7.98778C15.8111 8.39944 15.4388 8.71481 14.9943 8.87778C14.661 9 14.2602 9 13.4588 9H10.5415C9.74006 9 9.33933 9 9.00596 8.87778C8.56146 8.71481 8.18918 8.39944 7.95536 7.98778C7.77999 7.67904 7.71411 7.28376 7.58235 6.4932C7.40465 5.42698 7.3158 4.89387 7.43291 4.46878C7.58906 3.90199 7.98669 3.43262 8.52009 3.18541C8.92014 3 9.46061 3 10.5415 3Z" stroke="#000000" stroke-width="1.848" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
              <div class="phase-result-info">
                <span class="result-label">Peso</span>
                <span class="result-value">
                  {{ $data->projecao_resultados->fase_30_dias->variacao_peso_kg }}
                </span>
              </div>
            </div>
            
            <div class="phase-result-item">
              <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M164.803 436.846q25.188 8.773 59.822 11.544V491h-59.822v-54.154zM292.843 491h59.822v-54.574q-26.763 8.826-59.822 11.702V491zM255.606 21c-27.066 0-49.011 28.547-49.011 63.757 0 35.211 21.945 63.758 49.011 63.758 27.067 0 49.012-28.547 49.012-63.758 0-35.21-21.945-63.757-49.012-63.757zm220.68 286.337c0-89.733-68.092-165.906-160.71-189.205a83.226 83.226 0 0 1-11.997 21.945c-12.32 16.036-29.806 25.188-47.962 25.188-18.156 0-35.683-9.194-47.962-25.188a83.184 83.184 0 0 1-11.933-21.777c-92.283 23.498-160.008 99.524-160.008 189.037H68.25a144.202 144.202 0 0 1 15.931-66.193 148.578 148.578 0 0 0-3.232 30.803c0 88.893 30.635 160.92 175.068 160.92 153.332 0 175.068-72.08 175.068-160.972a148.075 148.075 0 0 0-3.233-30.761 144.17 144.17 0 0 1 15.9 66.203h32.535z"></path></g></svg>
              <div class="phase-result-info">
                <span class="result-label">Gordura</span>
                <span class="result-value">
                  {{ $data->projecao_resultados->fase_30_dias->variacao_gordura_percentual }}
                </span>
              </div>
            </div>
            
            <div class="phase-result-item">
              <svg fill="currentColor" height="50" width="50" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.2 -51.2 614.40 614.40" xml:space="preserve" stroke="#000000" stroke-width="11.264"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="2.048"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M504.396,181.31c-60.018,0-104.368,38.809-116.491,50.638c-48.276-11.705-78.346,7.199-95.212,25.461 c-8.824,9.554-14.916,19.801-18.905,28.012c-2.417-3.758-5.416-7.89-9.048-12.021c-15.922-18.111-36.483-27.683-59.461-27.683 c-19.439,0-34.921,6.011-46.858,13.867l36.531-83.644l3.674,7.229c1.297,2.552,3.917,4.159,6.779,4.159h54.409h21.17h87.626 c4.199,0,7.604-3.405,7.604-7.604v-49.834c0-1.172-0.273-2.277-0.746-3.269l3.147-3.549c1.751-1.975,2.353-4.717,1.589-7.245 l-25.306-83.748c-0.969-3.209-3.927-5.405-7.279-5.405h-33.744H273.69h-17.157h-33.744h-40.186c-1.822,0-3.583,0.654-4.964,1.843 l-48.998,42.215c-0.759,0.655-1.382,1.452-1.831,2.347L0.809,323.895C0.277,324.953,0,326.123,0,327.308v62.444 c0,2.24,0.987,4.367,2.7,5.81c2.745,2.317,68.201,56.728,154.144,56.728c72.853,0,132.633-23.857,149.947-31.517l62.326,62.325 c1.425,1.427,3.36,2.227,5.376,2.227h129.902c4.199,0,7.604-3.405,7.604-7.604V188.914C512,184.715,508.595,181.31,504.396,181.31 z M361.009,172.119L361.009,172.119h-80.023h-13.566v-14.28h3.018h27.085h13.101h33.744c2.176,0,4.246-0.932,5.69-2.559 l10.951-12.35V172.119z M341.974,41.883l22.445,74.278l-23.472,26.471h-13.418l17.343-19.559c1.751-1.975,2.353-4.717,1.589-7.245 l-22.343-73.944H341.974z M308.23,41.883l22.445,74.278l-23.472,26.471h-9.68h-10.18l17.343-19.559 c1.752-1.975,2.353-4.717,1.59-7.245l-22.344-73.944H308.23z M377.642,470.118l-63.843-63.843 c-2.297-2.296-5.802-2.879-8.719-1.454c-0.66,0.322-66.961,32.261-148.238,32.261c-70.907,0-128.709-41.08-141.635-51.006v-56.967 L139.718,81.263l45.708-39.38h37.363h33.744h11.511l22.444,74.278l-23.472,26.471h-3.238h-32.582v-7.688 c0-7.647,6.22-13.867,13.867-13.867h12.362c2.527,0,4.888-1.255,6.302-3.349c1.414-2.094,1.695-4.753,0.751-7.097l-10.41-25.842 c-0.036-0.09-0.082-0.174-0.122-0.263c-0.011-0.024-0.022-0.049-0.033-0.072c-0.961-2.09-2.764-3.549-4.841-4.135 c-0.004-0.001-0.008-0.002-0.011-0.003c-0.223-0.063-0.449-0.116-0.678-0.158c-0.043-0.008-0.086-0.014-0.129-0.021 c-0.193-0.032-0.387-0.058-0.583-0.075c-0.075-0.007-0.15-0.01-0.226-0.015c-0.165-0.01-0.33-0.015-0.496-0.014 c-0.046,0-0.089-0.005-0.135-0.004c-1.685,0.044-27.537,0.022-44.504-0.002c-0.004,0-0.007,0-0.011,0 c-4.194,0-7.598,3.397-7.604,7.593c-0.006,4.199,3.393,7.609,7.593,7.615c2.78,0.004,19.39,0.027,31.636,0.027 c3.009,0,5.754-0.001,7.965-0.005l4.274,10.612h-1.101c-16.032,0-29.074,13.042-29.074,29.075v15.292 c0,4.199,3.405,7.604,7.604,7.604h28.619v14.28h-42.14l-8.86-17.43c-1.333-2.623-4.081-4.246-7.001-4.155 c-2.941,0.085-5.568,1.86-6.746,4.557l-61.49,140.791c-1.663,3.806,0.036,8.242,3.816,9.963c3.778,1.721,8.241,0.092,10.022-3.659 c0.196-0.413,20.106-41.261,65.468-41.261c44.66,0,61.662,43.43,62.358,45.262c1.156,3.088,4.168,5.088,7.463,4.931 c3.294-0.148,6.117-2.402,6.991-5.581c0.056-0.203,5.752-20.459,21.776-37.809c21.094-22.841,49.479-29.565,84.37-19.987 c2.746,0.754,5.681-0.089,7.608-2.184c0.433-0.47,42.212-45.148,100.948-48.801v273.361H377.642z"></path> </g> </g> </g></svg>  
              <div class="phase-result-info">
                <span class="result-label">Músculo</span>
                <span class="result-value maintain">
                  {{ $data->projecao_resultados->fase_30_dias->variacao_massa_magra_kg }}
                </span>
              </div>
            </div>
          </div>
          
          <div class="phase-description">
            <p>{{ $data->projecao_resultados->fase_30_dias->descricao_fase }}</p>
          </div>
        </div>

        @if($data->projecao_resultados->prazo_escolhido > 30)
          <!-- Seta -->
          <div class="timeline-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <path d="M5 12h14" />
              <path d="m12 5 7 7-7 7" />
            </svg>
          </div>

          <!-- Fase 2: 60 Dias -->
          <div class="timeline-phase phase-2">
            @if($data->projecao_resultados->prazo_escolhido == 60)
              <div class="phase-featured-badge">META!</div>
            @endif
            <div class="phase-header">
              <div class="phase-badge">FASE 2</div>
              <div class="phase-days">
                <span class="phase-days-number">60</span>
                <span class="phase-days-label">DIAS</span>
              </div>
            </div>
            
            <div class="phase-results">
              <div class="phase-result-item">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12.0002 6L11.0064 9M16.5 6C17.8978 6 18.5967 6 19.1481 6.22836C19.8831 6.53284 20.4672 7.11687 20.7716 7.85195C21 8.40326 21 9.10218 21 10.5V16.2C21 17.8802 21 18.7202 20.673 19.362C20.3854 19.9265 19.9265 20.3854 19.362 20.673C18.7202 21 17.8802 21 16.2 21H7.8C6.11984 21 5.27976 21 4.63803 20.673C4.07354 20.3854 3.6146 19.9265 3.32698 19.362C3 18.7202 3 17.8802 3 16.2V10.5C3 9.10218 3 8.40326 3.22836 7.85195C3.53284 7.11687 4.11687 6.53284 4.85195 6.22836C5.40326 6 6.10218 6 7.5 6M10 17H14M10.5415 3H13.4588C14.5397 3 15.0802 3 15.4802 3.18541C16.0136 3.43262 16.4112 3.90199 16.5674 4.46878C16.6845 4.89387 16.5957 5.42698 16.418 6.4932C16.2862 7.28376 16.2203 7.67904 16.0449 7.98778C15.8111 8.39944 15.4388 8.71481 14.9943 8.87778C14.661 9 14.2602 9 13.4588 9H10.5415C9.74006 9 9.33933 9 9.00596 8.87778C8.56146 8.71481 8.18918 8.39944 7.95536 7.98778C7.77999 7.67904 7.71411 7.28376 7.58235 6.4932C7.40465 5.42698 7.3158 4.89387 7.43291 4.46878C7.58906 3.90199 7.98669 3.43262 8.52009 3.18541C8.92014 3 9.46061 3 10.5415 3Z" stroke="#000000" stroke-width="1.848" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                <div class="phase-result-info">
                  <span class="result-label">Peso</span>
                  <span class="result-value">
                    {{ $data->projecao_resultados->fase_60_dias->variacao_peso_kg }}
                  </span>
                </div>
              </div>
              
              <div class="phase-result-item">
                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M164.803 436.846q25.188 8.773 59.822 11.544V491h-59.822v-54.154zM292.843 491h59.822v-54.574q-26.763 8.826-59.822 11.702V491zM255.606 21c-27.066 0-49.011 28.547-49.011 63.757 0 35.211 21.945 63.758 49.011 63.758 27.067 0 49.012-28.547 49.012-63.758 0-35.21-21.945-63.757-49.012-63.757zm220.68 286.337c0-89.733-68.092-165.906-160.71-189.205a83.226 83.226 0 0 1-11.997 21.945c-12.32 16.036-29.806 25.188-47.962 25.188-18.156 0-35.683-9.194-47.962-25.188a83.184 83.184 0 0 1-11.933-21.777c-92.283 23.498-160.008 99.524-160.008 189.037H68.25a144.202 144.202 0 0 1 15.931-66.193 148.578 148.578 0 0 0-3.232 30.803c0 88.893 30.635 160.92 175.068 160.92 153.332 0 175.068-72.08 175.068-160.972a148.075 148.075 0 0 0-3.233-30.761 144.17 144.17 0 0 1 15.9 66.203h32.535z"></path></g></svg>
                <div class="phase-result-info">
                  <span class="result-label">Gordura</span>
                  <span class="result-value">{{ $data->projecao_resultados->fase_60_dias->variacao_gordura_percentual }}</span>
                </div>
              </div>
              
              <div class="phase-result-item">
                <svg fill="currentColor" height="50" width="50" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.2 -51.2 614.40 614.40" xml:space="preserve" stroke="#000000" stroke-width="11.264"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="2.048"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M504.396,181.31c-60.018,0-104.368,38.809-116.491,50.638c-48.276-11.705-78.346,7.199-95.212,25.461 c-8.824,9.554-14.916,19.801-18.905,28.012c-2.417-3.758-5.416-7.89-9.048-12.021c-15.922-18.111-36.483-27.683-59.461-27.683 c-19.439,0-34.921,6.011-46.858,13.867l36.531-83.644l3.674,7.229c1.297,2.552,3.917,4.159,6.779,4.159h54.409h21.17h87.626 c4.199,0,7.604-3.405,7.604-7.604v-49.834c0-1.172-0.273-2.277-0.746-3.269l3.147-3.549c1.751-1.975,2.353-4.717,1.589-7.245 l-25.306-83.748c-0.969-3.209-3.927-5.405-7.279-5.405h-33.744H273.69h-17.157h-33.744h-40.186c-1.822,0-3.583,0.654-4.964,1.843 l-48.998,42.215c-0.759,0.655-1.382,1.452-1.831,2.347L0.809,323.895C0.277,324.953,0,326.123,0,327.308v62.444 c0,2.24,0.987,4.367,2.7,5.81c2.745,2.317,68.201,56.728,154.144,56.728c72.853,0,132.633-23.857,149.947-31.517l62.326,62.325 c1.425,1.427,3.36,2.227,5.376,2.227h129.902c4.199,0,7.604-3.405,7.604-7.604V188.914C512,184.715,508.595,181.31,504.396,181.31 z M361.009,172.119L361.009,172.119h-80.023h-13.566v-14.28h3.018h27.085h13.101h33.744c2.176,0,4.246-0.932,5.69-2.559 l10.951-12.35V172.119z M341.974,41.883l22.445,74.278l-23.472,26.471h-13.418l17.343-19.559c1.751-1.975,2.353-4.717,1.589-7.245 l-22.343-73.944H341.974z M308.23,41.883l22.445,74.278l-23.472,26.471h-9.68h-10.18l17.343-19.559 c1.752-1.975,2.353-4.717,1.59-7.245l-22.344-73.944H308.23z M377.642,470.118l-63.843-63.843 c-2.297-2.296-5.802-2.879-8.719-1.454c-0.66,0.322-66.961,32.261-148.238,32.261c-70.907,0-128.709-41.08-141.635-51.006v-56.967 L139.718,81.263l45.708-39.38h37.363h33.744h11.511l22.444,74.278l-23.472,26.471h-3.238h-32.582v-7.688 c0-7.647,6.22-13.867,13.867-13.867h12.362c2.527,0,4.888-1.255,6.302-3.349c1.414-2.094,1.695-4.753,0.751-7.097l-10.41-25.842 c-0.036-0.09-0.082-0.174-0.122-0.263c-0.011-0.024-0.022-0.049-0.033-0.072c-0.961-2.09-2.764-3.549-4.841-4.135 c-0.004-0.001-0.008-0.002-0.011-0.003c-0.223-0.063-0.449-0.116-0.678-0.158c-0.043-0.008-0.086-0.014-0.129-0.021 c-0.193-0.032-0.387-0.058-0.583-0.075c-0.075-0.007-0.15-0.01-0.226-0.015c-0.165-0.01-0.33-0.015-0.496-0.014 c-0.046,0-0.089-0.005-0.135-0.004c-1.685,0.044-27.537,0.022-44.504-0.002c-0.004,0-0.007,0-0.011,0 c-4.194,0-7.598,3.397-7.604,7.593c-0.006,4.199,3.393,7.609,7.593,7.615c2.78,0.004,19.39,0.027,31.636,0.027 c3.009,0,5.754-0.001,7.965-0.005l4.274,10.612h-1.101c-16.032,0-29.074,13.042-29.074,29.075v15.292 c0,4.199,3.405,7.604,7.604,7.604h28.619v14.28h-42.14l-8.86-17.43c-1.333-2.623-4.081-4.246-7.001-4.155 c-2.941,0.085-5.568,1.86-6.746,4.557l-61.49,140.791c-1.663,3.806,0.036,8.242,3.816,9.963c3.778,1.721,8.241,0.092,10.022-3.659 c0.196-0.413,20.106-41.261,65.468-41.261c44.66,0,61.662,43.43,62.358,45.262c1.156,3.088,4.168,5.088,7.463,4.931 c3.294-0.148,6.117-2.402,6.991-5.581c0.056-0.203,5.752-20.459,21.776-37.809c21.094-22.841,49.479-29.565,84.37-19.987 c2.746,0.754,5.681-0.089,7.608-2.184c0.433-0.47,42.212-45.148,100.948-48.801v273.361H377.642z"></path> </g> </g> </g></svg>  
                <div class="phase-result-info">
                  <span class="result-label">Músculo</span>
                  <span class="result-value maintain">{{ $data->projecao_resultados->fase_60_dias->variacao_massa_magra_kg }}</span>
                </div>
              </div>
            </div>
            
            <div class="phase-description">
              <p>
                {{ $data->projecao_resultados->fase_60_dias->descricao_fase }}
              </p>
            </div>
          </div>
        @endif

        @if ($data->projecao_resultados->prazo_escolhido > 60)
          <!-- Seta -->
          <div class="timeline-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <path d="M5 12h14" />
              <path d="m12 5 7 7-7 7" />
            </svg>
          </div>

          <!-- Fase 3: 90 Dias (DESTAQUE) -->
          <div class="timeline-phase phase-3 featured">
            <div class="phase-featured-badge">META!</div>
            <div class="phase-header">
              <div class="phase-badge">FASE 3</div>
              <div class="phase-days">
                <span class="phase-days-number">90</span>
                <span class="phase-days-label">DIAS</span>
              </div>
            </div>
            
            <div class="phase-results">
              <div class="phase-result-item">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12.0002 6L11.0064 9M16.5 6C17.8978 6 18.5967 6 19.1481 6.22836C19.8831 6.53284 20.4672 7.11687 20.7716 7.85195C21 8.40326 21 9.10218 21 10.5V16.2C21 17.8802 21 18.7202 20.673 19.362C20.3854 19.9265 19.9265 20.3854 19.362 20.673C18.7202 21 17.8802 21 16.2 21H7.8C6.11984 21 5.27976 21 4.63803 20.673C4.07354 20.3854 3.6146 19.9265 3.32698 19.362C3 18.7202 3 17.8802 3 16.2V10.5C3 9.10218 3 8.40326 3.22836 7.85195C3.53284 7.11687 4.11687 6.53284 4.85195 6.22836C5.40326 6 6.10218 6 7.5 6M10 17H14M10.5415 3H13.4588C14.5397 3 15.0802 3 15.4802 3.18541C16.0136 3.43262 16.4112 3.90199 16.5674 4.46878C16.6845 4.89387 16.5957 5.42698 16.418 6.4932C16.2862 7.28376 16.2203 7.67904 16.0449 7.98778C15.8111 8.39944 15.4388 8.71481 14.9943 8.87778C14.661 9 14.2602 9 13.4588 9H10.5415C9.74006 9 9.33933 9 9.00596 8.87778C8.56146 8.71481 8.18918 8.39944 7.95536 7.98778C7.77999 7.67904 7.71411 7.28376 7.58235 6.4932C7.40465 5.42698 7.3158 4.89387 7.43291 4.46878C7.58906 3.90199 7.98669 3.43262 8.52009 3.18541C8.92014 3 9.46061 3 10.5415 3Z" stroke="#000000" stroke-width="1.848" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                <div class="phase-result-info">
                  <span class="result-label">Peso</span>
                  <span class="result-value">
                    {{ $data->projecao_resultados->fase_90_dias->variacao_peso_kg }}
                  </span>
                </div>
              </div>
              
              <div class="phase-result-item">
                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M164.803 436.846q25.188 8.773 59.822 11.544V491h-59.822v-54.154zM292.843 491h59.822v-54.574q-26.763 8.826-59.822 11.702V491zM255.606 21c-27.066 0-49.011 28.547-49.011 63.757 0 35.211 21.945 63.758 49.011 63.758 27.067 0 49.012-28.547 49.012-63.758 0-35.21-21.945-63.757-49.012-63.757zm220.68 286.337c0-89.733-68.092-165.906-160.71-189.205a83.226 83.226 0 0 1-11.997 21.945c-12.32 16.036-29.806 25.188-47.962 25.188-18.156 0-35.683-9.194-47.962-25.188a83.184 83.184 0 0 1-11.933-21.777c-92.283 23.498-160.008 99.524-160.008 189.037H68.25a144.202 144.202 0 0 1 15.931-66.193 148.578 148.578 0 0 0-3.232 30.803c0 88.893 30.635 160.92 175.068 160.92 153.332 0 175.068-72.08 175.068-160.972a148.075 148.075 0 0 0-3.233-30.761 144.17 144.17 0 0 1 15.9 66.203h32.535z"></path></g></svg>
                <div class="phase-result-info">
                  <span class="result-label">Gordura</span>
                  <span class="result-value">
                    {{ $data->projecao_resultados->fase_90_dias->variacao_gordura_percentual }}
                  </span>
                </div>
              </div>
              
              <div class="phase-result-item">
                <svg fill="currentColor" height="50" width="50" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.2 -51.2 614.40 614.40" xml:space="preserve" stroke="#000000" stroke-width="11.264"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="2.048"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M504.396,181.31c-60.018,0-104.368,38.809-116.491,50.638c-48.276-11.705-78.346,7.199-95.212,25.461 c-8.824,9.554-14.916,19.801-18.905,28.012c-2.417-3.758-5.416-7.89-9.048-12.021c-15.922-18.111-36.483-27.683-59.461-27.683 c-19.439,0-34.921,6.011-46.858,13.867l36.531-83.644l3.674,7.229c1.297,2.552,3.917,4.159,6.779,4.159h54.409h21.17h87.626 c4.199,0,7.604-3.405,7.604-7.604v-49.834c0-1.172-0.273-2.277-0.746-3.269l3.147-3.549c1.751-1.975,2.353-4.717,1.589-7.245 l-25.306-83.748c-0.969-3.209-3.927-5.405-7.279-5.405h-33.744H273.69h-17.157h-33.744h-40.186c-1.822,0-3.583,0.654-4.964,1.843 l-48.998,42.215c-0.759,0.655-1.382,1.452-1.831,2.347L0.809,323.895C0.277,324.953,0,326.123,0,327.308v62.444 c0,2.24,0.987,4.367,2.7,5.81c2.745,2.317,68.201,56.728,154.144,56.728c72.853,0,132.633-23.857,149.947-31.517l62.326,62.325 c1.425,1.427,3.36,2.227,5.376,2.227h129.902c4.199,0,7.604-3.405,7.604-7.604V188.914C512,184.715,508.595,181.31,504.396,181.31 z M361.009,172.119L361.009,172.119h-80.023h-13.566v-14.28h3.018h27.085h13.101h33.744c2.176,0,4.246-0.932,5.69-2.559 l10.951-12.35V172.119z M341.974,41.883l22.445,74.278l-23.472,26.471h-13.418l17.343-19.559c1.751-1.975,2.353-4.717,1.589-7.245 l-22.343-73.944H341.974z M308.23,41.883l22.445,74.278l-23.472,26.471h-9.68h-10.18l17.343-19.559 c1.752-1.975,2.353-4.717,1.59-7.245l-22.344-73.944H308.23z M377.642,470.118l-63.843-63.843 c-2.297-2.296-5.802-2.879-8.719-1.454c-0.66,0.322-66.961,32.261-148.238,32.261c-70.907,0-128.709-41.08-141.635-51.006v-56.967 L139.718,81.263l45.708-39.38h37.363h33.744h11.511l22.444,74.278l-23.472,26.471h-3.238h-32.582v-7.688 c0-7.647,6.22-13.867,13.867-13.867h12.362c2.527,0,4.888-1.255,6.302-3.349c1.414-2.094,1.695-4.753,0.751-7.097l-10.41-25.842 c-0.036-0.09-0.082-0.174-0.122-0.263c-0.011-0.024-0.022-0.049-0.033-0.072c-0.961-2.09-2.764-3.549-4.841-4.135 c-0.004-0.001-0.008-0.002-0.011-0.003c-0.223-0.063-0.449-0.116-0.678-0.158c-0.043-0.008-0.086-0.014-0.129-0.021 c-0.193-0.032-0.387-0.058-0.583-0.075c-0.075-0.007-0.15-0.01-0.226-0.015c-0.165-0.01-0.33-0.015-0.496-0.014 c-0.046,0-0.089-0.005-0.135-0.004c-1.685,0.044-27.537,0.022-44.504-0.002c-0.004,0-0.007,0-0.011,0 c-4.194,0-7.598,3.397-7.604,7.593c-0.006,4.199,3.393,7.609,7.593,7.615c2.78,0.004,19.39,0.027,31.636,0.027 c3.009,0,5.754-0.001,7.965-0.005l4.274,10.612h-1.101c-16.032,0-29.074,13.042-29.074,29.075v15.292 c0,4.199,3.405,7.604,7.604,7.604h28.619v14.28h-42.14l-8.86-17.43c-1.333-2.623-4.081-4.246-7.001-4.155 c-2.941,0.085-5.568,1.86-6.746,4.557l-61.49,140.791c-1.663,3.806,0.036,8.242,3.816,9.963c3.778,1.721,8.241,0.092,10.022-3.659 c0.196-0.413,20.106-41.261,65.468-41.261c44.66,0,61.662,43.43,62.358,45.262c1.156,3.088,4.168,5.088,7.463,4.931 c3.294-0.148,6.117-2.402,6.991-5.581c0.056-0.203,5.752-20.459,21.776-37.809c21.094-22.841,49.479-29.565,84.37-19.987 c2.746,0.754,5.681-0.089,7.608-2.184c0.433-0.47,42.212-45.148,100.948-48.801v273.361H377.642z"></path> </g> </g> </g></svg>  
                <div class="phase-result-info">
                  <span class="result-label">Músculo</span>
                  <span class="result-value gain">
                    {{ $data->projecao_resultados->fase_90_dias->variacao_massa_magra_kg }}
                  </span>
                </div>
              </div>
            </div>
            
            <div class="phase-description">
              <p>{{ $data->projecao_resultados->fase_90_dias->descricao_fase }}</p>
            </div>
          </div>
        @endif
      </div>
    </div>

    <!-- Fatores de Sucesso vs Fatores Limitantes -->
    <div class="progression-factors-grid">
      <div class="progression-factor-card success">
        <div class="factor-card-header">
          <div class="factor-icon success">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2.5">
              <polyline points="20 6 9 17 4 12" />
            </svg>
          </div>
          <h4>Fatores que Aceleram</h4>
        </div>
        <ul class="factor-list">
          <li>Adesão >90% ao plano nutricional e treino</li>
          <li>Sono consistente de 8h+ por noite</li>
          <li>Hidratação adequada (2.5L+ diário)</li>
          <li>Baixo nível de estresse e recuperação</li>
        </ul>
      </div>

      <div class="progression-factor-card warning">
        <div class="factor-card-header">
          <div class="factor-icon warning">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2.5">
              <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3" />
              <path d="M12 9v4" />
              <path d="M12 17h.01" />
            </svg>
          </div>
          <h4>Fatores que Limitam</h4>
        </div>
        <ul class="factor-list">
          <li>Adesão <70% com frequentes "off days"</li>
          <li>Sono irregular ou menos de 6h</li>
          <li>Estresse crônico não gerenciado</li>
          <li>Consumo excessivo de álcool</li>
        </ul>
      </div>
    </div>

    <!-- Nota Final -->
    <div class="progression-disclaimer">
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2">
        <circle cx="12" cy="12" r="10" />
        <path d="M12 16v-4" />
        <path d="M12 8h.01" />
      </svg>
      <p><strong>Importante:</strong> Resultados individuais variam conforme genética, histórico de treino e adesão. Ajustes mensais serão feitos com base no seu progresso real.</p>
    </div>
  </section>

  <!-- ==================== PAGE 5: WORKOUT OVERVIEW ==================== -->
  <section class="pdf-page">
      <!-- Header Premium -->
      <div class="treino-header">
        <div class="treino-badge">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M14.4 14.4 9.6 9.6"/>
            <path d="M18.657 21.485a2 2 0 1 1-2.829-2.828l-1.767 1.768a2 2 0 1 1-2.829-2.829l6.364-6.364a2 2 0 1 1 2.829 2.829l-1.768 1.767a2 2 0 1 1 2.828 2.829z"/>
          </svg>
          <span>Programa de Treinamento</span>
        </div>
        <h2 class="treino-title">{{$data->programa_treino->titulo_treino}}</h2>
        <p class="treino-subtitle">Divisão cientificamente otimizada para hipertrofia e ganho de força</p>
      </div>

      <!-- Hero Card -->
      <div class="treino-hero">
        <h3>Por Que o {{$data->programa_treino->modelo_divisao}}?</h3>
        <p>{!! $data->programa_treino->descricao_por_que_funciona !!}</p>
      </div>

      <!-- Overview Cards -->
      <div class="treino-overview-grid">
        <div class="treino-overview-card">
          <div class="treino-overview-icon blue">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m17 2 4 4-4 4"/><path d="M3 11v-1a4 4 0 0 1 4-4h14"/><path d="m7 22-4-4 4-4"/><path d="M21 13v1a4 4 0 0 1-4 4H3"/></svg>
          </div>
          <div class="treino-overview-label">Modelo</div>
          <div class="treino-overview-value">
            {{ $data->programa_treino->modelo_divisao }}
          </div>
        </div>
        <div class="treino-overview-card">
          <div class="treino-overview-icon green">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
          </div>
          <div class="treino-overview-label">Frequência</div>
          <div class="treino-overview-value">{{ $data->programa_treino->frequencia_semanal }}x/semana</div>
        </div>
        <div class="treino-overview-card">
          <div class="treino-overview-icon gold">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <div class="treino-overview-label">Duração</div>
          <div class="treino-overview-value">{{ $data->programa_treino->duracao_sessao_minutos }} min</div>
        </div>
        <div class="treino-overview-card">
          <div class="treino-overview-icon red">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>
          </div>
          <div class="treino-overview-label">Intensidade</div>
          <div class="treino-overview-value">{{ $data->programa_treino->nivel_intensidade }}</div>
        </div>
      </div>

      <!-- Weekly Schedule -->
      <div class="treino-schedule-section">
        <div class="treino-section-title">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
          Sugestão de Divisão Semanal
        </div>
        <div class="treino-schedule-grid">

          @foreach ($data->programa_treino->calendario_semanal as $treino)
            @php
                $class = $treino->descanso ? 'rest' : 'treino';
            @endphp
            <div class="treino-day {{ $class }}">
              @if($treino->cardio)
                <div class="treino-day-badge">
                  <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" viewBox="0 0 640 640">
                    <path d="M96 176C96 149.5 117.5 128 144 128C170.5 128 192 149.5 192 176L192 288L448 288L448 176C448 149.5 469.5 128 496 128C522.5 128 544 149.5 544 176L544 192L560 192C586.5 192 608 213.5 608 240L608 288C625.7 288 640 302.3 640 320C640 337.7 625.7 352 608 352L608 400C608 426.5 586.5 448 560 448L544 448L544 464C544 490.5 522.5 512 496 512C469.5 512 448 490.5 448 464L448 352L192 352L192 464C192 490.5 170.5 512 144 512C117.5 512 96 490.5 96 464L96 448L80 448C53.5 448 32 426.5 32 400L32 352C14.3 352 0 337.7 0 320C0 302.3 14.3 288 32 288L32 240C32 213.5 53.5 192 80 192L96 192L96 176z"/>
                  </svg>
                  <span>CARDIO</span>
                </div>
              @endif
              
              @switch(true)
                  @case($treino->descanso)
                      <div class="treino-day-icon"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg></div>
                      @break
                  @case($treino->treinar)
                      <div class="treino-day-icon"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 640 640"><path d="M96 176C96 149.5 117.5 128 144 128C170.5 128 192 149.5 192 176L192 288L448 288L448 176C448 149.5 469.5 128 496 128C522.5 128 544 149.5 544 176L544 192L560 192C586.5 192 608 213.5 608 240L608 288C625.7 288 640 302.3 640 320C640 337.7 625.7 352 608 352L608 400C608 426.5 586.5 448 560 448L544 448L544 464C544 490.5 522.5 512 496 512C469.5 512 448 490.5 448 464L448 352L192 352L192 464C192 490.5 170.5 512 144 512C117.5 512 96 490.5 96 464L96 448L80 448C53.5 448 32 426.5 32 400L32 352C14.3 352 0 337.7 0 320C0 302.3 14.3 288 32 288L32 240C32 213.5 53.5 192 80 192L96 192L96 176z"/></svg></div>
                      @break
              @endswitch

              <span class="treino-day-label">{{ $treino->dia_semana }}</span>
              <span class="treino-day-workout">{{ $treino->tipo_treino }}</span>
              <span class="treino-day-desc">{{ $treino->descricao_curta }}</span>
            </div>
          @endforeach
        </div>
      </div>

      <!-- Tips Grid -->
      <div class="treino-tips-grid">
          <div class="treino-tip">
            <div class="treino-tip-icon green">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"/></svg>
            </div>
            <div>
              <h4>Aquecimento Essencial</h4>
              <p>5-10 min de aquecimento específico antes de cada treino. Séries progressivas no primeiro exercício.</p>
            </div>
          </div>
          <div class="treino-tip">
            <div class="treino-tip-icon blue">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M320 576C214 576 128 490 128 384C128 292.8 258.2 109.9 294.6 60.5C300.5 52.5 309.8 48 319.8 48L320.2 48C330.2 48 339.5 52.5 345.4 60.5C381.8 109.9 512 292.8 512 384C512 490 426 576 320 576zM240 376C240 362.7 229.3 352 216 352C202.7 352 192 362.7 192 376C192 451.1 252.9 512 328 512C341.3 512 352 501.3 352 488C352 474.7 341.3 464 328 464C279.4 464 240 424.6 240 376z"/></svg>
            </div>
            <div>
              <h4>Hidratação no Treino</h4>
              <p>Beba 200-400ml de água durante a sessão. Desidratação de 2% reduz performance em até 20%.</p>
            </div>
          </div>
          <div class="treino-tip">
            <div class="treino-tip-icon gold">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>
            </div>
            <div>
              <h4>Descanso é Treino</h4>
              <p>O músculo cresce durante o descanso. Respeite os dias off e durma 7-9 horas por noite.</p>
            </div>
          </div>
          <div class="treino-tip">
            <div class="treino-tip-icon purple">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z"/></svg>
            </div>
            <div>
              <h4>Registre Seus Treinos</h4>
              <p>Anote cargas e repetições. Isso garante progressão consistente e evita estagnação.</p>
            </div>
          </div>
      </div>

      <!-- Progression -->
      <div class="treino-progression">
        <div class="treino-progression-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
          <h4>Como Progredir Semana a Semana</h4>
        </div>
        <p>Aumente a carga em <strong>2-5%</strong> quando completar todas as séries com boa forma na faixa de repetições máxima. Se não conseguir, mantenha a carga e foque na qualidade. A progressão é o que separa resultados medianos de resultados extraordinários.</p>
      </div>

      <!-- Legend -->
      <div class="treino-legend">
        <div class="treino-legend-items">
          <div class="treino-legend-item">
            <div class="treino-legend-dot treino"></div>
            <span>Dia de Treino</span>
          </div>
          <div class="treino-legend-item">
            <div class="treino-legend-dot cardio"></div>
            <span>Cardio</span>
          </div>
          <div class="treino-legend-item">
            <div class="treino-legend-dot rest"></div>
            <span>Descanso</span>
          </div>
        </div>
      </div>
  </section>

  <!-- ==================== PAGE 6: WORKOUT ==================== -->
  @foreach($data->programa_treino->treinos as $treino)
    <section class="pdf-page">
      <div class="workout-card">
        <div class="workout-card-header upper">
          <div class="workout-card-header-row">
            <div class="workout-card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 640 640"><path d="M96 176C96 149.5 117.5 128 144 128C170.5 128 192 149.5 192 176L192 288L448 288L448 176C448 149.5 469.5 128 496 128C522.5 128 544 149.5 544 176L544 192L560 192C586.5 192 608 213.5 608 240L608 288C625.7 288 640 302.3 640 320C640 337.7 625.7 352 608 352L608 400C608 426.5 586.5 448 560 448L544 448L544 464C544 490.5 522.5 512 496 512C469.5 512 448 490.5 448 464L448 352L192 352L192 464C192 490.5 170.5 512 144 512C117.5 512 96 490.5 96 464L96 448L80 448C53.5 448 32 426.5 32 400L32 352C14.3 352 0 337.7 0 320C0 302.3 14.3 288 32 288L32 240C32 213.5 53.5 192 80 192L96 192L96 176z"/></svg>
            </div>
            <div class="workout-card-info">
              <h3 class="workout-card-title">{{ $treino->nome_treino }}</h3>
              <p class="workout-card-subtitle">{{ $treino->foco_principal }}</p>
            </div>
            <div class="workout-card-count">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
              <span>{{$treino->total_exercicios}} exercícios</span>
            </div>
          </div>
          <div class="workout-card-badges">
            @foreach($treino->grupos_musculares as $musculo)
              <span class="workout-card-badge">{{ $musculo }}</span>
            @endforeach
          </div>
        </div>

        <table class="exercise-table">
          <colgroup>
            <col style="width: 2.5rem">       <!-- # -->
            <col style="width: auto">          <!-- Exercício (cresce livremente) -->
            <col style="width: 4rem">          <!-- Séries -->
            <col style="width: 5rem">          <!-- Reps -->
            <col style="width: 5rem">        <!-- Descanso -->
            <col style="width: 4.5rem">        <!-- RPE -->
          </colgroup>
          <thead>
            <tr>
              <th>#</th>
              <th>Exercício</th>
              <th class="center">Séries</th>
              <th class="center">Reps</th>
              <th class="center">Descanso</th>
              <th class="center">RPE</th>
            </tr>
          </thead>
          <tbody>
            @foreach($treino->exercicios as $index => $exercicio)
              <tr>
                <td><span class="exercise-number upper">{{ $index + 1 }}</span></td>
                <td>
                  <span class="muscle-badge upper">{{ $exercicio->musculo_alvo }}</span>
                  <span class="exercise-name">
                    {{ $exercicio->nome }}
                  </span>
                  <div class="exercise-tip">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M420.9 448C428.2 425.7 442.8 405.5 459.3 388.1C492 353.7 512 307.2 512 256C512 150 426 64 320 64C214 64 128 150 128 256C128 307.2 148 353.7 180.7 388.1C197.2 405.5 211.9 425.7 219.1 448L420.8 448zM416 496L224 496L224 512C224 556.2 259.8 592 304 592L336 592C380.2 592 416 556.2 416 512L416 496zM312 176C272.2 176 240 208.2 240 248C240 261.3 229.3 272 216 272C202.7 272 192 261.3 192 248C192 181.7 245.7 128 312 128C325.3 128 336 138.7 336 152C336 165.3 325.3 176 312 176z"/></svg>
                    <span>{{ $exercicio->dica_tecnica }}</span>
                  </div>
                </td>
                <td class="center"><span class="exercise-sets">{{ $exercicio->series }}</span></td>
                <td class="center"><span class="exercise-reps">{{ $exercicio->repeticoes }}</span></td>
                <td class="center"><span class="exercise-rest">{{ $exercicio->descanso_segundos }}s</span></td>
                <td class="center">
                    <span class="rpe-badge 
                        {{ 
                            $exercicio->rpe <= 7 ? 'low' : 
                            ($exercicio->rpe < 8 ? 'medium' : 'high') 
                        }}">
                        {{ $exercicio->rpe }}
                    </span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

        <div class="workout-card-footer upper">
          <div class="workout-card-footer-content">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/>
              <polyline points="16 7 22 7 22 13"/>
            </svg>
            <div>
              <span class="progression-label">Progressão: </span>
              <span class="progression-text">{{ $treino->nota_progressao }}</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endforeach

  <!-- ==================== PAGE 8: DIET SECTION ==================== -->
  <section class="pdf-page">
      <div class="nutri-header">
        <div class="nutri-badge">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 3-1-1.56-2.78-3-5-3a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z"/><path d="M10 2c1 .5 2 2 2 5"/></svg>
          <span>Plano Nutricional</span>
        </div>
        <h2 class="nutri-title">Sua Estratégia Alimentar</h2>
        <p class="nutri-subtitle">{{$data->plano_alimentar->descricao_dieta}}</p>
      </div>

      <div class="nutri-hero">
        <h3>Conceito do Plano: {{$data->plano_alimentar->conceito_plano}}</h3>
        <p>{{$data->plano_alimentar->descricao_conceito}}</p>
      </div>

      <div class="nutri-objective">
        <div class="nutri-objective-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
        </div>
        <div>
          <h4>{{$data->plano_alimentar->titulo_explicacao}}</h4>
          <p>{{$data->plano_alimentar->descricao_explicacao}}</p>
        </div>
        <div class="nutri-objective-badges">
          <span class="nutri-obj-badge">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 3-1-1.56-2.78-3-5-3a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z"/><path d="M10 2c1 .5 2 2 2 5"/></svg>
            {{$data->plano_alimentar->total_refeicoes}} refeições/dia
          </span>
          <span class="nutri-obj-badge">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 
            Horários fixos
          </span>
        </div>
      </div>

      <div class="nutri-pillars-grid">
        <div class="nutri-pillar">
          <div class="nutri-pillar-icon protein">
            <svg viewBox="0 0 512 512" width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="currentColor" d="M257.375 20.313c-13.418 0-26.07 7.685-35.938 21.75-9.868 14.064-16.343 34.268-16.343 56.75 0 22.48 6.475 42.654 16.344 56.718 9.868 14.066 22.52 21.75 35.937 21.75 13.418 0 26.038-7.684 35.906-21.75 9.87-14.063 16.376-34.236 16.376-56.718 0-22.48-6.506-42.685-16.375-56.75-9.867-14.064-22.487-21.75-35.905-21.75zm-150.25 43.062c-20.305.574-23.996 13.892-31.78 29.03-23.298 45.304-55.564 164.75-55.564 164.75l160.47-5.436 29.125 137.593-22.78 106.03h149.093l-22.282-106 24.25-137.5 157.53 5.313c.002 0-32.264-119.447-55.56-164.75-7.787-15.14-11.477-28.457-31.782-29.03-17.898 0-32.406 15.552-32.406 34.718 0 19.166 14.508 34.72 32.406 34.72 3.728 0 7.258-.884 10.594-2.126l7.937 74.406L309.437 165c-.285.42-.552.867-.843 1.28-12.436 17.724-30.604 29.69-51.22 29.69-20.614 0-38.782-11.966-51.218-29.69-.277-.395-.54-.816-.812-1.218l-116.75 40.032 7.937-74.406c3.337 1.242 6.867 2.125 10.595 2.125 17.898 0 32.406-15.553 32.406-34.72 0-19.165-14.507-34.718-32.405-34.718z"></path></g></svg>
          </div>
          <h4>{{$data->plano_alimentar->proteina_titulo}}</h4>
          <p>{{$data->plano_alimentar->proteina_descricao}}</p>
        </div>
        <div class="nutri-pillar">
          <div class="nutri-pillar-icon carbs">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>
          </div>
          <h4>{{$data->plano_alimentar->carbo_titulo}}</h4>
          <p>{{$data->plano_alimentar->carbo_descricao}}</p>
        </div>
        <div class="nutri-pillar">
          <div class="nutri-pillar-icon fat">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20"/><path d="m15 5 3 3-3 3"/><path d="m9 19-3-3 3-3"/></svg>
          </div>
          <h4>{{$data->plano_alimentar->gordura_titulo}}</h4>
          <p>{{$data->plano_alimentar->gordura_descricao}}</p>
        </div>
        <div class="nutri-pillar">
          <div class="nutri-pillar-icon timing">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <h4>Timing Nutricional</h4>
          <p>Refeições programadas para otimizar energia e recuperação</p>
        </div>
      </div>

      <div class="nutri-macros-grid">
        <div class="nutri-macro-card protein">
          
          <span class="nutri-macro-value">
            <svg height="15" width="15" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="currentColor"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="st0" d="M110.26,202.977c-4.636-3.246-10.289-5.311-16.284-5.303c-6.003-0.008-11.664,2.057-16.3,5.303 c-6.979,4.912-12.054,12.192-15.584,20.725c-3.514,8.548-5.433,18.464-5.45,29.061c0.032,14.128,3.416,27.036,9.516,37.13 c3.058,5.035,6.849,9.395,11.517,12.648c4.636,3.254,10.297,5.327,16.3,5.312c5.995,0.016,11.648-2.058,16.284-5.312 c6.996-4.888,12.063-12.192,15.584-20.708c3.514-8.549,5.45-18.48,5.45-29.07c-0.024-14.128-3.4-27.045-9.5-37.13 C118.719,210.597,114.93,206.23,110.26,202.977z M105.185,279.791c-1.936,3.181-4.083,5.45-6.018,6.8 c-1.968,1.334-3.571,1.806-5.19,1.806c-1.627,0-3.229-0.472-5.189-1.806c-2.928-1.992-6.296-6.198-8.703-12.16 c-2.457-5.929-4.002-13.478-3.986-21.668c-0.033-10.923,2.774-20.708,6.654-27.036c1.936-3.156,4.083-5.441,6.027-6.783 c1.968-1.35,3.57-1.814,5.197-1.83c1.619,0.016,3.222,0.48,5.19,1.83c2.912,1.976,6.279,6.189,8.703,12.144 c2.44,5.945,3.986,13.486,3.986,21.676C111.879,263.686,109.073,273.455,105.185,279.791z"></path> <path class="st0" d="M512,223.221c0-17.105-6.963-32.729-18.204-43.93c-11.176-11.208-26.808-18.203-43.922-18.187 c-16.674-0.016-31.949,6.646-43.044,17.382c-7.499,7.223-13.127,16.39-16.25,26.662h-21.994c-1.464-1.521-3.124-3.277-4.88-5.164 c-3.92-4.23-8.247-9.11-10.655-12.233c-12.623-16.284-24.328-31.339-37.334-44.947c-19.44-20.432-42.279-37.488-73.562-48.567 c-31.298-11.118-70.502-16.634-124.34-16.65c-5.726,0-11.623,0.065-17.706,0.195v0.016C84.298,77.856,69.576,84.2,57.432,94.155 c-9.239,7.516-17.284,17.089-24.279,28.183C22.66,138.997,14.47,159.185,8.784,181.821C3.123,204.473,0,229.549,0,256 c0.041,47.037,9.761,89.747,26.508,122.046c8.402,16.146,18.618,29.769,30.924,39.823c12.16,9.939,26.882,16.291,42.702,16.356 c6.385,0.13,12.558,0.187,18.553,0.187c37.936,0,68.396-2.481,93.814-7.434c19.066-3.726,35.292-8.858,49.477-15.438 c21.302-9.826,37.765-22.921,51.837-37.871c13.949-14.794,25.784-31.249,38.992-49.062l16.072-17.732h21.701 c3.123,10.273,8.751,19.44,16.25,26.67c11.095,10.728,26.37,17.382,43.044,17.382c17.113,0,32.746-6.987,43.922-18.195 c11.241-11.2,18.204-26.816,18.204-43.93c0-12.022-3.514-23.262-9.468-32.788C508.486,246.492,512,235.243,512,223.221z M127.292,396.819c-2.863,2.131-5.726,3.758-8.573,5.19c-0.016,0-0.024,0-0.032,0c-5.774,0-11.737-0.065-17.91-0.171l-0.162-0.025 h-0.162c-7.32-0.016-14.641-2.709-22.563-9.085c-5.888-4.774-11.843-11.64-17.316-20.334c-8.24-13.054-15.381-30.225-20.351-50.079 c-4.969-19.87-7.816-42.417-7.816-66.314c-0.049-42.442,9.094-80.743,22.855-107.081c6.832-13.176,14.771-23.286,22.628-29.638 c7.922-6.386,15.243-9.061,22.563-9.093h0.179h0.163c5.856-0.131,11.534-0.188,17.023-0.188c0.309,0,0.61,0.008,0.92,0.008 c2.838,1.424,5.694,3.066,8.556,5.189c13.534,9.988,26.613,28.102,36,52.365c9.435,24.239,15.275,54.512,15.258,88.438 c0.032,45.256-10.411,83.98-25.759,110.585C145.138,379.908,136.305,390.141,127.292,396.819z M347.666,276.887 c-3.4,6.515-8.459,13.9-15.421,22.148l-4.522,4.994l-0.472,0.635c-1.138,1.26-2.163,2.472-3.383,3.766l0.342,0.341 c-10.753,14.535-20.261,27.427-29.957,38.286c-7.962,8.938-16.056,16.584-25.32,23.181c-13.901,9.874-30.583,17.65-54.431,23.189 c-15.991,3.7-35.284,6.271-58.611,7.572c11.404-12.762,21.05-29.127,28.542-48.331c10.565-27.207,16.796-60.14,16.796-96.668 c-0.017-48.712-11.029-90.992-28.769-121.884c-4.962-8.622-10.501-16.251-16.479-22.97c17.332,1.115,32.469,2.994,45.686,5.62 c16.61,3.286,30.274,7.686,42.051,13.014c17.666,8.044,31.242,18.146,44.264,31.022c12.168,12.014,23.799,26.622,36.846,43.442 l-0.951,0.903c8.735,9.167,16.584,17.537,21.92,25.581c5.368,8.085,8.215,15.446,8.231,23.677 C354.027,260.717,352.319,267.949,347.666,276.887z M470.648,267.582c5.548,5.474,8.931,12.86,8.948,21.221 c-0.017,8.264-3.302,15.576-8.704,21.017c-5.433,5.4-12.753,8.694-21.017,8.703c-8.036-0.008-15.178-3.139-20.546-8.296 c-5.352-5.189-8.752-12.249-9.061-20.203l-0.618-15.544h-49.876c2.408-6.913,3.709-13.624,3.693-20.074 c0.016-5.962-1.026-11.558-2.75-16.861h48.932l0.618-15.544c0.309-7.963,3.709-15.015,9.061-20.196 c5.368-5.166,12.51-8.289,20.546-8.297c8.264,0.008,15.584,3.302,21.017,8.703c5.401,5.424,8.687,12.746,8.704,21.009 c-0.017,8.361-3.4,15.747-8.931,21.213l-11.826,11.582L470.648,267.582z"></path> </g> </g></svg>
            {{$data->estrategia_nutricional->macronutrientes->proteina->gramas}}g
          </span>
          <span class="nutri-macro-label">
            <span>Proteínas</span>
          </span>
        </div>
        <div class="nutri-macro-card carbs">
          <span class="nutri-macro-value">
            <svg fill="#000000" height="15" width="15" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M18.846,2H5.154A4.106,4.106,0,0,0,1.015,5.661,4,4,0,0,0,3,9.451V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V9.451a4,4,0,0,0,1.985-3.79A4.106,4.106,0,0,0,18.846,2ZM5,19V8.816a1,1,0,0,0-.665-.942A1.978,1.978,0,0,1,3.007,5.827,2.1,2.1,0,0,1,5.154,4h9.692a2.1,2.1,0,0,1,2.147,1.827,1.978,1.978,0,0,1-1.328,2.047A1,1,0,0,0,15,8.816V19a1,1,0,0,1-1,1H6A1,1,0,0,1,5,19ZM19.665,7.874A1,1,0,0,0,19,8.816V19a1,1,0,0,1-1,1H16.829c.364-1.032.056-2.011.171-10.549A3.96,3.96,0,0,0,18.444,4h.4a2.1,2.1,0,0,1,2.147,1.827A1.978,1.978,0,0,1,19.665,7.874Z"></path></g></svg>
            {{$data->estrategia_nutricional->macronutrientes->carboidrato->gramas}}g
          </span>
          <span class="nutri-macro-label">
            Carboidratos
          </span>
        </div>
        <div class="nutri-macro-card fat">
          <span class="nutri-macro-value">
            <svg fill="#000000" height="15" width="15" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M18.817,13.868h0A3.853,3.853,0,0,1,17,10.716V9a5,5,0,0,0-3.751-4.823C13.57,3.625,14.306,3,16,3a1,1,0,0,0,0-2c-3.191,0-4.487,1.7-4.868,3.088A5,5,0,0,0,7,9v1.509a4.293,4.293,0,0,1-1.923,3.434,4.967,4.967,0,0,0-2.054,4.544A5.133,5.133,0,0,0,8.172,23H15.1c3.258,0,5.621-1.813,5.879-4.513A5.018,5.018,0,0,0,18.817,13.868ZM8.172,21a3.011,3.011,0,0,1-1.925-5.436C9.741,13.045,8.874,9.663,9,9a3,3,0,0,1,6,0v1.716c0,4.529,4.293,4.365,3.986,7.582C18.6,22.317,11.907,20.628,8.172,21ZM13.5,12.25A4.753,4.753,0,0,1,15,15.625C15,16.75,14.25,19,12,19s-3-2.25-3-3.375a4.753,4.753,0,0,1,1.5-3.375A2.323,2.323,0,0,1,12,11.5,2.323,2.323,0,0,1,13.5,12.25Z"></path></g></svg>
            {{$data->estrategia_nutricional->macronutrientes->gordura->gramas}}g
          </span>
          <span class="nutri-macro-label">
            Gorduras
          </span>
        </div>
        <div class="nutri-macro-card calories">
          <span class="nutri-macro-value">
            <svg height="20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.5 10.0003C14.5 9.20875 15.5528 8.99895 15.8321 9.73957C16.5077 11.5311 17 13.1337 17 14.0002C17 16.7616 14.7614 19.0002 12 19.0002C9.23858 19.0002 7 16.7616 7 14.0002C7 13.0693 7.56822 11.2887 8.32156 9.33698C9.29743 6.80879 9.78536 5.54469 10.3877 5.4766C10.5804 5.45482 10.7907 5.49399 10.9626 5.58371C11.5 5.86413 11.5 7.24285 11.5 10.0003C11.5 10.8287 12.1716 11.5003 13 11.5003C13.8284 11.5003 14.5 10.8287 14.5 10.0003Z" stroke="#33363F" stroke-width="2"></path> <path d="M11 19L10.7372 18.343C10.2816 17.204 10.4737 15.9079 11.24 14.95V14.95C11.6296 14.463 12.3704 14.463 12.76 14.95V14.95C13.5263 15.9079 13.7184 17.204 13.2628 18.343L13 19" stroke="#33363F" stroke-width="2"></path> </g></svg>
            {{$data->estrategia_nutricional->meta_calorica_diaria}}
          </span>
          <span class="nutri-macro-label">
            kcal Total
          </span>
        </div>
      </div>

      <div class="nutri-tips-grid">
        <div class="nutri-tip-card">
          <div class="nutri-tip-num">1</div>
          <div>
            <h4>Prepare com Antecedência</h4>
            <p>Organize e prepare as refeições da semana com antecedência. Planejamento reduz erros e facilita a consistência.</p>
          </div>
        </div>
        <div class="nutri-tip-card">
          <div class="nutri-tip-num">2</div>
          <div>
            <h4>Hidratação Constante</h4>
            <p>Beba cerca de 3L de água por dia. A hidratação adequada melhora desempenho, digestão, recuperação muscular e controle do apetite.</p>
          </div>
        </div>
        <div class="nutri-tip-card">
          <div class="nutri-tip-num">3</div>
          <div>
            <h4>Qualidade dos Alimentos</h4>
            <p>Priorize alimentos naturais e pouco processados. A base da dieta deve ser comida de verdade.</p>
          </div>
        </div>
      </div>

      <div class="treino-progression">
        <div class="treino-progression-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/>
            <polyline points="16 7 22 7 22 13"/>
          </svg>
          <h4>Consistência e Ajustes Inteligentes</h4>
        </div>
        <p>
          Resultados duradouros vêm da constância e de ajustes graduais. 
          Acompanhe seu progresso, mantenha regularidade nas refeições e adapte a dieta conforme sua evolução. 
          <strong>Pequenos ajustes sustentáveis geram grandes resultados</strong>.
        </p>
      </div>
  </section>

  <!-- ==================== PAGE 9: MEALS ==================== -->
  @foreach(collect($data->plano_alimentar->refeicoes)->chunk(2) as $grupoRefeicoes)
    <section class="pdf-page">
      <div class="meals-page-container">
        @foreach($grupoRefeicoes as $refeicao)
          <div class="meal-card">
            <!-- Header -->
            <div class="meal-card-header-improved">
              <div class="meal-header-left">
                <div class="meal-icon">
                  {!! getMealSvgIcon($refeicao->horario) !!}
                </div>
                <div>
                  <h3 class="meal-title">{{ $refeicao->nome_refeicao }}</h3>
                  <p class="meal-desc">{{ $refeicao->descricao }}</p>
                </div>
              </div>
              <div class="meal-time">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10"/>
                  <polyline points="12 6 12 12 16 14"/>
                </svg>
                {{ $refeicao->horario }}
              </div>
            </div>

            <!-- Body -->
            <div class="meal-body-flex">
              <div class="meal-body">
                <table class="food-table-improved">
                  <thead>
                    <tr>
                      <th class="food-col">Alimento</th>
                      <th class="qty-col">Quantidade</th>
                      <th class="macro-col">Proteína</th>
                      <th class="macro-col">Carboidrato</th>
                      <th class="macro-col">Gordura</th>
                      <th class="kcal-col">Calorias</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($refeicao->alimentos as $alimento)
                    <tr>
                      <td class="food-col">
                        <span class="food-name">{{ $alimento->nome }}</span>
                      </td>
                      <td class="qty-col">{{ $alimento->quantidade }}</td>
                      <td class="macro-col protein-value">{{ $alimento->proteina_g }}g</td>
                      <td class="macro-col carbs-value">{{ $alimento->carboidrato_g }}g</td>
                      <td class="macro-col fat-value">{{ $alimento->gordura_g }}g</td>
                      <td class="kcal-col">{{ $alimento->calorias }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

              <!-- Total Footer (fora da tabela) -->
              <div class="meal-total-footer">
                <div class="total-row-content">
                  <div class="total-label">
                    <strong>TOTAL</strong>
                  </div>
                  <div class="total-values">
                    <div class="total-value protein-value">
                      <span class="total-macro-label">Proteína</span>
                      <strong>{{ $refeicao->totais_refeicao->proteina_g }}g</strong>
                    </div>
                    <div class="total-value carbs-value">
                      <span class="total-macro-label">Carboidrato</span>
                      <strong>{{ $refeicao->totais_refeicao->carboidrato_g }}g</strong>
                    </div>
                    <div class="total-value fat-value">
                      <span class="total-macro-label">Gordura</span>
                      <strong>{{ $refeicao->totais_refeicao->gordura_g }}g</strong>
                    </div>
                    <div class="total-value kcal-value">
                      <span class="total-macro-label">Calorias</span>
                      <strong>{{ $refeicao->totais_refeicao->calorias }}</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </section>
  @endforeach


  <!-- ==================== PAGE 10: HYDRATION - VERSÃO PREMIUM ==================== -->
  <section class="pdf-page">
    <div class="hydration-premium-card">
      <div class="hydration-wave-deco wave-1"></div>
      <div class="hydration-wave-deco wave-2"></div>
      <div class="hydration-wave-deco wave-3"></div>
      
      <div class="hydration-premium-content">
        <!-- Header -->
        <div class="hydration-premium-header">
          <div class="hydration-premium-badge">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/>
            </svg>
            <span>Hidratação Estratégica</span>
          </div>
          <h2 class="hydration-premium-title">O Combustível Invisível</h2>
          <p class="hydration-premium-subtitle">60% do seu corpo é água — otimize este recurso vital</p>
        </div>

        <!-- Main Hero Section -->
        <div class="hydration-hero-section">
          <div class="hydration-hero-left">
            <div class="hydration-main-stat">
              <div class="hydration-droplet-container">
                <svg class="hydration-droplet-bg" viewBox="0 0 100 140" xmlns="http://www.w3.org/2000/svg">
                  <path d="M50 10 C30 40, 10 60, 10 90 C10 115, 27.5 130, 50 130 C72.5 130, 90 115, 90 90 C90 60, 70 40, 50 10 Z" 
                        fill="url(#waterGradient)" opacity="0.2"/>
                  <path d="M50 10 C30 40, 10 60, 10 90 C10 115, 27.5 130, 50 130 C72.5 130, 90 115, 90 90 C90 60, 70 40, 50 10 Z" 
                        fill="url(#waterGradient)" opacity="0.8" style="clip-path: inset(30% 0 0 0);"/>
                </svg>
                <div class="hydration-droplet-content">
                  <span class="hydration-main-number">
                      {{ ceil(( ($user->peso * 35) / 1000) * 1.5) }}L
                  </span>

                  <span class="hydration-main-label">Meta Diária</span>
                </div>
              </div>
            </div>
          </div>

          <div class="hydration-hero-right">
            <div class="hydration-calculation-box">
              <h3>Seu Cálculo Personalizado</h3>
              <div class="hydration-calc-formula">
                <div class="hydration-calc-item">
                  <span class="hydration-calc-label">Peso Corporal</span>
                  <span class="hydration-calc-value">{{$user->peso}}</span>
                </div>
                <div class="hydration-calc-symbol">×</div>
                <div class="hydration-calc-item">
                  <span class="hydration-calc-label">Fator</span>
                  <span class="hydration-calc-value">35ml</span>
                </div>
                <div class="hydration-calc-symbol">=</div>
                <div class="hydration-calc-item result">
                  <span class="hydration-calc-label">Necessidade</span>
                  <span class="hydration-calc-value highlight">{{$user->peso * 35}}ml</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Impact Grid -->
        <div class="hydration-impact-section">
          <h3 class="hydration-impact-title">Impacto na Performance & Saúde</h3>
          <div class="hydration-impact-grid">
            <div class="hydration-impact-card strength">
              <div class="hydration-impact-icon">
                  <svg width="22" height="22" fill="none" stroke-width="2.5" stroke="#ffffff" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path class="cls-1" d="M9.14,16.77S8,13.17,10.09,11A14.12,14.12,0,0,1,13,9.13a4.78,4.78,0,1,1,5.61,4.7c-1.83,2.77-5.83,7.71-11.33,7.71C4.36,21.54,1.5,13,1.5,9.13V4.48A2.26,2.26,0,0,1,3.64,2.23c1.73-.09,4,0,4.54,1.17C9,5.11,7.23,8.18,5.32,8.18c0,1.5,1.83,4.76,3.49,6.56"></path></g></svg>
              </div>
              <h4>Força Muscular</h4>
              <p>Contração muscular otimizada e transmissão de força máxima</p>
            </div>

            <div class="hydration-impact-card endurance">
              <div class="hydration-impact-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"/>
                </svg>
              </div>
              <h4>Resistência</h4>
              <p>Volume sanguíneo mantido para oxigenação constante</p>
            </div>

            <div class="hydration-impact-card recovery">
              <div class="hydration-impact-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M12 2v20"/>
                  <path d="m15 5 3 3-3 3"/>
                  <path d="m9 19-3-3 3-3"/>
                </svg>
              </div>
              <h4>Recuperação</h4>
              <p>Remoção de metabólitos e nutrientes às células</p>
            </div>

            <div class="hydration-impact-card metabolism">
              <div class="hydration-impact-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/>
                </svg>
              </div>
              <h4>Metabolismo</h4>
              <p>Processos enzimáticos e queima de gordura acelerados</p>
            </div>

            <div class="hydration-impact-card brain">
              <div class="hydration-impact-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z"/>
                  <path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z"/>
                </svg>
              </div>
              <h4>Cognição</h4>
              <p>Foco mental e tomada de decisão aprimorados</p>
            </div>

            <div class="hydration-impact-card joints">
              <div class="hydration-impact-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <circle cx="12" cy="12" r="3"/>
                  <path d="M3 7V5a2 2 0 0 1 2-2h2"/>
                  <path d="M17 3h2a2 2 0 0 1 2 2v2"/>
                  <path d="M21 17v2a2 2 0 0 1-2 2h-2"/>
                  <path d="M7 21H5a2 2 0 0 1-2-2v-2"/>
                </svg>
              </div>
              <h4>Articulações</h4>
              <p>Lubrificação e proteção do tecido cartilaginoso</p>
            </div>
          </div>
        </div>

        <!-- Critical Info Banner -->
        <div class="hydration-critical-banner">
          <div class="hydration-critical-left">
            <div class="hydration-critical-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/>
                <path d="M12 9v4"/>
                <path d="M12 17h.01"/>
              </svg>
            </div>
            <div class="hydration-critical-content">
              <h4>Sinais de Desidratação</h4>
              <p>Urina escura • Fadiga • Tontura • Cãibras • Boca seca • Dor de cabeça</p>
            </div>
          </div>
          <div class="hydration-critical-action">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span>Monitore a cor da urina: deve ser amarelo claro</span>
          </div>
        </div>

        <!-- Pro Tips -->
        <div class="hydration-tips-section">
          <div class="hydration-tip-card">
            <div class="hydration-tip-number">1</div>
            <div class="hydration-tip-content">
              <h5>Comece Cedo</h5>
              <p>500ml logo ao acordar reidrata após 8h de jejum</p>
            </div>
          </div>

          <div class="hydration-tip-card">
            <div class="hydration-tip-number">2</div>
            <div class="hydration-tip-content">
              <h5>Pré-Treino</h5>
              <p>400-500ml 30min antes garante performance desde o início</p>
            </div>
          </div>

          <div class="hydration-tip-card">
            <div class="hydration-tip-number">3</div>
            <div class="hydration-tip-content">
              <h5>Durante Exercício</h5>
              <p>200ml a cada 15min mantém hidratação constante</p>
            </div>
          </div>

          <div class="hydration-tip-card">
            <div class="hydration-tip-number">4</div>
            <div class="hydration-tip-content">
              <h5>Pós-Treino</h5>
              <p>500-750ml para recuperação e reposição completa</p>
            </div>
          </div>
        </div>

        <!-- SVG Gradient Definition -->
        <svg width="0" height="0" style="position: absolute;">
          <defs>
            <linearGradient id="waterGradient" x1="0%" y1="0%" x2="0%" y2="100%">
              <stop offset="0%" style="stop-color:#06b6d4;stop-opacity:1" />
              <stop offset="100%" style="stop-color:#0891b2;stop-opacity:1" />
            </linearGradient>
          </defs>
        </svg>
      </div>
    </div>
  </section>

  <!-- ==================== PAGE 11: CARDIO ==================== -->
  <section class="pdf-page">
      <div class="cardio-container">
          <!-- HEADER PREMIUM -->
          <div class="cardio-header-premium">
              <div class="cardio-badge-premium">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                  </svg>
                  <span>Cardio</span>
              </div>
              <h1 class="cardio-title-premium">Cardio Estratégico</h1>
              <p class="cardio-subtitle-premium">
                  {{$data->cardio_estrategico->resumo_cardio}}
              </p>
          </div>

          <!-- HERO CARD -->
          <div class="cardio-hero-card">
              <div class="cardio-hero-icon">
                  <svg viewBox="0 0 24 24"  fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="15" cy="4" r="2" stroke="#ffffff" stroke-width="1.5"></circle> <path d="M11 16.0001V15.0263C11 14.9078 11 14.8486 10.9979 14.792C10.9672 13.9811 10.6095 13.2173 10.0062 12.6747C9.96408 12.6368 9.91852 12.5989 9.8275 12.523C9.69411 12.4118 9.62741 12.3563 9.5758 12.3066C8.80944 11.5689 8.75462 10.3604 9.45104 9.5563C9.49795 9.50214 9.55934 9.44075 9.68211 9.31798L10.0113 8.98874C10.9639 8.03622 10.6532 6.42287 9.41502 5.89224C8.84181 5.64658 8.18464 5.69719 7.65581 6.02771L4.5 8.00009" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M3 15.5H3.37868C4.73694 15.5 6.03957 14.9604 7 14" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M12.5 10C13.4737 10.3246 14.5263 10.3246 15.5 10" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M19.4888 21.9996H3.08684C2.48659 21.9996 2 21.513 2 20.9128C2 20.3848 2.37943 19.9332 2.89949 19.8422L19.0559 17.0148C20.5926 16.7459 22 17.9284 22 19.4884C22 20.8753 20.8757 21.9996 19.4888 21.9996Z" stroke="#ffffff" stroke-width="1.5" stroke-linejoin="round"></path> <path d="M19.1218 10.0213L18.3801 9.91005L19.1218 10.0213ZM22.1471 7.73544C22.5533 7.6542 22.8167 7.25908 22.7354 6.85291C22.6542 6.44674 22.2591 6.18333 21.8529 6.26456L22.1471 7.73544ZM18.7417 17.6113L19.8635 10.1326L18.3801 9.91005L17.2583 17.3887L18.7417 17.6113ZM19.8635 10.1326C20.0436 8.93217 20.9568 7.97349 22.1471 7.73544L21.8529 6.26456C20.0428 6.62658 18.6539 8.08452 18.3801 9.91005L19.8635 10.1326Z" fill="#ffffff"></path> </g></svg>
              </div>
              <div>
                  <h3>Por Que Cardio Estratégico?</h3>
                  <p>{{$data->cardio_estrategico->cardio_estrategico}}</p>
              </div>
          </div>

          <!-- STATS CARDS -->
          <div class="cardio-stats-premium">
              <div class="cardio-stat-premium">
                  <div class="cardio-stat-icon-premium">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                  </div>
                  <div class="cardio-stat-content-premium">
                      <div class="cardio-stat-label-premium">Meta Semanal</div>
                      <div class="cardio-stat-value-premium">{{$data->cardio_estrategico->meta_semanal_minutos}}</div>
                  </div>
              </div>
              <div class="cardio-stat-premium burn">
                  <div class="cardio-stat-icon-premium">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                      </svg>
                  </div>
                  <div class="cardio-stat-content-premium">
                      <div class="cardio-stat-label-premium">Queima Extra</div>
                      <div class="cardio-stat-value-premium">{{$data->cardio_estrategico->queima_caloria_semanal}}kcal</div>
                  </div>
              </div>
          </div>

          <!-- ACTIVITY GRID 2x2 -->
          <div class="cardio-activity-grid">

              @php
                  $icons = [
                      [
                          'color' => 'green',
                          'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />'
                      ],
                      [
                          'color' => 'blue',
                          'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />'
                      ],
                      [
                          'color' => 'red',
                          'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />'
                      ],
                      [
                          'color' => 'gold',
                          'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />'
                      ],
                  ];
              @endphp
              @foreach ($data->cardio_estrategico->atividades as $atividade)
                  @php
                      $icon = $icons[$loop->index % count($icons)];
                  @endphp
                  <!-- Card 1: Caminhada em Jejum -->
                  <div class="cardio-activity-card">
                      <div class="cardio-activity-header">
                          <div class="cardio-activity-icon {{ $icon['color'] }}">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                  {!! $icon['svg'] !!}
                              </svg>
                          </div>
                          <div style="flex: 1;">
                              <h4>{{$atividade->nome}}</h4>
                              <div class="cardio-activity-badges">
                                  <span class="cardio-badge frequency">{{$atividade->frequencia_semanal}}x/semana</span>
                                  <span class="cardio-badge duration">{{$atividade->duracao_minutos}}</span>
                                  <span class="cardio-badge intensity 
                                    {{ 
                                        $atividade->intensidade === 'Leve' ? 'light' : 
                                        ($atividade->intensidade === 'Moderada' ? 'moderate' : 
                                        ($atividade->intensidade === 'Alta' ? 'high' : '')) 
                                    }}">
                                    {{ $atividade->intensidade }}
                                </span>

                              </div>
                          </div>
                      </div>
                      <p class="cardio-activity-notes">
                          {{$atividade->notas}}
                      </p>
                      <div class="cardio-activity-benefits">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                          <span>{{ $atividade->beneficio_principal }}</span>
                      </div>
                  </div>
              @endforeach

          </div>

          <!-- WARNING BANNER -->
          <div class="cardio-warning-premium">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
              </svg>
              <p><strong>Atenção:</strong> Nunca faça HIIT em dias de treino de pernas ou no dia seguinte. Durante déficit calórico, priorize LISS para preservar massa muscular. Ajuste volume conforme recuperação.</p>
          </div>
      </div>
  </section>

  <!-- ==================== PAGE 12: REST DAYS ==================== -->
  <div class="pdf-page rest-container">
      <!-- HEADER PREMIUM -->
      <div class="rest-header-premium">
          <div class="rest-badge-premium">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
              </svg>
              <span>Dias de Descanso</span>
          </div>
          <h1 class="rest-title-premium">Recuperação Estratégica</h1>
          <p class="rest-subtitle-premium">
              Músculo cresce no descanso, não no treino — respeite este processo
          </p>
      </div>

      <!-- INFO CARDS ROW -->
      <div class="rest-info-cards">
          <div class="rest-info-card purple">
              <div class="rest-info-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
              </div>
              <div class="rest-info-content">
                  <div class="rest-info-value">48-72h</div>
                  <div class="rest-info-label">Tempo ideal entre treinos do mesmo grupo</div>
              </div>
          </div>

          <div class="rest-info-card blue">
              <div class="rest-info-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                  </svg>
              </div>
              <div class="rest-info-content">
                  <div class="rest-info-value">7-9h</div>
                  <div class="rest-info-label">Sono por noite para máxima síntese proteica</div>
              </div>
          </div>

          <div class="rest-info-card green">
              <div class="rest-info-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                  </svg>
              </div>
              <div class="rest-info-content">
                  <div class="rest-info-value">2-3x</div>
                  <div class="rest-info-label">Dias off por semana mínimo recomendado</div>
              </div>
          </div>
      </div>

      <!-- NUTRITION COMPARISON -->
      <div class="rest-nutrition-section">
        @php
            function macroBadge($treino, $descanso) {
                if ($treino == 0) {
                    return ['label' => '—', 'class' => 'kept'];
                }

                $percent = round((($descanso - $treino) / $treino) * 100);

                if ($percent == 0) {
                    return ['label' => 'Mantida', 'class' => 'kept'];
                }

                if ($percent > 0) {
                    return ['label' => '+' . $percent . '%', 'class' => 'increased'];
                }

                return ['label' => $percent . '%', 'class' => 'reduced'];
            }

            $proteina = macroBadge(
                $data->ajuste_dias_descanso->proteina_dia_treino,
                $data->ajuste_dias_descanso->proteina_dia_descanso
            );

            $carbo = macroBadge(
                $data->ajuste_dias_descanso->carboidrato_dia_treino,
                $data->ajuste_dias_descanso->carboidrato_dia_descanso
            );

            $gordura = macroBadge(
                $data->ajuste_dias_descanso->gordura_dia_treino,
                $data->ajuste_dias_descanso->gordura_dia_descanso
            );
        @endphp

          <h3 class="rest-section-title">Ajuste Nutricional: Treino vs Descanso</h3>
          <div class="rest-nutrition-comparison">
              <div class="rest-nutrition-column training">
                  <div class="rest-nutrition-header">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                      </svg>
                      <span>Dia de Treino</span>
                  </div>
                  <div class="rest-nutrition-macros">
                      <div class="rest-macro-row">
                          <span class="rest-macro-name">Proteína</span>
                          <span class="rest-macro-amount">{{$data->ajuste_dias_descanso->proteina_dia_treino}}g</span>
                      </div>
                      <div class="rest-macro-row">
                          <span class="rest-macro-name">Carboidratos</span>
                          <span class="rest-macro-amount highlight">{{$data->ajuste_dias_descanso->carboidrato_dia_treino}}g</span>
                      </div>
                      <div class="rest-macro-row">
                          <span class="rest-macro-name">Gorduras</span>
                          <span class="rest-macro-amount">{{$data->ajuste_dias_descanso->gordura_dia_treino}}g</span>
                      </div>
                  </div>
                  <div class="rest-nutrition-total training">
                      <span>Total</span>
                      <strong>{{$data->ajuste_dias_descanso->calorias_dia_treino}} kcal</strong>
                  </div>
              </div>

              <div class="rest-nutrition-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                  </svg>
              </div>

              <div class="rest-nutrition-column rest">
                  <div class="rest-nutrition-header">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                      </svg>
                      <span>Dia de Descanso</span>
                  </div>
                  <div class="rest-nutrition-macros">
                      <div class="rest-macro-row">
                          <span class="rest-macro-name">Proteína</span>
                          <span class="rest-macro-amount">{{$data->ajuste_dias_descanso->proteina_dia_descanso}}g</span>
                          <span class="rest-macro-badge {{ $proteina['class'] }}">{{ $proteina['label'] }}</span>
                      </div>
                      <div class="rest-macro-row">
                          <span class="rest-macro-name">Carboidratos</span>
                          <span class="rest-macro-amount highlight">{{$data->ajuste_dias_descanso->carboidrato_dia_descanso}}g</span>
                          <span class="rest-macro-badge {{ $carbo['class'] }}">{{ $carbo['label'] }}</span>
                      </div>
                      <div class="rest-macro-row">
                          <span class="rest-macro-name">Gorduras</span>
                          <span class="rest-macro-amount">{{$data->ajuste_dias_descanso->gordura_dia_descanso}}g</span>
                          <span class="rest-macro-badge {{ $gordura['class'] }}">{{ $gordura['label'] }}</span>
                      </div>
                  </div>
                  <div class="rest-nutrition-total rest">
                      <span>Total</span>
                      <strong>{{$data->ajuste_dias_descanso->calorias_dia_descanso}} kcal</strong>
                  </div>
              </div>
          </div>
      </div>

      <!-- BENEFITS GRID -->
      <div class="rest-benefits-section">
          <h3 class="rest-section-title">O Que Acontece Durante o Descanso</h3>
          <div class="rest-benefits-grid">
              <div class="rest-benefit-card">
                  <div class="rest-benefit-icon blue">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                      </svg>
                  </div>
                  <h4>Síntese Proteica</h4>
                  <p>Fibras musculares se reconstroem mais fortes. Hipertrofia ocorre nas 24-48h pós-treino.</p>
              </div>

              <div class="rest-benefit-card">
                  <div class="rest-benefit-icon green">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                  </div>
                  <h4>Reparo de Tecidos</h4>
                  <p>Microlesões são reparadas. Tendões e ligamentos se fortalecem gradualmente.</p>
              </div>

              <div class="rest-benefit-card">
                  <div class="rest-benefit-icon purple">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                      </svg>
                  </div>
                  <h4>Reposição de Energia</h4>
                  <p>Glicogênio muscular restaurado. Sistema nervoso central recupera da fadiga.</p>
              </div>

              <div class="rest-benefit-card">
                  <div class="rest-benefit-icon gold">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
                      </svg>
                  </div>
                  <h4>Balanceamento Hormonal</h4>
                  <p>Cortisol reduz, testosterona e GH aumentam no sono. Essencial para anabolismo.</p>
              </div>
          </div>
      </div>

      <!-- RECOMMENDATIONS -->
      <div class="rest-recommendations">
          <div class="rest-recommendation-card do">
              <div class="rest-recommendation-header">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <h4>O Que FAZER</h4>
              </div>
              <ul class="rest-recommendation-list">
                  <li>Caminhada leve 20-30min</li>
                  <li>Alongamento e mobilidade</li>
                  <li>Foam roller áreas treinadas</li>
                  <li>Manter proteína alta (170g)</li>
                  <li>Dormir 7-9h consistentemente</li>
                  <li>Hidratar 3-4L água</li>
              </ul>
          </div>

          <div class="rest-recommendation-card dont">
              <div class="rest-recommendation-header">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                  </svg>
                  <h4>O Que EVITAR</h4>
              </div>
              <ul class="rest-recommendation-list">
                  <li>HIIT ou cardio intenso</li>
                  <li>Déficit extremo (<1500 kcal)</li>
                  <li>Treinar mesmo grupo muscular</li>
                  <li>Privação de sono (<6h)</li>
                  <li>Estresse não controlado</li>
                  <li>Álcool (bloqueia síntese)</li>
              </ul>
          </div>
      </div>

      <!-- RECOVERY TIMELINE -->
      <div class="rest-recovery-timeline">
          <h3 class="rest-section-title">Ciclo de Recuperação Muscular</h3>

          <div class="rest-timeline-grid">

              <div class="rest-timeline-step">
                  <div class="rest-timeline-badge blue">0–12h</div>
                  <h4>Dano Muscular</h4>
                  <p>
                      O treino gera microlesões nas fibras. Inflamação inicial é necessária
                      para iniciar o processo de adaptação.
                  </p>
              </div>

              <div class="rest-timeline-step">
                  <div class="rest-timeline-badge purple">12–24h</div>
                  <h4>Ativação Anabólica</h4>
                  <p>
                      A síntese proteica aumenta. Aminoácidos e sono de qualidade
                      são decisivos nesta fase.
                  </p>
              </div>

              <div class="rest-timeline-step">
                  <div class="rest-timeline-badge green">24–48h</div>
                  <h4>Reconstrução</h4>
                  <p>
                      As fibras se regeneram mais fortes. Volume excessivo aqui
                      atrasa o progresso.
                  </p>
              </div>

              <div class="rest-timeline-step">
                  <div class="rest-timeline-badge gold">48–72h</div>
                  <h4>Supercompensação</h4>
                  <p>
                      O músculo está pronto para novo estímulo.
                      É aqui que a evolução acontece.
                  </p>
              </div>

          </div>
      </div>

      <!-- BOTTOM NOTE -->
      <div class="rest-bottom-note">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
          </svg>
          <p><strong>Importante:</strong> Overtraining é tão ruim quanto undertraining. Se seus números estão estagnados ou caindo, você precisa de mais descanso, não mais volume.</p>
      </div>
  </div>

  <!-- ==================== PAGE 13: INSIGHTS ==================== -->
  <section class="pdf-page">
      <!-- HEADER PREMIUM -->
      <div class="insights-header-premium">
          <div class="insights-badge-premium">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
              </svg>
              <span>Insights Nutricionais</span>
          </div>
          <h1 class="insights-title-premium">Fundamentos da Nutrição</h1>
          <p class="insights-subtitle-premium">
              Princípios científicos essenciais para uma alimentação saudável e eficaz
          </p>
      </div>

      <!-- HERO CARD -->
      <div class="insights-hero-card">
          <div class="insights-hero-icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
              </svg>
          </div>
          <div>
              <h3>Conhecimento Transforma Hábitos</h3>
              <p>Compreender os princípios da nutrição permite fazer escolhas mais conscientes e sustentáveis. Estas recomendações são baseadas em evidências científicas atuais.</p>
          </div>
      </div>

      <!-- PRINCIPAIS DICAS - GRID 2x3 -->
      <div class="insights-tips-section">
          <h3 class="insights-section-title">Pilares da Nutrição</h3>
          <div class="insights-tips-grid">
              <!-- Tip 1: Proteína -->
              <div class="insights-tip-card">
                  <div class="insights-tip-header">
                      <div class="insights-tip-icon blue">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                          </svg>
                      </div>
                      <h4>Importância da Proteína</h4>
                  </div>
                  <p class="insights-tip-desc">A proteína é essencial para construção e manutenção muscular. Recomenda-se distribuir o consumo ao longo do dia para melhor aproveitamento.</p>
                  <div class="insights-tip-highlight">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <span>1.6-2.2g por kg de peso</span>
                  </div>
              </div>

              <!-- Tip 2: Timing -->
              <div class="insights-tip-card">
                  <div class="insights-tip-header">
                      <div class="insights-tip-icon green">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                      </div>
                      <h4>Distribuição de Nutrientes</h4>
                  </div>
                  <p class="insights-tip-desc">O momento da alimentação pode otimizar resultados. Carboidratos próximos ao treino fornecem energia e auxiliam na recuperação muscular.</p>
                  <div class="insights-tip-highlight">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <span>Refeições balanceadas</span>
                  </div>
              </div>

              <!-- Tip 3: Hidratação -->
              <div class="insights-tip-card">
                  <div class="insights-tip-header">
                      <div class="insights-tip-icon cyan">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                          </svg>
                      </div>
                      <h4>Papel da Hidratação</h4>
                  </div>
                  <p class="insights-tip-desc">A água é crucial para todas as funções corporais. Mesmo pequenos níveis de desidratação podem impactar significativamente o desempenho físico e mental.</p>
                  <div class="insights-tip-highlight">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <span>35ml por kg de peso</span>
                  </div>
              </div>

              <!-- Tip 4: Qualidade -->
              <div class="insights-tip-card">
                  <div class="insights-tip-header">
                      <div class="insights-tip-icon gold">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                          </svg>
                      </div>
                      <h4>Escolha de Alimentos</h4>
                  </div>
                  <p class="insights-tip-desc">Priorizar alimentos integrais e minimamente processados fornece nutrientes mais biodisponíveis e promove melhor saúde geral.</p>
                  <div class="insights-tip-highlight">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <span>Alimentos naturais</span>
                  </div>
              </div>

              <!-- Tip 5: Consistência -->
              <div class="insights-tip-card">
                  <div class="insights-tip-header">
                      <div class="insights-tip-icon purple">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                          </svg>
                      </div>
                      <h4>Sustentabilidade dos Hábitos</h4>
                  </div>
                  <p class="insights-tip-desc">A constância nos hábitos alimentares gera resultados mais duradouros do que mudanças drásticas e temporárias. Foque no progresso gradual.</p>
                  <div class="insights-tip-highlight">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <span>Mudanças graduais</span>
                  </div>
              </div>

              <!-- Tip 6: Ajustes -->
              <div class="insights-tip-card">
                  <div class="insights-tip-header">
                      <div class="insights-tip-icon red">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                          </svg>
                      </div>
                      <h4>Adaptação Individual</h4>
                  </div>
                  <p class="insights-tip-desc">Cada organismo responde de forma única. Monitore seu progresso e ajuste sua abordagem conforme necessário, respeitando os sinais do corpo.</p>
                  <div class="insights-tip-highlight">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <span>Escute seu corpo</span>
                  </div>
              </div>
          </div>
      </div>

      <!-- EVITE ESTES ERROS -->
      <div class="insights-mistakes-section">
          <h3 class="insights-section-title">Armadilhas Nutricionais</h3>
          <div class="insights-mistakes-grid">
              <div class="insights-mistake-card">
                  <div class="insights-mistake-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                      </svg>
                  </div>
                  <div class="insights-mistake-content">
                      <h5>Restrição Calórica Extrema</h5>
                      <p>Déficits muito agressivos podem comprometer o metabolismo e levar à perda de massa muscular.</p>
                  </div>
              </div>

              <div class="insights-mistake-card">
                  <div class="insights-mistake-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                      </svg>
                  </div>
                  <div class="insights-mistake-content">
                      <h5>Demonizar Macronutrientes</h5>
                      <p>Todos os macronutrientes têm funções importantes. Eliminar completamente algum deles pode prejudicar a saúde.</p>
                  </div>
              </div>

              <div class="insights-mistake-card">
                  <div class="insights-mistake-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                      </svg>
                  </div>
                  <div class="insights-mistake-content">
                      <h5>Negligenciar Micronutrientes</h5>
                      <p>Vitaminas e minerais são essenciais para processos metabólicos. Focar apenas em calorias é insuficiente.</p>
                  </div>
              </div>

              <div class="insights-mistake-card">
                  <div class="insights-mistake-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 715.636 5.636m12.728 12.728L5.636 5.636" />
                      </svg>
                  </div>
                  <div class="insights-mistake-content">
                      <h5>Expectativas Irrealistas</h5>
                      <p>Mudanças corporais levam tempo. Comparações com outros geram frustração e podem levar à desistência.</p>
                  </div>
              </div>
          </div>
      </div>

      <!-- MENSAGEM FINAL -->
      <div class="insights-final-message">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
          </svg>
          <p><strong>Lembre-se:</strong> Nutrição é um processo individualizado. Use estes princípios como fundamento, adapte à sua realidade e mantenha uma abordagem equilibrada e sustentável.</p>
      </div>
  </section>

  <!-- ==================== PAGE 14: COMPLETED ==================== -->
  <section class="pdf-page victory-page">
    <div class="victory-trophy">
      <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/>
        <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/>
        <path d="M4 22h16"/>
        <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/>
        <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/>
        <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/>
      </svg>
    </div>

    <div class="victory-badge"><span>🏆 Conquista Desbloqueada</span></div>

    <h1 class="victory-title">Seu Plano Está Completo!</h1>
    <p class="victory-subtitle">Você tem em mãos todas as ferramentas para sua transformação. Agora é hora de executar.</p>

    <div class="victory-stats">
      <div class="victory-stat"><div class="victory-stat-value">{{$data->programa_treino->frequencia_semanal}}</div><div class="victory-stat-label">Treinos/Semana</div></div>
      <div class="victory-stat"><div class="victory-stat-value">{{$data->estrategia_nutricional->meta_calorica_diaria}}</div><div class="victory-stat-label">Kcal/Dia</div></div>
      <div class="victory-stat"><div class="victory-stat-value">{{$data->projecao_resultados->prazo_escolhido}}</div><div class="victory-stat-label">Dias de Plano</div></div>
    </div>

    <div class="victory-quote">
      <p>"Disciplina é escolher entre o que você quer agora e o que você quer mais. Cada treino feito, cada refeição certa — tudo conta. Sua transformação já começou."</p>
    </div>

    <div class="victory-steps">
      <div class="victory-step"><div class="victory-step-num">01</div><div class="victory-step-text">Siga o plano com consistência por {{$data->projecao_resultados->prazo_escolhido}} dias</div></div>
      <div class="victory-step"><div class="victory-step-num">02</div><div class="victory-step-text">Registre progresso com fotos e medidas semanais</div></div>
      <div class="victory-step"><div class="victory-step-num">03</div><div class="victory-step-text">Ajuste conforme evolução e reavalie ao final</div></div>
    </div>

    <div class="victory-disclaimer">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
      <p><strong>Aviso Importante:</strong> Este plano é uma orientação geral e não substitui a avaliação de profissionais de saúde. Consulte um médico antes de iniciar qualquer programa de exercícios ou dieta. Resultados podem variar de acordo com fatores individuais.</p>
    </div>

    <div class="victory-meta">
      <span class="victory-meta-item"><strong>Versão:</strong> 1.0</span>
      <span class="victory-meta-item"><strong>Emitido em:</strong> {{ now()->format('d/m/Y') }}</span>
      <span class="victory-meta-item"><strong>Validade:</strong> {{$data->projecao_resultados->prazo_escolhido}} dias</span>
    </div>
  </section>

</body>

</html>