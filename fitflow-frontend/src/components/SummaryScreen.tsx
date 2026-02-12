import { motion } from "framer-motion";
import { Check, Sparkles, Shield, Award, Clock, ChevronDown } from "lucide-react";
import { Button } from "./ui/button";
import { useState, useEffect } from "react";
import GoalsCarousel from "./GoalsCarousel"; // Ajuste o caminho se estiver em outra pasta

interface SummaryItem {
  label: string;
  value: string;
}

interface SummaryScreenProps {
  items: SummaryItem[];
  onPurchase: () => Promise<void>;
  onEdit: () => void;

  onContactChange?: (data: {
    nome: string;
    email: string;
    telefone: string;
  }) => void;
}


const SummaryScreen = ({
  items,
  onPurchase,
  onEdit,
  onContactChange,
}: SummaryScreenProps) => {

  const [isLoading, setIsLoading] = useState(false);
  const [isCollapsed, setIsCollapsed] = useState(true); // Collapse do resumo do perfil

  // contato
  const [name, setName] = useState("");
  const [email, setEmail] = useState("");
  const [phone, setPhone] = useState("");
  const [savedContact, setSavedContact] = useState(false);

  useEffect(() => {
    try {
      const raw = localStorage.getItem("fitflow_contact");
      if (raw) {
        const parsed = JSON.parse(raw);
        setName(parsed.nome || "");
        setEmail(parsed.email || "");
        setPhone(parsed.telefone || "");
        setSavedContact(!!(parsed.nome || parsed.email || parsed.telefone));
      }
    } catch {
      // ignore
    }
  }, []);

  // salva automaticamente sempre que os campos mudarem
  useEffect(() => {
    const payload = {
      name: name.trim(),
      email: email.trim(),
      phone: phone.trim(),
    };

    // envia para o componente pai (normalizado)
    onContactChange?.({
      nome: payload.name,
      email: payload.email,
      telefone: payload.phone,
    });

    // persistência local
    try {
      if (payload.name || payload.email || payload.phone) {
        localStorage.setItem("fitflow_contact", JSON.stringify(payload));
        setSavedContact(true);
      } else {
        localStorage.removeItem("fitflow_contact");
        setSavedContact(false);
      }
    } catch (err) {
      console.error("Erro ao persistir contato:", err);
    }
  }, [name, email, phone, onContactChange]);



  const handleClick = async () => {
    try {
      setIsLoading(true);

      // garante persistência antes do purchase (redundante, mas seguro)
      try {
        localStorage.setItem("fitflow_contact", JSON.stringify({ name: name.trim(), email: email.trim(), phone: phone.trim() }));
        setSavedContact(true);
      } catch {}

      await onPurchase(); // aguarda a função de pagamento
    } finally {
      setIsLoading(false); // desativa loading após a conclusão ou erro
    }
  };

  // Busca item exato (case insensitive) ou começa com
  const findItemValue = (labels: string[]) => {
    const found = items.find(it => 
      labels.some(l => 
        it.label.toLowerCase().trim() === l.toLowerCase().trim() // igualdade exata
        || it.label.toLowerCase().trim().startsWith(l.toLowerCase().trim()) // começa com
      )
    );
    return found?.value ?? "";
  };

  const parseNumber = (raw?: string) => {
    if (!raw) return NaN;
    const cleaned = raw.replace(/[,]/g, ".").replace(/[^\d.\-]/g, "");
    const n = parseFloat(cleaned);
    return isNaN(n) ? NaN : n;
  };

  // Extrair dados que precisamos (tenta várias variações de label)
  const pesoRaw = findItemValue(["peso"]);
  const alturaRaw = findItemValue(["altura"]);
  const idadeRaw = findItemValue(["idade"]);
  const generoRaw = findItemValue(["genero", "gênero", "sexo"]);
  const nivelRaw = findItemValue(["nível", "nivel", "nível de aptidão", "aptidão"]);

  console.log(idadeRaw);
  const peso = parseNumber(pesoRaw) || 0; // kg
  const alturaCm = parseNumber(alturaRaw) || 0; // cm
  const idade = Math.round(parseNumber(idadeRaw) || 0);
  const genero = generoRaw ? generoRaw.toString() : ""; // espera "Masculino" / "Feminino"
  const nivel = nivelRaw ? nivelRaw.toString() : "";

  // ----- IMC dinâmico -----
  const alturaM = alturaCm > 0 ? alturaCm / 100 : 0;
  const imcValue = alturaM > 0 && peso > 0 ? +(peso / (alturaM * alturaM)).toFixed(1) : 0;

  const IMC_MIN = 18.5;
  const IMC_MAX = 40;

  const getImcPercentForGradient = (imc: number) => {
    if (imc < 18.5) return (imc / 18.5) * 21; // magreza: 0 → 21%
    if (imc >= 18.5 && imc <= 24.9) return 21 + ((imc - 18.5) / (24.9 - 18.5)) * (40 - 21);
    if (imc >= 25 && imc <= 29.9) return 40 + ((imc - 25) / (29.9 - 25)) * (69 - 40);
    if (imc >= 30 && imc <= 39.9) return 69 + ((imc - 30) / (39.9 - 30)) * (85 - 69);
    return 85 + ((imc - 40) / (50 - 40)) * (100 - 85); // assumindo que IMC max 50
  };

  const imcPercent = getImcPercentForGradient(imcValue);



  const getImcStatus = (imc: number) => {
    if (imc < 18.5) {
      return { label: "Magreza", grau: "0", color: "rgb(74, 89, 230)" };
    } else if (imc >= 18.5 && imc <= 24.9) {
      return { label: "Normal", grau: "0", color: "rgb(117, 198, 179)" };
    } else if (imc >= 25 && imc <= 29.9) {
      return { label: "Sobrepeso", grau: "I", color: "rgb(255, 229, 147)" };
    } else if (imc >= 30 && imc <= 39.9) {
      return { label: "Obesidade", grau: "II", color: "rgb(250, 133, 87)" };
    } else {
      return { label: "Obesidade Grave", grau: "III", color: "rgb(236, 62, 79)" };
    }
  };


  const status = getImcStatus(imcValue);


  // ----- Metabolismo Basal (Mifflin-St Jeor) -----
  let bmr = 0;
  if (peso > 0 && alturaCm > 0 && idade > 0) {
    if (genero.toLowerCase().includes("mascul")) {
      bmr = 10 * peso + 6.25 * alturaCm - 5 * idade + 5;
    } else if (genero.toLowerCase().includes("femin") || genero.toLowerCase().includes("fem")) {
      bmr = 10 * peso + 6.25 * alturaCm - 5 * idade - 161;
    } else {
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

  // validações simples de contato
  const emailValid = !!email && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  const phoneDigits = phone.replace(/\D/g, "");
  const phoneValid = phoneDigits.length >= 8; // regra simples (pode adaptar)

  return (
    <div className="min-h-screen bg-background flex flex-col px-4 py-8 relative overflow-hidden">
      <div className="absolute inset-0 bg-gradient-to-b from-primary/[0.02] via-transparent to-secondary/[0.02] pointer-events-none" />
      
      <div className="max-w-2xl mx-auto w-full flex-1 flex flex-col relative z-10">
        {/* Header */}
        <motion.div initial={{ opacity: 0, y: 20 }} animate={{ opacity: 1, y: 0 }} className="text-center mb-8">
          <motion.span className="text-2xl font-display font-bold gradient-text flex justify-center">
              <img src="/img/logo.png" alt="HF AI Logo" className="w-[130px]"/>
          </motion.span>
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
          {/* IMC Card */}
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

                  <motion.div
                    initial={{ left: "0%" }}
                    animate={{ left: `calc(${imcPercent}% )` }}
                    transition={{ duration: 0.8, ease: "easeOut" }}
                    className="absolute top-1/2 -translate-y-1/2 -translate-x-1/2"
                    style={{ zIndex: 9999 }}
                  >
                    <div className="w-8 h-8 bg-white border-4 border-slate-900 rounded-full" />
                  </motion.div>
                </div>

                <div className="flex justify-end text-sm font-medium text-slate-400 mt-6">
                  <span style={{ color: status.color }}>{status.label}</span>
                </div>

                <p className="text-sm leading-relaxed text-slate-400 mt-5 max-w-2xl">
                  O <strong className="text-slate-300">Índice de Massa Corporal (IMC)</strong> é uma medida que utiliza sua altura e peso para determinar se seu peso está dentro do intervalo saudável recomendado.
                </p>
              </div>
            );
          })()}

          {/* BMR + Água */}
          {(() => {
            return (
              <div className="grid md:grid-cols-2 gap-6">
                {/* BMR */}
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
                      <div className="w-6 h-6 bg-orange-500 rounded-full border-[3px] border-slate-900" />
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

                {/* Água */}
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

          {/* PLANO PERSONALIZADO - SUMMARY PREMIUM (dinâmico via items) */}
          <div className="bg-card border border-border rounded-2xl p-7 relative overflow-hidden">

            {/* Glow decorativo */}
            <div className="absolute inset-0 bg-gradient-to-br from-primary/10 via-transparent to-transparent pointer-events-none" />

            <h4 className="text-2xl font-bold text-foreground mb-2">
              Seu plano personalizado está{" "}
              <span className="text-primary">pronto</span>
            </h4>

            <p className="text-sm text-muted-foreground mb-6">
              Criamos seu plano com base no seu perfil. Veja os principais pontos 👇
            </p>

            {/* extrair dados do items */}
            {(() => {
              const duracaoTreino = findItemValue(["duração", "duracao", "tempo de treino"]);
              const nivelAptidao = findItemValue(["nível", "nivel", "aptidão"]);
              const objetivoTreino = findItemValue(["objetivo", "meta", "goal"]);
              const frequenciaTreino = findItemValue(["frequência", "frequencia", "vezes"]);

              const normalize = (value?: string) => value?.trim() || "—";

              return (
                <div className="grid md:grid-cols-2 gap-4">
                  {[
                    {
                      label: "Duração do treino",
                      value: normalize(duracaoTreino),
                      icon: "⏱️",
                    },
                    {
                      label: "Nível de aptidão",
                      value: normalize(nivelAptidao),
                      icon: "💪",
                    },
                    {
                      label: "Objetivo do treino",
                      value: normalize(objetivoTreino),
                      icon: "🎯",
                    },
                    {
                      label: "Frequência semanal",
                      value: normalize(frequenciaTreino),
                      icon: "📅",
                    },
                  ].map((item, i) => (
                    <div
                      key={i}
                      className="group bg-background border border-border rounded-xl p-5 flex flex-col gap-2 transition-all hover:border-primary/40 hover:bg-primary/5"
                    >
                      <span className="text-xs font-medium text-muted-foreground flex items-center gap-2">
                        <span className="text-base">{item.icon}</span>
                        {item.label}
                      </span>

                      <span className="text-xl font-semibold text-foreground tracking-tight">
                        {item.value}
                      </span>
                    </div>
                  ))}
                </div>
              );
            })()}

          </div>



          {/* OBJETIVOS */}
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

        {/* ---------- CONTACT BOX (PDF DELIVERY) ---------- */}
        <motion.div
          initial={{ opacity: 0, y: 10 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.45 }}
          className="bg-slate-900 border border-slate-800 rounded-2xl p-7 mb-6"
        >
          <div className="space-y-5">
            {/* Header */}
            <div className="flex items-center gap-3">
              <div className="w-10 h-10 rounded-xl bg-primary/15 flex items-center justify-center">
                <Sparkles className="w-5 h-5 text-primary" />
              </div>
              <div>
                <h4 className="text-lg font-bold text-white">
                  Para onde enviamos seu plano?
                </h4>
                <p className="text-sm text-slate-400">
                  Insira nome e e-mail — é para esse e-mail que o PDF será enviado.
                </p>
              </div>
            </div>

            {/* Form */}
            <div className="grid gap-4">
              {/* Nome */}
              <div className="space-y-1.5">
                <label className="text-xs font-medium text-slate-400">
                  Seu nome *
                </label>
                <input
                  type="text"
                  value={name}
                  onChange={(e) => setName(e.target.value)}
                  placeholder="Digite seu nome"
                  className="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-2.5 text-sm text-white placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-primary/40 transition"
                />
                {!name.trim() && (
                  <div className="text-xs text-red-400">Nome obrigatório</div>
                )}
              </div>

              {/* Email + Telefone lado a lado */}
              <div className="grid md:grid-cols-2 gap-3">
                <div className="space-y-1.5">
                  <label className="text-xs font-medium text-slate-400">
                    E-mail (onde o PDF será enviado) *
                  </label>
                  <input
                    type="email"
                    value={email}
                    onChange={(e) => setEmail(e.target.value)}
                    placeholder="seuemail@gmail.com"
                    className="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-2.5 text-sm text-white placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-primary/40 transition"
                  />
                  {!emailValid && email.length > 0 && (
                    <div className="text-xs text-red-400">E-mail inválido</div>
                  )}
                </div>

                <div className="space-y-1.5">
                  <label className="text-xs font-medium text-slate-400">
                    WhatsApp (opcional)
                  </label>
                  <input
                    type="tel"
                    value={phone}
                    onChange={(e) => setPhone(e.target.value)}
                    placeholder="(11) 9 9999-9999"
                    className="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-2.5 text-sm text-white placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-primary/40 transition"
                  />
                  {phone.length > 0 && !phoneValid && (
                    <div className="text-xs text-red-400">
                      Digite pelo menos 8 números
                    </div>
                  )}
                </div>
              </div>

              <div className="flex items-center gap-3 mt-1">
                <div className={`text-xs ${savedContact ? "text-green-400" : "text-slate-500"}`}>
                  {savedContact ? "Dados salvos no seu navegador ✓" : "Os dados serão salvos automaticamente"}
                </div>

                <div className="text-xs text-slate-500 ml-auto">
                  🔒 Usaremos seus dados apenas para enviar seu plano em PDF.
                </div>
              </div>
            </div>
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
              disabled={isLoading || !emailValid || !name.trim()}
              title={!name.trim() ? "Preencha seu nome" : !emailValid ? "Insira um e-mail válido" : undefined}
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

          <div className="text-center">
            {(!name.trim() || !emailValid) && (
              <div className="text-xs text-red-400">
                Preencha seu nome e e-mail válidos para receber o PDF.
              </div>
            )}

            <p className="text-center text-xs text-muted-foreground mt-4 flex items-center justify-center gap-2">
              <Shield className="w-4 h-4" />
              Seus dados estão protegidos e seguros
            </p>
          </div>
        </motion.div>
      </div>
    </div>
  );
};

export default SummaryScreen;
