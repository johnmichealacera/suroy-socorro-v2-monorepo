#!/bin/bash

# SCSS Watch Script for Development
echo "🔍 Watching SCSS files for changes..."
echo "📁 Watching: scss/"
echo "📁 Output: public/css/"
echo ""
echo "Press Ctrl+C to stop watching"
echo ""

# Watch SCSS files and auto-compile
sass --watch scss:public/css 