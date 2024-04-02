import defaultTheme from "tailwindcss/defaultTheme";
import colors from "tailwindcss/colors";
import plugin from "tailwindcss/plugin";
import typography from "@tailwindcss/typography"; // https://github.com/tailwindlabs/tailwindcss-typography
import forms from "@tailwindcss/forms"; // https://github.com/tailwindlabs/tailwindcss-forms
import aspectRatio from "@tailwindcss/aspect-ratio"; // https://github.com/tailwindlabs/tailwindcss-aspect-ratio
import containerQueries from "@tailwindcss/container-queries"; // https://github.com/tailwindlabs/tailwindcss-container-queries
import debugScreens from "tailwindcss-debug-screens"; // https://github.com/jorenvanhee/tailwindcss-debug-screens
import maskImage from "@pyncz/tailwind-mask-image"; //https://github.com/pyncz/tailwind-mask-image
import { rem, em, hexToRgb } from "./helpers";

const customColors = {};

export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./app/**/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "class",
    safelist: ["no-scroll"],
    theme: {
        container: {
            center: true,
            padding: "1rem",
        },
        extend: {
            screens: {
                "3xl": "1600px",
            },
            colors: {
                ...customColors,
                primary: colors.blue,
                secondary: colors.stone,
                neutral: colors.gray,
                gray: colors.stone,
                success: colors.green,
                warning: colors.amber,
                danger: colors.red,
                info: colors.cyan,
            },
            fontFamily: {
                sans: [...defaultTheme.fontFamily.sans],
            },
            // Modify Prose styles.
            typography: (theme) => ({
                DEFAULT: {
                    css: {
                        maxWidth: "100ch",
                        figure: {
                            img: {
                                borderRadius: theme("borderRadius.md"),
                                boxShadow: theme("boxShadow.DEFAULT"),
                            },
                        },
                        a: {
                            fontWeight: "700",
                        },
                        "h1, h2, h3, h4, h5, h6": {
                            fontWeight: "900",
                        },
                        h1: {
                            fontSize: "var(--font-size-6xl)",
                        },
                        h2: {
                            fontSize: "var(--font-size-5xl)",
                        },
                        h3: {
                            fontSize: "var(--font-size-4xl)",
                        },
                        h4: {},
                    },
                },
            }),
        },
    },
    plugins: [
        typography,
        forms,
        aspectRatio,
        containerQueries,
        maskImage,
        debugScreens,
        plugin(function ({ addBase, addComponents, addUtilities, addVariant, theme }) {
            addVariant("hover-focus", ["&:hover", "&:focus"]);
            addBase({
                // Safari resize fix.
                minHeight: "0vw",
                // Better image reset
                img: {
                    maxWidth: "100%",
                    height: "auto",
                    verticalAlign: "middle",
                    fontStyle: "italic",
                    backgroundRepeat: "no-repeat",
                    backgroundSize: "cover",
                    shapeMargin: "0.75rem",
                },
                // Disable scroll e.g. when a modal is open. Should be used on the <body>
                ".no-scroll": {
                    height: "100%",
                    overflow: "hidden",
                },
                /**
                 * Remove the default box-shadow for invalid elements to prevent
                 * inputs in Livewire components showing with a
                 * red border by default in Firefox.
                 *
                 * See: https://github.com/laravel-frontend-presets/tall/issues/7
                 */
                "input:invalid, textarea:invalid, select:invalid": {
                    boxShadow: "none",
                },
            });
        }),
    ],
};
