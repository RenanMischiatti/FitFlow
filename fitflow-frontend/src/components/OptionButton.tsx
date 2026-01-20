import { motion } from "framer-motion";
import { Check } from "lucide-react";
import { ReactNode } from "react";

interface OptionButtonProps {
  label: string;
  icon?: ReactNode;
  selected?: boolean;
  onClick: () => void;
  multiSelect?: boolean;
}

const OptionButton = ({ label, icon, selected = false, onClick, multiSelect = false }: OptionButtonProps) => {
  return (
    <motion.button
      onClick={onClick}
      whileHover={{ scale: 1.02 }}
      whileTap={{ scale: 0.98 }}
      className={`
        relative w-full flex items-center gap-4 p-5 rounded-xl border-2 transition-all duration-300
        ${selected 
          ? 'bg-primary/15 border-primary shadow-lg' 
          : 'bg-muted/30 border-border hover:border-primary/50 hover:bg-muted/50'
        }
      `}
    >
      {icon && (
        <div className={`text-2xl ${selected ? 'text-primary' : 'text-muted-foreground'}`}>
          {icon}
        </div>
      )}
      <span className={`text-lg font-medium flex-1 text-left ${selected ? 'text-foreground' : 'text-muted-foreground'}`}>
        {label}
      </span>
      <div className={`
        w-6 h-6 rounded-full border-2 flex items-center justify-center transition-all duration-300
        ${selected 
          ? 'bg-primary border-primary' 
          : 'border-muted-foreground/50'
        }
        ${multiSelect ? 'rounded-md' : 'rounded-full'}
      `}>
        {selected && <Check className="w-4 h-4 text-primary-foreground" />}
      </div>
    </motion.button>
  );
};

export default OptionButton;
