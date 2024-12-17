import { createContext, useEffect, useState } from 'react';

type ThemeProviderProps = {
  children: React.ReactNode;
  defaultTheme?: string;
  storageKey?: string;
};

export type ThemeProviderState = {
  theme: string;
  setTheme: (theme: string) => void;
};

const initialState = {
  theme: 'system',
  setTheme: () => null,
};

export const ThemeProviderContext = createContext<ThemeProviderState>(initialState);

export function ThemeProvider({
  children,
  defaultTheme = 'dark', // Changed from 'system' to 'dark'
  storageKey = 'shadcn-ui-theme',
  ...props
}: ThemeProviderProps) {
  const [theme] = useState('dark'); // Force dark theme

  useEffect(() => {
    const root = window.document.documentElement;
    root.classList.remove('light', 'system');
    root.classList.add('dark');
  }, []); // Simplified effect

  return (
    <ThemeProviderContext.Provider
      {...props}
      value={{
        theme,
        setTheme: () => {}, // Empty function since we don't allow theme changes
      }}
    >
      {children}
    </ThemeProviderContext.Provider>
  );
}
