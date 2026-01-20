# fitflow-frontend/Dockerfile
FROM node:20-alpine

WORKDIR /app

# Copiar package.json e package-lock.json
COPY package*.json ./

# Instalar dependências
RUN npm install

# Copiar o resto dos arquivos
COPY . .

# Expor porta
EXPOSE 3000

# Comando para iniciar o app do Lovable/Vite
CMD ["sh", "-c", "npm run dev || npm start"]