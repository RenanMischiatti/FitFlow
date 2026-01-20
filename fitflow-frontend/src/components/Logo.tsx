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
      <div className="relative">
        <svg 
          width={icon} 
          height={icon} 
          viewBox="0 0 48 48" 
          fill="none" 
          xmlns="http://www.w3.org/2000/svg"
          className="glow-effect"
        >
          <defs>
            <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stopColor="hsl(187, 92%, 50%)" />
              <stop offset="100%" stopColor="hsl(151, 84%, 49%)" />
            </linearGradient>
          </defs>
          <circle cx="24" cy="24" r="22" stroke="url(#logoGradient)" strokeWidth="2" fill="none" />
          <path 
            d="M16 32V16h4v6h8v-6h4v16h-4v-6h-8v6h-4z" 
            fill="url(#logoGradient)" 
          />
          <circle cx="24" cy="24" r="3" fill="url(#logoGradient)" opacity="0.5" />
        </svg>
      </div>
      <span className={`${text} font-display font-bold gradient-text`}>
        PHYSIQ
      </span>
    </motion.div>
  );
};

export default Logo;
