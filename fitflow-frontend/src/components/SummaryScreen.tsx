import { motion } from "framer-motion";
import { Check, Sparkles, Shield, Award, Clock } from "lucide-react";
import { Button } from "./ui/button";

interface SummaryItem {
  label: string;
  value: string;
}

interface SummaryScreenProps {
  items: SummaryItem[];
  onPurchase: () => void;
}

const SummaryScreen = ({ items, onPurchase }: SummaryScreenProps) => {
  return (
    <div className="min-h-screen bg-background flex flex-col px-4 py-8 relative overflow-hidden">
      {/* Subtle gradient overlay - much softer */}
      <div className="absolute inset-0 bg-gradient-to-b from-primary/[0.02] via-transparent to-secondary/[0.02] pointer-events-none" />
      
      <div className="max-w-2xl mx-auto w-full flex-1 flex flex-col relative z-10">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          className="text-center mb-8"
        >
          {/* Simple text logo */}
          <motion.span 
            className="text-2xl font-display font-bold gradient-text"
            initial={{ opacity: 0 }}
            animate={{ opacity: 1 }}
          >
            PHYSIQ
          </motion.span>
          
          <h1 className="text-3xl md:text-4xl font-display font-bold text-foreground mt-6 mb-3">
            Seu plano está pronto!
          </h1>
          <p className="text-muted-foreground text-lg">
            Confira o resumo do seu perfil personalizado
          </p>
        </motion.div>

        {/* Profile Summary Card */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.2 }}
          className="bg-card border border-border rounded-2xl p-6 mb-6"
        >
          <h3 className="text-lg font-semibold text-foreground mb-4 flex items-center gap-2">
            <div className="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center">
              <Check className="w-4 h-4 text-primary" />
            </div>
            Resumo do seu perfil
          </h3>
          <div className="grid gap-2">
            {items.map((item, index) => (
              <motion.div
                key={index}
                initial={{ opacity: 0, x: -20 }}
                animate={{ opacity: 1, x: 0 }}
                transition={{ delay: 0.3 + index * 0.03 }}
                className="flex justify-between items-center py-2.5 border-b border-border/30 last:border-0"
              >
                <span className="text-muted-foreground text-sm">{item.label}</span>
                <span className="text-foreground font-medium text-sm">{item.value}</span>
              </motion.div>
            ))}
          </div>
        </motion.div>

        {/* Plan Card */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.4 }}
          className="bg-card border border-primary/20 rounded-2xl p-6 mb-6"
        >
          <div className="flex items-center gap-4 mb-5">
            <div className="w-12 h-12 rounded-xl bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center">
              <Sparkles className="w-6 h-6 text-primary" />
            </div>
            <div>
              <h3 className="text-lg font-semibold text-foreground">
                Plano Completo de Treino + Dieta
              </h3>
              <p className="text-muted-foreground text-sm">
                Personalizado com base científica
              </p>
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

          {/* Price Section */}
          <div className="text-center pt-4 border-t border-border/30">
            <div className="mb-3">
              <span className="text-muted-foreground line-through text-lg mr-3">R$ 47,00</span>
              <span className="text-4xl font-bold gradient-text">R$ 9,90</span>
            </div>
            <p className="text-sm text-muted-foreground">
              Pagamento único • Acesso imediato
            </p>
          </div>
        </motion.div>

        {/* Trust Badges */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.6 }}
          className="grid grid-cols-3 gap-3 mb-6"
        >
          {[
            { icon: Shield, text: "Pagamento Seguro" },
            { icon: Award, text: "Garantia Total" },
            { icon: Clock, text: "Acesso Imediato" },
          ].map((badge, index) => (
            <div key={index} className="flex flex-col items-center text-center p-3 rounded-xl bg-muted/30">
              <badge.icon className="w-5 h-5 text-primary mb-2" />
              <span className="text-xs text-muted-foreground">{badge.text}</span>
            </div>
          ))}
        </motion.div>

        {/* CTA */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 0.7 }}
          className="mt-auto"
        >
          <Button
            variant="hero"
            size="xl"
            onClick={onPurchase}
            className="w-full"
          >
            <Sparkles className="w-5 h-5 mr-2" />
            Gerar minha Dieta + Treino — R$ 9,90
          </Button>
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
