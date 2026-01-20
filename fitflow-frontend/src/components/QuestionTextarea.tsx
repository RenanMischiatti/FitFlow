import { motion } from "framer-motion";

interface QuestionTextareaProps {
  placeholder?: string;
  value: string;
  onChange: (value: string) => void;
  rows?: number;
}

const QuestionTextarea = ({
  placeholder,
  value,
  onChange,
  rows = 4,
}: QuestionTextareaProps) => {
  return (
    <motion.div 
      className="w-full max-w-2xl mx-auto"
      initial={{ opacity: 0, scale: 0.95 }}
      animate={{ opacity: 1, scale: 1 }}
      transition={{ duration: 0.3 }}
    >
      <textarea
        value={value}
        onChange={(e) => onChange(e.target.value)}
        placeholder={placeholder}
        rows={rows}
        className="w-full bg-muted/30 border-2 border-border rounded-xl px-6 py-5 text-lg text-foreground placeholder:text-muted-foreground focus:outline-none focus:border-primary focus:bg-primary/5 transition-all duration-300 resize-none"
      />
    </motion.div>
  );
};

export default QuestionTextarea;
