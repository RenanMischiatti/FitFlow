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
        <p class="cover-user-name">João Carlos Silva</p>
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
        <div class="cover-info-item"><strong>Data de Emissão:</strong> 29 de Janeiro de 2026</div>
        <div class="cover-info-item"><strong>Duração do Plano:</strong> 90 dias</div>
      </div>
    </div>
  </section>

  <!-- ==================== PAGE 2: CALORIE ANALYSIS ==================== -->
  <section class="pdf-page">
    <!-- Header Premium -->
    <div class="calorie-header">
      <div class="calorie-badge">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path
            d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z" />
          <path d="M20 3v4" />
          <path d="M22 5h-4" />
          <path d="M4 17v2" />
          <path d="M5 18H3" />
        </svg>
        <span>Plano Personalizado</span>
      </div>
      <h2>Sua Estratégia Nutricional</h2>
      <p>Baseado em cálculos científicos precisos para alcançar seus objetivos de forma saudável e sustentável.</p>
    </div>

    <!-- Layout Principal: 2 Colunas Equilibradas -->
    <div class="calorie-grid">

      <!-- Coluna Esquerda: Cards de Calorias -->
      <div class="calorie-cards">
        <!-- Card Manutenção -->
        <div class="calorie-card">
          <div class="calorie-card-row">
            <div class="calorie-card-icon" style="background-color: var(--secondary);">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                style="color: #6b7280;">
                <circle cx="12" cy="12" r="10" />
                <circle cx="12" cy="12" r="6" />
                <circle cx="12" cy="12" r="2" />
              </svg>
            </div>
            <div class="calorie-card-info">
              <p class="calorie-card-label">Gasto Calórico Diário</p>
              <p class="calorie-card-sublabel">Manutenção (TDEE)</p>
            </div>
            <div class="calorie-card-value">
              <span class="number" style="color: var(--foreground);">2.600</span>
              <span class="unit">kcal</span>
            </div>
          </div>
        </div>

        <!-- Card Meta - Destaque Principal -->
        <div class="calorie-card-target">
          <div class="decorative-circle"></div>
          <div style="position: relative;">
            <div class="calorie-card-row">
              <div class="calorie-card-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path
                    d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z" />
                </svg>
              </div>
              <div class="calorie-card-info">
                <p class="calorie-card-label">Sua Meta Diária</p>
                <p class="calorie-card-sublabel">Para atingir resultados</p>
              </div>
              <div class="calorie-card-value">
                <span class="number">2.100</span>
                <span class="unit">kcal</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Card Déficit -->
        <div class="calorie-card calorie-card-deficit">
          <div class="calorie-card-row">
            <div class="calorie-card-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="22 17 13.5 8.5 8.5 13.5 2 7" />
                <polyline points="16 17 22 17 22 11" />
              </svg>
            </div>
            <div class="calorie-card-info">
              <p class="calorie-card-label">Déficit Calórico</p>
              <p class="calorie-card-sublabel">Para perda de gordura</p>
            </div>
            <div class="calorie-card-value">
              <span class="number">-500</span>
              <span class="unit">kcal</span>
            </div>
          </div>
        </div>

        <!-- Estratégia Badge -->
        <div class="strategy-card">
          <div class="strategy-card-row">
            <div class="strategy-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path
                  d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z" />
              </svg>
            </div>
            <div style="flex: 1;">
              <div style="display: flex; align-items: center; gap: 0.75rem;">
                <span class="strategy-label">Estratégia:</span>
                <span class="strategy-badge">Déficit Moderado</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Coluna Direita: Gráficos de Macros -->
      <div class="macros-panel border">
        <div class="macros-header">
          <div class="macros-header-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 3v18h18" />
              <path d="m19 9-5 5-4-4-3 3" />
            </svg>
          </div>
          <div>
            <h3>Distribuição de Macronutrientes</h3>
            <p>Proporção ideal para seus objetivos</p>
          </div>
        </div>

        <!-- Círculos de Progresso - Tamanho Reduzido -->
        <div class="macros-circles" style="margin-bottom: 1rem;">
          <!-- Proteínas -->
          <div class="macro-item">
            <div class="macro-circle">
              <svg class="progress-ring" viewBox="0 0 80 80">
                <circle class="progress-bg" cx="40" cy="40" r="32" />
                <circle class="progress-bar" cx="40" cy="40" r="32"
                  style="stroke: var(--primary); stroke-dasharray: 201; stroke-dashoffset: 137;" />
              </svg>
              <div class="macro-circle-content">
                <span class="macro-circle-value" style="color: var(--primary);">170g</span>
                <span class="macro-circle-percent">32%</span>
              </div>
            </div>
            <div class="macro-label" style="margin-top: 0.375rem;">
              <svg width="20" height="20" fill="var(--primary)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M224 329.2C224 337.7 220.6 345.8 214.6 351.8L187.8 378.6C175.5 390.9 155.3 390 138.4 385.8C133.8 384.7 128.9 384 123.9 384C90.8 384 63.9 410.9 63.9 444C63.9 477.1 90.8 504 123.9 504C130.2 504 135.9 509.7 135.9 516C135.9 549.1 162.8 576 195.9 576C229 576 255.9 549.1 255.9 516C255.9 511 255.3 506.2 254.1 501.5C249.9 484.6 248.9 464.4 261.3 452.1L288.1 425.3C294.1 419.3 302.2 415.9 310.7 415.9L399.9 415.9C406.2 415.9 412.3 415.6 418.4 414.9C430.3 413.7 434.8 399.4 429.2 388.9C420.7 373.1 415.9 355.1 415.9 335.9C415.9 274 466 223.9 527.9 223.9C535.9 223.9 543.6 224.7 551.1 226.3C562.8 228.8 575.2 220.4 573.1 208.7C558.4 126.4 486.4 63.9 399.9 63.9C302.7 63.9 223.9 142.7 223.9 239.9L223.9 329.1z"/></svg>
              <span style="font-size: 1.1rem;">Proteínas</span>
            </div>
            <p class="macro-sublabel" style="font-size: 1rem;">Construção muscular</p>
          </div>

          <!-- Carboidratos -->
          <div class="macro-item">
            <div class="macro-circle">
              <svg class="progress-ring" viewBox="0 0 80 80">
                <circle class="progress-bg" cx="40" cy="40" r="32" />
                <circle class="progress-bar" cx="40" cy="40" r="32"
                  style="stroke: var(--accent); stroke-dasharray: 201; stroke-dashoffset: 125;" />
              </svg>
              <div class="macro-circle-content">
                <span class="macro-circle-value" style="color: var(--accent);">200g</span>
                <span class="macro-circle-percent">38%</span>
              </div>
            </div>
            <div class="macro-label" style="margin-top: 0.375rem;">
              <svg width="20" height="20" fill="var(--accent)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M240 104C240 90.7 250.7 80 264 80L280 80C293.3 80 304 90.7 304 104C304 117.3 293.3 128 280 128L264 128C250.7 128 240 117.3 240 104zM264 152L280 152C293.3 152 304 162.7 304 176C304 189.3 293.3 200 280 200L264 200C250.7 200 240 189.3 240 176C240 162.7 250.7 152 264 152zM120 224L136 224C149.3 224 160 234.7 160 248C160 261.3 149.3 272 136 272L120 272C106.7 272 96 261.3 96 248C96 234.7 106.7 224 120 224zM64 347.4C64 332.3 76.3 320 91.4 320L548.5 320C563.6 320 575.9 332.3 575.9 347.4C575.9 417.9 531.5 478.1 469.2 501.5L467.5 516C465.5 532 451.9 544 435.7 544L204.2 544C188.1 544 174.4 532 172.4 516L170.6 501.6C108.4 478.1 64 417.9 64 347.4zM288 248C288 234.7 298.7 224 312 224L328 224C341.3 224 352 234.7 352 248C352 261.3 341.3 272 328 272L312 272C298.7 272 288 261.3 288 248zM192 248C192 234.7 202.7 224 216 224L232 224C245.3 224 256 234.7 256 248C256 261.3 245.3 272 232 272L216 272C202.7 272 192 261.3 192 248zM168 152L184 152C197.3 152 208 162.7 208 176C208 189.3 197.3 200 184 200L168 200C154.7 200 144 189.3 144 176C144 162.7 154.7 152 168 152zM384 248C384 234.7 394.7 224 408 224L424 224C437.3 224 448 234.7 448 248C448 261.3 437.3 272 424 272L408 272C394.7 272 384 261.3 384 248zM360 152L376 152C389.3 152 400 162.7 400 176C400 189.3 389.3 200 376 200L360 200C346.7 200 336 189.3 336 176C336 162.7 346.7 152 360 152zM480 248C480 234.7 490.7 224 504 224L520 224C533.3 224 544 234.7 544 248C544 261.3 533.3 272 520 272L504 272C490.7 272 480 261.3 480 248zM456 152L472 152C485.3 152 496 162.7 496 176C496 189.3 485.3 200 472 200L456 200C442.7 200 432 189.3 432 176C432 162.7 442.7 152 456 152zM360 80L376 80C389.3 80 400 90.7 400 104C400 117.3 389.3 128 376 128L360 128C346.7 128 336 117.3 336 104C336 90.7 346.7 80 360 80z"/></svg>
              <span style="font-size: 1.1rem;">Carboidratos</span>
            </div>
            <p class="macro-sublabel" style="font-size: 1rem;">Energia para treinos</p>
          </div>

          <!-- Gorduras -->
          <div class="macro-item">
            <div class="macro-circle">
              <svg class="progress-ring" viewBox="0 0 80 80">
                <circle class="progress-bg" cx="40" cy="40" r="32" />
                <circle class="progress-bar" cx="40" cy="40" r="32"
                  style="stroke: var(--gold); stroke-dasharray: 201; stroke-dashoffset: 141;" />
              </svg>
              <div class="macro-circle-content">
                <span class="macro-circle-value" style="color: var(--gold);">70g</span>
                <span class="macro-circle-percent">30%</span>
              </div>
            </div>
            <div class="macro-label" style="margin-top: 0.375rem;">
              <svg width="20" height="20" fill="var(--gold)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M589 160.7C603.4 175.1 601.4 199.1 584.7 210.9L520.1 256.6C476.4 287.5 440.9 328.5 416.7 376.2L391.4 426C366.3 475.3 329.3 517.5 283.6 548.6L209.5 599.2C196.4 608.1 178.8 606.5 167.7 595.3L122.8 550.4L209.3 483.9C251.6 451.4 286 409.6 309.9 361.9L334.4 312.8C358.9 263.8 396.2 222.2 442.3 192.6L551 122.7L589 160.7zM516.2 87.9L416.3 152.2C362.9 186.5 319.8 234.6 291.4 291.3L266.9 340.4C246.3 381.7 216.6 417.7 180 445.8L88.6 516.1L51.7 479.2C37.3 464.8 39.3 440.8 56 429L120.6 383.3C164.3 352.4 199.8 311.4 224 263.7L249.3 213.9C274.3 164.8 311.3 122.6 357 91.4L431.1 40.8C444.2 31.9 461.7 33.5 472.9 44.7L516.2 88z"/></svg>
              <span style="font-size: 1.1rem;">Gorduras</span>
            </div>
            <p class="macro-sublabel" style="font-size: 1rem;">Saúde hormonal</p>
          </div>
        </div>

        <!-- Resumo Compacto com Informações Adicionais -->
        <div class="macros-summary" style="padding-top: 0.75rem;">
          <div class="macros-summary-items">
            <div class="macros-summary-item">
              <div class="macros-summary-dot" style="background-color: var(--primary);"></div>
              <span style="font-size: 0.7rem;">Prot: <strong>170g</strong></span>
            </div>
            <div class="macros-summary-item">
              <div class="macros-summary-dot" style="background-color: var(--accent);"></div>
              <span style="font-size: 0.7rem;">Carb: <strong>200g</strong></span>
            </div>
            <div class="macros-summary-item">
              <div class="macros-summary-dot" style="background-color: var(--gold);"></div>
              <span style="font-size: 0.7rem;">Gord: <strong>70g</strong></span>
            </div>
          </div>
          <div class="macros-summary-total">
            <span style="font-size: 0.75rem;">Total: </span>
            <strong style="font-size: 0.85rem;">2100 kcal</strong>
          </div>
        </div>

        <!-- Benefícios dos Macros -->
        <div
          style="margin-top: 0.875rem; padding: 0.75rem; border-radius: 0.625rem; background-color: #f3f4f6;">
          <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              style="color: var(--accent);">
              <polyline points="20 6 9 17 4 12" />
            </svg>
            <span style="font-size: 0.7rem; font-weight: 600; color: var(--foreground);">Benefícios desta
              distribuição</span>
          </div>
          <ul style="list-style: none; display: flex; flex-direction: column; gap: 0.35rem;">
            <li
              style="display: flex; gap: 0.375rem; font-size: 0.65rem; color: #6b7280; line-height: 1.3;">
              <span style="color: var(--accent); font-weight: 700;">•</span>
              <span>Alta proteína preserva massa muscular</span>
            </li>
            <li
              style="display: flex; gap: 0.375rem; font-size: 0.65rem; color: #6b7280; line-height: 1.3;">
              <span style="color: var(--accent); font-weight: 700;">•</span>
              <span>Carboidratos para treinos intensos</span>
            </li>
            <li
              style="display: flex; gap: 0.375rem; font-size: 0.65rem; color: #6b7280; line-height: 1.3;">
              <span style="color: var(--accent); font-weight: 700;">•</span>
              <span>Gorduras essenciais para hormônios</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PAGE 3: PROGRESSION TIMELINE ==================== -->
  <section class="pdf-page">
    <div class="page-header">
      <div class="page-header-icon gradient-accent">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          style="color: var(--accent-foreground);">
          <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
          <polyline points="16 7 22 7 22 13" />
        </svg>
      </div>
      <h2 class="page-title">Projeção de Resultados</h2>
    </div>

    <!-- Introduction Card -->
    <div class="projection-intro">
      <div class="projection-intro-header">
        <div class="projection-intro-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10" />
            <path d="M12 16v-4" />
            <path d="M12 8h.01" />
          </svg>
        </div>
        <h3>O Que Esperar Nesta Jornada</h3>
      </div>
      <p class="projection-intro-text">
        As projeções abaixo são baseadas em dados científicos e experiência clínica com centenas de clientes. 
        Os resultados assumem <strong>adesão consistente de 85%+</strong> ao plano nutricional e de treinamento, 
        sono adequado (7-9h), e níveis moderados de estresse.
      </p>
      <div class="projection-key-factors">
        <div class="key-factor-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg>
          <span>Déficit de 500 kcal/dia = ~0.5kg de gordura/semana</span>
        </div>
        <div class="key-factor-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg>
          <span>Alta proteína (2g/kg) preserva massa muscular</span>
        </div>
        <div class="key-factor-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg>
          <span>Treino resistido 4x/semana estimula hipertrofia</span>
        </div>
      </div>
    </div>

    <!-- Stats Grid -->
    <div class="projection-stats-grid">
      <div class="projection-stat-card shadow-card">
        <div class="projection-stat-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 2v20" />
            <path d="m15 5 3 3-3 3" />
            <path d="m9 19-3-3 3-3" />
          </svg>
        </div>
        <div class="projection-stat-content">
          <p class="projection-stat-label">Perda de Peso Esperada</p>
          <p class="projection-stat-value">6kg<span> em 90 dias</span></p>
          <p class="projection-stat-detail">≈0.66kg por semana</p>
        </div>
      </div>

      <div class="projection-stat-card shadow-card">
        <div class="projection-stat-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="19" x2="5" y1="5" y2="19" />
            <circle cx="6.5" cy="6.5" r="2.5" />
            <circle cx="17.5" cy="17.5" r="2.5" />
          </svg>
        </div>
        <div class="projection-stat-content">
          <p class="projection-stat-label">Redução de Gordura</p>
          <p class="projection-stat-value">-4.5%<span> BF</span></p>
          <p class="projection-stat-detail">Melhora significativa</p>
        </div>
      </div>

      <div class="projection-stat-card shadow-card">
        <div class="projection-stat-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M14.4 14.4 9.6 9.6" />
          </svg>
        </div>
        <div class="projection-stat-content">
          <p class="projection-stat-label">Ganho de Massa Magra</p>
          <p class="projection-stat-value">+0.5kg<span> LBM</span></p>
          <p class="projection-stat-detail">Recomposição corporal</p>
        </div>
      </div>
    </div>

    <!-- Timeline Container -->
    <div class="progression-timeline-wrapper">
      <h3 class="progression-timeline-title">Evolução ao Longo do Tempo</h3>
      <div class="progression-cards">
        <!-- Phase 1 -->
        <div class="progression-item">
          <div class="progression-card phase-1 shadow-card">
            <div class="progression-phase-label">FASE 1</div>
            <div class="progression-days-circle">
              <span class="progression-days-number">30</span>
              <span class="progression-days-label">DIAS</span>
            </div>
            <div class="progression-metrics">
              <div class="progression-metric">
                <div class="progression-metric-label">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z" />
                    <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z" />
                    <path d="M7 21h10" />
                    <path d="M12 3v18" />
                    <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2" />
                  </svg>
                  <span>Peso</span>
                </div>
                <span class="progression-metric-value">-2kg</span>
              </div>
              <div class="progression-metric">
                <div class="progression-metric-label">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" x2="5" y1="5" y2="19" />
                    <circle cx="6.5" cy="6.5" r="2.5" />
                    <circle cx="17.5" cy="17.5" r="2.5" />
                  </svg>
                  <span>% Gordura</span>
                </div>
                <span class="progression-metric-value">-1.5%</span>
              </div>
              <div class="progression-metric">
                <div class="progression-metric-label">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14.4 14.4 9.6 9.6" />
                  </svg>
                  <span>Massa Magra</span>
                </div>
                <span class="progression-metric-value" style="color: var(--accent);">≈0kg</span>
              </div>
            </div>
            <div class="progression-phase-note">
              <p>Adaptação metabólica. Foco em estabelecer rotina e técnica de treino.</p>
            </div>
          </div>
          <div class="progression-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14" />
              <path d="m12 5 7 7-7 7" />
            </svg>
          </div>
        </div>

        <!-- Phase 2 -->
        <div class="progression-item">
          <div class="progression-card phase-2 shadow-card">
            <div class="progression-phase-label">FASE 2</div>
            <div class="progression-days-circle">
              <span class="progression-days-number">60</span>
              <span class="progression-days-label">DIAS</span>
            </div>
            <div class="progression-metrics">
              <div class="progression-metric">
                <div class="progression-metric-label">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z" />
                    <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z" />
                    <path d="M7 21h10" />
                    <path d="M12 3v18" />
                    <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2" />
                  </svg>
                  <span>Peso</span>
                </div>
                <span class="progression-metric-value">-4kg</span>
              </div>
              <div class="progression-metric">
                <div class="progression-metric-label">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" x2="5" y1="5" y2="19" />
                    <circle cx="6.5" cy="6.5" r="2.5" />
                    <circle cx="17.5" cy="17.5" r="2.5" />
                  </svg>
                  <span>% Gordura</span>
                </div>
                <span class="progression-metric-value">-3%</span>
              </div>
              <div class="progression-metric">
                <div class="progression-metric-label">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14.4 14.4 9.6 9.6" />
                  </svg>
                  <span>Massa Magra</span>
                </div>
                <span class="progression-metric-value" style="color: var(--accent);">≈0kg</span>
              </div>
            </div>
            <div class="progression-phase-note">
              <p>Maior ritmo de perda. Definição muscular começa a aparecer visivelmente.</p>
            </div>
          </div>
          <div class="progression-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14" />
              <path d="m12 5 7 7-7 7" />
            </svg>
          </div>
        </div>

        <!-- Phase 3 -->
        <div class="progression-item">
          <div class="progression-card phase-3 shadow-card">
            <div class="progression-phase-label">FASE 3</div>
            <div class="progression-days-circle">
              <span class="progression-days-number">90</span>
              <span class="progression-days-label">DIAS</span>
            </div>
            <div class="progression-metrics">
              <div class="progression-metric">
                <div class="progression-metric-label">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z" />
                    <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z" />
                    <path d="M7 21h10" />
                    <path d="M12 3v18" />
                    <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2" />
                  </svg>
                  <span>Peso</span>
                </div>
                <span class="progression-metric-value">-6kg</span>
              </div>
              <div class="progression-metric">
                <div class="progression-metric-label">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" x2="5" y1="5" y2="19" />
                    <circle cx="6.5" cy="6.5" r="2.5" />
                    <circle cx="17.5" cy="17.5" r="2.5" />
                  </svg>
                  <span>% Gordura</span>
                </div>
                <span class="progression-metric-value">-4.5%</span>
              </div>
              <div class="progression-metric">
                <div class="progression-metric-label">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14.4 14.4 9.6 9.6" />
                  </svg>
                  <span>Massa Magra</span>
                </div>
                <span class="progression-metric-value" style="color: var(--accent);">+0.5kg</span>
              </div>
            </div>
            <div class="progression-phase-note">
              <p>Transformação completa. Força aumentada e recomposição corporal evidente.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Factors Section -->
    <div class="projection-factors">
      <div class="projection-factor-card success">
        <div class="projection-factor-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg>
        </div>
        <div class="projection-factor-content">
          <h4>Fatores que Aceleram</h4>
          <ul>
            <li>Adesão >90% ao plano</li>
            <li>Sono consistente 8h+</li>
            <li>Hidratação adequada</li>
            <li>Baixo nível de estresse</li>
          </ul>
        </div>
      </div>

      <div class="projection-factor-card warning">
        <div class="projection-factor-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3" />
            <path d="M12 9v4" />
            <path d="M12 17h.01" />
          </svg>
        </div>
        <div class="projection-factor-content">
          <h4>Fatores que Limitam</h4>
          <ul>
            <li>Adesão <70% ao plano</li>
            <li>Sono irregular ou <6h</li>
            <li>Estresse crônico elevado</li>
            <li>Consumo excessivo de álcool</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="projection-note">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10" />
        <path d="M12 16v-4" />
        <path d="M12 8h.01" />
      </svg>
      <p><strong>Importante:</strong> Resultados individuais variam conforme genética, histórico de treino, adesão e outros fatores. 
      Ajustes mensais serão realizados com base nos seus dados de progresso.</p>
    </div>
  </section>

  <!-- ==================== PAGE 4: WORKOUT OVERVIEW ==================== -->
  <section class="pdf-page">
    <div class="page-header">
      <div class="page-header-icon gradient-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          style="color: var(--primary-foreground);">
          <path d="M14.4 14.4 9.6 9.6" />
          <path
            d="M18.657 21.485a2 2 0 1 1-2.829-2.828l-1.767 1.768a2 2 0 1 1-2.829-2.829l6.364-6.364a2 2 0 1 1 2.829 2.829l-1.768 1.767a2 2 0 1 1 2.828 2.829z" />
        </svg>
      </div>
      <h2 class="page-title">Programa de Treinamento</h2>
    </div>

    <!-- Overview Cards -->
    <div class="workout-overview-cards">
      <div class="workout-overview-card shadow-card">
        <div class="workout-overview-card-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m17 2 4 4-4 4" />
            <path d="M3 11v-1a4 4 0 0 1 4-4h14" />
            <path d="m7 22-4-4 4-4" />
            <path d="M21 13v1a4 4 0 0 1-4 4H3" />
          </svg>
          <span>Modelo</span>
        </div>
        <p>Upper/Lower Split</p>
      </div>
      <div class="workout-overview-card shadow-card">
        <div class="workout-overview-card-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M8 2v4" />
            <path d="M16 2v4" />
            <rect width="18" height="18" x="3" y="4" rx="2" />
            <path d="M3 10h18" />
          </svg>
          <span>Frequência</span>
        </div>
        <p>4x por semana</p>
      </div>
      <div class="workout-overview-card shadow-card">
        <div class="workout-overview-card-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10" />
            <polyline points="12 6 12 12 16 14" />
          </svg>
          <span>Duração</span>
        </div>
        <p>60-75 min/sessão</p>
      </div>
      <div class="workout-overview-card shadow-card">
        <div class="workout-overview-card-header warning">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path
              d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z" />
          </svg>
          <span>Intensidade</span>
        </div>
        <p>Moderada → Alta</p>
      </div>
    </div>

    <!-- Weekly Schedule -->
    <h3 class="weekly-schedule-title">Divisão Semanal</h3>
    <div class="weekly-schedule-grid">
      <div class="schedule-item upper">
        <div class="schedule-item-header">
          <div class="schedule-item-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <path d="M14.4 14.4 9.6 9.6" />
            </svg>
          </div>
          <span class="schedule-item-day">SEG</span>
        </div>
        <p class="schedule-item-workout">Upper A</p>
      </div>
      <div class="schedule-item lower">
        <div class="schedule-item-header">
          <div class="schedule-item-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <path d="M14.4 14.4 9.6 9.6" />
            </svg>
          </div>
          <span class="schedule-item-day">TER</span>
        </div>
        <p class="schedule-item-workout">Lower A</p>
      </div>
      <div class="schedule-item rest">
        <div class="schedule-item-header">
          <div class="schedule-item-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
            </svg>
          </div>
          <span class="schedule-item-day">QUA</span>
        </div>
        <p class="schedule-item-workout">Descanso</p>
      </div>
      <div class="schedule-item upper">
        <div class="schedule-item-header">
          <div class="schedule-item-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <path d="M14.4 14.4 9.6 9.6" />
            </svg>
          </div>
          <span class="schedule-item-day">QUI</span>
        </div>
        <p class="schedule-item-workout">Upper B</p>
      </div>
      <div class="schedule-item combo">
        <div class="schedule-item-header">
          <div class="schedule-item-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <path d="M14.4 14.4 9.6 9.6" />
            </svg>
          </div>
          <span class="schedule-item-day">SEX</span>
        </div>
        <p class="schedule-item-workout">Lower B</p>
      </div>
      <div class="schedule-item cardio">
        <div class="schedule-item-header">
          <div class="schedule-item-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <path
                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
            </svg>
          </div>
          <span class="schedule-item-day">SÁB</span>
        </div>
        <p class="schedule-item-workout">Cardio</p>
      </div>
      <div class="schedule-item rest">
        <div class="schedule-item-header">
          <div class="schedule-item-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
            </svg>
          </div>
          <span class="schedule-item-day">DOM</span>
        </div>
        <p class="schedule-item-workout">Descanso</p>
      </div>
    </div>

    <!-- Legend -->
    <div class="workout-legend">
      <div class="workout-legend-items">
        <div class="workout-legend-item">
          <div class="workout-legend-dot upper"></div>
          <span>Upper Body</span>
        </div>
        <div class="workout-legend-item">
          <div class="workout-legend-dot lower"></div>
          <span>Lower Body</span>
        </div>
        <div class="workout-legend-item">
          <div class="workout-legend-dot cardio"></div>
          <span>Cardio</span>
        </div>
        <div class="workout-legend-item">
          <div class="workout-legend-dot rest"></div>
          <span>Descanso</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PAGE 5: WORKOUT UPPER A ==================== -->
  <section class="pdf-page">
    <div class="workout-card shadow-card">
      <div class="workout-card-header upper">
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
            <h3 class="workout-card-title">Upper A - Força e Hipertrofia</h3>
            <p class="workout-card-subtitle">Foco em peitorais, dorsais e deltoides</p>
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
            <td><span class="exercise-number upper">1</span></td>
            <td>
              <span class="exercise-name">Supino Reto com Barra</span>
              <div class="exercise-tip">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path
                    d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5" />
                </svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path
                    d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5" />
                </svg>
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
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
            <polyline points="16 7 22 7 22 13" />
          </svg>
          <div>
            <span class="progression-label">Progressão: </span>
            <span class="progression-text">Aumente a carga 2-5% quando completar todas as séries com boa forma nas reps
              máximas.</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PAGE 6: WORKOUT LOWER A ==================== -->
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

  <!-- ==================== PAGE 7: DIET SECTION ==================== -->
  <section class="pdf-page">
    <div class="page-header">
      <div class="page-header-icon gradient-accent">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          style="color: var(--accent-foreground);">
          <path
            d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 3-1-1.56-2.78-3-5-3a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z" />
          <path d="M10 2c1 .5 2 2 2 5" />
        </svg>
      </div>
      <h2 class="page-title">Plano Nutricional</h2>
    </div>

    <!-- Objective Box -->
    <div class="diet-objective">
      <div class="diet-objective-header">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10" />
          <circle cx="12" cy="12" r="6" />
          <circle cx="12" cy="12" r="2" />
        </svg>
        <h3>Definição Muscular com Preservação de Massa Magra</h3>
      </div>
      <p>Plano hipocalórico, alto em proteínas, carboidratos estratégicos pré/pós-treino e gorduras saudáveis para
        otimizar composição corporal e energia.</p>
      <div class="diet-objective-badges">
        <span class="diet-objective-badge">📋 4 refeições/dia</span>
        <span class="diet-objective-badge">⏰ Horários fixos</span>
      </div>
    </div>

    <!-- Daily Summary -->
    <div class="diet-summary shadow-card">
      <h3>Resumo Diário Total</h3>
      <div class="diet-summary-grid">
        <div class="diet-summary-item protein">
          <span class="diet-summary-icon">💪</span>
          <span class="diet-summary-value">161g</span>
          <span class="diet-summary-label">Proteínas</span>
        </div>
        <div class="diet-summary-item carbs">
          <span class="diet-summary-icon">⚡</span>
          <span class="diet-summary-value">159g</span>
          <span class="diet-summary-label">Carboidratos</span>
        </div>
        <div class="diet-summary-item fat">
          <span class="diet-summary-icon">🥑</span>
          <span class="diet-summary-value">67g</span>
          <span class="diet-summary-label">Gorduras</span>
        </div>
        <div class="diet-summary-item calories">
          <span class="diet-summary-icon">🔥</span>
          <span class="diet-summary-value">1842</span>
          <span class="diet-summary-label">kcal Total</span>
        </div>
      </div>
    </div>

    <!-- Meal Card -->
    <div class="meal-card shadow-card">
      <div class="meal-card-header">
        <div class="meal-card-header-row">
          <div class="meal-card-header-left">
            <div class="meal-card-icon">🌅</div>
            <div>
              <h3 class="meal-card-title">Café da Manhã</h3>
              <p class="meal-card-description">Refeição proteica e energética para iniciar o dia</p>
            </div>
          </div>
          <div class="meal-card-time shadow-card">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10" />
              <polyline points="12 6 12 12 16 14" />
            </svg>
            <span>07:00</span>
          </div>
        </div>
      </div>

      <div class="meal-card-body">
        <table class="food-table">
          <thead>
            <tr>
              <th>Alimento</th>
              <th class="center">Qtd</th>
              <th class="center"><span class="macro-header protein">P</span></th>
              <th class="center"><span class="macro-header carbs">C</span></th>
              <th class="center"><span class="macro-header fat">G</span></th>
              <th class="center"><span class="macro-header kcal">KCAL</span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="food-name">Ovos mexidos</td>
              <td class="center food-quantity">3 unidades</td>
              <td class="center food-protein">21</td>
              <td class="center food-carbs">1</td>
              <td class="center food-fat">15</td>
              <td class="center food-calories">210</td>
            </tr>
            <tr>
              <td class="food-name">Pão integral</td>
              <td class="center food-quantity">2 fatias</td>
              <td class="center food-protein">7</td>
              <td class="center food-carbs">26</td>
              <td class="center food-fat">2</td>
              <td class="center food-calories">140</td>
            </tr>
            <tr>
              <td class="food-name">Queijo cottage</td>
              <td class="center food-quantity">100g</td>
              <td class="center food-protein">12</td>
              <td class="center food-carbs">3</td>
              <td class="center food-fat">2</td>
              <td class="center food-calories">80</td>
            </tr>
            <tr>
              <td class="food-name">Mamão papaia</td>
              <td class="center food-quantity">150g</td>
              <td class="center food-protein">1</td>
              <td class="center food-carbs">14</td>
              <td class="center food-fat">0</td>
              <td class="center food-calories">56</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="2"><strong>TOTAL REFEIÇÃO</strong></td>
              <td class="center food-protein"><strong>41</strong></td>
              <td class="center food-carbs"><strong>44</strong></td>
              <td class="center food-fat"><strong>19</strong></td>
              <td class="center food-calories"><strong>486</strong></td>
            </tr>
          </tfoot>
        </table>

        <div class="meal-substitutions">
          <div class="meal-substitutions-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8" />
              <path d="M3 3v5h5" />
              <path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16" />
              <path d="M16 16h5v5" />
            </svg>
            <span>Substituições</span>
          </div>
          <ul>
            <li><span>•</span> Ovos → 6 claras + 1 gema (menos gordura)</li>
            <li><span>•</span> Pão integral → Tapioca 50g (sem glúten)</li>
            <li><span>•</span> Mamão → Banana média (mais carboidrato)</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PAGE 8: HYDRATION ==================== -->
  <section class="pdf-page">
    <div class="hydration-card">
      <div class="decorative-1"></div>
      <div class="decorative-2"></div>

      <div class="hydration-content">
        <div class="hydration-header">
          <div class="hydration-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z" />
              <path
                d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97" />
            </svg>
          </div>
          <div>
            <h2 class="hydration-title">Protocolo de Hidratação</h2>
            <p class="hydration-calc">Seu cálculo: 85kg × 35ml = 2975ml/dia</p>
          </div>
        </div>

        <div class="hydration-grid">
          <!-- Goal Card -->
          <div class="hydration-goal shadow-card">
            <div class="hydration-goal-label">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <circle cx="12" cy="12" r="6" />
                <circle cx="12" cy="12" r="2" />
              </svg>
              <span>Meta Diária</span>
            </div>
            <div>
              <span class="hydration-goal-value">3</span>
              <span class="hydration-goal-unit">litros</span>
            </div>
            <div class="hydration-goal-cups">
              <span>💧</span>
              <span>~12 copos de 250ml</span>
            </div>
          </div>

          <!-- Benefits -->
          <div class="hydration-benefits">
            <div class="hydration-benefit shadow-card">
              <div class="hydration-benefit-icon blue">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M14.4 14.4 9.6 9.6" />
                </svg>
              </div>
              <div>
                <p class="hydration-benefit-title">Performance Muscular</p>
                <p class="hydration-benefit-text">A hidratação adequada aumenta a força e resistência durante os treinos
                </p>
              </div>
            </div>
            <div class="hydration-benefit shadow-card">
              <div class="hydration-benefit-icon green">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path
                    d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2" />
                </svg>
              </div>
              <div>
                <p class="hydration-benefit-title">Metabolismo Ativo</p>
                <p class="hydration-benefit-text">Água acelera o metabolismo e auxilia na queima de gordura</p>
              </div>
            </div>
            <div class="hydration-benefit shadow-card">
              <div class="hydration-benefit-icon gold">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 8V4H8" />
                  <rect width="16" height="12" x="4" y="8" rx="2" />
                  <path d="M2 14h2" />
                  <path d="M20 14h2" />
                  <path d="M15 13v2" />
                  <path d="M9 13v2" />
                </svg>
              </div>
              <div>
                <p class="hydration-benefit-title">Recuperação</p>
                <p class="hydration-benefit-text">Essencial para transportar nutrientes e eliminar toxinas</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PAGE 9: CARDIO ==================== -->
  <section class="pdf-page">
    <div class="cardio-header">
      <div class="cardio-header-left">
        <div class="cardio-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path
              d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
          </svg>
        </div>
        <div>
          <h2 class="cardio-title">Cardio Complementar</h2>
          <p class="cardio-subtitle">Otimize a queima de gordura sem comprometer os ganhos</p>
        </div>
      </div>
      <div class="cardio-stats">
        <div class="cardio-stat">
          <div class="cardio-stat-label">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10" />
              <polyline points="12 6 12 12 16 14" />
            </svg>
            <span>Meta Semanal</span>
          </div>
          <p class="cardio-stat-value">90-120 min</p>
        </div>
        <div class="cardio-stat burn">
          <div class="cardio-stat-label">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <path
                d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z" />
            </svg>
            <span>Queima Estimada</span>
          </div>
          <p class="cardio-stat-value">800-1200 kcal/sem</p>
        </div>
      </div>
    </div>

    <div class="activity-cards">
      <div class="activity-card shadow-card">
        <div class="activity-card-header">
          <div class="activity-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M4 16v-2.38C4 11.5 2.97 10.5 3 8c.03-2.72 1.49-6 4.5-6C9.37 2 10 3.8 10 5.5c0 3.11-2 5.66-2 8.68V16a2 2 0 1 1-4 0Z" />
              <path
                d="M20 20v-2.38c0-2.12 1.03-3.12 1-5.62-.03-2.72-1.49-6-4.5-6C14.63 6 14 7.8 14 9.5c0 3.11 2 5.66 2 8.68V20a2 2 0 1 0 4 0Z" />
            </svg>
          </div>
          <div class="activity-card-info">
            <h4 class="activity-card-title">Caminhada em Jejum</h4>
            <div class="activity-card-badges">
              <span class="activity-badge frequency">3x por semana</span>
              <span class="activity-badge duration">30-40 min</span>
              <span class="activity-badge intensity light">Leve</span>
            </div>
          </div>
        </div>
        <p class="activity-card-notes">Ideal para queima de gordura. Manter 60-70% da FC máxima. Pode ser feita em dias
          de treino, pela manhã.</p>
      </div>

      <div class="activity-card shadow-card">
        <div class="activity-card-header">
          <div class="activity-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="18.5" cy="17.5" r="3.5" />
              <circle cx="5.5" cy="17.5" r="3.5" />
              <circle cx="15" cy="5" r="1" />
              <path d="M12 17.5V14l-3-3 4-3 2 3h2" />
            </svg>
          </div>
          <div class="activity-card-info">
            <h4 class="activity-card-title">Bicicleta Ergométrica</h4>
            <div class="activity-card-badges">
              <span class="activity-badge frequency">2x por semana</span>
              <span class="activity-badge duration">20-30 min</span>
              <span class="activity-badge intensity moderate">Moderada</span>
            </div>
          </div>
        </div>
        <p class="activity-card-notes">Alternativa de baixo impacto. Manter 60-70% da FC máxima para zona de queima de
          gordura.</p>
      </div>

      <div class="activity-card shadow-card">
        <div class="activity-card-header">
          <div class="activity-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z" />
            </svg>
          </div>
          <div class="activity-card-info">
            <h4 class="activity-card-title">HIIT (Opcional)</h4>
            <div class="activity-card-badges">
              <span class="activity-badge frequency">1x por semana</span>
              <span class="activity-badge duration">15-20 min</span>
              <span class="activity-badge intensity high">Alta</span>
            </div>
          </div>
        </div>
        <p class="activity-card-notes">Apenas em dias sem treino de pernas. Intervalos de 30s intenso / 60s recuperação.
        </p>
      </div>
    </div>

    <div class="cardio-tips">
      <div class="cardio-tips-header">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
          <polyline points="16 7 22 7 22 13" />
        </svg>
        <span>Dicas para Cardio Eficiente</span>
      </div>
      <div class="cardio-tips-grid">
        <div class="cardio-tip-item">
          <span>1.</span>
          <p>Realize após o treino de força ou em dias separados</p>
        </div>
        <div class="cardio-tip-item">
          <span>2.</span>
          <p>LISS é ideal para preservar massa muscular</p>
        </div>
        <div class="cardio-tip-item">
          <span>3.</span>
          <p>Monitore a FC para garantir a zona correta</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PAGE 10: REST DAYS ==================== -->
  <section class="pdf-page">
    <div class="rest-header">
      <div class="rest-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
        </svg>
      </div>
      <div>
        <h2 class="rest-title">Dias de Descanso</h2>
        <p class="rest-subtitle">Recuperação inteligente para maximizar seus resultados</p>
      </div>
    </div>

    <div class="rest-grid">
      <!-- Nutrition Card -->
      <div class="rest-nutrition-card shadow-card">
        <div class="rest-card-header">
          <div class="rest-card-icon nutrition">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
              <path d="M7 2v20" />
              <path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
            </svg>
          </div>
          <div>
            <h3 class="rest-card-title">Ajuste Nutricional</h3>
            <p class="rest-card-subtitle">Calorias ajustadas para dias sem treino</p>
          </div>
        </div>

        <div class="rest-macros-grid">
          <div class="rest-macro-item protein">
            <p class="rest-macro-label">Proteína</p>
            <p class="rest-macro-value">170g</p>
            <span class="rest-macro-change kept">
              <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 6 9 17l-5-5" />
              </svg>
              Mantida
            </span>
          </div>
          <div class="rest-macro-item carbs">
            <p class="rest-macro-label">Carboidratos</p>
            <p class="rest-macro-value">150g</p>
            <span class="rest-macro-change reduced">-25%</span>
          </div>
          <div class="rest-macro-item fat">
            <p class="rest-macro-label">Gorduras</p>
            <p class="rest-macro-value">77g</p>
            <span class="rest-macro-change increased">+10%</span>
          </div>
        </div>

        <div class="rest-calorie-goal">
          <span>Meta Calórica do Dia</span>
          <div>
            <strong>1890</strong>
            <small>kcal</small>
          </div>
        </div>

        <p class="rest-meals-title">Sugestões de Refeições:</p>
        <div class="rest-meals-list">
          <div class="rest-meal-item">
            <div class="rest-meal-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <path d="M17 8h1a4 4 0 1 1 0 8h-1" />
                <path d="M3 8h14v9a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4Z" />
              </svg>
            </div>
            <div class="rest-meal-info">
              <p class="rest-meal-name">Café da Manhã</p>
              <p class="rest-meal-description">Ovos mexidos + abacate + torrada integral</p>
            </div>
          </div>
          <div class="rest-meal-item">
            <div class="rest-meal-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <path d="M7 21h10" />
                <path d="M12 21a9 9 0 0 0 9-9H3a9 9 0 0 0 9 9Z" />
              </svg>
            </div>
            <div class="rest-meal-info">
              <p class="rest-meal-name">Almoço</p>
              <p class="rest-meal-description">Frango grelhado + salada volumosa + azeite</p>
            </div>
          </div>
          <div class="rest-meal-item">
            <div class="rest-meal-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <path d="M6.5 12c.94-3.46 4.94-6 8.5-6 3.56 0 6.06 2.54 7 6-.94 3.47-3.44 6-7 6s-7.56-2.53-8.5-6Z" />
              </svg>
            </div>
            <div class="rest-meal-info">
              <p class="rest-meal-name">Jantar</p>
              <p class="rest-meal-description">Salmão + vegetais refogados + castanhas</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Activity Card -->
      <div class="rest-activity-card shadow-card">
        <div class="rest-card-header">
          <div class="rest-card-icon activity">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2" />
            </svg>
          </div>
          <div>
            <h3 class="rest-card-title">Recuperação Ativa</h3>
            <p class="rest-card-subtitle">O que fazer nos dias off</p>
          </div>
        </div>

        <div class="rest-activities-list">
          <div class="rest-activity-item">
            <div class="rest-activity-row">
              <div class="rest-activity-icon green">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path
                    d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2" />
                </svg>
              </div>
              <div class="rest-activity-info">
                <div class="rest-activity-header">
                  <p class="rest-activity-name">Mobilidade & Alongamento</p>
                  <span class="rest-activity-duration">15-20 min</span>
                </div>
                <p class="rest-activity-description">Foam roller e alongamentos estáticos</p>
              </div>
            </div>
          </div>
          <div class="rest-activity-item">
            <div class="rest-activity-row">
              <div class="rest-activity-icon blue">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path
                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                </svg>
              </div>
              <div class="rest-activity-info">
                <div class="rest-activity-header">
                  <p class="rest-activity-name">Caminhada Leve</p>
                  <span class="rest-activity-duration">20-30 min</span>
                </div>
                <p class="rest-activity-description">Caminhada relaxada ao ar livre</p>
              </div>
            </div>
          </div>
          <div class="rest-activity-item">
            <div class="rest-activity-row">
              <div class="rest-activity-icon gold">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path d="M2 4v16" />
                  <path d="M2 8h18a2 2 0 0 1 2 2v10" />
                  <path d="M2 17h20" />
                </svg>
              </div>
              <div class="rest-activity-info">
                <div class="rest-activity-header">
                  <p class="rest-activity-name">Sono de Qualidade</p>
                  <span class="rest-activity-duration">7-9 horas</span>
                </div>
                <p class="rest-activity-description">Recuperação e síntese muscular</p>
              </div>
            </div>
          </div>
          <div class="rest-activity-item">
            <div class="rest-activity-row">
              <div class="rest-activity-icon gray">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z" />
                  <path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z" />
                </svg>
              </div>
              <div class="rest-activity-info">
                <div class="rest-activity-header">
                  <p class="rest-activity-name">Gerenciamento de Estresse</p>
                  <span class="rest-activity-duration">10-15 min</span>
                </div>
                <p class="rest-activity-description">Meditação ou respiração profunda</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="rest-checklist">
      <p class="rest-checklist-title">✅ Checklist do Dia de Descanso</p>
      <div class="rest-checklist-grid">
        <div class="rest-checklist-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
            <path d="m9 11 3 3L22 4" />
          </svg>
          <span>Dormi 7+ horas</span>
        </div>
        <div class="rest-checklist-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
            <path d="m9 11 3 3L22 4" />
          </svg>
          <span>Bebi água suficiente</span>
        </div>
        <div class="rest-checklist-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
            <path d="m9 11 3 3L22 4" />
          </svg>
          <span>Fiz alongamento</span>
        </div>
        <div class="rest-checklist-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
            <path d="m9 11 3 3L22 4" />
          </svg>
          <span>Evitei processados</span>
        </div>
        <div class="rest-checklist-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
            <path d="m9 11 3 3L22 4" />
          </svg>
          <span>Comi proteína</span>
        </div>
        <div class="rest-checklist-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
            <path d="m9 11 3 3L22 4" />
          </svg>
          <span>Gerenciei estresse</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PAGE 11: INSIGHTS ==================== -->
  <section class="pdf-page">
    <div class="insights-header">
      <div class="insights-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 7v14" />
          <path
            d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z" />
        </svg>
      </div>
      <h2 class="insights-title">Insights e Fundamentos Técnicos</h2>
    </div>

    <div class="insights-grid">
      <div class="insight-card shadow-card">
        <div class="insight-card-header">
          <div class="insight-card-icon blue">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <path d="M14.4 14.4 9.6 9.6" />
            </svg>
          </div>
          <h3 class="insight-card-title">Importância da Proteína</h3>
        </div>
        <p class="insight-card-text">O consumo adequado de proteína (1.6-2.2g/kg) é essencial para preservar massa
          muscular durante o déficit calórico. Distribua em 4-6 refeições para otimizar a síntese proteica muscular ao
          longo do dia.</p>
      </div>

      <div class="insight-card shadow-card">
        <div class="insight-card-header">
          <div class="insight-card-icon green">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <path
                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z" />
            </svg>
          </div>
          <h3 class="insight-card-title">Timing de Carboidratos</h3>
        </div>
        <p class="insight-card-text">Priorize carboidratos nas refeições pré e pós-treino para maximizar performance e
          recuperação. Nos dias de descanso, reduza levemente a ingestão para otimizar a queima de gordura.</p>
      </div>

      <div class="insight-card shadow-card">
        <div class="insight-card-header">
          <div class="insight-card-icon gold">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
            </svg>
          </div>
          <h3 class="insight-card-title">Recuperação e Sono</h3>
        </div>
        <p class="insight-card-text">O sono de qualidade (7-9h) é quando ocorre a maior parte da recuperação muscular e
          regulação hormonal. Priorize rotinas de sono consistentes para maximizar resultados.</p>
      </div>

      <div class="insight-card shadow-card">
        <div class="insight-card-header">
          <div class="insight-card-icon red">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
              <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
              <polyline points="16 7 22 7 22 13" />
            </svg>
          </div>
          <h3 class="insight-card-title">Progressão de Carga</h3>
        </div>
        <p class="insight-card-text">A sobrecarga progressiva é o princípio fundamental para ganhos contínuos. Adicione
          carga gradualmente (2-5%) quando conseguir executar todas as séries na faixa de repetições máximas.</p>
      </div>
    </div>
  </section>

  <!-- ==================== PAGE 12: FOOTER ==================== -->
  <section class="pdf-page footer-section">
    <div class="footer-card">
      <h2 class="footer-title">Seu Plano Está Completo!</h2>
      <p class="footer-text">
        Este documento contém todas as informações necessárias para sua jornada de transformação.
        Siga o plano com consistência e os resultados virão. Lembre-se: disciplina supera motivação.
      </p>

      <div class="footer-disclaimer">
        <div class="footer-disclaimer-header">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3" />
            <path d="M12 9v4" />
            <path d="M12 17h.01" />
          </svg>
          <span>Aviso Importante</span>
        </div>
        <p>
          Este plano é uma orientação geral e não substitui a avaliação de profissionais de saúde.
          Consulte um médico antes de iniciar qualquer programa de exercícios ou dieta.
          Resultados podem variar de acordo com fatores individuais.
        </p>
      </div>

      <div class="footer-meta">
        <span class="footer-meta-item"><strong>Versão:</strong> 1.0</span>
        <span class="footer-meta-item"><strong>Emitido em:</strong> 29/01/2026</span>
        <span class="footer-meta-item"><strong>Validade:</strong> 90 dias</span>
      </div>
    </div>
  </section>

</body>

</html>