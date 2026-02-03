import { useState, useEffect, useCallback } from "react";
import { motion, AnimatePresence } from "framer-motion";
import { 
  Target, Dumbbell, User, Calendar, Ruler, Scale, Clock, 
  AlertCircle, Utensils, AlertTriangle, Apple, Flame, Sun, Hourglass, MessageSquare
} from "lucide-react";
import QuestionLayout from "@/components/QuestionLayout";
import OptionButton from "@/components/OptionButton";
import QuestionInput from "@/components/QuestionInput";
import QuestionTextarea from "@/components/QuestionTextarea";
import SliderInput from "@/components/SliderInput";
import LoadingScreen from "@/components/LoadingScreen";
import SummaryScreen from "@/components/SummaryScreen";
import LandingPage from "@/components/LandingPage";

interface FormData {
  objetivo: string;
  atividadeDiaria: string;
  nivel: string;
  genero: string;
  idade: string;
  altura: string;
  peso: string;
  duracaoTreino: string;
  frequenciaTreino: string;
  temLimitacao: string;
  estiloTreino: string;
  tipoLimitacao: string[];
  gruposMusculares: string[];
  preferenciasAlimentares: string;
  temAlergias: string;
  alergias: string;
  apetite: string;
  horarioTreino: string;
  prazoPlanejado: string;
  observacoes: string;
  cardio: string;
  mealTimes: string[];
}

const initialFormData: FormData = {
  objetivo: "",
  atividadeDiaria: "",
  nivel: "",
  genero: "",
  idade: "",
  altura: "",
  peso: "",
  duracaoTreino: "45",
  frequenciaTreino: "",
  estiloTreino: "",
  temLimitacao: "",
  tipoLimitacao: [],
  gruposMusculares: [],
  preferenciasAlimentares: "",
  temAlergias: "",
  alergias: "",
  apetite: "",
  horarioTreino: "",
  prazoPlanejado: "",
  observacoes: "",
  cardio: "",
  mealTimes: [],
};

const Questionnaire = () => {
  const [currentStep, setCurrentStep] = useState(0);
  const [formData, setFormData] = useState<FormData>(initialFormData);
  const [showLoading, setShowLoading] = useState(false);
  const [showSummary, setShowSummary] = useState(false);
  const [showLanding, setShowLanding] = useState(true);
  const API_URL = import.meta.env.VITE_API_URL || 'http://localhost:8000/api';

  useEffect(() => {
    const savedData = localStorage.getItem("fitflow_formData");
    if (savedData) {
      setFormData(JSON.parse(savedData));
      setCurrentStep(questions.length);
      setShowSummary(true);
    }
  }, []);

  const updateFormData = useCallback((key: keyof FormData, value: string | string[]) => {
    setFormData(prev => {
      const newData = { ...prev, [key]: value };
      localStorage.setItem("fitflow_formData", JSON.stringify(newData));
      return newData;
    });
  }, []);

  const toggleArrayValue = useCallback((key: keyof FormData, value: string) => {
    setFormData(prev => {
      const currentArray = Array.isArray(prev[key]) ? (prev[key] as string[]) : [];
      const newArray = currentArray.includes(value)
        ? currentArray.filter(v => v !== value)
        : [...currentArray, value];

      const newData = { ...prev, [key]: newArray };
      localStorage.setItem("fitflow_formData", JSON.stringify(newData));
      return newData;
    });
  }, []);

  const getNextStep = (currentIndex: number) => {
    let nextIndex = currentIndex + 1;

    while (nextIndex < questions.length) {
      const question = questions[nextIndex];

      // Pule a pergunta de tipoLimitacao se não houver limitação
      if (question.id === "tipoLimitacao" && formData.temLimitacao === "Não") {
        nextIndex++;
        continue;
      }

      // Pule a pergunta de alergias se não houver alergia
      if (question.id === "alergias" && formData.temAlergias === "Não") {
        nextIndex++;
        continue;
      }

      break; // encontramos o próximo índice válido
    }

    return nextIndex;
  };

  const getPrevStep = (currentIndex: number) => {
    let prevIndex = currentIndex - 1;

    while (prevIndex >= 0) {
      const question = questions[prevIndex];

      // Pule a pergunta de tipoLimitacao se não houver limitação
      if (question.id === "tipoLimitacao" && formData.temLimitacao === "Não") {
        prevIndex--;
        continue;
      }

      // Pule a pergunta de alergias se não houver alergia
      if (question.id === "alergias" && formData.temAlergias === "Não") {
        prevIndex--;
        continue;
      }

      break; // encontramos o índice anterior válido
    }

    return Math.max(prevIndex, 0);
  };


  const handleNext = () => {
    const nextIndex = getNextStep(currentStep);

    if (nextIndex >= questions.length) {
      // Finalizou todas as perguntas
      setShowLoading(true);
      setTimeout(() => {
        setShowLoading(false);
        setShowSummary(true);
      }, 4500);
    } else {
      setCurrentStep(nextIndex);
    }
  };


  const handleBack = () => {
    if (currentStep > 0) {
      const prevIndex = getPrevStep(currentStep);
      setCurrentStep(prevIndex);
    } else {
      setShowLanding(true);
    }
  };

  const handleEditResponses = () => {
    setShowSummary(false); 
    setCurrentStep(0); 
  };
  
  const [isPurchasing, setIsPurchasing] = useState(false);

  const handlePurchase = async () => {
    try {
      setIsPurchasing(true);

      const response = await fetch(`${API_URL}/payment/start-checkout`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          Accept: 'application/json',
        },
        body: JSON.stringify({ formData }),
      });

      if (!response.ok) {
        throw new Error('Erro na requisição: ' + response.statusText);
      }

      const data = await response.json();

      if (!data.checkout_url) {
        throw new Error('URL do checkout não recebida');
      }

      await new Promise(resolve => setTimeout(resolve, 500));

      window.location.href = data.checkout_url;
      localStorage.removeItem("fitflow_formData");

    } catch (error: any) {
      console.error(error);
      alert('Erro ao iniciar o pagamento: ' + error.message);
      setIsPurchasing(false);
    }
  };

  // ✅ FORMATAÇÃO DE TEMPO
  const formatDuration = (minutes: number) => {
    if (minutes < 60) return `${minutes} min`;

    const h = Math.floor(minutes / 60);
    const m = minutes % 60;

    return `${h}h${m > 0 ? ` ${m}m` : ""}`;
  };


  // ✅ NOVO TIMER INPUT PADRONIZADO
  const TimerInput = ({
          value,
          onChange,
          min = 10,
          max = 180,
    }: {
          value: number;
          onChange: (v: number) => void; // este onChange será chamado somente no "commit"
          min?: number;
          max?: number;
    }) => {
            const [internalValue, setInternalValue] = useState<number>(value);

            useEffect(() => {
              // atualizar internalValue quando value externo mudar (ex.: carregou do storage)
              setInternalValue(value);
            }, [value]);

            const presets = [30, 45, 60, 75, 90, 120];

            // chamado durante o arraste (atualiza apenas o estado interno)
            const handleLiveChange = (v: number) => {
              setInternalValue(v);
            };

            // chamado quando o usuário "soltar" o thumb (commit) — atualiza formData
            const handleCommit = (v: number) => {
              setInternalValue(v);
              onChange(v);
            };

            // preset deve fazer commit imediatamente
            const handlePreset = (p: number) => {
              setInternalValue(p);
              onChange(p);
            };

            return (
              <div className="space-y-6">
                <div className="text-center">
                  <div className="text-4xl font-bold text-primary">
                    {formatDuration(internalValue)}
                  </div>
                  <p className="text-sm text-muted-foreground mt-1">
                    Duração média do treino
                  </p>
                </div>

                <SliderInput
                  value={internalValue}
                  onChange={handleLiveChange}      // live updates só para internalValue
                  onFinalChange={handleCommit}    // commit -> persiste no formData via onChange prop
                  min={min}
                  max={max}
                  hideValue
                />

                <div className="grid grid-cols-3 gap-2">
                  {presets.map((p) => (
                    <button
                      key={p}
                      type="button"
                      onClick={() => handlePreset(p)}
                      className={`rounded-xl border px-3 py-2 text-sm font-medium transition
                        ${
                          internalValue === p
                            ? "bg-primary text-white border-primary shadow-sm"
                            : "bg-background border-border hover:border-primary/50 hover:bg-primary/5"
                        }`}
                    >
                      {formatDuration(p)}
                    </button>
                  ))}
                </div>
              </div>
          );
    };

    // Replace your existing TimeSliderInput with this one
    const TimeSliderInput = ({
      value,
      onChange,
    }: {
      value: string; // "HH:MM"
      onChange: (v: string) => void; // chamado apenas no "commit"
    }) => {
      const safeSplit = (val: string) => {
        const parts = (val || "07:00").split(":").map((p) => parseInt(p, 10));
        const h = Number.isFinite(parts[0]) ? parts[0] : 7;
        const m = Number.isFinite(parts[1]) ? parts[1] : 0;
        return [h, m] as const;
      };

      const [hour, setHour] = useState<number>(safeSplit(value)[0]);
      const [minute, setMinute] = useState<number>(safeSplit(value)[1]);

      // quando value externo muda (ex.: carregou do storage / edição), sincroniza
      useEffect(() => {
        const [h, m] = safeSplit(value);
        // apenas sincroniza se diferente (evita pisar durante arraste interno)
        if (h !== hour) setHour(h);
        if (m !== minute) setMinute(m);
        // eslint-disable-next-line react-hooks/exhaustive-deps
      }, [value]);

      const pad = (n: number) => n.toString().padStart(2, "0");

      // live handlers (só atualizam o estado local)
      const handleLiveHour = (h: number) => setHour(h);
      const handleLiveMinute = (m: number) => setMinute(m);

      // commit handlers (chamados quando o usuário SOLTAR o thumb)
      const handleCommitHour = (h: number) => {
        setHour(h);
        onChange(`${pad(h)}:${pad(minute)}`);
      };
      const handleCommitMinute = (m: number) => {
        setMinute(m);
        onChange(`${pad(hour)}:${pad(m)}`);
      };

      // Presets rápidos (opcional)
      const presets = [
        { label: "Manhã", time: "07:00" },
        { label: "Meio-dia", time: "12:00" },
        { label: "Tarde", time: "18:00" },
        { label: "Noite", time: "20:00" },
      ];

      return (
        <div className="space-y-6 text-center">
          <div className="text-4xl font-bold text-primary">
            {pad(hour)}:{pad(minute)}
          </div>
          <p className="text-sm text-muted-foreground mt-1">Horário típico do treino</p>

          <div className="flex gap-4 items-center justify-center">
            {/* Hora: 0 - 23 */}
            <div className="w-1/2">
              <SliderInput
                value={hour}
                onChange={handleLiveHour}       // atualiza apenas localmente
                onFinalChange={handleCommitHour} // commit -> atualiza formData
                min={0}
                max={23}
                step={1}
                hideValue
              />
            </div>

            {/* Minutos: 0,15,30,45 */}
            <div className="w-1/2">
              <SliderInput
                value={minute}
                onChange={handleLiveMinute}
                onFinalChange={handleCommitMinute}
                min={0}
                max={45}
                step={15} // snap em 15min para UX mais intuitiva
                hideValue
              />
            </div>
          </div>

          <div className="flex justify-center gap-2">
            {presets.map((p) => (
              <button
                key={p.time}
                className="px-3 py-1 rounded-md border text-sm hover:bg-primary/5"
                onClick={() => onChange(p.time)}
                type="button"
              >
                {p.label}
              </button>
            ))}
          </div>
        </div>
      );
  };

  // INSIRA DENTRO DO COMPONENTE Questionnaire, antes do array `questions`
  const MealTimesPicker = ({
    selectedTimes = [],
    toggleTime,
    disabledTime = "", // início do treino "HH:MM"
    treinoDuration = 45, // duração em minutos (passar parseInt(formData.duracaoTreino))
  }: {
    selectedTimes?: string[];
    toggleTime: (time: string) => void;
    disabledTime?: string;
    treinoDuration?: number;
  }) => {
    const pad = (n: number) => n.toString().padStart(2, "0");

    // Gera horários de 6h às 22h
    const times: string[] = [];
    for (let h = 6; h <= 22; h++) {
      times.push(`${pad(h)}:00`);
    }

    // Converte "HH:MM" para minutos desde 0:00
    const timeToMinutes = (time: string) => {
      const [h, m] = time.split(":").map(Number);
      return (Number.isFinite(h) ? h : 0) * 60 + (Number.isFinite(m) ? m : 0);
    };

    // Calcula intervalo de treino em minutos
    const treinoStart = disabledTime ? timeToMinutes(disabledTime) : -1;
    const treinoEnd = treinoStart >= 0 ? treinoStart + (Number.isFinite(+treinoDuration) ? +treinoDuration : 45) : -1;

    // Arredonda para cima para a próxima hora cheia (ex.: 17:30 -> 18:00)
    const treinoEndRounded = treinoEnd > 0 ? Math.ceil(treinoEnd / 60) * 60 : -1;

    // Classes de estilo
    const base = "text-sm px-3 py-2 rounded-md border transition";
    const selectedClass = "border-primary text-primary bg-background"; // ✅ somente borda + texto
    const normalClass = "bg-background border-border hover:border-primary/50 hover:bg-primary/5";
    const disabledClass = "bg-red-600 text-white border-red-700 cursor-not-allowed opacity-90";

    return (
      <div className="space-y-4">

        <div className="grid grid-cols-3 sm:grid-cols-4 gap-2">
          {times.map((t) => {
            const safeSelectedTimes = Array.isArray(selectedTimes) ? selectedTimes : [];
            const isSelected = safeSelectedTimes.includes(t);

            // Verifica se o horário t cai dentro do treino (bloqueio do período)
            const tMinutes = timeToMinutes(t);
            const isDisabled = treinoStart >= 0 && tMinutes >= treinoStart && tMinutes < treinoEndRounded;

            return (
              <button
                key={t}
                type="button"
                onClick={() => !isDisabled && toggleTime(t)}
                disabled={isDisabled}
                aria-pressed={isSelected}
                className={`${base} ${isDisabled ? disabledClass : isSelected ? selectedClass : normalClass}`}
              >
                {t}
              </button>
            );
          })}
        </div>

        <div className="text-xs text-muted-foreground">
          Toque nos horários para selecionar/deselecionar. O horário do treino e o período do treino ficam bloqueados.
        </div>
      </div>
    );
  };

  const questions = [
    {
      id: 'objetivo',
      title: "Qual é o seu objetivo principal?",
      subtitle: "Escolha o que mais representa sua meta",
      content: (
        <div className="grid gap-3">
          {[
            { label: "Emagrecer", icon: <Flame className="w-6 h-6" /> },
            { label: "Definição muscular", icon: <Target className="w-6 h-6" /> },
            { label: "Ganho de massa", icon: <Dumbbell className="w-6 h-6" /> },
            { label: "Condicionamento físico", icon: <Hourglass className="w-6 h-6" /> },
          ].map((option) => (
            <OptionButton
              key={option.label}
              label={option.label}
              icon={option.icon}
              selected={formData.objetivo === option.label}
              onClick={() => updateFormData("objetivo", option.label)}
            />
          ))}
        </div>
      ),
      canProceed: !!formData.objetivo,
    },
    {
      id: 'atividadeDiaria',
      title: "Qual o seu nível de atividade diária?",
      subtitle: "Considere seu trabalho e rotina diária (fora a academia)",
      content: (
        <div className="grid gap-3">
          {[
            {
              label: "Sedentário",
              desc: "Trabalho sentado, pouco movimento",
            },
            {
              label: "Levemente Ativo",
              desc: "Trabalho em pé ou caminhadas leves",
            },
            {
              label: "Moderadamente Ativo",
              desc: "Trabalho físico moderado ou movimento constante",
            },
            {
              label: "Muito Ativo",
              desc: "Trabalho físico pesado ou atleta",
            },
          ].map((option) => (
            <OptionButton
              key={option.label}
              label={option.label}
              selected={formData.atividadeDiaria === option.label}
              onClick={() => updateFormData("atividadeDiaria", option.label)}
            />
          ))}
        </div>
      ),
      canProceed: !!formData.atividadeDiaria,
    },
    {
      id: 'nivel',
      title: "Qual seu nível na academia?",
      subtitle: "Seja honesto para termos os melhores resultados",
      content: (
        <div className="grid gap-3">
          {[
            { label: "Iniciante", desc: "Menos de 6 meses de treino" },
            { label: "Intermediário", desc: "6 meses a 2 anos de treino" },
            { label: "Avançado", desc: "Mais de 2 anos de treino consistente" },
          ].map((option) => (
            <OptionButton
              key={option.label}
              label={option.label}
              selected={formData.nivel === option.label}
              onClick={() => updateFormData("nivel", option.label)}
            />
          ))}
        </div>
      ),
      canProceed: !!formData.nivel,
    },
    {
      id: 'genero',
      title: "Qual seu gênero?",
      subtitle: "Importante para cálculos metabólicos",
      content: (
        <div className="grid gap-3">
          {[
            { label: "Masculino", icon: <User className="w-6 h-6" /> },
            { label: "Feminino", icon: <User className="w-6 h-6" /> },
          ].map((option) => (
            <OptionButton
              key={option.label}
              label={option.label}
              icon={option.icon}
              selected={formData.genero === option.label}
              onClick={() => updateFormData("genero", option.label)}
            />
          ))}
        </div>
      ),
      canProceed: !!formData.genero,
    },
    {
      id: 'idade',
      title: "Qual sua idade?",
      subtitle: "Arraste para selecionar",
      content: (
        <SliderInput
          value={parseInt(formData.idade) || 25}
          onChange={(value) => updateFormData("idade", value.toString())}
          min={14}
          max={80}
          unit="anos"
        />
      ),
      canProceed: !!formData.idade && parseInt(formData.idade) >= 14,
    },
    {
      title: "Qual sua altura?",
      subtitle: "Arraste para selecionar",
      content: (
        <SliderInput
          value={parseInt(formData.altura) || 170}
          onChange={(value) => updateFormData("altura", value.toString())}
          min={140}
          max={220}
          unit="cm"
        />
      ),
      canProceed: !!formData.altura && parseInt(formData.altura) >= 140,
    },
    {
      id: 'peso',
      title: "Qual seu peso atual?",
      subtitle: "Arraste para selecionar",
      content: (
        <SliderInput
          value={parseInt(formData.peso) || 70}
          onChange={(value) => updateFormData("peso", value.toString())}
          min={40}
          max={180}
          unit="kg"
        />
      ),
      canProceed: !!formData.peso && parseInt(formData.peso) >= 40,
    },
    {
      id: 'duracaoTreino',
      title: "Qual a duração típica do seu treino?",
      subtitle: "Escolha quanto tempo costuma treinar por sessão",
      content: (
        <TimerInput
          value={parseInt(formData.duracaoTreino) || 45}
          onChange={(minutes) => updateFormData("duracaoTreino", minutes.toString())}
          min={10}
          max={180}
        />
      ),
      canProceed: !!formData.duracaoTreino && parseInt(formData.duracaoTreino) >= 10,
    },
    {
      id: 'horarioTreino',
      title: "Qual horário do seu treino?",
      subtitle: "Escolha o horário que você normalmente treina",
      content: (
        <TimeSliderInput
          value={formData.horarioTreino || "07:00"}
          onChange={(value) => updateFormData("horarioTreino", value)}
        />
      ),
      canProceed: !!formData.horarioTreino,
    },
    {
      id: 'frequenciaTreino',
      title: "Qual sua rotina de treinos?",
      subtitle: "Quantas vezes por semana você pode treinar?",
      content: (
        <div className="grid gap-3">
          {[
            { label: "2x por semana", icon: <Calendar className="w-6 h-6" /> },
            { label: "3x por semana", icon: <Calendar className="w-6 h-6" /> },
            { label: "4x por semana", icon: <Calendar className="w-6 h-6" /> },
            { label: "5x ou mais", icon: <Calendar className="w-6 h-6" /> },
          ].map((option) => (
            <OptionButton
              key={option.label}
              label={option.label}
              icon={option.icon}
              selected={formData.frequenciaTreino === option.label}
              onClick={() => updateFormData("frequenciaTreino", option.label)}
            />
          ))}
        </div>
      ),
      canProceed: !!formData.frequenciaTreino,
    },
    {
      id: 'estiloTreino',
      title: "Tem preferência de estilo de treino?",
      subtitle: "Se não tiver, podemos escolher o modelo mais eficiente para seu objetivo",
      content: (
        <div className="grid gap-3">
          {[
            {
              label: "Sem preferência",
              desc: "Deixe que o sistema escolha o melhor modelo",
            },
            {
              label: "Upper / Lower",
              desc: "Divisão em treino de membros superiores e inferiores",
            },
            {
              label: "ABC",
              desc: "Divisão clássica em 3 treinos diferentes",
            },
            {
              label: "ABCD",
              desc: "Divisão em 4 treinos com maior especificidade",
            },
            {
              label: "ABCDE",
              desc: "Divisão avançada, um grupo muscular por dia",
            },
          ].map((option) => (
            <OptionButton
              key={option.label}
              label={option.label}
              selected={formData.estiloTreino === option.label}
              onClick={() => updateFormData("estiloTreino", option.label)}
            />
          ))}
        </div>
      ),
      canProceed: !!formData.estiloTreino,
    },
    {
      id: 'temLimitacao',
      title: "Tem alguma limitação física?",
      subtitle: "Lesões, dores crônicas ou restrições médicas",
      content: (
        <div className="grid gap-3">
          {[
            { label: "Sim", icon: <AlertCircle className="w-6 h-6" /> },
            { label: "Não", icon: <Dumbbell className="w-6 h-6" /> },
          ].map((option) => (
            <OptionButton
              key={option.label}
              label={option.label}
              icon={option.icon}
              selected={formData.temLimitacao === option.label}
              onClick={() => updateFormData("temLimitacao", option.label)}
            />
          ))}
        </div>
      ),
      canProceed: !!formData.temLimitacao,
    },
    {
      id: 'tipoLimitacao',
      title: "Qual tipo de limitação?",
      subtitle: "Descreva sua limitação física, lesão ou restrição médica",
      content: (
        <QuestionTextarea
          placeholder="Ex: Lesão no joelho, dor crônica na coluna..."
          value={formData.tipoLimitacao.join(", ")} // converte array para string
          onChange={(value) => updateFormData("tipoLimitacao", [value])} // salva como array de 1 item
          rows={4}
        />
      ),
      canProceed:
        formData.temLimitacao === "Não" ||
        (formData.tipoLimitacao.length > 0 && !!formData.tipoLimitacao[0]),
    },
    {
      id: 'gruposMusculares',
      title: "Quais grupos musculares quer focar?",
      subtitle: "Selecione os grupos prioritários",
      content: (
        <div className="grid grid-cols-2 gap-3">
          {[
            "Pernas",
            "Glúteos",
            "Peito",
            "Costas",
            "Ombros",
            "Braços",
            "Abdômen",
          ].map((option) => (
            <OptionButton
              key={option}
              label={option}
              selected={formData.gruposMusculares.includes(option)}
              onClick={() => toggleArrayValue("gruposMusculares", option)}
              multiSelect
            />
          ))}
        </div>
      ),
      canProceed: formData.gruposMusculares.length > 0,
    },
    {
      id: 'mealTimes',
      title: "Quais horários você consegue fazer refeição?",
      subtitle: "Selecione os horários do dia em que costuma/consseguir comer",
      content: (
        <MealTimesPicker
          selectedTimes={formData.mealTimes}
          toggleTime={(time: string) => {
            // se for o horário de treino, não permite
            if (formData.horarioTreino && formData.horarioTreino === time) return;

            toggleArrayValue("mealTimes", time);
          }}
          disabledTime={formData.horarioTreino || ""}
          treinoDuration={parseInt(formData.duracaoTreino) || 45}
        />
      ),
      canProceed: true,
    },
    {
      id: 'preferenciasAlimentares',
      title: "Quais alimentos ou estilo alimentar você prefere?",
      subtitle: "Descreva suas preferências, praticidade e estilo de alimentação",
      content: (
        <QuestionTextarea
          placeholder="Estilo alimentar: vegetariano, vegano, tradicional...
            Praticidade: refeições rápidas, marmitas, receitas simples...
            Preferências: frango, arroz, ovos, frutas...
            Evita: frituras, carne vermelha, doces..."
          value={formData.preferenciasAlimentares}
          onChange={(value) => updateFormData("preferenciasAlimentares", value)}
          rows={4}
        />
      ),
      canProceed: true,
    },
    {
      id: 'temAlergias',
      title: "Tem alergias ou restrições alimentares?",
      subtitle: "Alimentos que você não pode consumir",
      content: (
        <div className="grid gap-3">
          {[
            { label: "Sim", icon: <AlertTriangle className="w-6 h-6" /> },
            { label: "Não", icon: <Apple className="w-6 h-6" /> },
          ].map((option) => (
            <OptionButton
              key={option.label}
              label={option.label}
              icon={option.icon}
              selected={formData.temAlergias === option.label}
              onClick={() => updateFormData("temAlergias", option.label)}
            />
          ))}
        </div>
      ),
      canProceed: !!formData.temAlergias,
    },
    {
      id: 'alergias',
      title: "Quais alimentos você não pode consumir?",
      subtitle: "Liste os alimentos que tem alergia ou restrição",
      content: (
        <QuestionInput
          type="text"
          placeholder="Ex: Lactose, glúten, frutos do mar..."
          value={formData.alergias}
          onChange={(value) => updateFormData("alergias", value)}
        />
      ),
      canProceed: !!formData.alergias,
    },
    {
      id: 'apetite',
      title: "Como é seu apetite diário?",
      subtitle: "Isso influencia na distribuição das refeições",
      content: (
        <div className="grid gap-3">
          {[
            { label: "Baixo", desc: "Como pouco, dificuldade de ganhar peso" },
            { label: "Moderado", desc: "Apetite normal, como em horários regulares" },
            { label: "Alto", desc: "Sinto fome frequentemente, facilidade em comer" },
          ].map((option) => (
            <OptionButton
              key={option.label}
              label={option.label}
              selected={formData.apetite === option.label}
              onClick={() => updateFormData("apetite", option.label)}
            />
          ))}
        </div>
      ),
      canProceed: !!formData.apetite,
    },
    {
      id: 'prazoPlanejado',
      title: "Qual seu objetivo de prazo?",
      subtitle: "Em quanto tempo quer ver resultados",
      content: (
        <div className="grid gap-3">
          {[
            { label: "30 dias", icon: <Clock className="w-6 h-6" /> },
            { label: "60 dias", icon: <Clock className="w-6 h-6" /> },
            { label: "90 dias", icon: <Clock className="w-6 h-6" /> },
          ].map((option) => (
            <OptionButton
              key={option.label}
              label={option.label}
              icon={option.icon}
              selected={formData.prazoPlanejado === option.label}
              onClick={() => updateFormData("prazoPlanejado", option.label)}
            />
          ))}
        </div>
      ),
      canProceed: !!formData.prazoPlanejado,
    },
    {
      id: 'cardio',
      title: "Você quer incluir cardio no seu plano?",
      subtitle: "Isso influencia na dieta e no treino",
      content: (
        <div className="grid gap-3">
          {[
            { label: "Sim, quero cardio", desc: "Corrida, bike, HIIT, etc." },
            { label: "Não, prefiro sem cardio", desc: "Foco total em musculação" },
            { label: "Pouco cardio", desc: "Apenas para saúde e condicionamento" },
          ].map((option) => (
            <OptionButton
              key={option.label}
              label={option.label}
              selected={formData.cardio === option.label}
              onClick={() => updateFormData("cardio", option.label)}
            />
          ))}
        </div>
      ),
      canProceed: !!formData.cardio,
    },
    {
      id: 'observacoes',
      title: "Deseja adicionar observações extras?",
      subtitle: "Escreva detalhes adicionais sobre seu corpo, rotina ou preferências",
      content: (
        <QuestionTextarea
          placeholder="Ex: Trabalho sentado, tenho pouco tempo para cozinhar, prefiro treinos mais curtos..."
          value={formData.observacoes}
          onChange={(value) => updateFormData("observacoes", value)}
          rows={5}
        />
      ),
      canProceed: true,
    },
  ];

  const getSummaryItems = () => [
    { label: "Objetivo", value: formData.objetivo || "—" },
    { label: "Atividade diária", value: formData.atividadeDiaria || "—" },
    { label: "Nível (academia)", value: formData.nivel || "—" },
    { label: "Gênero", value: formData.genero || "—" },
    { label: "Idade", value: formData.idade ? `${formData.idade} anos` : "—" },
    { label: "Altura", value: formData.altura ? `${formData.altura} cm` : "—" },
    { label: "Peso", value: formData.peso ? `${formData.peso} kg` : "—" },
    {
      label: "Duração do treino",
      value: formatDuration(parseInt(formData.duracaoTreino || "0")),
    },
    { label: "Frequência de treino", value: formData.frequenciaTreino || "—" },
    { label: "Tem limitação física?", value: formData.temLimitacao || "—" },
    {
      label: "Tipo de limitação",
      value:
        formData.temLimitacao === "Não"
          ? "Nenhuma"
          : formData.tipoLimitacao && formData.tipoLimitacao.length
          ? formData.tipoLimitacao.join(", ")
          : "—",
    },
    {
      label: "Grupos musculares (foco)",
      value:
        formData.gruposMusculares && formData.gruposMusculares.length
          ? formData.gruposMusculares.join(", ")
          : "—",
    },
    {
      label: "Horários de refeição",
      value:
        formData.mealTimes && formData.mealTimes.length
          ? formData.mealTimes.join(", ")
          : "—",
    },
    { label: "Segue dieta específica", value: formData.dietaEspecifica || "—" },
    { label: "Tem alergias?", value: formData.temAlergias || "—" },
    {
      label: "Quais alergias / restrições",
      value:
        formData.temAlergias === "Não"
          ? "Nenhuma"
          : formData.alergias
          ? formData.alergias
          : "—",
    },
    { label: "Apetite", value: formData.apetite || "—" },
    { label: "Horário do treino (tipo)", value: formData.horarioTreino || "—" },
    { label: "Prazo planejado", value: formData.prazoPlanejado || "—" },
    { label: "Cardio", value: formData.cardio || "—" },
    { label: "Observações", value: formData.observacoes || "—" },
  ];

  if (showLanding) {
    return <LandingPage onStart={() => setShowLanding(false)} />;
  }

  if (showLoading) {
    return <LoadingScreen />;
  }

  if (showSummary) {
    return <SummaryScreen items={getSummaryItems()} onPurchase={handlePurchase} onEdit={handleEditResponses} />;
  }

  const currentQuestion = questions[currentStep];

  return (
    <QuestionLayout
      currentStep={currentStep + 1}
      totalSteps={questions.length}
      title={currentQuestion.title}
      subtitle={currentQuestion.subtitle}
      onNext={handleNext}
      onBack={handleBack}
      canProceed={currentQuestion.canProceed}
      showBack={currentStep > 0}
    >
      {currentQuestion.content}
    </QuestionLayout>
  );
};

export default Questionnaire;
