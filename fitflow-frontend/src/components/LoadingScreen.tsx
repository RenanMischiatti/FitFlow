import { motion } from "framer-motion";
import { Brain, Dumbbell, Apple, Sparkles } from "lucide-react";
import Logo from "./Logo";

const LoadingScreen = () => {
  const steps = [
    { icon: Brain, text: "Analisando seu perfil..." },
    { icon: Dumbbell, text: "Calculando treino ideal..." },
    { icon: Apple, text: "Montando dieta personalizada..." },
    { icon: Sparkles, text: "Finalizando seu plano..." },
  ];

  return (
    <div className="min-h-screen bg-background flex flex-col items-center justify-center px-4">
      <div className="hero-glow -top-20" />
      
      <motion.div
        initial={{ opacity: 0, scale: 0.9 }}
        animate={{ opacity: 1, scale: 1 }}
        className="text-center"
      >
        <Logo size="large" />
        
        <motion.h2
          className="text-2xl md:text-3xl font-display font-bold text-foreground mt-8 mb-4"
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.3 }}
        >
          Nossa IA está criando seu plano
        </motion.h2>
        
        <motion.p
          className="text-muted-foreground mb-12"
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.4 }}
        >
          Aguarde enquanto processamos suas informações
        </motion.p>

        <div className="space-y-4 max-w-md mx-auto">
          {steps.map((step, index) => (
            <motion.div
              key={index}
              className="flex items-center gap-4 glass-card p-4"
              initial={{ opacity: 0, x: -20 }}
              animate={{ opacity: 1, x: 0 }}
              transition={{ delay: 0.5 + index * 0.3 }}
            >
              <motion.div
                className="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center"
                animate={{ 
                  scale: [1, 1.2, 1],
                  opacity: [0.5, 1, 0.5]
                }}
                transition={{ 
                  duration: 1.5, 
                  repeat: Infinity, 
                  delay: index * 0.3 
                }}
              >
                <step.icon className="w-5 h-5 text-primary" />
              </motion.div>
              <span className="text-foreground font-medium">{step.text}</span>
            </motion.div>
          ))}
        </div>

        <motion.div
          className="mt-8"
          initial={{ opacity: 0 }}
          animate={{ opacity: 1 }}
          transition={{ delay: 1.5 }}
        >
          <div className="w-64 h-2 bg-muted rounded-full mx-auto overflow-hidden">
            <motion.div
              className="h-full progress-bar-gradient"
              initial={{ width: "0%" }}
              animate={{ width: "100%" }}
              transition={{ duration: 4, ease: "easeInOut" }}
            />
          </div>
        </motion.div>
      </motion.div>
    </div>
  );
};

export default LoadingScreen;
