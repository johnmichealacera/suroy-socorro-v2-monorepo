# 🏝️ Socorro Suroy App - Monorepo

**A Complete Tourism Application for Socorro Island, Philippines**

This monorepo contains both the frontend and backend components of the Socorro Suroy tourism application - a capstone project showcasing the beauty of Socorro Island, Surigao del Norte.

## 📁 Project Structure

```
socorro-suroy-app/
├── frontend/          # Tourism website (HTML/CSS/JS/PHP)
│   ├── README.md     # Frontend documentation
│   ├── public/       # Static assets
│   ├── scss/         # Stylesheets
│   └── includes/     # PHP includes
├── backend/           # NestJS API server
│   ├── README.md     # Backend documentation
│   ├── src/          # TypeScript source code
│   └── package.json  # Backend dependencies
├── package.json      # Monorepo configuration
├── pnpm-workspace.yaml # Workspace configuration
├── .npmrc            # pnpm configuration
└── README.md         # This file
```

## 🌐 Live Demo

- **Frontend:** [soroy-sa-socorro.vercel.app](https://soroy-sa-socorro.vercel.app/)
- **Backend API:** [Coming Soon]

## 🚀 Quick Start

### Prerequisites
- Node.js 18+
- pnpm (install with: `npm install -g pnpm`)
- PostgreSQL
- PHP (for frontend development)
- Redis (optional, for backend caching)

### Development Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com/johnmichealacera/suroy-socorro-v2-monorepo.git
   cd suroy-socorro-v2-monorepo
   ```

2. **Install all dependencies:**
   ```bash
   pnpm setup
   ```

3. **Start development:**
   ```bash
   # Start backend development server
   pnpm dev
   
   # Or start frontend (in another terminal)
   cd frontend
   ./run_server.sh
   ```

## 🛠️ Tech Stack

### Frontend
- **Languages:** HTML, CSS, JavaScript, PHP
- **Styling:** SCSS, Bootstrap
- **Deployment:** Vercel
- **Architecture:** Manual file structure (non-framework based)

### Backend
- **Framework:** NestJS (Node.js)
- **Language:** TypeScript
- **Database:** PostgreSQL
- **Caching:** Redis (optional)
- **Authentication:** JWT with Passport
- **Documentation:** Swagger/OpenAPI

## 📸 Features

### Frontend Features
- 🗺️ **Tourist Destinations** - Natural attractions and hidden gems
- 🏘️ **Barangay Directory** - Local officials and must-visit spots
- 🍲 **Local Delicacies** - Food culture showcase
- 🚐 **Travel Info** - Fee estimates and directions

### Backend Features
- 🔐 **Authentication & Authorization**
- 📊 **RESTful API** with comprehensive documentation
- 🗄️ **Database Management** with TypeORM
- 🖼️ **Image Processing** with Sharp
- 🚀 **Performance Optimizations** with caching

## 📚 Documentation

- [Frontend Documentation](./frontend/README.md) - Detailed frontend setup and features
- [Backend Documentation](./backend/README.md) - API setup and development guide

## 🚧 Project Status

This is a **capstone project** with focused scope. The application is functional but not actively maintained.

### Current Status:
- ✅ **Frontend**: Complete and deployed
- 🔄 **Backend**: In development (v0.0.1)
- 🎯 **Integration**: Planned for future versions

## 📦 Versioning

- **Monorepo Version**: 1.0.0
- **Frontend Version**: 1.0.0 (implied from working demo)
- **Backend Version**: 0.0.1 (early development)

## 🛠️ Development Scripts

### Root Level (pnpm commands)
```bash
pnpm dev          # Start backend development server
pnpm build        # Build backend for production
pnpm test         # Run backend tests
pnpm lint         # Run backend linting
pnpm format       # Format backend code
pnpm setup        # Install all dependencies
pnpm clean        # Clean all node_modules and build files
```

### Backend
```bash
cd backend
pnpm run start:dev    # Development server
pnpm run build        # Build for production
pnpm run test         # Run tests
```

### Frontend
```bash
cd frontend
./run_server.sh       # Start development server
./compile_scss.sh     # Compile SCSS to CSS
./watch_scss.sh       # Watch SCSS changes
```

## 📄 License

This project is under the [MIT License](./frontend/LICENSE.txt).

## 👨‍💻 Author

**John Micheal Acera**  
- 🌐 [Portfolio Website](https://johnmichealacera.vercel.app)
- 📬 [GitHub Profile](https://github.com/johnmichealacera)

## 🤝 Contributing

This is a capstone project, but suggestions and improvements are welcome. Please feel free to:
- Report bugs
- Suggest new features
- Submit pull requests

## 📞 Support

For questions or support, please reach out through:
- GitHub Issues: [Create an issue](https://github.com/johnmichealacera/suroy-socorro-v2-monorepo/issues)
- Email: [Contact through portfolio](https://johnmichealacera.vercel.app)

---

**🏝️ Explore the beauty of Socorro Island through this digital tourism platform!** 