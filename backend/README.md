# 🏝️ Socorro Suroy Backend

NestJS backend API for the Socorro Suroy Tourism Application.

## 🚀 Quick Start

### Prerequisites
- Node.js 18+ 
- pnpm
- PostgreSQL
- Redis (optional, for caching)

### Installation

1. **Install dependencies:**
   ```bash
   pnpm install
   ```

2. **Environment setup:**
   ```bash
   cp .env.example .env
   # Edit .env with your database credentials
   ```

3. **Database setup:**
   ```bash
   # Create PostgreSQL database
   createdb socorro_suroy
   
   # Run migrations (when available)
   pnpm run migration:run
   ```

4. **Start development server:**
   ```bash
   pnpm run start:dev
   ```

## 📚 API Documentation

Once running, visit: http://localhost:3001/api/docs

## ��️ Project Structure
