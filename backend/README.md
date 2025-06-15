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

## 🏗️ Project Structure

```
backend/
├── src/
│   ├── modules/           # Feature modules
│   │   ├── destinations/  # Tourist destinations
│   │   ├── delicacies/    # Local food
│   │   ├── barangays/     # Barangay information
│   │   └── auth/          # Authentication
│   ├── database/          # Database configuration
│   ├── common/            # Shared utilities
│   └── main.ts           # Application entry point
├── test/                 # Test files
├── dist/                 # Compiled output
└── package.json         # Dependencies and scripts
```

## 🛠️ Available Scripts

```bash
# Development
pnpm run start:dev      # Start in development mode
pnpm run start:debug    # Start in debug mode

# Production
pnpm run build          # Build the application
pnpm run start:prod     # Start in production mode

# Testing
pnpm run test           # Run unit tests
pnpm run test:watch     # Run tests in watch mode
pnpm run test:e2e       # Run end-to-end tests

# Code Quality
pnpm run lint           # Run ESLint
pnpm run format         # Format code with Prettier

# Database
pnpm run migration:generate  # Generate new migration
pnpm run migration:run       # Run pending migrations
pnpm run migration:revert    # Revert last migration
```

## 🔧 Configuration

### Environment Variables

Create a `.env` file with the following variables:

```env
# Database
DB_HOST=localhost
DB_PORT=5432
DB_USERNAME=your_username
DB_PASSWORD=your_password
DB_DATABASE=socorro_suroy

# JWT
JWT_SECRET=your_jwt_secret
JWT_EXPIRES_IN=24h

# Redis (optional)
REDIS_HOST=localhost
REDIS_PORT=6379

# Server
PORT=3001
NODE_ENV=development
```

## 📊 API Endpoints

### Destinations
- `GET /api/destinations` - Get all tourist destinations
- `GET /api/destinations/:id` - Get specific destination
- `POST /api/destinations` - Create new destination (admin only)
- `PUT /api/destinations/:id` - Update destination (admin only)
- `DELETE /api/destinations/:id` - Delete destination (admin only)

### Delicacies
- `GET /api/delicacies` - Get all local delicacies
- `GET /api/delicacies/:id` - Get specific delicacy
- `POST /api/delicacies` - Create new delicacy (admin only)
- `PUT /api/delicacies/:id` - Update delicacy (admin only)
- `DELETE /api/delicacies/:id` - Delete delicacy (admin only)

### Barangays
- `GET /api/barangays` - Get all barangays
- `GET /api/barangays/:id` - Get specific barangay
- `GET /api/barangays/:id/officials` - Get barangay officials

### Authentication
- `POST /api/auth/login` - User login
- `POST /api/auth/register` - User registration
- `GET /api/auth/profile` - Get user profile (protected)

## 🚧 Development Status

- **Current Version**: 0.0.1
- **Status**: Early development
- **Features**: Basic CRUD operations, authentication system
- **Next Steps**: Complete API endpoints, add image upload, implement caching

## 📄 License

This project is under the MIT License.

## 👨‍💻 Author

**John Micheal Acera**  
- [Portfolio](https://johnmichealacera.vercel.app)
- [GitHub](https://github.com/johnmichealacera)
