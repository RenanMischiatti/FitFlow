import { motion } from "framer-motion";
import { Slider } from "@/components/ui/slider";

interface SliderInputProps {
  value: number;
  onChange: (value: number) => void;
  min: number;
  max: number;
  step?: number;
  unit: string;
  label?: string;
}

const SliderInput = ({
  value,
  onChange,
  min,
  max,
  step = 1,
  unit,
  label,
}: SliderInputProps) => {
  return (
    <motion.div 
      className="w-full max-w-md mx-auto"
      initial={{ opacity: 0, scale: 0.95 }}
      animate={{ opacity: 1, scale: 1 }}
      transition={{ duration: 0.3 }}
    >
      <div className="space-y-6">
        {/* Value Display */}
        <div className="text-center">
          <motion.div 
            key={value}
            initial={{ scale: 1.1, opacity: 0 }}
            animate={{ scale: 1, opacity: 1 }}
            className="inline-flex items-baseline gap-2"
          >
            <span className="text-5xl md:text-6xl font-bold gradient-text tabular-nums">
              {value || min}
            </span>
            <span className="text-2xl text-muted-foreground font-medium">
              {unit}
            </span>
          </motion.div>
          {label && (
            <p className="text-muted-foreground text-sm mt-2">{label}</p>
          )}
        </div>

        {/* Slider */}
        <div className="px-4">
          <Slider
            value={[value || min]}
            onValueChange={(vals) => onChange(vals[0])}
            min={min}
            max={max}
            step={step}
            className="w-full"
          />
          
          {/* Min/Max Labels */}
          <div className="flex justify-between mt-3 text-sm text-muted-foreground">
            <span>{min} {unit}</span>
            <span>{max} {unit}</span>
          </div>
        </div>
      </div>
    </motion.div>
  );
};

export default SliderInput;
