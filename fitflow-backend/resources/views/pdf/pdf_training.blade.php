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
    <div class="cover-content">
      <!-- Badge Premium -->
      <div class="cover-badge">
        <span>Plano Premium Personalizado</span>
      </div>

      <!-- Icon Principal -->
      <div class="cover-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M14.4 14.4 9.6 9.6" />
          <path
            d="M18.657 21.485a2 2 0 1 1-2.829-2.828l-1.767 1.768a2 2 0 1 1-2.829-2.829l6.364-6.364a2 2 0 1 1 2.829 2.829l-1.768 1.767a2 2 0 1 1 2.828 2.829z" />
          <path d="m21.5 21.5-1.4-1.4" />
          <path d="M3.9 3.9 2.5 2.5" />
          <path
            d="M6.404 12.768a2 2 0 1 1-2.829-2.829l1.768-1.767a2 2 0 1 1-2.828-2.829l2.828-2.828a2 2 0 1 1 2.829 2.828l1.767-1.768a2 2 0 1 1 2.829 2.829z" />
        </svg>
      </div>

      <!-- Título Principal -->
      <h1 class="cover-title">PLANO PERSONALIZADO DE</h1>
      <h2 class="cover-subtitle">TREINO & NUTRIÇÃO</h2>

      <!-- Linha Decorativa -->
      <div class="cover-divider"></div>

      <!-- Nome do Usuário -->
      <div>
        <p class="cover-user-label">Desenvolvido exclusivamente para</p>
        <p class="cover-user-name">{{$user->nome}}</p>
      </div>

      <!-- Pilares do Plano -->
      <div class="cover-pillars">
        <div class="cover-pillar">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            style="color: var(--accent);">
            <circle cx="12" cy="12" r="10" />
            <circle cx="12" cy="12" r="6" />
            <circle cx="12" cy="12" r="2" />
          </svg>
          <span>Transformação Corporal</span>
        </div>
        <div class="cover-pillar">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            style="color: var(--warning);">
            <path
              d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z" />
          </svg>
          <span>Performance Otimizada</span>
        </div>
        <div class="cover-pillar">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            style="color: var(--energy);">
            <path d="M3 3v16a2 2 0 0 0 2 2h16" />
            <path
              d="M7 11.207a.5.5 0 0 1 .146-.353l2-2a.5.5 0 0 1 .708 0l3.292 3.292a.5.5 0 0 0 .708 0l4.292-4.292a.5.5 0 0 1 .854.353V16a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1z" />
          </svg>
          <span>Resultados Mensuráveis</span>
        </div>
      </div>

      <!-- Citação Motivacional -->
      <div class="cover-quote">
        <p>"Seu corpo é o reflexo das suas escolhas diárias. Cada treino, cada refeição, cada decisão te aproxima do seu
          objetivo."</p>
      </div>

      <!-- Ícones de Seções -->
      <div class="cover-icons">
        <div class="cover-icon-item">
          <div class="cover-icon-circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              style="color: var(--accent);">
              <path d="M14.4 14.4 9.6 9.6" />
              <path
                d="M18.657 21.485a2 2 0 1 1-2.829-2.828l-1.767 1.768a2 2 0 1 1-2.829-2.829l6.364-6.364a2 2 0 1 1 2.829 2.829l-1.768 1.767a2 2 0 1 1 2.828 2.829z" />
              <path d="m21.5 21.5-1.4-1.4" />
              <path d="M3.9 3.9 2.5 2.5" />
              <path
                d="M6.404 12.768a2 2 0 1 1-2.829-2.829l1.768-1.767a2 2 0 1 1-2.828-2.829l2.828-2.828a2 2 0 1 1 2.829 2.828l1.767-1.768a2 2 0 1 1 2.829 2.829z" />
            </svg>
          </div>
          <span class="cover-icon-label">Treino</span>
        </div>
        <div class="cover-icon-separator"></div>
        <div class="cover-icon-item">
          <div class="cover-icon-circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              style="color: var(--energy);">
              <path
                d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 3-1-1.56-2.78-3-5-3a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z" />
              <path d="M10 2c1 .5 2 2 2 5" />
            </svg>
          </div>
          <span class="cover-icon-label">Nutrição</span>
        </div>
        <div class="cover-icon-separator"></div>
        <div class="cover-icon-item">
          <div class="cover-icon-circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              style="color: var(--gold);">
              <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
              <polyline points="16 7 22 7 22 13" />
            </svg>
          </div>
          <span class="cover-icon-label">Evolução</span>
        </div>
      </div>

      <!-- Informações do Plano -->
      <div class="cover-info">
        <div class="cover-info-item">
            <strong>Data de Emissão:</strong>
            {{ now()->translatedFormat('d \\d\\e F \\d\\e Y') }}
        </div>
        <div class="cover-info-item"><strong>Duração do Plano:</strong> {{$user->prazoPlanejado}}</div>
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
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2.5">
                <path d="M14.4 14.4 9.6 9.6" />
                <path d="M18.657 21.485a2 2 0 1 1-2.829-2.828l-1.767 1.768a2 2 0 1 1-2.829-2.829l6.364-6.364a2 2 0 1 1 2.829 2.829l-1.768 1.767a2 2 0 1 1 2.828 2.829z" />
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
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <path d="M14.4 14.4 9.6 9.6" />
                <path d="M18.657 21.485a2 2 0 1 1-2.829-2.828l-1.767 1.768a2 2 0 1 1-2.829-2.829l6.364-6.364a2 2 0 1 1 2.829 2.829l-1.768 1.767a2 2 0 1 1 2.828 2.829z" />
              </svg>
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
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z" />
                <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z" />
                <path d="M7 21h10" />
                <path d="M12 3v18" />
              </svg>
              <div class="phase-result-info">
                <span class="result-label">Peso</span>
                <span class="result-value">
                  {{ $data->projecao_resultados->fase_30_dias->variacao_peso_kg }}
                </span>
              </div>
            </div>
            
            <div class="phase-result-item">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <line x1="19" x2="5" y1="5" y2="19" />
                <circle cx="6.5" cy="6.5" r="2.5" />
              </svg>
              <div class="phase-result-info">
                <span class="result-label">Gordura</span>
                <span class="result-value">
                  {{ $data->projecao_resultados->fase_30_dias->variacao_gordura_percentual }}
                </span>
              </div>
            </div>
            
            <div class="phase-result-item">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <path d="M14.4 14.4 9.6 9.6" />
              </svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z" />
                  <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z" />
                  <path d="M7 21h10" />
                  <path d="M12 3v18" />
                </svg>
                <div class="phase-result-info">
                  <span class="result-label">Peso</span>
                  <span class="result-value">
                    {{ $data->projecao_resultados->fase_60_dias->variacao_peso_kg }}
                  </span>
                </div>
              </div>
              
              <div class="phase-result-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <line x1="19" x2="5" y1="5" y2="19" />
                  <circle cx="6.5" cy="6.5" r="2.5" />
                </svg>
                <div class="phase-result-info">
                  <span class="result-label">Gordura</span>
                  <span class="result-value">{{ $data->projecao_resultados->fase_60_dias->variacao_gordura_percentual }}</span>
                </div>
              </div>
              
              <div class="phase-result-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path d="M14.4 14.4 9.6 9.6" />
                </svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z" />
                  <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z" />
                  <path d="M7 21h10" />
                  <path d="M12 3v18" />
                </svg>
                <div class="phase-result-info">
                  <span class="result-label">Peso</span>
                  <span class="result-value">
                    {{ $data->projecao_resultados->fase_90_dias->variacao_peso_kg }}
                  </span>
                </div>
              </div>
              
              <div class="phase-result-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <line x1="19" x2="5" y1="5" y2="19" />
                  <circle cx="6.5" cy="6.5" r="2.5" />
                </svg>
                <div class="phase-result-info">
                  <span class="result-label">Gordura</span>
                  <span class="result-value">
                    {{ $data->projecao_resultados->fase_90_dias->variacao_gordura_percentual }}
                  </span>
                </div>
              </div>
              
              <div class="phase-result-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path d="M14.4 14.4 9.6 9.6" />
                </svg>
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
                      <div class="treino-day-icon"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 640 640"><path d="M96 176C96 149.5 117.5 128 144 128C170.5 128 192 149.5 192 176L192 288L448 288L448 176C448 149.5 469.5 128 496 128C522.5 128 544 149.5 544 176L544 192L560 192C586.5 192 608 213.5 608 240L608 288C625.7 288 640 302.3 640 320C640 337.7 625.7 352 608 352L608 400C608 426.5 586.5 448 560 448L544 448L544 464C544 490.5 522.5 512 496 512C469.5 512 448 490.5 448 464L448 352L192 352L192 464C192 490.5 170.5 512 144 512C117.5 512 96 490.5 96 464L96 448L80 448C53.5 448 32 426.5 32 400L32 352C14.3 352 0 337.7 0 320C0 302.3 14.3 288 32 288L32 240C32 213.5 53.5 192 80 192L96 192L96 176z"/></svg></div>
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
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/></svg>
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

  <!-- ==================== PAGE 6: WORKOUT UPPER A ==================== -->
  <section class="pdf-page">
    <div class="workout-card">
      <div class="workout-card-header upper">
        <div class="workout-card-header-row">
          <div class="workout-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M14.4 14.4 9.6 9.6"/>
              <path d="M18.657 21.485a2 2 0 1 1-2.829-2.828l-1.767 1.768a2 2 0 1 1-2.829-2.829l6.364-6.364a2 2 0 1 1 2.829 2.829l-1.768 1.767a2 2 0 1 1 2.828 2.829z"/>
            </svg>
          </div>
          <div class="workout-card-info">
            <h3 class="workout-card-title">Upper A — Força e Hipertrofia</h3>
            <p class="workout-card-subtitle">Foco em peitorais, dorsais e deltoides</p>
          </div>
          <div class="workout-card-count">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
            <span>6 exercícios</span>
          </div>
        </div>
        <div class="workout-card-badges">
          <span class="workout-card-badge">Peito</span>
          <span class="workout-card-badge">Costas</span>
          <span class="workout-card-badge">Ombro</span>
          <span class="workout-card-badge">Bíceps</span>
          <span class="workout-card-badge">Tríceps</span>
        </div>
      </div>

      <table class="exercise-table">
        <thead>
          <tr>
            <th style="width: 2.5rem;">#</th>
            <th>Exercício</th>
            <th style="width: 5.5rem;">Músculo</th>
            <th class="center" style="width: 4rem;">Séries</th>
            <th class="center" style="width: 4.5rem;">Reps</th>
            <th class="center" style="width: 4.5rem;">Descanso</th>
            <th class="center" style="width: 3.5rem;">RPE</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span class="exercise-number upper">1</span></td>
            <td>
              <span class="exercise-name">Supino Reto com Barra</span>
              <div class="exercise-tip">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"/></svg>
                <span>Desça até tocar o peito, cotovelos a 45°</span>
              </div>
            </td>
            <td><span class="muscle-badge upper">Peito</span></td>
            <td class="center"><span class="exercise-sets">4</span></td>
            <td class="center"><span class="exercise-reps">6-8</span></td>
            <td class="center"><span class="exercise-rest">120s</span></td>
            <td class="center"><span class="rpe-badge high">8.5</span></td>
          </tr>
          <tr>
            <td><span class="exercise-number upper">2</span></td>
            <td>
              <span class="exercise-name">Remada Curvada</span>
              <div class="exercise-tip">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"/></svg>
                <span>Mantenha as costas retas e puxe até o umbigo</span>
              </div>
            </td>
            <td><span class="muscle-badge upper">Costas</span></td>
            <td class="center"><span class="exercise-sets">4</span></td>
            <td class="center"><span class="exercise-reps">8-10</span></td>
            <td class="center"><span class="exercise-rest">90s</span></td>
            <td class="center"><span class="rpe-badge high">8</span></td>
          </tr>
          <tr>
            <td><span class="exercise-number upper">3</span></td>
            <td><span class="exercise-name">Desenvolvimento com Halteres</span></td>
            <td><span class="muscle-badge upper">Ombro</span></td>
            <td class="center"><span class="exercise-sets">3</span></td>
            <td class="center"><span class="exercise-reps">10-12</span></td>
            <td class="center"><span class="exercise-rest">90s</span></td>
            <td class="center"><span class="rpe-badge medium">7.5</span></td>
          </tr>
          <tr>
            <td><span class="exercise-number upper">4</span></td>
            <td><span class="exercise-name">Crucifixo Inclinado</span></td>
            <td><span class="muscle-badge upper">Peito</span></td>
            <td class="center"><span class="exercise-sets">3</span></td>
            <td class="center"><span class="exercise-reps">12-15</span></td>
            <td class="center"><span class="exercise-rest">60s</span></td>
            <td class="center"><span class="rpe-badge low">7</span></td>
          </tr>
          <tr>
            <td><span class="exercise-number upper">5</span></td>
            <td><span class="exercise-name">Rosca Direta com Barra</span></td>
            <td><span class="muscle-badge upper">Bíceps</span></td>
            <td class="center"><span class="exercise-sets">3</span></td>
            <td class="center"><span class="exercise-reps">10-12</span></td>
            <td class="center"><span class="exercise-rest">60s</span></td>
            <td class="center"><span class="rpe-badge medium">7.5</span></td>
          </tr>
          <tr>
            <td><span class="exercise-number upper">6</span></td>
            <td><span class="exercise-name">Tríceps Corda no Pulley</span></td>
            <td><span class="muscle-badge upper">Tríceps</span></td>
            <td class="center"><span class="exercise-sets">3</span></td>
            <td class="center"><span class="exercise-reps">12-15</span></td>
            <td class="center"><span class="exercise-rest">60s</span></td>
            <td class="center"><span class="rpe-badge low">7</span></td>
          </tr>
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
            <span class="progression-text">Aumente a carga 2-5% quando completar todas as séries com boa forma nas reps máximas.</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PAGE 7: WORKOUT LOWER A ==================== -->
  <section class="pdf-page">
    <div class="workout-card shadow-card">
      <div class="workout-card-header lower">
        <div class="workout-card-header-row">
          <div class="workout-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M14.4 14.4 9.6 9.6" />
              <path
                d="M18.657 21.485a2 2 0 1 1-2.829-2.828l-1.767 1.768a2 2 0 1 1-2.829-2.829l6.364-6.364a2 2 0 1 1 2.829 2.829l-1.768 1.767a2 2 0 1 1 2.828 2.829z" />
            </svg>
          </div>
          <div class="workout-card-info">
            <h3 class="workout-card-title">Lower A - Força e Potência</h3>
            <p class="workout-card-subtitle">Foco em quadríceps, glúteos e posterior de coxa</p>
          </div>
          <div class="workout-card-count">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10" />
              <circle cx="12" cy="12" r="6" />
              <circle cx="12" cy="12" r="2" />
            </svg>
            <span>6 exercícios</span>
          </div>
        </div>
        <div class="workout-card-badges">
          <span class="workout-card-badge">Quadríceps</span>
          <span class="workout-card-badge">Glúteos</span>
          <span class="workout-card-badge">Posterior</span>
          <span class="workout-card-badge">Panturrilha</span>
        </div>
      </div>

      <table class="exercise-table">
        <thead>
          <tr>
            <th style="width: 2rem;">#</th>
            <th>Exercício</th>
            <th style="width: 5rem;">Músculo</th>
            <th class="center" style="width: 3.5rem;">Séries</th>
            <th class="center" style="width: 4rem;">Reps</th>
            <th class="center" style="width: 4rem;">Descanso</th>
            <th class="center" style="width: 3rem;">RPE</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span class="exercise-number lower">1</span></td>
            <td>
              <span class="exercise-name">Agachamento Livre</span>
              <div class="exercise-tip">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path
                    d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5" />
                </svg>
                <span>Desça até pelo menos paralelo, joelhos alinhados</span>
              </div>
            </td>
            <td><span class="muscle-badge lower">Quadríceps</span></td>
            <td class="center"><span class="exercise-sets">4</span></td>
            <td class="center"><span class="exercise-reps">6-8</span></td>
            <td class="center"><span class="exercise-rest">120s</span></td>
            <td class="center"><span class="rpe-badge high">8.5</span></td>
          </tr>
          <tr>
            <td><span class="exercise-number lower">2</span></td>
            <td>
              <span class="exercise-name">Leg Press 45°</span>
              <div class="exercise-tip">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path
                    d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5" />
                </svg>
                <span>Não bloqueie os joelhos no topo</span>
              </div>
            </td>
            <td><span class="muscle-badge lower">Quadríceps</span></td>
            <td class="center"><span class="exercise-sets">4</span></td>
            <td class="center"><span class="exercise-reps">10-12</span></td>
            <td class="center"><span class="exercise-rest">90s</span></td>
            <td class="center"><span class="rpe-badge high">8</span></td>
          </tr>
          <tr>
            <td><span class="exercise-number lower">3</span></td>
            <td><span class="exercise-name">Cadeira Extensora</span></td>
            <td><span class="muscle-badge lower">Quadríceps</span></td>
            <td class="center"><span class="exercise-sets">3</span></td>
            <td class="center"><span class="exercise-reps">12-15</span></td>
            <td class="center"><span class="exercise-rest">60s</span></td>
            <td class="center"><span class="rpe-badge low">7</span></td>
          </tr>
          <tr>
            <td><span class="exercise-number lower">4</span></td>
            <td><span class="exercise-name">Mesa Flexora</span></td>
            <td><span class="muscle-badge lower">Posterior</span></td>
            <td class="center"><span class="exercise-sets">3</span></td>
            <td class="center"><span class="exercise-reps">10-12</span></td>
            <td class="center"><span class="exercise-rest">60s</span></td>
            <td class="center"><span class="rpe-badge medium">7.5</span></td>
          </tr>
          <tr>
            <td><span class="exercise-number lower">5</span></td>
            <td>
              <span class="exercise-name">Elevação de Quadril</span>
              <div class="exercise-tip">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path
                    d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5" />
                </svg>
                <span>Mantenha core ativado</span>
              </div>
            </td>
            <td><span class="muscle-badge lower">Glúteos</span></td>
            <td class="center"><span class="exercise-sets">3</span></td>
            <td class="center"><span class="exercise-reps">12-15</span></td>
            <td class="center"><span class="exercise-rest">60s</span></td>
            <td class="center"><span class="rpe-badge low">7</span></td>
          </tr>
          <tr>
            <td><span class="exercise-number lower">6</span></td>
            <td><span class="exercise-name">Panturrilha em Pé</span></td>
            <td><span class="muscle-badge lower">Panturrilha</span></td>
            <td class="center"><span class="exercise-sets">4</span></td>
            <td class="center"><span class="exercise-reps">15-20</span></td>
            <td class="center"><span class="exercise-rest">45s</span></td>
            <td class="center"><span class="rpe-badge high">8</span></td>
          </tr>
        </tbody>
      </table>

      <div class="workout-card-footer lower">
        <div class="workout-card-footer-content">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
            <polyline points="16 7 22 7 22 13" />
          </svg>
          <div>
            <span class="progression-label">Progressão: </span>
            <span class="progression-text">Priorize a forma correta sobre a carga. Adicione peso apenas quando executar
              com técnica perfeita.</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PAGE 8: DIET SECTION ==================== -->
  <section class="pdf-page">
      <div class="nutri-header">
        <div class="nutri-badge">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 3-1-1.56-2.78-3-5-3a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z"/><path d="M10 2c1 .5 2 2 2 5"/></svg>
          <span>Plano Nutricional</span>
        </div>
        <h2 class="nutri-title">Sua Estratégia Alimentar</h2>
        <p class="nutri-subtitle">Nutrição otimizada para definição muscular com preservação de massa magra</p>
      </div>

      <div class="nutri-hero">
        <h3>Conceito do Plano: Déficit Inteligente</h3>
        <p>Este plano foi desenhado com um <strong>déficit calórico moderado (-500 kcal)</strong> que maximiza a queima de gordura enquanto preserva massa muscular. A distribuição estratégica de macronutrientes garante energia para treinos intensos, recuperação adequada e saciedade ao longo do dia. Cada refeição é planejada com propósito.</p>
      </div>

      <div class="nutri-objective">
        <div class="nutri-objective-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
        </div>
        <div>
          <h4>Definição Muscular com Preservação de Massa</h4>
          <p>Hipocalórico, alto em proteínas, carboidratos estratégicos e gorduras saudáveis</p>
        </div>
        <div class="nutri-objective-badges">
          <span class="nutri-obj-badge">📋 4 refeições/dia</span>
          <span class="nutri-obj-badge">⏰ Horários fixos</span>
        </div>
      </div>

      <div class="nutri-pillars-grid">
        <div class="nutri-pillar">
          <div class="nutri-pillar-icon protein">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.4 14.4 9.6 9.6"/><path d="M18.657 21.485a2 2 0 1 1-2.829-2.828l-1.767 1.768a2 2 0 1 1-2.829-2.829l6.364-6.364a2 2 0 1 1 2.829 2.829l-1.768 1.767a2 2 0 1 1 2.828 2.829z"/></svg>
          </div>
          <h4>Proteína Alta</h4>
          <p>1.8-2.2g/kg para preservar massa muscular durante o déficit</p>
        </div>
        <div class="nutri-pillar">
          <div class="nutri-pillar-icon carbs">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>
          </div>
          <h4>Carbs Estratégicos</h4>
          <p>Concentrados pré e pós-treino para máxima performance</p>
        </div>
        <div class="nutri-pillar">
          <div class="nutri-pillar-icon fat">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20"/><path d="m15 5 3 3-3 3"/><path d="m9 19-3-3 3-3"/></svg>
          </div>
          <h4>Gorduras Saudáveis</h4>
          <p>Equilíbrio hormonal, saciedade e absorção de vitaminas</p>
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
          <div class="nutri-macro-emoji">💪</div>
          <span class="nutri-macro-value">161g</span>
          <span class="nutri-macro-label">Proteínas</span>
        </div>
        <div class="nutri-macro-card carbs">
          <div class="nutri-macro-emoji">⚡</div>
          <span class="nutri-macro-value">159g</span>
          <span class="nutri-macro-label">Carboidratos</span>
        </div>
        <div class="nutri-macro-card fat">
          <div class="nutri-macro-emoji">🥑</div>
          <span class="nutri-macro-value">67g</span>
          <span class="nutri-macro-label">Gorduras</span>
        </div>
        <div class="nutri-macro-card calories">
          <div class="nutri-macro-emoji">🔥</div>
          <span class="nutri-macro-value">1842</span>
          <span class="nutri-macro-label">kcal Total</span>
        </div>
      </div>

      <div class="nutri-tips-grid">
        <div class="nutri-tip-card">
          <div class="nutri-tip-num">1</div>
          <div>
            <h4>Prepare com Antecedência</h4>
            <p>Faça meal prep no domingo para garantir refeições da semana inteira.</p>
          </div>
        </div>
        <div class="nutri-tip-card">
          <div class="nutri-tip-num">2</div>
          <div>
            <h4>Hidratação Constante</h4>
            <p>Beba no mínimo 3L de água/dia. Água é essencial para o metabolismo.</p>
          </div>
        </div>
        <div class="nutri-tip-card">
          <div class="nutri-tip-num">3</div>
          <div>
            <h4>Suplementação Básica</h4>
            <p>Creatina 5g/dia e Whey pós-treino completam a dieta com eficiência.</p>
          </div>
        </div>
      </div>

      <div class="treino-progression">
        <div class="treino-progression-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/>
            <polyline points="16 7 22 7 22 13"/>
          </svg>
          <h4>Como Manter a Dieta no Longo Prazo</h4>
        </div>
        <p>
          A dieta funciona quando ela se encaixa na sua rotina. 
          Organize suas refeições, tenha opções práticas à disposição e evite decisões de última hora. 
          <strong>Constância vence motivação</strong>. Pequenos deslizes não anulam o progresso — desistir sim.
        </p>
    </div>

  </section>

  <!-- ==================== PAGE 9: MEALS ==================== -->
  <section class="pdf-page">
      <div class="meals-page-container">
        <!-- Refeição 1 -->
        <div class="meal-card">
          <div class="meal-card-header green">
            <div class="meal-header-left">
              <div class="meal-icon">🌅</div>
              <div>
                <h3 class="meal-title">Café da Manhã</h3>
                <p class="meal-desc">Primeira refeição do dia — energia e proteína</p>
              </div>
            </div>
            <div class="meal-time">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              07:00
            </div>
          </div>
          <div class="meal-body">
            <table class="food-table">
              <thead>
                <tr>
                  <th>Alimento</th>
                  <th class="center">Qtd</th>
                  <th class="center"><span class="macro-header protein">P</span></th>
                  <th class="center"><span class="macro-header carbs">C</span></th>
                  <th class="center"><span class="macro-header fat">G</span></th>
                  <th class="center"><span class="macro-header kcal">Kcal</span></th>
                </tr>
              </thead>
              <tbody>
                <tr><td class="food-name">Ovos inteiros</td><td class="food-quantity">3 un</td><td class="food-protein">18</td><td class="food-carbs">1</td><td class="food-fat">15</td><td class="food-calories">210</td></tr>
                <tr><td class="food-name">Pão integral</td><td class="food-quantity">2 fatias</td><td class="food-protein">6</td><td class="food-carbs">24</td><td class="food-fat">2</td><td class="food-calories">140</td></tr>
                <tr><td class="food-name">Queijo cottage</td><td class="food-quantity">60g</td><td class="food-protein">16</td><td class="food-carbs">5</td><td class="food-fat">2</td><td class="food-calories">80</td></tr>
                <tr><td class="food-name">Mamão papaia</td><td class="food-quantity">150g</td><td class="food-protein">1</td><td class="food-carbs">14</td><td class="food-fat">0</td><td class="food-calories">56</td></tr>
                <tr><td class="food-name">Granola</td><td class="food-quantity">30g</td><td class="food-protein">3</td><td class="food-carbs">18</td><td class="food-fat">4</td><td class="food-calories">116</td></tr>
                <tr><td class="food-name">Iogurte natural</td><td class="food-quantity">200g</td><td class="food-protein">10</td><td class="food-carbs">12</td><td class="food-fat">4</td><td class="food-calories">128</td></tr>
                <tr><td class="food-name">Mel</td><td class="food-quantity">10g</td><td class="food-protein">0</td><td class="food-carbs">8</td><td class="food-fat">0</td><td class="food-calories">32</td></tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2"><strong>TOTAL</strong></td>
                  <td class="food-protein"><strong>54</strong></td>
                  <td class="food-carbs"><strong>82</strong></td>
                  <td class="food-fat"><strong>27</strong></td>
                  <td class="food-calories"><strong>762</strong></td>
                </tr>
              </tfoot>
            </table>
          </div>
          <div class="meal-card-footer green">
            <div class="meal-footer-macros">
              <div class="meal-footer-macro protein"><span class="meal-footer-dot"></span>Proteína: <strong>54g</strong></div>
              <div class="meal-footer-macro carbs"><span class="meal-footer-dot"></span>Carbos: <strong>82g</strong></div>
              <div class="meal-footer-macro fat"><span class="meal-footer-dot"></span>Gordura: <strong>27g</strong></div>
            </div>
            <div class="meal-footer-kcal">762 kcal</div>
          </div>
        </div>

        <!-- Refeição 2 -->
        <div class="meal-card">
          <div class="meal-card-header blue">
            <div class="meal-header-left">
              <div class="meal-icon">🍽️</div>
              <div>
                <h3 class="meal-title">Almoço</h3>
                <p class="meal-desc">Refeição principal — maior volume calórico</p>
              </div>
            </div>
            <div class="meal-time">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              12:00
            </div>
          </div>
          <div class="meal-body">
            <table class="food-table">
              <thead>
                <tr>
                  <th>Alimento</th>
                  <th class="center">Qtd</th>
                  <th class="center"><span class="macro-header protein">P</span></th>
                  <th class="center"><span class="macro-header carbs">C</span></th>
                  <th class="center"><span class="macro-header fat">G</span></th>
                  <th class="center"><span class="macro-header kcal">Kcal</span></th>
                </tr>
              </thead>
              <tbody>
                <tr><td class="food-name">Peito de frango</td><td class="food-quantity">180g</td><td class="food-protein">45</td><td class="food-carbs">0</td><td class="food-fat">4</td><td class="food-calories">216</td></tr>
                <tr><td class="food-name">Arroz integral</td><td class="food-quantity">120g</td><td class="food-protein">3</td><td class="food-carbs">30</td><td class="food-fat">1</td><td class="food-calories">144</td></tr>
                <tr><td class="food-name">Feijão preto</td><td class="food-quantity">80g</td><td class="food-protein">6</td><td class="food-carbs">15</td><td class="food-fat">0</td><td class="food-calories">80</td></tr>
                <tr><td class="food-name">Brócolis</td><td class="food-quantity">100g</td><td class="food-protein">3</td><td class="food-carbs">7</td><td class="food-fat">0</td><td class="food-calories">34</td></tr>
                <tr><td class="food-name">Azeite extra virgem</td><td class="food-quantity">10ml</td><td class="food-protein">0</td><td class="food-carbs">0</td><td class="food-fat">10</td><td class="food-calories">90</td></tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2"><strong>TOTAL</strong></td>
                  <td class="food-protein"><strong>57</strong></td>
                  <td class="food-carbs"><strong>52</strong></td>
                  <td class="food-fat"><strong>15</strong></td>
                  <td class="food-calories"><strong>564</strong></td>
                </tr>
              </tfoot>
            </table>
          </div>
          <div class="meal-card-footer blue">
            <div class="meal-footer-macros">
              <div class="meal-footer-macro protein"><span class="meal-footer-dot"></span>Proteína: <strong>57g</strong></div>
              <div class="meal-footer-macro carbs"><span class="meal-footer-dot"></span>Carbos: <strong>52g</strong></div>
              <div class="meal-footer-macro fat"><span class="meal-footer-dot"></span>Gordura: <strong>15g</strong></div>
            </div>
            <div class="meal-footer-kcal">564 kcal</div>
          </div>
        </div>
    </div>
  </section>

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
                  <span class="hydration-main-number">3L</span>
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
                  <span class="hydration-calc-value">85kg</span>
                </div>
                <div class="hydration-calc-symbol">×</div>
                <div class="hydration-calc-item">
                  <span class="hydration-calc-label">Fator</span>
                  <span class="hydration-calc-value">35ml</span>
                </div>
                <div class="hydration-calc-symbol">=</div>
                <div class="hydration-calc-item result">
                  <span class="hydration-calc-label">Necessidade</span>
                  <span class="hydration-calc-value highlight">2.975ml</span>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M14.4 14.4 9.6 9.6"/>
                  <path d="M18.657 21.485a2 2 0 1 1-2.829-2.828l-1.767 1.768a2 2 0 1 1-2.829-2.829l6.364-6.364a2 2 0 1 1 2.829 2.829l-1.768 1.767a2 2 0 1 1 2.828 2.829z"/>
                </svg>
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
                  Maximizar queima de gordura sem comprometer ganhos musculares
              </p>
          </div>

          <!-- HERO CARD -->
          <div class="cardio-hero-card">
              <div class="cardio-hero-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
              </div>
              <div>
                  <h3>Por Que Cardio Estratégico?</h3>
                  <p>Durante um cutting, queremos queimar gordura enquanto preservamos ao máximo os músculos conquistados. Cardio em excesso ou mal planejado pode catabolizar massa muscular. Nossa abordagem prioriza LISS moderado, com HIIT opcional apenas quando bem recuperado.</p>
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
                      <div class="cardio-stat-value-premium">90-120min</div>
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
                      <div class="cardio-stat-value-premium">800-1200kcal</div>
                  </div>
              </div>
          </div>

          <!-- ACTIVITY GRID 2x2 -->
          <div class="cardio-activity-grid">
              <!-- Card 1: Caminhada em Jejum -->
              <div class="cardio-activity-card">
                  <div class="cardio-activity-header">
                      <div class="cardio-activity-icon green">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                          </svg>
                      </div>
                      <div style="flex: 1;">
                          <h4>Caminhada em Jejum</h4>
                          <div class="cardio-activity-badges">
                              <span class="cardio-badge frequency">3x/semana</span>
                              <span class="cardio-badge duration">30-40min</span>
                              <span class="cardio-badge intensity light">Leve</span>
                          </div>
                      </div>
                  </div>
                  <p class="cardio-activity-notes">
                      Logo ao acordar, antes do café da manhã. Ritmo confortável, FC 60-70% da máxima. Ideal para mobilizar gordura armazenada.
                  </p>
                  <div class="cardio-activity-benefits">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <span>Máxima oxidação de gordura</span>
                  </div>
              </div>

              <!-- Card 2: Bicicleta Ergométrica -->
              <div class="cardio-activity-card">
                  <div class="cardio-activity-header">
                      <div class="cardio-activity-icon blue">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                          </svg>
                      </div>
                      <div style="flex: 1;">
                          <h4>Bicicleta Ergométrica</h4>
                          <div class="cardio-activity-badges">
                              <span class="cardio-badge frequency">2x/semana</span>
                              <span class="cardio-badge duration">20-30min</span>
                              <span class="cardio-badge intensity moderate">Moderada</span>
                          </div>
                      </div>
                  </div>
                  <p class="cardio-activity-notes">
                      Pós-treino de superiores ou em dias off. FC 70-80%. Baixo impacto nas articulações, ideal para recovery ativo.
                  </p>
                  <div class="cardio-activity-benefits">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <span>Baixo impacto, alta eficiência</span>
                  </div>
              </div>

              <!-- Card 3: HIIT Opcional -->
              <div class="cardio-activity-card">
                  <div class="cardio-activity-header">
                      <div class="cardio-activity-icon red">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                          </svg>
                      </div>
                      <div style="flex: 1;">
                          <h4>HIIT Opcional</h4>
                          <div class="cardio-activity-badges">
                              <span class="cardio-badge frequency">1x/semana</span>
                              <span class="cardio-badge duration">15-20min</span>
                              <span class="cardio-badge intensity high">Alta</span>
                          </div>
                      </div>
                  </div>
                  <p class="cardio-activity-notes">
                      Apenas se bem recuperado. Sprints 30seg on/90seg off. Nunca em dias de perna ou no dia seguinte. Prioriza EPOC e metabolismo.
                  </p>
                  <div class="cardio-activity-benefits">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <span>Pós-queima de 24-48h</span>
                  </div>
              </div>

              <!-- Card 4: Escada/Stairmaster -->
              <div class="cardio-activity-card">
                  <div class="cardio-activity-header">
                      <div class="cardio-activity-icon gold">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                          </svg>
                      </div>
                      <div style="flex: 1;">
                          <h4>Escada/Stairmaster</h4>
                          <div class="cardio-activity-badges">
                              <span class="cardio-badge frequency">1-2x/semana</span>
                              <span class="cardio-badge duration">15-25min</span>
                              <span class="cardio-badge intensity moderate">Moderada</span>
                          </div>
                      </div>
                  </div>
                  <p class="cardio-activity-notes">
                      Ótimo para glúteos e posterior de coxa. Ritmo constante, sem segurar o corrimão. Pode substituir uma sessão de caminhada.
                  </p>
                  <div class="cardio-activity-benefits">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <span>Tonifica membros inferiores</span>
                  </div>
              </div>
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
                          <span class="rest-macro-amount">170g</span>
                      </div>
                      <div class="rest-macro-row">
                          <span class="rest-macro-name">Carboidratos</span>
                          <span class="rest-macro-amount highlight">200g</span>
                      </div>
                      <div class="rest-macro-row">
                          <span class="rest-macro-name">Gorduras</span>
                          <span class="rest-macro-amount">70g</span>
                      </div>
                  </div>
                  <div class="rest-nutrition-total training">
                      <span>Total</span>
                      <strong>2100 kcal</strong>
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
                          <span class="rest-macro-amount">170g</span>
                          <span class="rest-macro-badge kept">Mantida</span>
                      </div>
                      <div class="rest-macro-row">
                          <span class="rest-macro-name">Carboidratos</span>
                          <span class="rest-macro-amount highlight">150g</span>
                          <span class="rest-macro-badge reduced">-25%</span>
                      </div>
                      <div class="rest-macro-row">
                          <span class="rest-macro-name">Gorduras</span>
                          <span class="rest-macro-amount">77g</span>
                          <span class="rest-macro-badge increased">+10%</span>
                      </div>
                  </div>
                  <div class="rest-nutrition-total rest">
                      <span>Total</span>
                      <strong>1890 kcal</strong>
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
      <div class="victory-stat"><div class="victory-stat-value">4</div><div class="victory-stat-label">Treinos/Semana</div></div>
      <div class="victory-stat"><div class="victory-stat-value">1842</div><div class="victory-stat-label">Kcal/Dia</div></div>
      <div class="victory-stat"><div class="victory-stat-value">90</div><div class="victory-stat-label">Dias de Plano</div></div>
    </div>

    <div class="victory-quote">
      <p>"Disciplina é escolher entre o que você quer agora e o que você quer mais. Cada treino feito, cada refeição certa — tudo conta. Sua transformação já começou."</p>
    </div>

    <div class="victory-steps">
      <div class="victory-step"><div class="victory-step-num">01</div><div class="victory-step-text">Siga o plano com consistência por 90 dias</div></div>
      <div class="victory-step"><div class="victory-step-num">02</div><div class="victory-step-text">Registre progresso com fotos e medidas semanais</div></div>
      <div class="victory-step"><div class="victory-step-num">03</div><div class="victory-step-text">Ajuste conforme evolução e reavalie ao final</div></div>
    </div>

    <div class="victory-disclaimer">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
      <p><strong>Aviso Importante:</strong> Este plano é uma orientação geral e não substitui a avaliação de profissionais de saúde. Consulte um médico antes de iniciar qualquer programa de exercícios ou dieta. Resultados podem variar de acordo com fatores individuais.</p>
    </div>

    <div class="victory-meta">
      <span class="victory-meta-item"><strong>Versão:</strong> 1.0</span>
      <span class="victory-meta-item"><strong>Emitido em:</strong> 29/01/2026</span>
      <span class="victory-meta-item"><strong>Validade:</strong> 90 dias</span>
    </div>
  </section>

</body>

</html>