# 🚀 pnpm Reminder Guide

## Why pnpm?

- **Faster** - Installs packages faster than npm
- **Efficient** - Uses symlinks instead of copying packages
- **Consistent** - Better dependency resolution
- **Monorepo Support** - Excellent workspace management
- **Disk Space** - Saves significant disk space

## Quick Reference

### Instead of npm, use pnpm:

```bash
# Project initialization
npm init          →  pnpm init

# Installing dependencies
npm install       →  pnpm install
npm i package     →  pnpm add package
npm i -D package  →  pnpm add -D package

# Running scripts
npm run dev       →  pnpm dev
npm run build     →  pnpm build
npm run test      →  pnpm test

# Removing packages
npm uninstall package  →  pnpm remove package
```

### Monorepo Commands:

```bash
# Run in specific package
pnpm --filter backend run dev

# Run in all packages
pnpm -r run build

# Add to specific package
pnpm --filter backend add express
```

## Setup Commands

```bash
# Quick setup
./scripts/setup-pnpm.sh

# Manual setup
pnpm setup
```

## Remember!

- ✅ Always use `pnpm` instead of `npm`
- ✅ Use `pnpm add` instead of `npm install package`
- ✅ Use `pnpm run` instead of `npm run`
- ✅ Use `pnpm dev` for development

## VS Code Tips

1. Install the "pnpm" extension
2. Set pnpm as default package manager in settings
3. Use the integrated terminal for pnpm commands

## Shell Aliases (Optional)

Add these to your `~/.bashrc` or `~/.zshrc`:

```bash
alias pn='pnpm'
alias pni='pnpm install'
alias pna='pnpm add'
alias pnad='pnpm add -D'
alias pnr='pnpm run'
alias pnd='pnpm run dev'
alias pnb='pnpm run build'
```

---

**💡 Tip: This project is configured to use pnpm. Always use pnpm commands!** 