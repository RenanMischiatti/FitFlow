import { motion } from "framer-motion";

interface QuestionInputProps {
  type?: "text" | "number";
  placeholder?: string;
  value: string;
  onChange: (value: string) => void;
  unit?: string;
  min?: number;
  max?: number;
}

const QuestionInput = ({
  type = "text",
  placeholder,
  value,
  onChange,
  unit,
  min,
  max,
}: QuestionInputProps) => {
  return (
    <motion.div 
      className="w-full max-w-md mx-auto"
      initial={{ opacity: 0, scale: 0.95 }}
      animate={{ opacity: 1, scale: 1 }}
      transition={{ duration: 0.3 }}
    >
      <div className="relative">
        <input
          type={type}
          value={value}
          onChange={(e) => onChange(e.target.value)}
          placeholder={placeholder}
          min={min}
          max={max}
          className="w-full bg-muted/30 border-2 border-border rounded-xl px-6 py-5 text-2xl font-semibold text-center text-foreground placeholder:text-muted-foreground focus:outline-none focus:border-primary focus:bg-primary/5 transition-all duration-300"
        />
        {unit && (
          <span className="absolute right-6 top-1/2 -translate-y-1/2 text-lg text-muted-foreground font-medium">
            {unit}
          </span>
        )}
      </div>
    </motion.div>
  );
};

export default QuestionInput;
