#!/bin/bash

# Socorro Suroy App - pnpm Setup Script
# This script helps set up the development environment with pnpm

echo "🏝️  Socorro Suroy App - pnpm Setup"
echo "=================================="

# Check if pnpm is installed
if ! command -v pnpm &> /dev/null; then
    echo "❌ pnpm is not installed!"
    echo "📦 Installing pnpm globally..."
    npm install -g pnpm
    echo "✅ pnpm installed successfully!"
else
    echo "✅ pnpm is already installed!"
fi

# Check Node.js version
NODE_VERSION=$(node --version | cut -d'v' -f2 | cut -d'.' -f1)
if [ "$NODE_VERSION" -lt 18 ]; then
    echo "❌ Node.js version 18+ is required!"
    echo "Current version: $(node --version)"
    exit 1
else
    echo "✅ Node.js version is compatible: $(node --version)"
fi

# Install dependencies
echo "📦 Installing dependencies..."
pnpm setup

echo ""
echo "🎉 Setup complete!"
echo ""
echo "🚀 Next steps:"
echo "  1. Start backend: pnpm dev"
echo "  2. Start frontend: cd frontend && ./run_server.sh"
echo ""
echo "📚 Available commands:"
echo "  pnpm dev     - Start backend development"
echo "  pnpm build   - Build backend for production"
echo "  pnpm test    - Run tests"
echo "  pnpm clean   - Clean all build files"
echo ""
echo "💡 Remember: Always use pnpm instead of npm!" 