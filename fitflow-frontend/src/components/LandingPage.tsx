import { motion } from "framer-motion";
import { ArrowRight, Brain, Zap, Target, Clock, Star, ChevronRight, Sparkles, Dumbbell, Apple, Shield, Users, TrendingUp } from "lucide-react";
import { Button } from "@/components/ui/button";

interface LandingPageProps {
  onStart: () => void;
}

const LandingPage = ({ onStart }: LandingPageProps) => {
  const steps = [
    { icon: Brain, title: "Responda às perguntas", description: "Conte sobre você, seus objetivos e preferências de forma simples" },
    { icon: Sparkles, title: "A IA analisa seu perfil", description: "Nossa tecnologia processa seus dados com base em estudos científicos" },
    { icon: Zap, title: "Receba seu plano", description: "Treino + dieta personalizados entregues em segundos" },
  ];

  const benefits = [
    { icon: Target, title: "Personalização Total", description: "Plano 100% adaptado ao seu corpo e objetivos específicos" },
    { icon: Brain, title: "Base Científica", description: "IA treinada com milhares de estudos de nutrição e biomecânica" },
    { icon: Clock, title: "Rápido e Prático", description: "Em menos de 5 minutos você tem seu plano completo em mãos" },
    { icon: Zap, title: "Custo-benefício", description: "Resultado de consulta profissional por uma fração do preço" },
  ];

  const testimonials = [
    { name: "Carlos M.", text: "Perdi 8kg em 2 meses seguindo o plano. Incrível como a IA acertou em tudo que eu precisava!", rating: 5, avatar: "CM" },
    { name: "Ana Paula", text: "Finalmente um plano que respeita minhas restrições alimentares. Super recomendo!", rating: 5, avatar: "AP" },
    { name: "Ricardo S.", text: "O treino é perfeito pro meu nível. Estou evoluindo muito rápido na academia!", rating: 5, avatar: "RS" },
  ];

  const stats = [
    { value: "10.847", label: "Planos gerados" },
    { value: "4.9/5", label: "Avaliação média" },
    { value: "97%", label: "Satisfação" },
  ];

  return (
    <div className="min-h-screen bg-background overflow-hidden">
      {/* Hero Section */}
      <section className="relative min-h-[100dvh] flex flex-col">
        {/* Subtle background pattern */}
        <div className="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-primary/5 via-transparent to-transparent pointer-events-none" />
        
        {/* Header */}
        <header className="relative z-10 px-4 py-6">
          <div className="max-w-6xl mx-auto flex items-center justify-between">
            <motion.span 
              className="text-2xl md:text-3xl font-display font-bold gradient-text"
              initial={{ opacity: 0, x: -20 }}
              animate={{ opacity: 1, x: 0 }}
            >
              PHYSIQ
            </motion.span>
            <Button variant="outline" size="sm" onClick={onStart} className="border-border/50">
              Começar agora
            </Button>
          </div>
        </header>

        {/* Hero Content */}
        <div className="flex-1 flex items-center justify-center px-4 py-12">
          <div className="max-w-4xl mx-auto text-center">
            <motion.div
              initial={{ opacity: 0, y: 30 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6 }}
            >
              <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20 text-primary text-sm font-medium mb-8">
                <Sparkles className="w-4 h-4" />
                Inteligência Artificial Avançada
              </div>
              
              <h1 className="text-4xl md:text-5xl lg:text-6xl font-display font-bold text-foreground leading-tight mb-6">
                Seu plano de <span className="gradient-text">treino e dieta</span> criado por{" "}
                <span className="gradient-text">inteligência artificial</span>
              </h1>
              
              <p className="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto mb-10">
                Nossa IA foi treinada com milhares de estudos científicos de nutrição e 
                biomecânica para criar o plano perfeito para o seu corpo e objetivos.
              </p>

              <motion.div
                initial={{ opacity: 0, scale: 0.95 }}
                animate={{ opacity: 1, scale: 1 }}
                transition={{ delay: 0.3, duration: 0.4 }}
                className="flex flex-col sm:flex-row items-center justify-center gap-4"
              >
                <Button variant="hero" size="xl" onClick={onStart} className="text-lg py-6 px-10">
                  Criar meu plano
                  <ArrowRight className="w-5 h-5 ml-2" />
                </Button>
                <p className="text-muted-foreground text-sm flex items-center gap-2">
                  <Shield className="w-4 h-4" />
                  Pagamento único de R$ 9,90
                </p>
              </motion.div>

              {/* Stats */}
              <motion.div
                className="flex items-center justify-center gap-8 mt-12 pt-8 border-t border-border/30"
                initial={{ opacity: 0 }}
                animate={{ opacity: 1 }}
                transition={{ delay: 0.5 }}
              >
                {stats.map((stat, index) => (
                  <div key={index} className="text-center">
                    <p className="text-2xl md:text-3xl font-bold text-foreground">{stat.value}</p>
                    <p className="text-sm text-muted-foreground">{stat.label}</p>
                  </div>
                ))}
              </motion.div>
            </motion.div>
          </div>
        </div>

        {/* Scroll indicator */}
        <motion.div 
          className="absolute bottom-8 left-1/2 -translate-x-1/2"
          animate={{ y: [0, 8, 0] }}
          transition={{ duration: 2, repeat: Infinity }}
        >
          <ChevronRight className="w-6 h-6 text-muted-foreground/50 rotate-90" />
        </motion.div>
      </section>

      {/* How it Works Section */}
      <section className="py-24 px-4 bg-card/30">
        <div className="max-w-6xl mx-auto">
          <motion.div 
            className="text-center mb-16"
            initial={{ opacity: 0, y: 30 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
          >
            <span className="text-primary text-sm font-medium uppercase tracking-wider">Simples e rápido</span>
            <h2 className="text-3xl md:text-4xl font-display font-bold text-foreground mt-3 mb-4">
              Como funciona
            </h2>
            <p className="text-muted-foreground text-lg max-w-xl mx-auto">
              Em apenas 3 passos você terá seu plano personalizado pronto
            </p>
          </motion.div>

          <div className="grid md:grid-cols-3 gap-8">
            {steps.map((step, index) => (
              <motion.div
                key={index}
                initial={{ opacity: 0, y: 30 }}
                whileInView={{ opacity: 1, y: 0 }}
                viewport={{ once: true }}
                transition={{ delay: index * 0.15 }}
                className="relative bg-card border border-border rounded-2xl p-8 text-center"
              >
                <div className="absolute -top-4 left-1/2 -translate-x-1/2 w-8 h-8 rounded-full bg-primary text-primary-foreground flex items-center justify-center font-bold text-sm">
                  {index + 1}
                </div>
                <div className="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mx-auto mb-5 mt-2">
                  <step.icon className="w-7 h-7 text-primary" />
                </div>
                <h3 className="text-lg font-semibold text-foreground mb-2">{step.title}</h3>
                <p className="text-muted-foreground text-sm">{step.description}</p>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* AI Technology Section */}
      <section className="py-24 px-4 relative">
        <div className="max-w-6xl mx-auto">
          <div className="grid lg:grid-cols-2 gap-16 items-center">
            <motion.div
              initial={{ opacity: 0, x: -30 }}
              whileInView={{ opacity: 1, x: 0 }}
              viewport={{ once: true }}
            >
              <span className="text-primary text-sm font-medium uppercase tracking-wider">Tecnologia</span>
              <h2 className="text-3xl md:text-4xl font-display font-bold text-foreground mt-3 mb-6">
                Inteligência Artificial de verdade
              </h2>
              <p className="text-muted-foreground text-lg mb-8">
                Nossa IA foi treinada com milhares de estudos acadêmicos sobre nutrição, 
                fisiologia do exercício e biomecânica. Ela analisa seu perfil único e 
                cria um plano baseado em evidências científicas reais.
              </p>
              <ul className="space-y-4">
                {[
                  "Análise de estudos de nutrição esportiva",
                  "Pesquisas sobre hipertrofia e emagrecimento",
                  "Milhares de casos de sucesso analisados",
                  "Atualização constante com novas descobertas",
                ].map((item, index) => (
                  <motion.li
                    key={index}
                    initial={{ opacity: 0, x: -20 }}
                    whileInView={{ opacity: 1, x: 0 }}
                    viewport={{ once: true }}
                    transition={{ delay: index * 0.1 }}
                    className="flex items-center gap-3 text-foreground"
                  >
                    <div className="w-5 h-5 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0">
                      <ChevronRight className="w-3 h-3 text-primary" />
                    </div>
                    {item}
                  </motion.li>
                ))}
              </ul>
            </motion.div>

            <motion.div
              initial={{ opacity: 0, x: 30 }}
              whileInView={{ opacity: 1, x: 0 }}
              viewport={{ once: true }}
              className="relative"
            >
              <div className="bg-card border border-border rounded-2xl p-8 relative z-10">
                <div className="flex items-center gap-4 mb-6">
                  <div className="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <Brain className="w-6 h-6 text-primary" />
                  </div>
                  <div>
                    <h4 className="text-lg font-semibold text-foreground">PHYSIQ AI Engine</h4>
                    <p className="text-muted-foreground text-sm">v2.0 • Atualizado em 2026</p>
                  </div>
                </div>
                <div className="space-y-5">
                  <div>
                    <div className="flex justify-between items-center mb-2">
                      <span className="text-muted-foreground text-sm">Precisão do treino</span>
                      <span className="text-primary font-semibold">98.7%</span>
                    </div>
                    <div className="h-2 bg-muted rounded-full overflow-hidden">
                      <div className="h-full progress-bar-gradient w-[98.7%]" />
                    </div>
                  </div>
                  <div>
                    <div className="flex justify-between items-center mb-2">
                      <span className="text-muted-foreground text-sm">Precisão nutricional</span>
                      <span className="text-primary font-semibold">97.2%</span>
                    </div>
                    <div className="h-2 bg-muted rounded-full overflow-hidden">
                      <div className="h-full progress-bar-gradient w-[97.2%]" />
                    </div>
                  </div>
                  <div>
                    <div className="flex justify-between items-center mb-2">
                      <span className="text-muted-foreground text-sm">Taxa de satisfação</span>
                      <span className="text-primary font-semibold">96.8%</span>
                    </div>
                    <div className="h-2 bg-muted rounded-full overflow-hidden">
                      <div className="h-full progress-bar-gradient w-[96.8%]" />
                    </div>
                  </div>
                </div>
              </div>
              <div className="absolute -inset-4 bg-gradient-to-r from-primary/10 to-secondary/10 rounded-3xl blur-2xl -z-10" />
            </motion.div>
          </div>
        </div>
      </section>

      {/* Benefits Section */}
      <section className="py-24 px-4 bg-card/30">
        <div className="max-w-6xl mx-auto">
          <motion.div 
            className="text-center mb-16"
            initial={{ opacity: 0, y: 30 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
          >
            <span className="text-primary text-sm font-medium uppercase tracking-wider">Vantagens</span>
            <h2 className="text-3xl md:text-4xl font-display font-bold text-foreground mt-3 mb-4">
              Por que escolher o PHYSIQ?
            </h2>
            <p className="text-muted-foreground text-lg">
              Diferenciais que fazem a diferença no seu resultado
            </p>
          </motion.div>

          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            {benefits.map((benefit, index) => (
              <motion.div
                key={index}
                initial={{ opacity: 0, y: 30 }}
                whileInView={{ opacity: 1, y: 0 }}
                viewport={{ once: true }}
                transition={{ delay: index * 0.1 }}
                className="bg-card border border-border rounded-2xl p-6 text-center hover:border-primary/30 transition-colors"
              >
                <div className="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mx-auto mb-4">
                  <benefit.icon className="w-6 h-6 text-primary" />
                </div>
                <h3 className="text-lg font-semibold text-foreground mb-2">{benefit.title}</h3>
                <p className="text-muted-foreground text-sm">{benefit.description}</p>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Testimonials Section */}
      <section className="py-24 px-4">
        <div className="max-w-6xl mx-auto">
          <motion.div 
            className="text-center mb-16"
            initial={{ opacity: 0, y: 30 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
          >
            <span className="text-primary text-sm font-medium uppercase tracking-wider">Depoimentos</span>
            <h2 className="text-3xl md:text-4xl font-display font-bold text-foreground mt-3 mb-4">
              O que dizem nossos usuários
            </h2>
            <p className="text-muted-foreground text-lg">
              Milhares de pessoas já transformaram seus corpos com PHYSIQ
            </p>
          </motion.div>

          <div className="grid md:grid-cols-3 gap-6">
            {testimonials.map((testimonial, index) => (
              <motion.div
                key={index}
                initial={{ opacity: 0, y: 30 }}
                whileInView={{ opacity: 1, y: 0 }}
                viewport={{ once: true }}
                transition={{ delay: index * 0.1 }}
                className="bg-card border border-border rounded-2xl p-6"
              >
                <div className="flex gap-1 mb-4">
                  {[...Array(testimonial.rating)].map((_, i) => (
                    <Star key={i} className="w-4 h-4 text-yellow-500 fill-yellow-500" />
                  ))}
                </div>
                <p className="text-foreground mb-5">"{testimonial.text}"</p>
                <div className="flex items-center gap-3">
                  <div className="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary font-semibold text-sm">
                    {testimonial.avatar}
                  </div>
                  <span className="text-muted-foreground font-medium">{testimonial.name}</span>
                </div>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Final CTA Section */}
      <section className="py-24 px-4 relative bg-card/30">
        <div className="max-w-3xl mx-auto text-center relative z-10">
          <motion.div
            initial={{ opacity: 0, y: 30 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
          >
            <div className="inline-flex items-center gap-3 mb-6">
              <Dumbbell className="w-6 h-6 text-primary" />
              <span className="text-xl text-muted-foreground">+</span>
              <Apple className="w-6 h-6 text-secondary" />
            </div>
            
            <h2 className="text-3xl md:text-4xl font-display font-bold text-foreground mb-4">
              Pronto para transformar seu corpo?
            </h2>
            <p className="text-muted-foreground text-lg mb-10">
              Comece agora e receba seu plano personalizado de treino + dieta
            </p>

            <div className="bg-card border border-border rounded-2xl p-8 mb-8 inline-block">
              <div className="flex items-center justify-center gap-4 mb-3">
                <span className="text-xl text-muted-foreground line-through">R$ 47,00</span>
                <span className="text-5xl font-bold gradient-text">R$ 9,90</span>
              </div>
              <p className="text-muted-foreground text-sm">
                Pagamento único • Acesso imediato • Garantia total
              </p>
            </div>

            <div>
              <Button variant="hero" size="xl" onClick={onStart} className="mb-6">
                Criar meu plano agora
                <Sparkles className="w-5 h-5 ml-2" />
              </Button>
              
              <div className="flex items-center justify-center gap-6 text-sm text-muted-foreground">
                <span className="flex items-center gap-2">
                  <Shield className="w-4 h-4 text-primary" />
                  Pagamento seguro
                </span>
                <span className="flex items-center gap-2">
                  <Users className="w-4 h-4 text-primary" />
                  +10.000 usuários
                </span>
              </div>
            </div>
          </motion.div>
        </div>
      </section>

      {/* Footer */}
      <footer className="py-8 px-4 border-t border-border/30">
        <div className="max-w-6xl mx-auto text-center">
          <span className="text-xl font-display font-bold gradient-text">PHYSIQ</span>
          <p className="text-muted-foreground text-sm mt-3">
            © 2026 PHYSIQ. Todos os direitos reservados.
          </p>
        </div>
      </footer>
    </div>
  );
};

export default LandingPage;
