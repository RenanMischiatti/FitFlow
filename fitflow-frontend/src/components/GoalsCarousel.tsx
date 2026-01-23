// src/components/GoalsCarousel.tsx
import { Splide, SplideSlide } from "@splidejs/react-splide";
import "@splidejs/splide/dist/css/splide.min.css"; // ← CSS base do splide
import { motion } from "framer-motion";

const goals = [
  { label: "Reduzir o estresse", icon: "🧘‍♂️", desc: "Meditação e relaxamento diário" },
  { label: "Sentir-se mais saudável", icon: "🥗", desc: "Alimentação equilibrada e hábitos saudáveis" },
  { label: "Autodisciplina", icon: "⏱️", desc: "Cumprir treinos e metas consistentemente" },
  { label: "Criar um hábito físico", icon: "🏋️‍♂️", desc: "Rotina de exercícios adaptada ao seu estilo" },
  { label: "Melhorar o sono", icon: "🛌", desc: "Estratégias para qualidade de sono e recuperação" },
];

export default function GoalsCarousel() {
  return (
    <div className="bg-slate-900 border border-slate-800 rounded-2xl p-5 pb-4 w-full max-w-2xl mx-auto">
      <h4 className="text-xl font-bold text-white mb-4 text-center">
        Objetivos para os próximos meses
      </h4>

      <div className="overflow-hidden"> {/* ← força o Splide a não extrapolar */}
        <Splide
          options={{
            type: "loop",
            perPage: 1,
            perMove: 1,
            gap: "1rem",
            arrows: false,
            pagination: false,
            autoplay: true,
            interval: 3000,
            pauseOnHover: true,
            width: "100%",
          }}
        >
          {goals.map((goal, i) => (
            <SplideSlide key={i}>
              <motion.div
                className="bg-gradient-to-br from-secondary/20 to-secondary/10 border border-secondary/30 rounded-2xl p-4 flex flex-col gap-2 cursor-pointer shadow-md hover:shadow-lg w-full"
                whileTap={{ scale: 0.97 }}
                initial={{ opacity: 0, y: 10 }}
                animate={{ opacity: 1, y: 0 }}
                transition={{ delay: i * 0.1, type: "spring", stiffness: 120 }}
              >
                <div className="text-3xl text-center">{goal.icon}</div>
                <span className="text-base font-semibold text-white text-center">{goal.label}</span>
                <p className="text-xs text-slate-400 text-center">{goal.desc}</p>
              </motion.div>
            </SplideSlide>
          ))}
        </Splide>
      </div>
    </div>
  );
}
