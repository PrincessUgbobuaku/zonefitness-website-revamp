# zonefitness-website-revamp

A modern redesign of the Zone Fitness website built with WordPress, featuring a custom theme, responsive layouts, reusable components, and an improved user experience.

## Compiling Sass

This theme has no webpack or `package.json`. The SCSS is compiled straight to CSS with Sass, and WordPress loads the compiled `css/main.css`. Edits to any `.scss` file do nothing until they are recompiled.

### Start the watcher

Open Git Bash in VS Code (Ctrl + `) from the theme folder and run:

```bash
npx sass --watch css/main.scss:css/main.css
```

Leave it running while you work. It recompiles `main.css` every time you save a `.scss` file. Press `Ctrl + C` to stop it.

When it's working, you'll see:

```
Compiled css\main.scss to css\main.css.
Sass is watching for changes. Press Ctrl-C to stop.
```

### Notes

- Don't use `npx webpack` or `npm run start`. This theme doesn't use them.
- The `if-function` deprecation warnings (in `_spacing.scss` and `_border-radius.scss`) are harmless. The CSS still compiles.
- After compiling, hard-refresh the browser (Ctrl + Shift + R).
- `js/animations.js` and `js/header.js` are plain JavaScript and need no build step.
