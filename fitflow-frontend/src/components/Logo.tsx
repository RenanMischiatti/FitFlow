import { motion } from "framer-motion";

const Logo = ({ size = "default" }: { size?: "small" | "default" | "large" }) => {
  const sizes = {
    small: { text: "text-xl", icon: 24 },
    default: { text: "text-3xl", icon: 32 },
    large: { text: "text-5xl", icon: 48 },
  };

  const { text, icon } = sizes[size];

  return (
    <motion.div 
      className="flex items-center gap-2"
      initial={{ opacity: 0, y: -10 }}
      animate={{ opacity: 1, y: 0 }}
      transition={{ duration: 0.5 }}
    >
      <span className={`${text} font-display font-bold gradient-text`}>
        FITFLOW
      </span>
    </motion.div>
  );
};

export default Logo;
