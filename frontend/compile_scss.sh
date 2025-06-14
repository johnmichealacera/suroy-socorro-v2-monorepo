#!/bin/bash

# SCSS Compilation Script for Socorro Suroy App
echo "Compiling SCSS to CSS..."

# Compile main SCSS file
sass scss/style.scss public/css/style.scss.css

# Check if compilation was successful
if [ $? -eq 0 ]; then
    echo "✅ SCSS compiled successfully!"
    echo "📁 Output: public/css/style.scss.css"
    echo "📏 File size: $(ls -lh public/css/style.scss.css | awk '{print $5}')"
else
    echo "❌ SCSS compilation failed!"
    exit 1
fi

echo ""
echo "💡 To watch for changes and auto-compile, run:"
echo "   sass --watch scss:public/css" 