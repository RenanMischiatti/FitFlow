import React from "react";
import { Link } from "react-router-dom";

const Success: React.FC = () => {
  return (
    <div className="min-h-screen bg-gradient-to-b from-[#071027] via-[#050517] to-[#000000] flex items-center justify-center p-6 text-white">
      <div className="max-w-xl w-full bg-gradient-to-br from-[#0b1220]/60 to-[#07121a]/40 backdrop-blur-md border border-white/6 rounded-2xl shadow-lg p-8">
        <div className="flex flex-col items-center gap-6">
          <div className="bg-green-600/10 text-green-400 rounded-full p-4 shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" className="h-12 w-12" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.8" d="M5 13l4 4L19 7" />
            </svg>
          </div>

          <h1 className="text-2xl sm:text-3xl font-semibold">Pagamento confirmado</h1>

          <p className="text-sm sm:text-base text-slate-300 text-center max-w-prose">
            Obrigado! Seu pagamento foi processado com sucesso. Você já pode acessar todos os recursos do seu plano.
          </p>

          <div className="w-full justify-center  flex flex-col sm:flex-row items-center gap-3 mt-2">
            <Link
              to="/"
              className="inline-flex justify-center items-center w-full sm:w-auto px-5 py-2.5 bg-gradient-to-r from-indigo-600 to-violet-600 hover:from-indigo-700 hover:to-violet-700 text-white rounded-md shadow-md transition"
            >
              Voltar para o início
            </Link>
          </div>

          <p className="text-[13px] text-slate-400 mt-3 text-center max-w-sm">
            Recebemos um recibo por e-mail. Se tiver qualquer problema, entre em contato com o suporte.
          </p>
        </div>
      </div>
    </div>
  );
};

export default Success;
