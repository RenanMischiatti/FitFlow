<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHYSIQ - Plano Personalizado de Treino e Dieta</title>
  <link rel="stylesheet" href="{{asset('css/pdf.css')}}">
</head>
<body>
  <div class="page">

    <!-- ========================================
         COVER PAGE
         ======================================== -->
    <section class="cover">
      <div class="cover-inner">
        <!-- Logo -->
        <div class="cover-logo">
          PHYS<span class="accent">IQ</span>
        </div>

        <!-- Title -->
        <h1 class="cover-title">Plano Personalizado de</h1>
        <h1 class="cover-subtitle">Treino e Dieta</h1>
        <p class="cover-description">Relatório completo baseado em dados corporais e objetivos</p>

        <!-- User Card -->
        <div class="cover-user-card">
          <table>
            <tr>
              <td>
                <div class="cover-avatar">JS</div>
              </td>
              <td>
                <div class="cover-user-name">João Silva</div>
                <div class="cover-user-info">Ganho de massa • Intermediário</div>
              </td>
            </tr>
          </table>
          <div class="cover-date">📅 Gerado em 25 de janeiro de 2026</div>
        </div>

        <!-- Badges -->
        <div class="cover-badges">
          <table>
            <tr>
              <td class="cover-badge">
                <span class="cover-badge-dot primary"></span>
                <span>Baseado em Ciência</span>
              </td>
              <td class="cover-badge">
                <span class="cover-badge-dot accent"></span>
                <span>100% Personalizado</span>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </section>

    <!-- ========================================
         BODY METRICS
         ======================================== -->
    <section class="section section-alt page-break">
      <div class="section-header">
        <table>
          <tr>
            <td><div class="section-icon">📊</div></td>
            <td class="section-title">Resumo Corporal</td>
          </tr>
        </table>
      </div>

      <table class="metrics-grid">
        <tr>
          <td class="metric-card">
            <div class="metric-label">IMC</div>
            <div class="metric-value">25.9 <span class="metric-unit">kg/m²</span></div>
            <span class="metric-badge success">Peso Normal</span>
            <div class="metric-bar-container">
              <div class="metric-bar" style="width: 65%;"></div>
            </div>
            <div class="metric-description">Índice de Massa Corporal dentro da faixa saudável</div>
          </td>
          <td class="metric-card">
            <div class="metric-label">Água Recomendada</div>
            <div class="metric-value">2.9 <span class="metric-unit">litros/dia</span></div>
            <span class="metric-badge info">≈ 12 copos</span>
            <div class="metric-bar-container">
              <div class="metric-bar" style="width: 72%;"></div>
            </div>
            <div class="metric-description">Hidratação ideal para seu peso e nível de atividade</div>
          </td>
        </tr>
        <tr>
          <td class="metric-card">
            <div class="metric-label">TMB (Taxa Metabólica Basal)</div>
            <div class="metric-value">1,847 <span class="metric-unit">kcal/dia</span></div>
            <span class="metric-badge warning">Repouso</span>
            <div class="metric-bar-container">
              <div class="metric-bar" style="width: 50%;"></div>
            </div>
            <div class="metric-description">Calorias gastas em repouso absoluto</div>
          </td>
          <td class="metric-card">
            <div class="metric-label">TDEE (Gasto Diário Total)</div>
            <div class="metric-value">2,862 <span class="metric-unit">kcal/dia</span></div>
            <span class="metric-badge success">Ativo</span>
            <div class="metric-bar-container">
              <div class="metric-bar" style="width: 78%;"></div>
            </div>
            <div class="metric-description">Calorias gastas considerando suas atividades</div>
          </td>
        </tr>
      </table>

      <!-- User Profile Summary -->
      <table class="metrics-grid" style="margin-top: 8px;">
        <tr>
          <td class="metric-card" style="text-align: center; padding: 20px;">
            <table style="width: 100%; border-collapse: collapse;">
              <tr>
                <td style="text-align: center; padding: 0 16px;">
                  <div class="metric-label">Idade</div>
                  <div style="font-size: 24px; font-weight: 700; color: var(--primary);">28 <span style="font-size: 14px; color: var(--text-secondary);">anos</span></div>
                </td>
                <td style="text-align: center; padding: 0 16px; border-left: 1px solid var(--border);">
                  <div class="metric-label">Altura</div>
                  <div style="font-size: 24px; font-weight: 700; color: var(--primary);">178 <span style="font-size: 14px; color: var(--text-secondary);">cm</span></div>
                </td>
                <td style="text-align: center; padding: 0 16px; border-left: 1px solid var(--border);">
                  <div class="metric-label">Peso</div>
                  <div style="font-size: 24px; font-weight: 700; color: var(--primary);">82 <span style="font-size: 14px; color: var(--text-secondary);">kg</span></div>
                </td>
                <td style="text-align: center; padding: 0 16px; border-left: 1px solid var(--border);">
                  <div class="metric-label">Nível</div>
                  <div style="font-size: 24px; font-weight: 700; color: var(--primary);">Intermediário</div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </section>

    <!-- ========================================
         DATA INTERPRETATION
         ======================================== -->
    <section class="section page-break">
      <div class="section-header">
        <table>
          <tr>
            <td><div class="section-icon">🧠</div></td>
            <td class="section-title">O que seus dados significam</td>
          </tr>
        </table>
      </div>

      <table class="interpretation-grid">
        <tr>
          <td class="interpretation-card">
            <div class="interpretation-title">
              <span class="interpretation-icon">⚖️</span>
              Seu IMC de 25.9
            </div>
            <p class="interpretation-text">
              Seu IMC está na faixa de peso normal, indicando uma composição corporal adequada. Para seu objetivo de ganho de massa, isso é um excelente ponto de partida, pois permite um superávit calórico controlado sem riscos à saúde.
            </p>
          </td>
          <td class="interpretation-card">
            <div class="interpretation-title">
              <span class="interpretation-icon">🔥</span>
              Seu Metabolismo
            </div>
            <p class="interpretation-text">
              Com uma TMB de 1.847 kcal e TDEE de 2.862 kcal, seu corpo tem um metabolismo ativo. Isso significa que você queima bastante energia diariamente, facilitando o ganho de massa magra com a dieta correta.
            </p>
          </td>
        </tr>
        <tr>
          <td class="interpretation-card">
            <div class="interpretation-title">
              <span class="interpretation-icon">💧</span>
              Hidratação
            </div>
            <p class="interpretation-text">
              Os 2.9L de água recomendados são essenciais para síntese proteica, transporte de nutrientes e recuperação muscular. Em dias de treino intenso, considere adicionar mais 500ml.
            </p>
          </td>
          <td class="interpretation-card">
            <div class="interpretation-title">
              <span class="interpretation-icon">📈</span>
              Superávit Calórico
            </div>
            <p class="interpretation-text">
              Para ganho de massa, recomendamos 3.291 kcal diárias (+429 kcal acima do TDEE). Este superávit moderado de ~15% maximiza ganhos musculares enquanto minimiza acúmulo de gordura.
            </p>
          </td>
        </tr>
      </table>
    </section>

    <!-- ========================================
         WORKOUT PLAN
         ======================================== -->
    <section class="section section-alt page-break">
      <div class="section-header">
        <table>
          <tr>
            <td><div class="section-icon">🏋️</div></td>
            <td class="section-title">Plano de Treino Personalizado</td>
          </tr>
        </table>
      </div>

      <!-- Training Summary -->
      <table class="metrics-grid" style="margin-bottom: 24px;">
        <tr>
          <td class="metric-card" style="text-align: center; padding: 16px;">
            <div class="metric-label">Frequência</div>
            <div style="font-size: 20px; font-weight: 700; color: var(--primary);">3x por semana</div>
          </td>
          <td class="metric-card" style="text-align: center; padding: 16px;">
            <div class="metric-label">Duração</div>
            <div style="font-size: 20px; font-weight: 700; color: var(--primary);">45-60 min</div>
          </td>
          <td class="metric-card" style="text-align: center; padding: 16px;">
            <div class="metric-label">Intensidade</div>
            <div style="font-size: 20px; font-weight: 700; color: var(--primary);">Alta</div>
          </td>
        </tr>
      </table>

      <!-- Workout A -->
      <div class="mb-32">
        <div class="workout-header">
          <div class="workout-name">Treino A - Peito e Tríceps</div>
          <div class="workout-objective">Desenvolvimento do peitoral e fortalecimento do tríceps</div>
        </div>
        <table class="workout-table">
          <thead>
            <tr>
              <th style="width: 35%;">Exercício</th>
              <th style="width: 10%;">Séries</th>
              <th style="width: 12%;">Reps</th>
              <th style="width: 10%;">Descanso</th>
              <th style="width: 33%;">Dica</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="exercise-name">Supino Reto</div>
                <div class="exercise-description">Deite no banco, desça a barra até o peito e empurre</div>
              </td>
              <td><span class="workout-badge">4</span></td>
              <td>8-12</td>
              <td>90s</td>
              <td class="exercise-tip">Mantenha as escápulas retraídas</td>
            </tr>
            <tr>
              <td>
                <div class="exercise-name">Supino Inclinado</div>
                <div class="exercise-description">Inclinação de 30-45° para ênfase no peitoral superior</div>
              </td>
              <td><span class="workout-badge">4</span></td>
              <td>10-12</td>
              <td>75s</td>
              <td class="exercise-tip">Não trave os cotovelos no topo</td>
            </tr>
            <tr>
              <td>
                <div class="exercise-name">Crucifixo com Halteres</div>
                <div class="exercise-description">Movimento de abertura para alongar o peitoral</div>
              </td>
              <td><span class="workout-badge">3</span></td>
              <td>12-15</td>
              <td>60s</td>
              <td class="exercise-tip">Leve flexão nos cotovelos</td>
            </tr>
            <tr>
              <td>
                <div class="exercise-name">Cross Over</div>
                <div class="exercise-description">Cabos cruzados para definição e contração</div>
              </td>
              <td><span class="workout-badge">3</span></td>
              <td>12-15</td>
              <td>60s</td>
              <td class="exercise-tip">Foque na contração no centro</td>
            </tr>
            <tr>
              <td>
                <div class="exercise-name">Tríceps Testa</div>
                <div class="exercise-description">Extensão de cotovelos deitado no banco</div>
              </td>
              <td><span class="workout-badge">4</span></td>
              <td>10-12</td>
              <td>60s</td>
              <td class="exercise-tip">Cotovelos apontando para o teto</td>
            </tr>
            <tr>
              <td>
                <div class="exercise-name">Tríceps Corda</div>
                <div class="exercise-description">Extensão no cabo com corda</div>
              </td>
              <td><span class="workout-badge">3</span></td>
              <td>12-15</td>
              <td>45s</td>
              <td class="exercise-tip">Abra a corda na contração</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Workout B -->
      <div class="mb-32 page-break">
        <div class="workout-header">
          <div class="workout-name">Treino B - Costas e Bíceps</div>
          <div class="workout-objective">Fortalecimento do dorso e desenvolvimento dos bíceps</div>
        </div>
        <table class="workout-table">
          <thead>
            <tr>
              <th style="width: 35%;">Exercício</th>
              <th style="width: 10%;">Séries</th>
              <th style="width: 12%;">Reps</th>
              <th style="width: 10%;">Descanso</th>
              <th style="width: 33%;">Dica</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="exercise-name">Puxada Frontal</div>
                <div class="exercise-description">Puxe a barra até o peito, contraindo as costas</div>
              </td>
              <td><span class="workout-badge">4</span></td>
              <td>10-12</td>
              <td>90s</td>
              <td class="exercise-tip">Inicie o movimento com as costas</td>
            </tr>
            <tr>
              <td>
                <div class="exercise-name">Remada Curvada</div>
                <div class="exercise-description">Tronco inclinado, puxe a barra até o abdômen</div>
              </td>
              <td><span class="workout-badge">4</span></td>
              <td>8-12</td>
              <td>90s</td>
              <td class="exercise-tip">Mantenha a coluna neutra</td>
            </tr>
            <tr>
              <td>
                <div class="exercise-name">Remada Cavalinho</div>
                <div class="exercise-description">Remada com apoio no peito</div>
              </td>
              <td><span class="workout-badge">3</span></td>
              <td>10-12</td>
              <td>75s</td>
              <td class="exercise-tip">Foco na retração escapular</td>
            </tr>
            <tr>
              <td>
                <div class="exercise-name">Pulldown Corda</div>
                <div class="exercise-description">Extensão de costas no cabo com corda</div>
              </td>
              <td><span class="workout-badge">3</span></td>
              <td>12-15</td>
              <td>60s</td>
              <td class="exercise-tip">Sinta o alongamento no topo</td>
            </tr>
            <tr>
              <td>
                <div class="exercise-name">Rosca Direta</div>
                <div class="exercise-description">Flexão de cotovelos com barra reta</div>
              </td>
              <td><span class="workout-badge">4</span></td>
              <td>10-12</td>
              <td>60s</td>
              <td class="exercise-tip">Cotovelos fixos ao lado do corpo</td>
            </tr>
            <tr>
              <td>
                <div class="exercise-name">Rosca Martelo</div>
                <div class="exercise-description">Flexão com pegada neutra</div>
              </td>
              <td><span class="workout-badge">3</span></td>
              <td>12-15</td>
              <td>45s</td>
              <td class="exercise-tip">Trabalha braquial e antebraço</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Workout C -->
      <div class="page-break">
        <div class="workout-header">
          <div class="workout-name">Treino C - Pernas e Glúteos</div>
          <div class="workout-objective">Desenvolvimento completo de membros inferiores</div>
        </div>
        <table class="workout-table">
          <thead>
            <tr>
              <th style="width: 35%;">Exercício</th>
              <th style="width: 10%;">Séries</th>
              <th style="width: 12%;">Reps</th>
              <th style="width: 10%;">Descanso</th>
              <th style="width: 33%;">Dica</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="exercise-name">Agachamento Livre</div>
                <div class="exercise-description">Agache até 90° ou mais, mantendo a coluna</div>
              </td>
              <td><span class="workout-badge">4</span></td>
              <td>8-12</td>
              <td>120s</td>
              <td class="exercise-tip">Joelhos na direção dos pés</td>
            </tr>
            <tr>
              <td>
                <div class="exercise-name">Leg Press 45°</div>
                <div class="exercise-description">Pressione a plataforma sem travar joelhos</div>
              </td>
              <td><span class="workout-badge">4</span></td>
              <td>10-12</td>
              <td>90s</td>
              <td class="exercise-tip">Não levante o quadril do banco</td>
            </tr>
            <tr>
              <td>
                <div class="exercise-name">Cadeira Extensora</div>
                <div class="exercise-description">Extensão de joelhos para quadríceps</div>
              </td>
              <td><span class="workout-badge">3</span></td>
              <td>12-15</td>
              <td>60s</td>
              <td class="exercise-tip">Contração forte no topo</td>
            </tr>
            <tr>
              <td>
                <div class="exercise-name">Mesa Flexora</div>
                <div class="exercise-description">Flexão de joelhos para posterior</div>
              </td>
              <td><span class="workout-badge">3</span></td>
              <td>12-15</td>
              <td>60s</td>
              <td class="exercise-tip">Movimento controlado</td>
            </tr>
            <tr>
              <td>
                <div class="exercise-name">Stiff</div>
                <div class="exercise-description">Flexão de quadril com pernas semi-estendidas</div>
              </td>
              <td><span class="workout-badge">4</span></td>
              <td>10-12</td>
              <td>75s</td>
              <td class="exercise-tip">Sinta o alongamento do posterior</td>
            </tr>
            <tr>
              <td>
                <div class="exercise-name">Elevação Pélvica</div>
                <div class="exercise-description">Extensão de quadril para glúteos</div>
              </td>
              <td><span class="workout-badge">4</span></td>
              <td>12-15</td>
              <td>60s</td>
              <td class="exercise-tip">Aperte os glúteos no topo</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- ========================================
         DIET PLAN
         ======================================== -->
    <section class="section page-break">
      <div class="section-header">
        <table>
          <tr>
            <td><div class="section-icon">🥗</div></td>
            <td class="section-title">Plano Alimentar</td>
          </tr>
        </table>
      </div>

      <table class="meals-grid">
        <!-- Row 1: Breakfast & Morning Snack -->
        <tr>
          <td class="meal-card">
            <div class="meal-header">
              <table>
                <tr>
                  <td>
                    <div class="meal-name">Café da Manhã</div>
                    <div class="meal-objective">Energia para iniciar o dia</div>
                  </td>
                  <td style="text-align: right;">
                    <span class="meal-time">07:00</span>
                  </td>
                </tr>
              </table>
            </div>
            <div class="meal-foods">
              <table class="food-table">
                <tr>
                  <td style="width: 60%;">
                    <span class="food-dot"></span>
                    <span class="food-quantity">3</span> <span class="food-name">ovos mexidos</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">18g</td>
                        <td class="carbs">2g</td>
                        <td class="fat">15g</td>
                        <td class="kcal">210</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="food-dot"></span>
                    <span class="food-quantity">2</span> <span class="food-name">fatias de pão integral</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">6g</td>
                        <td class="carbs">24g</td>
                        <td class="fat">2g</td>
                        <td class="kcal">140</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="food-dot"></span>
                    <span class="food-quantity">1</span> <span class="food-name">banana</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">1g</td>
                        <td class="carbs">27g</td>
                        <td class="fat">0g</td>
                        <td class="kcal">105</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="food-dot"></span>
                    <span class="food-quantity">200ml</span> <span class="food-name">leite desnatado</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">7g</td>
                        <td class="carbs">10g</td>
                        <td class="fat">0g</td>
                        <td class="kcal">70</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
            <div class="meal-alternatives">
              <div class="alternatives-label">Substituições:</div>
              <span class="alternative-tag">Tapioca com queijo</span>
              <span class="alternative-tag">Iogurte com granola</span>
            </div>
          </td>
          <td class="meal-card">
            <div class="meal-header">
              <table>
                <tr>
                  <td>
                    <div class="meal-name">Lanche da Manhã</div>
                    <div class="meal-objective">Manter metabolismo ativo</div>
                  </td>
                  <td style="text-align: right;">
                    <span class="meal-time">10:00</span>
                  </td>
                </tr>
              </table>
            </div>
            <div class="meal-foods">
              <table class="food-table">
                <tr>
                  <td style="width: 60%;">
                    <span class="food-dot"></span>
                    <span class="food-quantity">1</span> <span class="food-name">maçã</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">0g</td>
                        <td class="carbs">25g</td>
                        <td class="fat">0g</td>
                        <td class="kcal">95</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="food-dot"></span>
                    <span class="food-quantity">30g</span> <span class="food-name">castanhas</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">5g</td>
                        <td class="carbs">6g</td>
                        <td class="fat">18g</td>
                        <td class="kcal">196</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="food-dot"></span>
                    <span class="food-quantity">1 scoop</span> <span class="food-name">whey (opcional)</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">24g</td>
                        <td class="carbs">3g</td>
                        <td class="fat">1g</td>
                        <td class="kcal">120</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
            <div class="meal-alternatives">
              <div class="alternatives-label">Substituições:</div>
              <span class="alternative-tag">Queijo cottage com frutas</span>
              <span class="alternative-tag">Banana com pasta de amendoim</span>
            </div>
          </td>
        </tr>

        <!-- Row 2: Lunch & Afternoon Snack -->
        <tr>
          <td class="meal-card">
            <div class="meal-header">
              <table>
                <tr>
                  <td>
                    <div class="meal-name">Almoço</div>
                    <div class="meal-objective">Principal refeição - energia e recuperação</div>
                  </td>
                  <td style="text-align: right;">
                    <span class="meal-time">12:30</span>
                  </td>
                </tr>
              </table>
            </div>
            <div class="meal-foods">
              <table class="food-table">
                <tr>
                  <td style="width: 60%;">
                    <span class="food-dot"></span>
                    <span class="food-quantity">200g</span> <span class="food-name">frango grelhado</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">62g</td>
                        <td class="carbs">0g</td>
                        <td class="fat">7g</td>
                        <td class="kcal">330</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="food-dot"></span>
                    <span class="food-quantity">150g</span> <span class="food-name">arroz integral</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">4g</td>
                        <td class="carbs">45g</td>
                        <td class="fat">2g</td>
                        <td class="kcal">218</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="food-dot"></span>
                    <span class="food-quantity">100g</span> <span class="food-name">feijão</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">9g</td>
                        <td class="carbs">23g</td>
                        <td class="fat">1g</td>
                        <td class="kcal">132</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="food-dot"></span>
                    <span class="food-quantity">à vontade</span> <span class="food-name">salada verde</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">2g</td>
                        <td class="carbs">5g</td>
                        <td class="fat">0g</td>
                        <td class="kcal">25</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="food-dot"></span>
                    <span class="food-quantity">1 colher</span> <span class="food-name">azeite</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">0g</td>
                        <td class="carbs">0g</td>
                        <td class="fat">14g</td>
                        <td class="kcal">120</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
            <div class="meal-alternatives">
              <div class="alternatives-label">Substituições:</div>
              <span class="alternative-tag">Carne vermelha magra</span>
              <span class="alternative-tag">Peixe grelhado</span>
              <span class="alternative-tag">Batata doce</span>
            </div>
          </td>
          <td class="meal-card">
            <div class="meal-header">
              <table>
                <tr>
                  <td>
                    <div class="meal-name">Lanche da Tarde</div>
                    <div class="meal-objective">Pré-treino / energia sustentada</div>
                  </td>
                  <td style="text-align: right;">
                    <span class="meal-time">16:00</span>
                  </td>
                </tr>
              </table>
            </div>
            <div class="meal-foods">
              <table class="food-table">
                <tr>
                  <td style="width: 60%;">
                    <span class="food-dot"></span>
                    <span class="food-quantity">1</span> <span class="food-name">banana</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">1g</td>
                        <td class="carbs">27g</td>
                        <td class="fat">0g</td>
                        <td class="kcal">105</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="food-dot"></span>
                    <span class="food-quantity">2 fatias</span> <span class="food-name">pão integral</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">6g</td>
                        <td class="carbs">24g</td>
                        <td class="fat">2g</td>
                        <td class="kcal">140</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="food-dot"></span>
                    <span class="food-quantity">1 colher</span> <span class="food-name">pasta de amendoim</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">4g</td>
                        <td class="carbs">3g</td>
                        <td class="fat">8g</td>
                        <td class="kcal">94</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
            <div class="meal-alternatives">
              <div class="alternatives-label">Substituições:</div>
              <span class="alternative-tag">Batata doce com frango</span>
              <span class="alternative-tag">Vitamina de frutas</span>
            </div>
          </td>
        </tr>

        <!-- Row 3: Dinner & Late Snack -->
        <tr>
          <td class="meal-card">
            <div class="meal-header">
              <table>
                <tr>
                  <td>
                    <div class="meal-name">Jantar</div>
                    <div class="meal-objective">Recuperação muscular</div>
                  </td>
                  <td style="text-align: right;">
                    <span class="meal-time">20:00</span>
                  </td>
                </tr>
              </table>
            </div>
            <div class="meal-foods">
              <table class="food-table">
                <tr>
                  <td style="width: 60%;">
                    <span class="food-dot"></span>
                    <span class="food-quantity">200g</span> <span class="food-name">peixe ou frango</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">50g</td>
                        <td class="carbs">0g</td>
                        <td class="fat">5g</td>
                        <td class="kcal">250</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="food-dot"></span>
                    <span class="food-quantity">150g</span> <span class="food-name">legumes salteados</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">3g</td>
                        <td class="carbs">12g</td>
                        <td class="fat">5g</td>
                        <td class="kcal">90</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="food-dot"></span>
                    <span class="food-quantity">100g</span> <span class="food-name">arroz ou quinoa</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">3g</td>
                        <td class="carbs">28g</td>
                        <td class="fat">1g</td>
                        <td class="kcal">130</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="food-dot"></span>
                    <span class="food-quantity">à vontade</span> <span class="food-name">salada verde</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">2g</td>
                        <td class="carbs">5g</td>
                        <td class="fat">0g</td>
                        <td class="kcal">25</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
            <div class="meal-alternatives">
              <div class="alternatives-label">Substituições:</div>
              <span class="alternative-tag">Omelete de legumes</span>
              <span class="alternative-tag">Carne moída com purê</span>
            </div>
          </td>
          <td class="meal-card">
            <div class="meal-header">
              <table>
                <tr>
                  <td>
                    <div class="meal-name">Ceia</div>
                    <div class="meal-objective">Proteína de digestão lenta</div>
                  </td>
                  <td style="text-align: right;">
                    <span class="meal-time">22:00</span>
                  </td>
                </tr>
              </table>
            </div>
            <div class="meal-foods">
              <table class="food-table">
                <tr>
                  <td style="width: 60%;">
                    <span class="food-dot"></span>
                    <span class="food-quantity">200g</span> <span class="food-name">iogurte grego</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">20g</td>
                        <td class="carbs">8g</td>
                        <td class="fat">10g</td>
                        <td class="kcal">200</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="food-dot"></span>
                    <span class="food-quantity">1 colher</span> <span class="food-name">mel</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">0g</td>
                        <td class="carbs">17g</td>
                        <td class="fat">0g</td>
                        <td class="kcal">64</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="food-dot"></span>
                    <span class="food-quantity">mix</span> <span class="food-name">oleaginosas</span>
                  </td>
                  <td class="food-macros">
                    <table class="macros-mini">
                      <tr>
                        <th>P</th><th>C</th><th>G</th><th>kcal</th>
                      </tr>
                      <tr>
                        <td class="protein">5g</td>
                        <td class="carbs">6g</td>
                        <td class="fat">15g</td>
                        <td class="kcal">170</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
            <div class="meal-alternatives">
              <div class="alternatives-label">Substituições:</div>
              <span class="alternative-tag">Queijo cottage</span>
              <span class="alternative-tag">Caseína</span>
            </div>
          </td>
        </tr>
      </table>
    </section>

    <!-- ========================================
         NUTRITIONAL ANALYSIS
         ======================================== -->
    <section class="section section-alt page-break">
      <div class="section-header">
        <table>
          <tr>
            <td><div class="section-icon">🔥</div></td>
            <td class="section-title">Análise Calórica e Nutricional</td>
          </tr>
        </table>
      </div>

      <table class="calories-summary">
        <tr>
          <td class="calorie-card">
            <div class="calorie-label">Calorias de Manutenção</div>
            <div class="calorie-value">2,862 <span class="calorie-unit">kcal</span></div>
          </td>
          <td class="calorie-card highlight">
            <div class="calorie-label">Calorias do Plano</div>
            <div class="calorie-value">3,291 <span class="calorie-unit">kcal</span></div>
            <span class="calorie-badge">+429 kcal (Superávit)</span>
          </td>
          <td class="calorie-card">
            <div class="calorie-label">Objetivo</div>
            <div class="calorie-value" style="font-size: 24px;">Ganho de Massa</div>
          </td>
        </tr>
      </table>

      <div class="macros-container">
        <h4 style="font-size: 18px; margin-bottom: 24px; color: var(--primary);">Distribuição de Macronutrientes</h4>
        
        <div class="macro-row">
          <div class="macro-header">
            <table>
              <tr>
                <td class="macro-name">🔴 Proteínas (30%)</td>
                <td class="macro-value">247g</td>
              </tr>
            </table>
          </div>
          <div class="macro-bar-bg">
            <div class="macro-bar protein" style="width: 30%;"></div>
          </div>
        </div>

        <div class="macro-row">
          <div class="macro-header">
            <table>
              <tr>
                <td class="macro-name">🟡 Carboidratos (45%)</td>
                <td class="macro-value">370g</td>
              </tr>
            </table>
          </div>
          <div class="macro-bar-bg">
            <div class="macro-bar carbs" style="width: 45%;"></div>
          </div>
        </div>

        <div class="macro-row">
          <div class="macro-header">
            <table>
              <tr>
                <td class="macro-name">🔵 Gorduras (25%)</td>
                <td class="macro-value">91g</td>
              </tr>
            </table>
          </div>
          <div class="macro-bar-bg">
            <div class="macro-bar fat" style="width: 25%;"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================================
         EDUCATIONAL SECTION
         ======================================== -->
    <section class="section page-break">
      <div class="section-header">
        <table>
          <tr>
            <td><div class="section-icon">📚</div></td>
            <td class="section-title">Entenda sua Dieta e seu Treino</td>
          </tr>
        </table>
      </div>

      <table class="education-grid">
        <tr>
          <td class="education-card">
            <h4>O que são Calorias?</h4>
            <p>Calorias são unidades de energia. Seu corpo precisa de energia para todas as funções, desde pensar até treinar. Consumir menos do que gasta = emagrecer. Consumir mais = ganhar peso.</p>
          </td>
          <td class="education-card">
            <h4>Macronutrientes</h4>
            <p>Proteínas constroem músculos, carboidratos fornecem energia, gorduras regulam hormônios. O equilíbrio entre eles determina como seu corpo responde ao treino.</p>
          </td>
        </tr>
        <tr>
          <td class="education-card">
            <h4>Déficit vs Superávit</h4>
            <p>Déficit calórico: consumir menos calorias do que gasta, usado para perda de gordura. Superávit calórico: consumir mais do que gasta, usado para ganho de massa muscular.</p>
          </td>
          <td class="education-card">
            <h4>Sinergia Treino + Dieta</h4>
            <p>O treino fornece o estímulo para adaptação muscular. A dieta fornece os nutrientes para essa adaptação acontecer. Sem um dos dois, os resultados são limitados.</p>
          </td>
        </tr>
        <tr>
          <td class="education-card">
            <h4>Micronutrientes</h4>
            <p>Vitaminas e minerais não fornecem energia, mas são essenciais para metabolismo, recuperação e saúde geral. Consuma vegetais variados diariamente.</p>
          </td>
          <td class="education-card">
            <h4>Consistência é Tudo</h4>
            <p>Resultados vêm da consistência ao longo do tempo, não de perfeição pontual. Seguir 80% do plano por meses é melhor que 100% por dias.</p>
          </td>
        </tr>
      </table>
    </section>

    <!-- ========================================
         RESULTS PROJECTION
         ======================================== -->
    <section class="section section-alt page-break">
      <div class="section-header">
        <table>
          <tr>
            <td><div class="section-icon">📈</div></td>
            <td class="section-title">Projeção de Evolução</td>
          </tr>
        </table>
      </div>

      <table class="projection-table">
        <thead>
          <tr>
            <th>Peso Atual</th>
            <th>4 Semanas</th>
            <th>8 Semanas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="projection-value">82 kg</div>
            </td>
            <td>
              <div class="projection-value">83 kg</div>
              <span class="projection-change">+1 kg</span>
            </td>
            <td>
              <div class="projection-value">84 kg</div>
              <span class="projection-change">+2 kg</span>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="projection-disclaimer">
        * Projeções baseadas em médias. Resultados individuais podem variar de acordo com fatores genéticos, adesão ao plano e qualidade do sono.
      </div>
    </section>

    <!-- ========================================
         FINAL RECOMMENDATIONS
         ======================================== -->
    <section class="section page-break">
      <div class="section-header">
        <table>
          <tr>
            <td><div class="section-icon">✅</div></td>
            <td class="section-title">Recomendações Estratégicas</td>
          </tr>
        </table>
      </div>

      <table class="recommendations-grid">
        <tr>
          <td class="recommendation-card">
            <div class="recommendation-icon">😴</div>
            <div class="recommendation-title">Sono</div>
            <p class="recommendation-text">7-9 horas por noite para recuperação muscular e hormonal</p>
          </td>
          <td class="recommendation-card">
            <div class="recommendation-icon">💧</div>
            <div class="recommendation-title">Hidratação</div>
            <p class="recommendation-text">2.9L de água diários, mais em dias de treino</p>
          </td>
          <td class="recommendation-card">
            <div class="recommendation-icon">🎯</div>
            <div class="recommendation-title">Consistência</div>
            <p class="recommendation-text">Siga o plano por pelo menos 8 semanas antes de avaliar resultados</p>
          </td>
          <td class="recommendation-card">
            <div class="recommendation-icon">📊</div>
            <div class="recommendation-title">Ajustes</div>
            <p class="recommendation-text">Reavalie a cada 4 semanas e ajuste conforme progresso</p>
          </td>
        </tr>
      </table>

      <div class="final-message">
        <h3>Seu plano está pronto. Agora é com você! 💪</h3>
        <p>
          Este plano foi criado especialmente para você, João, baseado em seus dados e objetivos. 
          A transformação começa com o primeiro treino. Boa sorte!
        </p>
        <div class="final-footer">
          <div class="final-logo">PHYS<span class="accent">IQ</span></div>
          <p class="final-tagline">A IA treinada com ciência para transformar seu corpo</p>
        </div>
      </div>
    </section>

  </div>
</body>
</html>
