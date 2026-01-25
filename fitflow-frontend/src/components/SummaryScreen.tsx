import { motion } from "framer-motion";
import { Check, Sparkles, Shield, Award, Clock, ChevronDown } from "lucide-react";
import { Button } from "./ui/button";
import { useState } from "react";
import GoalsCarousel from "./GoalsCarousel"; // Ajuste o caminho se estiver em outra pasta


interface SummaryItem {
  label: string;
  value: string;
}

interface SummaryScreenProps {
  items: SummaryItem[];
  onPurchase: () => Promise<void>;
  onEdit: () => void;
}

const SummaryScreen = ({ items, onPurchase, onEdit }: SummaryScreenProps) => {
  const [isLoading, setIsLoading] = useState(false);
  const [isCollapsed, setIsCollapsed] = useState(true); // Collapse do resumo do perfil

  const handleClick = async () => {
    try {
      setIsLoading(true);
      await onPurchase(); // aguarda a função de pagamento
    } finally {
      setIsLoading(false); // desativa loading após a conclusão ou erro
    }
  };

  // ----- Helpers para extrair valores de `items` -----
  const findItemValue = (keys: string[]) => {
    const lowerKeys = keys.map(k => k.toLowerCase());
    const found = items.find(it => {
      const lbl = (it.label || "").toLowerCase();
      return lowerKeys.some(k => lbl.includes(k));
    });
    return found?.value;
  };

  const parseNumber = (raw?: string) => {
    if (!raw) return NaN;
    // remove unidades comuns e vírgulas, aceita "70 kg", "170 cm", "3.9"
    const cleaned = raw.replace(/[,]/g, ".").replace(/[^\d.\-]/g, "");
    const n = parseFloat(cleaned);
    return isNaN(n) ? NaN : n;
  };

  // Extrair dados que precisamos (tenta várias variações de label)
  const pesoRaw = findItemValue(["peso"]);
  const alturaRaw = findItemValue(["altura"]);
  const idadeRaw = findItemValue(["idade", "ano", "anos"]);
  const generoRaw = findItemValue(["genero", "gênero", "sexo"]);
  const nivelRaw = findItemValue(["nível", "nivel", "nível de aptidão", "aptidão"]);

  const peso = parseNumber(pesoRaw) || 0; // kg
  const alturaCm = parseNumber(alturaRaw) || 0; // cm
  const idade = Math.round(parseNumber(idadeRaw) || 0);
  const genero = generoRaw ? generoRaw.toString() : ""; // espera "Masculino" / "Feminino"
  const nivel = nivelRaw ? nivelRaw.toString() : "";

  // ----- IMC dinâmico -----
  const alturaM = alturaCm > 0 ? alturaCm / 100 : 0;
  const imcValue = alturaM > 0 && peso > 0 ? +(peso / (alturaM * alturaM)).toFixed(1) : 0;

  const IMC_MIN = 10;
  const IMC_MAX = 100;
  const imcPercent = Math.min(
    100,
    Math.max(0, ((imcValue - IMC_MIN) / (IMC_MAX - IMC_MIN)) * 100)
  );

  const status =
    imcPercent < 20
      ? { label: "Abaixo do peso", color: "text-blue-400" }
      : imcPercent < 40
      ? { label: "Peso normal", color: "text-green-400" }
      : imcPercent < 65
      ? { label: "Sobrepeso", color: "text-yellow-400" }
      : { label: "Obeso", color: "text-red-500" };

  // ----- Metabolismo Basal (Mifflin-St Jeor) -----
  // Fórmula:
  // Homens:   BMR = 10*peso + 6.25*altura(cm) - 5*idade + 5
  // Mulheres: BMR = 10*peso + 6.25*altura(cm) - 5*idade - 161
  let bmr = 0;
  if (peso > 0 && alturaCm > 0 && idade > 0) {
    if (genero.toLowerCase().includes("mascul")) {
      bmr = 10 * peso + 6.25 * alturaCm - 5 * idade + 5;
    } else if (genero.toLowerCase().includes("femin") || genero.toLowerCase().includes("fem")) {
      bmr = 10 * peso + 6.25 * alturaCm - 5 * idade - 161;
    } else {
      // Se o gênero não estiver claro, usa média simples (fallback)
      bmr = 10 * peso + 6.25 * alturaCm - 5 * idade;
    }
  }
  const BMR_VALUE = Math.round(bmr || 0);

  // Para animar a barra (mesma lógica anterior)
  const CAL_MIN = 1000;
  const CAL_MAX = 5000;
  const calPercent = Math.min(
    100,
    Math.max(0, ((BMR_VALUE - CAL_MIN) / (CAL_MAX - CAL_MIN)) * 100)
  );

  // ----- Água recomendada (litros) -----
  const aguaLitros = peso > 0 ? +(peso * 0.035).toFixed(1) : 0;
  const totalVisualCups = 8; // nova escala de 1 a 5 copos
  const maxLitersForScale = 5; // 5 litros corresponde ao copo cheio
  const filledCups = Math.min(
    totalVisualCups,
    Math.round((aguaLitros / maxLitersForScale) * totalVisualCups)
  );

  return (
    <div className="min-h-screen bg-background flex flex-col px-4 py-8 relative overflow-hidden">
      <div className="absolute inset-0 bg-gradient-to-b from-primary/[0.02] via-transparent to-secondary/[0.02] pointer-events-none" />
      
      <div className="max-w-2xl mx-auto w-full flex-1 flex flex-col relative z-10">
        {/* Header */}
        <motion.div initial={{ opacity: 0, y: 20 }} animate={{ opacity: 1, y: 0 }} className="text-center mb-8">
          <motion.span className="text-2xl font-display font-bold gradient-text">HighFit AI</motion.span>
          <h1 className="text-3xl md:text-4xl font-display font-bold text-foreground mt-6 mb-3">
            Seu plano está pronto!
          </h1>
          <p className="text-muted-foreground text-lg">
            Confira o resumo do seu perfil personalizado
          </p>
        </motion.div>

        {/* Summary Card (Colapsible) */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.2 }}
          className="bg-card border border-border rounded-2xl mb-6 overflow-hidden"
        >
          {/* Header do Collapse */}
          <button
            onClick={() => setIsCollapsed(!isCollapsed)}
            className="w-full flex justify-between items-center p-6 pb-0"
          >
            <h3 className="text-lg font-semibold text-foreground flex items-center gap-2">
              <div className="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center">
                <Check className="w-4 h-4 text-primary" />
              </div>
              Resumo do seu perfil
            </h3>
            <motion.div
              animate={{ rotate: isCollapsed ? 0 : 180 }}
              transition={{ duration: 0.2 }}
            >
              <ChevronDown className="w-5 h-5 text-muted-foreground" />
            </motion.div>
          </button>

          {/* Conteúdo do Collapse */}
          <motion.div
            initial={{ height: 0, opacity: 0 }}
            animate={{ height: isCollapsed ? 0 : "auto", opacity: isCollapsed ? 0 : 1 }}
            transition={{ duration: 0.3 }}
            className="px-6 pb-6 grid gap-2"
          >
            {items.map((item, index) => (
              <div
                key={index}
                className="flex justify-between items-center py-2.5 border-b border-border/30 last:border-0"
              >
                <span className="text-muted-foreground text-sm">{item.label}</span>
                <span className="text-foreground font-medium text-sm">{item.value}</span>
              </div>
            ))}
          </motion.div>
        </motion.div>

        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.3 }}
          className="space-y-8 max-w-5xl mx-auto mb-6"
        >
          {/* ================= IMC PREMIUM ================= */}
          {(() => {
            return (
              <div className="bg-slate-900 border border-slate-800 rounded-2xl p-7 w-full relative">
                <h4 className="text-base font-semibold tracking-wide text-slate-400 mb-1">
                  IMC atual
                </h4>

                <div className="flex items-end gap-3 mb-8">
                  <span className="text-5xl md:text-6xl font-extrabold text-white">
                    {imcValue || 0} IMC
                  </span>
                </div>

                {/* Barra gradiente */}
                <div className="relative w-full h-4 rounded-full overflow-visible mb-3">
                  <div
                    className="absolute inset-0 rounded-full shadow-md"
                    style={{
                      background:
                        "linear-gradient(90deg, rgb(74,89,230) 0%, rgb(86,158,242) 21%, rgb(117,198,179) 40%, rgb(191,228,139) 55%, rgb(255,229,147) 69%, rgb(250,133,87) 85%, rgb(236,62,79) 100%)",
                    }}
                  />

                  {/* Marcador grande - FORA da barra */}
                  <motion.div
                    initial={{ left: 0 }}
                    animate={{ left: `${imcPercent}%` }}
                    transition={{ duration: 0.8, ease: "easeOut" }}
                    className="absolute top-1/2 -translate-y-1/2 -translate-x-1/2"
                    style={{ zIndex: 9999 }}
                  >
                    <div className="w-8 h-8 bg-white border-4 border-slate-900 rounded-full" />
                  </motion.div>
                </div>

                <div className="flex justify-between text-sm font-medium text-slate-400 mt-6">
                  <span>Abaixo do peso</span>
                  <span className={status.color}>{status.label}</span>
                </div>

                <p className="text-sm leading-relaxed text-slate-400 mt-5 max-w-2xl">
                  O <strong className="text-slate-300">Índice de Massa Corporal (IMC)</strong> é uma medida que utiliza sua altura e peso para determinar se seu peso está dentro do intervalo saudável recomendado.
                </p>
              </div>
            );
          })()}

          {/* ================= METABOLISMO BASAL + ÁGUA (DESTAQUE VISUAL) ================= */}
          {(() => {
            return (
              <div className="grid md:grid-cols-2 gap-6">
                {/* Metabolismo Basal (BMR) */}
                <div className="bg-slate-900 border border-slate-800 rounded-2xl p-6 flex flex-col gap-3 relative">
                  <div className="flex items-center gap-4 mb-2">
                    <div className="text-5xl">🍔</div>
                    <div>
                      <p className="text-sm font-medium text-slate-400 mb-1">
                        Metabolismo Basal (BMR)
                      </p>
                      <p className="text-3xl font-extrabold text-white">
                        {BMR_VALUE} <span className="text-lg text-slate-400">kcal</span>
                      </p>
                    </div>
                  </div>

                  <div className="relative w-full h-3 rounded-full overflow-visible mt-3">
                    <div className="absolute inset-0 bg-slate-800 rounded-full" />
                    <div 
                      className="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 rounded-full shadow-sm"
                      style={{ width: `${calPercent}%` }}
                    />
                    
                    <motion.div
                      initial={{ left: 0 }}
                      animate={{ left: `${calPercent}%` }}
                      transition={{ duration: 0.8 }}
                      className="absolute top-1/2 -translate-y-1/2 -translate-x-1/2"
                      style={{ zIndex: 9999 }}
                    >
                      <div className="w-6 h-6 bg-orange-500 rounded-full border-3 border-slate-900" />
                    </motion.div>
                  </div>

                  <div className="flex justify-between text-xs font-medium text-slate-500 mt-2">
                    <span>{CAL_MIN} kcal</span>
                    <span>{CAL_MAX} kcal</span>
                  </div>

                  <p className="text-xs text-slate-400 mt-2">
                    Metabolismo basal calculado a partir de sexo, peso, altura e idade (fórmula Mifflin-St Jeor).
                  </p>
                </div>

                {/* Água recomendada */}
                <div className="bg-slate-900 border border-slate-800 rounded-2xl p-6 flex flex-col gap-3">
                  <div className="flex items-center gap-4 mb-2">
                    <div className="text-5xl">💧</div>
                    <div>
                      <p className="text-sm font-medium text-slate-400 mb-1">
                        Litros de água recomendados
                      </p>
                      <p className="text-3xl font-extrabold text-white">
                        {aguaLitros} <span className="text-lg text-slate-400">L</span>
                      </p>
                    </div>
                  </div>

                  <div className="flex gap-2 mt-3 justify-start">
                    {[...Array(totalVisualCups)].map((_, i) => (
                      <div
                        key={i}
                        className={`relative w-7 h-9 rounded-lg transition-all duration-300 ${
                          i < filledCups
                            ? "bg-gradient-to-b from-blue-400 to-blue-600 shadow-md shadow-blue-500/20"
                            : "bg-slate-800 border border-slate-700"
                        }`}
                      >
                        {/* Ícone de copo */}
                        <svg 
                          viewBox="0 0 24 24" 
                          fill="none" 
                          className={`w-full h-full p-1 ${i < filledCups ? "text-white" : "text-slate-600"}`}
                        >
                          <path 
                            d="M6 3h12l-1.5 18h-9L6 3z" 
                            stroke="currentColor" 
                            strokeWidth="2" 
                            strokeLinecap="round" 
                            strokeLinejoin="round"
                            fill={i < filledCups ? "currentColor" : "none"}
                            opacity={i < filledCups ? "0.3" : "1"}
                          />
                          {i < filledCups && (
                            <path 
                              d="M7 10h10" 
                              stroke="currentColor" 
                              strokeWidth="2" 
                              strokeLinecap="round"
                            />
                          )}
                        </svg>
                      </div>
                    ))}
                  </div>

                  <p className="text-xs text-slate-400 mt-3">
                    <strong className="text-blue-400">{aguaLitros} Litros</strong> recomendados. <br /> Baseado em ~35 ml por kg de peso.
                  </p>
                </div>
              </div>
            );
          })()}

          {/* ================= PLANO PERSONALIZADO ================= */}
          <div className="bg-slate-900 border border-slate-800 rounded-2xl p-7">
            <h4 className="text-2xl font-bold text-white mb-6">
              O plano personalizado está{" "}
              <span className="text-orange-500">pronto!</span>
            </h4>

            <div className="grid md:grid-cols-2 gap-5">
              {[
                { label: "⏳ Duração do Treino", value: "1 hora" },
                { label: "💪 Nível de Aptidão", value: "Intermediário" },
                { label: "👟 Local para Treinar", value: "Casa" },
                { label: "📆 Frequência de Treino", value: "3x por semana" },
              ].map((item, i) => (
                <div
                  key={i}
                  className="bg-gradient-to-br from-orange-500/10 to-orange-600/5 border border-orange-500/20 rounded-xl p-5 flex flex-col gap-2 hover:border-orange-500/40 transition-all"
                >
                  <span className="text-sm font-medium text-slate-400">{item.label}</span>
                  <span className="text-xl font-bold text-white">
                    {item.value}
                  </span>
                </div>
              ))}
            </div>
          </div>

          {/* ================= OBJETIVOS ================= */}
          <GoalsCarousel />

        </motion.div>

        {/* Plan Card */}
        <motion.div initial={{ opacity: 0, y: 20 }} animate={{ opacity: 1, y: 0 }} transition={{ delay: 0.4 }} className="bg-card border border-primary/20 rounded-2xl p-6 mb-6">
          <div className="flex items-center gap-4 mb-5">
            <div className="w-12 h-12 rounded-xl bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center">
              <Sparkles className="w-6 h-6 text-primary" />
            </div>
            <div>
              <h3 className="text-lg font-semibold text-foreground">Plano Completo de Treino + Dieta</h3>
              <p className="text-muted-foreground text-sm">Personalizado com base científica</p>
            </div>
          </div>
          
          <ul className="space-y-3 mb-6">
            {[
              "Plano de treino detalhado para seu objetivo",
              "Dieta personalizada com refeições completas",
              "Lista de compras otimizada",
              "Dicas de execução dos exercícios",
              "Sugestões de substituição de alimentos",
            ].map((item, index) => (
              <motion.li
                key={index}
                initial={{ opacity: 0, x: -20 }}
                animate={{ opacity: 1, x: 0 }}
                transition={{ delay: 0.5 + index * 0.08 }}
                className="flex items-center gap-3 text-foreground text-sm"
              >
                <div className="w-5 h-5 rounded-full bg-secondary/20 flex items-center justify-center flex-shrink-0">
                  <Check className="w-3 h-3 text-secondary" />
                </div>
                {item}
              </motion.li>
            ))}
          </ul>

          {/* Price */}
          <div className="text-center pt-4 border-t border-border/30">
            <div className="mb-3">
              <span className="text-muted-foreground line-through text-lg mr-3">R$ 47,00</span>
              <span className="text-4xl font-bold gradient-text">R$ 9,90</span>
            </div>
            <p className="text-sm text-muted-foreground">Pagamento único • Acesso imediato</p>
          </div>
        </motion.div>

        {/* Trust badges */}
        <motion.div initial={{ opacity: 0, y: 20 }} animate={{ opacity: 1, y: 0 }} transition={{ delay: 0.6 }} className="grid grid-cols-3 gap-3 mb-6">
          {[{ icon: Shield, text: "Pagamento Seguro" }, { icon: Award, text: "Garantia Total" }, { icon: Clock, text: "Acesso Imediato" }].map((badge, index) => (
            <div key={index} className="flex flex-col items-center text-center p-3 rounded-xl bg-muted/30">
              <badge.icon className="w-5 h-5 text-primary mb-2" />
              <span className="text-xs text-muted-foreground">{badge.text}</span>
            </div>
          ))}
        </motion.div>

        {/* CTA Button */}
        <motion.div initial={{ opacity: 0, y: 20 }} animate={{ opacity: 1, y: 0 }} transition={{ delay: 0.7 }} className="mt-auto flex flex-col gap-3">
          <div className="flex gap-3">
            <Button
              variant="outline"
              size="xl"
              onClick={onEdit} 
              className="w-2/5 text-sm"
            >
              Alterar respostas
            </Button>

            <Button
              variant="hero"
              size="xl"
              onClick={handleClick}
              className="w-3/4 flex items-center justify-center gap-2"
              disabled={isLoading}
            >
              {isLoading ? (
                <>
                  <span className="w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin"></span>
                  Processando...
                </>
              ) : (
                <>
                  <Sparkles className="w-5 h-5 mr-2" />
                  Gerar minha Dieta + Treino
                </>
              )}
            </Button>
          </div>

          <p className="text-center text-xs text-muted-foreground mt-4 flex items-center justify-center gap-2">
            <Shield className="w-4 h-4" />
            Seus dados estão protegidos e seguros
          </p>
        </motion.div>
      </div>
    </div>
  );
};

export default SummaryScreen;
