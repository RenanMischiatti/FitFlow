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
  nivel: string;
  genero: string;
  idade: string;
  altura: string;
  peso: string;
  duracaoTreino: string;
  frequenciaTreino: string;
  temLimitacao: string;
  tipoLimitacao: string[];
  gruposMusculares: string[];
  dietaEspecifica: string;
  temAlergias: string;
  alergias: string;
  apetite: string;
  horarioTreino: string;
  prazoPlanejado: string;
  observacoes: string;
}

const initialFormData: FormData = {
  objetivo: "",
  nivel: "",
  genero: "",
  idade: "",
  altura: "",
  peso: "",
  duracaoTreino: "45",
  frequenciaTreino: "",
  temLimitacao: "",
  tipoLimitacao: [],
  gruposMusculares: [],
  dietaEspecifica: "",
  temAlergias: "",
  alergias: "",
  apetite: "",
  horarioTreino: "",
  prazoPlanejado: "",
  observacoes: "",
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
      const currentArray = prev[key] as string[];
      const newArray = currentArray.includes(value)
        ? currentArray.filter(v => v !== value)
        : [...currentArray, value];

      const newData = { ...prev, [key]: newArray };
      localStorage.setItem("fitflow_formData", JSON.stringify(newData));
      return newData;
    });
  }, []);

  const handleNext = () => {
    if (currentStep < questions.length - 1) {
      if (currentStep === 7 && formData.temLimitacao === "Não") {
        setCurrentStep(currentStep + 2);
      }
      else if (currentStep === 11 && formData.temAlergias === "Não") {
        setCurrentStep(currentStep + 2);
      } else {
        setCurrentStep(currentStep + 1);
      }
    } else {
      setShowLoading(true);
      setTimeout(() => {
        setShowLoading(false);
        setShowSummary(true);
      }, 4500);
    }
  };

  const handleBack = () => {
    if (currentStep > 0) {
      if (currentStep === 9 && formData.temLimitacao === "Não") {
        setCurrentStep(7);
      } else if (currentStep === 13 && formData.temAlergias === "Não") {
        setCurrentStep(11);
      } else {
        setCurrentStep(currentStep - 1);
      }
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

      const presets = [30, 45, 60, 75, 90];

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



  const questions = [
    {
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
      canProceed: formData.tipoLimitacao.length > 0 && !!formData.tipoLimitacao[0],
    },
    {
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
      title: "Segue alguma dieta específica?",
      subtitle: "Escolha sua preferência alimentar",
      content: (
        <div className="grid gap-3">
          {[
            { label: "Sem restrições", icon: <Utensils className="w-6 h-6" /> },
            { label: "Low-carb", icon: <Apple className="w-6 h-6" /> },
            { label: "High-protein", icon: <Dumbbell className="w-6 h-6" /> },
            { label: "Vegetariana", icon: <Apple className="w-6 h-6" /> },
            { label: "Vegana", icon: <Apple className="w-6 h-6" /> },
            { label: "Cetogênica", icon: <Flame className="w-6 h-6" /> },
          ].map((option) => (
            <OptionButton
              key={option.label}
              label={option.label}
              icon={option.icon}
              selected={formData.dietaEspecifica === option.label}
              onClick={() => updateFormData("dietaEspecifica", option.label)}
            />
          ))}
        </div>
      ),
      canProceed: !!formData.dietaEspecifica,
    },
    {
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
      title: "Qual horário costuma treinar?",
      subtitle: "Isso ajuda a otimizar suas refeições",
      content: (
        <div className="grid gap-3">
          {[
            { label: "Manhã", icon: <Sun className="w-6 h-6" /> },
            { label: "Tarde", icon: <Sun className="w-6 h-6" /> },
            { label: "Noite", icon: <Sun className="w-6 h-6" /> },
          ].map((option) => (
            <OptionButton
              key={option.label}
              label={option.label}
              icon={option.icon}
              selected={formData.horarioTreino === option.label}
              onClick={() => updateFormData("horarioTreino", option.label)}
            />
          ))}
        </div>
      ),
      canProceed: !!formData.horarioTreino,
    },
    {
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
    { label: "Objetivo", value: formData.objetivo },
    { label: "Nível", value: formData.nivel },
    { label: "Gênero", value: formData.genero },
    { label: "Idade", value: `${formData.idade} anos` },
    { label: "Altura", value: `${formData.altura} cm` },
    { label: "Peso", value: `${formData.peso} kg` },
    { 
      label: "Duração do treino", 
      value: formatDuration(parseInt(formData.duracaoTreino)) 
    },
    { label: "Frequência de treino", value: formData.frequenciaTreino },
    { label: "Limitações", value: formData.temLimitacao === "Não" ? "Nenhuma" : formData.tipoLimitacao.join(", ") },
    { label: "Foco muscular", value: formData.gruposMusculares.join(", ") },
    { label: "Dieta", value: formData.dietaEspecifica },
    { label: "Restrições alimentares", value: formData.temAlergias === "Não" ? "Nenhuma" : formData.alergias },
    { label: "Apetite", value: formData.apetite },
    { label: "Horário de treino", value: formData.horarioTreino },
    { label: "Prazo", value: formData.prazoPlanejado },
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
