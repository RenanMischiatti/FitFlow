import { motion } from "framer-motion";
import { Slider } from "@/components/ui/slider";

interface SliderInputProps {
  value: number;
  onChange: (value: number) => void;
  min: number;
  max: number;
  step?: number;
  unit?: string;
  label?: string;
  hideValue?: boolean;
  onFinalChange?: (value: number) => void; // novo: chamado no "commit"
}

const SliderInput = ({
  value,
  onChange,
  min,
  max,
  step = 1,
  unit,
  label,
  hideValue = false,
  onFinalChange,
}: SliderInputProps) => {

  const displayValue = Number.isFinite(value) ? value : min;

  return (
    <motion.div 
      className="w-full max-w-md mx-auto"
      initial={{ opacity: 0, scale: 0.95 }}
      animate={{ opacity: 1, scale: 1 }}
      transition={{ duration: 0.3 }}
    >
      <div className="space-y-6">

        {/* Valor */}
        {!hideValue && (
          <div className="text-center">
            <motion.div 
              key={displayValue}
              initial={{ scale: 1.1, opacity: 0 }}
              animate={{ scale: 1, opacity: 1 }}
              className="inline-flex items-baseline gap-2"
            >
              <span className="text-5xl md:text-6xl font-bold gradient-text tabular-nums">
                {displayValue}
              </span>

              {unit && (
                <span className="text-2xl text-muted-foreground font-medium">
                  {unit}
                </span>
              )}
            </motion.div>

            {label && (
              <p className="text-muted-foreground text-sm mt-2">{label}</p>
            )}
          </div>
        )}

        {/* Slider */}
        <div className="px-4">
          <Slider
            value={[displayValue]}
            onValueChange={(vals) => onChange(vals[0])}
            // Radix Slider tem onValueCommit — repassa para onFinalChange quando disponível
            onValueCommit={(vals: number[]) => onFinalChange && onFinalChange(vals[0])}
            min={min}
            max={max}
            step={step}
            className="w-full touch-pan-x"
          />

          {unit && (
            <div className="flex justify-between mt-3 text-sm text-muted-foreground">
              <span>{min} {unit}</span>
              <span>{max} {unit}</span>
            </div>
          )}
        </div>

      </div>
    </motion.div>
  );
};

export default SliderInput;
